<?php

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */

add_action('after_setup_theme', function () {

	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(array(
		'primary' => esc_html__('Primary', 'darenzammit'),
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

	wp_enqueue_style('darenzammit-style', get_stylesheet_uri(), [], time());
	wp_enqueue_script('darenzammit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);
	wp_enqueue_script('darenzammit-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
	wp_enqueue_script('darenzammit-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true);

	//theme script

	//google fonts
	
	// if (is_singular() && comments_open() && get_option('thread_comments')) {
	// 	wp_enqueue_script('comment-reply');
	// }
	//
});

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
