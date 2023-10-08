<?php
add_action( 'customize_register', 'bands_customizer', 20 );
function bands_customizer( $wp_customize ) {
$wp_customize->remove_control( 'blogdescription' );
$wp_customize->remove_control( 'header_textcolor' );
$wp_customize->remove_control( 'display_header_text' );
$wp_customize->add_section(
'bands_options',
array(
'title' => __( 'Layout & Display', 'bands' ),
'priority' => 20
)
);
$wp_customize->add_setting(
'bands_layout_width',
array(
'default' => '100%',
'sanitize_callback' => 'sanitize_text_field',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'layout_width',
array(
'label' => esc_html__( 'Layout Width', 'bands' ),
'description' => esc_html__( 'Enter any width by % or px (for example, 100% for full width).', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_layout_width'
)
)
);
$wp_customize->add_setting(
'bands_grid_columns',
array(
'default' => '1',
'sanitize_callback' => 'absint',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'grid_columns',
array(
'label' => esc_html__( 'Blog Grid Count', 'bands' ),
'section' => 'bands_options',
'type' => 'number',
'settings' => 'bands_grid_columns'
)
)
);
$wp_customize->add_setting(
'bands_grid_width',
array(
'default' => '300px',
'sanitize_callback' => 'sanitize_text_field',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'grid_width',
array(
'label' => esc_html__( 'Blog Grid Width', 'bands' ),
'description' => esc_html__( 'Enter any width by px only.', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_grid_width'
)
)
);
$wp_customize->add_setting(
'bands_grid_gap',
array(
'default' => '5%',
'sanitize_callback' => 'sanitize_text_field',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'grid_gap',
array(
'label' => esc_html__( 'Blog Grid Gap', 'bands' ),
'description' => esc_html__( 'Enter any width by % or px.', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_grid_gap'
)
)
);
$wp_customize->add_setting(
'bands_sticky_header',
array(
'default' => '1',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'sticky_header',
array(
'label' => esc_html__( 'Sticky Header', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_sticky_header',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_center_logo',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'center_logo',
array(
'label' => esc_html__( 'Center Logo', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_center_logo',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_left_logo',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'left_logo',
array(
'label' => esc_html__( 'Left Logo', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_left_logo',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_display_sidebar',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'display_sidebar',
array(
'label' => esc_html__( 'Display Sidebar', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_display_sidebar',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_header',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_header',
array(
'label' => esc_html__( 'Hide Header', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_header',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_branding',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_branding',
array(
'label' => esc_html__( 'Hide Logo/Site Title', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_branding',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_menu',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_menu',
array(
'label' => esc_html__( 'Hide Menu', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_menu',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_search',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_search',
array(
'label' => esc_html__( 'Hide Search Form', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_search',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_header_image',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_header_image',
array(
'label' => esc_html__( 'Hide Header Image', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_header_image',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_description',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_description',
array(
'label' => esc_html__( 'Hide Site Description', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_description',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_breadcrumbs',
array(
'default' => '1',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_breadcrumbs',
array(
'label' => esc_html__( 'Hide Breadcrumbs', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_breadcrumbs',
'type' => 'checkbox',
)
)
);
$wp_customize->add_setting(
'bands_hide_footer',
array(
'default' => '',
'sanitize_callback' => 'bands_sanitize_checkbox'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'hide_footer',
array(
'label' => esc_html__( 'Hide Footer', 'bands' ),
'section' => 'bands_options',
'settings' => 'bands_hide_footer',
'type' => 'checkbox',
)
)
);
$wp_customize->add_section(
'bands_fonts',
array(
'title' => esc_html__( 'Fonts', 'bands' ),
'priority' => 25
)
);
$wp_customize->add_setting(
'bands_header_font',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'header_font',
array(
'label' => esc_html__( 'Headers Font', 'bands' ),
'description' => esc_html__( 'Google Fonts allowed here too.', 'bands' ),
'section' => 'bands_fonts',
'settings' => 'bands_header_font'
)
)
);
$wp_customize->add_setting(
'bands_content_font',
array(
'default' => '',
'sanitize_callback' => 'sanitize_text_field',
'transport' => 'refresh'
)
);
$wp_customize->add_control(
new WP_Customize_Control(
$wp_customize,
'content_font',
array(
'label' => esc_html__( 'Content Font', 'bands' ),
'description' => esc_html__( 'Google Fonts allowed here too.', 'bands' ),
'section' => 'bands_fonts',
'settings' => 'bands_content_font'
)
)
);
$wp_customize->add_setting(
'bands_accent_color',
array(
'default' => '',
'sanitize_callback' => 'sanitize_hex_color',
'transport' => 'postMessage'
)
);
$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'accent_color',
array(
'label' => esc_html__( 'Accent Color', 'bands' ),
'section' => 'colors',
'settings' => 'bands_accent_color',
'priority' => 0
)
)
);
$wp_customize->add_setting(
'bands_header_color',
array(
'default' => '',
'sanitize_callback' => 'sanitize_hex_color',
'transport' => 'postMessage'
)
);
$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'header_color',
array(
'label' => esc_html__( 'Headers Color', 'bands' ),
'section' => 'colors',
'settings' => 'bands_header_color',
'priority' => 1
)
)
);
$wp_customize->add_setting(
'bands_content_color',
array(
'default' => '',
'sanitize_callback' => 'sanitize_hex_color',
'transport' => 'postMessage'
)
);
$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'content_color',
array(
'label' => esc_html__( 'Content Color', 'bands' ),
'section' => 'colors',
'settings' => 'bands_content_color',
'priority' => 2
)
)
);
$wp_customize->add_setting(
'bands_link_color',
array(
'default' => '',
'sanitize_callback' => 'sanitize_hex_color',
'transport' => 'postMessage'
)
);
$wp_customize->add_control(
new WP_Customize_Color_Control(
$wp_customize,
'link_color',
array(
'label' => esc_html__( 'Link Color', 'bands' ),
'section' => 'colors',
'settings' => 'bands_link_color',
'priority' => 3
)
)
);
}
function bands_sanitize_checkbox( $input ) {
if ( $input === true || $input === '1' ) {
return '1';
}
return '';
}
add_action( 'wp_head', 'bands_customizer_css' );
function bands_customizer_css() {
?>
<style>
#container{max-width:<?php echo esc_html( get_theme_mod( 'bands_layout_width' ) ); ?>}
.home #content{column-count:<?php echo esc_html( get_theme_mod( 'bands_grid_columns' ) ); ?>;column-width:<?php echo esc_html( get_theme_mod( 'bands_grid_width' ) ); ?>;column-gap:<?php echo esc_html( get_theme_mod( 'bands_grid_gap' ) ); ?>}
.home .post{break-inside:avoid-column}
#container a, #footer a, ul#breadcrumbs li a, #container h1, #container h2, #container h3, #container h4, #container h5, #container h6, #container h1 a, #container h2 a, #container h3 a, #container h4 a, #container h5 a, #container h6 a, pre, code, #menu .menu-toggle:hover, #menu .menu-toggle:focus{color:<?php echo esc_html( get_theme_mod( 'bands_accent_color' ) ); ?>}
hr, .button, button, input[type="submit"]{background-color:<?php echo esc_html( get_theme_mod( 'bands_accent_color' ) ); ?>}
blockquote, input:focus, #search .search-field:focus, .wp-block-search__input:focus, textarea:focus, #footer .widget-container .search-field:focus, .sticky, .entry-meta .author-avatar img, #content .gallery img, .box, .box-2, .box-3, .box-4, .box-5, .box-6, .box-1-3, .box-2-3{border-color:<?php echo esc_html( get_theme_mod( 'bands_accent_color' ) ); ?>}
@media(min-width:769px){#menu .current-menu-item a, #menu .current_page_parent a{border-color:<?php echo esc_html( get_theme_mod( 'bands_accent_color' ) ); ?>}}
#container h1, #container h2, #container h3, #container h4, #container h5, #container h6, #container h1 a, #container h2 a, #container h3 a, #container h4 a, #container h5 a, #container h6 a{font-family:<?php echo esc_html( ucwords( str_replace( '+', ' ', get_theme_mod( 'bands_header_font' ) ) ) ); ?>;color:<?php echo esc_html( get_theme_mod( 'bands_header_color' ) ); ?>}
#content p{font-family:<?php echo esc_html( ucwords( str_replace( '+', ' ', get_theme_mod( 'bands_content_font' ) ) ) ); ?>;color:<?php echo esc_html( get_theme_mod( 'bands_content_color' ) ); ?>}
#container a, #footer a, ul#breadcrumbs li a{color:<?php echo esc_html( get_theme_mod( 'bands_link_color' ) ); ?>}
<?php if ( esc_html( get_theme_mod( 'bands_sticky_header' ) ) ) { echo '@media(min-width:769px){#header-nav{position:sticky;top:0;z-index:9999}}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_center_logo' ) ) ) { echo '#site-title, #menu{display:block;width:100%;text-align:center;float:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_left_logo' ) ) ) { echo '#site-title, #menu{display:block;width:100%;text-align:left;float:none}#menu{text-align:center}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_display_sidebar' ) ) ) { echo '#content{width:75%;padding:4%;float:left}#sidebar{display:block !important;width:25%;padding:4% 4% 4% 0;float:right}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_header' ) ) ) { echo '#header{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_branding' ) ) ) { echo '#site-title{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_menu' ) ) ) { echo '#menu{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_search' ) ) ) { echo '#search{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_header_image' ) ) ) { echo '#header{background-image:none !important}#site-description{padding:10% 5% 5%}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_description' ) ) ) { echo '#site-description{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_breadcrumbs' ) ) ) { echo 'ul#breadcrumbs{display:none}'; } ?>
<?php if ( esc_html( get_theme_mod( 'bands_hide_footer' ) ) ) { echo '#footer{display:none}'; } ?>
</style>
<?php
}
add_action( 'customize_preview_init', 'bands_customizer_preview' );
function bands_customizer_preview() {
wp_enqueue_script( 'bands-theme-customizer', get_template_directory_uri() . '/customizer/customizer.js',
array( 'jquery', 'customize-preview' ),
'',
true
);
}
add_action( 'customize_preview_init', 'bands_customizer_fonts' );
add_action( 'wp_enqueue_scripts', 'bands_customizer_fonts' );
function bands_customizer_fonts() {
if ( !empty( get_theme_mod( 'bands_header_font' ) ) ) {
wp_enqueue_style( 'bands-header-font', 'https://fonts.googleapis.com/css?family=' . esc_html( ucwords( str_replace( ' ', '+', get_theme_mod( 'bands_header_font' ) ) ) ) );
}
if ( !empty( get_theme_mod( 'bands_content_font' ) ) ) {
wp_enqueue_style( 'bands-content-font', 'https://fonts.googleapis.com/css?family=' . esc_html( ucwords( str_replace( ' ', '+', get_theme_mod( 'bands_content_font' ) ) ) ) );
}
}
add_action( 'admin_init', 'bands_customizer_styles' );
function bands_customizer_styles() {
wp_enqueue_style( 'bands-customizer-styles', get_template_directory_uri() . '/customizer/customizer.css' );
}