<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Get_App_Widget extends Widget_Base
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
        return 'softim-get-app-widget';
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
        return esc_html__('Get App', 'softim-core');
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

        //  Banner Graphic
        $this->start_controls_section(
            'banner_group_section',
            [
                'label' => esc_html__('Get App Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'graphic_image1', [
                'label' => esc_html__('Graphic Image 1', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload graphic image 1', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'graphic_image2', [
                'label' => esc_html__('Graphic Image 2', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload graphic image 2', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'graphic_image3', [
                'label' => esc_html__('Graphic Image 3', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload graphic image 3', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Love our product? <br> <span>Save $80</span> and grab it today.', 'softim-core'),
                'description' => esc_html__('enter title and use "br" and "span" tag for new line and special word', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Try it risk free — we don’t charge cancellation fees. Lorem ipsum dummy text', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );

//        Button
        $this->add_control(
            'btn_status', [
                'label' => esc_html__('Button 1 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button 1', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text', [
                'label' => esc_html__('Button 1 Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('GET APP FOR', 'softim-core'),
                'description' => esc_html__('enter button 1 text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => esc_html__('Button 1 URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button 1 url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'btn_icon',
            [
                'label' => esc_html__('Button 1 Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select button 1 icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'solid',
                ],
            ]
        );


//        Button Two
        $this->add_control(
            'btn_status1', [
                'label' => esc_html__('Button 2 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button 2', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text1', [
                'label' => esc_html__('Button 2 Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('GET APP FOR', 'softim-core'),
                'description' => esc_html__('enter button 2 text', 'softim-core'),
                'condition' => ['btn_status1' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link1', [
                'label' => esc_html__('Button 2 URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button 2 url', 'softim-core'),
                'condition' => ['btn_status1' => 'yes']
            ]
        );
        $this->add_control(
            'btn_icon1',
            [
                'label' => esc_html__('Button 2 Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select button 2 icon.', 'softim-core'),
                'default' => [
                    'value' => 'fas fa-phone-alt',
                    'library' => 'solid',
                ],
            ]
        );
        $this->end_controls_section();


//  Css style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .get-app-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info1_color', [
            'label' => esc_html__('Title Special Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .get-app-content .title span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info2_color', [
            'label' => esc_html__('Info 2 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .get-app-content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* button 1 styling */
        $this->start_controls_section(
            'banner_button_section',
            [
                'label' => esc_html__('Button 1 Settings', 'softim-core'),
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
                "{{WRAPPER}} .btn1" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn1:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1::before"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1:hover"
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
                    '{{WRAPPER}} .btn1' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();
        /* button styling end */

        /* button 2 styling */
        $this->start_controls_section(
            'banner_button_section1',
            [
                'label' => esc_html__('Button 2 Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );

        $this->start_controls_tabs('button_styling1');
        $this->start_controls_tab('normal_style1', [
            'label' => esc_html__('Button Normal', "softim-core")
        ]);
        $this->add_control('button_normal_color1', [
            'label' => esc_html__('Button Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn2" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01_1', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background1',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2"
        ]);
        $this->add_control('divider_02_1', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border1',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style1', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color1', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .btn2:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03_1', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background1',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2::before"
        ]);
        $this->add_control('divider_04_1', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border1',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2:hover"
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control('divider_05_1', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control(
            'button_border_radius1',
            [
                'label' => esc_html__('Border Radius', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .btn2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'selector' => "{{WRAPPER}} .get-app-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_span_typography',
            'label' => esc_html__('Title Span Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .get-app-content .title span"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info1_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .get-app-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonOne_typography',
            'label' => esc_html__('Button 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonOne_icon_typography',
            'label' => esc_html__('Button 1 Icon', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn1 .fab"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonTwo_typography',
            'label' => esc_html__('Button 2 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonTwo_icon_typography',
            'label' => esc_html__('Button 2 Icon', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn2 .fab"
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

        <section class="get-app-section ptb-120">
            <div class="get-app-element-one">
                <img src="<?php echo esc_url($settings['graphic_image1']['url']); ?>" alt="element">
            </div>
            <div class="get-app-element-two">
                <img src="<?php echo esc_url($settings['graphic_image2']['url']); ?>" alt="element">
            </div>
            <div class="get-app-element-three">
                <img src="<?php echo esc_url($settings['graphic_image3']['url']); ?>" alt="element">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12 text-center">
                        <div class="get-app-content">
                            <h1 class="title"><?php echo wp_kses_post($settings['title']); ?></h1>
                            <p><?php echo esc_html($settings['info']); ?></p>
                            <div class="get-app-btn">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>" class="btn--base active btn1">
                                        <?php echo esc_html($settings['btn_text']); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['btn_icon'], ['aria-hidden' => 'true'], ['class' => 'ml-2']); ?>
                                    </a>
                                <?php endif; ?>
                                <?php if ($settings['btn_status1'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link1']['url']); ?>" class="btn--base active two btn2">
                                        <?php echo esc_html($settings['btn_text1']); ?>
                                        <?php \Elementor\Icons_Manager::render_icon($settings['btn_icon1'], ['aria-hidden' => 'true'], ['class' => 'ml-2']); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Get_App_Widget());