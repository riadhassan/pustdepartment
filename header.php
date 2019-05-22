<?php
///**
// * The header for our theme
// *
// * This is the template that displays all of the <head> section and everything up until <div id="content">
// *
// * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
// *
// * @package pustDepartment
// */
//
//?>
<!--<!doctype html>-->
<!--<html --><?php //language_attributes(); ?><!-->
<!--<head>-->
<!--	<meta charset="--><?php //bloginfo( 'charset' ); ?><!--">-->
<!--	<meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--	<link rel="profile" href="https://gmpg.org/xfn/11">-->
<!---->
<!--	--><?php //wp_head(); ?>
<!--</head>-->
<!---->
<!--<body --><?php //body_class(); ?><!-->
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'pustdepartment' ); ?><!--</a>-->
<!---->
<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$pustdepartment_description = get_bloginfo( 'description', 'display' );
//			if ( $pustdepartment_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $pustdepartment_description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'pustdepartment' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu( array(
//				'theme_location' => 'menu-1',
//				'menu_id'        => 'primary-menu',
//			) );
//			?>
<!--		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->
<!---->
<!--	<div id="content" class="site-content">-->


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="author" content="">



<?php wp_head(); ?>


<body id="inner-page" <?php body_class(); ?>>
<div id="header">

    <!-- mobile menu -->
    <a class="mobilemenu" href="#menu">Responsive Mobile Menu</a>
    <!-- mobile menu end -->
    <div class="mobile-menu-logo">
        <a href="<?php echo get_bloginfo('url') ?>"><?php if(has_custom_logo()){
		        the_custom_logo();
	        } ?>
        </a>
    </div>
    <div id="header-top" style="background: #4CA1D7;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="logo">
                        <a href="<?php echo get_bloginfo('url') ?>">
                            <?php if(has_custom_logo()){
                                the_custom_logo();
                            } ?>
                        </a>
                    </div>
                    <div class="top-nav">
                        <h1 style="font-size: 35px;font-family: Cambria;"><?php echo get_bloginfo('description') ?></h1>
                        <div class="top-content" style="color:#ecf0f1;font-size:16px;">
                            <!--  <a target="_blank" href="http://old.pust.ac.bd" class="forms-and-downloads"> <i class="fa fa-globe" aria-hidden="true"></i> Old Website</a>  -->
                        </div>
                    </div>
                </div>
                <!-- End .col -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->
    </div>
    <!-- End #header-top -->

    <?php get_template_part("template-parts/navbar"); ?>
</div>
<!-- End #header -->