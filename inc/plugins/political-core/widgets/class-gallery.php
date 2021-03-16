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


class PoliticalGallery extends Widget_Base
{

  public function get_name()
  {
    return 'political-gallery';
  }

  public function get_title()
  {
    return __('Gallery', 'political-core');
  }

  public function get_icon()
  {
    return 'eicon-gallery-grid';
  }

  public function get_categories()
  {
    return ['political-addons'];
  }
  protected function _register_controls()
  {

    $this->start_controls_section(
      'political_gallery',
      [
        'label' => __('Gallery', 'political-core'),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
      ]
    );


    $this->add_control(
      'gallery',
      [
        'label' => __('Add Images', 'political-core'),
        'type' => \Elementor\Controls_Manager::GALLERY,
        'default' => [],
      ]
    );

    $this->add_control(
      'item_per_row',
      [
        'label' => __('Gallery Per Row', 'political-core'),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => '4',
        'options' => [
          '6'  => __('2', 'political-core'),
          '4' => __('3', 'political-core'),
          '3' => __('4', 'political-core'),
          '2' => __('6', 'political-core'),
        ],
      ]
    );

    $this->add_control(
      'lightbox_icon',
      [
        'label' => __('Lightbox Icon', 'political-core'),
        'type' => \Elementor\Controls_Manager::ICONS,
        'default' => [
          'value' => 'fas fa-search-plus',
        ],
      ]
    );

    $this->add_control(
      'enable_lightbox',
      [
        'label' => __('Enable Lightbox', 'political-core'),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __('Enable', 'political-core'),
        'label_off' => __('Disable', 'political-core'),
        'return_value' => true,
        'default' => true,
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

    $disable_lightbox = ' ';
    if (!$settings['enable_lightbox']) :
      $disable_lightbox = 'disable_lightbox';
    endif;

    echo '<div class="row">';
    foreach ($settings['gallery'] as $item) {
      echo '<div class="col-md-6 col-lg-' . $settings['item_per_row'] . '">
      <div class="gallery-box ' . $disable_lightbox . '">
        <div class="feature-image">
          <div class="image-frame">
            <a href="single.html"> <img src="' . $item['url'] . '" alt="image" class="w-100"></a>
          </div>
        </div>';
      if ($settings['enable_lightbox']) :
        echo '<div class="box-content">
              <ul class="list-inline text-center">
                <li class="list-inline-item">
                  <a class="btn btn-light" href="' . $item['url'] . '" data-lightbox="image-' . $item['id'] . '"
                    data-title="My Gallery"><i class="' . $settings['lightbox_icon']['value'] . '"></i></a>
                </li>
              </ul>
            </div>';
      endif;
      echo '</div>
      </div>';
    }
    echo '</div>';
  }
}
