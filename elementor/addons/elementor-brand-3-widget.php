<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Brand_3_Widget extends Widget_Base
{

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
    public function get_name()
    {
        return 'softim-brand-3-widget';
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
    public function get_title()
    {
        return esc_html__('Brand 03', 'softim-core');
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
    public function get_icon()
    {
        return 'eicon-archive-title';
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
    public function get_categories()
    {
        return ['softim_widgets'];
    }

    /**
     * Register Elementor widget controls.
     *
     * Adds different input fields to allow the user to change and customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls()
    {

        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('Section Contents', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'brand_image', [
                'label' => esc_html__('Brand Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload brand image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'brand_list',
            [
                'label' => __('brand List', 'softim-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'brand_image' => [
                            'src' => Utils::get_placeholder_image_src()
                        ],
                    ],
                    [
                        'brand_image' => [
                            'src' => Utils::get_placeholder_image_src()
                        ],
                    ],
                    [
                        'brand_image' => [
                            'src' => Utils::get_placeholder_image_src()
                        ],
                    ],
                    [
                        'brand_image' => [
                            'src' => Utils::get_placeholder_image_src()
                        ],
                    ],
                ],

            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('brand_bg_color', [
            'label' => esc_html__('Brand Item Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .brand-item" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('brand_bg_hover_color', [
            'label' => esc_html__('Brand Item Hover Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .brand-item:hover" => "background: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* button styling */
        $this->start_controls_section(
            'border_section',
            [
                'label' => esc_html__('Border Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );

        $this->start_controls_tabs('border_styling');
        $this->start_controls_tab('normal_style', [
            'label' => esc_html__('Border Normal', "softim-core")
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'brand_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .brand-item"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Boder Hover', "softim-core")
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'brand_hover_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .brand-item:hover"
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control('divider_05', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control(
            'brand_border_radius',
            [
                'label' => esc_html__('Border Radius', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .brand-item' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
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
    protected function render()
    {
        $settings = $this->get_settings_for_display();

        ?>
        <div class="brand-section oh ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="brand-slider-area">
                            <div class="brand-slider">
                                <div class="swiper-wrapper">
                                    <?php if ($settings['brand_list']) {
                                        foreach ($settings['brand_list'] as $brand) { ?>
                                            <div class="swiper-slide">
                                                <div class="brand-item style-01">
                                                    <img src="<?php echo esc_html($brand['brand_image']['url']); ?>"
                                                         alt="brand">
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Brand_3_Widget());