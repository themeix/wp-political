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
    global $political_content_width;
    if (!isset($political_content_width)) {
        $political_content_width = 900;
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


if (class_exists('kirki')) {
    require_once POLITICAL_THEME_DIR . '/inc/customizer/class-customizer.php';
    require_once POLITICAL_THEME_DIR . '/inc/customizer/customizer-options.php';
}

include_once('inc/tgm/class-tgm-plugin-activation.php');
include_once('inc/tgm/recommended-plugins.php');


//Political Nav Menus
function political_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' =>  esc_html__('Primary Menu', 'political'),
        'footer_menu' =>  esc_html__('Footer Menu', 'political'),
        'header_3_left_menu' =>  esc_html__('Header 3 Left Menu', 'political'),
        'header_3_right_menu' =>  esc_html__('Header 3 Right Menu', 'political'),
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


/*
* Creating a function to create our CPT
*/

function custom_post_type()
{
    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => esc_html__('Campaigns', 'Post Type General Name', 'political'),
        'singular_name'       => esc_html__('Campaign', 'Post Type Singular Name', 'political'),
        'menu_name'           => esc_html__('Campaigns', 'political'),
        'parent_item_colon'   => esc_html__('Parent Campaign', 'political'),
        'all_items'           => esc_html__('All Campaigns', 'political'),
        'view_item'           => esc_html__('View Campaign', 'political'),
        'add_new_item'        => esc_html__('Add New Campaign', 'political'),
        'add_new'             => esc_html__('Add New', 'political'),
        'edit_item'           => esc_html__('Edit Campaign', 'political'),
        'update_item'         => esc_html__('Update Campaign', 'political'),
        'search_items'        => esc_html__('Search Campaign', 'political'),
        'not_found'           => esc_html__('Not Found', 'political'),
        'not_found_in_trash'  => esc_html__('Not found in Trash', 'political'),
    );

    // Set other options for Custom Post Type

    $args = array(
        'label'               => esc_html__('Campaigns', 'political'),
        'description'         => esc_html__('Campaign news and reviews', 'political'),
        'labels'              => $labels,
        'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields',),
        'taxonomies'          => array('genres'),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'menu_icon'           => 'dashicons-megaphone',
        'capability_type'     => 'post',
        'show_in_rest' => true,

    );

    // Registering your Custom Post Type
    register_post_type('campaign', $args);
}

add_action('init', 'custom_post_type', 0);


// if (!class_exists('acf')) :
//     function get_field()
//     {
//         return '';
//     }
// endif;


/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
    require get_template_directory() . '/inc/woocommerce.php';
}

//Political comments time
function political_comments_time($date, $d, $comment)
{
    return sprintf(_x('%s ago', '%s = human-readable time difference', 'political'), human_time_diff(get_comment_time('U'), current_time('timestamp')));
}
add_filter('get_comment_date', 'political_comments_time', 10, 3);

//Comments Layout
function political_comments($comment, $args, $depth)
{
    ?>
    <li <?php comment_class('mb-4'); ?> id="comment-<?php comment_ID() ?>">
        <div class="comment-item">
            <div class="avatar">
                <?php echo get_avatar($comment, $args['avatar_size']); ?>
            </div>
            <div class="content">
                <h5 class="name text-primary fw-bolder"><?php echo get_comment_author_link(); ?> <span class="ps-1 fs-6 fw-normal text-muted"><?php echo esc_html(get_comment_date()); ?></span></h5>
                <?php comment_text(); ?>

                <?php comment_reply_link(array_merge($args, array('class' => 'reply', 'reply_text' => esc_html__('Reply', 'political'), 'depth' => $depth, 'max_depth' => $args['max_depth'])), $comment->comment_ID); ?>
            </div>
            <?php if ($comment->comment_approved == '0') : ?>
                <em><i class="icon-info-sign"></i> <?php esc_html_e('Comment awaiting approval', 'political'); ?></em>
                <br />
            <?php endif; ?>
        </div>
    </li>

<?php
}

add_filter('comment_reply_link', 'political_replace_reply_link_class');

function political_replace_reply_link_class($class)
{
    $class = str_replace("class='comment-reply-link", "class='reply", $class);
    return $class;
}

function political_move_comment_field_to_bottom($fields)
{
    $comment_field = $fields['comment'];
    unset($fields['comment']);
    $fields['comment'] = $comment_field;
    return $fields;
}

add_filter('comment_form_fields', 'political_move_comment_field_to_bottom');

//custom comments form label
function political_comment_form_text($fields)
{
    $fields['label_submit'] = esc_html__('Add Comment', 'political');
    $fields['title_reply'] = esc_html__('Leave a Comment', 'political');

    return $fields;
}
add_filter('comment_form_defaults', 'political_comment_form_text');


// Filter posts link class
function posts_link_next_class($format)
{
    $format = str_replace('href=', 'class="btn btn-outline-primary btn-sm" href=', $format);
    return $format;
}
add_filter('next_post_link', 'posts_link_next_class');

function posts_link_prev_class($format)
{
    $format = str_replace('href=', 'class="btn btn-outline-primary btn-sm" href=', $format);
    return $format;
}
add_filter('previous_post_link', 'posts_link_prev_class');
