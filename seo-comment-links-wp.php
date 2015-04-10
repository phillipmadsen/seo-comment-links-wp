<?php
/*
Plugin Name: SEO comment-links-wp
Plugin URI: https://github.com/phillipmadsen/seo-comment-links-wp
Description: Opens all the links (URLs) added in the comments and author URL, in a new tab or window and labeled them external links in the title while also adding nofollow to not lose pagerank to them.
Author: phillip madsen
Version: 1.0
Author URI: http://www.affordableprogrammer.com/
*/

function open_in_new_window($text) {
	$return_url = str_replace('<a', '<a title="external-link" rel="nofollow" target="_blank"', $text);
	return $return_url;
}
add_filter('get_comment_author_link', 'open_in_new_window');
add_filter('comment_text', 'open_in_new_window');


/*
Instructions: Create a folder in your wp-content folder called mu-plugins or if you already have one simply drop this file into it if you have a loader. 
Without a loader Just the php file itself. 

prefered install-
-wp-config
--mu-plugins
---(proxy loader if present)
---seo-comment-links-wp 
----seo-comment-links-wp.php

secondary install -
-wp-config
--mu-plugins (create if necessary)
---seo-comment-links-wp.php

*/


/* End of plugin */
?>