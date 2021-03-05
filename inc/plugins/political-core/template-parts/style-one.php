<div class="col-md-6">
    <div <?php post_class( 'post-style wow fadeIn'); ?>>
        <a href="<?php the_permalink(); ?>">
            <div class="post-thumb height-300" style="background-image:url(<?php if ( has_post_thumbnail() ) {
                the_post_thumbnail_url(); } else{ echo esc_url( BIOBLOG_IMG_URL.'/image_prev.png' ); } ?>);">
            </div>
        </a>
        <div class="post-content post-content2">
            <div class="content-left">
                <a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url( BIOBLOG_IMG_URL . '/post-plus.png' ); ?>" alt="<?php the_title(); ?>" /></a>
            </div>
            <div class="content-right">
                <h4> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                <div class="primary_tag_name">
                <?php 
                    $biography_cat = wp_get_object_terms( get_the_ID( ), 'category', array('fields' => 'names') ); 
                    $biography_slug = wp_get_object_terms( get_the_ID( ), 'category', array('fields' => 'slugs') );
                ?>
                    <h5><a href="<?php echo esc_url(site_url().'/category/'.$biography_slug[0]); ?>"><?php echo esc_html( $biography_cat[0] ); ?></a></h5>
                </div>
            </div>
        </div>
    </div>
</div>