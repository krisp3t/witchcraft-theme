<?
if (!function_exists('understrap_post_nav')) {
    /**
     * Display navigation to next/previous post when applicable.
     */
    function understrap_post_nav()
    {
        // Don't print empty markup if there's nowhere to navigate.
        $previous = (is_attachment()) ? get_post(get_post()->post_parent) : get_adjacent_post(false, '', true);
        $next     = get_adjacent_post(false, '', false);

        if (!$next && !$previous) {
            return;
        }
?>
        <nav class="container navigation post-navigation">
            <h2 class="sr-only"><?php esc_html_e('Post navigation', 'understrap'); ?></h2>
            <div class="row nav-links justify-content-between text-secondary my-2 font-weight-bold">
                <?php
                if (get_previous_post_link()) {
                    previous_post_link('<span class="nav-previous">%link</span>', _x('<i class="fa fa-angle-left"></i>&nbsp;%title', 'Previous post link', 'understrap'));
                }
                if (get_next_post_link()) {
                    next_post_link('<span class="nav-next">%link</span>', _x('%title&nbsp;<i class="fa fa-angle-right"></i>', 'Next post link', 'understrap'));
                }
                ?>
            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
<?php
    }
}
