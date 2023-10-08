<?php
add_action( 'after_setup_theme', 'bands_setup' );
function bands_setup() {
load_theme_textdomain( 'bands' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
$defaults = array( 'header-text' => false );
add_theme_support( 'custom-header', $defaults );
$defaults = array( 'default-color' => 'ffffff' );
add_theme_support( 'custom-background', $defaults );
add_theme_support( 'html5', array( 'search-form', 'navigation-widgets' ) );
add_theme_support( 'woocommerce' );
global $content_width;
if ( !isset( $content_width ) ) $content_width = 1920;
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'bands' ), 'footer-menu' => esc_html__( 'Footer Menu', 'bands' ) ) );
}
require_once ( get_template_directory() . '/about.php' );
add_action( 'wp_enqueue_scripts', 'bands_load_scripts' );
function bands_load_scripts() {
wp_enqueue_style( 'bands-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
wp_register_script( 'bands-videos', get_template_directory_uri() . '/js/videos.js' );
wp_enqueue_script( 'bands-videos' );
wp_add_inline_script( 'bands-videos', 'jQuery(document).ready(function($){$("#wrapper").vids();});' );
}
add_action( 'wp_footer', 'bands_footer_scripts' );
function bands_footer_scripts() {
?>
<script>
jQuery(document).ready(function($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (deviceAgent.match(/(Android)/)) {
$("html").addClass("android");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
$(".menu-toggle").on("keypress click", function(e) {
if (e.which == 13 || e.type === "click") {
e.preventDefault();
$("#menu").toggleClass("toggled");
}
});
$("img.no-logo").each(function() {
var alt = $(this).attr("alt");
$(this).replaceWith(alt);
});
});
</script>
<?php
}
add_action( 'wp_footer', 'bands_bbpress_inline_script' );
function bands_bbpress_inline_script() {
if ( class_exists( 'bbPress' ) && bbp_is_single_forum() ) {
?>
<script>
jQuery(document).ready(function($) {
if (!$("#new-post").length > 0) {
$("#new-topic").hide();
}
});
</script>
<?php
}
}
add_action( 'admin_notices', 'bands_notice' );
function bands_notice() {
$user_id = get_current_user_id();
$admin_url = esc_url( ( isset( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http' ) . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" );
$param = ( count( $_GET ) ) ? '&' : '?';
if ( !get_user_meta( $user_id, 'bands_notice_dismissed_6' ) && current_user_can( 'manage_options' ) )
echo '<div class="notice notice-info"><p><a href="' . esc_url( $admin_url ), esc_html( $param ) . 'dismiss" class="alignright" style="text-decoration:none"><big>' . esc_html__( 'Ⓧ', 'bands' ) . '</big></a>' . wp_kses_post( __( '<big><strong>🎸 Thank you for using Bands!</strong></big>', 'bands' ) ) . '<br /><br />Use code <strong>HALFOFF</strong> for 50% off!<br /><br /><a href="https://bandswp.com/" class="button-primary" target="_blank">' . esc_html__( 'Go Pro', 'bands' ) . '</a> <a href="mailto:music@bandswp.com" class="button-primary" target="_blank">' . esc_html__( 'Requests & Support', 'bands' ) . '</a> <a href="https://wordpress.org/support/theme/bands/reviews/#new-post" class="button-primary" target="_blank">' . esc_html__( 'Review', 'bands' ) . '</a> <a href="https://bandswp.com/donate" class="button-primary" target="_blank">' . esc_html__( 'Donate', 'bands' ) . '</a></p></div>';
}
add_action( 'admin_init', 'bands_notice_dismissed' );
function bands_notice_dismissed() {
$user_id = get_current_user_id();
if ( isset( $_GET['dismiss'] ) )
add_user_meta( $user_id, 'bands_notice_dismissed_6', 'true', true );
}
add_filter( 'document_title_separator', 'bands_document_title_separator' );
function bands_document_title_separator( $sep ) {
$sep = esc_html( '|' );
return $sep;
}
add_filter( 'the_title', 'bands_title' );
function bands_title( $title ) {
if ( $title == '' ) {
return esc_html( '...' );
} else {
return wp_kses_post( $title );
}
}
function bands_schema_type() {
$schema = 'https://schema.org/';
if ( is_single() ) {
$type = "Article";
} elseif ( is_author() ) {
$type = 'ProfilePage';
} elseif ( is_search() ) {
$type = 'SearchResultsPage';
} else {
$type = 'WebPage';
}
echo 'itemscope itemtype="' . esc_url( $schema ) . esc_attr( $type ) . '"';
}
add_filter( 'nav_menu_link_attributes', 'bands_schema_url', 10 );
function bands_schema_url( $atts ) {
$atts['itemprop'] = 'url';
return $atts;
}
if ( !function_exists( 'bands_wp_body_open' ) ) {
function bands_wp_body_open() {
do_action( 'wp_body_open' );
}
}
add_action( 'wp_body_open', 'bands_skip_link', 5 );
function bands_skip_link() {
echo '<a href="#content" class="skip-link screen-reader-text">' . esc_html__( 'Skip to the content', 'bands' ) . '</a>';
}
add_filter( 'the_content_more_link', 'bands_read_more_link' );
function bands_read_more_link() {
if ( !is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">' . sprintf( __( '...%s', 'bands' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'excerpt_more', 'bands_excerpt_read_more_link' );
function bands_excerpt_read_more_link( $more ) {
if ( !is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">' . sprintf( __( '...%s', 'bands' ), '<span class="screen-reader-text">  ' . esc_html( get_the_title() ) . '</span>' ) . '</a>';
}
}
add_filter( 'big_image_size_threshold', '__return_false' );
add_filter( 'intermediate_image_sizes_advanced', 'bands_image_insert_override' );
function bands_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
unset( $sizes['1536x1536'] );
unset( $sizes['2048x2048'] );
return $sizes;
}
function bands_reading_time() {
global $post;
$content = get_post_field( 'post_content', $post->ID );
$word_count = str_word_count( strip_tags( $content ) );
$readingtime = ceil( $word_count / 200 );
$totalreadingtime = $readingtime;
return $totalreadingtime;
}
function bands_breadcrumbs() {
ob_start();
global $post;
if ( !is_home() ) {
echo '<ul id="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList"><li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="' . esc_url( home_url() ) . '/" itemprop="item"><span itemprop="name">' . esc_html__( 'Home', 'bands' ) . '</span></a><meta itemprop="position" content="1" /></li> <span aria-hidden="true">&rarr;</span> ';
if ( is_single() ) {
$categories = get_the_category();
$separator = ', ';
$output = '';
if ( !empty( $categories ) ) {
foreach( $categories as $category ) {
$output .= '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" itemprop="item"><span itemprop="name">' . esc_attr( $category->name ) . '</span></a><meta itemprop="position" content="2" /></li>' . $separator;
}
echo trim( $output, $separator );
}
}
if ( is_single() ) {
echo ' <span aria-hidden="true">&rarr;</span> ';
}
echo '<li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem"><a href="" itemprop="item"><span itemprop="name">';
remove_all_filters( 'wp_title' );
wp_title( '' );
echo '</span></a><meta itemprop="position" content="3" /></li>';
echo '</ul>';
}
$output = ob_get_clean();
return $output;
}
add_action( 'widgets_init', 'bands_widgets_init' );
function bands_widgets_init() {
register_sidebar( array (
'name' => esc_html__( 'Header Widget Area', 'bands' ),
'id' => 'header-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array (
'name' => esc_html__( 'Footer Widget Area', 'bands' ),
'id' => 'footer-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
register_sidebar( array (
'name' => esc_html__( 'Sidebar Widget Area', 'bands' ),
'description' => esc_html__( 'Does not display for single posts.', 'bands' ),
'id' => 'primary-widget-area',
'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
'after_widget' => "</li>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}
add_action( 'wp_head', 'bands_pingback_header' );
function bands_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'bands_enqueue_comment_reply_script' );
function bands_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
}
function bands_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo wp_kses_post( comment_author_link() ); ?></li>
<?php
}
add_filter( 'get_comments_number', 'bands_comment_count', 0 );
function bands_comment_count( $count ) {
if ( !is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}
require_once( get_template_directory() . '/customizer/customizer.php' );
require_once( get_template_directory() . '/plugins/plugin-activation.php' );