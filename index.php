<?php

get_header(); ?>

<!--/// Page Title Area /// -->
<div class="page-title-area py-5 position-relative overflow-hidden">

    <div class="all-bg-image">
        <?php if (get_header_image()) : ?>
            <img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="page-title-wrapper text-light text-center">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index1.html">Home</a></li>
                    <li class="breadcrumb-item">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
</div>


<!-- ==================== News Area ========================= -->

<div class="news-area my-5 ">
    <div class="container">

        <div class="row">
            <div class="col-md-7 col-lg-8">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?php get_template_part('template-parts/post-card'); ?>
                            </div>
                        </div>
                    <?php endwhile;  ?>
                <?php endif; ?>

                <?php get_template_part('template-parts/pagination'); ?>
            </div>

            <?php get_sidebar(); ?>

        </div>




    </div>
</div>


<?php get_footer(); ?>