<?php
/**
 * Fetch the taxonomy terms belonging to that post and return name
 */

$terms = get_the_terms( $post->ID, 'your-taxonomy' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    echo $term->slug;
}

?>
