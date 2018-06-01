<?php
/**
 * Filter YouTube video ID from video URL
 * @param  [string] $url Video page URL
 * @return [string]      Video ID
 */
function get_youtube_id($url) {
    $pattern =
        '%^# Match any youtube URL
        (?:https?://)?  # Optional scheme. Either http or https
        (?:www\.)?      # Optional www subdomain
        (?:             # Group host alternatives
          youtu\.be/    # Either youtu.be,
        | youtube\.com  # or youtube.com
          (?:           # Group path alternatives
            /embed/     # Either /embed/
          | /v/         # or /v/
          | /watch\?v=  # or /watch\?v=
          )             # End path alternatives.
        )               # End host alternatives.
        ([\w-]{10,12})  # Allow 10-12 for 11 char youtube id.
        $%x'
        ;
    $result = preg_match($pattern, $url, $matches);
    if (false !== $result) {
        return $matches[1];
    }
    return false;
}
?>

<!-- Usage: -->
<?php echo get_youtube_id('http://www.youtube.com/watch?v=dQw4w9WgXcQ'); ?>
<?php echo get_youtube_id('http://youtu.be/dQw4w9WgXcQ'); ?>

<!-- Get YouTube video's poster image: -->
<?php $video_id = get_youtube_id('http://youtu.be/dQw4w9WgXcQ'); ?>
<img src="<?php echo 'http://img.youtube.com/vi/' . $video_id . '/hqdefault.jpg'; ?>" alt="">