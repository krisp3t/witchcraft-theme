<?php

/**
 * The sidebar containing the shop widget area
 *
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

if (!is_active_sidebar('shop-sidebar')) {
	return;
} ?>

<div class="col-md-4 widget-area" id="shop-sidebar" role="complementary">
	<?php dynamic_sidebar('shop-sidebar'); ?>

</div><!-- #shop-sidebar -->
