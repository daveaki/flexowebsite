<?php

namespace App\Controllers;

use ScssPhp\ScssPhp\Compiler;

class Customize extends BaseController
{
    /**
     * Default SCSS variable values (mirrors _config.scss)
     */
    private array $defaults = [
        // Grid
        'box'              => '16',
        'bp'               => 'sm,md,lg,sp,mg,ut',
        'mediaQuery'       => '576px,768px,1024px,1420px,1860px',
        'containerBlock'   => '1420px',
        'containerBlockLM' => '1460px',
        'mediaQueryMAX'    => '5000px',

        // Gap
        'gapStep'          => '8',
        'gapNumber'        => '10',

        // Area
        'gapStepArea'      => '16',
        'gapNumberArea'    => '10',

        // Padding
        'paddingStep'      => '8',
        'paddingNumber'    => '12',

        // Order
        'orderMin'         => '-10',
        'orderMax'         => '10',

        // Box padding
        'flBoxPadding'     => '0',
        'flBoxPaddingIn'   => '8px 8px',
        'paddingArea'      => '8px,24px,48px,64px,88px,112px',

        // Font weights
        'fontWeightRegular' => '400',
        'fontWeightBold'    => '600',
        'fontWeightBlack'   => '800',
        'fontWeightLight'   => '200',

        // Transitions
        'transition'        => 'true',
        'transitionTime'    => '400ms',
        'transitionEasing'  => 'ease-in-out',

        // Utilities
        'containerOverflowXHidden' => '1',
        'zIndex'            => '0,10',

        // Environment
        'env'               => 'prod',
    ];

    public function index(): string
    {
        $data = [
            'title'       => lang('Website.customize_title'),
            'description' => lang('Website.customize_description'),
            'defaults'    => $this->defaults,
        ];

        return view('website/customize', $data);
    }

    public function compile()
    {
        $post = $this->request->getPost();
        $scssPath = FCPATH . 'assets/file/package-flexo/scss';

        // Build SCSS override string
        $overrides = $this->buildScssOverrides($post);

        // Read all SCSS source files
        $configContent = file_get_contents($scssPath . '/_config.scss');
        $mixinContent  = file_get_contents($scssPath . '/_mixin_components.scss');
        $resetContent  = file_get_contents($scssPath . '/_reset.scss');
        $mainContent   = file_get_contents($scssPath . '/flexo.scss');

        // Convert modern @use module syntax to legacy syntax for scssphp
        $files = [&$configContent, &$mixinContent, &$resetContent, &$mainContent];
        foreach ($files as &$content) {
            $content = $this->convertToLegacySyntax($content);
        }
        unset($content);

        // Build single SCSS bundle (overrides first so !default in config yields to them)
        $bundle  = "// === User overrides ===\n" . $overrides . "\n\n";
        $bundle .= "// === Config (defaults) ===\n" . $configContent . "\n\n";
        $bundle .= "// === Reset ===\n" . $resetContent . "\n\n";
        $bundle .= "// === Mixins ===\n" . $mixinContent . "\n\n";
        $bundle .= "// === Main ===\n" . $mainContent . "\n";

        try {
            ini_set('memory_limit', '256M');

            $compiler = new Compiler();
            $compiler->setImportPaths([$scssPath]);
            $compiler->setOutputStyle(\ScssPhp\ScssPhp\OutputStyle::COMPRESSED);

            $result = $compiler->compileString($bundle);
            $css = $result->getCss();

            // Add header comment
            $header = "/*!\n * Flexocss v" . FLEXO_VERSION . " — Custom Build\n * " . SITE_URL . "\n * Generated: " . date('Y-m-d H:i') . "\n * MIT License\n */\n\n";
            $css = $header . $css;

            return $this->response
                ->setHeader('Content-Type', 'text/css')
                ->setHeader('Content-Disposition', 'attachment; filename="flexo.css"')
                ->setBody($css);

        } catch (\Throwable $e) {
            log_message('error', 'Customize compile error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());
            return $this->response
                ->setStatusCode(500)
                ->setJSON([
                    'error'   => true,
                    'message' => $e->getMessage(),
                ]);
        }
    }

    /**
     * Build SCSS variable override declarations from POST data
     */
    private function buildScssOverrides(array $post): string
    {
        $lines = [];

        foreach ($this->defaults as $key => $default) {
            $value = trim($post[$key] ?? $default);

            // Always write env override — SCSS default is 'dev' but we want 'prod' as default output
            if ($key !== 'env' && $value === $default) {
                continue; // skip unchanged values
            }

            // Boolean fields
            if ($key === 'transition') {
                $lines[] = '$' . $key . ': ' . $value . ';';
                continue;
            }

            // Numeric fields (no quotes)
            if (in_array($key, [
                'box', 'gapStep', 'gapNumber', 'gapStepArea', 'gapNumberArea',
                'paddingStep', 'paddingNumber', 'orderMin', 'orderMax',
                'fontWeightRegular', 'fontWeightBold', 'fontWeightBlack', 'fontWeightLight',
                'containerOverflowXHidden', 'flBoxPadding',
            ])) {
                $lines[] = '$' . $key . ': ' . $value . ';';
                continue;
            }

            // List fields (comma-separated, unquoted)
            if (in_array($key, ['bp', 'mediaQuery', 'paddingArea', 'zIndex'])) {
                $lines[] = '$' . $key . ': ' . $value . ';';
                continue;
            }

            // String fields (need quotes in SCSS)
            if ($key === 'env') {
                $lines[] = '$' . $key . ': \'' . $value . '\';';
                continue;
            }

            // Everything else (px values, etc.)
            $lines[] = '$' . $key . ': ' . $value . ';';
        }

        return implode("\n", $lines);
    }

    /**
     * Convert modern Sass @use module syntax to legacy syntax compatible with scssphp.
     * - Strips @use statements
     * - Converts list.length() → length(), list.nth() → nth()
     * - Converts math.div(a,b) → (a / b), math.min() → min(), math.floor() → floor()
     * - Strips cfg., mc., reset. namespace prefixes
     */
    private function convertToLegacySyntax(string $scss): string
    {
        // Strip @use statements
        $scss = preg_replace('/@use\s+["\'][^"\']+["\'](\s+as\s+\w+)?(\s+with\s*\([^)]*\))?;?\s*\n?/', '', $scss);

        // Strip namespace prefixes for config, mixins, reset
        $scss = str_replace('cfg.$', '$', $scss);
        $scss = str_replace('mc.', '', $scss);
        $scss = str_replace('reset.', '', $scss);

        // Convert list module functions to legacy built-ins
        $scss = str_replace('list.length(', 'length(', $scss);
        $scss = str_replace('list.nth(', 'nth(', $scss);
        $scss = str_replace('list.index(', 'index(', $scss);
        $scss = str_replace('list.append(', 'append(', $scss);
        $scss = str_replace('list.join(', 'join(', $scss);

        // Convert math module functions to legacy built-ins
        $scss = preg_replace_callback('/math\.div\(([^,]+),\s*([^)]+)\)/', function ($m) {
            return '(' . trim($m[1]) . ' / ' . trim($m[2]) . ')';
        }, $scss);
        $scss = str_replace('math.min(', 'min(', $scss);
        $scss = str_replace('math.max(', 'max(', $scss);
        $scss = str_replace('math.floor(', 'floor(', $scss);
        $scss = str_replace('math.ceil(', 'ceil(', $scss);
        $scss = str_replace('math.round(', 'round(', $scss);
        $scss = str_replace('math.abs(', 'abs(', $scss);
        $scss = str_replace('math.percentage(', 'percentage(', $scss);

        return $scss;
    }
}
