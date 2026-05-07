<!DOCTYPE html>
<html lang="<?= service('request')->getLocale() ?>">
        <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title><?= esc($title) ?> - <?= SITE_NAME ?></title>
                <meta name="description" content="<?= esc($description) ?>">
                <link rel="stylesheet" href="<?= base_url('assets/css/lib/flexo.min.css') ?>">
                <link rel="icon" type="image/x-icon" href="<?= base_url('favicon.ico') ?>">
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
                                                        <h1><?= lang('Docs.wf_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_intro') ?></p>
                                                </div>

                                                <!-- Activation -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_activate_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_activate_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;body id="wireframe"&gt;
  ...
&lt;/body&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_activate_note') ?></p>
                                                </div>

                                                <!-- Modes -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_modes_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_modes_desc') ?></p>
                                                </div>

                                                <!-- Outline mode -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.wf_outline_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_outline_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;body id="wireframe"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
      &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/body&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <ul class="docs-list">
                                                                <li><code>.container</code> <?= lang('Docs.wf_outline_container') ?></li>
                                                                <li><code>.row</code> <?= lang('Docs.wf_outline_row') ?></li>
                                                                <li><code>.fl-box</code> <?= lang('Docs.wf_outline_box') ?></li>
                                                        </ul>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><strong><?= lang('Docs.wf_live_example') ?></strong></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="wf-demo wf-demo-outline">
                                                                <div class="wf-container">
                                                                        <div class="wf-row">
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                        </div>
                                                                        <div class="wf-row" style="margin-top: 16px;">
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                                <div class="wf-box">.fl-box .fl-6</div>
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Fill mode -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.wf_fill_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_fill_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;body id="wireframe" class="fill"&gt;
  ...
&lt;/body&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_fill_colors') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <ul class="docs-list">
                                                                <li><code>.container</code> <?= lang('Docs.wf_fill_container') ?></li>
                                                                <li><code>.row</code> <?= lang('Docs.wf_fill_row') ?></li>
                                                                <li><code>.fl-box</code> <?= lang('Docs.wf_fill_box') ?></li>
                                                        </ul>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><strong><?= lang('Docs.wf_live_example') ?></strong></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="wf-demo wf-demo-fill">
                                                                <div class="wf-container">
                                                                        <div class="wf-row">
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                        </div>
                                                                        <div class="wf-row" style="margin-top: 16px;">
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                                <div class="wf-box">.fl-box .fl-6</div>
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Border mode -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.wf_border_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_border_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;body id="wireframe" class="fill border-2"&gt;
  ...
&lt;/body&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><strong><?= lang('Docs.wf_live_example') ?></strong></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="wf-demo wf-demo-border">
                                                                <div class="wf-container">
                                                                        <div class="wf-row">
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                                <div class="wf-box">.fl-box .fl-8</div>
                                                                        </div>
                                                                        <div class="wf-row" style="margin-top: 16px;">
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                                <div class="wf-box">.fl-box .fl-6</div>
                                                                                <div class="wf-box">.fl-box .fl-5</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Info mode -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.wf_info_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_info_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;body id="wireframe" class="fill border-1 info"&gt;
  ...
&lt;/body&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_info_explain') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><strong><?= lang('Docs.wf_live_example') ?></strong></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="wf-demo wf-demo-info">
                                                                <div class="wf-container">
                                                                        <div class="wf-row">
                                                                                <div class="wf-box">
                                                                                        <span class="wf-label">*sm 8/16</span>
                                                                                        .fl-box .fl-8
                                                                                </div>
                                                                                <div class="wf-box">
                                                                                        <span class="wf-label">*sm 8/16</span>
                                                                                        .fl-box .fl-8
                                                                                </div>
                                                                        </div>
                                                                        <div class="wf-row" style="margin-top: 16px;">
                                                                                <div class="wf-box">
                                                                                        <span class="wf-label">*sm 5/16</span>
                                                                                        .fl-box .fl-5
                                                                                </div>
                                                                                <div class="wf-box">
                                                                                        <span class="wf-label">*sm 6/16</span>
                                                                                        .fl-box .fl-6
                                                                                </div>
                                                                                <div class="wf-box">
                                                                                        <span class="wf-label">*sm 5/16</span>
                                                                                        .fl-box .fl-5
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Combined example -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_combined_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_combined_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;!-- Outline only --&gt;
&lt;body id="wireframe"&gt;

&lt;!-- Filled backgrounds --&gt;
&lt;body id="wireframe" class="fill"&gt;

&lt;!-- Filled + 2px borders --&gt;
&lt;body id="wireframe" class="fill border-2"&gt;

&lt;!-- Full debug: fill + borders + info labels --&gt;
&lt;body id="wireframe" class="fill border-1 info"&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Scaffold example -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_scaffold_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_scaffold_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="wf-demo wf-demo-outline wf-demo-page">
                                                                <!-- Nav -->
                                                                <div class="wf-page-nav">
                                                                        <div class="wf-container">
                                                                                <div class="wf-row">
                                                                                        <div class="wf-box" style="flex: 0 0 auto; min-width: 72px;">logo</div>
                                                                                        <div class="wf-box" style="flex: 1;">nav links</div>
                                                                                        <div class="wf-box" style="flex: 0 0 auto; min-width: 56px;">cta</div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- Hero -->
                                                                <div class="wf-page-hero">
                                                                        <div class="wf-container">
                                                                                <div class="wf-row">
                                                                                        <div class="wf-box wf-box-hero">.fl-16 &mdash; hero</div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- 3-col features -->
                                                                <div class="wf-page-section">
                                                                        <div class="wf-container">
                                                                                <div class="wf-row">
                                                                                        <div class="wf-box">.fl-sm-16 .fl-lg-5</div>
                                                                                        <div class="wf-box">.fl-sm-16 .fl-lg-5</div>
                                                                                        <div class="wf-box">.fl-sm-16 .fl-lg-6</div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- 2-col content -->
                                                                <div class="wf-page-section wf-page-alt">
                                                                        <div class="wf-container">
                                                                                <div class="wf-row">
                                                                                        <div class="wf-box wf-box-tall">.fl-sm-16 .fl-lg-10</div>
                                                                                        <div class="wf-box wf-box-tall">.fl-sm-16 .fl-lg-6</div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- Footer -->
                                                                <div class="wf-page-footer">
                                                                        <div class="wf-container">
                                                                                <div class="wf-row">
                                                                                        <div class="wf-box">.fl-5</div>
                                                                                        <div class="wf-box">.fl-4</div>
                                                                                        <div class="wf-box">.fl-4</div>
                                                                                        <div class="wf-box">.fl-3</div>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Environment -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_env_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_env_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                </div>
                                                                <pre><code>// Wireframe enabled (default)
@use "@daveaki/flexocss/scss/config" with ($env: 'dev');

// Wireframe disabled for production
@use "@daveaki/flexocss/scss/config" with ($env: 'prod');</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_env_note') ?></p>
                                                </div>

                                                <!-- Customization -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.wf_custom_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.wf_custom_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.wf_col_var') ?></th>
                                                                                        <th><?= lang('Docs.wf_col_default') ?></th>
                                                                                        <th><?= lang('Docs.wf_col_role') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>$wireframeOutlineContainer</code></td><td>#1f2640</td><td><?= lang('Docs.wf_var_outline_container') ?></td></tr>
                                                                                <tr><td><code>$wireframeOutlineRow</code></td><td>#aa41c8</td><td><?= lang('Docs.wf_var_outline_row') ?></td></tr>
                                                                                <tr><td><code>$wireframeOutlineBox</code></td><td>#3f4b80</td><td><?= lang('Docs.wf_var_outline_box') ?></td></tr>
                                                                                <tr><td><code>$wireframeBgColorContainer</code></td><td>#1f2640</td><td><?= lang('Docs.wf_var_fill_container') ?></td></tr>
                                                                                <tr><td><code>$wireframeBgColorRow</code></td><td>#aa41c8</td><td><?= lang('Docs.wf_var_fill_row') ?></td></tr>
                                                                                <tr><td><code>$wireframeBgColorBox</code></td><td>#7d96ff</td><td><?= lang('Docs.wf_var_fill_box') ?></td></tr>
                                                                                <tr><td><code>$wireframeBgColorInfo</code></td><td>#1f2640</td><td><?= lang('Docs.wf_var_info_bg') ?></td></tr>
                                                                                <tr><td><code>$wireframeColorInfo</code></td><td>#e9eeff</td><td><?= lang('Docs.wf_var_info_text') ?></td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.wf_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/utilities') ?>" class="link on-dark"><?= lang('Docs.nav_utilities') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.wf_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/customization') ?>" class="link on-dark"><?= lang('Docs.nav_customization') ?></a>
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
