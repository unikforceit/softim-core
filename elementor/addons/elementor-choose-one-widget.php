<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Choose_One_Widget extends Widget_Base
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
        return 'softim-choose-one-widget';
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
        return esc_html__('Choose : 01', 'softim-core');
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
                'label' => esc_html__('Title 1', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Why Choose Softim?", 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'info', [
                'label' => esc_html__('Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__('We rank among the best in the US, Argentina, and Ukraine. Our apps get featured as best in class, and our clients love our work.', 'softim-core'),
                'description' => esc_html__('enter info', 'softim-core'),
            ]
        );
        $this->end_controls_section();

//      Graphic Loop
        $this->start_controls_section(
            'graphic_section',
            [
                'label' => esc_html__('Graphic Image', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new Repeater();
        $repeater->add_control(
            'graphic_image', [
                'label' => esc_html__('Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );

        $this->add_control('graphic_list', [
            'label' => esc_html__('Take 5 Graphic Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
        ]);
        $this->end_controls_section();

//      Tab Loop
        $this->start_controls_section(
            'about_box_1_section',
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
                'default' => esc_html__("Top Software Developer", 'softim-core'),
                'description' => esc_html__('enter tab title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_thumb_image', [
                'label' => esc_html__('Tab Thumb Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('upload tab thumb image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $repeater2->add_control(
            'tab_details_title', [
                'label' => esc_html__('Tab Details Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Top Software Developer", 'softim-core'),
                'description' => esc_html__('enter tab details title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_info', [
                'label' => esc_html__('Tab Details Info', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Welcome To Softim, a software development company, helps to digitize businesses by focusing on client’s business challenges, needs, pain points and providing business-goals-oriented software solutions. We value close transparent cooperation and encourage our clients to participate actively in the project development life cycle.", 'softim-core'),
                'description' => esc_html__('enter tab details info', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_1_status', [
                'label' => esc_html__('Work 1 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 1', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no1', [
                'label' => esc_html__('Tab Work Number 1', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("150", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no1_dec', [
                'label' => esc_html__('Work 1 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Awesome Solutions", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_2_status', [
                'label' => esc_html__('Work 2 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 2', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no2', [
                'label' => esc_html__('Tab Work Number 2', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("350", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no2_dec', [
                'label' => esc_html__('Work 2 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Trusted Clients", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'work_3_status', [
                'label' => esc_html__('Work 3 Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide work 3', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no3', [
                'label' => esc_html__('Tab Work Number 3', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("25", 'softim-core'),
                'description' => esc_html__('enter tab work number', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'tab_details_no3_dec', [
                'label' => esc_html__('Work 3 Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => esc_html__("Served Countries", 'softim-core'),
                'description' => esc_html__('enter work title', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_status', [
                'label' => esc_html__('Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_text', [
                'label' => esc_html__('Button Text', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Contact us', 'softim-core'),
                'description' => esc_html__('enter button text', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );
        $repeater2->add_control(
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
        $repeater2->add_control(
            'btn_video_status', [
                'label' => esc_html__('Video Button Show/Hide', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'default' => 'yes',
                'description' => esc_html__('show/hide video button', 'softim-core')
            ]
        );
        $repeater2->add_control(
            'btn_video_link', [
                'label' => esc_html__('Button URL', 'softim-core'),
                'type' => Controls_Manager::URL,
                'default' => [
                    'url' => '#'
                ],
                'description' => esc_html__('enter video button url', 'softim-core'),
                'condition' => ['btn_status' => 'yes']
            ]
        );

        $this->add_control('tab_list', [
            'label' => esc_html__('Take 3 Tab Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater2->get_controls(),
        ]);
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

        ?>

        <section class="choose-section pb-120">
            <?php
            if ($settings['graphic_list']){
                $y = 0;
                foreach ($settings['graphic_list'] as $items){
                    $y++;
                    if ($y == 1){
                        $group = 'one';
                        $attr = 'data-aos="fade-left" data-aos-duration="1200"';
                    }else if ($y == 2){
                        $group = 'two';
                    }else if ($y == 3){
                        $group = 'three';
                    }else if ($y == 4){
                        $group = 'four';
                    }else {
                        $group = 'five';
                    }
                    ?>
                    <div class="choose-element-<?php echo esc_attr($group);?>" <?php echo esc_attr($attr);?>>
                        <img src="<?php echo esc_url($items['graphic_image']['url']);?>" alt="element">
                    </div>
                <?php } } ?>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($settings['title']);?></h2>
                            <p class="info"><?php echo esc_html($settings['info']);?></p>
                        </div>
                    </div>
                </div>
                <div class="choose-area">
                    <div class="choose-tab">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <?php if ($settings['tab_list']) {
                                    $tab_btn = 0;
                                    foreach ($settings['tab_list'] as $tab){
                                        $tab_btn++;
                                        if ($tab_btn == 2){
                                            $btn_act = 'active';
                                            $btn_true = 'true';
                                        }else{
                                            $btn_act = '';
                                            $btn_true = 'false';
                                        }
                                        ?>
                                <button class="nav-link <?php echo esc_attr($btn_act);?>" id="<?php echo esc_attr($tab['_id']);?>-tab" data-toggle="tab" data-target="#choose<?php echo esc_attr($tab['_id']);?>" type="button" role="tab" aria-controls="<?php echo esc_attr($tab['_id']);?>" aria-selected="<?php echo esc_attr($btn_true);?>"><?php echo esc_html($tab['tab_title']);?></button>
                            <?php } }?>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                        <?php if ($settings['tab_list']) {
                            $tabs = 0;
                            foreach ($settings['tab_list'] as $tab){
                                $tabs++;
                                if ($tabs == 2){
                                    $tab_act = 'show active';
                                }else{
                                    $tab_act = '';
                                }
                            ?>
                           <div class="tab-pane fade <?php echo esc_attr($tab_act);?>" id="choose<?php echo esc_attr($tab['_id']);?>" role="tabpanel" aria-labelledby="<?php echo esc_attr($tab['_id']);?>-tab">
                                <div class="choose-item">
                                    <div class="choose-thumb">
                                        <img src="<?php echo esc_attr($tab['tab_thumb_image']['url']);?>" alt="element">
                                    </div>
                                    <div class="choose-content">
<!--                                        <h4 class="title"><span class="text--base">About Softim</span> Digital Agency</h4>-->
                                        <h4 class="title"><?php echo esc_html($tab['tab_details_title'])?></h4>
                                        <p class="info2"><?php echo esc_html($tab['tab_details_info'])?></p>
                                        <div class="choose-statistics-area">
                                            <div class="row mb-30-none">
                                                <?php if ($tab['work_1_status'] == 'yes'): ?>
                                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                    <div class="statistics-item">
                                                        <div class="statistics-content">
                                                            <div class="odo-area">
                                                                <h3 class="odo-title odometer" data-odometer-final="<?php echo esc_attr($tab['tab_details_no1']);?>">0</h3>
                                                                <h3 class="title">+</h3>
                                                            </div>
                                                            <p><?php echo esc_html($tab['tab_details_no1_dec']);?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if ($tab['work_2_status'] == 'yes'): ?>
                                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                    <div class="statistics-item">
                                                        <div class="statistics-content">
                                                            <div class="odo-area">
                                                                <h3 class="odo-title odometer" data-odometer-final="<?php echo esc_attr($tab['tab_details_no2']);?>">0</h3>
                                                                <h3 class="title">+</h3>
                                                            </div>
                                                            <p><?php echo esc_html($tab['tab_details_no2_dec']);?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php endif; ?>
                                                <?php if ($tab['work_3_status'] == 'yes'): ?>
                                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-30">
                                                        <div class="statistics-item">
                                                            <div class="statistics-content">
                                                                <div class="odo-area">
                                                                    <h3 class="odo-title odometer" data-odometer-final="<?php echo esc_attr($tab['tab_details_no3']);?>">0</h3>
                                                                    <h3 class="title">+</h3>
                                                                </div>
                                                                <p><?php echo esc_html($tab['tab_details_no3_dec']);?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <div class="choose-content-footer">
                                            <div class="choose-btn">
                                                <?php if ($tab['btn_status'] == 'yes'): ?>
                                                    <a href="<?php echo esc_url($tab['btn_link']['url']); ?>"
                                                       class="btn--base active"><?php echo esc_html($tab['btn_text']); ?></a>
                                                <?php endif; ?>
                                            </div>
                                            <div class="choose-video-btn">
                                                <?php if ($tab['btn_video_status'] == 'yes'): ?>
                                                    <a href="<?php echo esc_url($tab['btn_video_link']['url']); ?>" class="video" data-rel="lightcase:myCollection" >
                                                        <i class="las la-video"></i>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Choose_One_Widget());