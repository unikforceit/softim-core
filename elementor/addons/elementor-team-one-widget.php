<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Team_One_Widget extends Widget_Base
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
        return 'softim-team-one-widget';
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
        return esc_html__('Team: 01', 'softim-core');
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
                'default' => esc_html__('Softim Expert Team', 'softim-core'),
                'description' => esc_html__('enter title', 'softim-core'),
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
        $this->add_control(
            'graphic_image_switch',
            [
                'label' => esc_html__('Image On/Off', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes to show image.', 'softim-core'),
                'default' => 'yes'
            ]
        );
        $this->add_control(
            'graphic_image', [
                'label' => esc_html__('Left Graphic Image', 'softim-core'),
                'type' => Controls_Manager::MEDIA,
                'show_label' => false,
                'description' => esc_html__('Left graphic image', 'softim-core'),
                'default' => [
                    'src' => Utils::get_placeholder_image_src()
                ],
            ]
        );
        $this->add_control(
            'arrow_switch',
            [
                'label' => esc_html__('Arrow Switch', 'softim-core'),
                'type' => Controls_Manager::SWITCHER,
                'description' => esc_html__('you can set yes to show arrow.', 'softim-core'),
                'default' => 'yes'
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
            'options' => softim_core()->get_terms_names('category', 'id'),
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

        $this->start_controls_section(
            'title_styling_settings_section',
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
        $this->add_control('normal_post_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_meta_color', [
            'label' => esc_html__('Category Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content .post-meta li" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_paragraph_color', [
            'label' => esc_html__('Paragraph Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content p" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_background_color', [
            'label' => esc_html__('Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_button_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content .read-btn" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab(
            'title_style_hover_tab',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );

        $this->add_control('hover_post_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content .title:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_hover_background_color', [
            'label' => esc_html__('Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01:hover" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_hover_border_color', [
            'label' => esc_html__('Button Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-grid-item-01 .content .read-btn:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();


        $this->start_controls_section(
            'slider_navigation_styling_settings_section',
            [
                'label' => esc_html__('Slider Nav Styling Settings', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'slider_nav_style_tabs'
        );

        $this->start_controls_tab(
            'slider_navigation_style_normal_tab',
            [
                'label' => esc_html__('Normal', 'softim-core'),
            ]
        );
        $this->add_control('normal_nav_color', [
            'label' => esc_html__('Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-slider-controls .slider-nav div" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'label' => esc_html__('Background', 'softim-core'),
            'name' => 'nav_background',
            'selector' => "{{WRAPPER}} .blog-slider-controls .slider-nav div"
        ]);

        $this->end_controls_tab();

        $this->start_controls_tab(
            'slider_navigation_style_hover_tab',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );
        $this->add_control('hover_nav_color', [
            'label' => esc_html__('Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-slider-controls .slider-nav div:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_group_control(Group_Control_Background::get_type(), [
            'label' => esc_html__('Background', 'softim-core'),
            'name' => 'nav_hover_background',
            'selector' => "{{WRAPPER}} .blog-slider-controls .slider-nav div:hover"
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
            'label' => esc_html__('Title Typography', 'softim-core'),
            'name' => 'post_meta_typography',
            'description' => esc_html__('select title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-grid-item-01 .content .title"
        ]);

        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Category Typography', 'softim-core'),
            'name' => 'category_typography',
            'description' => esc_html__('select category typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-grid-item-01 .content .post-categories li"
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
            'post_type' => 'team',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'orderby' => $orderby,
            'post_status' => 'publish',
            'ignore_sticky_posts' => 1,
        );

        if (!empty($category)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'team-cat',
                    'field' => 'term_id',
                    'terms' => $category
                )
            );
        }
        $post_data = new \WP_Query($args);
        ?>
        <section class="team-section ptb-120">
            <?php if ($settings['graphic_image_switch'] == 'yes') { ?>
                <div class="team-element">
                    <img src="<?php echo esc_url($settings['graphic_image']['url']); ?>" alt="element">
                </div>
            <?php } ?>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="section-header-wrapper">
                            <div class="section-header">
                                <h2 class="section-title"><?php echo esc_html($settings['title']); ?></h2>
                                <p><?php echo esc_html($settings['info']); ?></p>
                            </div>
                            <?php if ($settings['arrow_switch'] == 'yes') { ?>
                                <div class="slider-nav-area">
                                    <div class="slider-prev">
                                        <i class="fa fa-chevron-left"></i>
                                    </div>
                                    <div class="slider-next">
                                        <i class="fa fa-chevron-right"></i>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-10-none">
                    <div class="col-xl-12">
                        <div class="team-slider-area">
                            <div class="team-slider">
                                <div class="swiper-wrapper">
                                    <?php if ($post_data->have_posts()) {
                                        while ($post_data->have_posts()) {
                                            $post_data->the_post();
                                            $team_meta = get_post_meta(get_the_ID(), 'softim_team_options', true);
                                            ?>

                                            <div class="swiper-slide">
                                                <div class="team-item">
                                                    <div class="team-thumb">
                                                        <?php if (has_post_thumbnail()) { ?>
                                                            <?php the_post_thumbnail('full'); ?>
                                                        <?php } ?>
                                                        <div class="team-social-area">
                                                            <ul class="team-social">
                                                                <?php

                                                                if ($team_meta['social-icons']) {
                                                                    foreach ($team_meta['social-icons'] as $team_icon) {
                                                                        ?>
                                                                        <li>
                                                                            <a href="<?php echo esc_url($team_icon['url']['url']); ?>"><i
                                                                                        class="<?php echo esc_attr($team_icon['icon']); ?>"></i></a>
                                                                        </li>
                                                                    <?php }
                                                                } ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="team-content">
                                                        <h3 class="title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </h3>
                                                        <span class="sub-title"><?php echo esc_html($team_meta['designation']); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php
                                        }
                                    }
                                    ?>
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

Plugin::instance()->widgets_manager->register(new Softim_Team_One_Widget());