<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Request_Form_Widget extends Widget_Base
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
        return 'softim-theme-heading-title-two-widget';
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
        return esc_html__('Request Form', 'softim-core');
    }

    public function get_keywords()
    {
        return ['Section', 'Heading', 'Title', "ThemeIM", 'Softim'];
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
        return 'eicon-form-horizontal';
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
            'section_my_custom',
            [
                'label' => esc_html__('Team Filter', 'softim'),
            ]
        );
        $this->add_control(
            'softim_contact_form_id',
            [
                'label' => esc_html__('Contact Form', 'softim'),
                'type' => Controls_Manager::SELECT,
                'options' => softim_core()->get_contact_form_shortcode_list_el(),
            ]
        );
        $this->add_control(
            'icon',
            [
                'label' => esc_html__('Icon', 'softim-core'),
                'type' => Controls_Manager::ICONS,
                'description' => esc_html__('select Icon.', 'softim-core'),
                'default' => [
                    'value' => 'flaticon-phone',
                    'library' => 'solid',
                ]
            ]
        );
        $this->add_control('title', [
            'label' => esc_html__('Title', 'softim-core'),
            'type' => Controls_Manager::TEXT,
            'description' => esc_html__('Enter title', 'softim-core'),
            'default' => esc_html__('+18149294263', 'softim-core')
        ]);
        /**
         * End Title Section
         */
        $this->end_controls_section();

        $this->start_controls_section(
            'styling_section',
            [
                'label' => esc_html__('Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'background_color',
                'label' => esc_html__('Background', 'softim-core'),
                'types' => ['classic', 'gradient', 'video'],
                'selector' => '{{WRAPPER}} .call-widget-wrapper',
            ]
        );
        $this->add_control('button_background_color', [
            'label' => esc_html__('Button Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-widget-wrapper .call-widget-btn" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('button_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-widget-wrapper .call-widget-btn" => "color: {{VALUE}}"
            ]
        ]);

        $this->add_control('arrow_bg_color', [
            'label' => esc_html__('Arrow Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .call-widget-wrapper .call-widget-btn .arrow" => "background-color: {{VALUE}}"
            ]
        ]);


        $this->end_controls_section();
        $this->start_controls_section(
            'styling_typogrpahy_section',
            [
                'label' => esc_html__('Typography Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'name' => 'title_typography',
            'label' => esc_html__('Title Typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .call-widget-wrapper .call-widget-btn"
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
        $settings = $this->get_settings();
        /**
         * main part
         */
        $shortcode = $settings['softim_contact_form_id'];
        ?>

        <?php
        if (!empty($shortcode)):
            ?>
            <div class="call-widget-wrapper">
                <button type="button" class="call-widget-btn">
                    <a href="tel:<?php echo esc_html($settings['title']) ?>"
                       class="num"> <?php Icons_Manager::render_icon($settings['icon'], ['aria-hidden' => 'true']);
                        echo esc_html($settings['title']); ?></a>
                    <span class="arrow"></span>
                </button>
                <div class="call-widget-form-area">
                    <?php
                    echo do_shortcode('[contact-form-7  id="' . $shortcode . '"]');
                    ?>
                </div>
            </div>
        <?php
        else:
            echo esc_html__('please select and shortcode first');
        endif;
    }
}

Plugin::instance()->widgets_manager->register_widget_type(new Softim_Request_Form_Widget());