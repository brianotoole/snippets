<?php
/*
# Email
mailto:{email_address}?subject={subject}&body=<?php echo urlencode(get_the_title()); ?>%0A<?php the_permalink(); ?>

# Google+
https://plus.google.com/share?url=<?php the_permalink(); ?>

# Twitter
https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&via={username}&text=<?php echo urlencode(get_the_title()); ?>&in_reply_to={username}&hashtags={hash,tags}&related={usernames,usernames}

# Facebook
http://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>&t=<?php echo urlencode(get_the_title()); ?>

# LinkedIn
http://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php echo urlencode(get_the_title()); ?>&summary={articleSummary}&source={articleSource}

# Pinterest
http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media={imageURL}&description=<?php echo urlencode(get_the_title()); ?>
*/

// Properly sanitized share URLs for WordPress

$share_title = get_the_title();
$share_link  = get_permalink();
?>
<a href="http://www.facebook.com/sharer.php?u=<?php echo urlencode($share_link); ?>" class="share-link facebook" target="_blank"><?php get_inline_svg('icon-social-facebook-f.svg'); ?><span class="screen-reader-text">Share on Facebook</span></a>

<a href="https://twitter.com/intent/tweet?url=<?php echo urlencode($share_link); ?>&amp;via=vital_design&amp;text=<?php echo esc_attr($share_title); ?>" class="share-link twitter" target="_blank"><?php get_inline_svg('icon-social-twitter.svg'); ?><span class="screen-reader-text">Share on Twitter</span></a>

<a href="mailto:?subject=<?php echo esc_attr($share_title); ?>&body=<?php echo esc_attr($share_title); ?>%0A<?php echo esc_url($share_link); ?>" class="share-link email"><?php get_inline_svg('icon-social-email.svg'); ?><span class="screen-reader-text">Share via Email</span></a>