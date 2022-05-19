<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Team_Five_Widget extends Widget_Base
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
        return 'softim-team-five-widget';
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
        return esc_html__('Team: 05', 'softim-core');
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
                'label' => esc_html__('General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We Are Softim Team Hero', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core'),
            ]
        );
        $this->add_control(
            'image', [
                'label' => esc_html__('Testimonial Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Background image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'image1', [
                'label' => esc_html__('Team Image 1', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Team image 1', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'image2', [
                'label' => esc_html__('Team Image 2', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Team image 2', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'image3', [
                'label' => esc_html__('Team Image 3', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Team image 3', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'image4', [
                'label' => esc_html__('Team Image 4', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Team image 4', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->end_controls_section();


//      Counter Loop
        $this->start_controls_section(
            'counter_section',
            [
                'label' => esc_html__('Counter Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'team_no', [
                'label' => esc_html__('Team Work Number', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("2005", 'softim-core'),
                'description' => esc_html__('enter team work number', 'softim-core')
            ]
        );
        $repeater->add_control(
            'switcher',
            [
                'label' => esc_html__('Sub-title switcher', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes to show sub-title.', 'softim-core'),
                'default' => 'no'
            ]
        );
        $repeater->add_control(
            'team_title', [
                'label' => esc_html__('Team Work Sub-title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("+", 'softim-core'),
                'description' => esc_html__('enter team sub-title', 'softim-core')
            ]
        );
        $repeater->add_control(
            'team_title2', [
                'label' => esc_html__('Team Work Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Founded", 'softim-core'),
                'description' => esc_html__('enter team title', 'softim-core')
            ]
        );

        $this->add_control('team_list', [
            'label' => esc_html__('Take 4 Team Work', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();
//        Start Styling section

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Team Header Title', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('blog_header_title_color', [
            'label' => esc_html__('Team Header Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .team-hero-section .hero-single-item .content .title-main" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'counter_section1',
            [
                'label' => esc_html__('Counter Section Style', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('counter_number', [
            'label' => esc_html__('Counter Number', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .counter-single-items .content .odo-area .odo-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('counter_subtitle', [
            'label' => esc_html__('Counter Subtitle', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .counter-single-items .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('counter_title', [
            'label' => esc_html__('Counter Title', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .counter-single-items .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();


        $this->start_controls_section(
            'typography_settings_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Section Header Text', 'softim-core'),
            'name' => 'section_header',
            'description' => esc_html__('Section Header Text', 'softim-core'),
            'selector' => "{{WRAPPER}} .team-hero-section .hero-single-item .content .title-main"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Counter Number Text', 'softim-core'),
            'name' => 'counter_number_typography',
            'description' => esc_html__('Counter Number Text', 'softim-core'),
            'selector' => "{{WRAPPER}} .counter-single-items .content .odo-area .odo-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Counter Sub Title Text', 'softim-core'),
            'name' => 'counter_subtitle_typography',
            'description' => esc_html__('Counter Sub Title Text', 'softim-core'),
            'selector' => "{{WRAPPER}} .counter-single-items .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Counter Title Text', 'softim-core'),
            'name' => 'counter_title_typography',
            'description' => esc_html__('Counter Title Text', 'softim-core'),
            'selector' => "{{WRAPPER}} .counter-single-items .content p"
        ]);
        $this->end_controls_section();

    }

    /**
     * Render Elementor widget output on the frontend.
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>

        <section class="team-hero-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="hero-single-item">
                            <div class="content">
                                <h6 class="title-main"><?php echo esc_html($settings['title']) ?></h6>
                                <div class="thumbnail">
                                    <img src="<?php echo esc_url($settings['image']['url']); ?>" alt="">
                                </div>
                                <div class="counter-single-items">
                                    <div class="row">
                                        <?php if ($settings['team_list']) {
                                            foreach ($settings['team_list'] as $team) {
                                                ?>
                                                <div class="col-lg-6 col-md-6 col-6 mb-30">
                                                    <div class="content">
                                                        <div class="odo-area">
                                                            <h3 class="odo-title odometer" data-odometer-final="<?php echo esc_attr($team['team_no']); ?>">0</h3>
                                                            <?php if ($team['switcher'] == 'yes') {?>
                                                            <h3 class="title"><?php echo esc_html($team['team_title']);?></h3>
                                                    <?php }?>
                                                        </div>
                                                        <p><?php echo esc_html($team['team_title2']); ?></p>
                                                    </div>
                                                </div>
                                            <?php }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row align-items-center">
                            <div class="col-lg-6 col-md-6">
                                <div class="team-thumbnail mb-30">
                                    <img src="<?php echo esc_url($settings['image1']['url']); ?>" alt="">
                                </div>
                                <div class="team-thumbnail mb-30">
                                    <img src="<?php echo esc_url($settings['image2']['url']); ?>" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="team-thumbnail mb-30">
                                    <img src="<?php echo esc_url($settings['image3']['url']); ?>" alt="">
                                </div>
                                <div class="team-thumbnail mb-30">
                                    <img src="<?php echo esc_url($settings['image4']['url']); ?>" alt="">
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

Plugin::instance()->widgets_manager->register(new Softim_Team_Five_Widget());