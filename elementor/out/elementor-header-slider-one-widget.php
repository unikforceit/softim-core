<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Header_Area_Slider_One_Widget extends Widget_Base
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
        return 'softim-header-slider-one-widget';
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
        return esc_html__('Header Slider: 01', 'softim-core');
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
    protected function register_controls ()
    {

        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('Section Contents', 'softim-core'),
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
        $image_id = $settings['background_image']['id'];
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
                                        <?php if ($settings['info_btn_status_02'] == 'yes'): ?>
                                            <a href="<?php echo esc_url($settings['btn_link-02']['url']) ?>"
                                               class="blank-btn"><?php echo esc_html($settings['info_btn_text']) ?><i class="flaticon-right-arrow-2 ml-2 mr-0"></i></a>
                                        <?php endif; ?>
                                    </div>
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

Plugin::instance()->widgets_manager->register(new Softim_Header_Area_Slider_One_Widget());