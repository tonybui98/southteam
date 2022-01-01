<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-169805045-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-169805045-1');
</script>


</head>
	<!-- Global site tag (gtag.js) - Google Ads: 844994060 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-844994060"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-844994060');
</script>


	<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5ee9d8919e5f69442290bb6c/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<header class="header">
                    <div class="top-header d-none d-lg-block">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="top-left">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="top-right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="middle-header">
                        <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-9">
                                <a class="logo" href="<?php echo home_url(); ?>" title="<?php bloginfo('title'); ?>">
                                    <img src="<?php the_field('logo', 'option'); ?>" width="125">
                                </a>
                            </div>
                            <div class="col-lg-9 col-3 d-flex">
                                <div class="primery-menu">
                                    <div class="logo d-lg-none">
                                        <a rel="home" href="<?php echo home_url();?>" title="<?php echo bloginfo('title'); ?>">
                                            <img src="<?php the_field('logo', 'option'); ?>" width="125">
                                        </a>
                                    </div>
                                <?php
                                    wp_nav_menu( array(
                                                'theme_location' => 'primary',
                                         				'menu_class'=>'list-unstyled p-0 m-0',
                                               'menu_id' => 'main-menu',
                               )); ?>
															 <ul class="host-meta list-unstyled p-0 m-0 d-flex justify-content-start">
																	 <li class="mr-3"><i class="fa fa-phone-alt"></i> <?php the_field('hotline', 'option'); ?></li>
																	 <li><i class="fa fa-envelope"></i> <?php the_field('email', 'option'); ?></li>
															 </ul>
                            </div>
                                <a class="mobile-menu pull-right">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </a>
                                </div>
                        </div>
                        </div>
                    </div>
                </header>

	</div><!-- #wrapper-navbar end -->
	<?php if (!is_front_page() and get_field('hidden_header_bg',get_the_ID())==0) { if (is_single() or is_page()){$page_header =get_field('header_image'); } else {
$term = get_queried_object();
$page_header =get_field('header_image', $term);
} ?>
<div class="header-title" style="background-image:url( <?php if($page_header){echo $page_header;} else {echo get_field('header_image','option');} ?>);    background-size: cover;  background-position: center; background-repeat: no-repeat;" >
<div style="background-color: rgba(0, 0, 0, 0.1);">
<div class="container">
<div class="flex-bg d-flex justify-content-center align-items-center" style="height: 15vw;min-height: 200px;">
	<div>
			<?php
					if(get_field('title')){
						echo '<h1 style="text-align:center; color: white !important;font-size: 32px; text-align:center">'.get_field('title').'</h1>';	
					}
					else {
						 echo '<h1 style="text-align:center; color: white !important;font-size: 32px; text-align:center">' . get_the_title().'</h1>';
				 }
			?>
	</div>
</div>
</div> </div>
</div>
<?php } ?>
