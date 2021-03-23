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