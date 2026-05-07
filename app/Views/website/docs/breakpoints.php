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
                                                        <h1><?= lang('Docs.bp_title') ?></h1>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_intro') ?></p>
                                                </div>

                                                <!-- Table -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.bp_table_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-table-wrapper">
                                                                <table class="docs-table">
                                                                        <thead>
                                                                                <tr>
                                                                                        <th><?= lang('Docs.bp_col_name') ?></th>
                                                                                        <th><?= lang('Docs.bp_col_prefix') ?></th>
                                                                                        <th><?= lang('Docs.bp_col_min') ?></th>
                                                                                        <th><?= lang('Docs.bp_col_target') ?></th>
                                                                                </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                <tr>
                                                                                        <td>Small</td>
                                                                                        <td><code>sm</code></td>
                                                                                        <td>0px</td>
                                                                                        <td><?= lang('Docs.bp_target_sm') ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Medium</td>
                                                                                        <td><code>md</code></td>
                                                                                        <td>576px</td>
                                                                                        <td><?= lang('Docs.bp_target_md') ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Large</td>
                                                                                        <td><code>lg</code></td>
                                                                                        <td>768px</td>
                                                                                        <td><?= lang('Docs.bp_target_lg') ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Super</td>
                                                                                        <td><code>sp</code></td>
                                                                                        <td>1024px</td>
                                                                                        <td><?= lang('Docs.bp_target_sp') ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Mega</td>
                                                                                        <td><code>mg</code></td>
                                                                                        <td>1420px</td>
                                                                                        <td><?= lang('Docs.bp_target_mg') ?></td>
                                                                                </tr>
                                                                                <tr>
                                                                                        <td>Ultra</td>
                                                                                        <td><code>ut</code></td>
                                                                                        <td>1860px</td>
                                                                                        <td><?= lang('Docs.bp_target_ut') ?></td>
                                                                                </tr>
                                                                        </tbody>
                                                                </table>
                                                        </div>
                                                </div>

                                                <!-- Mobile first -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.bp_mobile_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_mobile_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;!-- Full width on mobile, half on tablet, third on desktop --&gt;
&lt;div class="fl-box fl-16 fl-lg-8 fl-sp-5"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_mobile_explain') ?></p>
                                                </div>

                                                <!-- Class pattern -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.bp_pattern_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_pattern_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">Pattern</span>
                                                                </div>
                                                                <pre><code>fl-{breakpoint}-{property}-{value}

fl-sm-gap-16        /* gap 16px from small up */
fl-lg-gap-24        /* gap 24px from large up */
fl-sp-padding-32    /* padding 32px from super up */
fl-mg-area-64       /* vertical area 64px from mega up */
fl-ut-hidden        /* hidden from ultra up */</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Responsive examples -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.bp_examples_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_examples_desc') ?></p>
                                                </div>

                                                <!-- Gap responsive -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.bp_ex_gap_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;div class="row fluid fl-sm-gap-8 fl-lg-gap-16 fl-sp-gap-24 fl-mg-gap-32"&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
  &lt;div class="fl-box fl-8"&gt;...&lt;/div&gt;
&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8 fl-lg-gap-16 fl-sp-gap-24 fl-mg-gap-32">
                                                                        <div class="fl-box fl-8"><div class="docs-example-box">fl-8</div></div>
                                                                        <div class="fl-box fl-8"><div class="docs-example-box">fl-8</div></div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Visibility responsive -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.bp_ex_visibility_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_ex_visibility_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;!-- Hidden on mobile, visible from tablet --&gt;
&lt;div class="fl-sm-hidden fl-lg-visible"&gt;...&lt;/div&gt;

&lt;!-- Visible on mobile, hidden from tablet --&gt;
&lt;div class="fl-lg-hidden"&gt;...&lt;/div&gt;</code></pre>
                                                        </div>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="docs-example">
                                                                <div class="row fluid fl-sm-gap-8">
                                                                        <div class="fl-box fl-16 fl-sm-hidden fl-lg-visible">
                                                                                <div class="docs-example-box"><?= lang('Docs.bp_ex_visibility_tablet') ?></div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-lg-hidden">
                                                                                <div class="docs-example-box docs-example-box-alt"><?= lang('Docs.bp_ex_visibility_mobile') ?></div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Area responsive -->
                                                <div class="fl-box fl-16">
                                                        <h3 class="color-pr"><?= lang('Docs.bp_ex_area_title') ?></h3>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_ex_area_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">HTML</span>
                                                                </div>
                                                                <pre><code>&lt;section class="fl-sm-area-32 fl-lg-area-48 fl-sp-area-64 fl-mg-area-96"&gt;
  ...
&lt;/section&gt;</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Customization note -->
                                                <div class="fl-box fl-16">
                                                        <h2><?= lang('Docs.bp_custom_title') ?></h2>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <p><?= lang('Docs.bp_custom_desc') ?></p>
                                                </div>
                                                <div class="fl-box fl-16">
                                                        <div class="code-block">
                                                                <div class="code-block-header">
                                                                        <span class="code-block-label">SCSS</span>
                                                                </div>
                                                                <pre><code>@use "@daveaki/flexocss/scss/config" with (
  $bp: sm,md,lg,sp,mg,ut,
  $mediaQuery: 576px,768px,1024px,1420px,1860px
);
@use "@daveaki/flexocss/scss/flexo";</code></pre>
                                                        </div>
                                                </div>

                                                <!-- Prev / Next -->
                                                <div class="fl-box fl-16">
                                                        <div class="docs-nav-row">
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label">&larr; <?= lang('Docs.bp_prev') ?></span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/gap-and-area') ?>" class="link on-dark"><?= lang('Docs.nav_gap_and_area') ?></a>
                                                                </div>
                                                                <div class="docs-nav-box">
                                                                        <span class="docs-nav-label"><?= lang('Docs.bp_next') ?> &rarr;</span>
                                                                        <a href="<?= base_url(service('request')->getLocale() . '/docs/utilities') ?>" class="link on-dark"><?= lang('Docs.nav_utilities') ?></a>
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
