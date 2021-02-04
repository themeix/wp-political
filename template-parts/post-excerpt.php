<?php
    if (class_exists('kirki')) {
        $excerpt_limit = get_theme_mod('post_excerpt_limit', '30');
    }
    if (!empty($excerpt_limit)) {
        $limit = $excerpt_limit;
    } else {
        $limit = 30;
    }
    if (has_excerpt()) {
        the_excerpt();
    } else {
        echo political_excerpt($limit);
    }
?>