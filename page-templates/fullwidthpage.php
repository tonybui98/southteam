<?php
/**
 * Template Name: Full Width Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
?>

<div class="<?php if (!is_home()&&!is_front_page()) {echo'wrapper'; }else {echo 'home-wrapper mb-4';}?>" id="full-width-page-wrapper">

	<div class="container" id="content">
			<div class="content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>
					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
