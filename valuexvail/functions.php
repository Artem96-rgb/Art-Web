<?php

/**
 * valuexvail functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package valuexvail
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

if (!function_exists('valuexvail_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function valuexvail_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on valuexvail, use a find and replace
		 * to change 'valuexvail' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('valuexvail', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__('Primary', 'valuexvail'),
			)
		);

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
				'valuexvail_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

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
endif;
add_action('after_setup_theme', 'valuexvail_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function valuexvail_content_width()
{
	$GLOBALS['content_width'] = apply_filters('valuexvail_content_width', 640);
}
add_action('after_setup_theme', 'valuexvail_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function valuexvail_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'valuexvail'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'valuexvail'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'valuexvail_widgets_init');

/**
 * Enqueue scripts and styles.
 */


function valuexvail_scripts()
{
	wp_enqueue_style('valuexvail-style', get_stylesheet_uri());

	wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap-grid.min.css');
	wp_enqueue_style('swiper-style', get_template_directory_uri() . '/assets/css/swiper.css');

	wp_enqueue_script('isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array(), '1.0.0', true);
	wp_enqueue_script('swiper-js', get_template_directory_uri() . '/assets/js/swiper.min.js', array(), '1.0.0', true);
	wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);





	wp_style_add_data('valuexvail-style', 'rtl', 'replace');


	wp_deregister_script('jquery');

	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.min.js', false, null, true);
	wp_enqueue_script('jquery');
	// wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'valuexvail_scripts');








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


add_action('init', 'register_post_types');
function register_post_types()
{
	register_post_type('post_type_name', [
		'label' => null,
		'labels' => [
			'name' => 'presintation',
			'singular_name' => 'presintation',
			'add_new' => 'Добавить presintation',
			'add_new_item' => 'Добавление presintation',
			'edit_item' => 'Редактирование presintation',
			'new_item' => 'Новое presintation',
			'view_item' => 'Смотреть presintation',
			'search_items' => 'Искать presintation',
			'not_found' => 'Не найдено',
			'not_found_in_trash' => 'Не найдено в корзине',
			'parent_item_colon' => '',
			'menu_name' => 'presintation',
		],
		'description' => '',
		'public' => true,
		'show_in_menu' => null,
		'show_in_rest' => null,
		'rest_base' => null,
		'menu_position' => null,
		'menu_icon' => null,
		'hierarchical' => false,
		'supports' => ['title', 'editor', 'thumbnail'],
		'taxonomies' => ['category'],
		'has_archive' => false,
		'rewrite' => true,
		'query_var' => true,
	]);
}
