<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Testimonial_One_Widget extends Widget_Base
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
        return 'softim-testimonial-one-widget';
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
        return esc_html__('Testimonial : 01', 'softim-core');
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
            'bg_image', [
                'label' => esc_html__('Testimonial Backaground Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Hear from happy customers", 'softim-core'),
                'description' => esc_html__('enter title 1', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas distributed for stand-alone web-readiness.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $this->end_controls_section();

//      Graphic Loop
        $this->start_controls_section(
            'graphic_section',
            [
                'label' => esc_html__('Testimonial Graphic', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'testi_graphic_image', [
                'label' => esc_html__('Testimonial Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload testimonial graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('testi_graphic_list', [
            'label' => esc_html__('Take 3 About Graphic Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();

//      Slider Loop
        $this->start_controls_section(
            'testi_slider_section',
            [
                'label' => esc_html__('Testimonial Slider', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'testi_quote_image', [
                'label' => esc_html__('Testimonial Quote Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload testimonial quote image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'testi_text', [
                'label' => esc_html__('Testimonial Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('A testimonial is effectively a review or recommendation from a client, letting other people know how your products.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $repeater2->add_control(
            'testi_author_image', [
                'label' => esc_html__('Testimonial Author Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload testimonial author image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'testi_author_name', [
                'label' => esc_html__('Testimonial Author Name', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('MOGAN SMITH', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );

        $this->add_control('testi_slider_list', [
            'label' => esc_html__('Take Testimonial Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('about_title_1_color', [
            'label' => esc_html__('About Title 1 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('about_title_2_color', [
            'label' => esc_html__('About Title 2 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-content .title span.text--base" => "color: {{VALUE}} !important"
            ]
        ]);
        $this->add_control('about_subtitle_color', [
            'label' => esc_html__('About Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-content p.para" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('about_info_color', [
            'label' => esc_html__('About Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-content p.info" => "color: {{VALUE}}"
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
            'name' => 'title_1_typography',
            'label' => esc_html__('Title 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_typography',
            'label' => esc_html__('Title 2 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-content .title span.text--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-content p.para"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-content p.info"
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

        $title = $settings['title'];
        $info = $settings['info'];

        ?>

        <section class="client-section ptb-120">
            <?php
            if ($settings['testi_graphic_list']){
                $y = 0;
                foreach ($settings['testi_graphic_list'] as $items){
                    $y++;
                    if ($y == 1){
                        $group = 'one';
                    }else{
                        $group = 'two';
                    }
                    ?>
                    <div class="client-element-<?php echo esc_attr($group)?>">
                        <img src="<?php echo esc_url($items['testi_graphic_image']['url']);?>" alt="element">
                    </div>
                <?php } } ?>
            <div class="client-element-three">
                <img src="<?php echo esc_url($settings['bg_image']['url']);?>" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($title);?></h2>
                            <p><?php echo esc_html($info);?></p>
                        </div>
                    </div>
                </div>
                <div class="client-area">
                    <div class="row justify-content-center mb-10-none">
                        <div class="col-xl-12">
                            <div class="client-slider-area">
                                <div class="client-slider">
                                    <div class="swiper-wrapper">
                                        <?php
                                        if ($settings['testi_slider_list']){
                                            foreach ($settings['testi_slider_list'] as $slide){
                                                ?>
                                        <div class="swiper-slide">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-ratings">
                                                        <span class="ratings">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </span>
                                                    </div>
                                                    <div class="client-quote">
                                                        <img src="<?php echo esc_url($slide['testi_quote_image']['url']);?>" alt="quote">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p><?php echo esc_html($slide['testi_text']);?></p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-user-thumb">
                                                        <img src="<?php echo esc_url($slide['testi_author_image']['url']);?>" alt="client">
                                                    </div>
                                                    <div class="client-footer-user-content">
                                                        <h6 class="title"><?php echo esc_html($slide['testi_author_name']);?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            <?php } } ?>
                                    </div>
                                    <div class="client-pagination"></div>
                                    <div class="slider-prev">
                                        <i class="las la-long-arrow-alt-left"></i>
                                    </div>
                                    <div class="slider-next">
                                        <i class="las la-long-arrow-alt-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Testimonial_One_Widget());