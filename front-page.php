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
					<button type="button" class="btn btn-secondary font-weight-bold"> Visit our store
					</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper pt-2 pt-md-4" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<main class="site-main" id="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm card text-center my-2 my-sm-0 mr-sm-2 py-3 shadow-sm border">
						<i class="fa fa-shopping-cart fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 mx-sm-2 py-3 shadow-sm border">
						<i class="fa fa-users fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 ml-sm-2 py-3 shadow-sm border">
						<i class="fa fa-book fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="witch-feature container-fluid">
				<div class="row bg-gray-900 my-4 shadow-sm flex-column flex-md-row border border-light">
					<div class="col p-4 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.jpg" alt="" class="border">
					</div>
					<div class="col pt-0 pt-md-4 pr-4 pb-4 pl-4 pl-md-3 mr-lg-1">
						<h2>Advanced</h2>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos error dolorem explicabo ullam soluta optio sit facilis vel, iure deleniti? Assumenda animi fugiat consectetur possimus incidunt ipsam maxime sed, reprehenderit cum quo velit voluptatibus repudiandae, iusto doloremque veniam. Dolorum reiciendis autem nesciunt aut. Neque minima commodi delectus similique perferendis sint!</p>
						<button type="button" class="btn btn-secondary mb-3 font-weight-bold"> Read More
						</button>
					</div>
				</div>
				<div class="row bg-gray-witch my-4 shadow-sm flex-column flex-md-row-reverse border">
					<div class="col p-4 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hero.jpg" alt="" class="border">
					</div>
					<div class="col pt-0 pt-md-4 pl-4 pb-4 pr-4 pr-md-3 mr-lg-1">
						<h2>Advanced</h2>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos error dolorem explicabo ullam soluta optio sit facilis vel, iure deleniti? Assumenda animi fugiat consectetur possimus incidunt ipsam maxime sed, reprehenderit cum quo velit voluptatibus repudiandae, iusto doloremque veniam. Dolorum reiciendis autem nesciunt aut. Neque minima commodi delectus similique perferendis sint!</p>
						<button type="button" class="btn btn-secondary mb-3 font-weight-bold"> Read More
						</button>
					</div>
				</div>
			</div>

		</main><!-- #main -->

	</div><!-- .row -->

</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
