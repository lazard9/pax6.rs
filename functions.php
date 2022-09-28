<?php
/**
 * pax6 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package pax6
 */

if ( ! function_exists( 'pax6_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function pax6_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on pax6, use a find and replace
		 * to change 'pax6' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'pax6', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'post-blog', 377, 377, true );

		// This theme uses wp_nav_menu() in two location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'pax6' ),
			'menu-2' => esc_html__( 'Secondary', 'pax6' ),
			'menu-3' => esc_html__( 'Tertiary', 'pax6' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'pax6_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'pax6_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function pax6_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'pax6_content_width', 640 );
}
add_action( 'after_setup_theme', 'pax6_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function pax6_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'pax6' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'pax6' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h5 class="widget-title">',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'pax6_widgets_init' );

//Load Google font
function custom_google_fonts() {
    wp_enqueue_style( 'montserrat-font', "//fonts.googleapis.com/css?family=Montserrat:300,400,400i,500,600,700,800", false );
}
add_action( 'wp_enqueue_scripts', 'custom_google_fonts' );

/**
 * Enqueue Font Awesome.
 */
/*function custom_load_font_awesome() {

    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );

}
add_action( 'wp_enqueue_scripts', 'custom_load_font_awesome' );*/

/**
 * Enqueue scripts and styles.
 */
function pax6_scripts() {
	wp_enqueue_style( 'pax6-style', get_stylesheet_uri() );

	wp_enqueue_script( 'pax6-event-listener', get_template_directory_uri() . '/js/event-listener.js', array(), '20151215', true );

	wp_enqueue_script( 'pax6-index', get_template_directory_uri() . '/js/index.js', array(), '20151215', true );

	wp_enqueue_script( 'pax6-masonry', get_template_directory_uri() . '/js/masonry.js', array(), '20151215', true );

	// wp_enqueue_script( 'pax6-modal', get_template_directory_uri() . '/js/modal.js', array(), '20151215', true );

	wp_enqueue_script( 'pax6-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'pax6-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'pax6_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Knowledge post type.
 */
require get_template_directory() . '/inc/functions/knowledge.php';

/**
 * Clients post type.
 */
require get_template_directory() . '/inc/functions/clients.php';
