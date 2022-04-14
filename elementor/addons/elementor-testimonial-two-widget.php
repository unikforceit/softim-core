<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Testimonial_Two_Widget extends Widget_Base
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
        return 'softim-testimonial-two-widget';
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
        return esc_html__('Testimonial : 02', 'softim-core');
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
        $this->add_control(
            'testi_client', [
                'label' => esc_html__('Testimonial Client Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Testimonial right client image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'bg_image_2', [
                'label' => esc_html__('Testimonial Right Backaground Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Background right image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
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
            'label' => esc_html__('Take 2 Testimonial Graphic Item', 'softim-core'),
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
            'testi_text', [
                'label' => esc_html__('Testimonial Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('A testimonial is effectively a review or recommendation from a client, letting other people know how your products.', 'softim-core'),
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
                'default' => esc_html__('Sr. Consultant', 'softim-core'),
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
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('about_info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header  p.info" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_1_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p.info"
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
        $bg1 = $settings['bg_image']['url'];
        $bg2 = $settings['bg_image_2']['url'];
        $testiClient = $settings['testi_client']['url'];

        ?>

        <section class="client-section two pb-120">
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
                <img src="<?php echo esc_url($bg1);?>" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($title);?></h2>
                            <p class="info"><?php echo esc_html($info);?></p>
                        </div>
                    </div>
                </div>
                <div class="client-area">
                    <div class="row justify-content-center align-items-end mb-30-none">
                        <div class="col-xl-8 col-lg-8 col-md-6 mb-30">
                            <div class="client-slider-area two">
                                <div class="client-slider-two">
                                    <div class="swiper-wrapper">
        <?php
        if ($settings['testi_slider_list']){
            foreach ($settings['testi_slider_list'] as $slide){
                ?>
                                        <div class="swiper-slide">
                                            <div class="client-item">
                                                <div class="client-header">
                                                    <div class="client-quote">
                                                        <img src="<?php echo esc_url($slide['testi_quote_image']['url']);?>" alt="quote">
                                                    </div>
                                                    <div class="client-thumb">
                                                        <img src="<?php echo esc_url($slide['testi_author_image']['url']);?>" alt="quote">
                                                    </div>
                                                </div>
                                                <div class="client-content">
                                                    <p><?php echo esc_html($slide['testi_text']);?></p>
                                                </div>
                                                <div class="client-footer">
                                                    <div class="client-footer-left">
                                                        <h4 class="title"><?php echo esc_html($slide['testi_author_name']);?></h4>
                                                        <span class="sub-title"><?php echo esc_html($slide['testi_author_title']);?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
            <?php } } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                            <div class="client-right-thumb">
                                <img src="<?php echo esc_url($bg2);?>" alt="client">
                                <div class="client-thumb-element">
                                    <img src="<?php echo esc_url($testiClient);?>" alt="element">
                                </div>
                                <div class="client-thumb-overlay">
                                    <div class="client-thumb-video">
                                        <div class="video-main">
                                            <div class="promo-video">
                                                <div class="waves-block">
                                                    <div class="waves wave-1"></div>
                                                    <div class="waves wave-2"></div>
                                                    <div class="waves wave-3"></div>
                                                </div>
                                            </div>
                                            <?php if ($settings['btn_status'] == 'yes'): ?>
                                                <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                                   class="video-icon video" data-rel="lightcase:myCollection">
                                                    <i class="las la-play"></i>
                                                </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Testimonial_Two_Widget());