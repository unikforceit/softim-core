<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Choose_Three_Widget extends Widget_Base
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
        return 'softim-choose-three-widget';
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
        return esc_html__('Choose : 03', 'softim-core');
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
                'description' => esc_html__('upload section thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub-title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("WHY CHOOSE US?", 'softim-core'),
                'description' => esc_html__('enter subtitle', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Learn Why Softim Is Best Choice For You", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->end_controls_section();

//      Choose slider Loop
        $this->start_controls_section(
            'choose_slider_section',
            [
                'label' => esc_html__('Choose Slider Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'choose_icon', [
                'label' => esc_html__('Choose Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload choose image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater->add_control(
            'choose_title', [
                'label' => esc_html__('Choose Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Investing Features', 'softim-core'),
                'description' => esc_html__('enter choose title', 'softim-core'),
            ]
        );
        $repeater->add_control(
            'choose_info', [
                'label' => esc_html__('Choose Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dummy text dolor best amet console procedez now!', 'softim-core'),
                'description' => esc_html__('enter choose info', 'softim-core'),
            ]
        );

        $this->add_control('choose_list', [
            'label' => esc_html__('Take 5 Choose Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
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
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
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
                'label' => esc_html__('Styling Tab Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('title_1_color_active', [
            'label' => esc_html__('Active Tab Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-tab .nav-tabs .nav-link.active" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_1_color', [
            'label' => esc_html__('Inactive Tab Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-tab .nav-tabs .nav-link" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_2_color', [
            'label' => esc_html__('Tab Details Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-content h4.title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_2_color', [
            'label' => esc_html__('Tab Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-content p.info2" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('tab_number_color1', [
            'label' => esc_html__('Work Color 1', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .odometer-inside .odometer-digit" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('tab_numberDec_color1', [
            'label' => esc_html__('Work Dec Color 1', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .statistics-content p" => "color: {{VALUE}}"
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
            'name' => 'title_typography',
            'label' => esc_html__('Title 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p.info"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_typography',
            'label' => esc_html__('Tab Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-tab .nav-tabs .nav-link"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_tab_typography',
            'label' => esc_html__('Tab Details Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-content h4.title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_tab_details_typography',
            'label' => esc_html__('Tab Details Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-content p.info2"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_odoNumber_typography',
            'label' => esc_html__('Work Number Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .odometer-inside .odometer-digit"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_odoTitle_typography',
            'label' => esc_html__('Work Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .statistics-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
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

        <section class="service-section two four ptb-120 chooseSliderThree">
            <div class="service-element-six">
                <img src="<?php echo esc_url($settings['thumb_image']['url']); ?>" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 col-lg-8 text-center">
                        <div class="section-header">
                            <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                            <h1 class="section-title"><?php echo esc_html($settings['title']); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="service-slider-two">
                    <div class="swiper-wrapper">
                        <?php
                        if ($settings['choose_list']) {
                            foreach ($settings['choose_list'] as $item) {
                                ?>
                                <div class="swiper-slide">
                                    <div class="service-item two four">
                                        <div class="service-icon">
                                            <img src="<?php echo esc_url($item['choose_icon']['url']); ?>" alt="icon">
                                        </div>
                                        <div class="service-content">
                                            <h3 class="title"><?php echo esc_html($item['choose_title']); ?></h3>
                                            <p><?php echo esc_html($item['choose_info']); ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php }
                        } ?>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Choose_Three_Widget());