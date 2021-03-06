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

<!-- ACF  -->
<!-- Carousel -->
<div class="hero-image carousel slide shadow-sm" data-ride="carousel">
	<div class="carousel-inner">
		<div class="carousel-item active" style="--hero-background-url: url('<?php echo esc_url(get_field('hero_image')); ?>'); --hero-background-position: <?php echo esc_attr(get_field('hero_image_position')); ?>%;">
			<div class="container d-flex h-100 align-items-center justify-content-center">
				<div class="carousel-caption">
					<h1 class="text-shadow-lg"><?php echo esc_html(get_field('hero_title')); ?></h1>
					<p class="text-shadow-lg"><?php echo esc_html(get_field('hero_subtitle')); ?></p>
					<a href="<?php echo esc_url(get_field('hero_button_link')); ?>">
						<button type="button" class="btn <?php echo esc_attr(get_field('hero_button_color')); ?> font-weight-bold">
							<?php echo esc_html(get_field('hero_button_text')); ?>
						</button></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="wrapper pt-2 pt-md-4" id="index-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">

			<main class="site-main" id="main">

				<?php
				while (have_posts()) {
					the_post();
					get_template_part('loop-templates/content-front', 'page');
				}
				?>

			</main><!-- #main -->

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
