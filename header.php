<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */
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
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" itemscope itemtype="http://schema.org/WebSite">

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
                                kkkkkkkkkk
                                <div class="primery-menu">
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
