<?php
/**
 * Elementor Widget
 * @package Appside
 * @since 1.0.0
 */

namespace Elementor;

class Softim_History_Item_Widget extends Widget_Base

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
        return 'softim-history-widget';

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
        return esc_html__('History Single Item', 'softim-core');

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
        return 'eicon-call-to-action';

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

    protected function register_controls ()

    {
        $this->start_controls_section(
            'settings_section', ['label' => esc_html__('General Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_CONTENT,
        ]);
        $repeater = new Repeater();

        $repeater->add_control('year', [
            'default' => esc_html__('2012', 'softim-core'),
            'label' => esc_html__('Year', 'softim-core'),
            'type' => Controls_Manager::TEXT,
            'description' => esc_html__('Enter Year', 'softim-core')
        ]);

        $repeater->add_control('title', [
            'label' => esc_html__('Title', 'softim-core'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Criminal Law', 'softim-core'),
            'description' => esc_html__('Enter title', 'softim-core')
        ]);

        $repeater->add_control('description', [
            'default' => esc_html__('If you are accused of lot of committing a crime you need. Qui ipsorum lingua Celtae, nostra Galli appellantur', 'softim-core'),
            'label' => esc_html__('Description', 'softim-core'),
            'type' => Controls_Manager::TEXTAREA,
            'description' => esc_html__('Enter description', 'softim-core')
        ]);

        $repeater->add_control('history_image', [
            'label' => esc_html__('Image', 'softim-core'),
            'type' => Controls_Manager::MEDIA,
        ]);

        $this->add_control('history_items', [
            'label' => esc_html__('History Items', 'softim-core'),
            'type' => Controls_Manager::REPEATER,
            'fields' => $repeater->get_controls(),
            'default' => [
                [
                    'sub-title' => esc_html__('First case', 'softim-core'),
                    'title' => esc_html__('Found case', 'softim-core'),
                    'description' => esc_html__('Duis aute irure dolor reprehenderit in voluptate velit essle cillum dolore eu fugiat nulla pariatur. Excepteur sint ocaec at cupdatat proident suntin culpa qui officia deserunt mol anim id esa laborum perspiciat.', 'softim-core'),
                ]
            ],
        ]);

        $this->end_controls_section();


        $this->start_controls_section('item_styling_settings_section',
            [
                'label' => esc_html__('Item Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]);

        $this->add_control('sub_title_color', [
            'label' => esc_html__('Year Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item .content .sub-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('paragraph_color', [
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();
        $this->start_controls_section('wrap_styling_settings_section',
            [
                'label' => esc_html__('Wrap Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('border_color', [
            'label' => esc_html__('Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item .dot" => "border-color: {{VALUE}}",
            ]
        ]);
        $this->add_control('cricle_border_color', [
            'label' => esc_html__('Cricle Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item::after" => "background-color: {{VALUE}}",
            ]
        ]);
        $this->add_control('cricle_lite_border_color', [
            'label' => esc_html__('Cricle Line Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .history-single-item + .history-single-item::before" => "background-color: {{VALUE}}",
            ]
        ]);
        $this->end_controls_section();
        $this->start_controls_section('typography_settings_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__(' Year Typography', 'softim-core'),
            'name' => 'since_year_typography',
            'description' => esc_html__('select year typography', 'softim-core'),
            'selector' => "{{WRAPPER}}  .history-item-wrap .since-year"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__(' Sub Title Typography', 'softim-core'),
            'name' => 'sub_title_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}}  .history-single-item .content .sub-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Title Typography', 'softim-core'),
            'name' => 'title_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}}  .history-single-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Paragraph Typography', 'softim-core'),
            'name' => 'paragraph_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}}  .history-single-item .content p"
        ]);
        $this->end_controls_section();
        $this->start_controls_section(
            'padding_margin_settings_section',
            [
                'label' => esc_html__('Padding Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('width',
            [
                'label' => __('Width', 'softim-core'),
                'type' => Controls_Manager::SLIDER,
                'size_units' => ['px', '%'],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 100,
                        'step' => 5,
                    ],
                    'px' => ['min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .history-single-item .content .title' => 'padding-bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
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
        $settings = $this->get_settings_for_display(); ?>
        <div class="history-item-wrap">
            <?php
            foreach ($settings['history_items'] as $item) :
                $image_id = $item['history_image']['id'];
                $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full')[0] : '';
                $image_alt = get_post_meta($image_id,'_wp_attachment_image_alt',true);
                ?>
                <div class="history-single-item">
                    <div class="history-single-item-content">
                        <div class="dot"></div>
                        <div class="thumb wow animated fadeInLeft">
                            <img src="<?php echo esc_url($image_url)?>" alt="<?php echo esc_attr($image_alt)?>">
                        </div>
                        <div class="content wow animated fadeInRight">
                        <span class="sub-title">
                            <?php echo esc_html($item['year']); ?>
                        </span>
                            <h4 class="title"> <?php echo esc_html($item['title']); ?></h4>
                            <p><?php echo esc_html($item['description']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_History_Item_Widget());

