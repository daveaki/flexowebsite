<?php

return [
    // Meta
    'meta_title_getting_started' => 'Getting Started',
    'meta_desc_getting_started'  => 'Install flexocss and build your first layout in minutes.',
    'meta_title_grid'            => 'Grid',
    'meta_desc_grid'             => 'Learn how the flexocss 16-column grid system works.',
    'meta_title_breakpoints'     => 'Breakpoints',
    'meta_desc_breakpoints'      => 'Six responsive breakpoints from mobile to ultrawide.',
    'meta_title_utilities'       => 'Utilities',
    'meta_desc_utilities'        => 'Responsive utility classes for alignment, visibility, padding and more.',
    'meta_title_wireframe'       => 'Wireframe',
    'meta_desc_wireframe'        => 'Debug your layouts visually with wireframe mode.',
    'meta_title_customization'   => 'Customization',
    'meta_desc_customization'    => 'Customize flexocss via SCSS variables.',

    // Sidebar nav
    'nav_getting_started' => 'Getting Started',
    'nav_grid'            => 'Grid',
    'nav_breakpoints'     => 'Breakpoints',
    'nav_utilities'       => 'Utilities',
    'nav_wireframe'       => 'Wireframe',
    'nav_customization'   => 'Customization',

    // Gap & Area page
    'nav_gap_and_area'          => 'Gap &amp; Area',
    'meta_title_gap_and_area'   => 'Gap &amp; Area',
    'meta_desc_gap_and_area'    => 'Control spacing in flexocss with gap, padding, and area utility classes.',

    'gap_title' => 'Gap &amp; Area',
    'gap_intro' => 'Flexocss provides three complementary spacing utilities: <strong>gap</strong> controls the space between columns in a row, <strong>padding</strong> adds internal spacing to any element, and <strong>area</strong> applies vertical padding to sections. All three support responsive breakpoint prefixes.',

    'gap_gap_title'   => 'Gap',
    'gap_gap_desc'    => 'Apply gap classes to a <code>.row</code> to control the spacing between columns. The pattern is <code>.fl-{bp}-gap-{value}</code>. Column widths are gap-aware: they automatically subtract the correct fraction of the gap so the layout never breaks.',
    'gap_gap_values'  => 'Default values: 0 to 80px in steps of 8. Configurable via <code>$gapStep</code> and <code>$gapNumber</code>.',
    'gap_gap_example' => 'Gap comparison',
    'gap_gap_explain' => 'Use different gap values per breakpoint for tighter layouts on mobile and more breathing room on desktop.',

    'gap_padding_title'   => 'Padding',
    'gap_padding_desc'    => 'Add internal padding to any element. The pattern is <code>.fl-{bp}-padding-{value}</code>. Unlike gap, padding works on any element — not just rows.',
    'gap_padding_values'  => 'Default values: 0 to 96px in steps of 8. Configurable via <code>$paddingStep</code> and <code>$paddingNumber</code>.',
    'gap_padding_example' => 'Padding comparison',

    'gap_area_title'   => 'Area',
    'gap_area_desc'    => 'Area classes apply vertical padding (top and bottom) to sections. Use them on wrapper elements like <code>&lt;section&gt;</code> to create consistent vertical rhythm across your page. The pattern is <code>.fl-{bp}-area-{value}</code>.',
    'gap_area_values'  => 'Default values: 0 to 160px in steps of 16. Configurable via <code>$gapStepArea</code> and <code>$gapNumberArea</code>.',
    'gap_area_example' => 'Area comparison',
    'gap_area_explain' => 'Combine area classes across breakpoints to create sections that breathe more on larger screens: <code>fl-sm-area-32 fl-lg-area-64 fl-sp-area-96</code>.',

    'gap_col_class' => 'Class',
    'gap_col_css'   => 'CSS property',
    'gap_up_to'     => 'up to',

    'gap_prev' => 'Previous',
    'gap_next' => 'Next',

    // Getting Started page
    'gs_title' => 'Getting Started',
    'gs_intro' => 'Flexocss is a lightweight CSS framework built on flexbox. It provides a 16-column responsive grid, utility classes, and a wireframe debug mode. No JavaScript, no dependencies.',

    'gs_install_title' => 'Installation',
    'gs_install_desc'  => 'You can install flexocss via npm for full SCSS customization, or include the prebuilt CSS via CDN for zero configuration.',

    'gs_npm_title'    => 'npm',
    'gs_npm_desc'     => 'Install the package from npm:',
    'gs_npm_import'   => 'Then import it in your SCSS file:',
    'gs_npm_override' => 'To override default configuration variables, use the <code>with</code> syntax:',

    'gs_cdn_title' => 'CDN',
    'gs_cdn_desc'  => 'Include the CSS directly in your HTML for quick setup with default settings:',

    'gs_structure_title'   => 'Basic structure',
    'gs_structure_desc'    => 'Flexocss uses three nesting levels: <code>container</code>, <code>row</code>, and <code>fl-box</code>. The grid defaults to 16 columns.',
    'gs_structure_explain' => 'Here is what each class does:',

    'gs_explain_container' => '&mdash; centers the content and sets a max-width.',
    'gs_explain_fluid'     => '&mdash; makes the container full-width.',
    'gs_explain_row'       => '&mdash; creates a flex row that wraps its children.',
    'gs_explain_box'       => '&mdash; defines a flex item (column).',
    'gs_explain_col'       => '&mdash; sets the column width, where <code>n</code> is a value from 1 to 16.',

    'gs_example_title' => 'Live example',

    'gs_responsive_title'   => 'Responsive layout',
    'gs_responsive_desc'    => 'Add breakpoint prefixes to change the column width at different screen sizes. Flexocss follows a mobile-first approach: smaller breakpoints apply upward unless overridden.',
    'gs_responsive_explain' => 'This column takes the full width on mobile (<code>fl-16</code>), half on tablets (<code>fl-lg-8</code>), and roughly a third on desktop (<code>fl-sp-5</code>).',

    'gs_next' => 'Next',

    // Grid page
    'grid_title' => 'Grid',
    'grid_intro' => 'Flexocss uses a 16-column grid system built on flexbox. Column widths are calculated automatically accounting for gaps, so layouts never break from spacing math.',

    'grid_container_title' => 'Container',
    'grid_container_desc'  => 'The <code>.container</code> centers the content and sets a max-width of 1420px. Add <code>.fluid</code> for a full-width container with no max-width limit.',

    'grid_row_title' => 'Row',
    'grid_row_desc'  => 'The <code>.row</code> creates a flex container with wrapping enabled. Like the container, it has a max-width of 1420px and centers itself.',
    'grid_row_explain_row'   => '&mdash; flex row with wrap, max-width 1420px, auto-centered.',
    'grid_row_explain_fluid' => '&mdash; removes the max-width, takes the full available width.',
    'grid_row_explain_block' => '&mdash; switches to column direction for stacked layouts.',

    'grid_columns_title'   => 'Columns',
    'grid_columns_desc'    => 'Use <code>.fl-box</code> with <code>.fl-{n}</code> where n is a value from 1 to 16. All widths are gap-aware: column calculations subtract the appropriate fraction of the gap so the total always fits perfectly.',
    'grid_columns_example' => 'Examples',

    'grid_auto_title' => 'Auto width',
    'grid_auto_desc'  => 'Use <code>.fl-auto</code> to make columns share the available space equally. This is useful when you don\'t need precise column control.',

    'grid_gap_title'   => 'Gap',
    'grid_gap_desc'    => 'Apply gap classes on the <code>.row</code> to control spacing between columns. The pattern is <code>.fl-{bp}-gap-{value}</code> where value goes from 0 to 80 in steps of 8.',
    'grid_gap_explain' => 'Gaps are responsive: use different values per breakpoint. Column widths automatically adjust to account for the gap, keeping the layout intact.',
    'grid_gap_example' => 'Gap comparison',

    'grid_offset_title'      => 'Offset',
    'grid_offset_desc'       => 'Push a column to the right using <code>.fl-offset-{n}</code>. The offset is gap-aware, so it accounts for the row gap in its calculation.',
    'grid_offset_responsive' => 'Offsets are responsive too. Use <code>.fl-{bp}-offset-{n}</code> to change or reset the offset at different breakpoints.',

    'grid_nesting_title' => 'Nesting',
    'grid_nesting_desc'  => 'Place a <code>.row</code> inside an <code>.fl-box</code> to create nested grids. Each nested row gets its own 16-column context.',

    'grid_prev' => 'Previous',
    'grid_next' => 'Next',

    // Breakpoints page
    'bp_title' => 'Breakpoints',
    'bp_intro' => 'Flexocss provides six responsive breakpoints using a mobile-first approach with min-width media queries. Each breakpoint unlocks a set of prefixed utility classes that override smaller screen values.',

    'bp_table_title'  => 'Overview',
    'bp_col_name'     => 'Breakpoint',
    'bp_col_prefix'   => 'Prefix',
    'bp_col_min'      => 'Min-width',
    'bp_col_target'   => 'Target',
    'bp_target_sm'    => 'Small phones',
    'bp_target_md'    => 'Large phones',
    'bp_target_lg'    => 'Tablets',
    'bp_target_sp'    => 'Laptops / small desktops',
    'bp_target_mg'    => 'Large desktops',
    'bp_target_ut'    => 'Ultrawide monitors',

    'bp_mobile_title'   => 'Mobile-first',
    'bp_mobile_desc'    => 'Flexocss follows a mobile-first strategy. Base classes (without prefix or with <code>sm</code>) apply from 0px and upward. Each breakpoint overrides the previous one as the screen grows.',
    'bp_mobile_explain' => 'In this example the column is full-width on mobile (<code>fl-16</code>), 8/16 from 768px (<code>fl-lg-8</code>), and 5/16 from 1024px (<code>fl-sp-5</code>). Smaller breakpoints cascade upward until overridden.',

    'bp_pattern_title' => 'Class pattern',
    'bp_pattern_desc'  => 'All responsive classes follow a consistent naming convention. The breakpoint prefix determines when the rule activates:',

    'bp_examples_title' => 'Responsive examples',
    'bp_examples_desc'  => 'Most flexocss classes support breakpoint prefixes. Here are some common patterns:',

    'bp_ex_gap_title' => 'Responsive gap',

    'bp_ex_visibility_title'  => 'Responsive visibility',
    'bp_ex_visibility_desc'   => 'Show or hide elements at specific breakpoints:',
    'bp_ex_visibility_tablet' => 'Visible from tablet (lg) up',
    'bp_ex_visibility_mobile' => 'Visible on mobile only',

    'bp_ex_area_title' => 'Responsive area (vertical padding)',
    'bp_ex_area_desc'  => 'Use area classes to add responsive vertical padding to sections:',

    'bp_custom_title' => 'Customization',
    'bp_custom_desc'  => 'Breakpoint names and values are fully configurable via SCSS. Override <code>$bp</code> and <code>$mediaQuery</code> to match your project needs:',

    'bp_prev' => 'Previous',
    'bp_next' => 'Next',

    // Utilities page
    'ut_title' => 'Utilities',
    'ut_intro' => 'Flexocss includes a wide set of utility classes for alignment, visibility, spacing, positioning, and more. All utilities support responsive breakpoint prefixes.',

    'ut_col_class' => 'Class',
    'ut_col_css'   => 'CSS property',

    'ut_align_title' => 'Alignment',
    'ut_align_desc'  => 'Control how flex items are positioned along the main and cross axes. All alignment classes support breakpoint prefixes: <code>.fl-{bp}-justify-center</code>, <code>.fl-{bp}-align-items-end</code>, etc.',

    'ut_place_desc' => '<code>.place-center</code> is a shortcut that combines <code>justify-content: center</code> and <code>align-items: center</code> for quick centering.',

    'ut_visibility_title' => 'Visibility',
    'ut_visibility_desc'  => 'Show or hide elements with responsive control. All visibility classes support breakpoint prefixes: <code>.fl-{bp}-hidden</code>, <code>.fl-{bp}-visible</code>, etc.',

    'ut_padding_title'  => 'Padding',
    'ut_padding_desc'   => 'Add responsive padding to any element. The pattern is <code>.fl-{bp}-padding-{value}</code>.',
    'ut_padding_values' => 'Default values: 0 to 96px in steps of 8. Configurable via the SCSS variables <code>$paddingStep</code> and <code>$paddingNumber</code>.',

    'ut_area_title'  => 'Area (vertical padding)',
    'ut_area_desc'   => 'Area classes apply vertical padding (top and bottom) to sections. The pattern is <code>.fl-{bp}-area-{value}</code>.',
    'ut_area_values' => 'Default values: 0 to 160px in steps of 16. Configurable via <code>$gapStepArea</code> and <code>$gapNumberArea</code>.',

    'ut_text_title' => 'Text alignment',
    'ut_text_desc'  => 'Control text alignment with responsive prefixes: <code>.fl-{bp}-text-center</code>, <code>.fl-{bp}-text-left</code>, etc.',

    'ut_order_title' => 'Order',
    'ut_order_desc'  => 'Change the visual order of flex items without modifying the HTML. Supports responsive prefixes: <code>.fl-{bp}-order-{n}</code>.',

    'ut_position_title' => 'Position &amp; fill',
    'ut_position_desc'  => 'Quick positioning and sizing utilities:',

    'ut_zindex_title' => 'Z-index',
    'ut_zindex_desc'  => 'Control stacking order with <code>.z-index-{n}</code> where n goes from 0 to 10 by default. Configurable via <code>$zIndex</code>.',

    'ut_reset_title' => 'Margin &amp; padding reset',
    'ut_reset_desc'  => 'Force-remove margin or padding from any element:',

    'ut_prev' => 'Previous',
    'ut_next' => 'Next',

    // Wireframe page
    'wf_title' => 'Wireframe',
    'wf_intro' => 'Wireframe mode is a visual debugging tool built into flexocss. It highlights your grid structure with colored outlines, backgrounds, and info labels so you can spot layout issues at a glance.',

    'wf_live_example' => 'Live example',

    'wf_activate_title' => 'Activation',
    'wf_activate_desc'  => 'Add <code>id="wireframe"</code> to your <code>&lt;body&gt;</code> tag to enable wireframe mode:',
    'wf_activate_note'  => 'Wireframe mode is only available when <code>$env</code> is set to <code>\'dev\'</code> (the default). In production builds it is excluded entirely.',

    'wf_modes_title' => 'Display modes',
    'wf_modes_desc'  => 'Wireframe supports several display modes that can be combined using classes on the body tag:',

    'wf_outline_title'     => 'Outline mode (default)',
    'wf_outline_desc'      => 'With just <code>id="wireframe"</code>, each grid element gets a colored outline:',
    'wf_outline_container' => '&mdash; dark outline (#1f2640)',
    'wf_outline_row'       => '&mdash; purple outline (#aa41c8)',
    'wf_outline_box'       => '&mdash; blue outline (#3f4b80) with light background',

    'wf_fill_title'     => 'Fill mode',
    'wf_fill_desc'      => 'Add <code>class="fill"</code> to replace outlines with solid background colors:',
    'wf_fill_colors'    => 'Each nesting level gets a distinct color:',
    'wf_fill_container' => '&mdash; dark background (#1f2640)',
    'wf_fill_row'       => '&mdash; purple background (#aa41c8)',
    'wf_fill_box'       => '&mdash; blue background (#7d96ff)',

    'wf_border_title' => 'Border mode',
    'wf_border_desc'  => 'Add <code>class="border-{n}"</code> (1 to 5) to add visible borders on top of fill mode. Useful for seeing exact boundaries between adjacent elements.',

    'wf_info_title'   => 'Info mode',
    'wf_info_desc'    => 'Add <code>class="info"</code> to display breakpoint and size labels on each column:',
    'wf_info_explain' => 'Each <code>.fl-box</code> shows a label like <code>*sm 8/16</code> indicating the current breakpoint and column size. Labels update automatically as the viewport changes.',

    'wf_combined_title' => 'Combining modes',
    'wf_combined_desc'  => 'Modes can be combined freely. Here are the most common combinations:',

    'wf_scaffold_title' => 'Scaffold example',
    'wf_scaffold_desc'  => 'Here is how wireframe mode looks applied to a complete page structure: navigation, hero, three-column features, two-column content, and footer.',

    'wf_env_title' => 'Environment control',
    'wf_env_desc'  => 'The wireframe module is conditionally compiled based on the <code>$env</code> variable:',
    'wf_env_note'  => 'When <code>$env</code> is <code>\'prod\'</code>, all wireframe CSS is excluded from the output, keeping your production bundle clean.',

    'wf_custom_title' => 'Customization',
    'wf_custom_desc'  => 'All wireframe colors and styles are configurable via SCSS variables:',
    'wf_col_var'      => 'Variable',
    'wf_col_default'  => 'Default',
    'wf_col_role'     => 'Role',
    'wf_var_outline_container' => 'Container outline color',
    'wf_var_outline_row'       => 'Row outline color',
    'wf_var_outline_box'       => 'Box outline color',
    'wf_var_fill_container'    => 'Container fill color',
    'wf_var_fill_row'          => 'Row fill color',
    'wf_var_fill_box'          => 'Box fill color',
    'wf_var_info_bg'           => 'Info label background',
    'wf_var_info_text'         => 'Info label text color',

    'wf_prev' => 'Previous',
    'wf_next' => 'Next',

    // Customization page
    'cust_title' => 'Customization',
    'cust_intro' => 'Every aspect of flexocss is controlled via SCSS variables. Override them before importing the framework to tailor the grid, spacing, breakpoints, and transitions to your project.',

    'cust_how_title' => 'How to override',
    'cust_how_desc'  => 'Use the SCSS <code>@use ... with</code> syntax to override any default variable. Only specify the variables you want to change:',

    'cust_col_var'     => 'Variable',
    'cust_col_default' => 'Default',
    'cust_col_desc'    => 'Description',

    'cust_grid_title' => 'Grid',
    'cust_grid_desc'  => 'Control the number of columns, container width, and box padding:',
    'cust_var_box'          => 'Number of grid columns',
    'cust_var_container'    => 'Container and row max-width',
    'cust_var_containerLM'  => 'Max-width at the largest breakpoint',
    'cust_var_boxpadding'   => 'Default padding for .fl-box',
    'cust_var_boxpaddingin' => 'Default padding for .fl-box-in',

    'cust_bp_title' => 'Breakpoints',
    'cust_bp_desc'  => 'Define breakpoint names and their corresponding min-width values:',
    'cust_var_bp'    => 'Comma-separated breakpoint names',
    'cust_var_mq'    => 'Min-width values (one less than $bp)',
    'cust_var_mqmax' => 'Upper bound for media queries',
    'cust_bp_note'   => 'The first breakpoint (sm) is the base and has no media query. <code>$mediaQuery</code> must have exactly one fewer value than <code>$bp</code>.',

    'cust_spacing_title'   => 'Gap &amp; spacing',
    'cust_spacing_desc'    => 'Control the generated gap, padding, and area utility classes:',
    'cust_var_gapstep'     => 'Increment in px between gap classes',
    'cust_var_gapnumber'   => 'Number of gap steps to generate',
    'cust_var_areastep'    => 'Increment for area (vertical padding) classes',
    'cust_var_areanumber'  => 'Number of area steps',
    'cust_var_paddingstep'   => 'Increment for padding classes',
    'cust_var_paddingnumber' => 'Number of padding steps',
    'cust_var_paddingarea'   => 'Default vertical padding per breakpoint',
    'cust_spacing_formula'   => 'The maximum generated value equals <code>step &times; number</code>. For example, with <code>$gapStep: 8</code> and <code>$gapNumber: 10</code>, gap classes go from 0 to 80px.',

    'cust_order_title'    => 'Order',
    'cust_var_ordermin'   => 'Minimum order value',
    'cust_var_ordermax'   => 'Maximum order value',

    'cust_transition_title' => 'Transitions',
    'cust_transition_desc'  => 'Flexocss applies CSS transitions to div elements for smooth responsive changes:',
    'cust_var_transition'       => 'Enable/disable transitions globally',
    'cust_var_transitiontime'   => 'Transition duration',
    'cust_var_transitioneasing' => 'Easing function',

    'cust_font_title' => 'Font weights',

    'cust_misc_title'      => 'Miscellaneous',
    'cust_var_env'         => 'Environment: \'dev\' enables wireframe, \'prod\' disables it',
    'cust_var_overflow'    => 'Add overflow-x: hidden on .container',
    'cust_var_zindex'      => 'Z-index range (start, end)',

    'cust_full_title' => 'Full example',
    'cust_full_desc'  => 'A complete configuration example for a 12-column grid with tighter spacing:',

    'cust_prev' => 'Previous',
    'cust_next' => 'Next',

    // Scaffold page
    'nav_scaffold'           => 'Scaffold Example',
    'meta_title_scaffold'    => 'Scaffold Example',
    'meta_desc_scaffold'     => 'A complete page template built with flexocss: hero, content sections, and footer.',

    'sc_title' => 'Scaffold Example',
    'sc_intro' => 'This page shows a complete real-world template built exclusively with flexocss. It includes a hero section, three content sections with both horizontal and vertical layouts, and a footer — all using <code>.container</code>, <code>.row</code>, <code>.fl-box</code>, and responsive utility classes.',

    'sc_preview_title' => 'Live preview',
    'sc_code_title'    => 'Full code',

    'sc_hero_label'     => 'Hero',
    'sc_features_label' => 'Features',
    'sc_content_label'  => 'Content',
    'sc_cards_label'    => 'Cards',
    'sc_footer_label'   => 'Footer',

    'sc_prev' => 'Previous',
];
