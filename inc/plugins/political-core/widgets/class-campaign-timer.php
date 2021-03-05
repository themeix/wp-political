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


class PoliticalCampaignTimer extends Widget_Base
{

    public function get_name()
    {
        return 'campaign-timer';
    }

    public function get_title()
    {
        return __('Campaign Timer', 'political-core');
    }

    public function get_icon()
    {
        return 'fab fa-clock';
    }

    public function get_categories()
    {
        return ['political-addons'];
    }
    protected function _register_controls()
    {

        $this->start_controls_section(
            'campaign_timer_content',
            [
                'label' => __('Campaign Timer Content', 'political-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'campaign_title',
            [
                'label' => __('Campaign Title', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'separator' => 'before',
                'default' => __('Primary Election Campaign', 'political-core'),
                'label_block' => true
            ]
        );

        $this->add_control(
            'campaing_starting_date_time',
            [
                'label' => __('Campaign Starting Date Time', 'political-core'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'format' => 'mm dd, yyyy HH:ii',
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'campaing_ending_time',
            [
                'label' => __('Campaign Ending Date Time', 'political-core'),
                'type' => \Elementor\Controls_Manager::DATE_TIME,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'campaign_location',
            [
                'label' => __('Campaign Location', 'political-core'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Montreal, UK', 'political-core'),
                'separator' => 'before',
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

        echo '<div class="upcoming-campaign">
            <div class="upcoming-campaign-wrapper  ">
              <h4>Primary Election Campaign</h4>
              <small>Start: <span class="text-danger fw-bold">' . $settings['campaing_starting_date_time'] . '</span></small>
              <ul class="meta-data list-inline  mt-1 ">
                <li class="list-inline-item"><small><i class="im im-location"></i>Montreal, UK</small></li>
                <li class="list-inline-item"><small><i class="im im-clock-o"></i> 02:00PM - 06:00PM</small></li>
              </ul>
              <div id="countdown" class="mt-2">
                <ul class="list-inline">
                  <li>
                    <h3 id="days">0</h3>
                    <span>days</span>
                  </li>
                  <li>
                    <h3 id="hours">0</h3>
                    <span>Hours</span>
                  </li>
                  <li>
                    <h3 id="minutes">0</h3>
                    <span>Minutes</span>
                  </li>
                  <li>
                    <h3 id="seconds">0</h3>
                    <span>Seconds</span>
                  </li>
                </ul>
              </div>

            </div>
          </div>';

        echo '<script>
        // day counter
        if ($("#countdown").length) {
            const second = 1000,
                minute = second * 60,
                hour = minute * 60,
                day = hour * 24;
            let birthday = "' . $settings['campaing_starting_date_time'] . '",
                countDown = new Date(birthday).getTime(),
                x = setInterval(function() {
                    let now = new Date().getTime(),
                        distance = countDown - now;
    
                    document.getElementById("days").innerText = Math.floor(distance / day);
                    document.getElementById("hours").innerText = Math.floor((distance % day) / hour);
                    document.getElementById("minutes").innerText = Math.floor((distance % hour) / minute);
                    document.getElementById("seconds").innerText = Math.floor((distance % minute) / second);
                    //seconds
                }, 0);
        }
    </script>';
    }
}
?>
