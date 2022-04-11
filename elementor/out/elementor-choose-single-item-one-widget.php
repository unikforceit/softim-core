<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Choose_Single_Item_Widget extends Widget_Base
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
        return 'softim-choose-single-item-widget';
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
        return esc_html__('Choose Single Item', 'softim-core');
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
        return 'eicon-image';
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
            'settings_section',
            [
                'label' => esc_html__('General Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'subtitle',
            [
                'label' => esc_html__('Number', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'description' => esc_html__('enter sub title.', 'softim-core'),
                'default' => esc_html__('12', 'softim-core')
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('leading private aviation', 'softim-core')
            ]
        );
        $this->add_control(
            'description',
            [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'description' => esc_html__('enter description.', 'softim-core'),
                'default' => esc_html__("As well as getting to fly to many different destinations as part of their job, airplane pilots get big discounts on", 'softim-core')
            ]
        );
        $this->add_control(
            'link',
            [
                'label' => esc_html__('Link', 'softim-core'),
                'type' => Controls_Manager::URL,
                'description' => esc_html__('enter link', 'softim-core'),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'background_hover_settings_section',
            [
                'label' => esc_html__('Background Hover Image Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'hover_background',
                'label' => esc_html__('Background Image', 'softim-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .choose-single-item.bg-image',
            ]
        );

        $this->end_controls_section();


        $this->start_controls_section(
            'content_styling_section',
            [
                'label' => esc_html__('Content Styling', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'style_tabs'
        );

        $this->start_controls_tab(
            'style_normal_tab',
            [
                'label' => esc_html__('Normal', 'softim-core'),
            ]
        );
        $this->add_control('normal_title_color', [
            'label' => esc_html__('Number Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item .content .subtitle" => "color: {{VALUE}};"
            ]
        ]);
        $this->add_control('normal_subtitle_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item .content .title" => "color: {{VALUE}};"
            ]
        ]);
        $this->add_control('normal_description_color', [
            'label' => esc_html__('Description Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item .content p" => "color: {{VALUE}};"
            ]
        ]);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'style_hover_tab',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );
        $this->add_control('hover_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item:hover .content .title" => "color: {{VALUE}};"
            ]
        ]);
        $this->add_control('hover_normal_title_color', [
            'label' => esc_html__('Number Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item:hover .content .subtitle" => "color: {{VALUE}};",
                "{{WRAPPER}} .choose-single-item:active .content .subtitle" => "color: {{VALUE}};"
            ]
        ]);
        $this->add_control('hover_description_color', [
            'label' => esc_html__('Description Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .choose-single-item:hover .content p" => "color: {{VALUE}};"
            ]
        ]);

        $this->end_controls_tab();

        $this->end_controls_tabs();
        $this->end_controls_section();

        $this->start_controls_section(
            'typography_settings_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-single-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'sub_title_typography',
            'label' => esc_html__('Number Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-single-item .content .subtitle"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'description_typography',
            'label' => esc_html__('Description Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .choose-single-item .content p"
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
        $this->add_render_attribute('image_box_link', 'class', '');
        if (!empty($settings['link']['url'])) {
            $this->add_link_attributes('image_box_link', $settings['link']);
        }
        ?>

        <div class="choose-single-item margin-bottom-20 bg-image">
            <div class="content">
                <span class="subtitle"><?php echo esc_html($settings['subtitle']) ?></span>
                <a <?php echo $this->get_render_attribute_string('image_box_link'); ?>><h4
                            class="title"><?php echo esc_html($settings['title']) ?></h4>
                </a>
                <p><?php echo esc_html($settings['description']) ?></p>
            </div>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Choose_Single_Item_Widget());