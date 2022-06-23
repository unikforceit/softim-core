<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Price_Three_Widget extends Widget_Base
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
        return 'softim-price-three-widget';
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
        return esc_html__('Price : 03', 'softim-core');
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
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("PRICING", 'softim-core'),
                'description' => esc_html__('enter sub title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Simple Transparent Pricing", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("No contracts, No hidden or surprising fees", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'thumb_image', [
                'label' => esc_html__('Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->end_controls_section();

//      Monthly Tab Loop
        $this->start_controls_section(
            'monthly_section',
            [
                'label' => esc_html__('Monthly Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'mPrice_title', [
                'label' => esc_html__('Monthly Price Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Intro", 'softim-core'),
                'description' => esc_html__('enter price title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mPackage_price', [
                'label' => esc_html__('Package Price', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("$120", 'softim-core'),
                'description' => esc_html__('enter package price', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mPackage_price_duration', [
                'label' => esc_html__('Package Price Duration', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("month", 'softim-core'),
                'description' => esc_html__('enter package price duration', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mPlan_image', [
                'label' => esc_html__('Plan Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload plan image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'mPackage_info', [
                'label' => esc_html__('Package Offer', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Lorem ipsum dummy text are here replace here.", 'softim-core'),
                'description' => esc_html__('enter package info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mPackage_offer', [
                'label' => esc_html__('Package Offer', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("All limited links", 'softim-core'),
                'description' => esc_html__('enter package price duration', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mbtn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mbtn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Choose This Plan", 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'mbtn_link', [
                'label' => esc_html__('Button URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter button url', 'softim-core'),
                'condition' => ['mbtn_status' => 'yes']
            ]
        );

        $this->add_control('mPrice_list', [
            'label' => esc_html__('Take 3 Price Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
            'default' => [
                [
                    'mPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
                [
                    'mPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
                [
                    'mPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
            ],
            'title_field' => '{{{ mPrice_title }}}',
        ]);
        $this->end_controls_section();

//      Yearly Tab Loop
        $this->start_controls_section(
            'yearly_section',
            [
                'label' => esc_html__('Yearly Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'yPrice_title', [
                'label' => esc_html__('Yearly Price Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Ultra Plan", 'softim-core'),
                'description' => esc_html__('enter price title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'yPackage_price', [
                'label' => esc_html__('Package Price', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("$79", 'softim-core'),
                'description' => esc_html__('enter package price', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'yPackage_price_duration', [
                'label' => esc_html__('Package Price Duration', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("month", 'softim-core'),
                'description' => esc_html__('enter package price duration', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'yPlan_image', [
                'label' => esc_html__('Plan Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload plan image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'yPackage_info', [
                'label' => esc_html__('Package Offer', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Lorem ipsum dummy text are here replace here.", 'softim-core'),
                'description' => esc_html__('enter package info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'yPackage_offer', [
                'label' => esc_html__('Package Offer', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Up to 100 keyphrases optimized", 'softim-core'),
                'description' => esc_html__('enter package price duration', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'ybtn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'ybtn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Choose This Plan", 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'ybtn_link', [
            'label' => esc_html__('Button URL', 'softim-core'),
            'type' => Controls_Manager::URL,
            'default' => [
                'url' => '#'
            ],
            'description' => esc_html__('enter button url', 'softim-core'),
            'condition' => ['ybtn_status' => 'yes']
        ]);

        $this->add_control('yPrice_list', [
            'label' => esc_html__('Take 3 Price Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
            'default' => [
                [
                    'yPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
                [
                    'yPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
                [
                    'yPrice_title' => esc_html__('Title #1', 'plugin-name'),
                ],
            ],
            'title_field' => '{{{ yPrice_title }}}',
        ]);
        $this->end_controls_section();

//  Start CSS style section
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('bg_color', [
            'label' => esc_html__('Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .plan-section.two" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header p.info" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'css_styles_2',
            [
                'label' => esc_html__('Styling Tab Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('title_1_color_active', [
            'label' => esc_html__('Active Tab Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-tab .nav-tabs .nav-link.active" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_1_color', [
            'label' => esc_html__('Inactive Tab Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-tab .nav-tabs .nav-link" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_2_color', [
            'label' => esc_html__('Tab Details Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-content h4.title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_2_color', [
            'label' => esc_html__('Tab Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-content p.info2" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('tab_number_color1', [
            'label' => esc_html__('Work Color 1', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .odometer-inside .odometer-digit" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('tab_numberDec_color1', [
            'label' => esc_html__('Work Dec Color 1', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .statistics-content p" => "color: {{VALUE}}"
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
            'selector' => "{{WRAPPER}} .btn--base:hover::before"
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
            'name' => 'title_typography',
            'label' => esc_html__('Title 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p.info"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_typography',
            'label' => esc_html__('Tab Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-tab .nav-tabs .nav-link"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_tab_typography',
            'label' => esc_html__('Tab Details Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-content h4.title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_tab_details_typography',
            'label' => esc_html__('Tab Details Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-content p.info2"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_odoNumber_typography',
            'label' => esc_html__('Work Number Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .odometer-inside .odometer-digit"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_2_odoTitle_typography',
            'label' => esc_html__('Work Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .statistics-content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn--base"
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

        $subtitle = $settings['subtitle'];
        $title = $settings['title'];
        $info = $settings['info'];

        ?>

        <div class="plan-section pt-120">
            <div class="container">
                <div class="plan-tab">
                    <div class="section-header-wrapper">
                        <div class="section-header">
                            <span class="sub-title"><?php echo esc_html($subtitle); ?></span>
                            <h1 class="section-title two"><?php echo esc_html($title); ?></h1>
                            <p><?php echo esc_html($info); ?></p>
                        </div>
                        <div class="section-header-element">
                            <img src="<?php echo esc_url($settings['thumb_image']['url']); ?>" alt="icon">
                        </div>
                        <nav>
                            <div class="nav nav-tabs" id="nav-tabPlan" role="tablist">
                                <button class="nav-link active" id="monthly-tab" data-toggle="tab"
                                        data-target="#monthly" type="button" role="tab" aria-controls="monthly"
                                        aria-selected="true">Monthly Plan
                                </button>
                                <button class="nav-link" id="yearly-tab" data-toggle="tab" data-target="#yearly"
                                        type="button" role="tab" aria-controls="yearly" aria-selected="false">Yearly
                                    Plan
                                </button>
                            </div>
                        </nav>
                    </div>
                    <div class="tab-content" id="nav-tabContentPlan">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel"
                             aria-labelledby="monthly-tab">
                            <div class="row justify-content-center mb-30-none">
                                <?php
                                if ($settings['mPrice_list']) {
                                    foreach ($settings['mPrice_list'] as $mList) {
                                        ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-30">
                                            <div class="plan-item two">
                                                <div class="plan-header-area">
                                                    <div class="left">
                                                        <div class="plan-header">
                                                            <h3 class="title"><?php echo esc_html($mList['mPrice_title']); ?></h3>
                                                        </div>
                                                        <div class="plan-price-area">
                                                            <h2 class="price-title"><?php echo esc_html($mList['mPackage_price']); ?>
                                                                <sub>/<?php echo esc_html($mList['mPackage_price_duration']); ?></sub>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="plan-icon">
                                                            <img src="<?php echo esc_url($mList['mPlan_image']['url']); ?>"
                                                                 alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-body">
                                                    <p><?php echo esc_html($mList['mPackage_info']); ?></p>
                                                    <ul class="plan-list">
                                                        <?php echo wp_kses_post($mList['mPackage_offer']); ?>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <div class="plan-btn">
                                                        <?php if ($mList['mbtn_status'] == 'yes'): ?>
                                                            <a href="<?php echo esc_url($mList['mbtn_link']['url']); ?>"
                                                               class="btn--base active w-100"><?php echo esc_html($mList['mbtn_text']); ?></a>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="row justify-content-center mb-30-none">
                                <?php
                                if ($settings['yPrice_list']) {
                                    foreach ($settings['yPrice_list'] as $yList) {
                                        ?>
                                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-30">
                                            <div class="plan-item two">
                                                <div class="plan-header-area">
                                                    <div class="left">
                                                        <div class="plan-header">
                                                            <h3 class="title"><?php echo esc_html($yList['yPrice_title']); ?></h3>
                                                        </div>
                                                        <div class="plan-price-area">
                                                            <h2 class="price-title"><?php echo esc_html($yList['yPackage_price']); ?>
                                                                <sub>/<?php echo esc_html($yList['yPackage_price_duration']); ?></sub>
                                                            </h2>
                                                        </div>
                                                    </div>
                                                    <div class="right">
                                                        <div class="plan-icon">
                                                            <img src="<?php echo esc_url($yList['yPlan_image']['url']); ?>"
                                                                 alt="icon">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="plan-body">
                                                    <p><?php echo esc_html($yList['yPackage_info']); ?></p>
                                                    <ul class="plan-list">
                                                        <?php echo wp_kses_post($yList['yPackage_offer']); ?>
                                                    </ul>
                                                </div>
                                                <div class="plan-footer">
                                                    <div class="plan-btn">
                                                        <?php if ($yList['ybtn_status'] == 'yes'): ?>
                                                            <a href="<?php echo esc_url($yList['ybtn_link']['url']); ?>"
                                                               class="btn--base active w-100"><?php echo esc_html($yList['ybtn_text']); ?></a>
                                                        <?php endif; ?>
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
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Price_Three_Widget());