<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php
                get_template_part('template-parts/inner-page-title');
                if (function_exists('get_field')) {
                    $location_info = get_field('campaign_location');
                    $data_explode = explode(" ", get_field('campaign_date'));
                    array_pop($data_explode);
                    $campaign_date = implode(" ", $data_explode);
                    $campaign_start = get_field('campaign_start');
                    $campaign_end = get_field('campaign_end');
                    $campaign_organizer =  get_field('campaign_organizer');
                    $contact_number =  get_field('contact_number');
                    $campaign_website =  get_field('campaign_website');
                } else {
                    $location_info = '';
                    $data_explode = '';
                    $campaign_date = '';
                    $campaign_start = '14 may 2021';
                    $campaign_end = '14 may 2022';
                    $campaign_organizer =  '';
                    $contact_number =  '';
                    $campaign_website =  '';
                 }
                ?>



        <!-- ==================== Campaign Area ========================= -->
        <div class="campaign-area my-5 " id="content">
            <div class="container">

                <div class="campaign-info mb-2">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="campaign-info-list">
                                <h4 class="mb-1"><?php echo esc_html__('Information', 'political'); ?></h4>
                                <ul class="list-inline m-0">
                                    <li><span class="info-head"><?php echo esc_html__('Date', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($campaign_date); ?></span></li>

                                    <li><span class="info-head"><?php echo esc_html__('Time', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($campaign_start) . ' - ' . esc_html($campaign_end); ?></span></li>

                                    <?php if (isset($location_info['location_name'])) : ?>
                                        <li><span class="info-head"><?php echo esc_html__('Address', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($location_info['location_name']); ?></span></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="campaign-info-list">
                                <h4 class="mb-1"><?php echo esc_html__('Organizer', 'political'); ?></h4>
                                <ul class="list-inline m-0">
                                    <li><span class="info-head"><?php echo esc_html__('Organizer', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($campaign_organizer); ?></span></li>
                                    <li><span class="info-head"><?php echo esc_html__('Phone', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($contact_number); ?></span></li>
                                    <li><span class="info-head"><?php echo esc_html__('Website', 'political'); ?></span>:<span class="info-desc"><?php echo esc_html($campaign_website); ?></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="google-map mb-2"><?php $location_info['google_map']; ?></div>

                <h4 class="mb-1"><?php echo esc_html__('Campaign Details', 'political'); ?></h4>
                <?php the_content(); ?>
                <div class="mb-2">
                </div>

            </div>
        </div>

    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>