<!-- Queries -->
<!-- if posts available show posts, query to only show 3 -->
<?php query_posts('showposts=3' . '&cat=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php query_posts('posts_per_page=3&cat=-5&order=ASC');
<?php query_posts( array( 'category_in' => array(1,5), 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) );


'post_type' => 'product'
?>