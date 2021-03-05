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


class PoliticalFeatureCard extends Widget_Base
{

    public function get_name()
    {
        return 'featured-card';
    }

    public function get_title()
    {
        return __('Featured Card', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-posts-grid';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'feature_content',
            [
                'label' => __('Feature Content', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

		$this->add_control(
			'feature_title',
			[
				'label' => __( 'Feature Title', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'separator' => 'before',
                'default' => __('Manifesto', 'political-core'),
                'label_block' => true
			]
		);
        $this->add_control(
			'feature_short_desc',
			[
				'label' => __( 'Short Description', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Did able the school, dressed you by grateful ', 'political-core'),
				'separator' => 'before',
			]
		);
        $this->add_control(
			'feature_desc',
			[
				'label' => __( 'Description', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Believed cognitive findings. Blue decorated with produce to and which original acknowledge he better are all the ', 'political-core'),
				'separator' => 'before',
			]
		);
        $this->add_control(
			'feature_image',
			[
				'label' => __( 'Choose Image', 'political-core' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
			]
		);

        $this->add_control(
			'feature_btn_label',
			[
				'label' => __( 'Button Label', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Volunteer', 'political-core' ),
				'label_block' => true,
			]
		);

        $this->add_control(
			'feature_content_link',
			[
				'label' => __( 'Link', 'political-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'political-core' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);


        $this->end_controls_section();

        //Style Tab
        $this->start_controls_section(
            'post_
            style',
            [
                'label' => __('Style', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        


        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
            echo '<div class="feature-box">
                <div class="feature-top">
                    <div class="feature-image">
                        <div class="image-frame">
                            <img src="'. $settings['feature_image']['url']. '" alt="'. $settings['feature_title'].'" class="w-100">
                        </div>
                    </div>
                    <div class="box-content">
                        <h4 class="text-light">'. $settings['feature_title'].'</h4>
                        <p class="text-light">'. $settings['feature_desc'].'</p>
                        <a href="'. esc_url($settings['feature_content_link']['url']).'" class="mt-2 btn btn-light btn-sm">'. $settings['feature_btn_label'].'</a>
                    </div>
                </div>
                <div class="feature-bottom">
                    <h3>'. $settings['feature_title'].'</h3>
                    <p class="m-0">'. $settings['feature_short_desc'].'</p>
                </div>
            </div>';
    }
}
