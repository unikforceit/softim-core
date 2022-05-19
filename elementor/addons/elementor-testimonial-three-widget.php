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
        return esc_html__('Testimonial : 03', 'softim-core');
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
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Happy Customer Says", 'softim-core'),
                'description' => esc_html__('enter title 1', 'softim-core')
            ]
        );
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
            'testi_title', [
                'label' => esc_html__('Testimonial Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Digital Marketing Services', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $repeater2->add_control(
            'testi_text', [
                'label' => esc_html__('Testimonial Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Maecenas posuere neque et volutpat accumsan. Aliquam hendrerit tincidunt diam eu imperdiet. Etiam dictum suscipit tempus. Vestibulum eget pellentesque dolor.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
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
        $repeater2->add_control(
            'testi_author_title', [
                'label' => esc_html__('Testimonial Author Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Founder & CEO - ARN Tech', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );

        $this->add_control('testi_slider_list', [
            'label' => esc_html__('Take Testimonial Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
        $this->end_controls_section();

//        Start Styling section

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Testimonial Header Title', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('blog_header_title_color', [
            'label' => esc_html__('Blog Header Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'testimonial_item_section',
            [
                'label' => esc_html__('Testimonial Item', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('testi_item_icon_color', [
            'label' => esc_html__('Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .icon i" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_icon_border_color', [
            'label' => esc_html__('Icon Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .icon i" => "border-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .icon .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_info_color', [
            'label' => esc_html__('Customer says Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_author_color', [
            'label' => esc_html__('Author Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .designation-wrap .designation .name" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_author_p_color', [
            'label' => esc_html__('Author Position Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .designation-wrap .designation .position" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('testi_item_author_r_color', [
            'label' => esc_html__('Author Rating Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .client-single-item .content .designation-wrap .ratings i" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'section_header_typography',
            'label' => esc_html__('Testimonial Header Title', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'testi_item_icon_typography',
            'label' => esc_html__('Testi Item Icon', 'softim-core'),
            'selector' => "{{WRAPPER}} .client-single-item .content .icon i"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'testi_item_title_typography',
            'label' => esc_html__('Testi Item Title', 'softim-core'),
            'selector' => "{{WRAPPER}} .client-single-item .content .icon .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'testi_item_info_typography',
            'label' => esc_html__('Customer says text', 'softim-core'),
            'selector' => "{{WRAPPER}} .client-single-item .content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'testi_item_author_typography',
            'label' => esc_html__('Author text', 'softim-core'),
            'selector' => "{{WRAPPER}} .client-single-item .content .designation-wrap .designation .name"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'testi_item_author_p_typography',
            'label' => esc_html__('Author Position text', 'softim-core'),
            'selector' => "{{WRAPPER}} .client-single-item .content .designation-wrap .designation .position"
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

        ?>

        <section class="happy-client-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($title); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center align-items-end mb-30-none">
                    <div class="col-xl-12 col-lg-12 col-md-12 mb-30">
                        <div class="client-slider-area two">
                            <div class="client-slider-two">
                                <div class="swiper-wrapper">
                                    <?php
                                    if ($settings['testi_slider_list']) {
                                        foreach ($settings['testi_slider_list'] as $slide) {
                                            ?>
                                            <div class="swiper-slide">
                                                <div class="client-single-item">
                                                    <div class="content">
                                                        <div class="icon">
                                                            <i class="fa fa-quote-right"></i>
                                                            <h4 class="title"><?php echo esc_html($slide['testi_title']); ?></h4>
                                                        </div>
                                                        <p><?php echo esc_html($slide['testi_text']); ?></p>
                                                        <div class="designation-wrap">
                                                            <div class="designation">
                                                                <h6 class="name"><?php echo esc_html($slide['testi_author_name']); ?></h6>
                                                                <span class="position"><?php echo esc_html($slide['testi_author_title']); ?></span>
                                                            </div>
                                                            <div class="ratings">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                    </div>
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
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Testimonial_Three_Widget());