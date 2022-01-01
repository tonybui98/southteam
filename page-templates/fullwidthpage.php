<?php
/**
 * Template Name: Full Width
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$theme_version = '1.1.1';
wp_enqueue_script( 'header#babel', get_template_directory_uri() . '/component/header/header_1.js', array());
wp_enqueue_script( 'app#babel', get_template_directory_uri() . '/component/app.js', array());
while ( have_posts() ) : the_post(); ?>

<div id='root'></div>

<?php the_content();?>
<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
