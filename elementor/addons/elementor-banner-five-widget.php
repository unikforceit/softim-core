<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Banner_Five_Widget extends Widget_Base
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
        return 'softim-banner-five-widget';
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
        return esc_html__('Banner : 05', 'softim-core');
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
                'default' => esc_html__('Software landing for Small & medium business', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('From easy money management,crypto investments and trade. Open your account.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
//        Button One
        $this->add_control(
            'btn_status', [
                'label' => esc_html__('Button One Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button one', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text', [
                'label' => esc_html__('Button One Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('TRY IT FREE NOW', 'softim-core'),
                'description' => esc_html__('enter button one text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link', [
                'label' => esc_html__('Button One URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button one url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
//        Button Two
        $this->add_control(
            'btn_status2', [
                'label' => esc_html__('Button Two Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button two', 'softim-core')
            ]
        );
        $this->add_control(
            'btn_text2', [
                'label' => esc_html__('Button Two Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('CREATE ACCOUNT', 'softim-core'),
                'description' => esc_html__('enter button two text', 'softim-core'),
                'condition' => ['btn_status2' => 'yes']
            ]
        );
        $this->add_control(
            'btn_link2', [
                'label' => esc_html__('Button Two URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button Two url', 'softim-core'),
                'condition' => ['btn_status2' => 'yes']
            ]
        );
        $this->add_control(
            'banner_thumb_image', [
                'label' => esc_html__('Banner Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload banner thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'banner_thumb_element_image', [
                'label' => esc_html__('Banner Thumb Element Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload banner thumb element image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->end_controls_section();

        //  Banner Graphic
        $this->start_controls_section(
            'banner_group_section',
            [
                'label' => esc_html__('Banner Graphic Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'element_group_image', [
                'label' => esc_html__('Banner Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload banner graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('banner_group_list', [
            'label' => esc_html__('Take 6 Banner Graphic Element Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
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
            'label' => esc_html__('Banner Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content.three .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info_color', [
            'label' => esc_html__('Banner Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section .banner-content.three p" => "color: {{VALUE}}"
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

        /* button two styling */
        $this->start_controls_section(
            'banner_button2_section',
            [
                'label' => esc_html__('Button 2 Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE
            ]
        );

        $this->start_controls_tabs('button_styling2');
        $this->start_controls_tab('normal_style2', [
            'label' => esc_html__('Button Normal', "softim-core")
        ]);
        $this->add_control('button_normal2_color', [
            'label' => esc_html__('Button Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01-2', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background2',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two"
        ]);
        $this->add_control('divider_02-2', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border2',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style2', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color2', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03_2', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background2',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two:hover"
        ]);
        $this->add_control('divider_04_2', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border2',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two:hover"
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->add_control('divider_05_2', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_control(
            'button_border_radius2',
            [
                'label' => esc_html__('Border 2 Radius', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'selector' => "{{WRAPPER}} .banner-section .banner-content.three .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section .banner-content.three p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonOne_typography',
            'label' => esc_html__('Button One Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonTwo_typography',
            'label' => esc_html__('Button Two Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .banner-section.five .banner-content .banner-btn a.two"
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

        <section class="banner-section two five">
            <?php
            if ($settings['banner_group_list']) {
                $y = 0;
                foreach ($settings['banner_group_list'] as $items) {
                    $y++;
                    if ($y == 1) {
                        $group = 'thirty';
                    } else if ($y == 2) {
                        $group = 'thirty-one';
                    } else if ($y == 3) {
                        $group = 'thirty-two';
                    } else if ($y == 4) {
                        $group = 'thirty-three';
                    } else if ($y == 5) {
                        $group = 'thirty-four';
                    } else {
                        $group = 'twenty-five';
                    }
                    ?>
                    <div class="banner-element-<?php echo esc_attr($group) ?>">
                        <img src="<?php echo esc_url($items['element_group_image']['url']); ?>" alt="element">
                    </div>
                <?php }
            } ?>
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-12">
                        <div class="banner-content two three">
                            <h1 class="title"><?php echo esc_html($settings['title']); ?></h1>
                            <p><?php echo esc_html($settings['info']); ?></p>
                            <div class="banner-btn">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                       class="btn--base"><?php echo esc_html($settings['btn_text']); ?></a>
                                <?php endif; ?>
                                <?php if ($settings['btn_status2'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link2']['url']); ?>"
                                       class="btn--base two"><?php echo esc_html($settings['btn_text2']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="banner-thumb">
                            <img src="<?php echo esc_url($settings['banner_thumb_image']['url']); ?>" alt="element">
                            <div class="banner-thumb-element">
                                <img src="<?php echo esc_url($settings['banner_thumb_element_image']['url']); ?>"
                                     alt="element">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Banner_Five_Widget());