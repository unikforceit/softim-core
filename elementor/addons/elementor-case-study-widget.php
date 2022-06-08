<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Case_Study_Widget extends Widget_Base
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
        return 'softim-case-study-widget';
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
        return esc_html__('Case Study', 'softim-core');
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
                'label' => esc_html__('Title 1', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Why Choose Softim?", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, and our clients love our work.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $this->end_controls_section();

//      Tab Loop
        $this->start_controls_section(
            'case_study_section',
            [
                'label' => esc_html__('Tab Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'tab_title', [
                'label' => esc_html__('Tab Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("All", 'softim-core'),
                'description' => esc_html__('enter tab title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_thumb_image', [
                'label' => esc_html__('Tab Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload tab thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'tab_details_title', [
                'label' => esc_html__('Tab Details Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Top Software Developer", 'softim-core'),
                'description' => esc_html__('enter tab details title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_info', [
                'label' => esc_html__('Tab Details Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Welcome To Softim, a software development company, helps to digitize businesses by focusing on client’s business challenges, needs, pain points and providing business-goals-oriented software solutions. We value close transparent cooperation and encourage our clients to participate actively in the project development life cycle.", 'softim-core'),
                'description' => esc_html__('enter tab details info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_1_status', [
                'label' => esc_html__('Work 1 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 1', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no1', [
                'label' => esc_html__('Tab Work Number 1', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("150", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no1_dec', [
                'label' => esc_html__('Work 1 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Awesome Solutions", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_2_status', [
                'label' => esc_html__('Work 2 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 2', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no2', [
                'label' => esc_html__('Tab Work Number 2', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("350", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no2_dec', [
                'label' => esc_html__('Work 2 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Trusted Clients", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_3_status', [
                'label' => esc_html__('Work 3 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 3', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no3', [
                'label' => esc_html__('Tab Work Number 3', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("25", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no3_dec', [
                'label' => esc_html__('Work 3 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Served Countries", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Contact us', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $repeater2->add_control(
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
        $repeater2->add_control(
            'btn_video_status', [
                'label' => esc_html__('Video Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide video button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_video_link', [
                'label' => esc_html__('Button URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter video button url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );

        $this->add_control('tab_list', [
            'label' => esc_html__('Take 3 Tab Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
        $this->end_controls_section();

// Start style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Case Study Header', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('title_color', [
            'label' => esc_html__('Header Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header p" => "color: {{VALUE}}"
            ]
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
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p"
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

        <section class="case-study-section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header">
                                <h2 class="section-title">Our Recent Case Study</h2>
                                <p>Credibly grow premier ideas rather than bricks-and-clicks strategic theme areas
                                    distributed for stand-alone web-readiness.</p>
                            </div>
                            <ul class="nav nav-pills mb-3">
                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#all">All</a></li>
                                <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#cloud-services">Cloud Services</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#cyber-security">Cyber Security</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#it-security">IT Security</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade" id="all">
                    <div class="container-fluid">
                        <div class="row mb-10-none">
                            <div class="col-xl-10 offset-xl-2">
                                <div class="case-study-slider-wrapper">
                                    <div class="case-study-slider oh">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-01.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-02.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-03.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-text">Next</div>
                                        <div class="prev-text">Prev</div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade show active" id="cloud-services">
                    <div class="container-fluid">
                        <div class="row mb-10-none">
                            <div class="col-xl-10 offset-xl-2">
                                <div class="case-study-slider-wrapper">
                                    <div class="case-study-slider oh">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-01.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-02.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-03.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-text">Next</div>
                                        <div class="prev-text">Prev</div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="cyber-security">
                    <div class="container-fluid">
                        <div class="row mb-10-none">
                            <div class="col-xl-10 offset-xl-2">
                                <div class="case-study-slider-wrapper">
                                    <div class="case-study-slider oh">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-01.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-02.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-03.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-text">Next</div>
                                        <div class="prev-text">Prev</div>
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="it-security">
                    <div class="container-fluid">
                        <div class="row mb-10-none">
                            <div class="col-xl-10 offset-xl-2">
                                <div class="case-study-slider-wrapper">
                                    <div class="case-study-slider oh">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-01.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-02.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="case-study-single-item">
                                                    <div class="thumbnail">
                                                        <img src="assets/images/home-three/case-03.png" alt="">
                                                    </div>
                                                    <div class="content">
                                                        <h5 class="title">Product Engineering</h5>
                                                        <p>Trusted by popular platforms like Shopify, ARN Tech offers
                                                            result-driven solutions to build.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="next-text">Next</div>
                                        <div class="prev-text">Prev</div>
                                        <div class="swiper-pagination"></div>
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

Plugin::instance()->widgets_manager->register(new Softim_Case_Study_Widget());