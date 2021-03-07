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


class PoliticalTestimonial extends Widget_Base
{

  public function get_name()
  {
    return 'political-testimonial';
  }

  public function get_title()
  {
    return __('Testimonial Carousel', 'political-core');
  }

  public function get_icon()
  {
    return 'eicon-testimonial-carousel';
  }

  public function get_categories()
  {
    return ['political-addons'];
  }
  protected function _register_controls()
  {

    $this->start_controls_section(
      'testimonial_carousel',
      [
        'label' => __('Testimonial Carousel', 'political-core'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );

    $repeater = new \Elementor\Repeater();

    $repeater->add_control(
      'author_name',
      [
        'label' => __('Author Name', 'political-core'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'show_label' => true,
        'label_block' => true,
      ]
    );

    $repeater->add_control(
      'testimonial_content',
      [
        'label' => __('Testimonial Content', 'political-core'),
        'type' => \Elementor\Controls_Manager::TEXTAREA,
        'label_block' => true,
        'show_label' => true,
      ]
    );

    $repeater->add_control(
      'author_image',
      [
        'label' => __('Choose Image', 'political-core'),
        'type' => \Elementor\Controls_Manager::MEDIA,
        'default' => [
          'url' => \Elementor\Utils::get_placeholder_image_src(),
        ],
      ]
    );
    $repeater->add_group_control(
      Group_Control_Image_Size::get_type(),
      [
        'name' => 'thumbnail', // Usage: `{name}_size` and `{name}_custom_dimension`, in this case `thumbnail_size` and `thumbnail_custom_dimension`.
        'default' => 'full',
        'separator' => 'none',
      ]
    );
    $repeater->add_control(
      'author_location',
      [
        'label' => __('Location', 'political-core'),
        'type' => \Elementor\Controls_Manager::TEXT,
        'label_block' => true,
        'show_label' => true,
      ]
    );
    $this->add_control(
      'testimonial_list',
      [
        'label' => __('Testimonial List', 'political-core'),
        'type' => \Elementor\Controls_Manager::REPEATER,
        'fields' => $repeater->get_controls(),
        'default' => [
          [
            'author_name' => __('Ben Stocks', 'political-core'),
            'testimonial_content' => __('Begin what our looked of have of herself gleaning it in rationally to front deceleration threw town
            away, full violin hung typically our dressed throughout. Been global now, was big copy, approved to poetic
            act height the was gilded the ancient the and which thought. We\'ve contact I he and.', 'political-core'),
            'author_location' => __('London, UK', 'political-core'),
          ],
          [
            'author_name' => __('David Warner', 'political-core'),
            'testimonial_content' => __('Table nature, about and texts may partially to on dragged and legislators, pointing self-interest or
            eyes his its mountains, boa at more had the nearby align or also copy my few improve in there stopped of
            sort their human his both notice outfits they come being whom middle scale plans.', 'political-core'),
            'author_location' => __('Australia', 'political-core'),
          ]
        ],
        'title_field' => '{{{ author_name }}}',
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

    $slideID = rand(964, 9456986);

    if (count($settings['testimonial_list']) > 1) {

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
            $("#slides-' . $slideID . '").slick({
              autoplay: ' . $autoplay . ',
              infinite: false, 
              dots: ' . $dots . ',
              fade: ' . $fade . ',  
              arrows: ' . $arrows . ',
              speed: 0, 
              responsive: [
                  { breakpoint: 767, settings: {  dots: false, arrows: false} }
              ],
              loop: ' . $loop . ',';

      if ($autoplay == 'true') {
        echo 'autoplaySpeed: ' . $settings['autoplay_time'] . '';
      }

      echo '
			});
        });
    </script>';
    }



    echo '<div id="slides-' . $slideID . '" class="testimonail-slider">';
    foreach ($settings['testimonial_list'] as $testimonial) {
      echo '<div class="testimonial-box">
            <div class="box-image">'
        . Group_Control_Image_Size::get_attachment_image_html($testimonial, 'thumbnail', 'author_image') . '
            </div>
            <div class="box-content text-light">
              <p>' . $testimonial['testimonial_content'] . '</p>
              <address class="mt-2">
                <strong class="m-0">' . $testimonial['author_name'] . '</strong>
                <p class="m-0">' . $testimonial['author_location'] . '</p>
              </address>
            </div>
          </div>';
    }
    echo '</div>';
  }
}
