<?php get_header(); ?>

  <!--/// Page Title Area /// -->
  <div class="page-title-area py-5 position-relative overflow-hidden">
    <div class="all-bg-image"><img src="assets/image/hero-bg-img.jpg" alt="image"></div>
    <div class="container">
      <div class="page-title-wrapper text-light text-center">
        <h1> <?php echo esc_html__('Search results for : ', 'political'); ?> <strong><?php echo get_search_query(); ?></strong></h1>
       <?php echo get_political_breadcrumbs(); ?>
      </div>
    </div>
  </div>


<!-- ==================== News Area ========================= -->

<div class="news-area my-5 ">
    <div class="container">

        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <?php get_template_part('template-parts/post-card'); ?>
                    </div>
                <?php endwhile;  ?>
            <?php endif; ?>
        </div>
        
        <?php get_template_part('template-parts/pagination'); ?>
    </div>
</div>


<?php get_footer(); ?>