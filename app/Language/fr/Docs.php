<?php

return [
    // Meta
    'meta_title_getting_started' => 'D&eacute;marrer',
    'meta_desc_getting_started'  => 'Installez flexocss et cr&eacute;ez votre premier layout en quelques minutes.',
    'meta_title_grid'            => 'Grille',
    'meta_desc_grid'             => 'D&eacute;couvrez comment fonctionne le syst&egrave;me de grille &agrave; 16 colonnes de flexocss.',
    'meta_title_breakpoints'     => 'Breakpoints',
    'meta_desc_breakpoints'      => 'Six breakpoints responsive du mobile &agrave; l\'ultrawide.',
    'meta_title_utilities'       => 'Utilitaires',
    'meta_desc_utilities'        => 'Classes utilitaires responsive pour l\'alignement, la visibilit&eacute;, le padding et plus.',
    'meta_title_wireframe'       => 'Wireframe',
    'meta_desc_wireframe'        => 'D&eacute;bogage visuel des layouts avec le mode wireframe.',
    'meta_title_customization'   => 'Personnalisation',
    'meta_desc_customization'    => 'Personnalisez flexocss via les variables SCSS.',

    // Sidebar nav
    'nav_getting_started' => 'D&eacute;marrer',
    'nav_grid'            => 'Grille',
    'nav_breakpoints'     => 'Breakpoints',
    'nav_utilities'       => 'Utilitaires',
    'nav_wireframe'       => 'Wireframe',
    'nav_customization'   => 'Personnalisation',

    // Gap & Area page
    'nav_gap_and_area'          => 'Gap &amp; Area',
    'meta_title_gap_and_area'   => 'Gap &amp; Area',
    'meta_desc_gap_and_area'    => 'Contr&ocirc;lez l\'espacement dans flexocss avec les classes gap, padding et area.',

    'gap_title' => 'Gap &amp; Area',
    'gap_intro' => 'Flexocss fournit trois utilitaires d\'espacement compl&eacute;mentaires : <strong>gap</strong> contr&ocirc;le l\'espace entre les colonnes d\'une row, <strong>padding</strong> ajoute un espacement interne &agrave; n\'importe quel &eacute;l&eacute;ment, et <strong>area</strong> applique un padding vertical aux sections. Les trois supportent les pr&eacute;fixes de breakpoint responsive.',

    'gap_gap_title'   => 'Gap',
    'gap_gap_desc'    => 'Appliquez les classes gap sur une <code>.row</code> pour contr&ocirc;ler l\'espacement entre les colonnes. Le pattern est <code>.fl-{bp}-gap-{valeur}</code>. Les largeurs de colonnes sont gap-aware : elles soustraient automatiquement la fraction correcte du gap, ainsi le layout ne se casse jamais.',
    'gap_gap_values'  => 'Valeurs par d&eacute;faut : de 0 &agrave; 80px par pas de 8. Configurable via <code>$gapStep</code> et <code>$gapNumber</code>.',
    'gap_gap_example' => 'Comparaison gap',
    'gap_gap_explain' => 'Utilisez des valeurs de gap diff&eacute;rentes par breakpoint pour des layouts plus compacts sur mobile et plus a&eacute;r&eacute;s sur desktop.',

    'gap_padding_title'   => 'Padding',
    'gap_padding_desc'    => 'Ajoutez du padding interne &agrave; n\'importe quel &eacute;l&eacute;ment. Le pattern est <code>.fl-{bp}-padding-{valeur}</code>. Contrairement au gap, le padding fonctionne sur n\'importe quel &eacute;l&eacute;ment, pas seulement les rows.',
    'gap_padding_values'  => 'Valeurs par d&eacute;faut : de 0 &agrave; 96px par pas de 8. Configurable via <code>$paddingStep</code> et <code>$paddingNumber</code>.',
    'gap_padding_example' => 'Comparaison padding',

    'gap_area_title'   => 'Area',
    'gap_area_desc'    => 'Les classes area appliquent un padding vertical (haut et bas) aux sections. Utilisez-les sur des &eacute;l&eacute;ments wrapper comme <code>&lt;section&gt;</code> pour cr&eacute;er un rythme vertical coh&eacute;rent sur la page. Le pattern est <code>.fl-{bp}-area-{valeur}</code>.',
    'gap_area_values'  => 'Valeurs par d&eacute;faut : de 0 &agrave; 160px par pas de 16. Configurable via <code>$gapStepArea</code> et <code>$gapNumberArea</code>.',
    'gap_area_example' => 'Comparaison area',
    'gap_area_explain' => 'Combinez les classes area par breakpoint pour des sections plus a&eacute;r&eacute;es sur grands &eacute;crans : <code>fl-sm-area-32 fl-lg-area-64 fl-sp-area-96</code>.',

    'gap_col_class' => 'Classe',
    'gap_col_css'   => 'Propri&eacute;t&eacute; CSS',
    'gap_up_to'     => 'jusqu\'&agrave;',

    'gap_prev' => 'Pr&eacute;c&eacute;dent',
    'gap_next' => 'Suivant',

    // Getting Started page
    'gs_title' => 'D&eacute;marrer',
    'gs_intro' => 'Flexocss est un framework CSS l&eacute;ger bas&eacute; sur flexbox. Il offre une grille responsive &agrave; 16 colonnes, des classes utilitaires et un mode wireframe pour le d&eacute;bogage. Pas de JavaScript, z&eacute;ro d&eacute;pendances.',

    'gs_install_title' => 'Installation',
    'gs_install_desc'  => 'Vous pouvez installer flexocss via npm pour une personnalisation compl&egrave;te en SCSS, ou inclure le CSS pr&eacute;compil&eacute; via CDN sans aucune configuration.',

    'gs_npm_title'    => 'npm',
    'gs_npm_desc'     => 'Installez le paquet depuis npm :',
    'gs_npm_import'   => 'Puis importez-le dans votre fichier SCSS :',
    'gs_npm_override' => 'Pour remplacer les variables de configuration par d&eacute;faut, utilisez la syntaxe <code>with</code> :',

    'gs_cdn_title' => 'CDN',
    'gs_cdn_desc'  => 'Incluez le CSS directement dans votre HTML pour un setup rapide avec les param&egrave;tres par d&eacute;faut :',

    'gs_structure_title'   => 'Structure de base',
    'gs_structure_desc'    => 'Flexocss utilise trois niveaux d\'imbrication : <code>container</code>, <code>row</code> et <code>fl-box</code>. La grille utilise 16 colonnes par d&eacute;faut.',
    'gs_structure_explain' => 'Voici ce que fait chaque classe :',

    'gs_explain_container' => '&mdash; centre le contenu et d&eacute;finit une largeur maximale.',
    'gs_explain_fluid'     => '&mdash; rend le container pleine largeur.',
    'gs_explain_row'       => '&mdash; cr&eacute;e une rang&eacute;e flex qui enveloppe ses enfants.',
    'gs_explain_box'       => '&mdash; d&eacute;finit un &eacute;l&eacute;ment flex (colonne).',
    'gs_explain_col'       => '&mdash; d&eacute;finit la largeur de la colonne, o&ugrave; <code>n</code> est une valeur de 1 &agrave; 16.',

    'gs_example_title' => 'Exemple en direct',

    'gs_responsive_title'   => 'Layout responsive',
    'gs_responsive_desc'    => 'Ajoutez les pr&eacute;fixes de breakpoints pour modifier la largeur des colonnes &agrave; diff&eacute;rentes tailles d\'&eacute;cran. Flexocss suit une approche mobile-first : les breakpoints plus petits s\'appliquent vers le haut sauf s\'ils sont remplac&eacute;s.',
    'gs_responsive_explain' => 'Cette colonne occupe toute la largeur sur mobile (<code>fl-16</code>), la moiti&eacute; sur tablette (<code>fl-lg-8</code>) et environ un tiers sur desktop (<code>fl-sp-5</code>).',

    'gs_next' => 'Suivant',

    // Grid page
    'grid_title' => 'Grille',
    'grid_intro' => 'Flexocss utilise un syst&egrave;me de grille &agrave; 16 colonnes bas&eacute; sur flexbox. Les largeurs des colonnes sont calcul&eacute;es automatiquement en tenant compte des gaps, pour que les layouts ne cassent jamais &agrave; cause des calculs d\'espacement.',

    'grid_container_title' => 'Container',
    'grid_container_desc'  => 'Le <code>.container</code> centre le contenu et d&eacute;finit une largeur maximale de 1420px. Ajoutez <code>.fluid</code> pour un container pleine largeur sans limite.',

    'grid_row_title' => 'Row',
    'grid_row_desc'  => 'La <code>.row</code> cr&eacute;e un conteneur flex avec wrapping activ&eacute;. Comme le container, elle a une largeur maximale de 1420px et se centre automatiquement.',
    'grid_row_explain_row'   => '&mdash; rang&eacute;e flex avec wrap, max-width 1420px, centr&eacute;e automatiquement.',
    'grid_row_explain_fluid' => '&mdash; supprime le max-width, prend toute la largeur disponible.',
    'grid_row_explain_block' => '&mdash; passe en direction colonne pour les layouts empil&eacute;s.',

    'grid_columns_title'   => 'Colonnes',
    'grid_columns_desc'    => 'Utilisez <code>.fl-box</code> avec <code>.fl-{n}</code> o&ugrave; n est une valeur de 1 &agrave; 16. Toutes les largeurs sont gap-aware : les calculs des colonnes soustraient la fraction appropri&eacute;e du gap pour que le total s\'adapte toujours parfaitement.',
    'grid_columns_example' => 'Exemples',

    'grid_auto_title' => 'Largeur automatique',
    'grid_auto_desc'  => 'Utilisez <code>.fl-auto</code> pour que les colonnes partagent l\'espace disponible &eacute;galement. Utile quand vous n\'avez pas besoin d\'un contr&ocirc;le pr&eacute;cis des colonnes.',

    'grid_gap_title'   => 'Gap',
    'grid_gap_desc'    => 'Appliquez les classes gap sur la <code>.row</code> pour contr&ocirc;ler l\'espacement entre les colonnes. Le pattern est <code>.fl-{bp}-gap-{valeur}</code> o&ugrave; la valeur va de 0 &agrave; 80 par pas de 8.',
    'grid_gap_explain' => 'Les gaps sont responsive : utilisez des valeurs diff&eacute;rentes par breakpoint. Les largeurs des colonnes s\'ajustent automatiquement au gap, gardant le layout intact.',
    'grid_gap_example' => 'Comparaison des gaps',

    'grid_offset_title'      => 'Offset',
    'grid_offset_desc'       => 'Poussez une colonne vers la droite avec <code>.fl-offset-{n}</code>. L\'offset est gap-aware, il tient donc compte du gap de la rang&eacute;e dans son calcul.',
    'grid_offset_responsive' => 'Les offsets sont aussi responsive. Utilisez <code>.fl-{bp}-offset-{n}</code> pour changer ou r&eacute;initialiser l\'offset &agrave; diff&eacute;rents breakpoints.',

    'grid_nesting_title' => 'Imbrication',
    'grid_nesting_desc'  => 'Placez une <code>.row</code> &agrave; l\'int&eacute;rieur d\'un <code>.fl-box</code> pour cr&eacute;er des grilles imbriqu&eacute;es. Chaque rang&eacute;e imbriqu&eacute;e obtient son propre contexte &agrave; 16 colonnes.',

    'grid_prev' => 'Pr&eacute;c&eacute;dent',
    'grid_next' => 'Suivant',

    // Breakpoints page
    'bp_title' => 'Breakpoints',
    'bp_intro' => 'Flexocss fournit six breakpoints responsive avec une approche mobile-first bas&eacute;e sur des media queries min-width. Chaque breakpoint d&eacute;bloque un ensemble de classes utilitaires pr&eacute;fix&eacute;es qui remplacent les valeurs des &eacute;crans plus petits.',

    'bp_table_title'  => 'Aper&ccedil;u',
    'bp_col_name'     => 'Breakpoint',
    'bp_col_prefix'   => 'Pr&eacute;fixe',
    'bp_col_min'      => 'Min-width',
    'bp_col_target'   => 'Cible',
    'bp_target_sm'    => 'Petits smartphones',
    'bp_target_md'    => 'Grands smartphones',
    'bp_target_lg'    => 'Tablettes',
    'bp_target_sp'    => 'Laptops / petits &eacute;crans',
    'bp_target_mg'    => 'Grands &eacute;crans',
    'bp_target_ut'    => '&Eacute;crans ultrawide',

    'bp_mobile_title'   => 'Mobile-first',
    'bp_mobile_desc'    => 'Flexocss suit une strat&eacute;gie mobile-first. Les classes de base (sans pr&eacute;fixe ou avec <code>sm</code>) s\'appliquent &agrave; partir de 0px. Chaque breakpoint remplace le pr&eacute;c&eacute;dent &agrave; mesure que l\'&eacute;cran grandit.',
    'bp_mobile_explain' => 'Dans cet exemple, la colonne est pleine largeur sur mobile (<code>fl-16</code>), 8/16 &agrave; partir de 768px (<code>fl-lg-8</code>) et 5/16 &agrave; partir de 1024px (<code>fl-sp-5</code>). Les breakpoints plus petits se propagent vers le haut jusqu\'&agrave; &ecirc;tre remplac&eacute;s.',

    'bp_pattern_title' => 'Pattern des classes',
    'bp_pattern_desc'  => 'Toutes les classes responsive suivent une convention de nommage coh&eacute;rente. Le pr&eacute;fixe du breakpoint d&eacute;termine quand la r&egrave;gle s\'active :',

    'bp_examples_title' => 'Exemples responsive',
    'bp_examples_desc'  => 'La plupart des classes flexocss supportent les pr&eacute;fixes de breakpoints. Voici quelques patterns courants :',

    'bp_ex_gap_title' => 'Gap responsive',

    'bp_ex_visibility_title'  => 'Visibilit&eacute; responsive',
    'bp_ex_visibility_desc'   => 'Affichez ou masquez des &eacute;l&eacute;ments &agrave; des breakpoints sp&eacute;cifiques :',
    'bp_ex_visibility_tablet' => 'Visible &agrave; partir de tablette (lg)',
    'bp_ex_visibility_mobile' => 'Visible uniquement sur mobile',

    'bp_ex_area_title' => 'Area responsive (padding vertical)',
    'bp_ex_area_desc'  => 'Utilisez les classes area pour ajouter du padding vertical responsive aux sections :',

    'bp_custom_title' => 'Personnalisation',
    'bp_custom_desc'  => 'Les noms et valeurs des breakpoints sont enti&egrave;rement configurables via SCSS. Remplacez <code>$bp</code> et <code>$mediaQuery</code> pour les adapter &agrave; votre projet :',

    'bp_prev' => 'Pr&eacute;c&eacute;dent',
    'bp_next' => 'Suivant',

    // Utilities page
    'ut_title' => 'Utilitaires',
    'ut_intro' => 'Flexocss inclut un large ensemble de classes utilitaires pour l\'alignement, la visibilit&eacute;, l\'espacement, le positionnement et plus. Toutes les utilitaires supportent les pr&eacute;fixes responsive des breakpoints.',

    'ut_col_class' => 'Classe',
    'ut_col_css'   => 'Propri&eacute;t&eacute; CSS',

    'ut_align_title' => 'Alignement',
    'ut_align_desc'  => 'Contr&ocirc;lez comment les &eacute;l&eacute;ments flex sont positionn&eacute;s le long des axes principal et transversal. Toutes les classes d\'alignement supportent les pr&eacute;fixes de breakpoints : <code>.fl-{bp}-justify-center</code>, <code>.fl-{bp}-align-items-end</code>, etc.',

    'ut_place_desc' => '<code>.place-center</code> est un raccourci qui combine <code>justify-content: center</code> et <code>align-items: center</code> pour un centrage rapide.',

    'ut_visibility_title' => 'Visibilit&eacute;',
    'ut_visibility_desc'  => 'Affichez ou masquez des &eacute;l&eacute;ments avec un contr&ocirc;le responsive. Toutes les classes de visibilit&eacute; supportent les pr&eacute;fixes de breakpoints : <code>.fl-{bp}-hidden</code>, <code>.fl-{bp}-visible</code>, etc.',

    'ut_padding_title'  => 'Padding',
    'ut_padding_desc'   => 'Ajoutez du padding responsive &agrave; n\'importe quel &eacute;l&eacute;ment. Le pattern est <code>.fl-{bp}-padding-{valeur}</code>.',
    'ut_padding_values' => 'Valeurs par d&eacute;faut : de 0 &agrave; 96px par pas de 8. Configurable via les variables SCSS <code>$paddingStep</code> et <code>$paddingNumber</code>.',

    'ut_area_title'  => 'Area (padding vertical)',
    'ut_area_desc'   => 'Les classes area appliquent du padding vertical (haut et bas) aux sections. Le pattern est <code>.fl-{bp}-area-{valeur}</code>.',
    'ut_area_values' => 'Valeurs par d&eacute;faut : de 0 &agrave; 160px par pas de 16. Configurable via <code>$gapStepArea</code> et <code>$gapNumberArea</code>.',

    'ut_text_title' => 'Alignement du texte',
    'ut_text_desc'  => 'Contr&ocirc;lez l\'alignement du texte avec des pr&eacute;fixes responsive : <code>.fl-{bp}-text-center</code>, <code>.fl-{bp}-text-left</code>, etc.',

    'ut_order_title' => 'Ordre',
    'ut_order_desc'  => 'Changez l\'ordre visuel des &eacute;l&eacute;ments flex sans modifier le HTML. Supporte les pr&eacute;fixes responsive : <code>.fl-{bp}-order-{n}</code>.',

    'ut_position_title' => 'Position &amp; fill',
    'ut_position_desc'  => 'Utilitaires rapides de positionnement et dimensionnement :',

    'ut_zindex_title' => 'Z-index',
    'ut_zindex_desc'  => 'Contr&ocirc;lez l\'ordre d\'empilement avec <code>.z-index-{n}</code> o&ugrave; n va de 0 &agrave; 10 par d&eacute;faut. Configurable via <code>$zIndex</code>.',

    'ut_reset_title' => 'Reset marges &amp; padding',
    'ut_reset_desc'  => 'Supprimez de force les marges ou le padding de n\'importe quel &eacute;l&eacute;ment :',

    'ut_prev' => 'Pr&eacute;c&eacute;dent',
    'ut_next' => 'Suivant',

    // Wireframe page
    'wf_title' => 'Wireframe',
    'wf_intro' => 'Le mode wireframe est un outil de d&eacute;bogage visuel int&eacute;gr&eacute; &agrave; flexocss. Il met en &eacute;vidence la structure de votre grille avec des contours color&eacute;s, des arri&egrave;re-plans et des &eacute;tiquettes d\'information pour rep&eacute;rer les probl&egrave;mes de layout en un coup d\'&oelig;il.',

    'wf_live_example' => 'Exemple en direct',

    'wf_activate_title' => 'Activation',
    'wf_activate_desc'  => 'Ajoutez <code>id="wireframe"</code> &agrave; votre balise <code>&lt;body&gt;</code> pour activer le mode wireframe :',
    'wf_activate_note'  => 'Le mode wireframe n\'est disponible que lorsque <code>$env</code> est d&eacute;fini sur <code>\'dev\'</code> (par d&eacute;faut). En production, il est enti&egrave;rement exclu.',

    'wf_modes_title' => 'Modes d\'affichage',
    'wf_modes_desc'  => 'Le wireframe supporte plusieurs modes d\'affichage combinables via des classes sur la balise body :',

    'wf_outline_title'     => 'Mode outline (par d&eacute;faut)',
    'wf_outline_desc'      => 'Avec seulement <code>id="wireframe"</code>, chaque &eacute;l&eacute;ment de grille re&ccedil;oit un contour color&eacute; :',
    'wf_outline_container' => '&mdash; contour sombre (#1f2640)',
    'wf_outline_row'       => '&mdash; contour violet (#aa41c8)',
    'wf_outline_box'       => '&mdash; contour bleu (#3f4b80) avec fond clair',

    'wf_fill_title'     => 'Mode fill',
    'wf_fill_desc'      => 'Ajoutez <code>class="fill"</code> pour remplacer les contours par des couleurs de fond pleines :',
    'wf_fill_colors'    => 'Chaque niveau d\'imbrication a une couleur distincte :',
    'wf_fill_container' => '&mdash; fond sombre (#1f2640)',
    'wf_fill_row'       => '&mdash; fond violet (#aa41c8)',
    'wf_fill_box'       => '&mdash; fond bleu (#7d96ff)',

    'wf_border_title' => 'Mode bordure',
    'wf_border_desc'  => 'Ajoutez <code>class="border-{n}"</code> (1 &agrave; 5) pour ajouter des bordures visibles par-dessus le mode fill. Utile pour voir les limites exactes entre &eacute;l&eacute;ments adjacents.',

    'wf_info_title'   => 'Mode info',
    'wf_info_desc'    => 'Ajoutez <code>class="info"</code> pour afficher des &eacute;tiquettes de breakpoint et de taille sur chaque colonne :',
    'wf_info_explain' => 'Chaque <code>.fl-box</code> affiche une &eacute;tiquette comme <code>*sm 8/16</code> indiquant le breakpoint actuel et la taille de la colonne. Les &eacute;tiquettes se mettent &agrave; jour automatiquement lorsque le viewport change.',

    'wf_combined_title' => 'Combiner les modes',
    'wf_combined_desc'  => 'Les modes peuvent &ecirc;tre combin&eacute;s librement. Voici les combinaisons les plus courantes :',

    'wf_scaffold_title' => 'Exemple scaffold',
    'wf_scaffold_desc'  => 'Voici comment le mode wireframe se pr&eacute;sente appliqu&eacute; &agrave; une structure de page compl&egrave;te&nbsp;: navigation, hero, features en trois colonnes, contenu en deux colonnes et footer.',

    'wf_env_title' => 'Contr&ocirc;le de l\'environnement',
    'wf_env_desc'  => 'Le module wireframe est compil&eacute; conditionnellement selon la variable <code>$env</code> :',
    'wf_env_note'  => 'Lorsque <code>$env</code> est <code>\'prod\'</code>, tout le CSS wireframe est exclu de la sortie, gardant votre bundle de production propre.',

    'wf_custom_title' => 'Personnalisation',
    'wf_custom_desc'  => 'Toutes les couleurs et styles du wireframe sont configurables via des variables SCSS :',
    'wf_col_var'      => 'Variable',
    'wf_col_default'  => 'D&eacute;faut',
    'wf_col_role'     => 'R&ocirc;le',
    'wf_var_outline_container' => 'Couleur contour container',
    'wf_var_outline_row'       => 'Couleur contour row',
    'wf_var_outline_box'       => 'Couleur contour box',
    'wf_var_fill_container'    => 'Couleur remplissage container',
    'wf_var_fill_row'          => 'Couleur remplissage row',
    'wf_var_fill_box'          => 'Couleur remplissage box',
    'wf_var_info_bg'           => 'Fond &eacute;tiquette info',
    'wf_var_info_text'         => 'Couleur texte &eacute;tiquette info',

    'wf_prev' => 'Pr&eacute;c&eacute;dent',
    'wf_next' => 'Suivant',

    // Customization page
    'cust_title' => 'Personnalisation',
    'cust_intro' => 'Chaque aspect de flexocss est contr&ocirc;l&eacute; via des variables SCSS. Remplacez-les avant d\'importer le framework pour adapter la grille, l\'espacement, les breakpoints et les transitions &agrave; votre projet.',

    'cust_how_title' => 'Comment remplacer',
    'cust_how_desc'  => 'Utilisez la syntaxe SCSS <code>@use ... with</code> pour remplacer n\'importe quelle variable par d&eacute;faut. Sp&eacute;cifiez uniquement les variables que vous souhaitez modifier :',

    'cust_col_var'     => 'Variable',
    'cust_col_default' => 'D&eacute;faut',
    'cust_col_desc'    => 'Description',

    'cust_grid_title' => 'Grille',
    'cust_grid_desc'  => 'Contr&ocirc;lez le nombre de colonnes, la largeur du container et le padding des bo&icirc;tes :',
    'cust_var_box'          => 'Nombre de colonnes de la grille',
    'cust_var_container'    => 'Max-width du container et de la row',
    'cust_var_containerLM'  => 'Max-width au plus grand breakpoint',
    'cust_var_boxpadding'   => 'Padding par d&eacute;faut pour .fl-box',
    'cust_var_boxpaddingin' => 'Padding par d&eacute;faut pour .fl-box-in',

    'cust_bp_title' => 'Breakpoints',
    'cust_bp_desc'  => 'D&eacute;finissez les noms des breakpoints et leurs valeurs min-width correspondantes :',
    'cust_var_bp'    => 'Noms des breakpoints s&eacute;par&eacute;s par des virgules',
    'cust_var_mq'    => 'Valeurs min-width (une de moins que $bp)',
    'cust_var_mqmax' => 'Limite sup&eacute;rieure pour les media queries',
    'cust_bp_note'   => 'Le premier breakpoint (sm) est la base et n\'a pas de media query. <code>$mediaQuery</code> doit avoir exactement une valeur de moins que <code>$bp</code>.',

    'cust_spacing_title'   => 'Gap &amp; espacement',
    'cust_spacing_desc'    => 'Contr&ocirc;lez les classes gap, padding et area g&eacute;n&eacute;r&eacute;es :',
    'cust_var_gapstep'     => 'Incr&eacute;ment en px entre les classes gap',
    'cust_var_gapnumber'   => 'Nombre de pas gap &agrave; g&eacute;n&eacute;rer',
    'cust_var_areastep'    => 'Incr&eacute;ment pour les classes area (padding vertical)',
    'cust_var_areanumber'  => 'Nombre de pas area',
    'cust_var_paddingstep'   => 'Incr&eacute;ment pour les classes padding',
    'cust_var_paddingnumber' => 'Nombre de pas padding',
    'cust_var_paddingarea'   => 'Padding vertical par d&eacute;faut par breakpoint',
    'cust_spacing_formula'   => 'La valeur maximale g&eacute;n&eacute;r&eacute;e est <code>step &times; number</code>. Par exemple, avec <code>$gapStep: 8</code> et <code>$gapNumber: 10</code>, les classes gap vont de 0 &agrave; 80px.',

    'cust_order_title'    => 'Ordre',
    'cust_var_ordermin'   => 'Valeur minimale d\'order',
    'cust_var_ordermax'   => 'Valeur maximale d\'order',

    'cust_transition_title' => 'Transitions',
    'cust_transition_desc'  => 'Flexocss applique des transitions CSS aux &eacute;l&eacute;ments div pour des changements responsive fluides :',
    'cust_var_transition'       => 'Activer/d&eacute;sactiver les transitions globalement',
    'cust_var_transitiontime'   => 'Dur&eacute;e de la transition',
    'cust_var_transitioneasing' => 'Fonction d\'easing',

    'cust_font_title' => 'Poids des polices',

    'cust_misc_title'      => 'Divers',
    'cust_var_env'         => 'Environnement : \'dev\' active le wireframe, \'prod\' le d&eacute;sactive',
    'cust_var_overflow'    => 'Ajoute overflow-x: hidden sur .container',
    'cust_var_zindex'      => 'Plage z-index (d&eacute;but, fin)',

    'cust_full_title' => 'Exemple complet',
    'cust_full_desc'  => 'Un exemple de configuration complet pour une grille &agrave; 12 colonnes avec un espacement plus serr&eacute; :',

    'cust_prev' => 'Pr&eacute;c&eacute;dent',
    'cust_next' => 'Suivant',

    // Scaffold page
    'nav_scaffold'           => 'Exemple Scaffold',
    'meta_title_scaffold'    => 'Exemple Scaffold',
    'meta_desc_scaffold'     => 'Un template de page complet construit avec flexocss : hero, sections de contenu et footer.',

    'sc_title' => 'Exemple Scaffold',
    'sc_intro' => 'Cette page montre un template complet construit exclusivement avec flexocss. Il comprend une section hero, trois sections de contenu avec des layouts horizontaux et verticaux, et un footer — le tout en utilisant <code>.container</code>, <code>.row</code>, <code>.fl-box</code> et des classes utilitaires responsive.',

    'sc_preview_title' => 'Aper&ccedil;u en direct',
    'sc_code_title'    => 'Code complet',

    'sc_hero_label'     => 'Hero',
    'sc_features_label' => 'Fonctionnalit&eacute;s',
    'sc_content_label'  => 'Contenu',
    'sc_cards_label'    => 'Cartes',
    'sc_footer_label'   => 'Footer',

    'sc_prev' => 'Pr&eacute;c&eacute;dent',
];
