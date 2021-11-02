<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

?>
<?php get_template_part('/sidebar-templates/sidebar', 'footerfull'); ?>

<?php wp_footer(); ?>

</body>

</html>