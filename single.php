<?php get_header(); ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/inner-page-title'); ?>

        <!-- ==================== News Area ========================= -->

        <div class="news-area my-5 ">
            <div class="container">

                <div class="row">
                    <div class="col-md-8 mx-auto">
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
                                <ul class="float-end entry-social list-inline m-0">
                                    <li class="list-inline-item twitter">
                                        <a class="mt-1" href="https://twitter.com/" target="_blank">
                                            <i class="im im-twitter"></i>

                                        </a>
                                    </li>
                                    <li class="list-inline-item facebook">
                                        <a class="mt-1" href="https://anchor.fm/" target="_blank">
                                            <i class="im im-facebook"></i>

                                        </a>
                                    </li>
                                    <li class="list-inline-item linkedin">
                                        <a class="mt-1" href="https://soundcloud.com/" target="_blank">
                                            <i class="im im-linkedin"></i>

                                        </a>
                                    </li>
                                    <li class="list-inline-item pinterest">
                                        <a class="mt-1" href="https://www.facebook.com/" target="_blank">
                                            <i class="im im-pinterest"></i>

                                        </a>
                                    </li>
                                    <li class="list-inline-item whatsapp">
                                        <a class="mt-1" href="https://www.linkedin.com/" target="_blank">
                                            <i class="im im-whatsapp"></i>

                                        </a>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <div class="entry-author  bg-light  my-3">
                            <div class="author-avata">
                                <img src="assets/image/author-img.jpg" alt="author">
                                <span class="fw-bold">Jhon Doe</span>
                            </div>
                            <p>And through found lead was to the sitting generality for projects lamps. Must of on part. Even our one of
                                well and they my on board antiquity there back particular attempt. Of increased just it up the make duty
                                what rational the audiences to might</p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="col-md-8 mx-auto">
                        <nav class="entry-navigation my-3">
                            <ul class="pagination">
                                <li class="page-item"><a class="btn btn-outline-primary btn-sm" href="#">Prev</a></li>
                                <li class="page-item"><a class="btn btn-outline-primary btn-sm" href="#">Next</a></li>
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