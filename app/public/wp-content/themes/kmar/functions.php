<?php

/**
 * kmar functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kmar
 */
$random_ver = rand(1, 1000000000);
if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', $random_ver);
}

if (!function_exists('kmar_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kmar_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kmar, use a find and replace
		 * to change 'kmar' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('kmar', get_template_directory() . '/languages');

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
				'menu-1' => esc_html__('Menu Chính', 'kmar'),
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
add_action('after_setup_theme', 'kmar_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kmar_content_width()
{
	$GLOBALS['content_width'] = apply_filters('kmar_content_width', 640);
}
add_action('after_setup_theme', 'kmar_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kmar_widgets_init()
{
    // Register sidebar
    register_sidebar(
        array(
            'name'          => esc_html__('Sidebar', 'kmar'),
            'id'            => 'sidebar-1',
            'description'   => esc_html__('Add widgets here.', 'kmar'),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );

    // Register footer sidebar
    register_sidebar(
        array(
            'name'          => esc_html__('Footer', 'kmar'), 
            'id'            => 'footer-1', 
            'description'   => esc_html__('Add widgets here for the footer.', 'kmar'), 
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
	register_sidebar(
        array(
            'name'          => esc_html__('Footer copyright', 'kmar'), 
            'id'            => 'footer-2', 
            'description'   => esc_html__('Add widgets here for the footer copyright.', 'kmar'), 
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init', 'kmar_widgets_init');


/**
 * Enqueue scripts and styles.
 */
function kmar_scripts()
{
	wp_enqueue_style('kmar-style', get_stylesheet_uri(), array(), _S_VERSION);
	if (is_404()) {
		wp_enqueue_style('kmar-404', get_template_directory_uri() . '/css/404.min.css', array(), _S_VERSION);
	}
	if (class_exists('WooCommerce')) {
		wp_enqueue_style('kmar-woo', get_template_directory_uri() . '/css/woocommerce.min.css', array(), _S_VERSION);
	}
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
	if (class_exists('WPCF7')) {
		wp_enqueue_style('kmar-alert', get_template_directory_uri() . '/assets/alert/css/cf7simplepopup-core.css', array(), _S_VERSION);
	}
	wp_enqueue_script('kmar-jquery', get_template_directory_uri() . '/assets/libs/jquery.min.js', array(), _S_VERSION, true);
	if (class_exists('WPCF7')) {
		wp_enqueue_script('kmar-jquery_alert', get_template_directory_uri() . '/assets/alert/js/cf7simplepopup-core.js', array(), _S_VERSION, true);
		wp_enqueue_script('kmar-jquery_alert_main', get_template_directory_uri() . '/assets/alert/js/sweetalert2.all.min.js', array(), _S_VERSION, true);
	}

	//css
	wp_enqueue_style('kmar-bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap.min.css');
	wp_enqueue_style('kmar-swiper', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.css');
	wp_enqueue_style('kmar-fontawesome', get_template_directory_uri() . '/assets/libs/font-awesome.min.css');
	wp_enqueue_style('kmar-fancybox', get_template_directory_uri() . '/assets/libs/jquery.fancybox.min.css');
	wp_enqueue_style('kmar-style-main', get_template_directory_uri() . '/assets/scss/style.css', array(), _S_VERSION);
	//js
	
	wp_enqueue_script('kmar-js-bootstrap', get_template_directory_uri() . '/assets/libs/bootstrap.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('kmar-js-swiper', get_template_directory_uri() . '/assets/libs/swiper-bundle.min.js', array(), _S_VERSION, true);
	wp_enqueue_script('kmar-js-fancybox', get_template_directory_uri() . '/assets/libs/jquery.fancybox.min.js', array(), _S_VERSION, true);

	wp_enqueue_script('kmar-js-main', get_template_directory_uri() . '/assets/js/index.js', array(), _S_VERSION, true);

}
add_action('wp_enqueue_scripts', 'kmar_scripts');


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Customizer Wordpress.
 */
require get_template_directory() . '/inc/customizer-wp.php';

/**
 * Customizer Widget.
 */
require get_template_directory() . '/inc/customizer-widget.php';


if (class_exists('WooCommerce')) {
	/**
	 * Customizer Woocommerce.
	 */
	require get_template_directory() . '/inc/customizer-woo.php';
}
