<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Header_Area_Slider_Two_Widget extends Widget_Base
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
        return 'softim-header-slider-two-widget';
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
        return esc_html__('Header Slider: 02', 'softim-core');
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
    protected function _register_controls()
    {

        $this->start_controls_section(
            'left_settings_section',
            [
                'label' => esc_html__('Header Left Section Contents', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'background_image', [
                'label' => esc_html__('Background Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Book a private jet instantly', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'feature-title', [
                'label' => esc_html__('Feature Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->add_control(
            'description', [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Curly Airline proudly raises the bar and exceeds the standard for luxury and corporate private jet charter services. We pride ourselves on offering a professional service.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
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
                'default' => esc_html__('Make Your Trip', 'softim-core'),
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
        $this->add_control(
            'info_btn_status_02', [
                'label' => esc_html__('Button Two Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $this->add_control(
            'info_btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Request Quote', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['info_btn_status_02' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link-02', [
                'label' => esc_html__('Button URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button url', 'softim-core'),
                'condition' => ['info_btn_status_02' => 'yes']
            ]
        );
        $this->end_controls_section();


        $this->start_controls_section(
            'right_settings_section',
            [
                'label' => esc_html__('Header Right Section Contents', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'craft_image', [
                'label' => esc_html__('Craft Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'craft_shape_image', [
                'label' => esc_html__('Craft Shape Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(

            'link',
            [
                'label' => esc_html__('Link', 'softim-core'),
                'type' => Controls_Manager::URL,
                'description' => esc_html__('enter url.', 'softim-core'),
                'default' => [
                    'url' => ''
                ]
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-play',
                    'library' => 'solid',
                ]
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon_box_settings_section',
            [
                'label' => esc_html__('Icon Box General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'icon_box_title',
            [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('Best Food Quality', 'softim-core'),
            ]
        );
        $this->add_control(
            'icon_box_link',
            [
                'label' => esc_html__('Link', 'softim-core'),
                'type' => Controls_Manager::URL,
                'description' => esc_html__('enter url.', 'softim-core'),
                'default' => [
                    'url' => ''
                ]
            ]
        );
        $this->add_control(
            'box_icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'solid',
                ]
            ]
        );
        $this->add_control(
            'icon_box_description',
            [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter text.', 'softim-core'),
                'default' => esc_html__('Laoreet donec ultrices tincidunt arcu. Ultrices auctor augue lectus.', 'softim-core')
            ]
        );
        $this->add_control('divider_011', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control(
            'icon_box_title_two',
            [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('Connect With Adam & Start Learning', 'softim-core'),
            ]
        );
        $this->add_control(
            'tutor_image', [
                'label' => esc_html__('Tutor Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'icon_box_link_two',
            [
                'label' => esc_html__('Link', 'softim-core'),
                'type' => Controls_Manager::URL,
                'description' => esc_html__('enter url.', 'softim-core'),
                'default' => [
                    'url' => ''
                ]
            ]
        );
        $this->add_control(
            'icon_box_button_two_title',
            [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter text.', 'softim-core'),
                'default' => esc_html__('join Now', 'softim-core')
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('sub_title_color', [
            'label' => esc_html__('Slider Subtitle Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .subtitle" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('sub_title_extra_color', [
            'label' => esc_html__('Slider Subtitle Extra Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .subtitle span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('slider_title_color', [
            'label' => esc_html__('Slider Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('feature_title_color', [
            'label' => esc_html__('Slider Feature Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .feature-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('feature_title_extra_color', [
            'label' => esc_html__('Slider Feature Extra Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .feature-title span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('slider_para_color', [
            'label' => esc_html__('Slider Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_responsive_control('padding', [
            'label' => esc_html__('Padding', 'softim-core'),
            'type' => Controls_Manager::DIMENSIONS,
            'size_units' => ['px', 'em'],
            'allowed_dimensions' => ['top', 'bottom'],
            'selectors' => [
                '{{WRAPPER}} .banner-area' => 'padding-top: {{TOP}}{{UNIT}};padding-bottom: {{BOTTOM}}{{UNIT}};'
            ],
            'description' => esc_html__('set padding for header area ', 'softim-core')
        ]);
        $this->add_control('overlay_color', [
            'label' => esc_html__('Overlay Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .banner-area.header-bg::before' => 'background-color:{{VALUE}};'
            ],
        ]);

        $this->end_controls_section();

        /* button styling */
        $this->start_controls_section('header_button_section', [
            'label' => esc_html__('Button Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);

        $this->start_controls_tabs('button_styling');
        $this->start_controls_tab('normal_style', [
            'label' => esc_html__('Button Normal', "softim-core")
        ]);
        $this->add_control('button_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank"
        ]);
        $this->add_control('divider_060', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control('info_button_normal_color', [
            'label' => esc_html__('Request Button Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .btn-wrap .blank-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank:hover"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank:hover"
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
                    '{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        /* button styling end */

        $this->start_controls_section(
            'video_hover_settings_section',

            [
                'label' => esc_html__('Video Player Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control('shape_bg_color', [
            'label' => esc_html__('Circle Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .video-play-btn-02' => "background-color:{{VALUE}}"
            ]
        ]);

        $this->add_control('icon_bg_color', [
            'label' => esc_html__('Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .video-play-btn-02' => "color:{{VALUE}}"
            ]
        ]);

        $this->add_control('border_bg_color', [

            'label' => esc_html__('Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .video-play-btn-02:before' => "border-color:{{VALUE}}"
            ]

        ]);

        $this->add_control(
            'shape-radius',
            [
                'label' => esc_html__('Shape Radius', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%', 'em'],
                'selectors' => [
                    '{{WRAPPER}} .video-play-btn-02' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );

        $this->add_group_control(

            Group_Control_Border::get_type(),
            [
                'name' => 'shape_border',
                'label' => esc_html__('Shape Border', 'softim-core'),
                'selector' => '{{WRAPPER}} .video-play-btn-02:before',
            ]
        );

        $this->add_control(
            'shape_height',
            [
                'label' => esc_html__('Shape Height', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'px' => 'px',
                    'size' => 120,
                ],
                'selectors' => [
                    '{{WRAPPER}} .video-play-btn-02' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'shape_width',
            [
                'label' => esc_html__('Shape Width', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 5000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'px' => 'px',
                    'size' => 120,
                ],
                'selectors' => [

                    '{{WRAPPER}}  .video-play-btn-02' => 'width: {{SIZE}}{{UNIT}};',

                ],

            ]);
        $this->end_controls_section();

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .subtitle"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'feature_title_typography',
            'label' => esc_html__('Feature Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .feature-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'paragraph_title_typography',
            'label' => esc_html__('Paragraph Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .boxed-btn.blank"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_number_button_typography',
            'label' => esc_html__('Request Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner-02 .header-bottom .btn-wrap .blank-btn"
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
        $image_id = $settings['background_image']['id'];
        $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full', false)[0] : '';


        $craft_image_id = $settings['craft_image']['id'];
        $craft_image_url = !empty($craft_image_id) ? wp_get_attachment_image_src($craft_image_id, 'full', false)[0] : '';
        $craft_image_alt = get_post_meta($craft_image_id, '_wp_attachment_image_alt', true);

        $craft_shape_image_id = $settings['craft_shape_image']['id'];
        $craft_shape_image_url = !empty($craft_shape_image_id) ? wp_get_attachment_image_src($craft_shape_image_id, 'full', false)[0] : '';
        $craft_shape_image_alt = get_post_meta($craft_shape_image_id, '_wp_attachment_image_alt', true);

        $tutor_image_id = $settings['tutor_image']['id'];
        $tutor_image_url = !empty($tutor_image_id) ? wp_get_attachment_image_src($tutor_image_id, 'full', false)[0] : '';
        $tutor_image_alt = get_post_meta($tutor_image_id, '_wp_attachment_image_alt', true);


        if (!empty($settings['icon_box_link']['url'])) {
            $this->add_link_attributes('link_wrapper', $settings['icon_box_link']);
        }
        if (!empty($settings['icon_box_link_two']['url'])) {
            $this->add_link_attributes('link_wrapper_two', $settings['icon_box_link_two']);
        }
        ?>
        <div class="header-carousel-wrapper softim-rtl-slider">
            <div class="banner-area header-bg-02"
                 style="background-image: url(<?php echo esc_url($image_url) ?>)">
                <div class="container custom-container style-01">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-6">
                            <div class="banner-inner-02">
                                <?php if (!empty($settings['subtitle'])): ?>
                                    <span class="subtitle">
                                        	<?php
                                            $subtitle = str_replace(['{c}', '{/c}'], ['<span>', '</span>'], $settings['subtitle']);
                                            print wp_kses($subtitle, softim_core()->kses_allowed_html('all'));
                                            ?>
                                    </span>
                                <?php endif; ?>
                                <h2 class="title"><?php echo esc_html($settings['title']) ?></h2>
                                <?php if (!empty($settings['feature-title'])): ?>
                                    <span class="feature-title">
                                        	<?php
                                            $subtitle = str_replace(['{c}', '{/c}'], ['<span>', '</span>'], $settings['feature-title']);
                                            print wp_kses($subtitle, softim_core()->kses_allowed_html('all'));
                                            ?>
                                    </span>
                                <?php endif; ?>
                                <?php if (!empty($settings['description'])): ?>
                                    <p>
                                        <?php echo esc_html($settings['description']) ?>
                                    </p>
                                <?php endif; ?>
                                <div class="header-bottom">
                                    <div class="btn-wrap desktop-left">
                                        <?php if ($settings['btn_status'] == 'yes'): ?>
                                            <a href="<?php echo esc_url($settings['btn_link']['url']) ?>"
                                               class="boxed-btn blank"><?php echo esc_html($settings['btn_text']) ?><i
                                                        class="flaticon-right-arrow-2 ml-2"></i></a>
                                        <?php endif; ?>
                                        <?php if ($settings['info_btn_status_02'] == 'yes'): ?>
                                            <a href="<?php echo esc_url($settings['btn_link_02']['url']) ?>"
                                               class="blank-btn"><?php echo esc_html($settings['info_btn_text']) ?><i
                                                        class="flaticon-right-arrow-2 ml-2"></i></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-6">
                            <div class="hover fadeIn animated wow">
                                <a <?php echo softim_core()->render_elementor_link_attributes($settings['link']) ?> class="video-play-btn-02 mfp-iframe"><?php echo softim_core()->render_elementor_icons($settings['icon']) ?></a>
                            </div>
                            <div class="header-right-image">
                                <div class="craft-img">
                                    <img src="<?php echo esc_url($craft_image_url) ?>"
                                         alt="<?php echo esc_url($craft_image_alt) ?>">
                                </div>
                                <div class="craft-img-shape">
                                    <img src="<?php echo esc_url($craft_shape_image_url) ?>"
                                         alt="<?php echo esc_url($craft_shape_image_alt) ?>">
                                </div>
                            </div>
                            <div class="header-icon-box-item">
                                <div class="icon">
                                    <?php
                                    Icons_Manager::render_icon($settings['box_icon'], ['aria-hidden' => 'true']);
                                    ?>
                                </div>
                                <div class="content">
                                    <?php
                                    if (!empty($settings['icon_box_title'])) {
                                        printf('<a %1$s ><h3 class="title">%2$s</h3></a>', $this->get_render_attribute_string('link_wrapper'), esc_html($settings['icon_box_title']));
                                    }
                                    if (!empty($settings['icon_box_description'])) {
                                        printf('<p>%1$s</p>', esc_html($settings['icon_box_description']));
                                    } ?>
                                </div>
                            </div>
                            <div class="header-icon-box-item style-01">
                                <div class="thumb">
                                    <img src="<?php echo esc_url($tutor_image_url) ?>"
                                         alt="<?php echo esc_url($tutor_image_alt) ?>">
                                </div>
                                <div class="content">
                                    <?php
                                    if (!empty($settings['icon_box_title_two'])) {
                                        printf('<h3 class="title">%1$s</h3>', esc_html($settings['icon_box_title_two']));
                                    }
                                    ?>
                                    <a class="header-icon-box-btn"
                                       href="<?php echo $this->get_render_attribute_string('link_wrapper') ?>"><?php echo esc_html($settings['icon_box_button_two_title']) ?> </a>
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

Plugin::instance()->widgets_manager->register_widget_type(new Softim_Header_Area_Slider_Two_Widget());