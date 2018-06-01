<?php
/**
 * gform_confirmation_anchor
 *
 * Customize the confirmation anchor behavior that automatically
 * scrolls the page upon submission/validation
 *
 * https://www.gravityhelp.com/documentation/article/gform_confirmation_anchor/
 */
// Disable scroll on form #5
add_filter('gform_confirmation_anchor_5', '__return_false');
// Set scroll distance (to avoid a fixed header)
add_filter('gform_confirmation_anchor', function() {
    return 20;
});