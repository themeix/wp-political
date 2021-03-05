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


class PoliticalLightboxVideo extends Widget_Base
{

    public function get_name()
    {
        return 'lightbot-video';
    }

    public function get_title()
    {
        return __('Lightbox Video', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-video-playlist';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'lightbox_video_content',
            [
                'label' => __('Lightbx Video', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );


        $this->add_control(
            'lightbox_video_url',
            [
                'label' => __('Video Url', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'placeholder' => __('https://www.youtube.com/watch?v=IzeQSlW4Z54', 'political-core'),
                'default' => 'https://www.youtube.com/watch?v=IzeQSlW4Z54',
                'label_block' => true
            ]
        );

        $this->add_control(
            'video_cover_image',
            [
                'label' => __('Choose Image', 'political-core'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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

        $videoID = rand(964, 9456986);

        
        echo '<a id="videoID-'.$videoID.'" data-vbtype="iframe" href="' . esc_url($settings['lightbox_video_url']) . '" class="vbox-item">
            <div class="about-image">
              <img src="' . esc_url($settings['video_cover_image']['url']) . '" alt="image">
            </div>
          </a>';

          echo '<script>
            jQuery(document).ready(function($) {
            $("#videoID-'.$videoID.'").venobox();
            });
         </script>';



    }
}

