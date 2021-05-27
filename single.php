<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/inner-page-title'); ?>

        <!-- ==================== News Area ========================= -->

        <div class="news-area my-5 ">
            <div class="container">

                <div class="row">
                    <?php
                        $layout = '';
                        if (class_exists('kirki')) {
                            $layout = get_theme_mod('blog_single_page_layout', '1');

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

                <div class="container">
                    <div class="col-md-8 mx-auto">

                        <div class="row mb-3 mt-1">
                            <div class="col-md-6">
                                <?php if (get_the_tags()) :
                                            $post_tags = get_the_tags();
                                            ?>

                                    <ul class="float-left entry-tags list-inline m-0">
                                        <?php foreach ($post_tags as $tag) : ?>
                                            <li class="list-inline-item">
                                                <a class="mt-1 btn btn-outline-primary btn-sm" href="<?php echo  esc_url(home_url() . '/tag/' . $tag->slug); ?>"><?php echo esc_html($tag->name); ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <?php if (class_exists('ThemeixPoliticalPlugin')) : ?>
                                    <?php echo do_shortcode('[political_social_share]'); ?>
                                <?php endif; ?>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <div class="entry-author  bg-light  my-3">
                            <div class="author-avata">
                                <?php echo get_avatar(get_the_author_meta('ID'), 90); ?>
                                <span class="fw-bold"><?php the_author_posts_link(); ?></span>
                            </div>
                            <?php if (get_the_author_meta('description', get_the_author_meta('ID'))) : ?>
                                <p><?php echo esc_html(get_the_author_meta('description', get_the_author_meta('ID'))); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <nav class="entry-navigation my-3">

                            <ul class="pagination">
                                <?php if (!empty(get_previous_post_link($format = '%link', $prev = 'Prev', $title = 'no'))) : ?>
                                    <li class="page-item"><?php previous_post_link($format = '%link', $prev = 'Prev', $title = 'no'); ?>
                                    <?php endif; ?>

                                    <?php if (!empty(get_next_post_link($format = '%link', $next = 'Next', $title = 'no'))) : ?>
                                    <li class="page-item">
                                        <?php next_post_link($format = '%link', $next = 'Next', $title = 'no'); ?>
                                    </li>
                                <?php endif; ?>

                            </ul>
                        </nav>
                    </div>
                </div>

                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <div class="my-3">
                            <h5 class="my-2"><strong><?php comments_number(); ?></strong></h5>
                            <div class="entry-comment">
                                <?php if (comments_open() || get_comments_number()) : ?>
                                    <?php get_template_part('template-parts/comments-template'); ?>
                                <?php endif; ?>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>