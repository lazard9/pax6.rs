<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package pax6
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found"><!-- error-404 page -->

				<h1>The page you are looking for doesn’t exist.</h1>

				<p>Try other pages on our website
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<a href="<?php echo esc_url( home_url( '/clients/' ) ); ?>">Clients</a>
				<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
				or <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>">Contact Us</a> for more information.</p>

			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
