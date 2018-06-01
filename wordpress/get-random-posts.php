<?php
// Get random WordPress posts without using ORDER BY RAND

// Get all posts, returning only IDs
$query = new WP_Query(array(
    'posts_per_page' => -1,
    'fields'         => 'ids'
));

// Pick 2 random IDs
if ($query && is_array($query->posts)) {
    $random_ids = array_rand($query->posts, 2);
}

// Loop through our randomized array
if ($random_ids): ?>
    <div class="posts">
        <?php foreach ($random_ids as $id):
            $post_id = $query->posts[$id]; ?>
            <div class="post">
                <h1><a href="<?php echo get_the_permalink($post_id); ?>"><?php echo get_the_title($post_id); ?></a></h1>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>