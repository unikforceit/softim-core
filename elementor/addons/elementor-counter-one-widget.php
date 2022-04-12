<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Counter_One_Widget extends Widget_Base
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
        return 'softim-counter-one-widget';
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
        return esc_html__('Counter : 01', 'softim-core');
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
            'site_text', [
                'label' => esc_html__('Site Text', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('AGENCY', 'softim-core'),
                'description' => esc_html__('enter site text', 'softim-core'),
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim is a digital agency that offers a wide scale of creative services, including brand development online marketing and lots more.', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->end_controls_section();


        //      Counter Loop
        $this->start_controls_section(
            'odo_section',
            [
                'label' => esc_html__('Counter Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'count_to',
            [
                'label' => __( 'Counter Number', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '12', 'softim-core' ),
            ]
        );
        $repeater->add_control(
            'count_no',
            [
                'label' => __( 'Counter subscript', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '+', 'softim-core' ),
            ]
        );
        $repeater->add_control(
            'count_title',
            [
                'label' => __( 'Counter Title', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Years of operation', 'softim-core' ),
            ]
        );
        $this->add_control(
            'odo_list',
            [
                'label' => __( 'Take 4 Counter item ', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'count_title' => __( 'Counter Item', 'softim-core' ),
                    ],
                    [
                        'count_title' => __( 'Counter Item', 'softim-core' ),
                    ],
                    [
                        'count_title' => __( 'Counter Item', 'softim-core' ),
                    ],
                    [
                        'count_title' => __( 'Counter Item', 'softim-core' ),
                    ],
                ],
                'title_field' => '{{{ count_title }}}',
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

        $site_text = $settings['site_text'];
        $title = $settings['title'];

        ?>

        <section class="agency-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="agency-content text-center">
                            <div class="agency-logo-text">
                                <span><?php echo esc_html($site_text);?></span>
                            </div>
                            <h2 class="title"><?php echo esc_html($title);?></h2>
                        </div>
                        <div class="agency-statistics-area">
                            <div class="row justify-content-center mb-30-none">
                                <?php if($settings['odo_list']){
                                    foreach ($settings['odo_list'] as $odo) { ?>
                                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                                            <div class="statistics-item">
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

Plugin::instance()->widgets_manager->register(new Softim_Counter_One_Widget());