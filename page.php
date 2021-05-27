<?php get_header(); ?>
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

        <div class="news-area my-5 ">
            <div class="container">
                <div class="row">
                    <?php
                        $layout = '';
                            if (class_exists('kirki')) {
                                $layout = get_theme_mod('political_page_layout', '1');

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
                                                } ?> mx-auto">
                        <div class="entry-content typofix single-post-content">
                            <?php
                                the_content();
                                wp_link_pages(array(
                                    'before'      => '<div class="single-page-pagination"><div class="single-page-numbers"><span class="page-links-title">' . esc_html__('Pages : ', 'sinju') . '</span>',
                                    'after'       => '</div></div>',
                                    'separator'   => ' ',
                                ));
                            ?>
                        </div>
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

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>