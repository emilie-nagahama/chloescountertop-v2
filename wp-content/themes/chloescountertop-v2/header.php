<?php
/**
 * The header for our theme.
 *
 * @package Chloes_Countertop_Theme_V2
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/assets/slick/slick.css"/>

    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
     fbq('init', '117876082232919');
    fbq('track', 'PageView');
    </script>
    <noscript>
     <img height="1" width="1"
    src="https://www.facebook.com/tr?id=117876082232919&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->

	<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'Chloe\'s Countertop' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
					<div class="site-branding">
					<a href="<?php echo esc_url(home_url('/')) ?>">
						<img class="logo" src="<?php echo get_template_directory_uri()?>/assets/images/CCT-Logo-Colour.png" alt="Chloe's Countertop logo" />
					</a>


				<nav id="site-navigation" class="main-navigation" role="navigation">
						<p class="menu-button"><?php _e('Menu', 'creative_ritual'); ?></p>
						<?php wp_nav_menu( array( 'theme_location' => 'mobile', 'menu_id' => 'mobile-menu', 'container' => 'ul' ) ); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'desktop', 'menu_id' => 'desktop-menu', 'container' => 'ul' ) ); ?>

				</nav><!-- #site-navigation -->
				</div><!-- .site-branding -->

			</header><!-- #masthead -->
