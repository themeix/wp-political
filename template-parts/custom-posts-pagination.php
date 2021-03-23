<nav class="news-navigation">

    <ul class="pagination">
      <?php
      echo paginate_links(array(
        'total' => $total_pages,
        'current' => $current_page,
        'prev_text'    => esc_html__('prev', 'political'),
        'next_text'    => esc_html__('next', 'political'),
      ));

      ?>
    </ul>
  </nav>