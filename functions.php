<?php
/**
 * Understrap functions and definitions
 *
 * @package understrap
 */

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

/**
 * Load Editor functions.
 */

//require_once get_template_directory() . '/shortcode/register_shortcode.php';
//require_once get_template_directory() . '/shortcode/display_shortcode.php';

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

add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
function add_type_attribute($tag, $handle, $src) {
  // if not your script, do nothing and return original $tag
  if ( substr($handle, strrpos($handle, '#') + 1) == 'babel' ) {
    $tag = '<script type="text/babel" src="' . esc_url( $src ) . '"></script>';
  }
  return $tag;
}

/**
 * Get nav menu items by location
 *
 * @param $location The menu location id
 */

function get_nav_menu_items_by_location( $location, $args = [] ) {
 
  // Get all locations
  $locations = get_nav_menu_locations();

  // Get object id by location
  $object = wp_get_nav_menu_object( $locations[$location] );

  // Get menu items by menu name
  $menu_items = wp_get_nav_menu_items( $object->name, $args );

  // Return menu post objects
  return $menu_items;
}

function get_my_menu() {
  // Replace your menu name, slug or ID carefully
  return get_nav_menu_items_by_location('primary');
}

add_action( 'rest_api_init', function () {
  register_rest_route( 'wp/v2', 'menu', array(
      'methods' => 'GET',
      'callback' => 'get_my_menu',
  ) );
} );