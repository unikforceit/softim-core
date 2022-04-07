<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_About_Three_Widget extends Widget_Base
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
        return 'softim-about-three-widget';
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
        return esc_html__('About : 03', 'softim-core');
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
                'default' => esc_html__("Who We Are", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim is not only a globally recognized IT company but also a family filled with talented experts that help global brands, enterprises, mid-size businesses or even startups with innovative solutions.', 'softim-core'),
                'description' => esc_html__('enter sub title', 'softim-core'),
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softin is not an entity, it’s a family that represents togetherness for over two decades of a successful journey. For IndiaNICians, the definition of success is to transcend innovative ideas of people to reality with the help of our tech expertise, this is what we, as a Team, want to be remembered for!', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
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
                'default' => esc_html__('Contact us', 'softim-core'),
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
            'btn_status2', [
                'label' => esc_html__('Phone No Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text2', [
                'label' => esc_html__('Phone Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('+110 2659 3268 003', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link2', [
                'label' => esc_html__('Phone URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'about_thumb', [
                'label' => esc_html__('About Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('about thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'about_thumb_graphic1', [
                'label' => esc_html__('Thumb Graphic Image 1', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('thumb graphic image 1', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'about_thumb_graphic2', [
                'label' => esc_html__('Thumb Graphic Image 2', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('thumb graphic image 2', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'svg_icon',
            [
                'label' => esc_html__('Svg Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select SVG Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'play_icon',
            [
                'label' => esc_html__('Play Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Play Icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->add_control(
            'about_graphic_right_image', [
                'label' => esc_html__('About Right Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload about right graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
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
        $this->add_control('call_text_color', [
            'label' => esc_html__('Call text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-btn.two span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('call_no_color', [
            'label' => esc_html__('Call number Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .about-btn.two span a" => "color: {{VALUE}}"
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
            'selector' => "{{WRAPPER}} .btn--base::before"
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
            'name' => 'button_1_typography',
            'label' => esc_html__('Button 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_2_text_typography',
            'label' => esc_html__('Button 2 Text Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-btn.two span"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_2_typography',
            'label' => esc_html__('Button 2 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .about-btn.two span a"
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

        <section class="about-section ptb-120">
            <div class="about-element-one two">
                <img src="<?php echo esc_url($settings['about_graphic_right_image']['url']);?>" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-content two">
                            <h3 class="title"><?php echo esc_html($settings['title']); ?></h3>
                            <p class="para"><?php echo esc_html($settings['subtitle']); ?></p>
                            <p class="info"><?php echo esc_html($settings['info']); ?></p>
                            <div class="about-btn two">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>" class="btn--base"><?php echo esc_html($settings['btn_text']); ?></a>
                                <?php endif; ?>
                                <?php if ($settings['btn_status2'] == 'yes'): ?>
                                    <span><?php echo esc_html('or Call')?>
                                        <a href="tel:<?php echo esc_url($settings['btn_link2']['url']); ?>">
                                            <?php echo esc_html($settings['btn_text2']); ?>
                                        </a>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="about-thumb two">
                            <img src="<?php echo esc_url($settings['about_thumb']['url']);?>" alt="element">
                            <div class="about-thumb-element-one">
                                <img src="<?php echo esc_url($settings['about_thumb_graphic1']['url'])?>" alt="element">
                            </div>
                            <div class="about-thumb-element-two">
                                <img src="<?php echo esc_url($settings['about_thumb_graphic2']['url'])?>" alt="element">
                            </div>
                            <div class="about-thumb-video">
                                <div class="circle">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="300px" height="300px" viewBox="0 0 300 300" enable-background="new 0 0 300 300" xml:space="preserve">
                                <defs>
                                    <path id="circlePath" d=" M 150, 150 m -60, 0 a 60,60 0 0,1 120,0 a 60,60 0 0,1 -120,0 "/>
                                </defs>
                                        <circle cx="150" cy="100" r="75" fill="none"/>
                                        <g>
                                            <use xlink:href="#circlePath" fill="none"/>
                                            <text fill="#ffffff">
                                                <textPath xlink:href="#circlePath">Softim it solution Softim it solution Softim it solution Softim it solution</textPath>
                                            </text>
                                        </g>
                            </svg>
                                    <?php \Elementor\Icons_Manager::render_icon( $settings['svg_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                </div>
                                <div class="video-main">
                                    <?php if ($settings['btn_status2'] == 'yes'): ?>
                                        <a href="<?php echo esc_url($settings['btn_link2']['url']); ?>" data-rel="lightcase:myCollection"
                                           class="video-icon video">
                                            <?php \Elementor\Icons_Manager::render_icon( $settings['play_icon'], [ 'aria-hidden' => 'true' ] ); ?>
                                        </a>
                                    <?php endif; ?>
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

Plugin::instance()->widgets_manager->register(new Softim_About_Three_Widget());