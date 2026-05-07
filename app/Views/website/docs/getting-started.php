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
                                                        <h1><?= lang('Docs.gs_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_intro') ?></p>
                                                </div>

                                                <!-- Installation -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gs_install_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_install_desc') ?></p>
                                                </div>

                                                <!-- npm -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gs_npm_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_npm_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">Terminal</span>
                                                                        <button class="btn-copy" data-copy="npm install @daveaki/flexocss">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>npm install @daveaki/flexocss</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_npm_import') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                        <button class="btn-copy" data-copy='@use "@daveaki/flexocss/scss/flexo";'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>@use "@daveaki/flexocss/scss/flexo";</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_npm_override') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                        <button class="btn-copy" data-copy='@use "@daveaki/flexocss/scss/config" with ($box: 12, $gapStep: 4);'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>@use "@daveaki/flexocss/scss/config" with (
  $box: 12,
  $gapStep: 4
);
@use "@daveaki/flexocss/scss/flexo";</code></pre>
                                                        </div>
                                                </div>

                                                <!-- CDN -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gs_cdn_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_cdn_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@daveaki/flexocss@<?= FLEXO_VERSION ?>/dist/flexo.min.css"&gt;'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@daveaki/flexocss@<?= FLEXO_VERSION ?>/dist/flexo.min.css"&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Basic structure -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gs_structure_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_structure_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="container">
  <div class="row">
    <div class="fl-box fl-8">Column 8/16</div>
    <div class="fl-box fl-8">Column 8/16</div>
  </div>
</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="container"&gt;
  &lt;div class="row"&gt;
    &lt;div class="fl-box fl-8"&gt;Column 8/16&lt;/div&gt;
    &lt;div class="fl-box fl-8"&gt;Column 8/16&lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Live example -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.gs_example_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-8">
                                                                                <div class="docs-example-box">fl-8</div>
                                                                        </div>
                                                                        <div class="fl-box fl-8">
                                                                                <div class="docs-example-box">fl-8</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Explanation -->
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_structure_explain') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <ul class="docs-list">
                                                                <li><code>.container</code> <?= lang('Docs.gs_explain_container') ?></li>
                                                                <li><code>.container.fluid</code> <?= lang('Docs.gs_explain_fluid') ?></li>
                                                                <li><code>.row</code> <?= lang('Docs.gs_explain_row') ?></li>
                                                                <li><code>.fl-box</code> <?= lang('Docs.gs_explain_box') ?></li>
                                                                <li><code>.fl-{n}</code> <?= lang('Docs.gs_explain_col') ?></li>
                                                        </ul>
                                                </div>

                                                <!-- Responsive example -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.gs_responsive_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_responsive_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="fl-box fl-16 fl-lg-8 fl-sp-5">
  Responsive column
</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="fl-box fl-16 fl-lg-8 fl-sp-5"&gt;
  Responsive column
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.gs_responsive_explain') ?></p>
                                                </div>

                                                <!-- Live responsive example -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-16 fl-lg-8 fl-sp-5">
                                                                                <div class="docs-example-box">fl-16 fl-lg-8 fl-sp-5</div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-lg-8 fl-sp-5">
                                                                                <div class="docs-example-box">fl-16 fl-lg-8 fl-sp-5</div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-lg-16 fl-sp-6">
                                                                                <div class="docs-example-box">fl-16 fl-lg-16 fl-sp-6</div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box disabled">
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.gs_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/grid') ?>" class="link on-dark"><?= lang('Docs.nav_grid') ?></a>
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
