<?php

/**
 * Add WooCommerce support
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

// Redefining UnderStrap functions to include our sidebar widget and remove left and right
function understrap_woocommerce_wrapper_start()
{
    $container = get_theme_mod('understrap_container_type');
    echo '<div class="wrapper" id="woocommerce-wrapper">';
    echo '<div class="container-fluid container-shop" id="content" tabindex="-1">';
    echo '<div class="row">';
    get_template_part('/sidebar-templates/shop-sidebar');
    echo '<main class="site-main col-md pr-0 px-lg-5" id="main">';
}

function understrap_woocommerce_wrapper_end()
{
    echo '</main><!-- #main -->';
    echo '</div><!-- .row -->';
    echo '</div><!-- Container end -->';
    echo '</div><!-- Wrapper end -->';
}

require_once(get_template_directory() . "/inc/woocommerce.php");
