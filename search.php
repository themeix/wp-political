<?php get_header(); ?>

<?php
$p_title_bg = POLITICAL_IMG_URL . '/hero-bg-img.jpg';
if (get_theme_mod('search_result_bg')) :
  $p_title_bg = get_theme_mod('search_result_bg');
endif;
?>
<!--/// Page Title Area /// -->
<div class="page-title-area py-5 position-relative overflow-hidden">
  <div class="all-bg-image"><img src="<?php echo esc_url($p_title_bg); ?>" alt="<?php echo get_the_title( ); ; ?>"></div>
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
      <?php else : ?>
        <div class="col-md-7 mx-auto">
          <h2 class="text-left search-empty"><?php echo esc_html(get_theme_mod('search_nothing_found_text', 'Nothing Found')); ?></h2>
          <p class="text-left search-empty"><?php echo esc_html(get_theme_mod('search_nothing_found_description_text', 'Sorry, nothing matched your search terms. Please try again with some different keywords.'))?></p>
          <div class="search-page-searchform">
            <form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url()); ?>">
              <label>
                <input type="search" class="form-control" placeholder="<?php echo esc_attr__( 'Search…', 'political' ); ?>" value="" name="s">
              </label>
              <button type="submit" class="search-submit btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
          </svg> </button>

            </form>
          </div>
        </div>
      <?php endif; ?>

    </div>

    <?php get_template_part('template-parts/pagination'); ?>
  </div>
</div>

<?php get_footer(); ?>