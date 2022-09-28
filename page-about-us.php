<?php
/**
 * About Us templete
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="about-ready">
	        	<div>
		        	<h1 class="page-title">Ready for your toughest problems.</h1>
		        	<p>We build digital products, UX strategies, brands, and offer highly-specialized workshops for your team. Our services can follow you throughout the whole process - from the very creation of an idea to its realization, providing ongoing support. But most of all we can help you solve your toughest problems.</p>
	        	</div>
	      	</div>

			<div class="about-we-do">
	    
	        	<div class="we-do-list">
		          	<div>
			            <h3><span>We are a partner</span></h3>
			            <p>Problem-solving services work only if we act together. You're an expert in your field and we're experts in ours. We've experienced that high engagement from both sides consistently leads to positive outcomes. Working side by side is the only way to go.</p>
		          	</div>
		          	<div>
			            <h3><span>Importance of being value-focused</span></h3>
			            <p>Let’s be clear. If there is no value for your business your perfect user-centered design doesn’t serve a thing. If there is no value for your business, your business doesn’t exist. In order to sustainably create value for your customers, you need to create value for your business.</p>
		          	</div>
		          	<div>
			            <h3><span>Risk-conscience</span></h3>
			            <p>As architects and engineers, we come from a background where if we don’t pay attention to possible hazards, people get hurt. Risk assessment is an unavoidable part of our approach, whether it is design or business development project.</p>
		          	</div>
		        </div>
		    </div>

		    <div class="about-team">
		    	<h3>Small team with diverse expertise</h3>
				<p>We come from diverse fields, design, architecture, academia, engineering, and have more than 10 years of practice in creative development, engineering, teaching, and research.</p>

				<div class="the-team">
					<div class="item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Lea Skrinjar Pax6.jpg" alt="Lea Skrinjar" width="476" height="540"/>
						<span class="name">Lea Skrinjar</span>
						<span class="position">Strategist & UX designer, Founder</span>
					</div>
					<div class="item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Boris Radulovic.jpg" alt="Boris Radulovic" width="476" height="540"/>
						<span class="name">Boris Radulovic</span>
						<span class="position">Creative director & lead graphic designer</span>
					</div>
					<div class="item">
						<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/Lazar Dacic.jpg" alt="right arrow" width="476" height="540"/>
						<span class="name">Lazar Dacic</span>
						<span class="position">Web Developer</span>
					</div>
				</div>
				<!-- TEAM -->
			</div>

			<div class="about-business">
				<p>Having said all that, it's time for us to get down to business.</p>
				<p>Whether you are starting a new project, or you are stuck in a current one, whether you want to integrate design into your day-to-day practice, we are your team. We can be your consultants and part of your team. Or we can teach and train your team through our workshops.</p>
		    </div>

			<div class="contact-wrap home-contact-margin"><!-- Contact page content -->
		        <?php echo do_shortcode( '[ninja_form id=1]' ) ?>
		    </div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();