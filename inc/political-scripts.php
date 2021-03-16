<?php
function political_scripts()
{

    //-- ====================ALL CSS FILE HERE===================== --//
    wp_enqueue_style('APP', POLITICAL_CSS_URL . '/app.min.css', array(), 'v1.0', 'all');
    wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), rand(455, 65466), 'all');


    //-- ====================ALL JS FILE HERE===================================== --//

    wp_enqueue_script('app', POLITICAL_JS_URL . '/build.min.js', array('jquery'), 'v1.0', true);
    wp_register_script('aa_js_googlemaps_script',  'https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyC4eyPZwA5BW6SQql-gHygfwNxUOS_-sVk'); // with Google Maps API fix
		wp_enqueue_script('aa_js_googlemaps_script');

    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'political_scripts');

