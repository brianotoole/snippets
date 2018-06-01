# Update WordPress and all plugins
wp core update;wp core update-db;wp plugin update --all;

# Export database
wp db export backup.sql

# Search and replace the database
wp search-replace 'http://oldurl.com' 'http://newurl.com' --skip-columns=guid;wp cache flush;

# Search and replace the database, but export results as a SQL file (does not make live DB changes)
wp search-replace 'http://example.dev' 'http://example.com' --skip-columns=guid --export=sandbox.sql

# Bulk import images to media library
wp media import ~/Desktop/jpg-imports/*.jpg

# Regenerate all image sizes
wp media regenerate --yes

# Regenerate specific images, based on get_posts() results
wp media regenerate $(wp eval 'foreach( get_posts(array("post_type" => "resource", "fields" => "ids")) as $id ) { echo get_field("hero_image", $id) . " "; }')

# Run arbitrary PHP within WordPress
# Example file: /WordPress/wp-eval-file.php
wp eval-file myscript.php