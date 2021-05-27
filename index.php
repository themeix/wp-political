<?php get_header(); ?>

<!--/// Page Title Area /// -->
<div class="page-title-area py-5 position-relative overflow-hidden">

    <div class="all-bg-image">
        <?php if (get_header_image()) : ?>
            <img src="<?php echo esc_url(get_header_image()); ?>" alt="<?php the_title(); ?>" />
        <?php endif; ?>
    </div>

    <div class="container">
        <div class="page-title-wrapper text-light text-center">
            <h1><?php bloginfo('name'); ?></h1>
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
            <?php
            $layout = '';
            if (class_exists('kirki')) {
                $layout = get_theme_mod('political_blog_layout', '1');

                if ($layout == '3') {
                    get_sidebar();
                }
            }
            ?>
            <div class="col-lg-<?php if ($layout == '1' && class_exists('kirki')) {
                                    echo '12 col-md-12 ';
                                } elseif (!is_active_sidebar('political-sidebar')) {
                                    echo '12 col-md-12';
                                } else {
                                    echo '8 col-md-7';
                                } ?>">
                <?php if (have_posts()) : ?>
                    <div class="row">
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="col-md-<?php if ($layout == '1' && class_exists('kirki')) {
                                    echo '6 col-md-6';
                                } elseif (!is_active_sidebar('political-sidebar')) {
                                    echo '6 col-md-6';
                                } else {
                                    echo '12';
                                } ?>">
                                <?php get_template_part('template-parts/post-card'); ?>
                            </div>
                        <?php endwhile;  ?>
                    </div>
                <?php endif; ?>
                <?php get_template_part('template-parts/pagination'); ?>
            </div>

            <?php
            if (class_exists('kirki')) {
                if ($layout == '2') {
                    get_sidebar();
                }
            } else {
                get_sidebar();
            }
            ?>

        </div>

    </div>
</div>


<?php get_footer(); ?>