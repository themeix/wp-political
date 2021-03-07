<?php
namespace PoliticalElementorAddons;

/**
 * Class PoliticalElementorAddonsMain
 *
 * Main Plugin class
 * @since 1.2.0
 */


class PoliticalElementorAddonsMain {

	/**
	 * Instance
	 *
	 * @since 1.2.0
	 * @access private
	 * @static
	 *
	 * @var Plugin The single instance of the class.
	 */
	private static $_instance = null;

	/**
	 * Instance
	 *
	 * Ensures only one instance of the class is loaded or can be loaded.
	 *
	 * @since 1.2.0
	 * @access public
	 *
	 * @return Plugin An instance of the class.
	 */
	public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

	/**
	 * widget_style
	 *
	 * Load main style files.
	 *
	 * @since 1.0.0
	 * @access public
	 */

	public function widget_styles() {
	    //css style
		wp_register_style( 'slick', plugins_url( '/assets/css/slick.css', __FILE__ ) );
		wp_enqueue_style( 'slick' );

	    //app core style
		wp_register_style( 'app-core', plugins_url( '/assets/css/app.css', __FILE__ ) );
		wp_enqueue_style( 'app-core' );
		
		
	}

	public function widget_scripts() {
		
	    //Enqueue Venobox
		wp_register_script( 'venobox', plugins_url( '/assets/js/venobox.min.js', __FILE__ ) );
		wp_enqueue_script( 'venobox' );

	    //Enqueue Slick
		wp_register_script( 'slick', plugins_url( '/assets/js/slick.min.js', __FILE__ ) );
		wp_enqueue_script( 'slick' );

		//Political Custom JS
		wp_register_script( 'political-custom', plugins_url( '/assets/js/custom.js', __FILE__ ) );
		wp_enqueue_script( 'political-custom' );
	}

	/**
	 * Include Widgets files
	 *
	 * Load widgets files
	 *
	 * @since 1.2.0
	 * @access private
	 */
	private function include_political_addon_files() {
		require_once( __DIR__ . '/widgets/class-blog-grid.php' );
		require_once( __DIR__ . '/widgets/class-hero-slider.php' );
		require_once( __DIR__ . '/widgets/class-feature-card.php' );
		require_once( __DIR__ . '/widgets/class-campaign-timer.php' );
		require_once( __DIR__ . '/widgets/class-service-iconbox.php' );
		require_once( __DIR__ . '/widgets/class-lightbox-video.php' );
		require_once( __DIR__ . '/widgets/class-testimonial.php' );
		require_once( __DIR__ . '/widgets/class-volunteer.php' );
		require_once( __DIR__ . '/widgets/class-gallery.php' );
	}

	
    
	/**
	 * Register Widgets
	 *
	 * Register new Elementor widgets.
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function register_widgets() {
		// Its is now safe to include Political Addon Files
		$this->include_political_addon_files();

		// Register Blog Grid Addon
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalBlogGrid() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalHeroSlider() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalFeatureCard() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalCampaignTimer() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalServiceIconBox() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalLightboxVideo() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalTestimonial() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalVolunteer() );
		\Elementor\Plugin::instance()->widgets_manager->register_widget_type( new Widgets\PoliticalGallery() );
		
	}

	public function add_elementor_widget_categories( $elements_manager ) {

    	$elements_manager->add_category(
    		'political-addons',
    		[
    			'title' => __( 'Political Addons', 'political-core' ),
    			'icon' => 'fa fa-plug',
    		]
    	);
    
    }
	/**
	 *  Plugin class constructor
	 *
	 * Register plugin action hooks and filters
	 *
	 * @since 1.2.0
	 * @access public
	 */
	public function __construct() {

		// Register widget style
		add_action( 'elementor/frontend/after_enqueue_styles', [ $this, 'widget_styles' ] );

		// Register widget style
		add_action( 'elementor/frontend/after_enqueue_scripts', [ $this, 'widget_scripts' ] );

		// Register widgets
		add_action( 'elementor/widgets/widgets_registered', [ $this, 'register_widgets' ] );

		//Register Widget Category
        add_action( 'elementor/elements/categories_registered', [ $this, 'add_elementor_widget_categories'] );
		
	}
}

// Instantiate Plugin Class
PoliticalElementorAddonsMain::instance();


