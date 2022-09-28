<?php
/**
 * Contact page templete
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

            <div class="contact-wrap contact-margin"><!-- Contact page content -->
            	<h1 class="call-together"><span>Let’s start</span> a conversation.</h1>
				<p class="introduce-yourself">Send us a message and introduce yourself. Tell us about your challenges, and your vision of success.</p>
				<p class="introduce-yourself"><span>Go ahead.</span>
				You will connect directly with Pax6 Founder, Lea Skrinjar.</p>
            	<div class="contact-form">
			        <?php echo do_shortcode( '[ninja_form id=2]' ) ?>
			    </div>
			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();