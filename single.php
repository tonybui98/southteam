<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();

wp_enqueue_script( 'app#babel', get_template_directory_uri() . '/component/page-component/single.js', array());
?>
<script type="text/babel">
	const Content=`<?php the_content();?>`;	
</script>
<div class="wrapper" id="single-wrapper hey">
	<div class="container" id="content" tabindex="-1">
		
		<div class="row">
			<div class="col-12 col-md-9 single_content">
					<div id="content">
					</div>
			</div>
			
			<div class="col-12 col-md-3 widget-area" id="right-sidebar" role="complementary">

			<?php dynamic_sidebar( 'right-sidebar' ); ?>

			</div><!-- #right-sidebar -->
	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
