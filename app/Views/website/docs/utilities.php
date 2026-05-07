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
                                                        <h1><?= lang('Docs.ut_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_intro') ?></p>
                                                </div>

                                                <!-- Alignment -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_align_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_align_desc') ?></p>
                                                </div>

                                                <!-- justify-content -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr">justify-content</h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.justify-start</code></td><td>justify-content: flex-start</td></tr>
                                                                                <tr><td><code>.justify-center</code></td><td>justify-content: center</td></tr>
                                                                                <tr><td><code>.justify-end</code></td><td>justify-content: flex-end</td></tr>
                                                                                <tr><td><code>.justify-between</code></td><td>justify-content: space-between</td></tr>
                                                                                <tr><td><code>.justify-around</code></td><td>justify-content: space-around</td></tr>
                                                                                <tr><td><code>.justify-evenly</code></td><td>justify-content: space-evenly</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">justify-center</p>
                                                                <div class="row fluid fl-sm-gap-8 justify-center">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">justify-between</p>
                                                                <div class="row fluid fl-sm-gap-8 justify-between">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- align-items -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr">align-items</h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.align-items-start</code></td><td>align-items: flex-start</td></tr>
                                                                                <tr><td><code>.align-items-center</code></td><td>align-items: center</td></tr>
                                                                                <tr><td><code>.align-items-end</code></td><td>align-items: flex-end</td></tr>
                                                                                <tr><td><code>.align-items-stretch</code></td><td>align-items: stretch</td></tr>
                                                                                <tr><td><code>.align-items-baseline</code></td><td>align-items: baseline</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">align-items-center</p>
                                                                <div class="row fluid fl-sm-gap-8 align-items-center" style="min-height:120px">
                                                                        <div class="fl-box fl-8"><div class="docs-example-box">Short</div></div>
                                                                        <div class="fl-box fl-8"><div class="docs-example-box" style="padding:32px 16px">Tall</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- align-content -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr">align-content</h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.align-content-start</code></td><td>align-content: flex-start</td></tr>
                                                                                <tr><td><code>.align-content-center</code></td><td>align-content: center</td></tr>
                                                                                <tr><td><code>.align-content-end</code></td><td>align-content: flex-end</td></tr>
                                                                                <tr><td><code>.align-content-between</code></td><td>align-content: space-between</td></tr>
                                                                                <tr><td><code>.align-content-around</code></td><td>align-content: space-around</td></tr>
                                                                                <tr><td><code>.align-content-stretch</code></td><td>align-content: stretch</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- place-center -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr">place-center</h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_place_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid place-center" style="min-height:200px"&gt;
  &lt;div class="fl-box fl-auto"&gt;Centered&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Visibility -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_visibility_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_visibility_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.hidden</code></td><td>display: none</td></tr>
                                                                                <tr><td><code>.visible</code></td><td>display: initial</td></tr>
                                                                                <tr><td><code>.visible-block</code></td><td>display: block</td></tr>
                                                                                <tr><td><code>.visible-flex</code></td><td>display: flex</td></tr>
                                                                                <tr><td><code>.visible-inline</code></td><td>display: inline</td></tr>
                                                                                <tr><td><code>.visible-inline-flex</code></td><td>display: inline-flex</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;!-- Hidden on mobile, visible from tablet --&gt;
&lt;div class="fl-sm-hidden fl-lg-visible"&gt;...&lt;/div&gt;

&lt;!-- Visible only on mobile --&gt;
&lt;div class="fl-lg-hidden"&gt;...&lt;/div&gt;

&lt;!-- Hidden until desktop, then show as flex --&gt;
&lt;div class="fl-sm-hidden fl-sp-visible-flex"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Padding -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_padding_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_padding_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="fl-box fl-sm-padding-8 fl-lg-padding-16 fl-sp-padding-32"&gt;
  Responsive padding
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_padding_values') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-8"><div class="docs-example-box fl-sm-padding-8">padding-8</div></div>
                                                                        <div class="fl-box fl-8"><div class="docs-example-box fl-sm-padding-24">padding-24</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Area -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_area_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_area_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;section class="fl-sm-area-32 fl-lg-area-48 fl-sp-area-64 fl-mg-area-96"&gt;
  Responsive vertical padding
&lt;/section&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_area_values') ?></p>
                                                </div>

                                                <!-- Text alignment -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_text_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_text_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.text-left</code></td><td>text-align: left</td></tr>
                                                                                <tr><td><code>.text-center</code></td><td>text-align: center</td></tr>
                                                                                <tr><td><code>.text-right</code></td><td>text-align: right</td></tr>
                                                                                <tr><td><code>.text-justify</code></td><td>text-align: justify</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;!-- Center on mobile, left from tablet --&gt;
&lt;div class="fl-sm-text-center fl-lg-text-left"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Order -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_order_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_order_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.order-{n}</code></td><td>order: n (-10 to 10)</td></tr>
                                                                                <tr><td><code>.order-first</code></td><td>order: -9999</td></tr>
                                                                                <tr><td><code>.order-last</code></td><td>order: 9999</td></tr>
                                                                                <tr><td><code>.order-reset</code></td><td>order: 0</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8"&gt;
  &lt;div class="fl-box fl-8 order-2"&gt;Second in HTML, shown second&lt;/div&gt;
  &lt;div class="fl-box fl-8 order-1"&gt;First in HTML, shown first&lt;/div&gt;
&lt;/div&gt;

&lt;!-- Responsive: reorder on desktop --&gt;
&lt;div class="fl-box fl-8 fl-sp-order-last"&gt;Last on desktop&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-8 order-2"><div class="docs-example-box">order-2 (HTML first)</div></div>
                                                                        <div class="fl-box fl-8 order-1"><div class="docs-example-box docs-example-box-alt">order-1 (HTML second)</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Position & fill -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_position_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_position_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.position-relative</code></td><td>position: relative</td></tr>
                                                                                <tr><td><code>.position-absolute</code></td><td>position: absolute</td></tr>
                                                                                <tr><td><code>.position-fixed</code></td><td>position: fixed</td></tr>
                                                                                <tr><td><code>.top-left</code></td><td>top: 0; left: 0</td></tr>
                                                                                <tr><td><code>.top-right</code></td><td>top: 0; right: 0</td></tr>
                                                                                <tr><td><code>.bottom-left</code></td><td>bottom: 0; left: 0</td></tr>
                                                                                <tr><td><code>.bottom-right</code></td><td>bottom: 0; right: 0</td></tr>
                                                                                <tr><td><code>.fill</code></td><td>width: 100%; height: 100%</td></tr>
                                                                                <tr><td><code>.fill-width</code></td><td>width: 100%</td></tr>
                                                                                <tr><td><code>.fill-height</code></td><td>height: 100%</td></tr>
                                                                                <tr><td><code>.fill-vp</code></td><td>width: 100vw; height: 100vh</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Z-index -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_zindex_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_zindex_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="position-relative z-index-2"&gt;Above&lt;/div&gt;
&lt;div class="position-relative z-index-1"&gt;Below&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Margin/padding reset -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.ut_reset_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.ut_reset_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.ut_col_class') ?></th>
                                                                                        <th><?= lang('Docs.ut_col_css') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr><td><code>.no-padding</code></td><td>padding: 0</td></tr>
                                                                                <tr><td><code>.no-padding-top</code></td><td>padding-top: 0</td></tr>
                                                                                <tr><td><code>.no-padding-bottom</code></td><td>padding-bottom: 0</td></tr>
                                                                                <tr><td><code>.no-padding-left</code></td><td>padding-left: 0</td></tr>
                                                                                <tr><td><code>.no-padding-right</code></td><td>padding-right: 0</td></tr>
                                                                                <tr><td><code>.no-margin</code></td><td>margin: 0</td></tr>
                                                                                <tr><td><code>.no-margin-top</code></td><td>margin-top: 0</td></tr>
                                                                                <tr><td><code>.no-margin-bottom</code></td><td>margin-bottom: 0</td></tr>
                                                                                <tr><td><code>.no-margin-left</code></td><td>margin-left: 0</td></tr>
                                                                                <tr><td><code>.no-margin-right</code></td><td>margin-right: 0</td></tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.ut_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/breakpoints') ?>" class="link on-dark"><?= lang('Docs.nav_breakpoints') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.ut_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/wireframe') ?>" class="link on-dark"><?= lang('Docs.nav_wireframe') ?></a>
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
