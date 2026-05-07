<?php

return [
    // Meta
    'meta_title_getting_started' => 'Empezar',
    'meta_desc_getting_started'  => 'Instala flexocss y crea tu primer layout en minutos.',
    'meta_title_grid'            => 'Grid',
    'meta_desc_grid'             => 'Aprende c&oacute;mo funciona el sistema de grilla de 16 columnas de flexocss.',
    'meta_title_breakpoints'     => 'Breakpoints',
    'meta_desc_breakpoints'      => 'Seis breakpoints responsive desde m&oacute;vil hasta ultrawide.',
    'meta_title_utilities'       => 'Utilidades',
    'meta_desc_utilities'        => 'Clases de utilidad responsive para alineaci&oacute;n, visibilidad, padding y m&aacute;s.',
    'meta_title_wireframe'       => 'Wireframe',
    'meta_desc_wireframe'        => 'Depuraci&oacute;n visual de layouts con el modo wireframe.',
    'meta_title_customization'   => 'Personalizaci&oacute;n',
    'meta_desc_customization'    => 'Personaliza flexocss a trav&eacute;s de variables SCSS.',

    // Sidebar nav
    'nav_getting_started' => 'Empezar',
    'nav_grid'            => 'Grid',
    'nav_breakpoints'     => 'Breakpoints',
    'nav_utilities'       => 'Utilidades',
    'nav_wireframe'       => 'Wireframe',
    'nav_customization'   => 'Personalizaci&oacute;n',

    // Gap & Area page
    'nav_gap_and_area'          => 'Gap &amp; Area',
    'meta_title_gap_and_area'   => 'Gap &amp; Area',
    'meta_desc_gap_and_area'    => 'Controla el espaciado en flexocss con las clases gap, padding y area.',

    'gap_title' => 'Gap &amp; Area',
    'gap_intro' => 'Flexocss proporciona tres utilidades de espaciado complementarias: <strong>gap</strong> controla el espacio entre columnas de una row, <strong>padding</strong> a&ntilde;ade espaciado interno a cualquier elemento, y <strong>area</strong> aplica padding vertical a las secciones. Las tres soportan prefijos de breakpoint responsive.',

    'gap_gap_title'   => 'Gap',
    'gap_gap_desc'    => 'Aplica las clases gap en una <code>.row</code> para controlar el espaciado entre columnas. El patr&oacute;n es <code>.fl-{bp}-gap-{valor}</code>. Los anchos de columna son gap-aware: restan autom&aacute;ticamente la fracci&oacute;n correcta del gap, por lo que el layout nunca se rompe.',
    'gap_gap_values'  => 'Valores por defecto: de 0 a 80px en pasos de 8. Configurable via <code>$gapStep</code> y <code>$gapNumber</code>.',
    'gap_gap_example' => 'Comparaci&oacute;n gap',
    'gap_gap_explain' => 'Usa valores de gap distintos por breakpoint para layouts m&aacute;s compactos en m&oacute;vil y m&aacute;s espaciados en desktop.',

    'gap_padding_title'   => 'Padding',
    'gap_padding_desc'    => 'A&ntilde;ade padding interno a cualquier elemento. El patr&oacute;n es <code>.fl-{bp}-padding-{valor}</code>. A diferencia del gap, el padding funciona en cualquier elemento, no solo en rows.',
    'gap_padding_values'  => 'Valores por defecto: de 0 a 96px en pasos de 8. Configurable via <code>$paddingStep</code> y <code>$paddingNumber</code>.',
    'gap_padding_example' => 'Comparaci&oacute;n padding',

    'gap_area_title'   => 'Area',
    'gap_area_desc'    => 'Las clases area aplican padding vertical (arriba y abajo) a las secciones. &Uacute;salas en elementos wrapper como <code>&lt;section&gt;</code> para crear un ritmo vertical coherente en la p&aacute;gina. El patr&oacute;n es <code>.fl-{bp}-area-{valor}</code>.',
    'gap_area_values'  => 'Valores por defecto: de 0 a 160px en pasos de 16. Configurable via <code>$gapStepArea</code> y <code>$gapNumberArea</code>.',
    'gap_area_example' => 'Comparaci&oacute;n area',
    'gap_area_explain' => 'Combina las clases area por breakpoint para secciones m&aacute;s espaciadas en pantallas grandes: <code>fl-sm-area-32 fl-lg-area-64 fl-sp-area-96</code>.',

    'gap_col_class' => 'Clase',
    'gap_col_css'   => 'Propiedad CSS',
    'gap_up_to'     => 'hasta',

    'gap_prev' => 'Anterior',
    'gap_next' => 'Siguiente',

    // Getting Started page
    'gs_title' => 'Empezar',
    'gs_intro' => 'Flexocss es un framework CSS ligero basado en flexbox. Ofrece una grilla responsive de 16 columnas, clases de utilidad y un modo wireframe para depuraci&oacute;n. Sin JavaScript, cero dependencias.',

    'gs_install_title' => 'Instalaci&oacute;n',
    'gs_install_desc'  => 'Puedes instalar flexocss via npm para personalizaci&oacute;n completa via SCSS, o incluir el CSS precompilado via CDN sin ninguna configuraci&oacute;n.',

    'gs_npm_title'    => 'npm',
    'gs_npm_desc'     => 'Instala el paquete desde npm:',
    'gs_npm_import'   => 'Luego imp&oacute;rtalo en tu archivo SCSS:',
    'gs_npm_override' => 'Para sobreescribir las variables de configuraci&oacute;n, usa la sintaxis <code>with</code>:',

    'gs_cdn_title' => 'CDN',
    'gs_cdn_desc'  => 'Incluye el CSS directamente en tu HTML para un setup r&aacute;pido con la configuraci&oacute;n por defecto:',

    'gs_structure_title'   => 'Estructura b&aacute;sica',
    'gs_structure_desc'    => 'Flexocss utiliza tres niveles de anidamiento: <code>container</code>, <code>row</code> y <code>fl-box</code>. La grilla usa 16 columnas por defecto.',
    'gs_structure_explain' => 'Esto es lo que hace cada clase:',

    'gs_explain_container' => '&mdash; centra el contenido y establece un ancho m&aacute;ximo.',
    'gs_explain_fluid'     => '&mdash; hace que el contenedor ocupe todo el ancho.',
    'gs_explain_row'       => '&mdash; crea una fila flex que envuelve a sus hijos.',
    'gs_explain_box'       => '&mdash; define un elemento flex (columna).',
    'gs_explain_col'       => '&mdash; establece el ancho de la columna, donde <code>n</code> es un valor de 1 a 16.',

    'gs_example_title' => 'Ejemplo en vivo',

    'gs_responsive_title'   => 'Layout responsive',
    'gs_responsive_desc'    => 'Agrega prefijos de breakpoints para cambiar el ancho de las columnas en diferentes tama&ntilde;os de pantalla. Flexocss sigue un enfoque mobile-first: los breakpoints m&aacute;s peque&ntilde;os se aplican hacia arriba a menos que sean sobreescritos.',
    'gs_responsive_explain' => 'Esta columna ocupa todo el ancho en m&oacute;vil (<code>fl-16</code>), la mitad en tablet (<code>fl-lg-8</code>) y aproximadamente un tercio en desktop (<code>fl-sp-5</code>).',

    'gs_next' => 'Siguiente',

    // Grid page
    'grid_title' => 'Grid',
    'grid_intro' => 'Flexocss usa un sistema de grilla de 16 columnas basado en flexbox. Los anchos de las columnas se calculan autom&aacute;ticamente teniendo en cuenta los gaps, as&iacute; los layouts nunca se rompen por c&aacute;lculos de espaciado.',

    'grid_container_title' => 'Container',
    'grid_container_desc'  => 'El <code>.container</code> centra el contenido y establece un ancho m&aacute;ximo de 1420px. Agrega <code>.fluid</code> para un contenedor de ancho completo sin l&iacute;mites.',

    'grid_row_title' => 'Row',
    'grid_row_desc'  => 'La <code>.row</code> crea un contenedor flex con wrapping activado. Como el container, tiene un ancho m&aacute;ximo de 1420px y se centra autom&aacute;ticamente.',
    'grid_row_explain_row'   => '&mdash; fila flex con wrap, max-width 1420px, centrada autom&aacute;ticamente.',
    'grid_row_explain_fluid' => '&mdash; elimina el max-width, toma todo el ancho disponible.',
    'grid_row_explain_block' => '&mdash; cambia a direcci&oacute;n columna para layouts apilados.',

    'grid_columns_title'   => 'Columnas',
    'grid_columns_desc'    => 'Usa <code>.fl-box</code> con <code>.fl-{n}</code> donde n es un valor de 1 a 16. Todos los anchos son gap-aware: los c&aacute;lculos de las columnas restan la fracci&oacute;n apropiada del gap para que el total siempre encaje perfectamente.',
    'grid_columns_example' => 'Ejemplos',

    'grid_auto_title' => 'Ancho autom&aacute;tico',
    'grid_auto_desc'  => 'Usa <code>.fl-auto</code> para que las columnas compartan el espacio disponible equitativamente. &Uacute;til cuando no necesitas control preciso de las columnas.',

    'grid_gap_title'   => 'Gap',
    'grid_gap_desc'    => 'Aplica las clases gap en la <code>.row</code> para controlar el espaciado entre columnas. El patr&oacute;n es <code>.fl-{bp}-gap-{valor}</code> donde el valor va de 0 a 80 en pasos de 8.',
    'grid_gap_explain' => 'Los gaps son responsive: usa valores diferentes por breakpoint. Los anchos de las columnas se ajustan autom&aacute;ticamente al gap, manteniendo el layout intacto.',
    'grid_gap_example' => 'Comparaci&oacute;n de gaps',

    'grid_offset_title'      => 'Offset',
    'grid_offset_desc'       => 'Empuja una columna hacia la derecha usando <code>.fl-offset-{n}</code>. El offset es gap-aware, por lo que tiene en cuenta el gap de la fila en su c&aacute;lculo.',
    'grid_offset_responsive' => 'Los offsets tambi&eacute;n son responsive. Usa <code>.fl-{bp}-offset-{n}</code> para cambiar o resetear el offset en diferentes breakpoints.',

    'grid_nesting_title' => 'Anidamiento',
    'grid_nesting_desc'  => 'Coloca una <code>.row</code> dentro de un <code>.fl-box</code> para crear grillas anidadas. Cada fila anidada obtiene su propio contexto de 16 columnas.',

    'grid_prev' => 'Anterior',
    'grid_next' => 'Siguiente',

    // Breakpoints page
    'bp_title' => 'Breakpoints',
    'bp_intro' => 'Flexocss ofrece seis breakpoints responsive con un enfoque mobile-first basado en media queries min-width. Cada breakpoint desbloquea un conjunto de clases de utilidad con prefijo que sobreescriben los valores de pantallas m&aacute;s peque&ntilde;as.',

    'bp_table_title'  => 'Resumen',
    'bp_col_name'     => 'Breakpoint',
    'bp_col_prefix'   => 'Prefijo',
    'bp_col_min'      => 'Min-width',
    'bp_col_target'   => 'Destino',
    'bp_target_sm'    => 'Smartphones peque&ntilde;os',
    'bp_target_md'    => 'Smartphones grandes',
    'bp_target_lg'    => 'Tablets',
    'bp_target_sp'    => 'Laptops / escritorios peque&ntilde;os',
    'bp_target_mg'    => 'Escritorios grandes',
    'bp_target_ut'    => 'Monitores ultrawide',

    'bp_mobile_title'   => 'Mobile-first',
    'bp_mobile_desc'    => 'Flexocss sigue una estrategia mobile-first. Las clases base (sin prefijo o con <code>sm</code>) se aplican desde 0px hacia arriba. Cada breakpoint sobreescribe el anterior a medida que la pantalla crece.',
    'bp_mobile_explain' => 'En este ejemplo la columna ocupa todo el ancho en m&oacute;vil (<code>fl-16</code>), 8/16 desde 768px (<code>fl-lg-8</code>) y 5/16 desde 1024px (<code>fl-sp-5</code>). Los breakpoints m&aacute;s peque&ntilde;os se propagan hacia arriba hasta ser sobreescritos.',

    'bp_pattern_title' => 'Patr&oacute;n de clases',
    'bp_pattern_desc'  => 'Todas las clases responsive siguen una convenci&oacute;n de nombres consistente. El prefijo del breakpoint determina cu&aacute;ndo se activa la regla:',

    'bp_examples_title' => 'Ejemplos responsive',
    'bp_examples_desc'  => 'La mayor&iacute;a de las clases de flexocss soportan prefijos de breakpoints. Aqu&iacute; hay algunos patrones comunes:',

    'bp_ex_gap_title' => 'Gap responsive',

    'bp_ex_visibility_title'  => 'Visibilidad responsive',
    'bp_ex_visibility_desc'   => 'Muestra u oculta elementos en breakpoints espec&iacute;ficos:',
    'bp_ex_visibility_tablet' => 'Visible desde tablet (lg) en adelante',
    'bp_ex_visibility_mobile' => 'Visible solo en m&oacute;vil',

    'bp_ex_area_title' => 'Area responsive (padding vertical)',
    'bp_ex_area_desc'  => 'Usa las clases area para agregar padding vertical responsive a las secciones:',

    'bp_custom_title' => 'Personalizaci&oacute;n',
    'bp_custom_desc'  => 'Los nombres y valores de los breakpoints son totalmente configurables via SCSS. Sobreescribe <code>$bp</code> y <code>$mediaQuery</code> para adaptarlos a tu proyecto:',

    'bp_prev' => 'Anterior',
    'bp_next' => 'Siguiente',

    // Utilities page
    'ut_title' => 'Utilidades',
    'ut_intro' => 'Flexocss incluye un amplio conjunto de clases de utilidad para alineaci&oacute;n, visibilidad, espaciado, posicionamiento y m&aacute;s. Todas las utilidades soportan prefijos responsive de breakpoints.',

    'ut_col_class' => 'Clase',
    'ut_col_css'   => 'Propiedad CSS',

    'ut_align_title' => 'Alineaci&oacute;n',
    'ut_align_desc'  => 'Controla c&oacute;mo los elementos flex se posicionan a lo largo de los ejes principal y transversal. Todas las clases de alineaci&oacute;n soportan prefijos de breakpoints: <code>.fl-{bp}-justify-center</code>, <code>.fl-{bp}-align-items-end</code>, etc.',

    'ut_place_desc' => '<code>.place-center</code> es un atajo que combina <code>justify-content: center</code> y <code>align-items: center</code> para centrar r&aacute;pidamente.',

    'ut_visibility_title' => 'Visibilidad',
    'ut_visibility_desc'  => 'Muestra u oculta elementos con control responsive. Todas las clases de visibilidad soportan prefijos de breakpoints: <code>.fl-{bp}-hidden</code>, <code>.fl-{bp}-visible</code>, etc.',

    'ut_padding_title'  => 'Padding',
    'ut_padding_desc'   => 'Agrega padding responsive a cualquier elemento. El patr&oacute;n es <code>.fl-{bp}-padding-{valor}</code>.',
    'ut_padding_values' => 'Valores por defecto: de 0 a 96px en pasos de 8. Configurable mediante las variables SCSS <code>$paddingStep</code> y <code>$paddingNumber</code>.',

    'ut_area_title'  => 'Area (padding vertical)',
    'ut_area_desc'   => 'Las clases area aplican padding vertical (arriba y abajo) a las secciones. El patr&oacute;n es <code>.fl-{bp}-area-{valor}</code>.',
    'ut_area_values' => 'Valores por defecto: de 0 a 160px en pasos de 16. Configurable mediante <code>$gapStepArea</code> y <code>$gapNumberArea</code>.',

    'ut_text_title' => 'Alineaci&oacute;n de texto',
    'ut_text_desc'  => 'Controla la alineaci&oacute;n del texto con prefijos responsive: <code>.fl-{bp}-text-center</code>, <code>.fl-{bp}-text-left</code>, etc.',

    'ut_order_title' => 'Orden',
    'ut_order_desc'  => 'Cambia el orden visual de los elementos flex sin modificar el HTML. Soporta prefijos responsive: <code>.fl-{bp}-order-{n}</code>.',

    'ut_position_title' => 'Posici&oacute;n &amp; fill',
    'ut_position_desc'  => 'Utilidades r&aacute;pidas de posicionamiento y dimensionamiento:',

    'ut_zindex_title' => 'Z-index',
    'ut_zindex_desc'  => 'Controla el orden de apilamiento con <code>.z-index-{n}</code> donde n va de 0 a 10 por defecto. Configurable mediante <code>$zIndex</code>.',

    'ut_reset_title' => 'Reset m&aacute;rgenes &amp; padding',
    'ut_reset_desc'  => 'Elimina forzosamente m&aacute;rgenes o padding de cualquier elemento:',

    'ut_prev' => 'Anterior',
    'ut_next' => 'Siguiente',

    // Wireframe page
    'wf_title' => 'Wireframe',
    'wf_intro' => 'El modo wireframe es una herramienta de depuraci&oacute;n visual integrada en flexocss. Resalta la estructura de tu grilla con contornos coloreados, fondos y etiquetas informativas para detectar problemas de layout de un vistazo.',

    'wf_live_example' => 'Ejemplo en vivo',

    'wf_activate_title' => 'Activaci&oacute;n',
    'wf_activate_desc'  => 'Agrega <code>id="wireframe"</code> a tu etiqueta <code>&lt;body&gt;</code> para habilitar el modo wireframe:',
    'wf_activate_note'  => 'El modo wireframe solo est&aacute; disponible cuando <code>$env</code> est&aacute; configurado como <code>\'dev\'</code> (el valor por defecto). En builds de producci&oacute;n se excluye completamente.',

    'wf_modes_title' => 'Modos de visualizaci&oacute;n',
    'wf_modes_desc'  => 'El wireframe soporta varios modos de visualizaci&oacute;n que se pueden combinar usando clases en el tag body:',

    'wf_outline_title'     => 'Modo outline (por defecto)',
    'wf_outline_desc'      => 'Con solo <code>id="wireframe"</code>, cada elemento de la grilla obtiene un contorno coloreado:',
    'wf_outline_container' => '&mdash; contorno oscuro (#1f2640)',
    'wf_outline_row'       => '&mdash; contorno violeta (#aa41c8)',
    'wf_outline_box'       => '&mdash; contorno azul (#3f4b80) con fondo claro',

    'wf_fill_title'     => 'Modo fill',
    'wf_fill_desc'      => 'Agrega <code>class="fill"</code> para reemplazar los contornos con colores de fondo s&oacute;lidos:',
    'wf_fill_colors'    => 'Cada nivel de anidamiento obtiene un color distinto:',
    'wf_fill_container' => '&mdash; fondo oscuro (#1f2640)',
    'wf_fill_row'       => '&mdash; fondo violeta (#aa41c8)',
    'wf_fill_box'       => '&mdash; fondo azul (#7d96ff)',

    'wf_border_title' => 'Modo borde',
    'wf_border_desc'  => 'Agrega <code>class="border-{n}"</code> (1 a 5) para a&ntilde;adir bordes visibles sobre el modo fill. &Uacute;til para ver los l&iacute;mites exactos entre elementos adyacentes.',

    'wf_info_title'   => 'Modo info',
    'wf_info_desc'    => 'Agrega <code>class="info"</code> para mostrar etiquetas de breakpoint y tama&ntilde;o en cada columna:',
    'wf_info_explain' => 'Cada <code>.fl-box</code> muestra una etiqueta como <code>*sm 8/16</code> indicando el breakpoint actual y el tama&ntilde;o de la columna. Las etiquetas se actualizan autom&aacute;ticamente al cambiar el viewport.',

    'wf_combined_title' => 'Combinar modos',
    'wf_combined_desc'  => 'Los modos se pueden combinar libremente. Estas son las combinaciones m&aacute;s comunes:',

    'wf_scaffold_title' => 'Ejemplo scaffold',
    'wf_scaffold_desc'  => 'As&iacute; es como se ve el modo wireframe aplicado a una estructura de p&aacute;gina completa: navegaci&oacute;n, hero, features en tres columnas, contenido en dos columnas y footer.',

    'wf_env_title' => 'Control de entorno',
    'wf_env_desc'  => 'El m&oacute;dulo wireframe se compila condicionalmente seg&uacute;n la variable <code>$env</code>:',
    'wf_env_note'  => 'Cuando <code>$env</code> es <code>\'prod\'</code>, todo el CSS wireframe se excluye de la salida, manteniendo limpio tu bundle de producci&oacute;n.',

    'wf_custom_title' => 'Personalizaci&oacute;n',
    'wf_custom_desc'  => 'Todos los colores y estilos del wireframe son configurables mediante variables SCSS:',
    'wf_col_var'      => 'Variable',
    'wf_col_default'  => 'Default',
    'wf_col_role'     => 'Rol',
    'wf_var_outline_container' => 'Color contorno container',
    'wf_var_outline_row'       => 'Color contorno row',
    'wf_var_outline_box'       => 'Color contorno box',
    'wf_var_fill_container'    => 'Color relleno container',
    'wf_var_fill_row'          => 'Color relleno row',
    'wf_var_fill_box'          => 'Color relleno box',
    'wf_var_info_bg'           => 'Fondo etiqueta info',
    'wf_var_info_text'         => 'Color texto etiqueta info',

    'wf_prev' => 'Anterior',
    'wf_next' => 'Siguiente',

    // Customization page
    'cust_title' => 'Personalizaci&oacute;n',
    'cust_intro' => 'Cada aspecto de flexocss se controla mediante variables SCSS. Sobreescr&iacute;belas antes de importar el framework para adaptar la grilla, espaciado, breakpoints y transiciones a tu proyecto.',

    'cust_how_title' => 'C&oacute;mo sobreescribir',
    'cust_how_desc'  => 'Usa la sintaxis SCSS <code>@use ... with</code> para sobreescribir cualquier variable por defecto. Solo especifica las variables que quieras cambiar:',

    'cust_col_var'     => 'Variable',
    'cust_col_default' => 'Default',
    'cust_col_desc'    => 'Descripci&oacute;n',

    'cust_grid_title' => 'Grilla',
    'cust_grid_desc'  => 'Controla el n&uacute;mero de columnas, el ancho del container y el padding de los boxes:',
    'cust_var_box'          => 'N&uacute;mero de columnas de la grilla',
    'cust_var_container'    => 'Max-width de container y row',
    'cust_var_containerLM'  => 'Max-width en el breakpoint m&aacute;s grande',
    'cust_var_boxpadding'   => 'Padding por defecto para .fl-box',
    'cust_var_boxpaddingin' => 'Padding por defecto para .fl-box-in',

    'cust_bp_title' => 'Breakpoints',
    'cust_bp_desc'  => 'Define los nombres de los breakpoints y sus valores min-width correspondientes:',
    'cust_var_bp'    => 'Nombres de breakpoints separados por coma',
    'cust_var_mq'    => 'Valores min-width (uno menos que $bp)',
    'cust_var_mqmax' => 'L&iacute;mite superior para media queries',
    'cust_bp_note'   => 'El primer breakpoint (sm) es la base y no tiene media query. <code>$mediaQuery</code> debe tener exactamente un valor menos que <code>$bp</code>.',

    'cust_spacing_title'   => 'Gap &amp; espaciado',
    'cust_spacing_desc'    => 'Controla las clases gap, padding y area generadas:',
    'cust_var_gapstep'     => 'Incremento en px entre clases gap',
    'cust_var_gapnumber'   => 'N&uacute;mero de pasos gap a generar',
    'cust_var_areastep'    => 'Incremento para clases area (padding vertical)',
    'cust_var_areanumber'  => 'N&uacute;mero de pasos area',
    'cust_var_paddingstep'   => 'Incremento para clases padding',
    'cust_var_paddingnumber' => 'N&uacute;mero de pasos padding',
    'cust_var_paddingarea'   => 'Padding vertical por defecto por breakpoint',
    'cust_spacing_formula'   => 'El valor m&aacute;ximo generado es <code>step &times; number</code>. Por ejemplo, con <code>$gapStep: 8</code> y <code>$gapNumber: 10</code>, las clases gap van de 0 a 80px.',

    'cust_order_title'    => 'Orden',
    'cust_var_ordermin'   => 'Valor m&iacute;nimo de order',
    'cust_var_ordermax'   => 'Valor m&aacute;ximo de order',

    'cust_transition_title' => 'Transiciones',
    'cust_transition_desc'  => 'Flexocss aplica transiciones CSS a los elementos div para cambios responsive fluidos:',
    'cust_var_transition'       => 'Habilitar/deshabilitar transiciones globalmente',
    'cust_var_transitiontime'   => 'Duraci&oacute;n de la transici&oacute;n',
    'cust_var_transitioneasing' => 'Funci&oacute;n de easing',

    'cust_font_title' => 'Pesos de fuente',

    'cust_misc_title'      => 'Varios',
    'cust_var_env'         => 'Entorno: \'dev\' habilita el wireframe, \'prod\' lo deshabilita',
    'cust_var_overflow'    => 'Agrega overflow-x: hidden en .container',
    'cust_var_zindex'      => 'Rango z-index (inicio, fin)',

    'cust_full_title' => 'Ejemplo completo',
    'cust_full_desc'  => 'Un ejemplo de configuraci&oacute;n completo para una grilla de 12 columnas con espaciado m&aacute;s ajustado:',

    'cust_prev' => 'Anterior',
    'cust_next' => 'Siguiente',

    // Scaffold page
    'nav_scaffold'           => 'Ejemplo Scaffold',
    'meta_title_scaffold'    => 'Ejemplo Scaffold',
    'meta_desc_scaffold'     => 'Una plantilla de p&aacute;gina completa construida con flexocss: hero, secciones de contenido y footer.',

    'sc_title' => 'Ejemplo Scaffold',
    'sc_intro' => 'Esta p&aacute;gina muestra una plantilla completa del mundo real construida exclusivamente con flexocss. Incluye una secci&oacute;n hero, tres secciones de contenido con layouts horizontales y verticales, y un footer — todo usando <code>.container</code>, <code>.row</code>, <code>.fl-box</code> y clases utilitarias responsive.',

    'sc_preview_title' => 'Vista previa en vivo',
    'sc_code_title'    => 'C&oacute;digo completo',

    'sc_hero_label'     => 'Hero',
    'sc_features_label' => 'Caracter&iacute;sticas',
    'sc_content_label'  => 'Contenido',
    'sc_cards_label'    => 'Tarjetas',
    'sc_footer_label'   => 'Footer',

    'sc_prev' => 'Anterior',
];
