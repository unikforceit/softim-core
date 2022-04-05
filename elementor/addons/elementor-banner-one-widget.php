<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Banner_One_Widget extends Widget_Base
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
        return 'softim-banner-one-widget';
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
        return esc_html__('Banner : 01', 'softim-core');
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
            'banner_text', [
                'label' => esc_html__('Banner Test', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('TECH', 'softim-core'),
                'description' => esc_html__('enter banner text', 'softim-core'),
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Smarter Way to Serve Digital Product Marketing', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
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
            'animate_icon',
            [
                'label' => esc_html__('Animation Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ]
            ]
        );
        $this->add_control(
            'animate_icon_02',
            [
                'label' => esc_html__('Animation Icon Two', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ]
            ]
        );
        $this->add_control(
            'animate_icon_03',
            [
                'label' => esc_html__('Animation Icon Three', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-plus',
                    'library' => 'solid',
                ]
            ]
        );
        $this->add_control(
            'plane_image', [
                'label' => esc_html__('Plane Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'client_image', [
                'label' => esc_html__('Client Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload client image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'clients_no', [
                'label' => esc_html__('Clients Number', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('<span>4,000+</span> Satisfied Clients', 'softim-core'),
                'description' => esc_html__('enter clients number', 'softim-core'),
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
                'default' => esc_html__("Let's Talk", 'softim-core'),
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
            'social_icon_section',
            [
                'label' => esc_html__('Social Icon Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();

        $repeater->add_control(
            'list_icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ]
            ]
        );

        $repeater->add_control(
            'list_icon_link',
            [
                'label' => __('Link', 'softim-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => __('https://example.com', 'softim-core'),
                'show_external' => true
            ]
        );
        $this->add_control('social_icon_list', [
            'label' => esc_html__('Social Icon List', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls()
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('slider_title_color', [
            'label' => esc_html__('Slider Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('slider_subtitle_bg_color', [
            'label' => esc_html__('Slider Sub Title Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner .subtitle" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('slider_subtitle_color', [
            'label' => esc_html__('Slider Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-area .banner-inner .subtitle" => "color: {{VALUE}}"
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
                "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn"
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
                "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn:hover"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn:hover"
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
                    '{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .banner-inner .subtitle"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-bottom .btn-wrap .boxed-btn"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_button_typography',
            'label' => esc_html__('Info Text Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-buttom-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_number_button_typography',
            'label' => esc_html__('Info number Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-area .header-buttom-content span"
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
//        $image_id = $settings['background_image']['id'];
        $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full', false)[0] : '';


        $plane_image_id = $settings['plane_image']['id'];
        $plane_image_url = !empty($plane_image_id) ? wp_get_attachment_image_src($plane_image_id, 'full', false)[0] : '';

        ?>
        <div class="header-carousel-wrapper softim-rtl-slider">
            <div class="banner-area header-bg"
                 style="background-image: url(<?php echo esc_url($image_url) ?>)">
                <div class="bg-img" style="background-image: url(<?php echo esc_url($plane_image_url) ?>)"></div>
                <div class="animate-icon">
                    <?php
                    Icons_Manager::render_icon($settings['animate_icon'], ['aria-hidden' => 'true']);
                    ?>
                </div>
                <div class="animate-icon-02">
                    <?php
                    Icons_Manager::render_icon($settings['animate_icon_02'], ['aria-hidden' => 'true']);
                    ?>
                </div>
                <div class="animate-icon-03">
                    <?php
                    Icons_Manager::render_icon($settings['animate_icon_03'], ['aria-hidden' => 'true']);
                    ?>
                </div>
                <div class="container custom-container">
                    <ul class="social-icon style-01">
                        <?php
                        foreach ($settings['social_icon_list'] as $item) :
                            ?>
                            <li>
                                <a <?php echo softim_core()->render_elementor_link_attributes($item['list_icon_link']); ?>>
                                    <?php
                                    Icons_Manager::render_icon($item['list_icon'], ['aria-hidden' => 'true']);
                                    ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <div class="row">
                        <div class="col-xl-5 col-lg-8">
                            <div class="banner-inner">
                                <?php if (!empty($settings['subtitle'])): ?>
                                    <span class="subtitle">
                                        	<?php
                                            $subtitle = str_replace(['{c}', '{/c}'], ['<span>', '</span>'], $settings['subtitle']);
                                            print wp_kses($subtitle, softim_core()->kses_allowed_html('all'));
                                            ?>
                                    </span>
                                <?php endif; ?>
                                <h2 class="title"><?php echo esc_html($settings['title']) ?></h2>
                                <?php if (!empty($settings['description'])): ?>
                                    <p>
                                        <?php echo esc_html($settings['description']) ?>
                                    </p>
                                <?php endif; ?>
                                <div class="header-bottom">
                                    <div class="btn-wrap desktop-left">
                                        <?php if ($settings['btn_status'] == 'yes'): ?>
                                            <a href="<?php echo esc_url($settings['btn_link']['url']) ?>"
                                               class="boxed-btn blank"><?php echo esc_html($settings['btn_text']) ?><i class="fas fa-chevron-right ml-2 mr-0"></i></a>
                                        <?php endif; ?>
<!--                                        --><?php //if ($settings['info_btn_status_02'] == 'yes'): ?>
<!--                                            <a href="--><?php //echo esc_url($settings['btn_link-02']['url']) ?><!--"-->
<!--                                               class="blank-btn">--><?php //echo esc_html($settings['info_btn_text']) ?><!--<i class="flaticon-right-arrow-2 ml-2 mr-0"></i></a>-->
<!--                                        --><?php //endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <section class="banner-section">
            <div class="banner-text">
                <span><?php echo esc_html($settings['banner_text']) ?></span>
            </div>
            <div class="banner-element-one">
                <img src="assets/images/element/element-3.png" alt="element">
            </div>
            <div class="banner-element-two">
                <img src="assets/images/element/element-4.png" alt="element">
            </div>
            <div class="banner-element-three">
                <img src="assets/images/element/element-5.png" alt="element">
            </div>
            <div class="banner-element-four">
                <img src="assets/images/element/element-6.png" alt="element">
            </div>
            <div class="banner-element-five">
                <img src="assets/images/element/element-7.png" alt="element">
            </div>
            <div class="banner-group-shape">
                <div class="banner-group-element-one">
                    <img src="assets/images/element/element-8.png" alt="element">
                </div>
                <div class="banner-group-element-two">
                    <img src="assets/images/element/element-9.png" alt="element">
                </div>
                <div class="banner-group-element-three">
                    <img src="assets/images/element/element-10.png" alt="element">
                </div>
                <div class="banner-group-element-four">
                    <img src="assets/images/element/element-6.png" alt="element">
                </div>
                <div class="banner-group-element-five">
                    <img src="assets/images/element/element-5.png" alt="element">
                </div>
                <div class="banner-group-element-six">
                    <img src="assets/images/element/element-11.png" alt="element">
                </div>
                <div class="banner-group-element-seven">
                    <img src="assets/images/element/element-12.png" alt="element">
                </div>
                <div class="banner-group-element-eight">
                    <img src="assets/images/element/element-13.png" alt="element">
                </div>
                <div class="banner-group-element-nine">
                    <img src="assets/images/element/element-14.png" alt="element">
                </div>
                <div class="banner-group-element-ten">
                    <img src="assets/images/element/element-15.png" alt="element">
                </div>
                <div class="banner-group-element-eleven">
                    <img src="assets/images/element/element-16.png" alt="element">
                </div>
                <div class="banner-group-element-twelve">
                    <img src="assets/images/element/element-17.png" alt="element">
                </div>
                <div class="banner-group-element-thirteen">
                    <img src="assets/images/element/element-18.png" alt="element">
                </div>
                <div class="banner-group-element-fourteen">
                    <img src="assets/images/element/element-19.png" alt="element">
                </div>
                <div class="banner-group-element-fifteen">
                    <img src="assets/images/element/element-20.png" alt="element">
                </div>
                <div class="banner-group-element-sixteen">
                    <img src="assets/images/element/element-21.png" alt="element">
                </div>
                <div class="banner-group-element-seventeen">
                    <img src="assets/images/element/element-22.png" alt="element">
                </div>
            </div>
            <div class="container custom-container">
                <div class="row align-items-end mb-30-none">
                    <div class="col-xl-7 col-lg-7 mb-30">
                        <div class="banner-content" data-aos="fade-right" data-aos-duration="1800">
                            <h1 class="title"><?php echo esc_html($settings['title']) ?></h1>
                            <span class="sub-title"><?php echo esc_html($settings['subtitle']) ?></span>
                            <p><?php echo esc_html($settings['info']) ?></p>
                            <div class="banner-arrow">
                                <img src="assets/images/element/element-1.png" alt="element">
                            </div>
                            <div class="banner-widget">
                                <div class="banner-widget-wrapper">
                                    <div class="banner-widget-left">
                                        <div class="banner-widget-thumb">
<!--                                            <img src="assets/images/element/element-2.png" alt="element">-->
                                            <img src="<?php echo $settings['client_image']['url']?>" alt="element">
                                        </div>
                                    </div>
                                    <div class="banner-widget-middle">
                                        <div class="banner-widget-content">
                                            <p><?php echo wp_kses($settings['clients_no'], softim_core()->kses_allowed_html('span'));?></p>
                                        </div>
                                    </div>
                                    <div class="banner-widget-right">
                                        <div class="banner-widget-btn">
                                            <?php if ($settings['btn_status'] == 'yes'): ?>
                                                <a href="<?php echo esc_url($settings['btn_link']['url']) ?>"
                                                   class="btn--base"><?php echo esc_html($settings['btn_text']) ?></a>
                                            <?php endif; ?>
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

Plugin::instance()->widgets_manager->register(new Softim_Banner_One_Widget());