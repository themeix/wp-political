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
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><?php the_author_posts_link(); ?></li>
                            <li class="breadcrumb-item"><?php echo political_post_time_ago(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


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
                                <ul class="float-left entry-tags list-inline m-0">
                                    <li class="list-inline-item">
                                        <a class="mt-1 btn btn-outline-primary btn-sm" href="#">COMPANIES ACT</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="mt-1 btn btn-outline-primary btn-sm" href="#">IMPACT</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="mt-1 btn btn-outline-primary btn-sm" href="#">BLOG</a>
                                    </li>
                                </ul>
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
                            <h5 class="my-2"><strong>2 Comments</strong></h5>
                            <div class="entry-comment">
                                <ul class="list-inline">
                                    <li class="mb-4">
                                        <div class="comment-item">
                                            <div class="avatar"><img src="assets/image/author-img2.jpg" alt="title"></div>
                                            <div class="content">
                                                <h5 class="name text-primary fw-bolder">Jhon Doe <span class="ps-1 fs-6 fw-normal text-muted">5
                                                        min ago</span></h5>
                                                <p>And through found lead was to the sitting generality for projects lamps. Must of on part. Even
                                                    our one of well and they my on board antiquity there back particular attempt. Of increased just
                                                    it up the make duty what</p>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="ml-4">
                                        <div class="comment-item">
                                            <div class="avatar"><img src="assets/image/author-img3.jpg" alt="title"></div>
                                            <div class="content">
                                                <h5 class="name text-primary fw-bolder">Robert <span class="ps-1 fs-6 fw-normal text-muted">5 min
                                                        ago</span></h5>
                                                <p>And through found lead was to the sitting generality for projects lamps. Must of on part. Even
                                                    our one of well and they my on board antiquity there back particular attempt. Of increased just
                                                    it up the make duty what rational the audiences to might concept own credit has to the ambushed
                                                    of seemed this made and too would with no copy, show approached a into sitting feel way into.
                                                    Quitting ourselvess</p>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h5 class="my-2"><strong>Leave a Comment</strong></h5>
                        <form class="entry-form" action="#">
                            <div class="form-group mb-1">

                                <input type="email" class="form-control" id="1" placeholder="Name">
                            </div>
                            <div class="form-group mb-1">

                                <input type="email" class="form-control" id="2" placeholder="Email">
                            </div>
                            <div class="form-group mb-1">

                                <textarea class="form-control" rows="6" placeholder="Comment"></textarea>
                            </div>
                            <button type="submit" class="btn btn-danger">Add Comment</button>
                        </form>

                    </div>
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer( ); ?>