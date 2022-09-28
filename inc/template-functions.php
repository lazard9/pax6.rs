<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package pax6
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function pax6_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'pax6_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function pax6_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'pax6_pingback_header' );

/* Hide WP version strings from scripts and styles
 * @return {string} $src
 * @filter script_loader_src
 * @filter style_loader_src
 */
function fjarrett_remove_wp_version_strings( $src ) {
 global $wp_version;
 parse_str(parse_url($src, PHP_URL_QUERY), $query);
 if ( !empty($query['ver']) && $query['ver'] === $wp_version ) {
 $src = remove_query_arg('ver', $src);
 }
 return $src;
}
add_filter( 'script_loader_src', 'fjarrett_remove_wp_version_strings' );
add_filter( 'style_loader_src', 'fjarrett_remove_wp_version_strings' );
/* Hide WP version strings from generator meta tag */
function wpmudev_remove_version() {
return '';
}
add_filter('the_generator', 'wpmudev_remove_version');

// Remove query strings from static resources
function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

//Exclude pages from WordPress Search
if (!is_admin()) {
function wpb_search_filter($query) {
if ($query->is_search) {
$query->set('post_type', 'post');
}
return $query;
}
add_filter('pre_get_posts','wpb_search_filter');
}

// Ninja Forms filter removes - Fields marked with an * are required
add_filter( 'ninja_forms_i18n_front_end', 'my_custom_ninja_forms_i18n_front_end' );
function my_custom_ninja_forms_i18n_front_end( $strings ) {
    $strings['fieldsMarkedRequired'] = '';
    return $strings;
}

//use registered commenter display_name if available
add_filter( 'get_comment_author', 'wpse_use_user_real_name', 10, 3 ) ;

function wpse_use_user_real_name( $author, $comment_id, $comment ) {

	if ($comment->user_id) {
		//comment by registered user
	    $author = get_the_author_meta('display_name');

	}

	return $author ;

}

//Prevent Page Scroll When Clicking the More Link
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );


//Modify The Read More Link Text
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Your Read More Link Text</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );

/**
 * Image sizes.
 */
function customize_image_sizes($sizes) {
  unset($sizes['thumbnail']);
  unset($sizes['medium']);
  /*unset($sizes['medium_large']);*/
  unset($sizes['large']);
  return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'customize_image_sizes');

/**
 * Remove URL field from comments.
 */
add_filter('comment_form_default_fields', 'website_remove');
function website_remove($fields)
{
if(isset($fields['url']))
unset($fields['url']);
return $fields;
}

/**
 * Add the custom columns to the knowledge post type.
 */
add_filter( 'manage_knowledge_posts_columns', 'set_custom_edit_knowledge_columns' );
function set_custom_edit_knowledge_columns($columns) {
    $columns['ordinal_number'] = __( 'Ordinal Number', 'pax6' );

    return $columns;
}
/*
 * Add columns to exhibition post list
 */
add_action ( 'manage_knowledge_posts_custom_column', 'custom_knowledge_column', 10, 2 );
function custom_knowledge_column ( $column, $post_id ) {
  switch ( $column ) {
    case 'ordinal_number':
      echo get_post_meta ( $post_id, 'ordinal_number', true );
    break;
  }
}

/**
 * Add the custom columns to the Consulting post type.
 */
add_filter( 'manage_clients_posts_columns', 'set_custom_edit_clients_columns' );
function set_custom_edit_clients_columns($columns) {
    $columns['ordinal_number'] = __( 'Ordinal Number', 'pax6' );

    return $columns;
}
/*
 * Add columns to exhibition post list
 */
add_action ( 'manage_clients_posts_custom_column', 'custom_clients_column', 10, 2 );
function custom_clients_column ( $column, $post_id ) {
  switch ( $column ) {
    case 'ordinal_number':
      echo get_post_meta ( $post_id, 'ordinal_number', true );
    break;
  }
}
