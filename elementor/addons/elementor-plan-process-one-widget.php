<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Plan_Process_One_Widget extends Widget_Base
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
        return 'softim-plan-process-one-widget';
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
        return esc_html__('Plan-Process : 01', 'softim-core');
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
                'default' => esc_html__('Our Development Process', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->end_controls_section();


        //      Counter Loop
        $this->start_controls_section(
            'odo_section',
            [
                'label' => esc_html__('Process Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'process_no',
            [
                'label' => __( 'Process Number', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '01', 'softim-core' ),
            ]
        );
        $repeater->add_control(
            'process_image', [
                'label' => esc_html__('Process Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload porcess image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater->add_control(
            'process_title',
            [
                'label' => __( 'Process Title', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Discover', 'softim-core' ),
            ]
        );
        $this->add_control(
            'odo_list',
            [
                'label' => __( 'Process item List', 'softim-core' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'process_title' => __( 'Process Item', 'softim-core' ),
                    ],
                    [
                        'process_title' => __( 'Process Item', 'softim-core' ),
                    ],
                    [
                        'process_title' => __( 'Process Item', 'softim-core' ),
                    ],
                    [
                        'process_title' => __( 'Process Item', 'softim-core' ),
                    ],
                ],
                'title_field' => '{{{ process_title }}}',
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

        $title = $settings['title'];

        ?>

        <section class="process-section ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title mb-0"><?php echo esc_html($title);?></h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">

        <?php if($settings['odo_list']){
        foreach ($settings['odo_list'] as $odo) { ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 mb-30">
                        <div class="process-item text-center">
                            <div class="process-icon-area">
                                <div class="process-element">
                                    <div class="process-number">
                                        <span><?php echo esc_html($odo['process_no']);?></span>
                                    </div>
                                    <div class="process-dot">
                                        <span></span>
                                    </div>
                                </div>
                                <div class="process-icon">
                                    <img src="<?php echo esc_url($odo['process_image']['url'])?>" alt="icon">
                                </div>
                            </div>
                            <div class="process-content">
                                <h3 class="title"><?php echo esc_html($odo['process_title']);?></h3>
                            </div>
                        </div>
                    </div>
        <?php } }?>

                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Plan_Process_One_Widget());