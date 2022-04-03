<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;

class Softim_Testimonial_Three_Widget extends Widget_Base
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
        return 'softim-testimonial-three-widget';
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
        return esc_html__('Testimonial: 03', 'softim-core');
    }

    public function get_keywords()
    {
        return ['Team', 'Member', 'Testimonial', "ThemeIM", 'Softim'];
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
        return 'eicon-blockquote';
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
    protected function _register_controls()
    {

        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control('content_devider', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $repeater = new Repeater();
        $repeater->add_control('image_status',
            [
                'label' => esc_html__('Image Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide image', 'softim-core'),
            ]);
        $repeater->add_control('image',
            [
                'label' => esc_html__('Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'description' => esc_html__('enter title.', 'softim-core'),
                'condition' => ['image_status' => 'yes'],
                'default' => array(
                    'url' => Utils::get_placeholder_image_src()
                )
            ]);
        $repeater->add_control('icon_status',
            [
                'label' => esc_html__('Image Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide image', 'softim-core'),
            ]);
        $repeater->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'condition' => ['icon_status' => 'yes'],
                'default' => [
                    'value' => 'flaticon-straight-quotes',
                    'library' => 'solid',
                ]
            ]
        );
        $repeater->add_control('name',
            [
                'label' => esc_html__('Name', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter name', 'softim-core'),
                'default' => esc_html__('Jhon Abraham', 'softim-core')
            ]);
        $repeater->add_control('designation_status',
            [
                'label' => esc_html__('Designation Show/Hide', 'softim-master'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide designation', 'softim-master'),
            ]);
        $repeater->add_control('designation',
            [
                'label' => esc_html__('Designation', 'softim-master'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter designation', 'softim-master'),
                'condition' => ['designation_status' => 'yes'],
                'default' => esc_html__('Marketing Manager', 'softim-master')
            ]);
        $repeater->add_control('ratings',
            [
                'label' => esc_html__('Ratings Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('show/hide ratings', 'softim-core'),
            ]);
        $repeater->add_control('ratings_count',
            [
                'label' => esc_html__('Ratings', 'softim-core'),
                'type' => Controls_Manager::SELECT,
                'options' => [
                    '1' => esc_html__('1 star', 'softim-core'),
                    '2' => esc_html__('2 star', 'softim-core'),
                    '3' => esc_html__('3 star', 'softim-core'),
                    '4' => esc_html__('4 star', 'softim-core'),
                    '5' => esc_html__('5 star', 'softim-core'),
                ],
                'description' => esc_html__('set ratings', 'softim-core'),
                'condition' => ['ratings' => 'yes']
            ]);
        $repeater->add_control('description',
            [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter description', 'softim-core'),
                'default' => esc_html__('We teach martial arts because we love it — not because we want to make money on you.', 'softim-core')
            ]);
        $this->add_control('testimonial_items', [
            'label' => esc_html__('Testimonial Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'title' => esc_html__('William Evans', 'softim-core'),
                    'description' => esc_html__("We teach martial arts because we love it — not because we want to make money on you.", 'softim-core'),
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
                'default' => 'yes'
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
            'centerPadding',
            [
                'label' => esc_html__('Center Padding', 'softim-core'),
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
                    'size' => 340,
                ],
                'size_units' => ['px'],
                'condition' => array(
                    'center' => 'yes'
                )
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


        $this->start_controls_section('styling_section', [
            'label' => esc_html__('Styling Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);

        $this->add_group_control(Group_Control_Background::get_type(), [
            'label' => esc_html__('Background', 'softim-core'),
            'name' => 'content_backaground',
            'selector' => "{{WRAPPER}} .single-testimonial-item-03"
        ]);
        $this->add_control(
            'content_padding',
            [
                'label' => esc_html__('Padding', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .single-testimonial-item-03' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Border::get_type(),
            [
                'name' => 'content_border',
                'label' => esc_html__('Border', 'softim-core'),
                'selector' => '{{WRAPPER}} .single-testimonial-item-03',
            ]
        );
        $this->add_control(
            'description_bottom_gap',
            [
                'label' => esc_html__('Description Bottom Gap', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ]
                ],
                'size_units' => ['px', '%'],
                'selectors' => [
                    "{{WRAPPER}} .single-testimonial-item-03 .description" => 'margin-bottom: {{SIZE}}{{UNIT}};'
                ]
            ]
        );
        $this->add_control(
            'ratings_between_gap',
            [
                'label' => esc_html__('Ratings Between Gap', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ]
                ],
                'size_units' => ['px', '%'],
                'selectors' => [
                    "{{WRAPPER}} .single-testimonial-item-03 .ratings i+i" => 'margin-left: {{SIZE}}{{UNIT}};'
                ]
            ]
        );
        $this->add_control(
            'author_meta_padding_gap',
            [
                'label' => esc_html__('Author Padding', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 500,
                        'step' => 2,
                    ]
                ],
                'size_units' => ['px', '%'],
                'selectors' => [
                    "{{WRAPPER}} .single-testimonial-item-03 .author-meta" => 'padding: {{SIZE}}{{UNIT}};'
                ]
            ]
        );
        $this->add_control('icon_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Icon Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .single-testimonial-item-03 .content-top .icon" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('name_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Name Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .single-testimonial-item-03 .author-meta .title" => "color: {{VALUE}}"
            ]
        ]);

        $this->add_control('description_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Description Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .single-testimonial-item-03 .description" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('designation_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Designation Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .single-testimonial-item-03 .author-meta .designation" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('rating_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Ratings Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .single-testimonial-item-03 .ratings i" => "color: {{VALUE}}"
            ]
        ]);

        $this->end_controls_section();

        $this->start_controls_section('typography_section', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'name_typography',
            'label' => esc_html__('Name Typography', 'softim-core'),
            "selector" => "{{WRAPPER}} .single-testimonial-item-03 .author-meta .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'description_typography',
            'label' => esc_html__('Description Typography', 'softim-core'),
            "selector" => "{{WRAPPER}} .single-testimonial-item-03 .content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'designation_typography',
            'label' => esc_html__('Designation Typography', 'softim-core'),
            "selector" => "{{WRAPPER}} .single-testimonial-item-03 .content .designation"
        ]);
        $this->end_controls_section();
    }

    /**
     * Render Elementor widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        $all_testimonial_items = $settings['testimonial_items'];
        $rand_numb = rand(333, 999999999);

        //slider settings
        $slider_settings = [
            "loop" => esc_attr($settings['loop']),
            "items" => esc_attr($settings['items'] ?? 3),
            "center" => esc_attr($settings['center']),
            "autoplay" => esc_attr($settings['autoplay']),
            "autoplaytimeout" => esc_attr($settings['autoplaytimeout']['size'] ?? 0),
            "centerpadding" => esc_attr($settings['centerPadding']['size'] ?? 0),
            "nav" => esc_attr($settings['nav']),
            "dot" => esc_attr($settings['dots']),
            "navleft" => softim_core()->render_elementor_icons($settings['nav_left_arrow']),
            "navright" => softim_core()->render_elementor_icons($settings['nav_right_arrow'])

        ]

        ?>
        <div class="testimonial-carousel-wrapper softim-rtl-slider">
            <div class="testimonial-carousel"
                 id="testimonial-one-carousel-<?php echo esc_attr($rand_numb); ?>"
                 data-settings='<?php echo json_encode($slider_settings) ?>'
            >
                <?php
                foreach ($all_testimonial_items as $item):
                    $image_id = $item['image']['id'] ?? '';
                    $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full', false)[0] : '';
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                    ?>
                    <div class="single-testimonial-item-03">
                        <div class="content-top">
                            <div class="icon">
                                <?php
                                Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                                ?>
                            </div>
                            <div class="thumb">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>">
                            </div>
                        </div>
                        <div class="content">
                            <p class="description"><?php echo esc_html($item['description']); ?></p>
                            <div class="author-meta">
                                <div class="meta-info">
                                    <h4 class="title"><?php echo esc_html($item['name']); ?></h4>
                                    <?php
                                    if (!empty($item['designation_status'])) {
                                        printf('<span class="designation">%1$s</span>', esc_html($item['designation']));
                                    }
                                    ?>
                                </div>
                                <?php if (!empty($item['ratings'])): ?>
                                    <div class="ratings">
                                        <?php
                                        for ($i = 0; $i < $item['ratings_count']; $i++) {
                                            print '<i class="fa fa-star"></i>';
                                        }
                                        ?>
                                    </div>
                                <?php endif; ?>
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
        <?php
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Softim_Testimonial_Three_Widget());
