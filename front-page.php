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
					<button type="button" class="btn btn-secondary font-weight-bold"> Read More
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
							<h5 class="card-title">Awesome products</h5>
							<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam totam nobis necessitatibus labore quia cumque placeat non fugiat voluptates deleniti asperiores sit hic qui neque, dolores quos a suscipit eum.</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 mx-sm-2 py-3 shadow-sm border">
						<i class="fa fa-users fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Community</h5>
							<p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ipsum, aliquid eaque? Alias labore iusto sed placeat tempore iste expedita facilis!</p>
						</div>
					</div>
					<div class="col-sm card text-center my-2 my-sm-0 ml-sm-2 py-3 shadow-sm border">
						<i class="fa fa-book fa-3x"></i>
						<div class="card-body">
							<h5 class="card-title">Learning</h5>
							<p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita provident eos dicta sint aliquid nemo est accusamus praesentium, nesciunt voluptate deserunt alias officia iste earum.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="witch-feature container-fluid">
				<div class="row bg-primary my-4 shadow-sm flex-column flex-md-row border border-light">
					<div class="col p-3 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/shop.jpg" alt="" class="border">
					</div>
					<div class="col pt-1 pb-3 py-md-5 px-4 mr-lg-1">
						<h2 class="witch-feature-title">Shop</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat sed, beatae exercitationem quam similique, voluptates fuga repellat cumque reiciendis labore adipisci. Itaque nihil voluptatum eum. Reprehenderit libero corporis molestias! Facilis pariatur recusandae rerum deserunt cumque excepturi aliquam commodi numquam iusto.</p>
						<button type="button" class="btn btn-secondary mb-3 font-weight-bold"> Learn More
						</button>
					</div>
				</div>
				<div class="row bg-secondary my-4 shadow-sm flex-column flex-md-row-reverse border">
					<div class="col p-3 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/community.jpg" alt="" class="border">
					</div>
					<div class="col pt-1 pb-3 py-md-5 px-4 mr-lg-1">
						<h2 class="witch-feature-title">Community</h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A quidem illo porro voluptatibus harum beatae adipisci officiis est molestiae delectus?</p>
						<button type="button" class="btn btn-primary mb-3 font-weight-bold">Learn More
						</button>
					</div>
				</div>
				<div class="row bg-light my-4 shadow-sm flex-column flex-md-row border border-light">
					<div class="col p-3 d-flex align-content-center justify-content-center">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/container3.png" alt="" class="border">
					</div>
					<div class="col pt-1 pb-3 py-md-5 px-4 mr-lg-1">
						<h2 class="witch-feature-title">Learning</h2>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, provident consequuntur! Incidunt, perspiciatis consequatur voluptas esse culpa laborum ea consequuntur nobis deleniti reiciendis, vero sunt! Sequi voluptate molestias beatae ut.</p>
						<button type="button" class="btn btn-secondary mb-3 font-weight-bold"> Learn More
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
