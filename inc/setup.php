<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */

add_action('after_setup_theme', function () {

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => esc_html__('Primary', 'darenzammit'),
		'footer'  => esc_html__('Footer', 'darenzammit'),
	));

	add_theme_support('html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	));

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support('custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	));

	add_theme_support('soil-clean-up');
	// add_theme_support('soil-disable-asset-versioning');
	add_theme_support('soil-disable-trackbacks');
	// add_theme_support('soil-google-analytics', 'UA-XXXXX-Y');
	add_theme_support('soil-jquery-cdn');
	add_theme_support('soil-js-to-footer');
	add_theme_support('soil-nav-walker');
	add_theme_support('soil-nice-search');
	add_theme_support('soil-relative-urls');

	// $GLOBALS['content_width'] = apply_filters('darenzammit_content_width', 640);

});

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

add_action('widgets_init', function () {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'darenzammit'),
		'id'            => 'sidebar',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
});

/**
 * Enqueue scripts and styles.
 */

add_action('wp_enqueue_scripts', function () {

	wp_deregister_style('prism-theme');

	$v = time();

	wp_enqueue_style('darenzammit-fonts', 'https://fonts.googleapis.com/css?family=Libre+Franklin:300i,400,700|Lora:400,400i', [], null);
	// wp_enqueue_style('darenzammit-style', get_template_directory_uri() . '/dist/css/main.css', [], $v);

	wp_enqueue_script('darenzammit-main', get_template_directory_uri() . '/dist/js/main.js', ['jquery'], $v, true);

	//theme script

	//google fonts

	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	// 	wp_enqueue_script('comment-reply');
	// }
	//
}, 100);

add_action('wp_head', function () {
	if ($css = file_get_contents(get_template_directory() . '/dist/css/main.css')) {
		echo sprintf('<style type="text/css" id="theme-style">%s</style>', $css);
	}
});

add_action('wp_footer', function () {
	get_template_part('components/footer', 'scripts');
}, 100);