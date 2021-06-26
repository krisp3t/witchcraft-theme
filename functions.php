<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts()
{
	wp_dequeue_style('understrap-styles');
	wp_deregister_style('understrap-styles');

	wp_dequeue_script('understrap-scripts');
	wp_deregister_script('understrap-scripts');

	// Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{

	// Get the theme data
	$the_theme = wp_get_theme();
	wp_enqueue_style('child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get('Version'));
	wp_enqueue_script('jquery');
	wp_enqueue_script('child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get('Version'), true);
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}

function add_child_theme_textdomain()
{
	load_child_theme_textdomain('understrap-child', get_stylesheet_directory() . '/languages');
}
add_action('after_setup_theme', 'add_child_theme_textdomain');

// Witchcraft Theme
// Add block category
function witch_block_categories($categories)
{
	$category_slugs = wp_list_pluck($categories, 'slug');
	return in_array('witch', $category_slugs, true) ? $categories : array_merge(
		array(
			array(
				'slug'  => 'witch',
				'title' => __('Witchcraft Theme', 'witch'),
				'icon'  => null,
			),
		),
		$categories,
	);
}
add_filter('block_categories', 'witch_block_categories');
// Portfolio Blocks
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
	// Check if function exists.
	if (function_exists('acf_register_block_type')) {
		// Register ACF blocks
		acf_register_block_type(array(
			'name'              => 'features',
			'title'             => __('Feature Columns'),
			'description'       => __('Three columns for features with icons.'),
			'render_template'   => 'template-parts/blocks/features/features.php',
			'category'          => 'witch',
			'icon'              => 'columns',
			'keywords'          => array('icons', 'column', 'feature'),
		));
		acf_register_block_type(array(
			'name'              => 'testimonial',
			'title'             => __('Testimonial'),
			'description'       => __('A testimonial block with a column of text and an image.'),
			'render_template'   => 'template-parts/blocks/testimonial/testimonial.php',
			'category'          => 'witch',
			'icon'              => 'align-pull-left',
			'keywords'          => array('testimonial', 'image'),
		));
	}
}
