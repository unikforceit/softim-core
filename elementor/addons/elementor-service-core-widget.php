<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Service_Core_Widget extends Widget_Base
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
        return 'softim-service-core-widget';
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
        return esc_html__('Service Core', 'softim-core');
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
            'thumb_image', [
                'label' => esc_html__('Section Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload section right thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('CORE SERVICES', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Know everything about software <span>features</span>', 'softim-core'),
                'description' => esc_html__('enter title and use "span" tag for highlight the point', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim keeps your team’s work on-brand, on message, and on time.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->end_controls_section();

//      Faq list
        $this->start_controls_section(
            'faq_list_section',
            [
                'label' => esc_html__('Faq List Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'faq_title', [
                'label' => esc_html__('Faq Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Reporting & Analysis', 'softim-core'),
                'description' => esc_html__('enter faq info', 'softim-core'),
            ]
        );
        $repeater->add_control(
            'faq_info', [
                'label' => esc_html__('Faq Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Workflow management system designed to compose and execute a series.', 'softim-core'),
                'description' => esc_html__('enter faq info', 'softim-core'),
            ]
        );

//        Button
        $repeater->add_control(
            'btn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $repeater->add_control(
            'btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('LEARN MORE', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $repeater->add_control(
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

        $this->add_control('faq_list', [
            'label' => esc_html__('Take 4 Faq List Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'media_info' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
            ],
        ]);
        $this->end_controls_section();

// Right section
        $this->start_controls_section(
            'settings_section_right',
            [
                'label' => esc_html__('Core Right Graphic Image', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'core_thumb1', [
                'label' => esc_html__('Core Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload core thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'core_thumb2', [
                'label' => esc_html__('Core Thumb Move Image 1', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload core thumb image 1', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'core_thumb3', [
                'label' => esc_html__('Core Thumb Move Image 2', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload core thumb image 2', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->end_controls_section();

//  Css style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('banner_subtitle_color', [
            'label' => esc_html__('Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-header .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info1_color', [
            'label' => esc_html__('Info 1 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-header p.info1" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_icon_color', [
            'label' => esc_html__('Media List Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li::before" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_icon_bg_color', [
            'label' => esc_html__('Media List Icon Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li::before" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_color', [
            'label' => esc_html__('Media List Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info2_color', [
            'label' => esc_html__('Info 2 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-footer p" => "color: {{VALUE}}"
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
            'selector' => "{{WRAPPER}} .btn--base:hover"
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
            'selector' => "{{WRAPPER}} .media-content .media-header .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info1_typography',
            'label' => esc_html__('Info 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-header p.info1"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'mediaList_typography',
            'label' => esc_html__('Media List Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-content .media-list li"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonOne_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info2_typography',
            'label' => esc_html__('Info 2 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-content .media-footer p"
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

        <section class="core-section ptb-120">
            <div class="core-element">
                <img src="<?php echo esc_url($settings['thumb_image']['url']); ?>" alt="element">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-header">
                            <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                            <h1 class="section-title two"><?php echo wp_kses_post($settings['title']); ?></h1>
                            <p><?php echo esc_html($settings['info']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="faq-wrapper two">
                            <?php
                            if ($settings['faq_list']) {
                                $x = 0;
                                foreach ($settings['faq_list'] as $faq) {
                                    $y++;
                                    if ($y == 1) {
                                        $active = 'active';
                                        $open = 'open';
                                    } else {
                                        $active = '';
                                        $open = '';
                                    }
                                    ?>
                                    <div class="faq-item <?php echo esc_attr($active) ?> <?php echo esc_attr($open) ?>">
                                        <h3 class="faq-title">
                                            <span class="title"><?php echo esc_html($faq['faq_title']); ?></span>
                                            <span class="right-icon"></span>
                                        </h3>
                                        <div class="faq-content">
                                            <p><?php echo esc_html($faq['faq_info']);?></p>
                                            <div class="faq-btn">
                                                <?php if ($faq['btn_status'] == 'yes'): ?>
                                                    <a href="<?php echo esc_url($faq['btn_link']['url']); ?>"
                                                       class="btn--base active"><?php echo esc_html($faq['btn_text']); ?></a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="core-thumb">
                            <img src="<?php echo esc_url($settings['core_thumb1']['url']); ?>" alt="element">
                            <div class="core-thumb-element-one">
                                <img src="<?php echo esc_url($settings['core_thumb2']['url']); ?>" alt="element">
                            </div>
                            <div class="core-thumb-element-two">
                                <img src="<?php echo esc_url($settings['core_thumb3']['url']); ?>" alt="element">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Service_Core_Widget());