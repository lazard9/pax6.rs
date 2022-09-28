<?php
/**
 * Privacy policy page templete
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package serpline
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="page-wrapper"><!-- Page content -->

				<div class="page-content">
					
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'page' );

					endwhile; // End of the loop.
					?>

				</div>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();