<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Service_Five_Widget extends Widget_Base
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
        return 'softim-service-five-widget';
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
        return esc_html__('Service: 05', 'softim-core');
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
                'default' => esc_html__('Our Best Customer Services', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core'),
            ]
        );
        $this->add_control(
            'column',
            [
                'label' => esc_html__('Column', 'softim-core'),
                'type' => Controls_Manager::SELECT,
                'options' => array(
                    '6' => esc_html__('02 Column', 'softim-core'),
                    '3' => esc_html__('04 Column', 'softim-core'),
                    '4' => esc_html__('03 Column', 'softim-core'),
                    '2' => esc_html__('06 Column', 'softim-core')
                ),
                'description' => esc_html__('select grid column', 'softim-core'),
                'default' => '6'
            ]
        );
        $this->add_control('total', [
            'label' => esc_html__('Total Posts', 'softim-core'),
            'type' => Controls_Manager::TEXT,
            'default' => '-1',
            'description' => esc_html__('enter how many post you want in masonry , enter -1 for unlimited post.')
        ]);
        $this->add_control('category', [
            'label' => esc_html__('Category', 'softim-core'),
            'type' => Controls_Manager::SELECT2,
            'multiple' => true,
            'options' => softim_core()->get_terms_names('service-cat', 'id'),
            'description' => esc_html__('select category as you want, leave it blank for all category', 'softim-core'),
        ]);
        $this->add_control('order', [
            'label' => esc_html__('Order', 'softim-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'ASC' => esc_html__('Ascending', 'softim-core'),
                'DESC' => esc_html__('Descending', 'softim-core'),
            ),
            'default' => 'ASC',
            'description' => esc_html__('select order', 'softim-core')
        ]);
        $this->add_control('orderby', [
            'label' => esc_html__('OrderBy', 'softim-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                'ID' => esc_html__('ID', 'softim-core'),
                'title' => esc_html__('Title', 'softim-core'),
                'date' => esc_html__('Date', 'softim-core'),
                'rand' => esc_html__('Random', 'softim-core'),
                'comment_count' => esc_html__('Most Comments', 'softim-core'),
            ),
            'default' => 'ID',
            'description' => esc_html__('select order', 'softim-core')
        ]);
        $this->add_control(
            'excerpt_switch',
            [
                'label' => esc_html__('Excerpt Switch', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes to show excerpt.', 'softim-core'),
                'default' => 'no'
            ]
        );
        $this->add_control('excerpt_length', [
            'label' => esc_html__('Excerpt Length', 'softim-core'),
            'type' => Controls_Manager::SELECT,
            'options' => array(
                18 => esc_html__('Short', 'softim-core'),
                55 => esc_html__('Regular', 'softim-core'),
                100 => esc_html__('Long', 'softim-core'),
            ),
            'default' => 18,
            'description' => esc_html__('select excerpt length', 'softim-core')
        ]);
        $this->end_controls_section();

//  Start style
        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Header Title', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('blog_header_title_color', [
            'label' => esc_html__('Header Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();

        $this->start_controls_section(
            'customer_services2',
            [
                'label' => esc_html__('Service Items', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('service_items_bg', [
            'label' => esc_html__('Item Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_icon_bg', [
            'label' => esc_html__('Item Icon Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .icon" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_title', [
            'label' => esc_html__('Item Title', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_info', [
            'label' => esc_html__('Item Info', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_btn', [
            'label' => esc_html__('Item btn Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .content .more-btn span" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_btn_icon_bg', [
            'label' => esc_html__('Item btn Background', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .content .more-btn .icons" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('service_items_btn_icon_color', [
            'label' => esc_html__('Item btn Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .service-single-item .content .more-btn .icons i" => "color: {{VALUE}}"
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
            'label' => esc_html__('Title Typography', 'softim-core'),
            'name' => 'post_meta_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Title Typography', 'softim-core'),
            'name' => 'item_title_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .service-single-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('info Typography', 'softim-core'),
            'name' => 'item_info_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .service-single-item .content p"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Button Typography', 'softim-core'),
            'name' => 'item_button_typography',
            'description' => esc_html__('select button text typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .service-single-item .content .more-btn span"
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
        //query settings
        $total_posts = $settings['total'];
        $category = $settings['category'];
        $order = $settings['order'];
        $orderby = $settings['orderby'];
        //setup query
        $args = array(
            'post_type' => 'service',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'orderby' => $orderby,
            'post_status' => 'publish',
            'ignore_sticky_posts' => 1,
        );

        if (!empty($category)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'service-cat',
                    'field' => 'term_id',
                    'terms' => $category
                )
            );
        }
        $post_data = new \WP_Query($args);
        ?>

        <section class="customer-service-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($settings['title']);?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if ($post_data->have_posts()) {
                        while ($post_data->have_posts()) {
                            $post_data->the_post();
                            $service_meta = get_post_meta(get_the_ID(), 'softim_service_options', true);
                            ?>
                    <div class="col-xl-4 col-lg-4 mb-30">
                        <div class="service-single-item">
                            <?php if (!empty($service_meta['image']['id'])){?>
                                <div class="icon">
                                    <?php echo wp_get_attachment_image($service_meta['image']['id'], 'full'); ?>
                                </div>
                            <?php } ?>
                            <div class="content">
                                <a href="<?php the_permalink();?>"><h6 class="title"><?php the_title();?></h6></a>
                                <p><?php echo wp_trim_words(get_the_excerpt(), $settings['excerpt_length'], '.');?></p>
                                <div class="more-btn">
                                    <a href="<?php the_permalink();?>"><span><?php echo esc_html('Service Details');?></span></a>
                                    <div class="icons">
                                        <i class="las la-arrow-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
    }
}
?>
                </div>
<!--                <div class="row rmt-60">-->
<!--                    <div class="col-xl-4 col-lg-4 mb-30">-->
<!--                        <div class="service-single-item">-->
<!--                            <div class="icon">-->
<!--                                <img src="assets/images/home-three/apps.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <a href="service-details.html"><h6 class="title">Apps Development</h6></a>-->
<!--                                <p>Trusted by popular platforms like Shopify, ARN Tech offers result-driven solutions to build.</p>-->
<!--                                <div class="more-btn">-->
<!--                                    <a href="service-details.html"><span>Service Details</span></a>-->
<!--                                    <div class="icons">-->
<!--                                        <i class="las la-arrow-right"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xl-4 col-lg-4 mb-30">-->
<!--                        <div class="service-single-item">-->
<!--                            <div class="icon">-->
<!--                                <img src="assets/images/home-three/megaphone.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <a href="service-details.html"><h6 class="title">Digital Marketing</h6></a>-->
<!--                                <p>Trusted by popular platforms like Shopify, ARN Tech offers result-driven solutions to build.</p>-->
<!--                                <div class="more-btn">-->
<!--                                    <a href="service-details.html"><span>Service Details</span></a>-->
<!--                                    <div class="icons">-->
<!--                                        <i class="las la-arrow-right"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="col-xl-4 col-lg-4 mb-30">-->
<!--                        <div class="service-single-item">-->
<!--                            <div class="icon">-->
<!--                                <img src="assets/images/home-three/blog.png" alt="">-->
<!--                            </div>-->
<!--                            <div class="content">-->
<!--                                <a href="service-details.html"><h6 class="title">Content Marketing</h6></a>-->
<!--                                <p>Trusted by popular platforms like Shopify, ARN Tech offers result-driven solutions to build.</p>-->
<!--                                <div class="more-btn">-->
<!--                                    <a href="service-details.html"><span>Service Details</span></a>-->
<!--                                    <div class="icons">-->
<!--                                        <i class="las la-arrow-right"></i>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div>
        </section>

        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Service_Five_Widget());