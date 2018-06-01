<?php
/**
 * Post Gravity Form data to Pardot
 */
function gform_post_to_pardot($entry, $form) {
    $post_url = 'https://go.pardot.com/l/12345/2015-09-18/123abc'; // Pardot Form Handler URL
    $body = array(
        'name' => rgar($entry, '1'), //'name' == field in pardot; '1' == id of form field created in GForm admin
        'email' => rgar($entry, '2')
    );
    $request = new WP_Http();
    $response = $request->post($post_url, array('body' => $body));
}
// Add function to form 
add_action('gform_after_submission', 'gform_post_to_pardot', 10, 2);

// If you want to add to specific form ID (Form ID#2 below) only, sepecify the ID in action, like so...
/*
add_action('gform_after_submission_2', 'gform_post_to_pardot', 10, 2);
*/