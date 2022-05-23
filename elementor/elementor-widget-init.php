<?php

/**
 * Elementor Addons Init
 * @package softim
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit(); // exit if access directly
}


if ( ! class_exists( 'Softim_Elementor_Widget_Init' ) ) {

	class Softim_Elementor_Widget_Init {
	   /**
		* $instance
		* @since 1.0.0
		*/
		private static $instance;

	   /**
		* construct()
		* @since 1.0.0
		*/
		public function __construct() {
			add_action( 'elementor/elements/categories_registered', array( $this, '_widget_categories' ) );
			//elementor widget registered
			add_action( 'elementor/widgets/widgets_registered', array( $this, '_widget_registered' ) );
			// elementor editor css
			add_action( 'elementor/editor/after_enqueue_scripts', array( $this, 'load_assets_for_elementor' ) );
			//add icon to elementor new icons fileds
			add_filter( 'elementor/icons_manager/native', array( $this, 'add_custom_icon_to_elementor_icons' ) );
		}

		/**
	     * getInstance()
	     * @since 1.0.0
	     */
		public static function getInstance() {
			if ( null == self::$instance ) {
				self::$instance = new self();
			}

			return self::$instance;
		}

		/**
		 * _widget_categories()
		 * @since 1.0.0
		 */
		public function _widget_categories( $elements_manager ) {
			$elements_manager->add_category(
				'softim_widgets',
				[
					'title' => esc_html__( 'Softim Widgets', 'softim-core' ),
					'icon'  => 'fas fa-plug',
				]
			);
		}

		/**
		 * _widget_registered()
		 * @since 1.0.0
		 */
		public function _widget_registered() {
			if ( ! class_exists( 'Elementor\Widget_Base' ) ) {
				return;
			}
			$elementor_widgets = array(
                'about-one',
                'about-two',
                'about-three',
				'banner-one',
				'banner-two',
				'banner-three',
                'blog-one',
                'blog-two',
                'blog-three',
				'brand',
				'brand-3',
				'call-to-action-one',
				'call-to-action-two',
				'case-study',
				'choose-one',
				'contact-form',
				'contact-one',
				'contact-two',
                'counter-one',
                'development-one',
                'experience-one',
                'faq-one',
				'overview-one',
				'plan-process-one',
				'price-one',
				'price-two',
                'project-one',
                'project-two',
                'service-one',
                'service-two',
                'service-three',
                'service-four',
                'service-five',
                'statistics',
                'team-one',
                'team-two',
                'team-three',
                'team-four',
                'team-five',
				'testimonial-one',
				'testimonial-two',
				'testimonial-three',
			);

			$elementor_widgets = apply_filters( 'softim_elementor_widget', $elementor_widgets );
			ksort( $elementor_widgets );
			if ( is_array( $elementor_widgets ) && ! empty( $elementor_widgets ) ) {
				foreach ( $elementor_widgets as $widget ) {
					if ( file_exists( SOFTIM_CORE_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php' ) ) {
						require_once SOFTIM_CORE_ELEMENTOR . '/addons/elementor-' . $widget . '-widget.php';
					}
				}
			}
		}

		public function add_custom_icon_to_elementor_icons( $icons ) {
			$icons['flaticon'] = [
				'name'          => 'flaticon',
				'label'         => esc_html__( 'Flaticon', 'softim-core' ),
				'url'           => SOFTIM_CORE_CSS . '/flaticon.css',
				// icon css file
				'enqueue'       => [ SOFTIM_CORE_CSS . '/flaticon.css' ],
				// icon css file
				'prefix'        => 'flaticon-',
				//prefix ( like fas-fa  )
				'displayPrefix' => '',
				//prefix to display icon
				'labelIcon'     => 'flaticon-plane-1',
				//tab icon of elementor icons library
				'ver'           => '1.0.0',
				'fetchJson'     => SOFTIM_CORE_JS . '/flaticon.js',
				//json file with icon list example {"icons: ['icon class']}
				'native'        => true,
			];

			return $icons;
		}

		/**
		 * load custom assets for elementor
		 * @since 1.0.0
		 */
		public function load_assets_for_elementor() {
			wp_enqueue_style( 'flaticon', SOFTIM_CORE_CSS . '/flaticon.css' );
			wp_enqueue_style( 'softim-core-elementor-style', SOFTIM_CORE_ADMIN_ASSETS . '/css/elementor-editor.css' );
		}
	}

	if ( class_exists( 'Softim_Elementor_Widget_Init' ) ) {
		Softim_Elementor_Widget_Init::getInstance();
	}
}//end if
