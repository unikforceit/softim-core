<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Banner_Two_Widget extends Widget_Base
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
        return 'softim-banner-two-widget';
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
        return esc_html__('Banner : 02', 'softim-core');
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
                'default' => esc_html__("Soft i'm Developers", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'title2', [
                'label' => esc_html__('Title 2', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Impressive Experience", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'banner_text', [
                'label' => esc_html__('Banner Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('TECH', 'softim-core'),
                'description' => esc_html__('enter banner text', 'softim-core'),
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Build Your Innovations & Digital Future', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Personalization assumed up an excess of position in the showcasing space and has made each and every one of your messages exhausting and without feelings.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->add_control(
            'banner_arrow', [
                'label' => esc_html__('Arrow Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload arrow image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'play_text', [
                'label' => esc_html__('Play Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Play Intro', 'softim-core'),
                'description' => esc_html__('enter play text', 'softim-core'),
            ]
        );
//        $this->add_control(
//            'clients_no', [
//                'label' => esc_html__('Clients Number', 'softim-core'),
//                'type' => Controls_Manager::TEXTAREA,
//                'default' => esc_html__('<span>4,000+</span> Satisfied Clients', 'softim-core'),
//                'description' => esc_html__('enter clients number', 'softim-core'),
//            ]
//        );
        $this->add_control(
            'banner_thumb', [
                'label' => esc_html__('Banner Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('banner thumb image', 'softim-core'),
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
            'btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Contact Us', 'softim-core'),
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

        $this->start_controls_section(
            'banner_group_section',
            [
                'label' => esc_html__('Banner Group Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'element_group_image', [
                'label' => esc_html__('Element Group Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload element group image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('banner_group_list', [
            'label' => esc_html__('Take 10 Banner Group Element Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('banner_bg_color', [
            'label' => esc_html__('Banner Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Banner Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_subtitle_color', [
            'label' => esc_html__('Banner Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info_color', [
            'label' => esc_html__('Banner Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_widget_color', [
            'label' => esc_html__('Banner Clients Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-widget-wrapper::after" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_text_color', [
            'label' => esc_html__('Banner Client Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-text span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_widget_wrapper_color', [
            'label' => esc_html__('Banner Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-widget-wrapper .banner-widget-content p" => "color: {{VALUE}}"
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
        $this->add_control('info_button_normal_color', [
            'label' => esc_html__('Info Button Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .header-buttom-content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_number_button_normal_color', [
            'label' => esc_html__('Info Button Number Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .header-buttom-content span" => "color: {{VALUE}}"
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
            'name' => 'banner_span_typography',
            'label' => esc_html__('Banner Text Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-text span"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content .sub-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'clients_text_typography',
            'label' => esc_html__('Clients Text Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-widget-wrapper .banner-widget-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'clients_number_text_typography',
            'label' => esc_html__('Clients number Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-widget-wrapper .banner-widget-content p span"
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

        <section class="banner-section two">
            <?php
            if ($settings['banner_group_list']){
                $y = 0;
                foreach ($settings['banner_group_list'] as $items){
                    $y++;
                    if ($y == 1){
                        $group = 'four';
                    }else if ($y == 2){
                        $group = 'five';
                    }else if ($y == 3){
                        $group = 'eightteen';
                    }else if ($y == 4){
                        $group = 'nineteen';
                    }else if ($y == 5) {
                        $group = 'twenty';
                    }else if ($y == 6) {
                        $group = 'twenty-one';
                    }else if ($y == 7) {
                        $group = 'twenty-two';
                    }else if ($y == 8) {
                        $group = 'twenty-three';
                    }else if ($y == 9) {
                        $group = 'twenty-four';
                    }else {
                        $group = 'twenty-six';
                    }
                    ?>
                    <div class="banner-element-<?php echo esc_attr($group)?>">
                        <img src="<?php echo esc_url($items['element_group_image']['url']);?>" alt="element">
                    </div>
                <?php } } ?>

            <div class="container">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-12 mb-30">
                        <div class="banner-content two">
                            <div class="banner-content-header" data-aos="fade-up" data-aos-duration="1200">
                                <h1 class="title"><?php echo esc_html($settings['title']) ?></h1>
                                <h1 class="title"><?php echo esc_html($settings['title2']) ?></h1>
                            </div>
                            <div class="banner-area">
                                <div class="banner-text">
                                    <span><?php echo esc_html($settings['banner_text']); ?></span>
                                </div>
                                <div class="banner-left-content">
                                    <div class="banner-left-video">
                                        <div class="circle">
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                        <defs>
                                            <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                        </defs>
                                                <circle cx="150" cy="100" r="75" fill="none"/>
                                                <g>
                                                    <use xlink:href="#circlePath" fill="none"/>
                                                    <text fill="#3249b3">
                                                        <textPath xlink:href="#circlePath">Softim it solution Softim it solution Softim it solution Softim it solution</textPath>
                                                    </text>
                                                </g>
                                    </svg>
                                        </div>
                                        <div class="video-main">
                                            <div class="promo-video">
                                                <div class="waves-block">
                                                    <div class="waves wave-1"></div>
                                                    <div class="waves wave-2"></div>
                                                    <div class="waves wave-3"></div>
                                                </div>
                                            </div>
                                            <a class="video-icon video" data-rel="lightcase:myCollection" href="https://www.youtube.com/embed/LRhrNC-OC0Y">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="banner-left-arrow">
                                        <img src="<?php echo esc_url($settings['banner_arrow']['url']);?>" alt="element">
                                    </div>
                                    <div class="banner-left-intro">
                                        <span><?php echo esc_html($settings['play_text']);?></span>
                                    </div>
                                    <div class="banner-left-footer">
                                        <h3 class="title"><?php echo esc_html($settings['subtitle']) ?></h3>
                                        <p><?php echo esc_html($settings['info']) ?></p>
                                        <div class="banner-left-btn">
                                            <?php if ($settings['btn_status'] == 'yes'): ?>
                                                <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                                   class="btn--base active"><?php echo esc_html($settings['btn_text']); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-thumb">
                                    <img src="<?php echo esc_url($settings['banner_thumb']['url']);?>" alt="element">
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

Plugin::instance()->widgets_manager->register(new Softim_Banner_Two_Widget());