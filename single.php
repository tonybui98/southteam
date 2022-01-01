<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
?>

<div class="wrapper" id="single-wrapper hey">

	<div class="container" id="content" tabindex="-1">

		<div class="row">
			<div class="col-12 col-md-9 single_content">
				<?php while ( have_posts() ) : the_post(); ?>
						<?php the_content(); ?>

						<?php understrap_post_nav(); ?>

				<?php endwhile; // end of the loop. ?>
			</div>
			<div class="col-12 col-md-3 widget-area" id="right-sidebar" role="complementary">

			<?php dynamic_sidebar( 'right-sidebar' ); ?>

			</div><!-- #right-sidebar -->
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
