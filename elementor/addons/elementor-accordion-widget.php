<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Accordion_One extends Widget_Base
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
        return 'softim-accordion-one-widget';
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
        return esc_html__('Accordion 01', 'softim-core');
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
        return 'eicon-editor-list-ul';
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
    protected function _register_controls()
    {

        $this->start_controls_section(
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'accordion_style',
            [
                'label' => esc_html__('Accordion Style', 'softim-core'),
                'type' => Controls_Manager::SELECT,
                'default' => 'without-image',
                'options' => [
                    'without-image' => esc_html__('Without Image', 'softim-core'),
                    'with-image' => esc_html__('With Image', 'softim-core'),
                ],
            ]
        );
        $repeater->add_control(
            'title', [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('1. Is softim Luxury and comfort?', 'softim-core')
            ]
        );
        $repeater->add_control(
            'image', [
                'label' => esc_html__('Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'condition' => ['accordion_style' => 'with-image']
            ]
        );
        $repeater->add_control(
            'accordion-list-item',
            [
                'default' => esc_html__('Specialized bilingual guide', 'softim-core'),
                'label' => esc_html__('Accordion List', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'condition' => ['accordion_style' => 'with-image'],
                'description' => esc_html__('Press Enter For New Item', 'softim-core')
            ]
        );
        $repeater->add_control(
            'description', [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter text.', 'softim-core'),
                'default' => esc_html__('Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat proident suntin culpa qui officia deserunt mol anim id esa laborum perspiciat.', 'softim-core')
            ]
        );
        $this->add_control('accordion_items', [
            'label' => esc_html__('Accordion Item', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'title' => esc_html__('1. Is softim Luxury and comfort?', 'softim-core'),
                    'description' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab oris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.', 'softim-core'),
                ]
            ],

        ]);
        $this->end_controls_section();


        /*  tab styling tabs start */
        $this->start_controls_section(
            'tab_settings_section',
            [
                'label' => esc_html__('Tab Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->start_controls_tabs(
            'tab_style_tabs'
        );

        $this->start_controls_tab(
            'tab_style_normal_tab',
            [
                'label' => __('Expanded Style', 'softim-core'),
            ]
        );

        $this->add_control('tab_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Title Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a[aria-expanded=true]" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_paragraph_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-body" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_icon_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Icon Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a:after" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_icon_bg_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Icon Background Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a:after" => "background-color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_background', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Background', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-body" => "background-color: {{VALUE}}",
                "{{WRAPPER}} .accordion-wrapper .card .card-header a[aria-expanded=true]" => "background-color: {{VALUE}}",
            ]
        ]);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'button_style_hover_tab',
            [
                'label' => esc_html__('Normal', 'softim-core'),
            ]
        );

        $this->add_control('tab_hover_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Title Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_hover_paragraph_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-body" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_hover_icon_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Icon Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a[aria-expanded=false]:after" => "color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_hover_icon_bg_color', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Icon Background Color', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-header a[aria-expanded=false]:after" => "background-color: {{VALUE}}",
            ]
        ]);
        $this->add_control('tab_hover_background', [
            'type' => Controls_Manager::COLOR,
            'label' => esc_html__('Background', 'softim-core'),
            'selectors' => [
                "{{WRAPPER}} .accordion-wrapper .card .card-body" => "background-color: {{VALUE}}",
                "{{WRAPPER}} .accordion-wrapper .card .card-header a" => "background-color: {{VALUE}}",
            ]
        ]);


        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
        /*  tab styling tabs end */

        $this->start_controls_section(
            'typography_settings_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Title Typography', 'softim-core'),
            'name' => 'title_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .accordion-wrapper .card .card-header a"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Paragraph Typography', 'softim-core'),
            'name' => 'paragraph_typography',
            'description' => esc_html__('select Paragraph typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .accordion-wrapper .card .card-body"
        ]);
        $this->end_controls_section();

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
        $accordion_items = $settings['accordion_items'];
        $random_number = rand(999, 999999);
        ?>
        <div class="accordion-wrapper">
            <div id="accordion-<?php echo esc_attr($random_number); ?>">
                <?php
                $a = 0;
                foreach ($accordion_items as $item):
                    $collapse_class = (0 == $a) ? '' : 'collapsed';
                    $show_class = (0 == $a) ? 'show' : '';
                    $aria_expanded = (0 == $a) ? 'true' : 'false';
                    $a++;
                    $random__item_number = rand(999, 999999);
                    $image_id = $item['image']['id'] ?? '';
                    $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full', false)[0] : '';
                    $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

                    ?>
                    <div class="card">
                        <div class="card-header" id="headingOne_<?php echo esc_attr($random__item_number); ?>">
                            <a class="<?php echo esc_attr($collapse_class); ?>" data-toggle="collapse" role="button"
                               data-target="#collapseOne_<?php echo esc_attr($random__item_number); ?>"
                               aria-expanded="<?php echo esc_attr($aria_expanded); ?>"
                               aria-controls="collapseOne_<?php echo esc_attr($random__item_number); ?>">
                                <?php echo esc_html($item['title']); ?>
                            </a>
                        </div>
                        <div id="collapseOne_<?php echo esc_attr($random__item_number); ?>"
                             class="collapse <?php echo esc_attr($show_class); ?>"
                             data-parent="#accordion-<?php echo esc_attr($random_number); ?>">
                            <?php
                            if ($item['accordion_style'] === 'without-image'): ?>

                                <div class="card-body">
                                    <?php echo esc_html($item['description']); ?>
                                </div>
                            <?php endif;
                            if ($item['accordion_style'] === 'with-image'):
                                ?>
                                <div class="card-body style-01">
                                    <img src="<?php echo esc_url($image_url); ?>"
                                         alt="<?php echo esc_attr($image_alt); ?>">
                                    <div class="card-body-inner">
                                        <?php echo esc_html($item['description']);
                                        $all_list_items = strlen($item['accordion-list-item']) > 1 ? explode("\n", $item['accordion-list-item']) : [];
                                        if (!empty($all_list_items)):
                                            ?>
                                            <ul>
                                                <?php
                                                foreach ($all_list_items as $nested_item) {
                                                    printf('<li><i class="far fa-check-circle"></i> %s</li>', $nested_item);
                                                }
                                                ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Softim_Accordion_One());