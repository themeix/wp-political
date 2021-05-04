<?php get_header( ); ?>


<?php
$p_title_bg = POLITICAL_IMG_URL . '/hero-bg-img.jpg';
if (get_theme_mod('404_page_bg')) :
  $p_title_bg = get_theme_mod('404_page_bg');
endif;
?>
  <!--/// Page Title Area /// -->
  <div class="page-title-area py-5 position-relative overflow-hidden">
    <div class="all-bg-image"><img src="<?php echo esc_url($p_title_bg); ?>" alt="<?php echo get_the_title( ); ; ?>"></div>
    <div class="container">
      <div class="page-title-wrapper text-light text-center">
        <h1><?php echo esc_html__('Error 404', 'political'); ?></h1>
        <?php echo get_political_breadcrumbs(); ?>
      </div>
    </div>
  </div>



  <!-- ==================== Error Area ========================= -->

  <div class="error-area  py-5 ">
    <div class="container">
      <div class="error-content text-center w-75 mx-auto">
        <h3 class="display-5 pb-3"><?php echo esc_html(get_theme_mod('404_nothing_found_text', '404 - Noting Found')); ?></h3>
        <p><?php echo esc_html(get_theme_mod('404_nothing_found_description_text', 'We\'re sorry, the page you were looking for isn\'t found here. The link you followed may either be broken or no longer exists. Please try again, or take a look at our site.')); ?></p>
        <p class="mt-4"><a class="btn btn-danger" href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html(get_theme_mod('404_back_to_home_text', 'Back to home')); ?></a></p>
      </div>
    </div>
  </div>

<?php get_footer(); ?>