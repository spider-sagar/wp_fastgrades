<?php
/**
 * fastgrades functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fastgrades
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fastgrades_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on fastgrades, use a find and replace
		* to change 'fastgrades' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fastgrades', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.

  register_nav_menus( array(
            'primary-menu' => esc_html__( 'Primary Menu', 'fastgrades' ),
            'secondary-menu' => esc_html__( 'Secondary Menu', 'fastgrades' ),
	        'about-fastgrades-menu' => esc_html__( 'About fastgrades', 'fastgrades' ),
	        'using-fastgrades-menu' => esc_html__( 'Using fastgrades', 'fastgrades' ),
	        'need-some-help' => esc_html__( 'Need Some Help', 'fastgrades' ),
	        'popular-subjects' => esc_html__( 'Popular Subjects', 'fastgrades' ),
            
        ) );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'fastgrades_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'fastgrades_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fastgrades_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fastgrades_content_width', 640 );
}
add_action( 'after_setup_theme', 'fastgrades_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fastgrades_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fastgrades' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fastgrades' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fastgrades_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function fastgrades_scripts() {
	wp_enqueue_style( 'fastgrades-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'fastgrades-style', 'rtl', 'replace' );

	wp_enqueue_script( 'fastgrades-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'fastgrades_scripts' );

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

//wp login custom logo
function custom_login_logo() {
	echo '<style type="text/css">h1 a { background: url('.get_bloginfo('template_directory').'/assets/images/logo.png) center no-repeat !important; background-size: contain !important; width: 200px !important; height: 100px !important; }</style>';
}
add_action('login_head', 'custom_login_logo');

// Register Custom Post Type BannerImg
function create_bannerimg_cpt() {

	$labels = array(
		'name' => _x( 'BannerImg', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'BannerImg', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'BannerImg', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'BannerImg', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'BannerImg Archives', 'textdomain' ),
		'attributes' => __( 'BannerImg Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent BannerImg:', 'textdomain' ),
		'all_items' => __( 'All BannerImg', 'textdomain' ),
		'add_new_item' => __( 'Add New BannerImg', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New BannerImg', 'textdomain' ),
		'edit_item' => __( 'Edit BannerImg', 'textdomain' ),
		'update_item' => __( 'Update BannerImg', 'textdomain' ),
		'view_item' => __( 'View BannerImg', 'textdomain' ),
		'view_items' => __( 'View BannerImg', 'textdomain' ),
		'search_items' => __( 'Search BannerImg', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into BannerImg', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this BannerImg', 'textdomain' ),
		'items_list' => __( 'BannerImg list', 'textdomain' ),
		'items_list_navigation' => __( 'BannerImg list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter BannerImg list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'BannerImg', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-format-image',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 2,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => false,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => false,
	);
	register_post_type( 'bannerimg', $args );

}
add_action( 'init', 'create_bannerimg_cpt', 0 );

// Register Custom Post Type KeyFuture
function create_keyfuture_cpt() {

	$labels = array(
		'name' => _x( 'KeyFuture', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'KeyFuture', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'KeyFuture', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'KeyFuture', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'KeyFuture Archives', 'textdomain' ),
		'attributes' => __( 'KeyFuture Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent KeyFuture:', 'textdomain' ),
		'all_items' => __( 'All KeyFuture', 'textdomain' ),
		'add_new_item' => __( 'Add New KeyFuture', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New KeyFuture', 'textdomain' ),
		'edit_item' => __( 'Edit KeyFuture', 'textdomain' ),
		'update_item' => __( 'Update KeyFuture', 'textdomain' ),
		'view_item' => __( 'View KeyFuture', 'textdomain' ),
		'view_items' => __( 'View KeyFuture', 'textdomain' ),
		'search_items' => __( 'Search KeyFuture', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into KeyFuture', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this KeyFuture', 'textdomain' ),
		'items_list' => __( 'KeyFuture list', 'textdomain' ),
		'items_list_navigation' => __( 'KeyFuture list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter KeyFuture list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'KeyFuture', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-arrow-right-alt',
		'supports' => array('title', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 3,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => false,
	);
	register_post_type( 'keyfuture', $args );

}
add_action( 'init', 'create_keyfuture_cpt', 0 );

// Register Custom Post Type We are Best
function create_wearebest_cpt() {

	$labels = array(
		'name' => _x( 'We are Best', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'We are Best', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'We are Best', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'We are Best', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'We are Best Archives', 'textdomain' ),
		'attributes' => __( 'We are Best Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent We are Best:', 'textdomain' ),
		'all_items' => __( 'All We are Best', 'textdomain' ),
		'add_new_item' => __( 'Add New We are Best', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New We are Best', 'textdomain' ),
		'edit_item' => __( 'Edit We are Best', 'textdomain' ),
		'update_item' => __( 'Update We are Best', 'textdomain' ),
		'view_item' => __( 'View We are Best', 'textdomain' ),
		'view_items' => __( 'View We are Best', 'textdomain' ),
		'search_items' => __( 'Search We are Best', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into We are Best', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this We are Best', 'textdomain' ),
		'items_list' => __( 'We are Best list', 'textdomain' ),
		'items_list_navigation' => __( 'We are Best list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter We are Best list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'We are Best', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-awards',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 4,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
		'rewrite' => false,
	);
	register_post_type( 'wearebest', $args );

}
add_action( 'init', 'create_wearebest_cpt', 0 );



// Register Custom Post Type What Subjects
function create_whatsubjects_cpt() {

	$labels = array(
		'name' => _x( 'What Subjects', 'Post Type General Name', 'textdomain' ),
		'singular_name' => _x( 'What Subjects', 'Post Type Singular Name', 'textdomain' ),
		'menu_name' => _x( 'What Subjects', 'Admin Menu text', 'textdomain' ),
		'name_admin_bar' => _x( 'What Subjects', 'Add New on Toolbar', 'textdomain' ),
		'archives' => __( 'What Subjects Archives', 'textdomain' ),
		'attributes' => __( 'What Subjects Attributes', 'textdomain' ),
		'parent_item_colon' => __( 'Parent What Subjects:', 'textdomain' ),
		'all_items' => __( 'All What Subjects', 'textdomain' ),
		'add_new_item' => __( 'Add New What Subjects', 'textdomain' ),
		'add_new' => __( 'Add New', 'textdomain' ),
		'new_item' => __( 'New What Subjects', 'textdomain' ),
		'edit_item' => __( 'Edit What Subjects', 'textdomain' ),
		'update_item' => __( 'Update What Subjects', 'textdomain' ),
		'view_item' => __( 'View What Subjects', 'textdomain' ),
		'view_items' => __( 'View What Subjects', 'textdomain' ),
		'search_items' => __( 'Search What Subjects', 'textdomain' ),
		'not_found' => __( 'Not found', 'textdomain' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'textdomain' ),
		'featured_image' => __( 'Featured Image', 'textdomain' ),
		'set_featured_image' => __( 'Set featured image', 'textdomain' ),
		'remove_featured_image' => __( 'Remove featured image', 'textdomain' ),
		'use_featured_image' => __( 'Use as featured image', 'textdomain' ),
		'insert_into_item' => __( 'Insert into What Subjects', 'textdomain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this What Subjects', 'textdomain' ),
		'items_list' => __( 'What Subjects list', 'textdomain' ),
		'items_list_navigation' => __( 'What Subjects list navigation', 'textdomain' ),
		'filter_items_list' => __( 'Filter What Subjects list', 'textdomain' ),
	);
	$args = array(
		'label' => __( 'What Subjects', 'textdomain' ),
		'description' => __( '', 'textdomain' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-book-alt',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => true,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'whatsubjects', $args );

}
add_action( 'init', 'create_whatsubjects_cpt', 0 );