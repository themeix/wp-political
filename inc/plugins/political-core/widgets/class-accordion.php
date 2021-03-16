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


class PoliticalAccordion extends Widget_Base
{

    public function get_name()
    {
        return 'political-accordion';
    }

    public function get_title()
    {
        return __('Political Accordion', 'political-core');
    }

    public function get_icon()
    {
        return 'eicon-accordion';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'accordion_content',
            [
                'label' => __('Accordion Content', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'accordion_title',
            [
                'label' => __('Title', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Why should i buy that template?', 'political-core'),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'accordion_content',
            [
                'label' => __('Content', 'political-core'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'political-core'),
                'label_block' => true,
            ]
        );
        $this->add_control(
            'accordion_list',
            [
                'label' => __('Accordion List', 'political-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'accordion_title' => __('Why should i buy that template?', 'political-core'),
                        'accordion_content' => __('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'political-core'),
                    ],
                    [
                        'accordion_title' => __('Do you have any example of checkout page?', 'political-core'),
                        'accordion_content' => __('Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.', 'political-core'),
                    ],
                ],
                'title_field' => '{{{ accordion_title }}}',
            ]
        );

        $this->add_control(
            'accordion_icon',
            [
                'label' => __('Icon', 'political-core'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'fa-solid',
                ],
                'label_block' => true
            ]
        );
        $this->add_control(
            'accordion_active_icon',
            [
                'label' => __('Active Icon', 'political-core'),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-minus',
                    'library' => 'fa-solid',
                ],
                'label_block' => true
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
        
        $x = 0;
        echo '<div class="faq-accordion" id="accordion">';
        foreach ($settings['accordion_list'] as $item) {
            $x++;
            echo '<div class="card">
                <div class="card-header" id="heading'.$x.'">
                    <button data-bs-toggle="collapse" data-bs-target="#collapse'.$x.'" aria-expanded="false" aria-controls="collapse'.$x.'" class="collapsed">
                        '.$item['accordion_title'].'
                        <span class="accordion-icon"> <i class="'. $settings['accordion_icon']['value'].'"> </i></span>
                        <span class="accordion-icon active"> <i class="'. $settings['accordion_acrive_icon']['value'].'"> </i></span>
                    </button>
                </div>

                <div id="collapse'.$x.'" class="collapse" aria-labelledby="heading'.$x.'" data-parent="#accordion" style="">
                    <div class="card-body">
                        '.$item['accordion_content'].'
                    </div>
                </div>
            </div>';
        }
        echo '</div>';

    }
}
