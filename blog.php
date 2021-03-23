<?php

/**
 * Template Name: Blog Page
 */

get_header(); ?>

<?php get_template_part('template-parts/political-page-title'); ?>
<!-- ==================== News Area ========================= -->

<div class="news-area my-5 ">
  <div class="container">

    <div class="row">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      if (is_front_page()) {
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
      }
      $query = new WP_Query(array(
        'post_type' => 'post',
        'order' => "DSC",
        'post_status' => 'publish',
        'paged' => $paged
      )); ?>

      <?php if ($query->have_posts()) : ?>
        <?php while ($query->have_posts()) : $query->the_post(); ?>
          <div class="col-md-6 col-lg-4">
            <?php get_template_part('template-parts/post-card'); ?>
          </div>
        <?php endwhile; ?>

        <?php
          $total_pages = $query->max_num_pages;
          $current_page = max(1, get_query_var('paged'));

          if (is_front_page()) :
            $current_page = max(1, get_query_var('page'));
          endif;
          ?>
      <?php endif; ?>
    </div>


    <nav class="news-navigation mt-4">

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
  </div>
</div> 

<?php get_footer(); ?>