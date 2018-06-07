<?php
/**
 * Deregister jQuery & enqueue CDN version 
 * Add or include to funtions.php
 */
function custom_jquery() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js', array(), '2.2.4', true);
}
add_action('wp_enqueue_scripts', 'custom_jquery');
?>
