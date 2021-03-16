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

class PoliticalTimeline extends Widget_Base
{

    public function get_name()
    {
        return 'timeline';
    }

    public function get_title()
    {
        return __('timeline', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-clock';
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'timeline_tab',
            [
                'label' => __('Timeline', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'timeline_year',
            [
                'label' => __('Year', 'political-core'),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => __('2005', 'political-core'),
            ]
        );

        $repeater->add_control(
            'timeline_title',
            [
                'label' => __('Title', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Up harmonics material person', 'political-core'),
                'label_block' => true
            ]
        );
        $repeater->add_control(
            'timeline_date',
            [
                'label' => __('Date', 'political-core'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'picker_options' => [
                    'dateFormat' => 'd M',
                    'enableTime' => false,
                ]
            ]
        );
        $repeater->add_control(
            'timeline_content',
            [
                'label' => __('Date', 'political-core'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'label_block' => true,
                'default' => '
                <p>Carpeting reposed times, another for presence of voice would, you\'ve mainly pros stitching five was
                    taken approached the he of waved a at of dressed ship cover are a his peacefully, for certainly
                    fundamental don\'t day he one life I the roasted didn\'t and that her of a the parents.</p>'
            ]
        );


        $this->add_control(
            'timeline_list',
            [
                'label' => __('Timeline List', 'political-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'timeline_year' => __('2005', 'political-core'),
                    ],
                    [
                        'timeline_year' => __('2008', 'political-core'),
                    ],
                ],
                'title_field' => '{{{ timeline_year }}}',
            ]
        );

        $this->end_controls_section();

        //Style Tab
        $this->start_controls_section(
            'volunteer_style',
            [
                'label' => __('Style', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'name_style',
            [
                'label' => __('Name', 'political-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'name_color',
            [
                'label' => __('Color', 'political-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .name-color' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'name_typography',
                'label' => __('Typography', 'political-core'),
                'selector' => '{{WRAPPER}} .name-color',
            ]
        );

        $this->add_control(
            'designation_style',
            [
                'label' => __('Designation', 'political-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'designation_color',
            [
                'label' => __('Color', 'political-core'),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .volunteer-designation' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'designation_typography',
                'label' => __('Typography', 'political-core'),
                'selector' => '{{WRAPPER}} .volunteer-designation',
            ]
        );

        $this->add_control(
            'icon_style',
            [
                'label' => __('Icon', 'political-core'),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->start_controls_tabs('icon_colors');

        $this->start_controls_tab(
            'icon_colors_normal',
            [
                'label' => __('Normal', 'political-core'),
            ]
        );

        $this->add_control(
            'icon_color',
            [
                'label' => __('Icon Color', 'political-core'),
                'type' => Controls_Manager::COLOR,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .social_icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'icon_bg_color',
            [
                'label' => __('Background Color', 'political-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style .team-content .team-socials li' => 'background-color: {{VALUE}};',
                ],
            ]
        );

        $this->end_controls_tab();

        $this->start_controls_tab(
            'icon_colors_hover',
            [
                'label' => __('Hover', 'political-core'),
            ]
        );

        $this->add_control(
            'hover_icon_color',
            [
                'label' => __('Icon Color', 'political-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style .team-content .team-socials li:hover .social_icon' => 'color: {{VALUE}};',
                ],
            ]
        );

        $this->add_control(
            'hover_icon_bg_color',
            [
                'label' => __('Background Color', 'political-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .team-style .team-content .team-socials li:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'hover_transition',
            [
                'label' => __('Hover Transition', 'political-core'),
                'type' => Controls_Manager::TEXT,
                'selectors' => [
                    '{{WRAPPER}} .team-style .team-content .team-socials li' => 'transition: {{VALUE}};s',
                ],
                'default' => '0.3'
            ]
        );



        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="timeline-event">';
        foreach ($settings['timeline_list'] as $item) :
            echo '<div class="timeline-group">
                    <span class="timeline-year time" aria-hidden="true">' . $item['timeline_year'] . '</span>
                    <div class="timeline-cards">

                    <div class="timeline-card card">
                        <header class="card-header">
                        <h3> ' . $item['timeline_title'] . '</h3>';
                        if($item['timeline_date']):
                        echo '<time class="badge bg-secondary">
                            <span class="time-month">' . $item['timeline_date'] . '</span>
                        </time>';
                        endif;
                        echo '</header>
                        <div class="card-content">
                            ' . $item['timeline_content'] . '
                        </div>
                    </div>

                    </div>
                </div>';
        endforeach;
        echo '</div>';
    }
}
