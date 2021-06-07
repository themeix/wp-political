<?php

/**
 * Template Name: Full with template
 */
get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-title-area d-flex align-items-center py-5 position-relative overflow-hidden min-vh-55">
            <?php if (has_post_thumbnail()) : ?>
                <div class="all-bg-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
            <div class="container">
                <div class="page-title-wrapper text-light text-center">
                    <h1><?php the_title(); ?></h1>
                    <?php echo get_political_breadcrumbs(); ?>
                </div>
            </div>
        </div>

        <!-- ==================== News Area ========================= -->
        <div class="full-width-template my-5 " id="content">
            <div class="container">
                <div class="full-width-content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>