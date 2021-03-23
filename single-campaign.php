<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php get_template_part('template-parts/inner-page-title'); ?>

        <!-- ==================== Campaign Area ========================= -->
        <div class="campaign-area my-5 ">
            <div class="container">

                <div class="campaign-info mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="campaign-info-list">
                                <h4 class="mb-1">Information</h4>
                                <ul class="list-inline m-0">
                                    <?php 
                                        $location_info = get_field('campaign_location');
                                        $data_explode = explode(" ", get_field('campaign_date'));
                                        array_pop($data_explode);
                                        $campaign_date = implode(" ", $data_explode);
                                    ?>
                                    <li><span class="info-head"><?php echo esc_html__( 'Date', 'political' ); ?></span>:<span class="info-desc"><?php echo esc_html( $campaign_date ); ?></span></li>

                                    <li><span class="info-head"><?php echo esc_html__( 'Time', 'political' ); ?></span>:<span class="info-desc"><?php echo get_field('campaign_start').' - '.get_field('campaign_end'); ?></span></li>
                                    <li><span class="info-head"><?php echo esc_html__( 'Address', 'political' ); ?></span>:<span class="info-desc"><?php echo esc_html( $location_info['location_name'] ); ?></span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="campaign-info-list">
                                <h4 class="mb-1"><?php echo esc_html__( 'Organizer', 'political' ); ?></h4>
                                <ul class="list-inline m-0">
                                    <li><span class="info-head"><?php echo esc_html__( 'Organizer', 'political' ); ?></span>:<span class="info-desc"><?php echo get_field('campaign_organizer'); ?></span></li>
                                    <li><span class="info-head"><?php echo esc_html__( 'Phone', 'political' ); ?></span>:<span class="info-desc"><?php echo get_field('contact_number'); ?></span></li>
                                    <li><span class="info-head"><?php echo esc_html__( 'Website', 'political' ); ?></span>:<span class="info-desc"><?php echo get_field('campaign_website'); ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="google-map mb-2"><?php $location_info['google_map']; ?></div>

                <h4 class="mb-1"><?php echo esc_html__( 'Campaign Details', 'political' ); ?></h4>
                <?php the_content(  ); ?>
                <div class="mb-2">
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>