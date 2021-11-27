<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

// Load ACF
include_once(get_stylesheet_directory() . '/functions-acf.php');

function understrap_remove_scripts()
{
    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
    wp_dequeue_style('understrap-styles');
    wp_deregister_style('understrap-styles');

    wp_dequeue_script('understrap-scripts');
    wp_deregister_script('understrap-scripts');
}
add_action('wp_enqueue_scripts', 'understrap_remove_scripts', 20);

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
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

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
function my_acf_init_block_types()
{
    // Check if function exists.
    if (function_exists('acf_register_block_type')) {
        // Register ACF blocks
        acf_register_block_type(array(
            'name'              => 'feature-cols',
            'title'             => __('Feature Columns'),
            'description'       => __('Three columns for features with icons.'),
            'render_template'   => 'template-parts/blocks/feature-cols.php',
            'category'          => 'witch',
            'icon'              => 'columns',
            'keywords'          => array('icons', 'column', 'feature', 'columns'),
        ));
        acf_register_block_type(array(
            'name'              => 'feature-container',
            'title'             => __('Feature Container'),
            'description'       => __('A feature container with an image, text and button.'),
            'render_template'   => 'template-parts/blocks/feature-container.php',
            'category'          => 'witch',
            'icon'              => 'align-pull-left',
            'keywords'          => array('testimonial', 'feature', 'container', 'flex'),
        ));
    }
}
add_action('acf/init', 'my_acf_init_block_types');

// Shop Sidebar
function register_additional_childtheme_sidebars()
{
    register_sidebar(array(
        'id'            => 'shop-sidebar',
        'name'          => __('Shop Sidebar', 'child-theme-textdomain'),
        'description'   => __('Shop sidebar widget area', 'child-theme-textdomain'),
        'before_widget' => '<aside id="%1$s" class="widget %2$s" role="complementary">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
}
add_action('init', 'register_additional_childtheme_sidebars');

// Add shopping cart quantity
function witch_shopping_cart_after()
{
    if (function_exists('WC')) {
?>
        <style type='text/css'>
            #main-nav .fa.fa-shopping-cart:after {
                content: "<?php
                            if (!WC()->cart) {
                                echo '0';
                            } else {
                                echo esc_attr(WC()->cart->get_cart_contents_count());
                            } ?>
";

            }
        </style>

<?php  }
}
add_action('wp_head', 'witch_shopping_cart_after');
