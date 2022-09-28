 <?php
/**
 * Template Name: Blog
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="blog-list-container clear">

				<section class="blog-banner">
					<?php
					while ( have_posts() ) : the_post(); ?>

					<header>
						<h1><?php $content = get_the_content(); echo $content; ?></h1>
					</header>

					<?php endwhile; // End of the loop.
					?>
				</section>

				<div class="post-list-left">
					<?php

					if( class_exists('acf') && get_field('category_name') ) { 
						$category_name = do_shortcode( get_field('category_name') ); 
					} else {
						$category_name = 'nocat';
					}

					$paged = get_query_var( 'paged' );
					$blog_query = new WP_Query( array( 'paged' => $paged, 'post_type' => 'post', 'posts_per_page' => 6, 'post_status' => 'publish', 'orderby' => 'post_modified', 'ignore_sticky_posts' => 1, 'category_name' => $category_name ) );
					
					if( $blog_query->have_posts() ) : ?>

						<section id="pinBoot">

						<?php while( $blog_query->have_posts() ) : $blog_query->the_post();

					    	get_template_part( 'template-parts/content-search', get_post_type() );

					    endwhile; ?>

					    </section>


						<div class="page-pagination">
				      		<?php echo paginate_links(array(
				      			'total' => $blog_query->max_num_pages,
					        	'prev_text' => __(  '&#x27F5; Previous', 'pax6' ),
								'next_text' => __( 'Next &#x27F6;', 'pax6' ),
					      	)); ?>
					    </div>

					<?php wp_reset_postdata(); endif; ?>

				</div>

				<?php get_sidebar(); ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();