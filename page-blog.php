<?php
/**
 * Blog page templete
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="blog-list-container clear">

				<div class="blog-banner">
					<?php
					while ( have_posts() ) : the_post(); ?>

					<header>
						<h1><?php $content = get_the_content(); echo $content; ?></h1>
					</header>

					<?php endwhile; // End of the loop.
					?>
				</div>

				<?php

				$paged = get_query_var( 'paged' );
				$blog_query = new WP_Query( array( 'paged' => $paged, 'post_type' => 'post', 'posts_per_page' => 6, 'post_status' => 'publish', 'ignore_sticky_posts' => 1 ) );
				
				if( $blog_query->have_posts() ) : ?>

					<div class="post-list-left">

						<div id="pinBoot">

						<?php while( $blog_query->have_posts() ) : $blog_query->the_post(); ?>

					    	<article id="post-<?php the_ID(); ?>"  <?php post_class('white'); ?>>
							    <?php
							    echo "<div class='search-posts'>";
							        echo '<a href="' . esc_url( get_permalink() ) . '" class="thumb-medium">';
								        if (has_post_thumbnail()) { 
								        	echo "<span class='visible-mobile'>";the_post_thumbnail('medium_large');echo "</span>";
		                    				echo "<span class='hidden-mobile'>";the_post_thumbnail('post-blog');echo "</span>"; 
								        }
							        echo '</a>'; ?>
							        <h3><?php echo '<a href="' . esc_url( get_permalink() ) . '">'; the_title(); echo '</a>'; ?></h3>
							        <?php
						            if ( class_exists('acf') && get_field('page_slug') ) { 
						                $page_slug = do_shortcode( get_field('page_slug') ); 
						            } else {
						                $page_slug = '';
						            }

						            $categories = get_the_category();
						            if ( ! empty( $categories ) ) {
						                echo '<span class="cat-links"><a href="' . esc_url( home_url( $page_slug ) ) . '">' . esc_html( $categories[0]->name ) . '</a></span>';
						            }
							        the_excerpt();
							        pax6_entry_posts();
							    echo "</div>"; ?>
							</article>

					    <?php endwhile; ?>

					    </div>

						<div class="page-pagination">
				      		<?php echo paginate_links(array(
				      			'total' => $blog_query->max_num_pages,
					        	'prev_text' => __(  '&#x27F5; Previous', 'pax6' ),
								'next_text' => __( 'Next &#x27F6;', 'pax6' ),
					      	)); ?>
					    </div>
						
					</div>

					<?php get_sidebar(); ?>

				<?php wp_reset_postdata(); endif; ?>

			</div>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();