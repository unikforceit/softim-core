<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Setup_Process_One_Widget extends Widget_Base
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
        return 'softim-setup-process-one-widget';
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
        return esc_html__('Setup-Process : 01', 'softim-core');
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
                'default' => esc_html__('HOW DOES IT WORKS', 'softim-core'),
                'description' => esc_html__('enter sub title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Easy setup process', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Softim keeps your team’s work on-brand, on message, and on time Innovative.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core')
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
                'label' => __('Process Title', 'softim-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Install the software', 'softim-core'),
            ]
        );
        $repeater->add_control(
            'process_info',
            [
                'label' => __('Process Info', 'softim-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('We rank among the best in Argentina, and Ukraine Our apps get', 'softim-core'),
            ]
        );
        $this->add_control(
            'odo_list',
            [
                'label' => __('Process item List', 'softim-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'process_title' => __('Process Item', 'softim-core'),
                    ],
                    [
                        'process_title' => __('Process Item', 'softim-core'),
                    ],
                    [
                        'process_title' => __('Process Item', 'softim-core'),
                    ],
                ],
                'title_field' => '{{{ process_title }}}',
            ]
        );
        $this->end_controls_section();

//        Css style

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Styling Banner Content', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'item_after',
            'label' => esc_html__('Item After Image', 'softim-core'),
            'types' => ['classic'],
            'selector' => "{{WRAPPER}} .process-item.two::after"
        ]);
        $this->add_control('banner_bg_color', [
            'label' => esc_html__('Banner Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .process-section-two" => "background: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_subtitle_color', [
            'label' => esc_html__('Subtitle Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header p.info" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('process_title_color', [
            'label' => esc_html__('Process Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .process-item.two .process-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('process_info_color', [
            'label' => esc_html__('Process Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .process-item.two .process-content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

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
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p.info"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'process_title_typography',
            'label' => esc_html__('Process Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .process-item.two .process-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'process_info_typography',
            'label' => esc_html__('Process Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .process-item.two .process-content p"
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

        <section class="process-section-two ptb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                            <h1 class="section-title two"><?php echo esc_html($settings['title']); ?></h1>
                            <p class="info"><?php echo esc_html($settings['info']); ?></p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-30-none">
                    <?php if ($settings['odo_list']) {
                        foreach ($settings['odo_list'] as $odo) { ?>
                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                <div class="process-item two text-center">
                                    <div class="process-icon">
                                        <img src="<?php echo esc_url($odo['process_image']['url']); ?>" alt="icon">
                                    </div>
                                    <div class="process-content">
                                        <h3 class="title"><?php echo esc_html($odo['process_title']); ?></h3>
                                        <p><?php echo esc_html($odo['process_info']); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Setup_Process_One_Widget());