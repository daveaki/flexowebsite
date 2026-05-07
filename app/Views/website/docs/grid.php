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
                                                        <h1><?= lang('Docs.grid_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_intro') ?></p>
                                                </div>

                                                <!-- Container -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_container_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_container_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="container">Centered, max-width 1420px</div>
<div class="container fluid">Full width</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;!-- Centered, max-width 1420px --&gt;
&lt;div class="container"&gt;...&lt;/div&gt;

&lt;!-- Full width --&gt;
&lt;div class="container fluid"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Row -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_row_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_row_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="row">Wrapping flex row, max-width 1420px</div>
<div class="row fluid">Full width row</div>
<div class="row block">Stacked (column direction)</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row"&gt;...&lt;/div&gt;

&lt;div class="row fluid"&gt;...&lt;/div&gt;

&lt;div class="row block"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <ul class="docs-list">
                                                                <li><code>.row</code> <?= lang('Docs.grid_row_explain_row') ?></li>
                                                                <li><code>.row.fluid</code> <?= lang('Docs.grid_row_explain_fluid') ?></li>
                                                                <li><code>.row.block</code> <?= lang('Docs.grid_row_explain_block') ?></li>
                                                        </ul>
                                                </div>

                                                <!-- Columns -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_columns_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_columns_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="row fluid fl-sm-gap-8">
  <div class="fl-box fl-4">4/16</div>
  <div class="fl-box fl-4">4/16</div>
  <div class="fl-box fl-4">4/16</div>
  <div class="fl-box fl-4">4/16</div>
</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8"&gt;
  &lt;div class="fl-box fl-4"&gt;4/16&lt;/div&gt;
  &lt;div class="fl-box fl-4"&gt;4/16&lt;/div&gt;
  &lt;div class="fl-box fl-4"&gt;4/16&lt;/div&gt;
  &lt;div class="fl-box fl-4"&gt;4/16&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.grid_columns_example') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-6"><div class="docs-example-box">fl-6</div></div>
                                                                        <div class="fl-box fl-10"><div class="docs-example-box">fl-10</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-16"><div class="docs-example-box">fl-16</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Auto width -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_auto_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_auto_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="fl-box fl-auto">Equal width</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8"&gt;
  &lt;div class="fl-box fl-auto"&gt;Equal&lt;/div&gt;
  &lt;div class="fl-box fl-auto"&gt;Equal&lt;/div&gt;
  &lt;div class="fl-box fl-auto"&gt;Equal&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-auto"><div class="docs-example-box">fl-auto</div></div>
                                                                        <div class="fl-box fl-auto"><div class="docs-example-box">fl-auto</div></div>
                                                                        <div class="fl-box fl-auto"><div class="docs-example-box">fl-auto</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Gap -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_gap_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_gap_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="row fluid fl-sm-gap-16 fl-lg-gap-24 fl-sp-gap-32">
  <div class="fl-box fl-8">...</div>
  <div class="fl-box fl-8">...</div>
</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-16 fl-lg-gap-24 fl-sp-gap-32"&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_gap_explain') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.grid_gap_example') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">gap 0</p>
                                                                <div class="row fluid fl-sm-gap-0">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">gap 16</p>
                                                                <div class="row fluid fl-sm-gap-16">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <p class="docs-example-label">gap 32</p>
                                                                <div class="row fluid fl-sm-gap-32">
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Offset -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_offset_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_offset_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="fl-box fl-8 fl-offset-4">Offset by 4 columns</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8"&gt;
  &lt;div class="fl-box fl-8 fl-offset-4"&gt;Offset by 4&lt;/div&gt;
  &lt;div class="fl-box fl-4"&gt;No offset&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-8 fl-offset-4"><div class="docs-example-box">fl-8 fl-offset-4</div></div>
                                                                        <div class="fl-box fl-4"><div class="docs-example-box">fl-4</div></div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_offset_responsive') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="fl-box fl-12 fl-offset-2 fl-lg-offset-0"&gt;
  Offset on mobile, no offset on tablet+
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Nesting -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.grid_nesting_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.grid_nesting_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                        <button class="btn-copy" data-copy='<div class="row fluid fl-sm-gap-8">
  <div class="fl-box fl-10">
    <div class="row fluid fl-sm-gap-8">
      <div class="fl-box fl-8">Nested 8/16</div>
      <div class="fl-box fl-8">Nested 8/16</div>
    </div>
  </div>
  <div class="fl-box fl-6">6/16</div>
</div>'>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                                                        </button>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8"&gt;
  &lt;div class="fl-box fl-10"&gt;
    &lt;div class="row fluid fl-sm-gap-8"&gt;
      &lt;div class="fl-box fl-8"&gt;Nested 8/16&lt;/div&gt;
      &lt;div class="fl-box fl-8"&gt;Nested 8/16&lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class="fl-box fl-6"&gt;6/16&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-10">
                                                                                <div class="row fluid fl-sm-gap-8">
                                                                                        <div class="fl-box fl-8"><div class="docs-example-box docs-example-box-alt">Nested 8/16</div></div>
                                                                                        <div class="fl-box fl-8"><div class="docs-example-box docs-example-box-alt">Nested 8/16</div></div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-6"><div class="docs-example-box">6/16</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.grid_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/getting-started') ?>" class="link on-dark"><?= lang('Docs.nav_getting_started') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.grid_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/gap-and-area') ?>" class="link on-dark"><?= lang('Docs.nav_gap_and_area') ?></a>
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
