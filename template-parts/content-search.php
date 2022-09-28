<?php
/**
 * Template part for displaying results in search and pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pax6
 */

?>

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
        if ( ! is_page() ) {
            if ( 'post' === get_post_type() ) {
                /* translators: used between list items, there is a space after the comma */
                $categories_list = get_the_category_list( esc_html__( ', ', 'pax6' ) );
                if ( $categories_list ) {
                    /* translators: 1: list of categories. */
                    printf( '<span class="cat-links">' . esc_html__( '%1$s', 'pax6' ) . '</span>', $categories_list ); // WPCS: XSS OK.
                }
            }
        }
        the_excerpt();
        pax6_entry_posts();
    echo "</div>"; ?>
</article>