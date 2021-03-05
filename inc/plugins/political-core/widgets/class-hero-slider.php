<?php
namespace PoliticalElementorAddons\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Box_Shadow;
use Elementor\Scheme_Typography;
use Elementor\Scheme_Color;
use Elementor\Group_Control_Image_Size;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @since 1.1.0
 */

class PoliticalHeroSlider extends Widget_Base {

	public function get_name() {
		return 'hero-slider';
	}

	public function get_title() {
		return __( 'Home Slider', 'political-core' );
	}

	public function get_icon() {
		return 'fa fa-sliders';
	}
	
	protected function _register_controls() {
	    
        //Content Tab
		$this->start_controls_section(
			'hero_slider_content',
			[
				'label' => __( 'Content', 'political-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
        
        $repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'content_heading',
			[
				'label' => __( 'Content', 'political-core' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		$repeater->add_control(
			'slider_content',
			[
				'label' => __( 'Slider Content', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => __( 'Make your support portal doxy html template', 'political-core' ),
				'placeholder' => __( 'Type your content here', 'political-core' ),
				'label_block' => true,
			]
		);
		
		
		
		$repeater->add_control(
			'slider_btn_label',
			[
				'label' => __( 'Button Label', 'political-core' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => __( 'Get Supports', 'political-core' ),
				'label_block' => true,
			]
		);
		$repeater->add_control(
			'slider_buton_link',
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
        $repeater->add_control(
			'hero_slider_animation',
			[
				'label' => __( 'Animation', 'political-core' ),
				'type' => \Elementor\Controls_Manager::ANIMATION,
				'prefix_class' => 'animated ',
			]
		);
        $repeater->add_control(
			'slider_animation_duration',
			[
				'label' => __( 'Animation Duration(ms)', 'political-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => '200'
			]
        );
        $repeater->add_control(
			'slider_animation_delay',
			[
				'label' => __( 'Animation Delay(ms)', 'political-core' ),
                'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '200',
				'separator' => 'before'
			]
		);
		$this->add_control(
			'slider_list',
			[
				'label' => __( 'Slider Item List', 'political-core' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'slider_content' => __( 'Slider Item #1', 'political-core' ),
                        'slider_btn_label' => __('Get Support', 'political-core'),
					],
					[
						'slider_content' => __( 'Slider Item #2', 'political-core' ),
                        'slider_btn_label' => __('Explore Topics', 'political-core'),
					],
				],
				'title_field' => '{{{ slider_content }}}',
			]
		);
		

        $this->end_controls_section();
        
        //Style Tab
        $this->start_controls_section(
			'hero_slider_style',
			[
				'label' => __( 'Style', 'political-core' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
        );
        
        $this->add_control(
			'slider_content_heading',
			[
				'label' => __( 'Content', 'political-core' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'slider_content_color',
			[
				'label' => __( 'Color', 'political-core' ),
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
				'label' => __( 'Typography', 'political-core' ),
				'selector' => '{{WRAPPER}} .hero-slider-content',
				'default' => '',
				
			]
		);
        $this->add_responsive_control(
			'width',
			[
				'label' => __( 'Spacing', 'political-core' ),
				'type' => Controls_Manager::SLIDER,
				'size_units' => [ 'px', '%' ],
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
				'label' => __( 'Button', 'political-core' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
		
		$this->start_controls_tabs( 'tabs_button_style' );

    		$this->start_controls_tab(
    			'tab_button_normal',
    			[
    				'label' => __( 'Normal', 'political-core' ),
    			]
    		);
    		    $this->add_control(
        			'button_text_color',
        			[
        				'label' => __( 'Text Color', 'political-core' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .h-slider-link' => 'color: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'button_bg_color',
        			[
        				'label' => __( 'Background Color', 'political-core' ),
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
    				'label' => __( 'Hover', 'political-core' ),
    			]
    		);
    		
    		    $this->add_control(
        			'button_text_hover_color',
        			[
        				'label' => __( 'Text Color', 'political-core' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .h-slider-link:hover' => 'color: {{VALUE}}',
        				],
        			]
        		);
        		$this->add_control(
        			'button_bg_hover_color',
        			[
        				'label' => __( 'Background Color', 'political-core' ),
        				'type' => \Elementor\Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} .h-slider-link:hover' => 'background-color: {{VALUE}}',
        				],
        			]
        		);
    		$this->end_controls_tab();
		$this->end_controls_tabs( );
		

		$this->add_control(
			'border_radius',
			[
				'label' => __( 'Border Radius', 'political-core' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
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
				'label' => __( 'Padding', 'political-core' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .h-slider-link' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
				'separator' => 'before',
			]
		);
        $this->end_controls_section();
	}
	
	protected function render() {
		$settings = $this->get_settings_for_display();

		if ( $settings['slider_list'] ) {

           echo '<div class="hero-area position-relative overflow-hidden">
                <div class="hero-slider mobile-dots">';
                     foreach (  $settings['slider_list'] as $item ) : ?>
                        <div class="hero-item">
                            <div class="hero-bg-image"><img src="<?php echo POLITICAL_IMG_URL; ?>/hero-bg-img1.jpg" alt="image"></div>
                            <div class="container">
                                <div class="hero-wrapper">
                                <div class="hero-content text-light">

                                    <h1 class="fs-1 mb-2 fw-bold text-light" data-animation="fadeInDown" data-delay="0.7s">Vote For Our
                                    Political Freedom Party</h1>
                                    <p class="mb-3 lead" data-animation="fadeInDown" data-delay="0.7s">If of to smaller rationalize he
                                    theoretically high sort this caught farther, have withdraw survey detailed a handed there's horrible
                                    literature lamps,</p>
                                    <a class="btn btn-danger btn--1" data-animation="fadeInDown" data-delay="0.7s" href="donate.html"> Donate
                                    Us</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            <div class="hero-item">
                            <div class="hero-bg-image"><img src="<?php echo POLITICAL_IMG_URL; ?>/hero-bg-img2.jpg" alt="image"></div>
                            <div class="container">
                                <div class="hero-wrapper text-center">
                                <div class="hero-content text-light mx-auto">

                                    <h1 class="fs-1 mb-2 text-light" data-animation="fadeInDown" data-delay="0.7s">Let's Make The World Great
                                    Again</h1>
                                    <p class="mb-3 lead" data-animation="fadeInDown" data-delay="0.7s">If of to smaller rationalize he
                                    theoretically high sort this caught farther, have withdraw survey detailed a handed there's horrible
                                    literature lamps,</p>
                                    <a class="btn btn-danger" data-animation="fadeInDown" data-delay="0.7s" href="#"> Contact Us
                                    </a>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    <?php endforeach;
               echo '<ul class="hero-arrows list-inline">
                    <li><button class="hero-prev"><i class="im im-angle-left"></i></button></li>
                    <li><button class="hero-next"><i class="im im-angle-right"></i></button></li>
                </ul>
                </div>';
            ?>
			<script src="<?php echo site_url(); ?>/wp-content/plugins/political-core/assets/js/slick.min.js"></script>
			<script>	
                jQuery('.hero-slider').slick({
                    autoplay: true,
                    autoplayspeed:2000,
                    infinite: false, 
                    dots: true,
                    fade: true,  
                    arrows: false,
                    speed: 0, 
                    responsive: [
                        { breakpoint: 767, settings: {  dots: false, arrows: false} }
                    ]
                });  
        	</script>
		<?php
		}
	}
}