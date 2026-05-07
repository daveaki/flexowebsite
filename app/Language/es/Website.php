<?php

return [
    // Meta
    'home_title'       => 'Inicio',
    'home_description' => 'Flexocss - Framework CSS ligero para grids y layouts basado en flexbox',

    // Nav
    'nav_documentation' => 'Documentaci&oacute;n',
    'nav_tutorial'      => 'Tutorial',
    'nav_download'      => 'Descargar',
    'nav_contacts'      => 'Contactos',
    'nav_lang'          => 'Lang',

    // Hero
    'hero_tagline'      => 'Un framework CSS ligero y utility-first basado en flexbox. Layouts r&aacute;pidos, grids responsive y cero dependencias.',
    'hero_btn_customize' => 'Personalizar',

    // Features
    'features_title'    => 'Por qu&eacute; flexocss',
    'features_subtitle' => 'Todo lo que necesitas, nada que sobre.',

    'feat_lightweight'      => 'Ligero',
    'feat_lightweight_desc' => 'Un &uacute;nico archivo CSS sin JavaScript y sin overhead en tiempo de ejecuci&oacute;n. Solo CSS puro que funciona en todas partes.',

    'feat_flexbox'      => 'Flexbox-first',
    'feat_flexbox_desc' => 'Construido completamente sobre flexbox para layouts predecibles y potentes, sin la complejidad de float o hacks con grid.',

    'feat_configurable'      => 'Totalmente configurable',
    'feat_configurable_desc' => 'Columnas, pasos de gap, padding, ancho del contenedor, transiciones y m&aacute;s. Cada aspecto se controla mediante variables SCSS.',

    'feat_breakpoints'      => '6 breakpoints',
    'feat_breakpoints_desc' => 'Desde m&oacute;vil peque&ntilde;o hasta monitores ultrawide: sm, md, lg, sp, mg, ut. Control total en cada tama&ntilde;o de pantalla.',

    'feat_utility'      => 'Clases de utilidad',
    'feat_utility_desc' => 'Padding, margen, gap, alineaci&oacute;n, visibilidad responsive y m&aacute;s. Todo siguiendo una convenci&oacute;n de nombres consistente.',

    'feat_wireframe'      => 'Modo wireframe',
    'feat_wireframe_desc' => 'Depura tus layouts instant&aacute;neamente con un solo ID. Visualiza l&iacute;mites de columnas, tama&ntilde;os e info de breakpoint de un vistazo.',

    'feat_gap'      => 'Gap-aware',
    'feat_gap_desc' => 'Los anchos de las columnas se calculan teniendo en cuenta los gaps autom&aacute;ticamente. No m&aacute;s layouts rotos por c&aacute;lculos de espaciado.',

    'feat_zero_dep'      => 'Cero dependencias',
    'feat_zero_dep_desc' => 'Ning&uacute;n framework JavaScript requerido. Usa el CSS precompilado directamente o personaliza via SCSS con tu herramienta de build preferida.',

    // Scaffolding
    'scaffolding_title'    => 'Scaffolding',
    'scaffolding_subtitle' => 'Un grid responsive totalmente personalizable con c&aacute;lculos gap-aware.',
    'scaffolding_desc'     => 'Construye layouts complejos en segundos con un sistema de grid flexible que usa 16 columnas por defecto, pero configurable a cualquier n&uacute;mero. Gaps, pasos de padding, anchos de contenedor y transiciones son todos personalizables via variables SCSS. Cada c&aacute;lculo de ancho tiene en cuenta los gaps autom&aacute;ticamente, y seis breakpoints responsive te permiten adaptar cualquier layout desde m&oacute;vil hasta ultrawide.',

    // Wireframe
    'wireframe_title'    => 'Wireframe',
    'wireframe_subtitle' => 'Depuraci&oacute;n visual de layouts durante el desarrollo.',
    'wireframe_desc'     => 'Activa el modo wireframe con un solo ID en la etiqueta body y visualiza instant&aacute;neamente la estructura del grid resaltada con contornos de colores. Cada columna muestra el nombre del breakpoint y su tama&ntilde;o, facilitando la detecci&oacute;n de problemas de alineaci&oacute;n y el ajuste de tus layouts responsive antes de producci&oacute;n.',

    // Breakpoints
    'bp_title'    => 'Breakpoints',
    'bp_subtitle' => 'Seis pasos responsive desde m&oacute;vil hasta ultrawide.',
    'bp_desc'     => 'Cada breakpoint usa un enfoque mobile-first con media queries min-width. Las clases siguen el patr&oacute;n <code class="color-dark">fl-{breakpoint}-{propiedad}-{valor}</code> para una API consistente y predecible.',

    'bp_col_breakpoint' => 'Breakpoint',
    'bp_col_prefix'     => 'Prefijo',
    'bp_col_minwidth'   => 'Min-width',
    'bp_col_target'     => 'Destino',

    'bp_small'   => 'Small',
    'bp_medium'  => 'Medium',
    'bp_large'   => 'Large',
    'bp_special' => 'Super',
    'bp_mega'    => 'Mega',
    'bp_ultra'   => 'Ultra',

    'bp_target_small'   => 'Smartphones peque&ntilde;os',
    'bp_target_medium'  => 'Smartphones grandes',
    'bp_target_large'   => 'Tablets',
    'bp_target_special' => 'Laptops / escritorios peque&ntilde;os',
    'bp_target_mega'    => 'Escritorios grandes',
    'bp_target_ultra'   => 'Monitores ultrawide',

    // Get Started
    'getstarted_title'    => 'Empezar',
    'getstarted_subtitle' => 'Instala flexocss en tu proyecto en segundos.',
    'getstarted_desc'     => 'Elige tu m&eacute;todo preferido: instala via npm para personalizar columnas, gaps, padding, ancho del contenedor, transiciones y m&aacute;s via SCSS &mdash; o incluye el enlace CDN para cero configuraci&oacute;n.',

    // Contact page
    'contact_title'       => 'Contacto',
    'contact_description' => 'Ponte en contacto con el equipo de flexocss.',
    'contact_hero_title'  => 'Cont&aacute;ctanos',
    'contact_hero_desc'   => '&iquest;Tienes una pregunta sobre flexocss? &iquest;Encontraste un bug? &iquest;Quieres contribuir? Nos encanta saber de ti.',
    'contact_info_title'  => 'C&oacute;mo contactarnos',
    'contact_info_desc'   => 'flexocss es un proyecto de c&oacute;digo abierto. La mejor manera de contactarnos es a trav&eacute;s de issues en GitHub o enviando un mensaje con el formulario.',
    'contact_github'      => 'Abrir una issue en GitHub',
    'contact_npm'         => 'Ver en npm',
    'contact_form_title'  => 'Enviar un mensaje',
    'contact_name'        => 'Nombre',
    'contact_email'       => 'Email',
    'contact_subject'     => 'Asunto',
    'contact_message'     => 'Mensaje',
    'contact_send'        => 'Enviar mensaje',
    'contact_name_ph'     => 'Tu nombre',
    'contact_email_ph'    => 'tu@email.com',
    'contact_subject_ph'  => '&iquest;En qu&eacute; podemos ayudarte?',
    'contact_message_ph'  => 'Escribe tu mensaje aqu&iacute;...',
    'contact_success'     => '&iexcl;Gracias! Tu mensaje ha sido enviado.',
    'contact_error'       => 'Algo sali&oacute; mal. Por favor int&eacute;ntalo de nuevo.',

    // Footer
    'footer_documentation' => 'Documentaci&oacute;n',
    'footer_made_by'       => 'Creado por',
    'footer_all_rights'    => 'Todos los derechos reservados.',
];
