<?php
function political_scripts()
{

    //-- ====================ALL CSS FILE HERE===================== --//
    wp_enqueue_style('iconmonstr-iconic-font', POLITICAL_CSS_URL . '/iconmonstr-iconic-font.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('meanmenu', POLITICAL_CSS_URL . '/meanmenu.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('slick', POLITICAL_CSS_URL . '/slick.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('aos', POLITICAL_CSS_URL . '/aos.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('animate', POLITICAL_CSS_URL . '/animate.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('venobox', POLITICAL_CSS_URL . '/venobox.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('lightbox', POLITICAL_CSS_URL . '/lightbox.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('typofix', POLITICAL_CSS_URL . '/typofix.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('political-style.min', POLITICAL_CSS_URL . '/style.min.css', array(), rand(455, 65466), 'all');
    wp_enqueue_style('political-stylesheet', get_stylesheet_uri(), array(), rand(455, 65466), 'all');


    //-- ====================ALL JS FILE HERE===================================== --//
        
    wp_enqueue_script('bootstrap', POLITICAL_JS_URL . '/bootstrap.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('propper', POLITICAL_JS_URL . '/popper.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('meanmenu', POLITICAL_JS_URL . '/meanmenu.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('slcik', POLITICAL_JS_URL . '/slick.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('aos', POLITICAL_JS_URL . '/aos.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('prism', POLITICAL_JS_URL . '/prism.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('isotop', POLITICAL_JS_URL . '/isotope.pkgd.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('jequry.easing', POLITICAL_JS_URL . '/jquery.easing.min.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('venobox', POLITICAL_JS_URL . '/venobox.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('lightbox', POLITICAL_JS_URL . '/lightbox.js', array('jquery'), 'v1.0', true);
    wp_enqueue_script('political-app', POLITICAL_JS_URL . '/app.js', array('jquery'), 'v1.0', true);

    if (is_singular()) wp_enqueue_script("comment-reply");
}
add_action('wp_enqueue_scripts', 'political_scripts');

