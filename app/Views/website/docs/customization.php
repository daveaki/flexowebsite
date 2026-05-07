<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= esc($title) ?> - <?= SITE_NAME ?></title>
                <meta name="description" content="<?= esc($description) ?>">
                <link rel="stylesheet" href="<?= base_url('assets/css/lib/flexo.min.css') ?>">
                <link rel="stylesheet" href="<?= base_url('assets/css/app.css') ?>">
                <script src="<?= base_url('assets/js/app.js') ?>" defer></script>
        </head>
        <body class="docs-page">
                <?= view('website/partial/header') ?>
                <div class="docs-wrapper">
                        <?= view('website/partial/docs-sidebar', ['slug' => $slug]) ?>
                        <main id="docs-content">
                                <div class="container fluid">
                                        <div class="row block fl-sm-gap-8 fl-lg-gap-16">
                                                <div class="fl-box fl-16">
                                                        <h1><?= lang('Docs.cust_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_intro') ?></p>
                                                </div>

                                                <!-- How to override -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_how_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_how_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                </div>
                                                                <pre><code>@use "@daveaki/flexocss/scss/config" with (
  $box: 12,
  $gapStep: 4,
  $containerBlock: 1200px
);
@use "@daveaki/flexocss/scss/flexo";</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Grid variables -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_grid_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_grid_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$box</code></td><td>16</td><td><?= lang('Docs.cust_var_box') ?></td></tr>
                                                                                <tr><td><code>$containerBlock</code></td><td>1420px</td><td><?= lang('Docs.cust_var_container') ?></td></tr>
                                                                                <tr><td><code>$containerBlockLM</code></td><td>1460px</td><td><?= lang('Docs.cust_var_containerLM') ?></td></tr>
                                                                                <tr><td><code>$flBoxPadding</code></td><td>0</td><td><?= lang('Docs.cust_var_boxpadding') ?></td></tr>
                                                                                <tr><td><code>$flBoxPaddingIn</code></td><td>8px 8px</td><td><?= lang('Docs.cust_var_boxpaddingin') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Breakpoints -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_bp_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_bp_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$bp</code></td><td>sm,md,lg,sp,mg,ut</td><td><?= lang('Docs.cust_var_bp') ?></td></tr>
                                                                                <tr><td><code>$mediaQuery</code></td><td>576px,768px,1024px,1420px,1860px</td><td><?= lang('Docs.cust_var_mq') ?></td></tr>
                                                                                <tr><td><code>$mediaQueryMAX</code></td><td>5000px</td><td><?= lang('Docs.cust_var_mqmax') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_bp_note') ?></p>
                                                </div>

                                                <!-- Gap & spacing -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_spacing_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_spacing_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$gapStep</code></td><td>8</td><td><?= lang('Docs.cust_var_gapstep') ?></td></tr>
                                                                                <tr><td><code>$gapNumber</code></td><td>10</td><td><?= lang('Docs.cust_var_gapnumber') ?></td></tr>
                                                                                <tr><td><code>$gapStepArea</code></td><td>16</td><td><?= lang('Docs.cust_var_areastep') ?></td></tr>
                                                                                <tr><td><code>$gapNumberArea</code></td><td>10</td><td><?= lang('Docs.cust_var_areanumber') ?></td></tr>
                                                                                <tr><td><code>$paddingStep</code></td><td>8</td><td><?= lang('Docs.cust_var_paddingstep') ?></td></tr>
                                                                                <tr><td><code>$paddingNumber</code></td><td>12</td><td><?= lang('Docs.cust_var_paddingnumber') ?></td></tr>
                                                                                <tr><td><code>$paddingArea</code></td><td>8px,24px,48px,64px,88px,112px</td><td><?= lang('Docs.cust_var_paddingarea') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_spacing_formula') ?></p>
                                                </div>

                                                <!-- Order -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_order_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$orderMin</code></td><td>-10</td><td><?= lang('Docs.cust_var_ordermin') ?></td></tr>
                                                                                <tr><td><code>$orderMax</code></td><td>10</td><td><?= lang('Docs.cust_var_ordermax') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Transitions -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_transition_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_transition_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$transition</code></td><td>true</td><td><?= lang('Docs.cust_var_transition') ?></td></tr>
                                                                                <tr><td><code>$transitionTime</code></td><td>400ms</td><td><?= lang('Docs.cust_var_transitiontime') ?></td></tr>
                                                                                <tr><td><code>$transitionEasing</code></td><td>ease-in-out</td><td><?= lang('Docs.cust_var_transitioneasing') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Font weights -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_font_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$fontWeightLight</code></td><td>200</td></tr>
                                                                                <tr><td><code>$fontWeightRegular</code></td><td>400</td></tr>
                                                                                <tr><td><code>$fontWeightBold</code></td><td>600</td></tr>
                                                                                <tr><td><code>$fontWeightBlack</code></td><td>800</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Misc -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_misc_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.cust_col_var') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_default') ?></th>
                                                                                        <th><?= lang('Docs.cust_col_desc') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$env</code></td><td>'dev'</td><td><?= lang('Docs.cust_var_env') ?></td></tr>
                                                                                <tr><td><code>$containerOverflowXHidden</code></td><td>1</td><td><?= lang('Docs.cust_var_overflow') ?></td></tr>
                                                                                <tr><td><code>$zIndex</code></td><td>0,10</td><td><?= lang('Docs.cust_var_zindex') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Full example -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.cust_full_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.cust_full_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                </div>
                                                                <pre><code>@use "@daveaki/flexocss/scss/config" with (
  $env: 'prod',
  $box: 12,
  $gapStep: 4,
  $gapNumber: 16,
  $containerBlock: 1200px,
  $containerBlockLM: 1400px,
  $transition: true,
  $transitionTime: 300ms,
  $transitionEasing: ease
);
@use "@daveaki/flexocss/scss/flexo";</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.cust_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/wireframe') ?>" class="link on-dark"><?= lang('Docs.nav_wireframe') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.cust_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url('scaffold-demo') ?>" class="link on-dark"><?= lang('Docs.nav_scaffold') ?></a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </main>
                </div>
                <?= view('website/partial/footer') ?>
        </body>
</html>
