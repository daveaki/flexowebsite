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
                                                        <h1><?= lang('Docs.gap_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_intro') ?></p>
                                                </div>

                                                <!-- Gap -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gap_gap_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_gap_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="row fl-sm-gap-8 fl-lg-gap-16 fl-sp-gap-24 fl-mg-gap-32"&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_gap_values') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gap_gap_example') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p class="docs-example-label">gap 0</p>
                                                        <div class="row fluid fl-sm-gap-0">
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p class="docs-example-label">gap 16</p>
                                                        <div class="row fluid fl-sm-gap-16">
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p class="docs-example-label">gap 32</p>
                                                        <div class="row fluid fl-sm-gap-32">
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_gap_explain') ?></p>
                                                </div>

                                                <!-- Padding -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gap_padding_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_padding_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="fl-box fl-sm-padding-16 fl-lg-padding-24 fl-sp-padding-32"&gt;
  ...
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_padding_values') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gap_padding_example') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="row fluid fl-sm-gap-16">
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">padding-0</p>
                                                                        <div class="docs-example-box" style="padding:0;text-align:center;">fl-sm-padding-0</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">padding-16</p>
                                                                        <div class="fl-sm-padding-16 docs-example-box" style="box-sizing:border-box;">fl-sm-padding-16</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">padding-32</p>
                                                                        <div class="fl-sm-padding-32 docs-example-box" style="box-sizing:border-box;">fl-sm-padding-32</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">padding-48</p>
                                                                        <div class="fl-sm-padding-48 docs-example-box" style="box-sizing:border-box;">fl-sm-padding-48</div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.gap_col_class') ?></th>
                                                                                        <th><?= lang('Docs.gap_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.fl-{bp}-padding-0</code></td><td>padding: 0</td></tr>
                                                                                <tr><td><code>.fl-{bp}-padding-8</code></td><td>padding: 8px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-padding-16</code></td><td>padding: 16px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-padding-24</code></td><td>padding: 24px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-padding-32</code></td><td>padding: 32px</td></tr>
                                                                                <tr><td><code>...</code></td><td><?= lang('Docs.gap_up_to') ?> 96px</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Area -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gap_area_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_area_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;section class="fl-sm-area-32 fl-lg-area-48 fl-sp-area-64 fl-mg-area-96"&gt;
  &lt;div class="container"&gt;
    &lt;div class="row"&gt;
      ...
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/section&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_area_values') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gap_area_example') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="row fluid fl-sm-gap-16">
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">area-0</p>
                                                                        <div class="fl-sm-area-0 docs-example-box" style="box-sizing:border-box;text-align:center;">area-0</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">area-32</p>
                                                                        <div class="fl-sm-area-32 docs-example-box" style="box-sizing:border-box;text-align:center;">area-32</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">area-64</p>
                                                                        <div class="fl-sm-area-64 docs-example-box" style="box-sizing:border-box;text-align:center;">area-64</div>
                                                                </div>
                                                                <div class="fl-box fl-16 fl-lg-8 fl-sp-4">
                                                                        <p class="docs-example-label">area-96</p>
                                                                        <div class="fl-sm-area-96 docs-example-box" style="box-sizing:border-box;text-align:center;">area-96</div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.gap_col_class') ?></th>
                                                                                        <th><?= lang('Docs.gap_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.fl-{bp}-area-0</code></td><td>padding-top: 0; padding-bottom: 0</td></tr>
                                                                                <tr><td><code>.fl-{bp}-area-16</code></td><td>padding-top: 16px; padding-bottom: 16px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-area-32</code></td><td>padding-top: 32px; padding-bottom: 32px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-area-48</code></td><td>padding-top: 48px; padding-bottom: 48px</td></tr>
                                                                                <tr><td><code>.fl-{bp}-area-64</code></td><td>padding-top: 64px; padding-bottom: 64px</td></tr>
                                                                                <tr><td><code>...</code></td><td><?= lang('Docs.gap_up_to') ?> 160px</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gap_area_explain') ?></p>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.gap_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/grid') ?>" class="link on-dark"><?= lang('Docs.nav_grid') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.gap_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/breakpoints') ?>" class="link on-dark"><?= lang('Docs.nav_breakpoints') ?></a>
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
