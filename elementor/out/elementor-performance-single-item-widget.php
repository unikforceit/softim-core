<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Performance_Single_Item_Widget extends Widget_Base
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
        return 'softim-performance-single-item-widget';
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
        return esc_html__('Performance Single Item : 01', 'softim-core');
    }

    public function get_keywords()
    {
        return ['ThemeIM', 'softim', 'image box'];
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
        return 'eicon-image';
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
    protected function register_controls ()
    {


        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'performance_system',
            [
                'label' => esc_html__('Blog Style System', 'softim-core'),
                'type' => Controls_Manager::SELECT,
                'default' => 'for-slider',
                'options' => [
                    'for-grid' => esc_html__('Grid System', 'softim-core'),
                    'for-slider' => esc_html__('Slider System', 'softim-core'),
                ],
            ]
        );
        $this->add_control(
            'column',
            [
                'label' => esc_html__('Column', 'softim-core'),
                'type' => Controls_Manager::SELECT,
                'options' => array(
                    '3' => esc_html__('04 Column', 'softim-core'),
                    '4' => esc_html__('03 Column', 'softim-core'),
                    '2' => esc_html__('06 Column', 'softim-core'),
                    '6' => esc_html__('02 Column', 'softim-core'),
                    '12' => esc_html__('01 Column', 'softim-core'),
                ),
                'condition' => ['performance_system' => 'for-grid'],
                'description' => esc_html__('select grid column', 'softim-core'),
                'default' => '4'
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('Luxury & Comfort', 'softim-core'),
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'flaticon-calendar-1',
                    'library' => 'solid',
                ]
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter text.', 'softim-core'),
                'default' => esc_html__('Flying should be a pleasure and we’ll make your charter experience as luxurious and comfortable as possible.', 'softim-core')
            ]
        );
        $repeater->add_control(
            'text_align',
            [
                'label' => esc_html__('Alignment', 'softim-core'),
                'type' => Controls_Manager::CHOOSE,
                'options' => [
                    'left' => [
                        'title' => esc_html__('Left', 'softim-core'),
                        'icon' => 'fa fa-align-left',
                    ],
                    'center' => [
                        'title' => esc_html__('Center', 'softim-core'),
                        'icon' => 'fa fa-align-center',
                    ],
                    'right' => [
                        'title' => esc_html__('Right', 'softim-core'),
                        'icon' => 'fa fa-align-right',
                    ],
                ],
                'default' => 'center',
                'toggle' => true,
            ]
        );
        $this->add_control('performance_items', [
            'label' => esc_html__('Testimonial Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'title' => esc_html__('William Evans', 'softim-core'),
                    'description' => esc_html__("Convallis convallis tellus id interdum velit laoreet id donec ultrices. the for pulvinar neque laoreet suspendisse interdum consectetur libero id. cras adipiscing enim eu turpis.", 'softim-core'),
                ]
            ],

        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'slider_settings_section',
            [
                'label' => esc_html__('Slider Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'items',
            [
                'label' => esc_html__('slidesToShow', 'softim-core'),
                'type' => Controls_Manager::NUMBER,
                'description' => esc_html__('you can set how many item show in slider', 'softim-core'),
                'default' => '3',
            ]
        );
        $this->add_control(
            'margin',
            [
                'label' => esc_html__('Margin', 'softim-core'),
                'description' => esc_html__('you can set margin for slider', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 5,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 0,
                ],
                'size_units' => ['px']
            ]
        );
        $this->add_control(
            'loop',
            [
                'label' => esc_html__('Loop', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
            ]
        );
        $this->add_control(
            'autoplay',
            [
                'label' => esc_html__('Autoplay', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
            ]
        );
        $this->add_control(
            'nav',
            [
                'label' => esc_html__('Nav', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
                'default' => 'no'
            ]
        );
        $this->add_control(
            'dots',
            [
                'label' => esc_html__('Dots', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
                'default' => 'yes'
            ]
        );
        $this->add_control(
            'nav_left_arrow',
            [
                'label' => esc_html__('Nav Left Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-arrow-left',
                    'library' => 'solid',
                ],
                'condition' => ['nav' => 'yes']
            ]
        );
        $this->add_control(
            'nav_right_arrow',
            [
                'label' => esc_html__('Nav Right Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-arrow-right',
                    'library' => 'solid',
                ],
                'condition' => ['nav' => 'yes']
            ]
        );
        $this->add_control(
            'center',
            [
                'label' => esc_html__('Center', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes/no to enable/disable', 'softim-core'),

            ]
        );
        $this->add_control(
            'autoplaytimeout',
            [
                'label' => esc_html__('Autoplay Timeout', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 10000,
                        'step' => 2,
                    ]
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 5000,
                ],
                'size_units' => ['px'],
                'condition' => array(
                    'autoplay' => 'yes'
                )
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'styling_section',
            [
                'label' => esc_html__('Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('icon_color_circle', [
            'label' => esc_html__('Icon Circle Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .performance-single-item .icon:before" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('icon_color', [
            'label' => esc_html__('Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .performance-single-item .icon" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .performance-single-item .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('paragraph_color', [
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .performance-single-item .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'label' => esc_html__('Background', 'softim-core'),
            'name' => 'background',
            'selector' => "{{WRAPPER}} .performance-single-item "
        ]);
        $this->add_control('dot_color', [
            'label' => esc_html__('Dot Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .slick-carousel-controls .slick-dots li button" => "border-color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();
        /* icon hover controls tabs end */


        $this->start_controls_section(
            'typography_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'hover_title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .performance-single-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'hover_paragraph_typography',
            'label' => esc_html__('Paragraph Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .performance-single-item .content p"
        ]);
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
        $all_performance_items = $settings['performance_items'];
        $rand_numb = rand(333, 999999999);

        //slider settings

        $slider_settings = [
            "loop" => esc_attr($settings['loop']),
            "margin" => esc_attr($settings['margin']['size'] ?? 0),
            "items" => esc_attr($settings['items'] ?? 3),
            "center" => esc_attr($settings['center']),
            "autoplay" => esc_attr($settings['autoplay']),
            "autoplaytimeout" => esc_attr($settings['autoplaytimeout']['size'] ?? 0),
            "nav" => esc_attr($settings['nav']),
            "dot" => esc_attr($settings['dots']),
            "navleft" => softim_core()->render_elementor_icons($settings['nav_left_arrow']),
            "navright" => softim_core()->render_elementor_icons($settings['nav_right_arrow'])

        ]
        ?>
        <?php if ($settings['performance_system'] === 'for-slider') : ?>
        <div class="performance-carousel-wrapper softim-rtl-slider">
            <div class="performance-carousel"
                 id="performance-one-carousel-<?php echo esc_attr($rand_numb); ?>"
                 data-settings='<?php echo json_encode($slider_settings) ?>'
            >
                <?php
                foreach ($all_performance_items as $item):
                    ?>
                    <div class="ps-outer-wrap">
                        <div class="performance-single-item">
                            <div class="icon">
                                <?php
                                Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                                ?>
                            </div>
                            <div class="content">
                                <?php
                                if (!empty($item['title'])) {
                                    printf('<a %1$s ><h3 class="title">%2$s</h3></a>', $this->get_render_attribute_string('link_wrapper'), esc_html($item['title']));
                                }
                                if (!empty($item['description'])) {
                                    printf('<p>%1$s</p>', esc_html($item['description']));
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="slick-carousel-controls">
                <?php if (!empty($settings['nav'])) : ?>
                    <div class="slider-nav"></div>
                <?php endif; ?>
                <div class="slider-dots"></div>
            </div>
        </div>
    <?php endif; ?>
        <?php if ($settings['performance_system'] === 'for-grid') : ?>
        <div class="performance-wrapper">
            <div class="row">
                <?php
                foreach ($all_performance_items as $item):
                    ?>
                    <div class="col-lg-<?php echo esc_attr($settings['column']); ?> col-md-6">
                        <div class="performance-single-item">
                            <div class="icon">
                                <?php
                                Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                                ?>
                            </div>
                            <div class="content">
                                <?php
                                if (!empty($item['title'])) {
                                    printf('<a %1$s ><h3 class="title">%2$s</h3></a>', $this->get_render_attribute_string('link_wrapper'), esc_html($item['title']));
                                }
                                if (!empty($item['description'])) {
                                    printf('<p>%1$s</p>', esc_html($item['description']));
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif;
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Performance_Single_Item_Widget());