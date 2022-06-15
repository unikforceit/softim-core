<?php
/**
 * Elementor Widget
 * @package Softim
 * @since 1.0.0
 */

namespace Elementor;
class Softim_Blog_Post_Three_Widget extends Widget_Base
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
        return 'softim-blog-three-widget';
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
        return esc_html__('Blog: 03', 'softim-core');
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
                'default' => esc_html__('Softim Latest Blog', 'softim-core'),
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
                14 => esc_html__('Short', 'softim-core'),
                55 => esc_html__('Regular', 'softim-core'),
                100 => esc_html__('Long', 'softim-core'),
            ),
            'default' => 18,
            'description' => esc_html__('select excerpt length', 'softim-core')
        ]);
        $this->end_controls_section();

//        Start Styling section

        $this->start_controls_section(
            'css_styles',
            [
                'label' => esc_html__('Blog Header Title', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control('blog_header_title_color', [
            'label' => esc_html__('Blog Header Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .section-header .section-title" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_section();
// Left Blog
        $this->start_controls_section(
            'title_styling_settings_section',
            [
                'label' => esc_html__('Left Blog Post', 'softim-core'),
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
        $this->add_control('normal_post_cat_color', [
            'label' => esc_html__('Category Background Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item .content .event" => "background-color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_cat_color1', [
            'label' => esc_html__('Category Text Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item .content .event" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_title_color', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_user_color', [
            'label' => esc_html__('Post User Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item .content .post-meta .user" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_date_color', [
            'label' => esc_html__('Post Date Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item .content .post-meta .date" => "color: {{VALUE}}"
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
                "{{WRAPPER}} .blog-single-item .content .title:hover" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->end_controls_tabs();

        $this->end_controls_section();
// Right blog
        $this->start_controls_section(
            'title_styling_settings_section2',
            [
                'label' => esc_html__('Right Blog Post', 'softim-core'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs(
            'title_style_tabs2'
        );

        $this->start_controls_tab(
            'title_style_normal_tab2',
            [
                'label' => esc_html__('Normal', 'softim-core'),
            ]
        );
        $this->add_control('normal_post_title_color2', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item-02 .content .title" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_user_color2', [
            'label' => esc_html__('Post User Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item-02 .content .post-meta .user" => "color: {{VALUE}}"
            ]
        ]);
        $this->add_control('normal_post_date_color2', [
            'label' => esc_html__('Post Date Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item-02 .content .post-meta .date" => "color: {{VALUE}}"
            ]
        ]);
        $this->end_controls_tab();

        $this->start_controls_tab(
            'title_style_hover_tab2',
            [
                'label' => esc_html__('Hover', 'softim-core'),
            ]
        );

        $this->add_control('hover_post_title_color2', [
            'label' => esc_html__('Title Color', 'softim-core'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                "{{WRAPPER}} .blog-single-item-02 .content .title:hover" => "color: {{VALUE}}"
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
            'label' => esc_html__('Section Header Text', 'softim-core'),
            'name' => 'section_header_title',
            'description' => esc_html__('select section header typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .section-header .section-title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Left Category Text', 'softim-core'),
            'name' => 'left_post_cat',
            'description' => esc_html__('select left post category typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item .content .event"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Left Title Text', 'softim-core'),
            'name' => 'left_post_title',
            'description' => esc_html__('select left post title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Left User Text', 'softim-core'),
            'name' => 'left_post_user',
            'description' => esc_html__('select left post user typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item .content .post-meta .user"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Left Date Text', 'softim-core'),
            'name' => 'left_post_date',
            'description' => esc_html__('select left post date typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item .content .post-meta .date"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Right Title Text', 'softim-core'),
            'name' => 'right_post_title',
            'description' => esc_html__('select right post title typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item-02 .content .title"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Right User Text', 'softim-core'),
            'name' => 'right_post_user',
            'description' => esc_html__('select right post user typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item-02 .content .post-meta .user"
        ]);
        $this->add_group_control(Group_Control_Typography::get_type(), [
            'label' => esc_html__('Post Right Date Text', 'softim-core'),
            'name' => 'right_post_date',
            'description' => esc_html__('select right post date typography', 'softim-core'),
            'selector' => "{{WRAPPER}} .blog-single-item-02 .content .post-meta .date"
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
            'post_type' => 'post',
            'posts_per_page' => $total_posts,
            'order' => $order,
            'orderby' => $orderby,
            'post_status' => 'publish',
            'ignore_sticky_posts' => 1,
        );

        if (!empty($category)) {
            $args['tax_query'] = array(
                array(
                    'taxonomy' => 'category',
                    'field' => 'term_id',
                    'terms' => $category
                )
            );
        }
        $post_data = new \WP_Query($args);
        ?>

        <section class="blog-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8 text-center">
                        <div class="section-header">
                            <h2 class="section-title"><?php echo esc_html($settings['title']); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php if ($post_data->have_posts()) {
                        while ($post_data->have_posts()) {
                            $post_data->the_post();
                            ?>
                            <div class="col-lg-<?php echo esc_attr($settings['column']); ?> mb-30">
                                <div class="blog-single-item">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="thumbnail">
                                            <?php the_post_thumbnail('full'); ?>
                                        </div>
                                    <?php } ?>
                                    <div class="content">
                                        <a href=""><span class="event"><?php echo get_the_category()[0]->name; ?></span></a>
                                        <a href="<?php the_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4>
                                        </a>
                                        <div class="post-meta">
                                            <span class="user"><?php echo esc_html('By : ') ?><?php the_author(); ?></span>
                                            <span class="date"><?php echo get_the_time('F j, Y'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }
                    ?>
                    <div class="col-lg-4 mb-30">
                        <div class="blog-single-item-02">
                            <?php if ($post_data->have_posts()) {
                                while ($post_data->have_posts()) {
                                    $post_data->the_post();
                                    $post_data->set( 'posts_per_page',  2);
                                    ?>
                                    <div class="content">
                                        <a href="<?php the_permalink(); ?>"><h4 class="title"><?php the_title(); ?></h4>
                                        </a>
                                        <div class="post-meta">
                                            <span class="user"><?php echo esc_html('By : ') ?><?php the_author(); ?></span>
                                            <span class="date"><?php echo get_the_time('F j, Y'); ?></span>
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
        </section>
        <?php
    }
}

Plugin::instance()->widgets_manager->register(new Softim_Blog_Post_Three_Widget());