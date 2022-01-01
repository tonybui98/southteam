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
<a href="tel:<?php the_field('hotline', 'option'); ?>" class="hotline-mobi" rel="nofollow">
  <div class="website-alo-phone">
	  <div class="quydinh-tip quydinh-tip-2 d-none d-lg-inline-block"><?php the_field('hotline', 'option'); ?></div>
  <div class="animated infinite zoomIn website-alo-ph-circle"></div>
  <div class="animated infinite pulse website-alo-ph-circle-fill"></div>
  <div class="animated infinite tada website-alo-ph-img-circle"><i class="fa fa-phone-alt" aria-hidden="true"></i></div>
  </div>
  </a>
<?php wp_footer(); ?>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v7.0&appId=299718793875091&autoLogAppEvents=1" nonce="gS83YewN"></script>
<div class="panel-overlay"></div>
</body>
</html>
