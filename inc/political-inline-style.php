<?php

function political_inline_style()
{
    wp_enqueue_style(
        'political-stylesheet',
        POLITICAL_THEME_URI . '/style.css'
    );

    if (!empty(get_header_image())) {
        $header_bg = 'url(' . esc_url(get_header_image()) . ')';
    } else {
        $header_bg = '#ffffff';
    }

    $bg_image = POLITICAL_IMG_URL . '/page-title-img.jpg';
    if (class_exists('kirki') && !empty(get_theme_mod('author_banner_bg'))) {
        $bg_image = esc_url(get_theme_mod('author_banner_bg'));
    } else {
        $bg_image = POLITICAL_IMG_URL . '/page-title-img.jpg';
    }

    $custom_css = '
    :root, [data-theme="default"] {
        --political-primary-color: ' . esc_attr(get_theme_mod('political_primary_color', '#041d57')) . ' ;
        --political-secondary-color: ' . esc_attr(get_theme_mod('political_secondary_color', '#dc3545')) . ';
        --political-text-color:' . esc_attr(get_theme_mod('political_text_color', '#1e2127')) . ';
        }
        .all-bg-image.p-author:before {
            background: '.get_theme_mod('author_bg_overlay').';
        }
        .all-bg-image.p-search:before {
            background: '.get_theme_mod('category_bg_overlay').';
        }
        .all-bg-image.p-category:before {
            background: '.get_theme_mod('search_bg_overlay').';
        }

    ';

    wp_add_inline_style('political-stylesheet', $custom_css);
}
add_action('wp_enqueue_scripts', 'political_inline_style');
