<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Segment_One_Widget extends Widget_Base
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
        return 'softim-segment-one-widget';
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
        return esc_html__('Segment : 01', 'softim-core');
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
            'settings_section)',
            [
                'label' => esc_html__('Content Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'thumb_image', [
                'label' => esc_html__('Thumb Left Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('thumb left image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'thumb_element_image', [
                'label' => esc_html__('Thumb Left Element Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('thumb left element image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'subtitle', [
                'label' => esc_html__('Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('FEEDBACK', 'softim-core'),
                'description' => esc_html__('enter sub title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Ability to serve any business segment', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('Get the heavy metal debit card that saves and invests for you every time you spend, with Real-Time Roun Ups, Sm eposit, no hidden fees, over 55,000.', 'softim-core'),
                'description' => esc_html__('enter description', 'softim-core'),
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'segment_section',
            [
                'label' => esc_html__('Segment List', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'seg_icon', [
                'label' => esc_html__('Segment Icon', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('segment image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater->add_control(
            'seg_title',
            [
                'label' => __('Segment Title', 'softim-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __("Content sharing", 'softim-core'),
            ]
        );
        $repeater->add_control(
            'seg_info',
            [
                'label' => __('Segment Info', 'softim-core'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Get the heavy metal debit card that saves and invests for you every time you spend.', 'softim-core'),
            ]
        );
        $this->add_control(
            'seg_list',
            [
                'label' => __('Take 2 Segment List', 'softim-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );
        $this->end_controls_section();

//css style
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
                "{{WRAPPER}} .segment-content .segment-header .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('banner_info1_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .segment-content .segment-header p.info1" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('seg_title_color', [
            'label' => esc_html__('Segment Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .segment-content .segment-list .segment-list-content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('seg_info_color', [
            'label' => esc_html__('Segment Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .segment-content .segment-list .segment-list-content p" => "color: {{VALUE}}"
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
            'selector' => "{{WRAPPER}} .segment-content .segment-header .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info1_typography',
            'label' => esc_html__('Info 1 Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .segment-content .segment-header p.info1"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'seg_title_typography',
            'label' => esc_html__('Segment Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .segment-content .segment-list .segment-list-content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'seg_info_typography',
            'label' => esc_html__('Segment Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .segment-content .segment-list .segment-list-content p"
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

        <section class="segment-section pt-120">
            <div class="container">
                <div class="row justify-content-center align-items-center mb-30-none">
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="segment-thumb">
                            <img src="<?php echo esc_url($settings['thumb_image']['url']); ?>" alt="element">
                            <div class="segment-thumb-element">
                                <img src="<?php echo esc_url($settings['thumb_element_image']['url']); ?>"
                                     alt="element">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 mb-30">
                        <div class="segment-content">
                            <div class="segment-header">
                                <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                                <h1 class="title"><?php echo esc_html($settings['title']); ?></h1>
                                <p class="info1"><?php echo esc_html($settings['info']); ?></p>
                            </div>
                            <ul class="segment-list">
                                <?php
                                if ($settings['seg_list']) {
                                    foreach ($settings['seg_list'] as $seg) {
                                        ?>
                                        <li>
                                            <div class="segment-list-item">
                                                <div class="segment-list-icon">
                                                    <img src="<?php echo esc_url($seg['seg_icon']['url']); ?>"
                                                         alt="icon">
                                                </div>
                                                <div class="segment-list-content">
                                                    <h3 class="title"><?php echo esc_html($seg['seg_title']); ?></h3>
                                                    <p><?php echo esc_html($seg['seg_info']); ?></p>
                                                </div>
                                            </div>
                                        </li>
                                    <?php }
                                } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Segment_One_Widget());