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

class PoliticalVolunteer extends Widget_Base
{

    public function get_name()
    {
        return 'volunteer';
    }

    public function get_title()
    {
        return __('Volunteer', 'political-core');
    }

    public function get_icon()
    {
        return 'fa fa-users';
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'team_content',
            [
                'label' => __('Volunteer', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'volunteer_image',
            [
                'label' => __('Choose Image', 'political-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );

        $this->add_control(
            'volunteer_name',
            [
                'label' => __('Name', 'political-core'),
                'type' => Controls_Manager::TEXT,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => __('John Maroko', 'political-core'),
                'placeholder' => __('Enter mamber name', 'political-core'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'volunteer_designation',
            [
                'label' => __('Designation', 'political-core'),
                'type' => Controls_Manager::TEXTAREA,
                'dynamic' => [
                    'active' => true,
                ],
                'default' => __('Cheif Product Officer at Chicago.k', 'political-core'),
                'placeholder' => __('Enter member designation', 'political-core'),
                'separator' => 'none',
                'rows' => 4,
            ]
        );
        $this->add_control(
            'website_link',
            [
                'label' => __('Website Link', 'political-core'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'is_external' => 'true',
                ],
                'placeholder' => __('https://your-link.com', 'political-core'),
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'social_icons',
            [
                'label' => __('Icon', 'political-core'),
                'type' => Controls_Manager::ICONS,
                'label_block' => true,
                'default' => [
                    'value' => 'fab fa-facebook'
                ],
            ]
        );

        $repeater->add_control(
            'link',
            [
                'label' => __('Link', 'political-core'),
                'type' => Controls_Manager::URL,
                'label_block' => true,
                'default' => [
                    'is_external' => 'true',
                ],
                'placeholder' => __('https://your-link.com', 'political-core'),
            ]
        );
        $this->add_control(
            'social_icon_list',
            [
                'label' => __('Social Icons', 'political-core'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'social_icons' => [
                            'value' => 'fab fa-facebook'
                        ]
                    ],
                    [
                        'social_icons' => [
                            'value' => 'fab fa-twitter'
                        ]
                    ],
                    [
                        'social_icons' => [
                            'value' => 'fab fa-instagram'
                        ]
                    ],
                    [
                        'social_icons' => [
                            'value' => 'fab fa-linkedin'
                        ]
                    ]
                ],
                'separator' => 'before',
                'title_field' => '<i class="{{{ social_icons.value }}}"></i>{{{ social_icons.value }}}'
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


        echo '<div class="our-team">
            <img src="' . esc_url($settings['volunteer_image']['url']) . '" alt="' . esc_html($settings['volunteer_name']) . '">
            <div class="team-content  ">
              <h3 class="title">' . esc_html($settings['volunteer_name']) . '</h3>
              <p>' . esc_html($settings['volunteer_designation']) . '</p>
              <ul class="social-links list-inline">';
                if ($settings['social_icon_list']) {
                    foreach ($settings['social_icon_list'] as $single_icon) {
                        echo '<li class="list-inline-item"><a href="' . esc_url($single_icon['link']['url']) . '"><i class="' . $single_icon['social_icons']['value'] . '"></i> </a></li>';
                    }
                }

        echo '</ul>
            </div>
          </div>';
    }
}
