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
        <body class="contact-page keep-scrolled">
                <?= view('website/partial/header') ?>

                <section class="customize-section">
                        <div class="container">
                                <div class="row fl-sm-gap-0 fl-sm-justify-center">
                                        <div class="fl-box fl-16 fl-sp-14">
                                                <div class="customize-header">
                                                        <h2><?= lang('Website.customize_hero_title') ?></h2>
                                                        <p><?= lang('Website.customize_hero_desc') ?></p>
                                                </div>
                                        </div>
                                </div>

                                <form id="customize-form" action="<?= base_url(service('request')->getLocale() . '/customize/compile') ?>" method="post">
                                        <?= csrf_field() ?>
                                        <div class="row fl-sm-gap-24 fl-lg-gap-32 fl-sm-justify-center">

                                                <!-- Grid -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/></svg>
                                                                        <?= lang('Website.customize_grid') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-4">
                                                                                <div class="form-group">
                                                                                        <label for="box"><?= lang('Website.customize_box') ?></label>
                                                                                        <input type="number" id="box" name="box" value="<?= esc($defaults['box']) ?>" min="1" max="32">
                                                                                        <span class="form-hint"><?= lang('Website.customize_box_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-4">
                                                                                <div class="form-group">
                                                                                        <label for="containerBlock"><?= lang('Website.customize_container') ?></label>
                                                                                        <input type="text" id="containerBlock" name="containerBlock" value="<?= esc($defaults['containerBlock']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_container_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-4">
                                                                                <div class="form-group">
                                                                                        <label for="containerBlockLM"><?= lang('Website.customize_container_lm') ?></label>
                                                                                        <input type="text" id="containerBlockLM" name="containerBlockLM" value="<?= esc($defaults['containerBlockLM']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_container_lm_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-4">
                                                                                <div class="form-group">
                                                                                        <label for="mediaQueryMAX"><?= lang('Website.customize_mq_max') ?></label>
                                                                                        <input type="text" id="mediaQueryMAX" name="mediaQueryMAX" value="<?= esc($defaults['mediaQueryMAX']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_mq_max_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Breakpoints -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="3" width="20" height="14" rx="2" ry="2"/><line x1="8" y1="21" x2="16" y2="21"/><line x1="12" y1="17" x2="12" y2="21"/></svg>
                                                                        <?= lang('Website.customize_breakpoints') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-16 fl-lg-8">
                                                                                <div class="form-group">
                                                                                        <label for="bp"><?= lang('Website.customize_bp_names') ?></label>
                                                                                        <input type="text" id="bp" name="bp" value="<?= esc($defaults['bp']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_bp_names_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-lg-8">
                                                                                <div class="form-group">
                                                                                        <label for="mediaQuery"><?= lang('Website.customize_bp_widths') ?></label>
                                                                                        <input type="text" id="mediaQuery" name="mediaQuery" value="<?= esc($defaults['mediaQuery']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_bp_widths_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Gap & Area -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 3H3v7h18V3z"/><path d="M21 14H3v7h18v-7z"/></svg>
                                                                        <?= lang('Website.customize_gap_area') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="gapStep"><?= lang('Website.customize_gap_step') ?></label>
                                                                                        <input type="number" id="gapStep" name="gapStep" value="<?= esc($defaults['gapStep']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_gap_step_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="gapNumber"><?= lang('Website.customize_gap_number') ?></label>
                                                                                        <input type="number" id="gapNumber" name="gapNumber" value="<?= esc($defaults['gapNumber']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_gap_number_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="gapStepArea"><?= lang('Website.customize_area_step') ?></label>
                                                                                        <input type="number" id="gapStepArea" name="gapStepArea" value="<?= esc($defaults['gapStepArea']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_area_step_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="gapNumberArea"><?= lang('Website.customize_area_number') ?></label>
                                                                                        <input type="number" id="gapNumberArea" name="gapNumberArea" value="<?= esc($defaults['gapNumberArea']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_area_number_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Padding -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v18"/><path d="M3 12h18"/></svg>
                                                                        <?= lang('Website.customize_padding') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="paddingStep"><?= lang('Website.customize_padding_step') ?></label>
                                                                                        <input type="number" id="paddingStep" name="paddingStep" value="<?= esc($defaults['paddingStep']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_padding_step_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="paddingNumber"><?= lang('Website.customize_padding_number') ?></label>
                                                                                        <input type="number" id="paddingNumber" name="paddingNumber" value="<?= esc($defaults['paddingNumber']) ?>" min="1">
                                                                                        <span class="form-hint"><?= lang('Website.customize_padding_number_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-8">
                                                                                <div class="form-group">
                                                                                        <label for="paddingArea"><?= lang('Website.customize_padding_area') ?></label>
                                                                                        <input type="text" id="paddingArea" name="paddingArea" value="<?= esc($defaults['paddingArea']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_padding_area_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="flBoxPadding"><?= lang('Website.customize_box_padding') ?></label>
                                                                                        <input type="text" id="flBoxPadding" name="flBoxPadding" value="<?= esc($defaults['flBoxPadding']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_box_padding_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="flBoxPaddingIn"><?= lang('Website.customize_box_padding_in') ?></label>
                                                                                        <input type="text" id="flBoxPaddingIn" name="flBoxPaddingIn" value="<?= esc($defaults['flBoxPaddingIn']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_box_padding_in_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Order -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="15" y2="12"/><line x1="3" y1="18" x2="9" y2="18"/></svg>
                                                                        <?= lang('Website.customize_order') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="orderMin"><?= lang('Website.customize_order_min') ?></label>
                                                                                        <input type="number" id="orderMin" name="orderMin" value="<?= esc($defaults['orderMin']) ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="orderMax"><?= lang('Website.customize_order_max') ?></label>
                                                                                        <input type="number" id="orderMax" name="orderMax" value="<?= esc($defaults['orderMax']) ?>">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Font Weights -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="4 7 4 4 20 4 20 7"/><line x1="9" y1="20" x2="15" y2="20"/><line x1="12" y1="4" x2="12" y2="20"/></svg>
                                                                        <?= lang('Website.customize_fonts') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="fontWeightLight"><?= lang('Website.customize_fw_light') ?></label>
                                                                                        <input type="number" id="fontWeightLight" name="fontWeightLight" value="<?= esc($defaults['fontWeightLight']) ?>" min="100" max="900" step="100">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="fontWeightRegular"><?= lang('Website.customize_fw_regular') ?></label>
                                                                                        <input type="number" id="fontWeightRegular" name="fontWeightRegular" value="<?= esc($defaults['fontWeightRegular']) ?>" min="100" max="900" step="100">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="fontWeightBold"><?= lang('Website.customize_fw_bold') ?></label>
                                                                                        <input type="number" id="fontWeightBold" name="fontWeightBold" value="<?= esc($defaults['fontWeightBold']) ?>" min="100" max="900" step="100">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="fontWeightBlack"><?= lang('Website.customize_fw_black') ?></label>
                                                                                        <input type="number" id="fontWeightBlack" name="fontWeightBlack" value="<?= esc($defaults['fontWeightBlack']) ?>" min="100" max="900" step="100">
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Transitions -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14"/><path d="M12 5l7 7-7 7"/></svg>
                                                                        <?= lang('Website.customize_transitions') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-16 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="transition"><?= lang('Website.customize_transition_enabled') ?></label>
                                                                                        <select id="transition" name="transition">
                                                                                                <option value="true" <?= $defaults['transition'] === 'true' ? 'selected' : '' ?>><?= lang('Website.customize_yes') ?></option>
                                                                                                <option value="false" <?= $defaults['transition'] === 'false' ? 'selected' : '' ?>><?= lang('Website.customize_no') ?></option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="transitionTime"><?= lang('Website.customize_transition_time') ?></label>
                                                                                        <input type="text" id="transitionTime" name="transitionTime" value="<?= esc($defaults['transitionTime']) ?>">
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-8 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="transitionEasing"><?= lang('Website.customize_transition_easing') ?></label>
                                                                                        <select id="transitionEasing" name="transitionEasing">
                                                                                                <option value="ease-in-out" <?= $defaults['transitionEasing'] === 'ease-in-out' ? 'selected' : '' ?>>ease-in-out</option>
                                                                                                <option value="ease" <?= $defaults['transitionEasing'] === 'ease' ? 'selected' : '' ?>>ease</option>
                                                                                                <option value="ease-in" <?= $defaults['transitionEasing'] === 'ease-in' ? 'selected' : '' ?>>ease-in</option>
                                                                                                <option value="ease-out" <?= $defaults['transitionEasing'] === 'ease-out' ? 'selected' : '' ?>>ease-out</option>
                                                                                                <option value="linear" <?= $defaults['transitionEasing'] === 'linear' ? 'selected' : '' ?>>linear</option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Utilities -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-group">
                                                                <h4 class="customize-group-title">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                                                                        <?= lang('Website.customize_utilities') ?>
                                                                </h4>
                                                                <div class="row fl-sm-gap-16 fl-lg-gap-24">
                                                                        <div class="fl-box fl-16 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="containerOverflowXHidden"><?= lang('Website.customize_overflow') ?></label>
                                                                                        <select id="containerOverflowXHidden" name="containerOverflowXHidden">
                                                                                                <option value="1" <?= $defaults['containerOverflowXHidden'] === '1' ? 'selected' : '' ?>><?= lang('Website.customize_yes') ?></option>
                                                                                                <option value="0" <?= $defaults['containerOverflowXHidden'] === '0' ? 'selected' : '' ?>><?= lang('Website.customize_no') ?></option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="zIndex"><?= lang('Website.customize_zindex') ?></label>
                                                                                        <input type="text" id="zIndex" name="zIndex" value="<?= esc($defaults['zIndex']) ?>">
                                                                                        <span class="form-hint"><?= lang('Website.customize_zindex_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-4">
                                                                                <div class="form-group">
                                                                                        <label for="env"><?= lang('Website.customize_env') ?></label>
                                                                                        <select id="env" name="env">
                                                                                                <option value="prod" <?= $defaults['env'] === 'prod' ? 'selected' : '' ?>>prod</option>
                                                                                                <option value="dev" <?= $defaults['env'] === 'dev' ? 'selected' : '' ?>>dev (wireframe)</option>
                                                                                        </select>
                                                                                        <span class="form-hint"><?= lang('Website.customize_env_hint') ?></span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                                <!-- Actions -->
                                                <div class="fl-box fl-16 fl-sp-14">
                                                        <div class="customize-actions">
                                                                <div class="row fl-sm-gap-16 fl-sm-justify-center fl-lg-justify-start">
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-5">
                                                                                <button type="submit" class="btn on-dark" id="btn-download">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg>
                                                                                        <?= lang('Website.customize_download') ?>
                                                                                </button>
                                                                        </div>
                                                                        <div class="fl-box fl-16 fl-md-8 fl-lg-5">
                                                                                <button type="button" class="btn on-dark btn-outline" id="btn-reset">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 12a9 9 0 1 0 9-9 9.75 9.75 0 0 0-6.74 2.74L3 8"/><path d="M3 3v5h5"/></svg>
                                                                                        <?= lang('Website.customize_reset') ?>
                                                                                </button>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>

                                        </div>
                                </form>

                                <!-- Error message -->
                                <div id="customize-error" class="customize-error" style="display:none">
                                        <p id="customize-error-msg"></p>
                                </div>
                        </div>
                </section>

                <?= view('website/partial/footer') ?>

                <script>
                document.addEventListener('DOMContentLoaded', function()
                {
                    var form = document.getElementById('customize-form');
                    var btnReset = document.getElementById('btn-reset');
                    var errorBox = document.getElementById('customize-error');
                    var errorMsg = document.getElementById('customize-error-msg');

                    // Default values for reset
                    var defaults = <?= json_encode($defaults) ?>;

                    // Submit via fetch to handle file download
                    form.addEventListener('submit', function(e)
                    {
                        e.preventDefault();
                        errorBox.style.display = 'none';

                        var btn = document.getElementById('btn-download');
                        var originalText = btn.innerHTML;
                        btn.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="spin"><path d="M21 12a9 9 0 1 1-6.219-8.56"/></svg> <?= lang('Website.customize_compiling') ?>';
                        btn.disabled = true;

                        fetch(form.action, {
                            method: 'POST',
                            body: new FormData(form)
                        })
                        .then(function(response)
                        {
                            if (!response.ok)
                            {
                                return response.text().then(function(text) {
                                    var msg = 'Compilation error (HTTP ' + response.status + ')';
                                    try { msg = JSON.parse(text).message || msg; } catch(e) {}
                                    throw new Error(msg);
                                });
                            }
                            return response.blob();
                        })
                        .then(function(blob)
                        {
                            var url = URL.createObjectURL(blob);
                            var a = document.createElement('a');
                            a.href = url;
                            a.download = 'flexo.css';
                            document.body.appendChild(a);
                            a.click();
                            document.body.removeChild(a);
                            URL.revokeObjectURL(url);
                        })
                        .catch(function(err)
                        {
                            errorMsg.textContent = err.message;
                            errorBox.style.display = 'block';
                        })
                        .finally(function()
                        {
                            btn.innerHTML = originalText;
                            btn.disabled = false;
                        });
                    });

                    // Reset button
                    btnReset.addEventListener('click', function()
                    {
                        for (var key in defaults)
                        {
                            var el = document.getElementById(key);
                            if (el)
                            {
                                el.value = defaults[key];
                            }
                        }
                        errorBox.style.display = 'none';
                    });
                });
                </script>
        </body>
</html>
