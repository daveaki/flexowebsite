<?php

return [
    // Meta
    'home_title'       => 'Home',
    'home_description' => 'Flexocss - Lightweight CSS flexbox grid and layout framework',

    // Nav
    'nav_documentation' => 'Documentation',
    'nav_tutorial'      => 'Tutorial',
    'nav_download'      => 'Download',
    'nav_contacts'      => 'Contacts',
    'nav_lang'          => 'Lang',

    // Hero
    'hero_tagline'      => 'A lightweight, utility-first CSS framework built on flexbox. Fast layouts, responsive grids, and zero dependencies.',
    'hero_btn_customize' => 'Customize',

    // Features
    'features_title'    => 'Why flexocss',
    'features_subtitle' => 'Everything you need, nothing you don\'t.',

    'feat_lightweight'      => 'Lightweight',
    'feat_lightweight_desc' => 'A single CSS file with no JavaScript and no runtime overhead. Just pure CSS that works everywhere.',

    'feat_flexbox'      => 'Flexbox-first',
    'feat_flexbox_desc' => 'Built entirely on flexbox for predictable, powerful layouts without the complexity of float or grid hacks.',

    'feat_configurable'      => 'Fully configurable',
    'feat_configurable_desc' => 'Grid columns, gap steps, padding, container width, transitions, and more. Every aspect is controlled via SCSS variables.',

    'feat_breakpoints'      => '6 breakpoints',
    'feat_breakpoints_desc' => 'From small mobile to ultrawide monitors: sm, md, lg, sp, mg, ut. Full control at every screen size.',

    'feat_utility'      => 'Utility classes',
    'feat_utility_desc' => 'Responsive padding, margin, gap, alignment, visibility, and more. All following a consistent naming convention.',

    'feat_wireframe'      => 'Wireframe mode',
    'feat_wireframe_desc' => 'Debug your layouts instantly with a single ID. See column boundaries, sizes, and breakpoint info at a glance.',

    'feat_gap'      => 'Gap-aware',
    'feat_gap_desc' => 'Column widths are calculated accounting for gaps automatically. No more broken layouts from spacing math.',

    'feat_zero_dep'      => 'Zero dependencies',
    'feat_zero_dep_desc' => 'No JavaScript frameworks required. Use the prebuilt CSS directly or customize via SCSS with your preferred build tool.',

    // Scaffolding
    'scaffolding_title'    => 'Scaffolding',
    'scaffolding_subtitle' => 'A fully customizable responsive grid with gap-aware calculations.',
    'scaffolding_desc'     => 'Build complex layouts in seconds with a flexible grid system that defaults to 16 columns but can be configured to any number you need. Gaps, padding steps, container widths, and transitions are all customizable via SCSS variables. Every width calculation accounts for gaps automatically, and six responsive breakpoints let you adapt any layout from mobile to ultrawide.',

    // Wireframe
    'wireframe_title'    => 'Wireframe',
    'wireframe_subtitle' => 'Debug your layouts visually during development.',
    'wireframe_desc'     => 'Enable wireframe mode with a single ID on the body tag and instantly see your grid structure highlighted with colored outlines. Each column shows its breakpoint name and size, making it easy to spot alignment issues and fine-tune your responsive layouts before going to production.',

    // Breakpoints
    'bp_title'    => 'Breakpoints',
    'bp_subtitle' => 'Six responsive steps from mobile to ultrawide.',
    'bp_desc'     => 'Each breakpoint uses a mobile-first approach with min-width media queries. Classes follow the pattern <code class="color-dark">fl-{breakpoint}-{property}-{value}</code> for a consistent, predictable API.',

    'bp_col_breakpoint' => 'Breakpoint',
    'bp_col_prefix'     => 'Prefix',
    'bp_col_minwidth'   => 'Min-width',
    'bp_col_target'     => 'Target',

    'bp_small'   => 'Small',
    'bp_medium'  => 'Medium',
    'bp_large'   => 'Large',
    'bp_special' => 'Super',
    'bp_mega'    => 'Mega',
    'bp_ultra'   => 'Ultra',

    'bp_target_small'   => 'Small phones',
    'bp_target_medium'  => 'Large phones',
    'bp_target_large'   => 'Tablets',
    'bp_target_special' => 'Laptops / small desktops',
    'bp_target_mega'    => 'Large desktops',
    'bp_target_ultra'   => 'Ultrawide monitors',

    // Get Started
    'getstarted_title'    => 'Get Started',
    'getstarted_subtitle' => 'Install flexocss in your project in seconds.',
    'getstarted_desc'     => 'Choose your preferred method: install via npm to customize grid columns, gaps, padding, container width, transitions and more via SCSS — or include the CDN link for zero configuration.',

    // Contact page
    'contact_title'       => 'Contact',
    'contact_description' => 'Get in touch with the flexocss team.',
    'contact_hero_title'  => 'Get in touch',
    'contact_hero_desc'   => 'Have a question about flexocss? Found a bug? Want to contribute? We\'d love to hear from you.',
    'contact_info_title'  => 'Reach out',
    'contact_info_desc'   => 'flexocss is an open source project. The best way to reach us is via GitHub issues or by sending a message using the form.',
    'contact_github'      => 'Open an issue on GitHub',
    'contact_npm'         => 'View on npm',
    'contact_form_title'  => 'Send a message',
    'contact_name'        => 'Name',
    'contact_email'       => 'Email',
    'contact_subject'     => 'Subject',
    'contact_message'     => 'Message',
    'contact_send'        => 'Send message',
    'contact_name_ph'     => 'Your name',
    'contact_email_ph'    => 'your@email.com',
    'contact_subject_ph'  => 'How can we help?',
    'contact_message_ph'  => 'Write your message here...',
    'contact_success'     => 'Thank you! Your message has been sent.',
    'contact_error'       => 'Something went wrong. Please try again.',

    // Customize page
    'customize_title'       => 'Customize',
    'customize_description' => 'Build your custom flexocss CSS with your own settings.',
    'customize_hero_title'  => 'Build your custom flexo.css',
    'customize_hero_desc'   => 'Configure every SCSS variable and download a ready-to-use CSS file compiled with your settings.',

    'customize_grid'              => 'Grid',
    'customize_box'               => 'Columns',
    'customize_box_hint'          => 'Number of grid columns (default 16)',
    'customize_container'         => 'Container max-width',
    'customize_container_hint'    => 'Max width of .container and .row',
    'customize_container_lm'      => 'Container max (last bp)',
    'customize_container_lm_hint' => 'Container max-width for the largest breakpoint',
    'customize_mq_max'            => 'Media query max',
    'customize_mq_max_hint'       => 'Upper bound for media queries',

    'customize_breakpoints'       => 'Breakpoints',
    'customize_bp_names'          => 'Breakpoint names',
    'customize_bp_names_hint'     => 'Comma-separated names (first is base, no media query)',
    'customize_bp_widths'         => 'Media query widths',
    'customize_bp_widths_hint'    => 'Min-width values for each breakpoint after the first',

    'customize_gap_area'          => 'Gap &amp; Area',
    'customize_gap_step'          => 'Gap step',
    'customize_gap_step_hint'     => 'Increment in px between gap classes',
    'customize_gap_number'        => 'Gap steps',
    'customize_gap_number_hint'   => 'Number of gap steps to generate',
    'customize_area_step'         => 'Area step',
    'customize_area_step_hint'    => 'Increment in px between area classes',
    'customize_area_number'       => 'Area steps',
    'customize_area_number_hint'  => 'Number of area steps to generate',

    'customize_padding'             => 'Padding',
    'customize_padding_step'        => 'Padding step',
    'customize_padding_step_hint'   => 'Increment in px between padding classes',
    'customize_padding_number'      => 'Padding steps',
    'customize_padding_number_hint' => 'Number of padding steps to generate',
    'customize_padding_area'        => 'Area padding per breakpoint',
    'customize_padding_area_hint'   => 'Comma-separated values mapped to breakpoints',
    'customize_box_padding'         => 'Box padding',
    'customize_box_padding_hint'    => 'Default padding for .fl-box',
    'customize_box_padding_in'      => 'Box-in padding',
    'customize_box_padding_in_hint' => 'Default padding for .fl-box-in',

    'customize_order'     => 'Order',
    'customize_order_min' => 'Order min',
    'customize_order_max' => 'Order max',

    'customize_fonts'      => 'Font weights',
    'customize_fw_light'   => 'Light',
    'customize_fw_regular' => 'Regular',
    'customize_fw_bold'    => 'Bold',
    'customize_fw_black'   => 'Black',

    'customize_transitions'       => 'Transitions',
    'customize_transition_enabled' => 'Enable transitions',
    'customize_transition_time'   => 'Duration',
    'customize_transition_easing' => 'Easing',

    'customize_utilities' => 'Utilities',
    'customize_overflow'  => 'Container overflow-x hidden',
    'customize_zindex'      => 'Z-index range',
    'customize_zindex_hint' => 'Start and end values, comma-separated',
    'customize_env'         => 'Environment',
    'customize_env_hint'    => 'dev enables wireframe mode',

    'customize_yes'       => 'Yes',
    'customize_no'        => 'No',
    'customize_download'  => 'Download flexo.css',
    'customize_reset'     => 'Reset defaults',
    'customize_compiling' => 'Compiling...',

    'nav_customize' => 'Customize',

    // Footer
    'footer_documentation' => 'Documentation',
    'footer_made_by'       => 'Made by',
    'footer_all_rights'    => 'All rights reserved.',
];
