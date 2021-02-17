<?php
if (!defined('POLITICAL_THEME_URI')) {
    define('POLITICAL_THEME_URI', get_template_directory_uri());
}

define('POLITICAL_THEME_DIR', get_template_directory());
define('POLITICAL_CSS_URL', get_template_directory_uri() . '/assets/css');
define('POLITICAL_JS_URL', get_template_directory_uri() . '/assets/js');
define('POLITICAL_IMG_URL', POLITICAL_THEME_URI . '/assets/images');
define('POLITICAL_INC_DIR', POLITICAL_THEME_URI . '/inc');
define('POLITICAL_THEME', true);

function political_setup()
{
    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    /*
    	 * Make theme available for translation.
    	 * Translations can be filed in the /languages/ directory.
    	 * If you're building a theme based on Laundry, use a find and replace
    	 * to change 'laundry' to the name of your theme in all the template files.
    	 */
    load_theme_textdomain('political', get_template_directory() . '/languages');

    // Set the default content width.
    global $churel_content_width;
	if ( ! isset( $churel_content_width ) ) {
		$churel_content_width = 900;
	}

    //Support Automatic Feed Links 
    add_theme_support('automatic-feed-links');

    //Support Post-Thumbnails
    add_theme_support('post-thumbnails');

    //Support Titile Tag
    add_theme_support('title-tag');

    //Add Image Size
    add_image_size('political-featured-image', 730, 430, false);

    // Load regular editor styles into the new block-based editor.
    add_theme_support('editor-styles');

    //enqueue editor style
    add_editor_style('style-editor.css');

    // Load default block styles.
    add_theme_support('wp-block-styles');

    // Add support for responsive embeds.
    add_theme_support('responsive-embeds');

    //Custom Logo
    add_theme_support('custom-logo');

    //Custom Header
    add_theme_support('custom-header');

    //Custom Background
    add_theme_support("custom-background");

    require_once POLITICAL_THEME_DIR . '/inc/class-wp-navwalker.php';
    require_once POLITICAL_THEME_DIR . '/inc/political-scripts.php';
    require_once POLITICAL_THEME_DIR . '/inc/breadcrumbs.php';
}
add_action('after_setup_theme', 'political_setup');


//Political Nav Menus
function political_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' =>  esc_html__('Primary Menu', 'political'),
        'footer_menu' =>  esc_html__('Footer Menu', 'political'),
    ));
}
add_action('init', 'political_nav_menus');

//Political Sidebar
function political_sidebar()
{
    register_sidebar(array(
        'name' => esc_html__('Political Sidebar', 'political'),
        'id'  => 'political-sidebar',
        'description' =>  esc_html__('Political sidebar', 'political'),
        'before_title' => '<h5 class="sidebar-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="sidebar-widget widget %2$s">',
        'after_widget' => '</div>'
    ));

    register_sidebar(array(
        'name' => esc_html__('Footer One', 'political'),
        'id'  => 'footer1',
        'description' =>  esc_html__('Use this sidebar for footer one.', 'political'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Two', 'political'),
        'id'  => 'footer2',
        'description' =>  esc_html__('Use this sidebar for footer two.', 'political'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Three', 'political'),
        'id'  => 'footer3',
        'description' =>  esc_html__('Use this sidebar for footer three.', 'political'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
    register_sidebar(array(
        'name' => esc_html__('Footer Four', 'political'),
        'id'  => 'footer4',
        'description' =>  esc_html__('Use this sidebar for footer four.', 'political'),
        'before_title' => '<h5 class="footer-title heading-5">',
        'after_title' => '</h5>',
        'before_widget' => '<div id="%1$s" class="footer-widget wow fadeIn widget %2$s">',
        'after_widget' => '</div>'
    ));
}
add_action('widgets_init', 'political_sidebar');

//Political excerpt
function political_excerpt($limits = 25)
{
    $limits = $limits + 1;
    $content = strip_tags(get_the_content());
    $make_index = explode(' ', $content, $limits);
    if (count($make_index) <= $limits) {
        array_pop($make_index);
    }
    $excerpt = implode(' ', $make_index);
    return $excerpt;
}

function political_reading_time()
{
    // get the content
    $the_content = get_the_content();
    // count the number of words
    $words = str_word_count(strip_tags($the_content));
    // rounding off and deviding per 200 words per minute
    $minute = floor($words / 200);
    // rounding off to get the seconds
    $second = floor($words % 200 / (200 / 60));

    // calculate the amount of time needed to read
    $estimate = $minute . ' minute' . ($minute == 1 ? '' : 's') . ', ' . $second . ' second' . ($second == 1 ? '' : 's');

    // create output
    $output = '<p>Estimated reading time: ' . $estimate . '</p>';

    // return the estimate
    return $output;
}

//Add class in menu item
function political_nav_class($classes, $item)
{
    $classes[] = 'nav-item delay-1';
    return $classes;
}
add_filter('nav_menu_css_class', 'political_nav_class', 10, 2);

function political_add_span($links)
{
    $links = str_replace('</a> (', '</a> <span class="cat-count">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}
add_filter('wp_list_categories', 'political_add_span');

function political_add_span_in_archive($links)
{
    $links = str_replace('</a>&nbsp;(', '</a><span class="archive-count">', $links);
    $links = str_replace(')</li>', '</span></li>', $links);
    return $links;
}
add_filter('get_archives_link', 'political_add_span_in_archive');



function political_post_time_ago()
{
    return sprintf(esc_html__('%s ago', 'political'), human_time_diff(get_the_time('U'), current_time('timestamp')));
}
add_filter('the_time', 'political_post_time_ago');


