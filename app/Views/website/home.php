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
    <body id="wireframe_" class="fill border-1 position-relative">
        <?= view('website/partial/header') ?>
        <div class="container fluid z-index-2 position-relative" id="jt">
            <div class="row block  fl-sm-gap-32 fl-sp-gap-40 fl-mg-gap-48 align-content-start justify-center text-center">
                <div class="fl-box fl-16">
                    <h1>
                        flexo
                    </h1>
                </div>
                <div class="fl-box fl-13 fl-sp-10 fl-mg-8">
                    <p class="color-white"><?= lang('Website.hero_tagline') ?></p>
                </div>
                <div class="fl-box fl-13 fl-sp-10 fl-mg-9">
                    <div class="row fluid fl-sm-gap-16  justify-center">
                        <div class="fl-box fl-8 fl-md-5">
                            <a href="<?= SITE_GITHUB ?>" target="_blank" class="btn on-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                     stroke-width="1" stroke-linecap="round"
                                     stroke-linejoin="round" class="lucide lucide-github-icon lucide-github icons">
                                <path d="M15 22v-4a4.8 4.8 0 0 0-1-3.5c3 0 6-2 6-5.5.08-1.25-.27-2.48-1-3.5.28-1.15.28-2.35 0-3.5 0 0-1 0-3 1.5-2.64-.5-5.36-.5-8 0C6 2 5 2 5 2c-.3 1.15-.3 2.35 0 3.5A5.403 5.403 0 0 0 4 9c0 3.5 3 5.5 6 5.5-.39.49-.68 1.05-.85 1.65-.17.6-.22 1.23-.15 1.85v4"/><path d="M9 18c-4.51 2-5-2-7-2"/>
                                </svg>
                                <span>
                                    Github
                                </span>
                            </a>
                        </div>
                        <div class="fl-box fl-8 fl-md-5">
                            <a href="<?= SITE_NPM ?>" target="_blank" class="btn on-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="icons">
                                <path d="M0 7.334v8h6.666v1.332H12v-1.332h12v-8H0zm6.666 6.664H5.334v-4H3.999v4H1.335V8.667h5.331v5.331zm4 0v1.336H8.001V8.667h5.334v5.331h-2.669zm12.001 0h-1.33v-4h-1.336v4h-1.335v-4h-1.33v4h-2.671V8.667h8.002v5.331zM10.665 10H12v2.667h-1.335V10z"/>
                                </svg>
                                <span>
                                    npm
                                </span>
                            </a>
                        </div>
                        <div class="fl-box fl-16 fl-md-5">
                            <a href="<?= base_url(service('request')->getLocale() . '/customize') ?>"  class="btn on-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cog-icon lucide-cog icons">
                                <path d="M11 10.27 7 3.34"/><path d="m11 13.73-4 6.93"/>
                                <path d="M12 22v-2"/><path d="M12 2v2"/>
                                <path d="M14 12h8"/><path d="m17 20.66-1-1.73"/>
                                <path d="m17 3.34-1 1.73"/><path d="M2 12h2"/>
                                <path d="m20.66 17-1.73-1"/><path d="m20.66 7-1.73 1"/>
                                <path d="m3.34 17 1.73-1"/><path d="m3.34 7 1.73 1"/><circle cx="12" cy="12" r="2"/><circle cx="12" cy="12" r="8"/>
                                </svg>
                                <span>
                                    <?= lang('Website.hero_btn_customize') ?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="bg-jt" class="z-index-1">
            <div class="container fluid fill-height">
                <div class="row block fl-sm-gap-8 fl-lg-gap-16 fl-mg-gap-24  fill-height align-items-end">
                    <div class="fl-box fl-auto gradient-white-v height1"></div>
                    <div class="fl-box fl-auto gradient-white-v height2"></div>
                    <div class="fl-box fl-auto gradient-white-v height3"></div>
                    <div class="fl-box fl-auto gradient-white-v height4"></div>
                    <div class="fl-box fl-auto gradient-white-v height5"></div>
                    <div class="fl-box fl-auto gradient-white-v height6"></div>

                    <div class="fl-box fl-auto gradient-white-v height6"></div>
                    <div class="fl-box fl-auto gradient-white-v height5"></div>
                    <div class="fl-box fl-auto gradient-white-v height4"></div>
                    <div class="fl-box fl-auto gradient-white-v height3"></div>
                    <div class="fl-box fl-auto gradient-white-v height2"></div>
                    <div class="fl-box fl-auto gradient-white-v height1"></div>

                </div>
            </div>
        </div>
        <section class="fl-sm-area-48 fl-lg-area-64 fl-sp-area-96 fl-mg-area-128 fl-ut-area-144" id="section-features">
            <div class="container fluid">
                <div class="row block fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32 justify-center">
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h2 class="color-dark"><?= lang('Website.features_title') ?></h2>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h3 class="color-pr">
                            <?= lang('Website.features_subtitle') ?>
                        </h3>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14 wrapper-box-dim">
                        <div class="row fluid fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32">
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_lightweight') ?></h4>
                                    <p><?= lang('Website.feat_lightweight_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_flexbox') ?></h4>
                                    <p><?= lang('Website.feat_flexbox_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_configurable') ?></h4>
                                    <p><?= lang('Website.feat_configurable_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_breakpoints') ?></h4>
                                    <p><?= lang('Website.feat_breakpoints_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_utility') ?></h4>
                                    <p><?= lang('Website.feat_utility_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_wireframe') ?></h4>
                                    <p><?= lang('Website.feat_wireframe_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_gap') ?></h4>
                                    <p><?= lang('Website.feat_gap_desc') ?></p>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8 fl-mg-5">
                                <div class="feature-card">
                                    <h4 class="bg-color-dark color-sec"><?= lang('Website.feat_zero_dep') ?></h4>
                                    <p><?= lang('Website.feat_zero_dep_desc') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fl-sm-area-48 fl-lg-area-64 fl-sp-area-96 fl-mg-area-128 fl-ut-area-144" id="section-dim-A">
            <div class="container fluid">
                <div class="row block fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32 justify-center">
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h2 class="color-dark"><?= lang('Website.scaffolding_title') ?></h2>
                    </div>
                    <div class="fl-box fl-13  fl-mg-12  fl-ut-14">
                        <h3 class="color-pr">
                            <?= lang('Website.scaffolding_subtitle') ?>
                        </h3>
                    </div>
                    <div class="fl-box fl-13  fl-mg-12  fl-ut-14 ">
                        <p class="dim">
                            <?= lang('Website.scaffolding_desc') ?>
                        </p>
                    </div>
                    <div class="fl-box fl-13  fl-mg-12  fl-ut-14 wrapper-box-dim">
                        <div class="row fluid fl-sm-gap-8 fl-mg-gap-16  justify-center">
                            <div class="fl-box fl-3 box-dimostration first-row bg-color-sec">

                            </div>
                            <div class="fl-box fl-5 box-dimostration first-row bg-color-sec">

                            </div>
                            <div class="fl-box fl-8 box-dimostration first-row bg-color-sec">

                            </div>

                            <div class="fl-box fl-3 box-dimostration ">
                                <div class="row fluid justify-center fill-height">
                                    <div class="fl-box fl-4 box-dimostration-inner">

                                    </div>
                                </div>
                                <div class="info-dim-A">Justify</div>
                            </div>
                            <div class="fl-box fl-2 box-dimostration">

                            </div>
                            <div class="fl-box fl-3 box-dimostration">

                            </div>
                            <div class="fl-box fl-8 box-dimostration">
                                <div class="row fluid justify-center fill-height  fl-sm-padding-8 fl-sp-padding-24">
                                    <div class="fl-box fl-auto box-dimostration-inner">

                                    </div>
                                </div>
                                <div class="info-dim-A">Padding</div>
                            </div>

                            <div class="fl-box fl-3 box-dimostration ">

                            </div>
                            <div class="fl-box fl-7 box-dimostration">
                                <div class="row fluid fl-sm-gap-16 justify-center fill-height">
                                    <div class="fl-box fl-5 box-dimostration-inner">

                                    </div>
                                    <div class="fl-box fl-4 box-dimostration-inner">

                                    </div>
                                    <div class="fl-box fl-7 box-dimostration-inner">

                                    </div>
                                </div>
                                <div class="info-dim-A">Nested</div>
                            </div>
                            <div class="fl-box fl-6 box-dimostration">
                                <div class="row fluid  justify-center align-content-center fill-height">
                                    <div class="fl-box fl-auto box-dimostration-inner fl-sm-padding-8 fl-sp-padding-16">

                                    </div>
                                </div>
                                <div class="info-dim-A">Align</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="fl-sm-area-48 fl-lg-area-64 fl-sp-area-96 fl-mg-area-128 fl-ut-area-144 bg-color-dark">
            <div class="container fluid">
                <div class="row block fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32 justify-center">
                    <div class="fl-box fl-13   fl-mg-12  fl-ut-14">
                        <h2 class="color-sec"><?= lang('Website.wireframe_title') ?></h2>
                    </div>
                    <div class="fl-box fl-13   fl-mg-12  fl-ut-14">
                        <h3 class="color-white">
                            <?= lang('Website.wireframe_subtitle') ?>
                        </h3>
                    </div>
                    <div class="fl-box fl-13  fl-mg-12  fl-ut-14">
                        <p class="color-white dim">
                            <?= lang('Website.wireframe_desc') ?>
                        </p>
                    </div>
                    <div class="fl-box fl-13  fl-mg-12  fl-ut-14 wrapper-box-dim">
                        <div class="row fluid fl-sm-gap-8 fl-mg-gap-16  justify-center">
                            <div class="fl-box fl-3 box-dimostration wf first-row ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-5 box-dimostration wf first-row ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-8 box-dimostration wf  first-row ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>

                            <div class="fl-box fl-3 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-2 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-3 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-8 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>

                            <div class="fl-box fl-3 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-7 box-dimostration wf ">
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                            <div class="fl-box fl-6 box-dimostration wf " >
                                <div class="info-dim-B">
                                    #bp info
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="fl-sm-area-48 fl-lg-area-64 fl-sp-area-96 fl-mg-area-128 fl-ut-area-144 bg-color-sec" id="section-breakpoints">
            <div class="container fluid">
                <div class="row block fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32 justify-center">
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h2 class="color-white"><?= lang('Website.bp_title') ?></h2>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h3 class="color-dark">
                            <?= lang('Website.bp_subtitle') ?>
                        </h3>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <p class="color-dark dim">
                            <?= lang('Website.bp_desc') ?>
                        </p>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14 wrapper-box-dim">
                        <div class="row fluid fl-sm-gap-8 fl-lg-gap-16">
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell bp-header">
                                        <span><?= lang('Website.bp_col_breakpoint') ?></span>
                                    </div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell bp-header">
                                        <span><?= lang('Website.bp_col_prefix') ?></span>
                                    </div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell bp-header">
                                        <span><?= lang('Website.bp_col_minwidth') ?></span>
                                    </div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell bp-header fl-sm-hidden fl-lg-visible">
                                        <span><?= lang('Website.bp_col_target') ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_small') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">sm</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>0px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_small') ?></span></div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_medium') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">md</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>576px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_medium') ?></span></div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_large') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">lg</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>768px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_large') ?></span></div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_special') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">sp</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>1024px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_special') ?></span></div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_mega') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">mg</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>1420px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_mega') ?></span></div>
                                </div>
                            </div>
                            <div class="fl-box fl-16 bp-row">
                                <div class="row fluid">
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span><?= lang('Website.bp_ultra') ?></span></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><code class="color-white">ut</code></div>
                                    <div class="fl-box fl-4 fl-lg-3 bp-cell"><span>1860px</span></div>
                                    <div class="fl-box fl-4 fl-lg-7 bp-cell fl-sm-hidden fl-lg-visible color-white"><span><?= lang('Website.bp_target_ultra') ?></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="fl-sm-area-48 fl-lg-area-64 fl-sp-area-96 fl-mg-area-128 fl-ut-area-144" id="section-get-started">
            <div class="container fluid">
                <div class="row block fl-sm-gap-16 fl-lg-gap-24 fl-mg-gap-32 justify-center">
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h2 class="color-dark"><?= lang('Website.getstarted_title') ?></h2>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <h3 class="color-pr">
                            <?= lang('Website.getstarted_subtitle') ?>
                        </h3>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14">
                        <p class="dim">
                            <?= lang('Website.getstarted_desc') ?>
                        </p>
                    </div>
                    <div class="fl-box fl-13 fl-mg-12 fl-ut-14 wrapper-box-dim">
                        <div class="row fluid fl-sm-gap-24 fl-mg-gap-32">
                            <div class="fl-box fl-16 fl-lg-8">
                                <div class="code-block">
                                    <div class="code-block-header">
                                        <span class="code-block-label">npm</span>
                                        <button class="btn-copy" data-copy="npm install @daveaki/flexocss">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                        </button>
                                    </div>
                                    <pre><code>npm install @daveaki/flexocss</code></pre>
                                </div>
                            </div>
                            <div class="fl-box fl-16 fl-lg-8">
                                <div class="code-block">
                                    <div class="code-block-header">
                                        <span class="code-block-label">CDN</span>
                                        <button class="btn-copy" data-copy='&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@daveaki/flexocss@<?= FLEXO_VERSION ?>/dist/flexo.min.css"&gt;'>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="14" height="14" x="8" y="8" rx="2" ry="2"/><path d="M4 16c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h10c1.1 0 2 .9 2 2"/></svg>
                                        </button>
                                    </div>
                                    <pre><code>&lt;link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@daveaki/flexocss@<?= FLEXO_VERSION ?>/dist/flexo.min.css"&gt;</code></pre>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?= view('website/partial/footer') ?>

    </body>
</html>
