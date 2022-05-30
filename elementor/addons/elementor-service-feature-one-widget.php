<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Service_Feature_One_Widget extends Widget_Base
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
        return 'softim-service-feature-one-widget';
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
        return esc_html__('Service Feature : 01', 'softim-core');
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
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub-title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("FEATURES", 'softim-core'),
                'description' => esc_html__('enter subtitle', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Customize your software in smart way", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim keeps your team’s work on-brand, on message, and on time. Innovative features make', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $this->add_control(
            'btn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('TRY IT FREE NOW', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => esc_html__('Button URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->end_controls_section();

//      Services Loop
        $this->start_controls_section(
            'service_section',
            [
                'label' => esc_html__('Service Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'service_icon', [
                'label' => esc_html__('Service Icon', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload service icon', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater->add_control(
            'service_title', [
                'label' => esc_html__('Service Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Easy setup process', 'softim-core'),
                'description' => esc_html__('enter service title', 'softim-core'),
            ]
        );
        $repeater->add_control(
            'service_info', [
                'label' => esc_html__('Service Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We rank among the best in Argentina, and Ukraine Our apps get', 'softim-core'),
                'description' => esc_html__('enter service info', 'softim-core'),
            ]
        );

        $this->add_control('service_list', [
            'label' => esc_html__('Take 3 Service Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'service_icon' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
                [
                    'service_icon' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
                [
                    'service_icon' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
            ],
        ]);
        $this->end_controls_section();

// Start Style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('subtitle_color', [
            'label' => esc_html__('Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title.two" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header p.info" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'css_styles_2',
            [
                'label' => esc_html__('Service Styling Tab', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('service_bg_color', [
            'label' => esc_html__('Service Item Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-section.five .service-item" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_1_color_active', [
            'label' => esc_html__('Service Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_1_color', [
            'label' => esc_html__('Service Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* button styling */
        $this->start_controls_section(
            'banner_button_section',
            [
                'label' => esc_html__('Button Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );

        $this->start_controls_tabs('button_styling');
        $this->start_controls_tab('normal_style', [
            'label' => esc_html__('Button Normal', "softim-core")
        ]);
        $this->add_control('button_normal_color', [
            'label' => esc_html__('Button Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn--base" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn--base:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base:hover::before"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base:hover"
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control('divider_05', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control(
            'button_border_radius',
            [
                'label' => esc_html__('Border Radius', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .btn--base' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        /* button styling end */

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .sub-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title.two"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p.info"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_typography',
            'label' => esc_html__('Service Item Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .service-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_tab_typography',
            'label' => esc_html__('Service Item Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .service-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonHover_typography',
            'label' => esc_html__('Button Hover Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base:hover"
        ]);
        $this->end_controls_section();
        /* typography settings end */

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

        <section class="service-section two five pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header">
                                <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                                <h1 class="section-title two"><?php echo esc_html($settings['title']); ?></h1>
                                <p class="info"><?php echo esc_html($settings['info']); ?></p>
                            </div>
                            <div class="section-header-btn">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                       class="btn--base active"><?php echo esc_html($settings['btn_text']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <?php if ($settings['service_list']) {
                        foreach ($settings['service_list'] as $service) {
                            ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="service-item two five">
                                    <div class="service-icon">
                                        <img src="<?php echo esc_url($service['service_icon']['url']); ?>" alt="icon">
                                    </div>
                                    <div class="service-content">
                                        <h3 class="title"><?php echo esc_html($service['service_title']); ?></h3>
                                        <p><?php echo esc_html($service['service_info']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Service_Feature_One_Widget());