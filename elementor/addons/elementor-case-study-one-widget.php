<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Case_Study_One_Widget extends Widget_Base
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
        return 'softim-case-study-one-widget';
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
        return esc_html__('Case Study :01', 'softim-core');
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
                'default' => esc_html__("USE CASES", 'softim-core'),
                'description' => esc_html__('enter sub title', 'softim-core')
            ]
        );
        $this->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Complete suite of <br> financial features, <span>designed for your audience</span>", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->end_controls_section();

//      Banner Graphic Loop
        $this->start_controls_section(
            'banner_group_section',
            [
                'label' => esc_html__('Banner Graphic', 'softim-core'),
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
            'label' => esc_html__('Take 3 Banner Graphic Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();

//      Tab Loop
        $this->start_controls_section(
            'case_study_section',
            [
                'label' => esc_html__('Tab Section', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater2 = new Repeater();
        $repeater2->add_control(
            'tab_title', [
                'label' => esc_html__('Tab Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("FREELANCE BANKING", 'softim-core'),
                'description' => esc_html__('enter tab title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_title', [
                'label' => esc_html__('Tab Details Info 1', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Offer seamless banking solutions for your business customers directly in your product - expense tracking capabilities, physical and virtual cards, check deposits, cash advances, and more.", 'softim-core'),
                'description' => esc_html__('enter tab details title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_info', [
                'label' => esc_html__('Tab Details Info 2', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Offer seamless banking solutions for your business customers directly in your product.", 'softim-core'),
                'description' => esc_html__('enter tab details info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_author_image', [
                'label' => esc_html__('Tab Author Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload Tab Author image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'tab_author_title', [
                'label' => esc_html__('Tab Author Name', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Neal Kapur", 'softim-core'),
                'description' => esc_html__('enter tab author name', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_author_subtitle', [
                'label' => esc_html__('Tab Author Degition', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Head of Visa Ventures", 'softim-core'),
                'description' => esc_html__('enter tab author info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_right_image', [
                'label' => esc_html__('Tab Right Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload Tab Author image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('tab_list', [
            'label' => esc_html__('Take 3 Tab Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
        $this->end_controls_section();

// Start style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Case Study Header', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('title_color', [
            'label' => esc_html__('Header Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('info_color', [
            'label' => esc_html__('Info Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        /* typography settings start */
        $this->start_controls_section('typography_settings', [
            'label' => esc_html__('Typography Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'info_typography',
            'label' => esc_html__('Info Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header p"
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

        <section class="case-section ptb-120">
            <?php
            if ($settings['banner_group_list']) {
                $y = 0;
                foreach ($settings['banner_group_list'] as $items) {
                    $y++;
                    if ($y == 1) {
                        $group = 'one';
                    } else if ($y == 2) {
                        $group = 'three';
                    } else {
                        $group = 'four';
                    }
                    ?>
                    <div class="case-element-<?php echo esc_attr($group) ?>">
                        <img src="<?php echo esc_url($items['element_group_image']['url']); ?>" alt="element">
                    </div>
                <?php }
            } ?>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-12">
                        <div class="case-header">
                            <span class="sub-title"><?php echo esc_html($settings['subtitle']); ?></span>
                            <h1 class="title"><?php echo wp_kses_post($settings['title']); ?></h1>
                        </div>
                        <div class="case-tab">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <?php if ($settings['tab_list']) {
                                        $tab_btn = 0;
                                        foreach ($settings['tab_list'] as $tab) {
                                            $tab_btn++;
                                            if ($tab_btn == 1) {
                                                $btn_act = 'active';
                                                $btn_true = 'true';
                                            } else {
                                                $btn_act = '';
                                                $btn_true = 'false';
                                            }
                                            ?>
                                            <button class="nav-link <?php echo esc_attr($btn_act); ?>"
                                                    id="<?php echo esc_attr($tab['_id']); ?>-tab" data-toggle="tab"
                                                    data-target="#freelance<?php echo esc_attr($tab['_id']); ?>"
                                                    type="button" role="tab"
                                                    aria-controls="<?php echo esc_attr($tab['_id']); ?>"
                                                    aria-selected="<?php echo esc_attr($btn_true); ?>"><?php echo esc_html($tab['tab_title']); ?></button>
                                        <?php }
                                    } ?>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <?php if ($settings['tab_list']) {
                                    $tabs = 0;
                                    foreach ($settings['tab_list'] as $tab) {
                                        $tabs++;
                                        if ($tabs == 1) {
                                            $tab_act = 'show active';
                                        } else {
                                            $tab_act = '';
                                        }
                                        ?>
                                        <div class="tab-pane fade <?php echo esc_attr($tab_act); ?>"
                                             id="freelance<?php echo esc_attr($tab['_id']); ?>" role="tabpanel"
                                             aria-labelledby="freelance-tab">
                                            <div class="row justify-content-center mb-30-none">
                                                <div class="col-xl-6 col-lg-6 mb-30">
                                                    <div class="case-content">
                                                        <p><?php echo esc_html($tab['tab_details_title']) ?></p>
                                                        <div class="case-content-footer">
                                                            <p><?php echo esc_html($tab['tab_details_info']); ?></p>
                                                            <div class="case-footer-user-area">
                                                                <div class="case-footer-user-thumb">
                                                                    <img src="<?php echo esc_url($tab['tab_author_image']['url']); ?>"
                                                                         alt="user">
                                                                </div>
                                                                <div class="case-footer-user-content">
                                                                    <h4 class="title"><?php echo esc_html($tab['tab_author_title']); ?></h4>
                                                                    <span class="sub-title"><?php echo esc_html($tab['tab_author_subtitle']); ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 mb-30">
                                                    <div class="case-thumb">
                                                        <img src="<?php echo esc_url($tab['tab_right_image']['url']); ?>"
                                                             alt="case">
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
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Case_Study_One_Widget());