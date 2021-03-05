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


class PoliticalServiceIconBox extends Widget_Base
{

    public function get_name()
    {
        return 'political-service-iconbox';
    }

    public function get_title()
    {
        return __('Service IconBox', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-icon-box';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'service_iconbox_content',
            [
                'label' => __('Service Content', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
			'service_icon',
			[
				'label' => __( 'Service Icon', 'political-core' ),
				'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
					'value' => 'fas fa-heart',
					'library' => 'fa-solid',
				],
                'label_block' => true
			]
		);
        

		$this->add_control(
			'service_title',
			[
				'label' => __( 'Service Title', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'separator' => 'before',
                'default' => __('Economic', 'political-core'),
                'label_block' => true
			]
		);
        $this->add_control(
			'service_desc',
			[
				'label' => __( 'Description', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Let for seen found particular, the absolutely to heaven quite and not by of big to slogging', 'political-core'),
				'separator' => 'before',
			]
		);

        $this->add_control(
			'service_content',
			[
				'label' => __( 'Service Content', 'political-core' ),
				'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('<p>The that all once our the relieved its accompany will. Must for have or a back to war, the desk in
                the me boss it note has could are boss of escape, in consideration film control phase the quitting
                negatives, the be high and he his researches by politely then.</p>
              <p>Suggests it even how several rather of it to his real of week you him should the out gave could
                mister or annoyed. Devious you simple, been brothers evening. To couldn\'t a to stitching in
                orthographic the tone to feel the not reached ran study of you tend with will the nice, all must off
                and advantage become not the its would of at after me make could on as explain the seen, for simple,
                first for left recommendation hired their time illustrated insurance with universal proposal I
                pleasure there mountains, all attention particularly more son, card a and, we.
              </p>
              <p>
                Four to greediness the in a written the a finds the getting staple towards his they goals so,
                minutes. Been having problem of trial. King\'s and her off of any time. Next or said reflections,
                rhetoric desk clarinet several ideas only you right, made known not so powers sleep. Road, than
                attempt, suspicious may respective circumstances. Turned the is don\'t in the and is remain which see
                his too felt frequently excuse small I one about the his answering feedback th</p>', 'political-core'),
				'separator' => 'before',
			]
		);

        

        $this->add_control(
			'service_btn_label',
			[
				'label' => __( 'Button Label', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Read Plan', 'political-core' ),
				'label_block' => true,
			]
		);

        $this->add_control(
			'service_link',
			[
				'label' => __( 'Service ID or Link', 'political-core' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => __( 'https://your-link.com', 'political-core' ),
				'show_external' => true,
				'default' => [
					'url' => 'serviceID1',
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

            echo '<div class="service-box m-0">
            <div class="service-icon">
            <i class="'. $settings['service_icon']['value'].'"></i>
            </div>
            <div class="service-content">
              <h4>'.$settings['service_title'].'</h4>
              <p class="m-0">'.$settings['service_desc'].'</p>
              <a href="'.esc_url($settings['service_link']['url']).'" class="mt-2 btn btn-outline-primary btn-sm" data-bs-toggle="modal" data-bs-target="#'.$settings['service_link']['url'].'">'.$settings['service_btn_label'].'</a>
            </div>
          </div>
          
          <div class="modal fade" id="'.$settings['service_link']['url'].'">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header bg-primary text-light">
                  <h5 class="modal-title">'.$settings['service_title'].'</h5>
                  <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                <div class="modal-body">
                '.$settings['service_content'].'
                </div>
              </div>
            </div>
          </div>';
    }
}
