<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Testimonial_Four_Widget extends Widget_Base
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
        return 'softim-testimonial-four-widget';
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
        return esc_html__('Testimonial : 04', 'softim-core');
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
            'graphic_image', [
                'label' => esc_html__('Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Subtitle', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("FEEDBACK", 'softim-core'),
                'description' => esc_html__('enter Subtitle', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("What are saying our customers", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Get the heavy metal debit card that saves and invests for you every time you spend, with Real-Time Roun Ups, Sm eposit, no hidden fees, over 55,000.", 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core')
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
                'default' => esc_html__('7 DAYS FREE TRAIL', 'softim-core'),
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

//      Slider Loop
        $this->start_controls_section(
            'testi_slider_section',
            [
                'label' => esc_html__('Testimonial Slider', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'slider_bg_image', [
                'label' => esc_html__('Slider Background Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload slider background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'testi_text', [
                'label' => esc_html__('Testimonial Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Offer seamless banking solutions for your business customers directly in your product. Offer seamless banking.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $repeater2->add_control(
            'testi_author_name', [
                'label' => esc_html__('Testimonial Author Name', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Neal Kapur', 'softim-core'),
                'description' => esc_html__('enter author name', 'softim-core'),
            ]
        );
        $repeater2->add_control(
            'testi_author_title', [
                'label' => esc_html__('Testimonial Author Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Head of Visa Ventures', 'softim-core'),
                'description' => esc_html__('enter author title', 'softim-core'),
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

        <section class="client-section three pt-120">
            <div class="client-element-four">
                <img src="<?php echo esc_url($settings['graphic_image']['url']); ?>" alt="element">
            </div>
            <div class="container">
                <div class="client-area">
                    <div class="row justify-content-center align-items-center mb-30-none">
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="client-left-content">
                                <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                                <h1 class="title"><?php echo esc_html($settings['title']); ?></h1>
                                <p><?php echo esc_html($settings['info']); ?></p>
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <div class="client-left-btn">
                                        <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                           class="btn--base active"><?php echo esc_html($settings['btn_text']); ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mb-30">
                            <div class="client-big-thumb clientSlider">
                                <img src="<?php echo esc_url($settings['slider_bg_image']['url']); ?>" alt="client">
                                <div class="client-slider-area two">
                                    <div class="client-slider-three">
                                        <div class="swiper-wrapper">
                                            <?php
                                            if ($settings['testi_slider_list']) {
                                                foreach ($settings['testi_slider_list'] as $slide) {
                                                    ?>
                                                    <div class="swiper-slide">
                                                        <div class="client-item two three">
                                                            <div class="client-ratings">
                                                                <span class="ratings">
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                    <i class="fas fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="client-content">
                                                                <p><?php echo esc_html($slide['testi_text']); ?></p>
                                                            </div>
                                                            <div class="client-footer two">
                                                                <div class="client-footer-user-content">
                                                                    <h4 class="title"><?php echo esc_html($slide['testi_author_name']); ?></h4>
                                                                    <span class="sub-title"><?php echo esc_html($slide['testi_author_title']) ?></span>
                                                                </div>
                                                                <div class="slider-arrow">
                                                                    <div class="slider-prev">
                                                                        <i class="las la-arrow-left"></i>
                                                                    </div>
                                                                    <div class="slider-next">
                                                                        <i class="las la-arrow-right"></i>
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
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Testimonial_Four_Widget());