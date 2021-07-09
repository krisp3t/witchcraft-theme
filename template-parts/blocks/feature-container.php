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
$id = 'witch-feature-container-' . $block['id'];
if (!empty($block['anchor'])) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'witch-feature-container';
if (!empty($block['className'])) {
	$className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
	$className .= ' align' . $block['align'];
}

// Checks
$button_text_empty = "";
// Load values and assign defaults.
$image = get_field('image') ?: 295;
$title = get_field('title') ?: 'Your Title';
$text = get_field('text') ?: 'Your text here...';
$button_text = get_field('button_text') ?: $button_text_empty = 'd-none';
$button_color = get_field('button_color') ?: 'button-secondary';
$button_link = get_field('button_link') ?: 'button-link';
$background_color = get_field('background_color') ?: 'bg-primary';
$image_position = get_field('image_position') ?: 'flex-md-row';
// Set up variables
$flex = ($image_position === "left") ? "flex-md-row" : "flex-md-row-reverse";
?>

<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?> container-fluid witch-feature-container">
	<div class="<?php echo "$flex $background_color"; ?> flex-column row my-4 shadow-sm border">
		<div class="col p-3 d-flex align-content-center justify-content-center">
			<?php echo wp_get_attachment_image($image, 'full', "", array(
				"class" => "witch-feature-container-image"
			)); ?>
		</div>
		<div class="col pt-1 pb-3 py-md-5 px-4 mr-lg-1">
			<h2 class="witch-feature-title"><?php echo $title; ?></h2>
			<p><?php echo $text; ?></p>
			<a href="<?php echo "$button_link" ?>"><button type="button" class="<?php echo "$button_text_empty $button_color" ?> btn mb-3 font-weight-bold"> <?php echo $button_text; ?>
				</button></a>
		</div>
	</div>
</div>
