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
					<button type="button" class="btn btn-secondary"> Visit our store
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper pt-3 pt-lg-4" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<main class="site-main" id="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm card text-center my-2 my-sm-0 mr-sm-2 py-3 shadow-sm">
						<i class="fa fa-shopping-cart fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 mx-sm-2 py-3 shadow-sm">
						<i class="fa fa-users fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 ml-sm-2 py-3 shadow-sm">
						<i class="fa fa-book fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="witch-feature container-fluid">
				<div class="row bg-gray-900 my-2 shadow-sm">
					<div class="col p-4 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.jpg" alt="" class="">
					</div>
					<div class="col p-4 mr-1 text-justify">
						<h2>Advanced</h2>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos error dolorem explicabo ullam soluta optio sit facilis vel, iure deleniti? Assumenda animi fugiat consectetur possimus incidunt ipsam maxime sed, reprehenderit cum quo velit voluptatibus repudiandae, iusto doloremque veniam. Dolorum reiciendis autem nesciunt aut. Neque minima commodi delectus similique perferendis sint!</p>
					</div>
				</div>
				<div class="row bg-gray-900 my-2 shadow-sm flex-row-reverse">
					<div class="col p-4 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.jpg" alt="" class="">
					</div>
					<div class="col p-4 ml-1 text-justify">
						<h2>Advanced</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem enim eos necessitatibus quasi officiis nihil dignissimos cum ipsa cupiditate consectetur minus ratione culpa at ipsum nisi aliquid laboriosam sequi, accusamus qui omnis? Ipsa, officiis aliquam.</p>
					</div>
				</div>
			</div>

		</main><!-- #main -->

	</div><!-- .row -->

</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
