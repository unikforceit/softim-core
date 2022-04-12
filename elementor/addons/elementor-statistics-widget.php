<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Statistics_Widget extends Widget_Base
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
        return 'softim-statistics-widget';
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
        return esc_html__('Statistics: 01', 'softim-core');
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
        return 'eicon-slider-album';
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
                'default' => esc_html__("We are progressive IT service company", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Our motto includes the core values of the company and describes our philosophy. We moved heaven and earth to make the company’s motto applicable to every member of the team.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
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
                'default' => esc_html__('Know More', 'softim-core'),
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

//      Odometer Loop
        $this->start_controls_section(
            'odo_section',
            [
                'label' => esc_html__('Odometer Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'count_image', [
                'label' => esc_html__('Count BG Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload count bg graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater->add_control(
            'count_to',
            [
                'label' => __( 'Counter Number', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '10', 'softim-core' ),
            ]
        );
        $repeater->add_control(
            'count_no',
            [
                'label' => __( 'Title', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '+', 'softim-core' ),
            ]
        );
        $repeater->add_control(
            'count_title',
            [
                'label' => __( 'Title', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Years of Experience', 'softim-core' ),
            ]
        );
        $this->add_control(
            'odo_list',
            [
                'label' => __( 'Odometer List', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'count_title' => __( 'Odometer Item', 'softim-core' ),
                    ],
                    [
                        'count_title' => __( 'Odometer Item', 'softim-core' ),
                    ],
                ],
                'title_field' => '{{{ count_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->end_controls_section();


        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .statistics-left-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .statistics-left-content p.info" => "color: {{VALUE}}"
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
                "{{WRAPPER}} .custom-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .custom-btn"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .custom-btn"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .custom-btn:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}} .custom-btn:hover"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'header_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .custom-btn:hover"
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
                    '{{WRAPPER}} .custom-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
            'selector' => "{{WRAPPER}} .statistics-left-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .statistics-left-content p.info"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'button_typography',
            'label' => esc_html__('Button Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .custom-btn"
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

        <section class="statistics-section pb-120">
            <?php
            if ($settings['graphic_list']){
                $y = 0;
                foreach ($settings['graphic_list'] as $items){
                    $y++;
                    if ($y == 1){
                        $group = 'one';
                    }else if ($y == 2){
                        $group = 'two';
                    }else {
                        $group = 'three';
                    }
                    ?>
                    <div class="statistics-element-<?php echo esc_attr($group)?>">
                        <img src="<?php echo esc_url($items['graphic_image']['url']);?>" alt="element">
                    </div>
                <?php } } ?>
            <div class="container">
                <div class="row justify-content-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="statistics-left-content">
                            <h2 class="title"><?php echo esc_html($settings['title'])?></h2>
                            <p class="info"><?php echo esc_html($settings['info'])?></p>
                            <div class="statistics-left-btn">
                                <?php if ($settings['btn_status'] == 'yes'): ?>
                                    <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                                       class="custom-btn"><?php echo esc_html($settings['btn_text']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="statistics-item-area">
                            <div class="row mb-30-none">
                                <?php if($settings['odo_list']){
                                    foreach ($settings['odo_list'] as $odo) { var_dump($odo);?>
                                        <div class="col-xl-6 col-lg-6 col-md-6 mb-30">
                                            <div class="statistics-item">

                                                <div class="statistics-icon">
                                                    <img src="<?php echo esc_url($odo['count_image']['url'])?>" alt="icon">
                                                </div>
                                                <div class="statistics-content">
                                                    <div class="odo-area">
                                                        <h3 class="odo-title odometer" data-odometer-final="<?php echo esc_attr($odo['count_to']);?>">0</h3>
                                                        <h3 class="title"><?php echo esc_html($odo['count_no']);?></h3>
                                                    </div>
                                                    <p><?php echo esc_html($odo['count_title']);?></p>
                                                </div>
                                            </div>
                                        </div>
                                <?php } }?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Statistics_Widget());