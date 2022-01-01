<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

?>
abc
<a class="gotop" href="#page"><i class="fa fa-chevron-up"></i></a>
<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
<div class="bg-dark" id="wrapper-footer">
	<div class="container">
		<div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <p class="m-0 p-2 text-white"><small>© <?php echo date('Y'); ?> <?php echo bloginfo('name'); ?> . All rights reserved. <a href="https://southteam.vn/" class="text-white" target="_blank">Thiết kế website</a> <i class="fa fa-icon fa-heart" style="color:#ff3e3e;vertial-align:text-bottom;"></i> Southteam</small></p>
                </div>
                <div class="col-12 col-md-6">
                    <div class="social-icon text-lg-left">
                        <a class="facebook" href="<?php the_field('facebook', 'option'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a class="google" href="<?php the_field('google_plus', 'option'); ?>" target="_blank"><i class="fa fa-google-plus"></i></a>
                        <a class="youtube" href="<?php the_field('youtube', 'option'); ?>" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a class="zalo" href="https://zalo.me/<?php the_field('zalo', 'option'); ?>" target="_blank"><i>Zalo</i></a>
                    </div>
                </div>
	</div>
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->
<?php wp_footer(); ?>
<div id="fb-root"></div>
<div class="panel-overlay"></div>
</body>
</html>
