<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');
?>


<!-- Carousel -->
<div id="carouselHeroImage" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img src="<?php echo get_stylesheet_directory_uri() . ("/img/hero.jpg"); ?>" class="d-block w-100 carousel-image" alt="Hero Image">
			<div class="container d-flex">
				<div class="carousel-caption justify-content-center align-items-center">
					<h1>Witchcraft Theme</h1>
					<p>A theme for witches and wizards. Made for WordPress blogs and WooCommerce stores.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">


			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
