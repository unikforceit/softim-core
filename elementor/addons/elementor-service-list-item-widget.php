<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;

class Softim_Service_List_Item_Widget extends Widget_Base
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
        return 'softim-service-list-item-widget';
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
        return esc_html__('Service: Tab Item', 'softim-core');
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
        return 'eicon-post-slider';
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
        $this->add_control(
            'subtitle',
            [
                'default' => esc_html__('#1 Private Jet Charter', 'softim-core'),
                'label' => esc_html__('Service Sub Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__( 'enter title. use {c} color text {/c} for color text', 'softim-core' ),
            ]
        );
        $this->add_control(
            'title',
            [
                'default' => esc_html__('Find the Best Service For You', 'softim-core'),
                'label' => esc_html__('Service Title', 'softim-core'),
                'type' => Controls_Manager::TEXT,
                'description' => esc_html__('Enter title', 'softim-core')
            ]
        );
        $this->add_control(
            'service_menu_image',
            [
                'label' => esc_html__('Menu Background Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'service_image',
            [
                'label' => esc_html__('Service Details Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'service-title',
            [
                'default' => esc_html__('Private Jet Charter', 'softim-core'),
                'label' => esc_html__('Service Menu Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('Enter title', 'softim-core')
            ]
        );
        $repeater->add_control(
            'service-details-title',
            [
                'default' => esc_html__('Private Jet Charter', 'softim-core'),
                'label' => esc_html__('Service Title', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('Enter title', 'softim-core')
            ]
        );
        $repeater->add_control(
            'description',
            [
                'default' => esc_html__('Trade crowded airports and wasted time for the ease, comfort, and convenience of travel by private jet.', 'softim-core'),
                'label' => esc_html__('Description', 'softim-core'),
                'type' => Controls_Manager::TEXTAREA,
                'description' => esc_html__('Enter description', 'softim-core')
            ]
        );
        $repeater->add_control('btn_text', [
            'label' => esc_html__('Button Text', 'neateller-core'),
            'type' => Controls_Manager::TEXT,
            'default' => esc_html__('Book Now', 'neateller-core'),
            'description' => esc_html__('enter button text', 'neateller-core')
        ]);
        $repeater->add_control('btn_link', [
            'label' => esc_html__('Button Link', 'neateller-core'),
            'type' => Controls_Manager::URL,
            'default' => array(
                'url' => '#'
            ),
            'description' => esc_html__('enter button link', 'neateller-core')
        ]);
        $this->add_control(
            'service_list_items',
            [
                'label' => esc_html__('Service Tab Items', 'softim-core'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'details_styling_settings_section',
            [
                'label' => esc_html__('Menu Details Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('details_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .description-tab-content .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('details_paragraph_color', [
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .description-tab-content .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('details_button_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .description-tab-content .btn-wrap .blank-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('details_button_hover_color', [
            'label' => esc_html__('Button Hover Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'default' => '#fff',
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .description-tab-content .btn-wrap .blank-btn:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'styling_settings_section',
            [
                'label' => esc_html__('List Menu Styling Settings', 'softim-core'),
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
        $this->add_control('menu_subtitle_color', [
            'label' => esc_html__('Subtitle Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .right-content .content .subtitle" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('icon_border_color', [
            'label' => esc_html__('Border Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .right-content .nav-tabs .nav-item" => "border-bottom-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .content-wrapper .right-content .content .title" => "color: {{VALUE}}"
            ]
        ]);

        $this->add_control('menu_title_color', [
            'label' => esc_html__('Menu Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-item-list .service-title .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab(
            'title_style_hover_tab',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );

        $this->add_control('hover_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-item-list.active .service-title .title" => "color: {{VALUE}}"
            ]
        ]);

        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();

        $this->start_controls_section(
            'typography_settings_section',
            [
                'label' => esc_html__('List Menu Typography Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'sub_title_typography',
                'label' => esc_html__('Sub Title Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .content-wrapper .right-content .content .subtitle',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' => esc_html__('Title Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .content-wrapper .right-content .content .title',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'menu_title_typography',
                'label' => esc_html__('Menu Title Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .service-item-list .service-title .title',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'details_typography_settings_section',
            [
                'label' => esc_html__('Details Menu Typography Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'details_title_typography',
                'label' => esc_html__('Title Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .content-wrapper .description-tab-content .content .title',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'paragraph_typography',
                'label' => esc_html__('Paragraph Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .content-wrapper .description-tab-content .content p',
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'button_typography',
                'label' => esc_html__('Button Typography', 'softim-core'),
                'selector' => '{{WRAPPER}} .content-wrapper .description-tab-content .btn-wrap .blank-btn',
            ]
        );

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

        $service_tab_item = $settings['service_list_items'];

        $image_menu_id = $settings['service_menu_image']['id'];
        $image_menu_url = !empty($image_menu_id) ? wp_get_attachment_image_src($image_menu_id, 'full')[0] : '';

        ?>
        <div class="content-wrapper">
            <div class="left-content">
                <div class="tab-content" id="myTabContent">
                    <?php
                    foreach ($service_tab_item as $key => $details_item):
                        $image_id = $details_item['service_image']['id'];
                        $image_url = !empty($image_id) ? wp_get_attachment_image_src($image_id, 'full')[0] : '';
                        ?>
                        <div class="tab-pane fade <?php if ($key == 0): ?> active show <?php endif; ?>"
                             id="commericial-<?php echo esc_attr($key); ?>" role="tabpanel"
                             aria-labelledby="commericial-tab-<?php echo esc_attr($key); ?>">
                            <div class="description-tab-content bg-image"
                                 style="background-image: url(<?php echo esc_url($image_url); ?>);">
                                <div class="text-content-tab">
                                    <div class="content">
                                        <h3 class="title"><?php echo esc_html__($details_item['service-details-title']) ?></h3>
                                        <p><?php echo esc_html__($details_item['description']) ?></p>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="<?php echo esc_url($details_item['btn_link']['url']); ?>"
                                           class="blank-btn"><i class="flaticon-black-plane"></i><?php echo esc_html($details_item['btn_text']); ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="right-content bg-image" style="background-image: url(<?php echo esc_url($image_menu_url) ?>)">
                <div class="content">
                    <span class="subtitle">
                        	<?php
                            $subtitle = str_replace( [ '{c}', '{/c}' ], [ '<span>', '</span>' ], $settings['subtitle'] );
                            print wp_kses( $subtitle, softim_core()->kses_allowed_html( 'all' ) );
                            ?></span>
                    <h4 class="title"><?php echo esc_html__($settings['title']) ?></h4>
                </div>
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <?php foreach ($service_tab_item as $key => $item) :
                        ?>
                        <li class="nav-item">
                            <a class="nav-link service-item-list <?php if ($key == 0): ?> active show <?php endif; ?>"
                               id="commericial-tab-<?php echo esc_attr($key); ?>" data-toggle="tab"
                               href="#commericial-<?php echo esc_attr($key); ?>" role="tab" aria-selected="false">
                                <div class="service-title">
                                    <h4 class="title">
                                        <?php
                                        $service_title = str_replace( [ '{c}', '{/c}' ], [ '<span>', '</span>' ], $item['service-title'] );
                                        print wp_kses( $service_title, softim_core()->kses_allowed_html( 'all' ) );
                                        ?>
                                    </h4>
                                </div>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Softim_Service_List_Item_Widget());