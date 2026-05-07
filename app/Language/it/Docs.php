<?php

return [
    // Meta
    'meta_title_getting_started' => 'Inizia',
    'meta_desc_getting_started'  => 'Installa flexocss e crea il tuo primo layout in pochi minuti.',
    'meta_title_grid'            => 'Griglia',
    'meta_desc_grid'             => 'Scopri come funziona il sistema a griglia a 16 colonne di flexocss.',
    'meta_title_breakpoints'     => 'Breakpoint',
    'meta_desc_breakpoints'      => 'Sei breakpoint responsive dal mobile all\'ultrawide.',
    'meta_title_utilities'       => 'Utility',
    'meta_desc_utilities'        => 'Classi utility responsive per allineamento, visibilit&agrave;, padding e altro.',
    'meta_title_wireframe'       => 'Wireframe',
    'meta_desc_wireframe'        => 'Debug visuale dei layout con la modalit&agrave; wireframe.',
    'meta_title_customization'   => 'Personalizzazione',
    'meta_desc_customization'    => 'Personalizza flexocss tramite variabili SCSS.',

    // Sidebar nav
    'nav_getting_started' => 'Inizia',
    'nav_grid'            => 'Griglia',
    'nav_breakpoints'     => 'Breakpoint',
    'nav_utilities'       => 'Utility',
    'nav_wireframe'       => 'Wireframe',
    'nav_customization'   => 'Personalizzazione',

    // Gap & Area page
    'nav_gap_and_area'          => 'Gap &amp; Area',
    'meta_title_gap_and_area'   => 'Gap &amp; Area',
    'meta_desc_gap_and_area'    => 'Controlla la spaziatura in flexocss con le classi gap, padding e area.',

    'gap_title' => 'Gap &amp; Area',
    'gap_intro' => 'Flexocss fornisce tre utility di spaziatura complementari: <strong>gap</strong> controlla lo spazio tra le colonne di una row, <strong>padding</strong> aggiunge spaziatura interna a qualsiasi elemento, e <strong>area</strong> applica padding verticale alle sezioni. Tutte e tre supportano i prefissi responsive dei breakpoint.',

    'gap_gap_title'   => 'Gap',
    'gap_gap_desc'    => 'Applica le classi gap a una <code>.row</code> per controllare la spaziatura tra le colonne. Il pattern &egrave; <code>.fl-{bp}-gap-{valore}</code>. Le larghezze delle colonne sono gap-aware: sottraggono automaticamente la frazione corretta del gap, cos&igrave; il layout non si rompe mai.',
    'gap_gap_values'  => 'Valori di default: da 0 a 80px con step di 8. Configurabile tramite <code>$gapStep</code> e <code>$gapNumber</code>.',
    'gap_gap_example' => 'Confronto gap',
    'gap_gap_explain' => 'Usa valori gap diversi per breakpoint per layout pi&ugrave; compatti su mobile e pi&ugrave; ariosi su desktop.',

    'gap_padding_title'   => 'Padding',
    'gap_padding_desc'    => 'Aggiungi padding interno a qualsiasi elemento. Il pattern &egrave; <code>.fl-{bp}-padding-{valore}</code>. A differenza del gap, il padding funziona su qualsiasi elemento, non solo sulle row.',
    'gap_padding_values'  => 'Valori di default: da 0 a 96px con step di 8. Configurabile tramite <code>$paddingStep</code> e <code>$paddingNumber</code>.',
    'gap_padding_example' => 'Confronto padding',

    'gap_area_title'   => 'Area',
    'gap_area_desc'    => 'Le classi area applicano padding verticale (sopra e sotto) alle sezioni. Usale su elementi wrapper come <code>&lt;section&gt;</code> per creare un ritmo verticale coerente nella pagina. Il pattern &egrave; <code>.fl-{bp}-area-{valore}</code>.',
    'gap_area_values'  => 'Valori di default: da 0 a 160px con step di 16. Configurabile tramite <code>$gapStepArea</code> e <code>$gapNumberArea</code>.',
    'gap_area_example' => 'Confronto area',
    'gap_area_explain' => 'Combina le classi area per breakpoint per creare sezioni pi&ugrave; ariose su schermi grandi: <code>fl-sm-area-32 fl-lg-area-64 fl-sp-area-96</code>.',

    'gap_col_class' => 'Classe',
    'gap_col_css'   => 'Propriet&agrave; CSS',
    'gap_up_to'     => 'fino a',

    'gap_prev' => 'Precedente',
    'gap_next' => 'Successivo',

    // Getting Started page
    'gs_title' => 'Inizia',
    'gs_intro' => 'Flexocss &egrave; un framework CSS leggero basato su flexbox. Offre una griglia responsive a 16 colonne, classi utility e una modalit&agrave; wireframe per il debug. Nessun JavaScript, zero dipendenze.',

    'gs_install_title' => 'Installazione',
    'gs_install_desc'  => 'Puoi installare flexocss via npm per la personalizzazione completa via SCSS, oppure includere il CSS precompilato via CDN senza alcuna configurazione.',

    'gs_npm_title'    => 'npm',
    'gs_npm_desc'     => 'Installa il pacchetto da npm:',
    'gs_npm_import'   => 'Poi importalo nel tuo file SCSS:',
    'gs_npm_override' => 'Per sovrascrivere le variabili di configurazione, usa la sintassi <code>with</code>:',

    'gs_cdn_title' => 'CDN',
    'gs_cdn_desc'  => 'Includi il CSS direttamente nel tuo HTML per un setup rapido con le impostazioni di default:',

    'gs_structure_title'   => 'Struttura base',
    'gs_structure_desc'    => 'Flexocss utilizza tre livelli di annidamento: <code>container</code>, <code>row</code> e <code>fl-box</code>. La griglia usa 16 colonne di default.',
    'gs_structure_explain' => 'Ecco cosa fa ogni classe:',

    'gs_explain_container' => '&mdash; centra il contenuto e imposta una larghezza massima.',
    'gs_explain_fluid'     => '&mdash; rende il container a larghezza piena.',
    'gs_explain_row'       => '&mdash; crea una riga flex che wrappa i suoi figli.',
    'gs_explain_box'       => '&mdash; definisce un elemento flex (colonna).',
    'gs_explain_col'       => '&mdash; imposta la larghezza della colonna, dove <code>n</code> &egrave; un valore da 1 a 16.',

    'gs_example_title' => 'Esempio live',

    'gs_responsive_title'   => 'Layout responsive',
    'gs_responsive_desc'    => 'Aggiungi i prefissi dei breakpoint per cambiare la larghezza delle colonne a diverse dimensioni dello schermo. Flexocss segue un approccio mobile-first: i breakpoint pi&ugrave; piccoli si applicano verso l\'alto a meno che non vengano sovrascritti.',
    'gs_responsive_explain' => 'Questa colonna occupa tutta la larghezza su mobile (<code>fl-16</code>), met&agrave; su tablet (<code>fl-lg-8</code>) e circa un terzo su desktop (<code>fl-sp-5</code>).',

    'gs_next' => 'Successivo',

    // Grid page
    'grid_title' => 'Griglia',
    'grid_intro' => 'Flexocss usa un sistema a griglia a 16 colonne basato su flexbox. Le larghezze delle colonne sono calcolate automaticamente tenendo conto dei gap, cos&igrave; i layout non si rompono mai per calcoli di spaziatura.',

    'grid_container_title' => 'Container',
    'grid_container_desc'  => 'Il <code>.container</code> centra il contenuto e imposta una larghezza massima di 1420px. Aggiungi <code>.fluid</code> per un container a larghezza piena senza limiti.',

    'grid_row_title' => 'Row',
    'grid_row_desc'  => 'La <code>.row</code> crea un contenitore flex con wrapping attivo. Come il container, ha una larghezza massima di 1420px e si centra automaticamente.',
    'grid_row_explain_row'   => '&mdash; riga flex con wrap, max-width 1420px, centrata automaticamente.',
    'grid_row_explain_fluid' => '&mdash; rimuove il max-width, prende tutta la larghezza disponibile.',
    'grid_row_explain_block' => '&mdash; passa a direzione colonna per layout impilati.',

    'grid_columns_title'   => 'Colonne',
    'grid_columns_desc'    => 'Usa <code>.fl-box</code> con <code>.fl-{n}</code> dove n &egrave; un valore da 1 a 16. Tutte le larghezze sono gap-aware: i calcoli delle colonne sottraggono la frazione appropriata del gap cos&igrave; il totale si adatta sempre perfettamente.',
    'grid_columns_example' => 'Esempi',

    'grid_auto_title' => 'Larghezza automatica',
    'grid_auto_desc'  => 'Usa <code>.fl-auto</code> per far s&igrave; che le colonne condividano lo spazio disponibile in parti uguali. Utile quando non serve un controllo preciso delle colonne.',

    'grid_gap_title'   => 'Gap',
    'grid_gap_desc'    => 'Applica le classi gap sulla <code>.row</code> per controllare la spaziatura tra le colonne. Il pattern &egrave; <code>.fl-{bp}-gap-{valore}</code> dove il valore va da 0 a 80 con step di 8.',
    'grid_gap_explain' => 'I gap sono responsive: usa valori diversi per breakpoint. Le larghezze delle colonne si adattano automaticamente al gap, mantenendo il layout intatto.',
    'grid_gap_example' => 'Confronto gap',

    'grid_offset_title'      => 'Offset',
    'grid_offset_desc'       => 'Spingi una colonna a destra usando <code>.fl-offset-{n}</code>. L\'offset &egrave; gap-aware, quindi tiene conto del gap della riga nel calcolo.',
    'grid_offset_responsive' => 'Anche gli offset sono responsive. Usa <code>.fl-{bp}-offset-{n}</code> per cambiare o resettare l\'offset a breakpoint diversi.',

    'grid_nesting_title' => 'Nesting',
    'grid_nesting_desc'  => 'Inserisci una <code>.row</code> dentro un <code>.fl-box</code> per creare griglie annidate. Ogni riga annidata ottiene il suo contesto a 16 colonne.',

    'grid_prev' => 'Precedente',
    'grid_next' => 'Successivo',

    // Breakpoints page
    'bp_title' => 'Breakpoint',
    'bp_intro' => 'Flexocss fornisce sei breakpoint responsive con un approccio mobile-first basato su media query min-width. Ogni breakpoint sblocca un set di classi utility con prefisso che sovrascrivono i valori degli schermi pi&ugrave; piccoli.',

    'bp_table_title'  => 'Panoramica',
    'bp_col_name'     => 'Breakpoint',
    'bp_col_prefix'   => 'Prefisso',
    'bp_col_min'      => 'Min-width',
    'bp_col_target'   => 'Destinazione',
    'bp_target_sm'    => 'Smartphone piccoli',
    'bp_target_md'    => 'Smartphone grandi',
    'bp_target_lg'    => 'Tablet',
    'bp_target_sp'    => 'Laptop / desktop piccoli',
    'bp_target_mg'    => 'Desktop grandi',
    'bp_target_ut'    => 'Monitor ultrawide',

    'bp_mobile_title'   => 'Mobile-first',
    'bp_mobile_desc'    => 'Flexocss segue una strategia mobile-first. Le classi base (senza prefisso o con <code>sm</code>) si applicano da 0px in su. Ogni breakpoint sovrascrive il precedente man mano che lo schermo cresce.',
    'bp_mobile_explain' => 'In questo esempio la colonna &egrave; a larghezza piena su mobile (<code>fl-16</code>), 8/16 da 768px (<code>fl-lg-8</code>) e 5/16 da 1024px (<code>fl-sp-5</code>). I breakpoint pi&ugrave; piccoli si propagano verso l\'alto fino a quando non vengono sovrascritti.',

    'bp_pattern_title' => 'Pattern delle classi',
    'bp_pattern_desc'  => 'Tutte le classi responsive seguono una convenzione di naming coerente. Il prefisso del breakpoint determina quando la regola si attiva:',

    'bp_examples_title' => 'Esempi responsive',
    'bp_examples_desc'  => 'La maggior parte delle classi flexocss supporta i prefissi dei breakpoint. Ecco alcuni pattern comuni:',

    'bp_ex_gap_title' => 'Gap responsive',

    'bp_ex_visibility_title'  => 'Visibilit&agrave; responsive',
    'bp_ex_visibility_desc'   => 'Mostra o nascondi elementi a breakpoint specifici:',
    'bp_ex_visibility_tablet' => 'Visibile da tablet (lg) in su',
    'bp_ex_visibility_mobile' => 'Visibile solo su mobile',

    'bp_ex_area_title' => 'Area responsive (padding verticale)',
    'bp_ex_area_desc'  => 'Usa le classi area per aggiungere padding verticale responsive alle sezioni:',

    'bp_custom_title' => 'Personalizzazione',
    'bp_custom_desc'  => 'I nomi e i valori dei breakpoint sono completamente configurabili via SCSS. Sovrascrivi <code>$bp</code> e <code>$mediaQuery</code> per adattarli al tuo progetto:',

    'bp_prev' => 'Precedente',
    'bp_next' => 'Successivo',

    // Utilities page
    'ut_title' => 'Utility',
    'ut_intro' => 'Flexocss include un ampio set di classi utility per allineamento, visibilit&agrave;, spaziatura, posizionamento e altro. Tutte le utility supportano i prefissi responsive dei breakpoint.',

    'ut_col_class' => 'Classe',
    'ut_col_css'   => 'Propriet&agrave; CSS',

    'ut_align_title' => 'Allineamento',
    'ut_align_desc'  => 'Controlla come gli elementi flex sono posizionati lungo l\'asse principale e trasversale. Tutte le classi di allineamento supportano i prefissi dei breakpoint: <code>.fl-{bp}-justify-center</code>, <code>.fl-{bp}-align-items-end</code>, ecc.',

    'ut_place_desc' => '<code>.place-center</code> &egrave; una scorciatoia che combina <code>justify-content: center</code> e <code>align-items: center</code> per centrare rapidamente.',

    'ut_visibility_title' => 'Visibilit&agrave;',
    'ut_visibility_desc'  => 'Mostra o nascondi elementi con controllo responsive. Tutte le classi di visibilit&agrave; supportano i prefissi dei breakpoint: <code>.fl-{bp}-hidden</code>, <code>.fl-{bp}-visible</code>, ecc.',

    'ut_padding_title'  => 'Padding',
    'ut_padding_desc'   => 'Aggiungi padding responsive a qualsiasi elemento. Il pattern &egrave; <code>.fl-{bp}-padding-{valore}</code>.',
    'ut_padding_values' => 'Valori di default: da 0 a 96px con step di 8. Configurabile tramite le variabili SCSS <code>$paddingStep</code> e <code>$paddingNumber</code>.',

    'ut_area_title'  => 'Area (padding verticale)',
    'ut_area_desc'   => 'Le classi area applicano padding verticale (sopra e sotto) alle sezioni. Il pattern &egrave; <code>.fl-{bp}-area-{valore}</code>.',
    'ut_area_values' => 'Valori di default: da 0 a 160px con step di 16. Configurabile tramite <code>$gapStepArea</code> e <code>$gapNumberArea</code>.',

    'ut_text_title' => 'Allineamento testo',
    'ut_text_desc'  => 'Controlla l\'allineamento del testo con prefissi responsive: <code>.fl-{bp}-text-center</code>, <code>.fl-{bp}-text-left</code>, ecc.',

    'ut_order_title' => 'Ordine',
    'ut_order_desc'  => 'Cambia l\'ordine visuale degli elementi flex senza modificare l\'HTML. Supporta prefissi responsive: <code>.fl-{bp}-order-{n}</code>.',

    'ut_position_title' => 'Posizione &amp; fill',
    'ut_position_desc'  => 'Utility rapide per posizionamento e dimensionamento:',

    'ut_zindex_title' => 'Z-index',
    'ut_zindex_desc'  => 'Controlla l\'ordine di sovrapposizione con <code>.z-index-{n}</code> dove n va da 0 a 10 di default. Configurabile tramite <code>$zIndex</code>.',

    'ut_reset_title' => 'Reset margini &amp; padding',
    'ut_reset_desc'  => 'Rimuovi forzatamente margini o padding da qualsiasi elemento:',

    'ut_prev' => 'Precedente',
    'ut_next' => 'Successivo',

    // Wireframe page
    'wf_title' => 'Wireframe',
    'wf_intro' => 'La modalit&agrave; wireframe &egrave; uno strumento di debug visuale integrato in flexocss. Evidenzia la struttura della griglia con contorni colorati, sfondi e etichette informative per individuare i problemi di layout a colpo d\'occhio.',

    'wf_live_example' => 'Esempio live',

    'wf_activate_title' => 'Attivazione',
    'wf_activate_desc'  => 'Aggiungi <code>id="wireframe"</code> al tag <code>&lt;body&gt;</code> per abilitare la modalit&agrave; wireframe:',
    'wf_activate_note'  => 'La modalit&agrave; wireframe &egrave; disponibile solo quando <code>$env</code> &egrave; impostato su <code>\'dev\'</code> (il default). Nelle build di produzione viene esclusa completamente.',

    'wf_modes_title' => 'Modalit&agrave; di visualizzazione',
    'wf_modes_desc'  => 'Il wireframe supporta diverse modalit&agrave; di visualizzazione combinabili tramite classi sul tag body:',

    'wf_outline_title'     => 'Modalit&agrave; outline (default)',
    'wf_outline_desc'      => 'Con solo <code>id="wireframe"</code>, ogni elemento della griglia ottiene un contorno colorato:',
    'wf_outline_container' => '&mdash; contorno scuro (#1f2640)',
    'wf_outline_row'       => '&mdash; contorno viola (#aa41c8)',
    'wf_outline_box'       => '&mdash; contorno blu (#3f4b80) con sfondo chiaro',

    'wf_fill_title'     => 'Modalit&agrave; fill',
    'wf_fill_desc'      => 'Aggiungi <code>class="fill"</code> per sostituire i contorni con colori di sfondo pieni:',
    'wf_fill_colors'    => 'Ogni livello di annidamento ottiene un colore distinto:',
    'wf_fill_container' => '&mdash; sfondo scuro (#1f2640)',
    'wf_fill_row'       => '&mdash; sfondo viola (#aa41c8)',
    'wf_fill_box'       => '&mdash; sfondo blu (#7d96ff)',

    'wf_border_title' => 'Modalit&agrave; bordo',
    'wf_border_desc'  => 'Aggiungi <code>class="border-{n}"</code> (da 1 a 5) per aggiungere bordi visibili sopra la modalit&agrave; fill. Utile per vedere i confini esatti tra elementi adiacenti.',

    'wf_info_title'   => 'Modalit&agrave; info',
    'wf_info_desc'    => 'Aggiungi <code>class="info"</code> per mostrare etichette con breakpoint e dimensione su ogni colonna:',
    'wf_info_explain' => 'Ogni <code>.fl-box</code> mostra un\'etichetta come <code>*sm 8/16</code> che indica il breakpoint corrente e la dimensione della colonna. Le etichette si aggiornano automaticamente al variare del viewport.',

    'wf_combined_title' => 'Combinare le modalit&agrave;',
    'wf_combined_desc'  => 'Le modalit&agrave; possono essere combinate liberamente. Ecco le combinazioni pi&ugrave; comuni:',

    'wf_scaffold_title' => 'Esempio scaffold',
    'wf_scaffold_desc'  => 'Ecco come appare la modalit&agrave; wireframe applicata a una struttura di pagina completa: navigazione, hero, features a tre colonne, contenuto a due colonne e footer.',

    'wf_env_title' => 'Controllo ambiente',
    'wf_env_desc'  => 'Il modulo wireframe viene compilato condizionalmente in base alla variabile <code>$env</code>:',
    'wf_env_note'  => 'Quando <code>$env</code> &egrave; <code>\'prod\'</code>, tutto il CSS wireframe viene escluso dall\'output, mantenendo pulito il bundle di produzione.',

    'wf_custom_title' => 'Personalizzazione',
    'wf_custom_desc'  => 'Tutti i colori e gli stili del wireframe sono configurabili tramite variabili SCSS:',
    'wf_col_var'      => 'Variabile',
    'wf_col_default'  => 'Default',
    'wf_col_role'     => 'Ruolo',
    'wf_var_outline_container' => 'Colore contorno container',
    'wf_var_outline_row'       => 'Colore contorno row',
    'wf_var_outline_box'       => 'Colore contorno box',
    'wf_var_fill_container'    => 'Colore riempimento container',
    'wf_var_fill_row'          => 'Colore riempimento row',
    'wf_var_fill_box'          => 'Colore riempimento box',
    'wf_var_info_bg'           => 'Sfondo etichetta info',
    'wf_var_info_text'         => 'Colore testo etichetta info',

    'wf_prev' => 'Precedente',
    'wf_next' => 'Successivo',

    // Customization page
    'cust_title' => 'Personalizzazione',
    'cust_intro' => 'Ogni aspetto di flexocss &egrave; controllato tramite variabili SCSS. Sovrascrivile prima di importare il framework per adattare griglia, spaziatura, breakpoint e transizioni al tuo progetto.',

    'cust_how_title' => 'Come sovrascrivere',
    'cust_how_desc'  => 'Usa la sintassi SCSS <code>@use ... with</code> per sovrascrivere qualsiasi variabile di default. Specifica solo le variabili che vuoi modificare:',

    'cust_col_var'     => 'Variabile',
    'cust_col_default' => 'Default',
    'cust_col_desc'    => 'Descrizione',

    'cust_grid_title' => 'Griglia',
    'cust_grid_desc'  => 'Controlla il numero di colonne, la larghezza del container e il padding dei box:',
    'cust_var_box'          => 'Numero di colonne della griglia',
    'cust_var_container'    => 'Max-width di container e row',
    'cust_var_containerLM'  => 'Max-width al breakpoint pi&ugrave; grande',
    'cust_var_boxpadding'   => 'Padding di default per .fl-box',
    'cust_var_boxpaddingin' => 'Padding di default per .fl-box-in',

    'cust_bp_title' => 'Breakpoint',
    'cust_bp_desc'  => 'Definisci i nomi dei breakpoint e i corrispondenti valori min-width:',
    'cust_var_bp'    => 'Nomi dei breakpoint separati da virgola',
    'cust_var_mq'    => 'Valori min-width (uno in meno di $bp)',
    'cust_var_mqmax' => 'Limite superiore per le media query',
    'cust_bp_note'   => 'Il primo breakpoint (sm) &egrave; la base e non ha media query. <code>$mediaQuery</code> deve avere esattamente un valore in meno di <code>$bp</code>.',

    'cust_spacing_title'   => 'Gap &amp; spaziatura',
    'cust_spacing_desc'    => 'Controlla le classi gap, padding e area generate:',
    'cust_var_gapstep'     => 'Incremento in px tra le classi gap',
    'cust_var_gapnumber'   => 'Numero di step gap da generare',
    'cust_var_areastep'    => 'Incremento per le classi area (padding verticale)',
    'cust_var_areanumber'  => 'Numero di step area',
    'cust_var_paddingstep'   => 'Incremento per le classi padding',
    'cust_var_paddingnumber' => 'Numero di step padding',
    'cust_var_paddingarea'   => 'Padding verticale di default per breakpoint',
    'cust_spacing_formula'   => 'Il valore massimo generato &egrave; <code>step &times; number</code>. Ad esempio, con <code>$gapStep: 8</code> e <code>$gapNumber: 10</code>, le classi gap vanno da 0 a 80px.',

    'cust_order_title'    => 'Ordine',
    'cust_var_ordermin'   => 'Valore minimo di order',
    'cust_var_ordermax'   => 'Valore massimo di order',

    'cust_transition_title' => 'Transizioni',
    'cust_transition_desc'  => 'Flexocss applica transizioni CSS agli elementi div per cambiamenti responsive fluidi:',
    'cust_var_transition'       => 'Abilita/disabilita le transizioni globalmente',
    'cust_var_transitiontime'   => 'Durata della transizione',
    'cust_var_transitioneasing' => 'Funzione di easing',

    'cust_font_title' => 'Pesi dei font',

    'cust_misc_title'      => 'Varie',
    'cust_var_env'         => 'Ambiente: \'dev\' abilita il wireframe, \'prod\' lo disabilita',
    'cust_var_overflow'    => 'Aggiunge overflow-x: hidden al .container',
    'cust_var_zindex'      => 'Range z-index (inizio, fine)',

    'cust_full_title' => 'Esempio completo',
    'cust_full_desc'  => 'Un esempio di configurazione completa per una griglia a 12 colonne con spaziatura ridotta:',

    'cust_prev' => 'Precedente',
    'cust_next' => 'Successivo',

    // Scaffold page
    'nav_scaffold'           => 'Esempio Scaffold',
    'meta_title_scaffold'    => 'Esempio Scaffold',
    'meta_desc_scaffold'     => 'Un template di pagina completo costruito con flexocss: hero, sezioni di contenuto e footer.',

    'sc_title' => 'Esempio Scaffold',
    'sc_intro' => 'Questa pagina mostra un template reale completo costruito esclusivamente con flexocss. Include una sezione hero, tre sezioni di contenuto con layout sia orizzontali che verticali, e un footer — tutto usando <code>.container</code>, <code>.row</code>, <code>.fl-box</code> e classi utility responsive.',

    'sc_preview_title' => 'Anteprima live',
    'sc_code_title'    => 'Codice completo',

    'sc_hero_label'     => 'Hero',
    'sc_features_label' => 'Feature',
    'sc_content_label'  => 'Contenuto',
    'sc_cards_label'    => 'Card',
    'sc_footer_label'   => 'Footer',

    'sc_prev' => 'Precedente',
];
