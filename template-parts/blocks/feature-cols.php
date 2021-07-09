<?php

/**
 * ACF Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'witch-feature-cols-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'witch-feature-cols';
if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}


// Load values and assign defaults.
$column_1_icon = esc_attr(get_field('column_1_icon')) ?: '';
$column_2_icon = esc_attr(get_field('column_2_icon')) ?: '';
$column_3_icon = esc_attr(get_field('column_3_icon')) ?: '';
$column_1_title = esc_html(get_field('column_1_title')) ?: '';
$column_2_title = esc_html(get_field('column_2_title')) ?: '';
$column_3_title = esc_html(get_field('column_3_title')) ?: '';
$column_1_text = esc_html(get_field('column_1_text')) ?: '';
$column_2_text = esc_html(get_field('column_2_text')) ?: '';
$column_3_text = esc_html(get_field('column_3_text')) ?: '';


?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> witch-feature-columns container-fluid">
	<div class="row">
		<div class="col-sm card text-center my-2 my-sm-0 mr-sm-2 py-3 shadow-sm border">
			<i class="<?php echo $column_1_icon; ?> fa-3x"></i>
			<div class="card-body">
				<h5 class="card-title"><?php echo $column_1_title ?></h5>
				<p class="card-text"><?php echo $column_1_text ?></p>
			</div>
		</div>
		<div class="col-sm card text-center my-2 my-sm-0 mx-sm-2 py-3 shadow-sm border">
			<i class="<?php echo $column_2_icon; ?> fa-3x"></i>
			<div class="card-body">
				<h5 class="card-title"><?php echo $column_2_title ?></h5>
				<p class="card-text"><?php echo $column_2_text ?></p>
			</div>
		</div>
		<div class="col-sm card text-center my-2 my-sm-0 ml-sm-2 py-3 shadow-sm border">
			<i class="<?php echo $column_3_icon; ?> fa-3x"></i>
			<div class="card-body">
				<h5 class="card-title"><?php echo $column_3_title ?></h5>
				<p class="card-text"><?php echo $column_3_text ?></p>
			</div>
		</div>
	</div>
</div>
