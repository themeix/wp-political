<?php

namespace PoliticalElementorAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Image_Size;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */

function campaign_categories()
{

    $terms = get_terms(array(
        'taxonomy' => 'category',
        'hide_empty' => false,
    ));

    $term_name = wp_list_pluck($terms, 'name', 'term_id');

    return $term_name;
}

class PoliticalCampaigns extends Widget_Base
{

    public function get_name()
    {
        return 'p-campaigns';
    }

    public function get_title()
    {
        return __('Campaigns', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-campaigns-ticker';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'campaign_content',
            [
                'label' => __('Campaign', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title_words_limit',
            [
                'label' => __('Title Words Limit', 'political-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __('8', 'political-core'),
            ]
        );
        $this->add_control(
            'campaign_per_page',
            [
                'label' => __('Campaign Per Page', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('6', 'political-core'),
                'placeholder' => __('Input campaign per page', 'political-core'),
            ]
        );
        $this->add_control(
            'campaign_order',
            [
                'label' => __('Order', 'political-core'),
                'type' => \Elementor\Controls_Manager::SELECT,
                'options' => [
                    'ASC'  => __('ASC', 'political-core'),
                    'DSC' => __('DSC', 'political-core'),
                ],
                'default' => __('DSC', 'political-core'),
            ]
        );

        $this->add_control(
            'campaign_pagination',
            [
                'label' => __('Pagination', 'political-core'),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __('Show', 'political-core'),
                'label_off' => __('Hide', 'political-core'),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->end_controls_section();

        //Style Tab
        $this->start_controls_section(
            'campaign_style',
            [
                'label' => __('Style', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'campaign_title_style',
            [
                'label' => __('Pagination', 'political-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'pagination_typography',
                'label' => __('Typography', 'political-core'),
                'selector' => '{{WRAPPER}} .campaigns-pagination.float-right a',
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __('Color', 'political-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .campaigns-pagination.float-right a' => 'color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display(); ?>



        <div class="row blog-grid">
            <?php
                    $x = 0;
                    $campaigns_per_page = $settings['campaign_per_page'];
                    $order = $settings['campaign_order'];
                    $campaign_style = $settings['blog_style'];
                    $layout1 = $settings['style_one_layout'];
                    $layout2 = $settings['style_two_layout'];
                    $words_limit = $settings['title_words_limit'];

                    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                    if (is_front_page()) {
                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                    }


                    $query = new \WP_Query(array(
                        'post_type' => 'campaign',
                        'posts_per_page' => $campaigns_per_page,
                        'order' => "$order",
                        'posts_status' => 'publish',
                        'paged' => $paged

                    ));
                    if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post(); ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="campaign-event">
                            <div class="feature-image">
                                <div class="image-frame">
                                    <a href="single.html"> <?php the_post_thumbnail('thumbail', array('class' => 'w-100')); ?></a>
                                </div>
                            </div>
                            <div class="campaign-content">
                                <h4><a href="<?php the_permalink(  ); ?>" class="text-decoration-none"><?php the_title( ); ?></a></h4>
                                <small><i class="im im-location"></i> <?php echo get_field('campaign_location'); ?></small>
                                <ul class="meta-data list-inline mt-1">
                                    <li class="list-inline-item"><small><i class="im im-calendar"></i> <?php the_date(); ?></small></li>
                                    <li class="list-inline-item"><small><i class="im im-clock-o"></i> <?php echo get_field('campaign_start'); ?> - <?php echo get_field('campaign_end'); ?></small></li>
                                </ul>
                            </div>
                        </div>

                    </div>

            <?php endwhile;

                        $total_pages = $query->max_num_pages;
                        $current_page = max(1, get_query_var('paged'));

                        if (is_front_page()) :
                            $current_page = max(1, get_query_var('page'));
                        endif;
                    endif; ?>

        </div>

<?php if ($settings['campaign_pagination'] == 'yes') :

            echo paginate_links(array(
                'total' => $total_pages,
                'current' => $current_page,
                'prev_text'    => __('prev'),
                'next_text'    => __('next'),
            ));

        endif;
    }
}
