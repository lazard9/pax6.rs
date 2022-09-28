<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php if ( have_posts() ) : ?>

				<div class="search-list-container clear">

					<header class="page-header">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<div class="post-list-left">

						<section id="pinBoot">

							<?php
							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/**
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'template-parts/content', 'search' );

							endwhile; ?>

						</section>

						<?php the_posts_navigation(); ?>

					</div>

				<?php else :

					get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

				<?php get_sidebar(); ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
