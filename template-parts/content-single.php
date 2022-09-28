<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

?>

<div class="post-wrapper clear">

	<div class="post-left">

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	      	<header class="header-single">
	      		<?php if (has_post_thumbnail()) : ?>
		            <div class="post-featured"><?php the_post_thumbnail(); ?></div>
		      	<?php endif; ?>
				<?php the_title( '<h1 class="title-single">', '</h1>' ); ?>
				<div class="entry-single">
					<?php pax6_entry_posts(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="post-content">
				
				<?php
					the_content( sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'pax6' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					) );

					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pax6' ),
						'after'  => '</div>',
					) );
				?>

			</div>

		</article><!-- #post-<?php the_ID(); ?> -->
	    	
		<?php // If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif; ?>

	</div>

	<?php get_sidebar(); ?>

</div>