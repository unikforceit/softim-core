<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Media_One_Widget extends Widget_Base
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
        return 'softim-media-one-widget';
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
        return esc_html__('Media : 01', 'softim-core');
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
                'label' => esc_html__('Banner Left Graphic Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'banner_thumb_image', [
                'label' => esc_html__('Banner Left Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload banner left thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
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
            'label' => esc_html__('Take 3 Banner Graphic Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
        $this->end_controls_section();

//  Main Content
        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('Section Contents', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('FEATURES', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('How help our client measure media', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Get the heavy metal debit card that saves and invests for you every time you spend, with Real-Time Roun Ups.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
//        Button
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
                'default' => esc_html__('START 7 DAYS FREE TRAIL', 'softim-core'),
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
            'media_footer', [
                'label' => esc_html__('Info 2', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Get the heavy metal debit card that saves and invests lorem you every time. We rank among the best in Argentina dumm Get the heavy metal debit card.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->end_controls_section();

//      Media list
        $this->start_controls_section(
            'media_list_section',
            [
                'label' => esc_html__('Media List Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'media_info', [
                'label' => esc_html__('Media Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Lorem ipsum dummy text used here so replace.', 'softim-core'),
                'description' => esc_html__('enter media info', 'softim-core'),
            ]
        );

        $this->add_control('media_list', [
            'label' => esc_html__('Take 2 Media List Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'media_info' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
                [
                    'media_info' => [
                        'src' => Utils::get_placeholder_image_src()
                    ],
                ],
            ],
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
        $this->add_control('banner_subtitle_color', [
            'label' => esc_html__('Sub Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-header .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info1_color', [
            'label' => esc_html__('Info 1 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-header p.info1" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_icon_color', [
            'label' => esc_html__('Media List Icon Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li::before" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_icon_bg_color', [
            'label' => esc_html__('Media List Icon Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li::before" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('media_list_color', [
            'label' => esc_html__('Media List Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-list li" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info2_color', [
            'label' => esc_html__('Info 2 Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .media-content .media-footer p" => "color: {{VALUE}}"
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

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'subtitle_typography',
            'label' => esc_html__('Sub Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .sub-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-content .media-header .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info1_typography',
            'label' => esc_html__('Info 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-header p.info1"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'mediaList_typography',
            'label' => esc_html__('Media List Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-content .media-list li"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'buttonOne_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info2_typography',
            'label' => esc_html__('Info 2 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .media-content .media-footer p"
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

        <section class="media-section ptb-120">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="media-thumb">
                            <img src="<?php echo esc_url($settings['banner_thumb_image']['url']); ?>" alt="element">
                            <?php
                            if ($settings['banner_group_list']) {
                                $y = 0;
                                foreach ($settings['banner_group_list'] as $items) {
                                    $y++;
                                    if ($y == 1) {
                                        $group = 'one';
                                    } else if ($y == 2) {
                                        $group = 'two';
                                    } else {
                                        $group = 'three';
                                    }
                                    ?>
                                    <div class="media-thumb-element-<?php echo esc_attr($group) ?>">
                                        <img src="<?php echo esc_url($items['element_group_image']['url']); ?>"
                                             alt="element">
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="media-content">
                            <div class="media-header">
                                <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                                <h1 class="title"><?php echo esc_html($settings['title']); ?></h1>
                                <p class="info1"><?php echo esc_html($settings['info']); ?></p>
                            </div>
                            <ul class="media-list">
                                <?php
                                if ($settings['media_list']) {
                                    foreach ($settings['media_list'] as $list) {
                                        ?>
                                        <li><?php echo esc_html($list['media_info']); ?></li>
                                    <?php }
                                } ?>
                            </ul>
                            <div class="media-btn">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                       class="btn--base active"><?php echo esc_html($settings['btn_text']); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="media-footer">
                                <p><?php echo esc_html($settings['media_footer']); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Media_One_Widget());