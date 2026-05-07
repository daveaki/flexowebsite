<?php

return [
    // Meta
    'home_title'       => 'Home',
    'home_description' => 'Flexocss - Framework CSS leggero per griglie e layout basato su flexbox',

    // Nav
    'nav_documentation' => 'Documentazione',
    'nav_tutorial'      => 'Tutorial',
    'nav_download'      => 'Download',
    'nav_contacts'      => 'Contatti',
    'nav_lang'          => 'Lang',

    // Hero
    'hero_tagline'      => 'Un framework CSS leggero e utility-first basato su flexbox. Layout veloci, griglie responsive e zero dipendenze.',
    'hero_btn_customize' => 'Personalizza',

    // Features
    'features_title'    => 'Perch&eacute; flexocss',
    'features_subtitle' => 'Tutto ci&ograve; che serve, niente di superfluo.',

    'feat_lightweight'      => 'Leggero',
    'feat_lightweight_desc' => 'Un singolo file CSS senza JavaScript e senza overhead a runtime. Solo CSS puro che funziona ovunque.',

    'feat_flexbox'      => 'Flexbox-first',
    'feat_flexbox_desc' => 'Costruito interamente su flexbox per layout prevedibili e potenti, senza la complessit&agrave; di float o hack con grid.',

    'feat_configurable'      => 'Completamente configurabile',
    'feat_configurable_desc' => 'Colonne, step dei gap, padding, larghezza container, transizioni e altro. Ogni aspetto &egrave; controllato tramite variabili SCSS.',

    'feat_breakpoints'      => '6 breakpoint',
    'feat_breakpoints_desc' => 'Dal mobile piccolo ai monitor ultrawide: sm, md, lg, sp, mg, ut. Controllo totale ad ogni dimensione.',

    'feat_utility'      => 'Classi utility',
    'feat_utility_desc' => 'Padding, margini, gap, allineamento, visibilit&agrave; responsive e altro. Tutto con una convenzione di naming coerente.',

    'feat_wireframe'      => 'Modalit&agrave; wireframe',
    'feat_wireframe_desc' => 'Debug istantaneo dei layout con un singolo ID. Visualizza confini, dimensioni e info breakpoint a colpo d\'occhio.',

    'feat_gap'      => 'Gap-aware',
    'feat_gap_desc' => 'Le larghezze delle colonne sono calcolate tenendo conto dei gap automaticamente. Niente pi&ugrave; layout rotti per calcoli errati.',

    'feat_zero_dep'      => 'Zero dipendenze',
    'feat_zero_dep_desc' => 'Nessun framework JavaScript richiesto. Usa il CSS precompilato direttamente o personalizza via SCSS con il tuo build tool preferito.',

    // Scaffolding
    'scaffolding_title'    => 'Scaffolding',
    'scaffolding_subtitle' => 'Una griglia responsive completamente personalizzabile con calcoli gap-aware.',
    'scaffolding_desc'     => 'Costruisci layout complessi in pochi secondi con un sistema a griglia flessibile che usa 16 colonne di default, ma configurabile a qualsiasi numero. Gap, step di padding, larghezze container e transizioni sono tutti personalizzabili tramite variabili SCSS. Ogni calcolo di larghezza tiene conto dei gap automaticamente, e sei breakpoint responsive ti permettono di adattare qualsiasi layout dal mobile all\'ultrawide.',

    // Wireframe
    'wireframe_title'    => 'Wireframe',
    'wireframe_subtitle' => 'Debug visuale dei layout durante lo sviluppo.',
    'wireframe_desc'     => 'Attiva la modalit&agrave; wireframe con un singolo ID sul tag body e visualizza istantaneamente la struttura della griglia evidenziata con contorni colorati. Ogni colonna mostra il nome del breakpoint e la dimensione, rendendo facile individuare problemi di allineamento e perfezionare i layout responsive prima della produzione.',

    // Breakpoints
    'bp_title'    => 'Breakpoint',
    'bp_subtitle' => 'Sei step responsive dal mobile all\'ultrawide.',
    'bp_desc'     => 'Ogni breakpoint usa un approccio mobile-first con media query min-width. Le classi seguono il pattern <code class="color-dark">fl-{breakpoint}-{propriet&agrave;}-{valore}</code> per un\'API coerente e prevedibile.',

    'bp_col_breakpoint' => 'Breakpoint',
    'bp_col_prefix'     => 'Prefisso',
    'bp_col_minwidth'   => 'Min-width',
    'bp_col_target'     => 'Destinazione',

    'bp_small'   => 'Small',
    'bp_medium'  => 'Medium',
    'bp_large'   => 'Large',
    'bp_special' => 'Super',
    'bp_mega'    => 'Mega',
    'bp_ultra'   => 'Ultra',

    'bp_target_small'   => 'Smartphone piccoli',
    'bp_target_medium'  => 'Smartphone grandi',
    'bp_target_large'   => 'Tablet',
    'bp_target_special' => 'Laptop / desktop piccoli',
    'bp_target_mega'    => 'Desktop grandi',
    'bp_target_ultra'   => 'Monitor ultrawide',

    // Get Started
    'getstarted_title'    => 'Inizia',
    'getstarted_subtitle' => 'Installa flexocss nel tuo progetto in pochi secondi.',
    'getstarted_desc'     => 'Scegli il metodo che preferisci: installa via npm per personalizzare colonne, gap, padding, larghezza container, transizioni e altro via SCSS &mdash; oppure includi il link CDN per zero configurazione.',

    // Contact page
    'contact_title'       => 'Contatti',
    'contact_description' => 'Contatta il team di flexocss.',
    'contact_hero_title'  => 'Contattaci',
    'contact_hero_desc'   => 'Hai una domanda su flexocss? Hai trovato un bug? Vuoi contribuire? Siamo felici di sentirti.',
    'contact_info_title'  => 'Come raggiungerci',
    'contact_info_desc'   => 'flexocss &egrave; un progetto open source. Il modo migliore per contattarci &egrave; tramite le issue su GitHub o inviando un messaggio con il modulo.',
    'contact_github'      => 'Apri una issue su GitHub',
    'contact_npm'         => 'Visualizza su npm',
    'contact_form_title'  => 'Invia un messaggio',
    'contact_name'        => 'Nome',
    'contact_email'       => 'Email',
    'contact_subject'     => 'Oggetto',
    'contact_message'     => 'Messaggio',
    'contact_send'        => 'Invia messaggio',
    'contact_name_ph'     => 'Il tuo nome',
    'contact_email_ph'    => 'tua@email.com',
    'contact_subject_ph'  => 'Come possiamo aiutarti?',
    'contact_message_ph'  => 'Scrivi il tuo messaggio qui...',
    'contact_success'     => 'Grazie! Il tuo messaggio &egrave; stato inviato.',
    'contact_error'       => 'Qualcosa &egrave; andato storto. Riprova.',

    // Customize page
    'customize_title'       => 'Personalizza',
    'customize_description' => 'Crea il tuo flexocss CSS personalizzato con le tue impostazioni.',
    'customize_hero_title'  => 'Crea il tuo flexo.css',
    'customize_hero_desc'   => 'Configura ogni variabile SCSS e scarica un file CSS pronto all\'uso compilato con le tue impostazioni.',

    'customize_grid'              => 'Griglia',
    'customize_box'               => 'Colonne',
    'customize_box_hint'          => 'Numero di colonne della griglia (default 16)',
    'customize_container'         => 'Max-width container',
    'customize_container_hint'    => 'Larghezza massima di .container e .row',
    'customize_container_lm'      => 'Container max (ultimo bp)',
    'customize_container_lm_hint' => 'Larghezza massima del container per il breakpoint pi&ugrave; grande',
    'customize_mq_max'            => 'Media query max',
    'customize_mq_max_hint'       => 'Limite superiore per le media query',

    'customize_breakpoints'       => 'Breakpoint',
    'customize_bp_names'          => 'Nomi breakpoint',
    'customize_bp_names_hint'     => 'Nomi separati da virgola (il primo &egrave; base, senza media query)',
    'customize_bp_widths'         => 'Larghezze media query',
    'customize_bp_widths_hint'    => 'Valori min-width per ogni breakpoint dopo il primo',

    'customize_gap_area'          => 'Gap &amp; Area',
    'customize_gap_step'          => 'Step gap',
    'customize_gap_step_hint'     => 'Incremento in px tra le classi gap',
    'customize_gap_number'        => 'Numero step gap',
    'customize_gap_number_hint'   => 'Numero di step gap da generare',
    'customize_area_step'         => 'Step area',
    'customize_area_step_hint'    => 'Incremento in px tra le classi area',
    'customize_area_number'       => 'Numero step area',
    'customize_area_number_hint'  => 'Numero di step area da generare',

    'customize_padding'             => 'Padding',
    'customize_padding_step'        => 'Step padding',
    'customize_padding_step_hint'   => 'Incremento in px tra le classi padding',
    'customize_padding_number'      => 'Numero step padding',
    'customize_padding_number_hint' => 'Numero di step padding da generare',
    'customize_padding_area'        => 'Padding area per breakpoint',
    'customize_padding_area_hint'   => 'Valori separati da virgola mappati ai breakpoint',
    'customize_box_padding'         => 'Padding box',
    'customize_box_padding_hint'    => 'Padding predefinito per .fl-box',
    'customize_box_padding_in'      => 'Padding box-in',
    'customize_box_padding_in_hint' => 'Padding predefinito per .fl-box-in',

    'customize_order'     => 'Ordine',
    'customize_order_min' => 'Ordine min',
    'customize_order_max' => 'Ordine max',

    'customize_fonts'      => 'Pesi font',
    'customize_fw_light'   => 'Light',
    'customize_fw_regular' => 'Regular',
    'customize_fw_bold'    => 'Bold',
    'customize_fw_black'   => 'Black',

    'customize_transitions'        => 'Transizioni',
    'customize_transition_enabled' => 'Abilita transizioni',
    'customize_transition_time'    => 'Durata',
    'customize_transition_easing'  => 'Easing',

    'customize_utilities' => 'Utilit&agrave;',
    'customize_overflow'  => 'Container overflow-x hidden',
    'customize_zindex'      => 'Range z-index',
    'customize_zindex_hint' => 'Valori inizio e fine, separati da virgola',
    'customize_env'         => 'Ambiente',
    'customize_env_hint'    => 'dev abilita la modalit&agrave; wireframe',

    'customize_yes'       => 'S&igrave;',
    'customize_no'        => 'No',
    'customize_download'  => 'Scarica flexo.css',
    'customize_reset'     => 'Ripristina default',
    'customize_compiling' => 'Compilazione...',

    'nav_customize' => 'Personalizza',

    // Footer
    'footer_documentation' => 'Documentazione',
    'footer_made_by'       => 'Creato da',
    'footer_all_rights'    => 'Tutti i diritti riservati.',
];
