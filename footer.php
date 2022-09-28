<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pax6
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div class="newsletter-container">
			<h3 class="private-email-list">Subscribe to our newsletters.</h3>
	        <div class="newsletter-form clear">
	        	<!-- Begin MailChimp Signup Form -->						
				<?php echo do_shortcode( '[mc4wp_form id="6"]' ) ?>
				<!--End mc_embed_signup-->
			</div>
	    </div>

		<div class="site-info">
			<div class="box-1090 clear">
				<div class="based"><p>Based in Novi Sad, Serbia.<br/>Available anywhere.</p></div>
				<div class="email">
					<p>
					<?php if ( wp_is_mobile() ) { echo '<a href="mailto:' . esc_html( antispambot( 'info@pax6.rs' ) ) . '">' . esc_html( antispambot( 'info@pax6.rs' ) ) . '</a>'; } else { echo esc_html( antispambot( 'info@pax6.rs' ) ); } ?>
					</p>
				</div>
				<div class="social-icons-footer">
					<a target="_blank" class="twitter-icon" href="https://twitter.com/Pax6_rs" title="Twitter" rel="noopener"></a>
					<a target="_blank" class="instagram-icon" href="https://www.instagram.com/pax6_rs/" title="Instagram" rel="noopener"></a>
					<a target="_blank" class="linkedin-icon" href="https://www.linkedin.com/company/pax6-rs/" title="LinkedIn" rel="noopener"></a>
			    </div>
				<div class="site-branding-footer">
					<?php the_custom_logo(); ?>
				</div>
			</div>
		</div>

		<div <?php if ( is_single('post') ) { echo "class='site-rights footer-single'"; } else { echo "class='site-rights'"; } ?>>
			<div class="box-1070">
				<p><?php echo date('Y'); ?> &copy; Pax6. All rights reserved. </p>
				<span class="sep-ft"> | </span>
				<a target="_blank" href="<?php  echo esc_url( home_url('/privacy-policy')); ?>" title="Privacy Policy">Privacy Policy</a>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>