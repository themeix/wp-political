<?php get_header(); ?>
<?php
$page_bg = POLITICAL_IMG_URL . '/hero-bg-img.jpg';
if (get_theme_mod('author_banner_bg')) :
    $page_bg = get_theme_mod('author_banner_bg');
endif;
?>

<!--/// Page Title Area /// -->
<div class="page-title-area py-5 position-relative overflow-hidden">
    <div class="all-bg-image p-category"><img src="<?php echo esc_url($page_bg); ?>" alt="<?php the_title(); ?>"></div>
    <div class="container">
        <div class="page-title-wrapper text-light text-center">
            <h1><?php wp_title(''); ?></h1>
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


<?php 
get_footer();
 ?>