<!--Page Template Naming-->  
<?php
/*
Template Name: Cheat Sheet
*/
?>




<!-- Gets, Includes, Parts -->
<?php get_header(); ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
<?php get_search_form(); ?>
<?php the_search_query(); ?>
<?php wp_list_categories('depth=1&title_li='); ?> 
<?php get_template_part('/includes/post-types/archivepost');?>
<?php include( TEMPLATEPATH . '/404.php' ); // get 404.php page ?>



<!--Insert Shortcode Outside of Loop-->  
<?php echo do_shortcode('[shortcode option1="value1" option2="value2"]'); ?>





<!-- If Statements -->
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
<?php endif; ?>

<!-- .htaccess cheatsheet -->
http://www.thejackol.com/htaccess-cheatsheet/






<!-- Regular Functions-->
<?php echo date("Y"); ?>







<!-- Queries -->
<!-- if posts available show posts, query to only show 3 -->
<?php query_posts('showposts=3' . '&cat=4'); if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php query_posts('posts_per_page=3&cat=-5&order=ASC');
<?php query_posts( array( 'category_in' => array(1,5), 'posts_per_page' => 3, 'orderby' => 'title', 'order' => 'DESC' ) );


'post_type' => 'product'
?>






<!-- Loops -->

<!-- show posts if they are available -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
//do something
<?php endwhile; else: ?>
<p><?php _e('No posts yet.'); ?></p>
<?php endif; ?>







<!-- Dynamic Linking -->
<a href="<?php echo home_url(); ?>/news"><?php bloginfo('name');?></a>
<img src="<?php bloginfo('stylesheet_directory') ?>/images/sidenav-regdonate.jpg"/></a>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php include( TEMPLATEPATH . '/404.php' ); // get 404.php page ?>






<!-- Meta tags -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="description" content="..." />
<meta name="keywords" content="..." />
<meta property="og:title" content="..." />
<meta property="og:image" content="..." />
<meta property="og:description" content="..." />

<!-- Favicion -  create a favicon at: http://www.faviconer.com/ -->
<link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory') ?>/favicon.ico" />


