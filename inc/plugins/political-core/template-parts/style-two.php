<div <?php post_class('post-style wow fadeIn'); ?>>
    <?php if (has_post_thumbnail()) { ?>
        <a href="<?php the_permalink(); ?>">
            <div class="post-thumb height-300" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
            </div>
        </a>
    <?php } ?>

    <div class="post-content post-content2">
        <div class="content-right post-content">
            <?php if (is_sticky()) { ?>
                <div class="sticky-post" title="<?php echo esc_attr__('Sticky Post', 'bioblog'); ?>"><i class="fa fa-thumb-tack "></i></div>
            <?php } ?>
            <div class="content">
                <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="meta-data">
                    <span class="post-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
                    <?php echo '<span class="separator">/</span>'; ?>
                    <span class="post-date"> <i class="fa fa-calendar"></i><?php the_time('D M, Y') ?></span>
                </div>
                <?php get_template_part('template-parts/post-excerpt', 'post-excerpt'); ?>

                <?php
                if (get_theme_mod('readmore_switch', '1') == '1') { ?>
                    <div class="primary_tag_name">
                        <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod('read_more_label', 'Read More'); ?></a>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>