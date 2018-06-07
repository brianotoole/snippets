<?php
/**
 * Get Featured Thumbnail, return it as URL
 */

function get_thumb_img($id) {
  $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); 
  return $image[0];
}

// USAGE
//<img src=" '. echo get_thumb_img($id) .' ">

?>
