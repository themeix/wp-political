<div class="news-post">
    
    <?php if (has_post_thumbnail()) : ?>
        <div class="feature-image">
            <div class="image-frame">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url( get_the_post_thumbnail_url( )); ?>" alt="<?php the_title(); ?>" class="w-100">
                </a>
            </div>
        </div>
    <?php endif; ?>

    <div class="news-content">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>

        <ul class="meta-data list-inline">
            <li class="list-inline-item badge bg-danger"><small> <?php echo esc_html( political_post_time_ago() ); ?></small></li>
        </ul>

        <?php get_template_part( 'template-parts/post-excerpt' ); ?></br>

        <a href="<?php the_permalink(); ?>" class="read-more-btn"><?php echo esc_html__( 'Read More', 'political'); ?><i class="im im-angle-right"></i></a>

    </div>
</div>