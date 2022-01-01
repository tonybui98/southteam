<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

defined( 'ABSPATH' ) || exit;

  require_once get_template_directory() . '/inc/theme-settings.php';                  // Initialize theme default settings.
	require_once get_template_directory() . '/inc/setup.php';                           // Theme setup and custom theme supports.
	require_once get_template_directory() . '/inc/widgets.php';                         // Register widget area.
	require_once get_template_directory() . '/inc/enqueue.php';                         // Enqueue scripts and styles.
	require_once get_template_directory() . '/inc/template-tags.php';                   // Custom template tags for this theme.
	require_once get_template_directory() . '/inc/pagination.php';                      // Custom pagination for this theme.
	require_once get_template_directory() . '/inc/hooks.php';                           // Custom hooks.
	require_once get_template_directory() . '/inc/extras.php';                          // Custom functions that act independently of the theme templates.
	require_once get_template_directory() . '/inc/customizer.php';                      // Customizer additions.
	require_once get_template_directory() . '/inc/custom-comments.php';                 // Custom Comments file.
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';    // Load custom WordPress nav walker.
	require_once get_template_directory() . '/inc/woocommerce.php';                     // Load WooCommerce functions.
	require_once get_template_directory() . '/inc/editor.php';                          // Load Editor functions.
	require_once get_template_directory() . '/inc/deprecated.php';    

// Thêm css file vào dash board
// add_action('admin_head', 'customAdminCss');

// Thêm css vào Login
add_action('login_head', 'customAdminCss');
function customAdminCss() {
  wp_enqueue_style( 'admin', get_stylesheet_directory_uri() . '/css/admin.css', array());
}

function prefix_category_title( $title ) {
    if ( is_category() or is_archive()) {
        $title = single_cat_title( '', false );
    }
    return $title;
}
add_filter( 'get_the_archive_title', 'prefix_category_title' );

// SMTP Authentication
add_action( 'phpmailer_init', 'send_smtp_email' );
  function send_smtp_email( $phpmailer ) {
    $phpmailer->isSMTP();
    $phpmailer->Host       = SMTP_HOST;
    $phpmailer->SMTPAuth   = SMTP_AUTH;
    $phpmailer->Port       = SMTP_PORT;
    $phpmailer->Username   = SMTP_USER;
    $phpmailer->Password   = SMTP_PASS;
    $phpmailer->SMTPSecure = SMTP_SECURE;
    $phpmailer->From       = SMTP_FROM;
    $phpmailer->FromName   = SMTP_NAME;
  }

/**
 * Load Editor functions.
 */

require_once get_template_directory() . '/shortcode/register_shortcode.php';
require_once get_template_directory() . '/shortcode/display_shortcode.php';

require_once get_template_directory() . '/inc/register_post.php';


//Theme Option
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'South Option',
		'menu_title'	=> 'South Option',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
}