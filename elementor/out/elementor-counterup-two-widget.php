<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */


namespace Elementor;

class Softim_Counterup_Two_Widget extends Widget_Base {


	/**
	 * Get widget name.
	 *
	 * Retrieve Elementor widget name.
	 *
	 * @return string Widget name.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_name() {

		return 'softim-counterup-two-widget';

	}


	/**
	 * Get widget title.
	 *
	 * Retrieve Elementor widget title.
	 *
	 * @return string Widget title.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_title() {

		return esc_html__( 'Counterup: 02', 'softim-core' );

	}


	/**
	 * Get widget icon.
	 *
	 * Retrieve Elementor widget icon.
	 *
	 * @return string Widget icon.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_icon() {

		return 'eicon-counter';

	}


	/**
	 * Get widget categories.
	 *
	 * Retrieve the list of categories the Elementor widget belongs to.
	 *
	 * @return array Widget categories.
	 * @since 1.0.0
	 * @access public
	 *

	 */

	public function get_categories() {

		return [ 'softim_widgets' ];

	}


	/**
	 * Register Elementor widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function _register_controls() {


		$this->start_controls_section(

			'settings_section',

			[

				'label' => esc_html__( 'General Settings', 'softim-core' ),

				'tab' => Controls_Manager::TAB_CONTENT,

			]

		);


		$this->add_control(

			'theme',

			[

				'label' => esc_html__( 'Theme', 'softim-core' ),

				'type' => Controls_Manager::SELECT,

				'options' => [

					'black' => esc_html__( 'Black', 'softim-core' ),

					'white' => esc_html__( 'White', 'softim-core' ),

				],

				'default' => 'black',

				'description' => esc_html__( 'select theme.', 'softim-core' )

			]

		);

		$this->add_control(

			'icon',

			[

				'label' => esc_html__( 'Icon', 'softim-core' ),

				'type' => Controls_Manager::ICONS,

				'description' => esc_html__( 'select Icon.', 'softim-core' ),

				'default' => [

					'value' => 'flaticon-safe',

					'library' => 'solid',

				]

			]

		);

		$this->add_control( 'title_status',

			[

				'label' => esc_html__( 'Subtitle Show/Hide', 'softim-core' ),

				'type' => Controls_Manager::SWITCHER,

				'description' => esc_html__( 'show/hide Subtitle', 'softim-core' ),

			] );

		$this->add_control( 'title', [

			'label' => esc_html__( 'Title', 'softim-core' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( 'Projects Done', 'softim-core' ),

			'description' => esc_html__( 'enter title', 'softim-core' )

		] );

		$this->add_control( 'number', [

			'label' => esc_html__( 'Number', 'softim-core' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( '25', 'softim-core' ),

			'description' => esc_html__( 'enter counterup number', 'softim-core' )

		] );

		$this->add_control( 'sign', [

			'label' => esc_html__( 'sign', 'softim-core' ),

			'type' => Controls_Manager::TEXT,

			'default' => esc_html__( 'k+', 'softim-core' ),

			'description' => esc_html__( 'enter counterup sign', 'softim-core' )

		] );


		$this->end_controls_section();


		$this->start_controls_section(

			'styling_settings_section',

			[

				'label' => esc_html__( 'Styling Settings', 'softim-core' ),

				'tab' => Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_control(

			'shape-radius',

			[

				'label' => esc_html__( 'Radius', 'softim-core' ),

				'type' => Controls_Manager::DIMENSIONS,

				'size_units' => [ 'px', '%', 'em' ],

				'selectors' => [

					'{{WRAPPER}} .single-counterup-03' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',

				],

			]

		);

		$this->add_group_control(

			Group_Control_Box_Shadow::get_type(),

			[

				'name' => 'box_shadow',

				'label' => esc_html__( 'Box Shadow', 'softim-core' ),

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);

		$this->add_group_control(

			Group_Control_Background::get_type(),

			[

				'name' => 'background',

				'label' => esc_html__( 'Background', 'softim-core' ),

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);

		$this->add_group_control(

			Group_Control_Border::get_type(),

			[

				'name' => 'border',

				'label' => esc_html__( 'Border', 'softim-core' ),

				'selector' => '{{WRAPPER}} .single-counterup-03',

			]

		);
        $this->add_control( 'icon_color', [

            'label' => esc_html__( 'Icon Color', 'softim-core' ),

            'type' => Controls_Manager::COLOR,

            'selectors' => [

                "{{WRAPPER}} .single-counterup-03 .content .icon" => "color: {{VALUE}}"

            ]

        ] );
		$this->add_control( 'number_color', [

			'label' => esc_html__( 'Number Color', 'softim-core' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap .count-num" => "color: {{VALUE}}",

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap " => "color: {{VALUE}}"

			]

		] );

		$this->add_control( 'sign_color', [

			'label' => esc_html__( 'Sign Color', 'softim-core' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .count-wrap .sing-plus" => "color: {{VALUE}}"

			]

		] );

		$this->add_control( 'title_color', [

			'label' => esc_html__( 'Title Color', 'softim-core' ),

			'type' => Controls_Manager::COLOR,

			'selectors' => [

				"{{WRAPPER}} .single-counterup-03 .content .title" => "color: {{VALUE}}"

			]

		] );

		$this->end_controls_section();


		$this->start_controls_section(

			'typography_settings_section',

			[

				'label' => esc_html__( 'Typography Settings', 'softim-core' ),

				'tab' => Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_group_control(

			Group_Control_Typography::get_type(),

			[

				'name' => 'number_typography',

				'label' => esc_html__( 'Number Typography', 'softim-core' ),

				'selector' => '{{WRAPPER}} .single-counterup-03 .count-wrap',

			]

		);

		$this->add_group_control(

			Group_Control_Typography::get_type(),

			[

				'name' => 'title_typography',

				'label' => esc_html__( 'Title Typography', 'softim-core' ),

				'selector' => '{{WRAPPER}} .single-counterup-03 .title',

			]

		);

		$this->end_controls_section();

	}


	/**
	 * Render Elementor widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0.0
	 * @access protected
	 */

	protected function render() {


		$settings = $this->get_settings_for_display();


		$title = $settings['title'];

		$number = $settings['number'];

		$this->add_render_attribute( 'counterup_wrapper', 'class', 'single-counterup-03' );

		$this->add_render_attribute( 'counterup_wrapper', 'class', $settings['theme'] );


		?>

        <div <?php echo $this->get_render_attribute_string( 'counterup_wrapper' ); ?>>
            <div class="content-wrap">
                <div class="content">
                    <div class="icon">
						<?php
						Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] );
						?>
                    </div>
                    <div class="count-wrap">
                        <span class="count-num"><?php echo esc_html( $number ); ?><sup><?php echo esc_html( $settings['sign'] ) ?></sup></span>
                    </div>
					<?php
					if ( ! empty( $settings['title_status'] ) ) : ?>
                        <h4 class="title"><?php echo esc_html( $title ); ?></h4>
                    <?php endif; ?>
                </div>
            </div>
        </div>

		<?php

	}

}


Plugin::instance()->widgets_manager->register( new Softim_Counterup_Two_Widget() );