<?php

/**
 * Post rendering content according to caller of get_template_part
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>

<div class="witch-article col-12 col-md-6">
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<div class="card-body bg-light my-4 shadow">
			<img src="https://homepages.cae.wisc.edu/~ece533/images/monarch.png" alt="" class="card-img-top mb-3 border">

			<header class="entry-header">

				<?php
				the_title(
					sprintf('<h2 class="entry-title card-title mb-0"><a href="%s" rel="bookmark">', esc_url(get_permalink())),
					'</a></h2>'
				);
				?>

				<?php if ('post' === get_post_type()) : ?>

					<div class="entry-meta mb-2">
						<small><?php understrap_posted_on(); ?></small>
					</div><!-- .entry-meta -->

				<?php endif; ?>

			</header><!-- .entry-header -->

			<?php echo get_the_post_thumbnail($post->ID, 'large'); ?>

			<div class="entry-content card-text">

				<?php the_excerpt(); ?>

				<?php
				wp_link_pages(
					array(
						'before' => '<div class="page-links">' . __('Pages:', 'understrap'),
						'after'  => '</div>',
					)
				);
				?>

			</div><!-- .entry-content -->

			<footer class="entry-footer">

				<?php understrap_entry_footer(); ?>

			</footer><!-- .entry-footer -->
		</div> <!-- .card-body -->
	</article><!-- #post-## -->
</div>
