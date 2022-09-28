<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pax6
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=0"/>
	<?php if ( is_front_page() ) { ?>
		<meta name="google-site-verification" content="gKvM5a79wsvb2BGcDQvctb41NAt7UnIWwKdCPKZyErI" />
	<?php } ?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Global site tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126992152-1"></script>
<script>
 window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);}
 gtag('js', new Date());

 gtag('config', 'UA-126992152-1');
</script><!-- Google Analytics -->

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pax6' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-header-content">
			<div class="site-branding">
				<?php the_custom_logo(); ?>
			</div><!-- .site-branding -->
			<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="Hamburger menu">
	                  <span class="icon-bar top-bar"></span>
	                  <span class="icon-bar middle-bar"></span>
	                  <span class="icon-bar bottom-bar"></span>
	            </button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
