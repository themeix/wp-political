<?php get_header(); ?>

<?php get_template_part('template-parts/political-page-title'); ?>

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