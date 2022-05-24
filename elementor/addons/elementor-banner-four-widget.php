<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Banner_Four_Widget extends Widget_Base
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
        return 'softim-banner-four-widget';
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
        return esc_html__('Banner : 04', 'softim-core');
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
            'banner_four_section',
            [
                'label' => esc_html__('Banner Left Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'banner_subtitle_img', [
                'label' => esc_html__('Banner Subtitle Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload subtitle image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'banner_subtitle', [
                'label' => esc_html__('Banner Subtitle', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('BEST APP LANDING PAGE', 'softim-core'),
                'description' => esc_html__('enter banner subtitle', 'softim-core'),
            ]
        );
        $this->add_control(
            'banner_title', [
                'label' => esc_html__('Banner Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('All in one mobile banking solutions for creative persons', 'softim-core'),
                'description' => esc_html__('enter banner title', 'softim-core'),
            ]
        );
        $this->add_control(
            'banner_info', [
                'label' => esc_html__('Banner Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('From easy money management,crypto investments and trade. Open your account.', 'softim-core'),
                'description' => esc_html__('enter banner info', 'softim-core'),
            ]
        );
        $this->add_control(
            'form', [
                'label' => esc_html__('Form', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter form', 'softim-core'),
            ]
        );

        $this->end_controls_section();

//Banner Graphic Settings
        $this->start_controls_section(
            'banner_element_section',
            [
                'label' => esc_html__('Banner Graphic Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'element_image', [
                'label' => esc_html__('Element Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload element image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('banner_element_list', [
            'label' => esc_html__('Take 3 Banner Element Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls()
        ]);
        $this->end_controls_section();

//Banner 04 Right Section

        $this->start_controls_section(
            'banner_slider_section',
            [
                'label' => esc_html__('Banner Slider Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'banner_right_thumb', [
                'label' => esc_html__('Banner Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'banner_slider_img', [
                'label' => esc_html__('Banner Slider Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload slider image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('banner_slider_list', [
            'label' => esc_html__('Take 3 Slider Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();

//    Css Style Section
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Banner Right Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('banner_subtitle_color', [
            'label' => esc_html__('Banner Subtitle Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Banner Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content.three .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info_color', [
            'label' => esc_html__('Banner Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content.three p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_form_bg_color', [
            'label' => esc_html__('Banner Form Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-form input" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_form_color', [
            'label' => esc_html__('Banner Form Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-form input" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_form_placeholder_color', [
            'label' => esc_html__('Banner Form Placeholder Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-form input::placeholder-shown" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_form_btn_icon_color', [
            'label' => esc_html__('Banner Button Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn--base i" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_right_thumb_bg_color', [
            'label' => esc_html__('Banner Right Thumb Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-thumb-two" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_right_slider_bullet_active_bg_color', [
            'label' => esc_html__('Slider Active Bullet Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-slider .swiper-pagination .swiper-pagination-bullet-active" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_right_slider_bullet_bg_color', [
            'label' => esc_html__('Slider Bullet Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-slider .swiper-pagination .swiper-pagination-bullet" => "background: {{VALUE}}"
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
        $this->add_control('divider_060', [
            'type' => Controls_Manager::DIVIDER
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
//  Border Radius
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
            'name' => 'banner_subtitle_typography',
            'label' => esc_html__('Banner Subtitle', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content .sub-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'banner_title_typography',
            'label' => esc_html__('Banner Title', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content.three .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'banner_info_typography',
            'label' => esc_html__('Banner Info', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content.three p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'banner_input_typography',
            'label' => esc_html__('Banner Input', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-form input"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_icon_typography',
            'label' => esc_html__('Button Icon', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base i"
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

        <section class="banner-section two three">
            <?php
            if ($settings['banner_element_list']) {
                $x = 0;
                foreach ($settings['banner_element_list'] as $item) {
                    $x++;
                    if ($x == 1) {
                        $no = 'seven';
                    } else if ($x == 2) {
                        $no = 'eight';
                    } else {
                        $no = 'nine';
                    }
                    ?>
                    <div class="banner-element-twenty-<?php echo esc_attr($no) ?>">
                        <img src="<?php echo esc_url($item['element_image']['url']); ?>" alt="element">
                    </div>
                <?php }
            } ?>
            <div class="container custom-container">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="banner-content two three">
                            <div class="banner-content">
                                <span class="sub-title">
                                    <img class="mr-2"
                                         src="<?php echo esc_url($settings['banner_subtitle_img']['url']); ?>"
                                         alt="element">
                                    <?php echo esc_html($settings['banner_subtitle']); ?>
                                </span>
                                <h1 class="title"><?php echo esc_html($settings['banner_title']); ?></h1>
                                <p><?php echo esc_html($settings['banner_info']); ?></p>
                                <?php echo do_shortcode($settings['form']); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="banner-thumb-two">
                            <div class="banner-thumb-two-element">
                                <img src="<?php echo esc_url($settings['banner_right_thumb']['url']); ?>" alt="element">
                            </div>
                            <div class="banner-slider banner-slider-home-04">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($settings['banner_slider_list']) {
                                        foreach ($settings['banner_slider_list'] as $slide) {
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="banner-thumb-item">
                                                    <img src="<?php echo esc_url($slide['banner_slider_img']['url']); ?>"
                                                         alt="element">
                                                </div>
                                            </div>
                                        <?php }
                                    } ?>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Banner_Four_Widget());