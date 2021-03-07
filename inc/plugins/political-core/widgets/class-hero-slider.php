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

class PoliticalHeroSlider extends Widget_Base
{

	public function get_name()
	{
		return 'hero-slider';
	}

	public function get_title()
	{
		return __('Home Slider', 'political-core');
	}

	public function get_icon()
	{
		return 'fa fa-sliders';
	}

	public function get_categories()
	{
		return ['political-addons'];
	}

	protected function _register_controls()
	{

		//Content Tab
		$this->start_controls_section(
			'hero_slider_content',
			[
				'label' => __('Content', 'political-core'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'slide_title',
			[
				'label' => __('Slide Title', 'political-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'show_label' => true,
				'label_block' => true,
			]
		);

		$repeater->add_control(
			'slide_desc',
			[
				'label' => __('Slide Description', 'political-core'),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label_block' => true,
				'show_label' => true,
			]
		);

		$repeater->add_control(
			'slide_image',
			[
				'label' => __('Slide image', 'political-core'),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'show_label' => true,
			]
		);
		$this->add_control(
			'slider_list',
			[
				'label' => __('Slider Item List', 'political-core'),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slide_title' => __('Vote For Our Political Freedom Party', 'political-core'),
						'slider_btn_label' => __('Get Support', 'political-core'),
					],
					[
						'slide_title' => __('Let\'s Make The World Great Again', 'political-core'),
						'slider_btn_label' => __('Explore Topics', 'political-core'),
					],
				],
				'title_field' => '{{{ slide_title }}}',
			]
		);


		$this->end_controls_section();

		$this->start_controls_section(
			'setting_section',
			[
				'label' => __('Slider Settings', 'plugin-name'),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		$this->add_control(
			'fade',
			[
				'label' => __('Fade effecct?', 'political-core'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'political-core'),
				'label_off' => __('No', 'political-core'),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		$this->add_control(
			'loop',
			[
				'label' => __('Loop?', 'political-core'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'political-core'),
				'label_off' => __('No', 'political-core'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		$this->add_control(
			'arrows',
			[
				'label' => __('Show arrows?', 'political-core'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Show', 'political-core'),
				'label_off' => __('Hide', 'political-core'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'dots',
			[
				'label' => __('Show dots?', 'political-core'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Show', 'political-core'),
				'label_off' => __('Hide', 'political-core'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'autoplay',
			[
				'label' => __('Autoplay?', 'political-core'),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => __('Yes', 'political-core'),
				'label_off' => __('No', 'political-core'),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'autoplay_time',
			[
				'label' => __('Autoplay Time', 'political-core'),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '5000',
				'condition' => [
					'autoplay' => 'yes',
				],
			]
		);

		$this->end_controls_section();

		//Style Tab
		$this->start_controls_section(
			'hero_slider_style',
			[
				'label' => __('Style', 'political-core'),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'slider_content_heading',
			[
				'label' => __('Content', 'political-core'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$this->add_control(
			'slider_content_color',
			[
				'label' => __('Color', 'political-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .hero-slider-content' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'content_typography',
				'label' => __('Typography', 'political-core'),
				'selector' => '{{WRAPPER}} .hero-slider-content',
				'default' => '',

			]
		);
		$this->add_responsive_control(
			'width',
			[
				'label' => __('Spacing', 'political-core'),
				'type' => Controls_Manager::SLIDER,
				'size_units' => ['px', '%'],
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1000,
						'step' => 5,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 60,
				],
				'selectors' => [
					'{{WRAPPER}} .hero-slider-content' => 'margin-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'slider_btn_heading',
			[
				'label' => __('Button', 'political-core'),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

		$this->start_controls_tabs('tabs_button_style');

		$this->start_controls_tab(
			'tab_button_normal',
			[
				'label' => __('Normal', 'political-core'),
			]
		);
		$this->add_control(
			'button_text_color',
			[
				'label' => __('Text Color', 'political-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .h-slider-link' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'button_bg_color',
			[
				'label' => __('Background Color', 'political-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .h-slider-link' => 'background-color: {{VALUE}}',
				],
			]
		);



		$this->end_controls_tab();

		$this->start_controls_tab(
			'tab_button_hover',
			[
				'label' => __('Hover', 'political-core'),
			]
		);

		$this->add_control(
			'button_text_hover_color',
			[
				'label' => __('Text Color', 'political-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .h-slider-link:hover' => 'color: {{VALUE}}',
				],
			]
		);
		$this->add_control(
			'button_bg_hover_color',
			[
				'label' => __('Background Color', 'political-core'),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .h-slider-link:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		$this->end_controls_tab();

		$this->end_controls_tabs();


		$this->add_control(
			'border_radius',
			[
				'label' => __('Border Radius', 'political-core'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', '%'],
				'selectors' => [
					'{{WRAPPER}} .h-slider-link' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'button_box_shadow',
				'selector' => '{{WRAPPER}} .h-slider-link',
			]
		);
		$this->add_responsive_control(
			'text_padding',
			[
				'label' => __('Padding', 'political-core'),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => ['px', 'em', '%'],
				'selectors' => [
					'{{WRAPPER}} .h-slider-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
		$this->end_controls_section();
	}

	protected function render()
	{
		$settings = $this->get_settings_for_display();

		$slide_id = rand(964, 9456986);
		if (count($settings['slider_list']) > 1) {

			if ($settings['fade'] == 'yes') {
				$fade = 'true';
			} else {
				$fade = 'false';
			}
			if ($settings['arrows'] == 'yes') {
				$arrows = 'true';
			} else {
				$arrows = 'false';
			}
			if ($settings['dots'] == 'yes') {
				$dots = 'true';
			} else {
				$dots = 'false';
			}
			if ($settings['autoplay'] == 'yes') {
				$autoplay = 'true';
			} else {
				$autoplay = 'false';
			}
			if ($settings['loop'] == 'yes') {
				$loop = 'true';
			} else {
				$loop = 'false';
			}

			echo '<script>
        jQuery(document).ready(function($) {
            $("#hero-slider-' . $slide_id . '").slick({
				arrows: ' . $arrows . ',
				prevArrow: $(".hero-prev"), 
				nextArrow: $(".hero-next"),
				fade: ' . $fade . ',
				autoplay: ' . $autoplay . ',
				loop: ' . $loop . ',';

			if ($autoplay == 'true') {
				echo 'autoplaySpeed: ' . $settings['autoplay_time'] . '';
			}
			echo '
			});
        });
    </script>';
		}

		echo ' 
		<div  class="hero-area position-relative overflow-hidden">
		  <div id="hero-slider-' . $slide_id . '" class="hero-slider mobile-dots">';
		foreach ($settings['slider_list'] as $slide) {
			echo '<div class="hero-item">
			  <div class="hero-bg-image"><img src="'.$slide['slide_image']['url'].'" alt="image"></div>
			  <div class="container">
				<div class="hero-wrapper">
				  <div class="hero-content text-light">
	  
					<h1 class="fs-1 mb-2 fw-bold text-light" data-animation="fadeInDown" data-delay="0.7s">Vote For Our
					  Political Freedom Party</h1>
					<p class="mb-3 lead" data-animation="fadeInDown" data-delay="0.7s">If of to smaller rationalize he
					  theoretically high sort this caught farther, have withdraw survey detailed a handed there\'s horrible
					  literature lamps,</p>
					<a class="btn btn-danger btn--1" data-animation="fadeInDown" data-delay="0.7s" href="donate.html"> Donate
					  Us</a>
				  </div>
				</div>
			  </div>
			</div>';
		}
		echo '</div>
		</div>';
	}
}
