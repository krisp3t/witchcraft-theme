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
<div id="carouselHeroImage" class="carousel slide shadow-sm" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active">
			<div class="container d-flex h-100 align-items-center justify-content-center">
				<div class="carousel-caption">
					<h1 class="text-shadow-lg">Witchcraft Theme</h1>
					<p class="text-shadow-lg">A theme for witches and wizards. Made for WordPress blogs and WooCommerce stores.</p>
					<button type="button" class="btn btn-primary"> Visit our store
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main container-fluid" id="main">
				<div class="row">
					<div class="col-sm card text-center mx-2 py-3 shadow-sm">
						<i class="fa fa-shopping-cart fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center mx-2 py-3 shadow-sm">
						<i class="fa fa-users fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center mx-2 py-3 shadow-sm">
						<i class="fa fa-book fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
		</div>

		</main><!-- #main -->

	</div><!-- .row -->

</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
