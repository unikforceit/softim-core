<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Call_To_Action_Item_Widget extends Widget_Base
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
        return 'softim-call-to-action-item-widget';
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
        return esc_html__('Call To Action: 01', 'softim-core');
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
        return 'eicon-image-rollover';
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
        $this->add_control('image',
            [
                'label' => esc_html__('Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => array(
                    'url' => Utils::get_placeholder_image_src()
                )
            ]);
        $this->add_control(
            'title',
            [
                'label' => esc_html__('Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'description' => esc_html__('enter title.', 'softim-core'),
                'default' => esc_html__('Call for book an order', 'softim-core')
            ]
        );

        $this->add_control('description',
            [
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('enter description', 'softim-core'),
                'default' => esc_html__('8-800-10-500', 'softim-core')
            ]);
        $this->add_control('btn_text', [
            'label' => esc_html__('Button Text', 'softim-core'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Book Now', 'softim-core'),
            'description' => esc_html__('enter button text', 'softim-core')
        ]);
        $this->add_control('btn_link', [
            'label' => esc_html__('Button Link', 'softim-core'),
            'type' => Controls_Manager::URL,
            'default' => array(
                'url' => '#'
            ),
            'description' => esc_html__('enter button link', 'softim-core')
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'styling_settings_section',
            [
                'label' => esc_html__('Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'title_style_tabs'
        );

        $this->start_controls_tab(
            'title_style_normal_tab',
            [
                'label' => esc_html__('Normal', 'softim-core'),
            ]
        );
        $this->add_control(
            'item_padding',
            [
                'label' => esc_html__('Padding', 'softim-core'),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => ['px', '%'],
                'selectors' => [
                    '{{WRAPPER}} .call-to-action-item' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control('content_bg_color', [
            'label' => esc_html__('Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('content_border_color', [
            'label' => esc_html__('Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item:after" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('paragraph_typography', [
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'description' => esc_html__('select Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item .content p" => "color: {{VALUE}}"
            ]
        ]);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'title_style_hover_tab',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );

        $this->add_control('icon_hover_color', [
            'label' => esc_html__('Icon Hover Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item:hover .icon" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('content_hover_bg_color', [
            'label' => esc_html__('Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_hover_color', [
            'label' => esc_html__('Title Hover Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item:hover .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('paragraph_hover_typography', [
            'label' => esc_html__('Paragraph Hover Color', 'softim-core'),
            'description' => esc_html__('select Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-to-action-item:hover .content p" => "color: {{VALUE}}"
            ]
        ]);

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();


        /* button styling */
        $this->start_controls_section('price_plan_button_section', [

            'label' => esc_html__('Button Settings', 'softim-core'),
            'tab' => Controls_Manager::TAB_STYLE
        ]);

        $this->start_controls_tabs('button_styling');
        $this->start_controls_tab('normal_style', [
            'label' => esc_html__('Button Normal', "softim-core")
        ]);
        $this->add_control('button_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}}  .btn-wrap .boxed-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_01', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}}  .btn-wrap .boxed-btn"
        ]);
        $this->add_control('divider_02', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'price_plan_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}}  .btn-wrap .boxed-btn"
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab('hover_style', [
            'label' => esc_html__('Button Hover', "softim-core")
        ]);
        $this->add_control('button_hover_normal_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}}  .btn-wrap .boxed-btn:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('divider_03', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'name' => 'button_hover_background',
            'label' => esc_html__('Button Background ', 'softim-core'),
            'selector' => "{{WRAPPER}}  .btn-wrap .boxed-btn:hover"
        ]);
        $this->add_control('divider_04', [
            'type' => Controls_Manager::DIVIDER
        ]);
        $this->add_group_control(Group_Control_Border::get_type(), [
            'name' => 'price_plan_hover_button_border',
            'label' => esc_html__('Border', 'softim-core'),
            'selector' => "{{WRAPPER}} .btn-wrap .boxed-btn:hover"

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
                    '{{WRAPPER}} .btn-wrap .boxed-btn' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->end_controls_section();

        /* button styling end */


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
            'selector' => "{{WRAPPER}} .call-to-action-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Paragraph Typography', 'softim-core'),
            'name' => 'paragraph_typography',
            'description' => esc_html__('select Paragraph typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .call-to-action-item .content p"
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
        $img_id = $settings['image']['id'];
        $img_url = !empty($img_id) ? wp_get_attachment_image_src($img_id, 'full')[0] : '';

        ?>
        <div class="call-to-action-item bg-image"
             style="background-image: url(<?php echo esc_url($img_url) ?>)">
            <div class="content">
                <a href="<?php echo esc_url($settings['btn_link']['url']); ?>">
                    <h4 class="title"><?php echo esc_html($settings['title']) ?></h4>
                </a>
                <p class="description"><?php echo esc_html($settings['description']); ?></p>
            </div>
            <div class="btn-wrap">
                <a href="<?php echo esc_url($settings['btn_link']['url']); ?>"
                   class="boxed-btn"><i class="flaticon-black-plane"></i><?php echo esc_html($settings['btn_text']); ?></a>
            </div>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Call_To_Action_Item_Widget());