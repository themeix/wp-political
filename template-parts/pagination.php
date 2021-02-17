<nav class="news-navigation mt-3">
    <?php
    the_posts_pagination(array(
        'prev_text'    => esc_html('«'),
        'next_text'    => esc_html('»'),
        'mid_size' => '5',
        'screen_reader_text' => ''
    ));
    ?>
</nav>