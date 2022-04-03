<?php
/**
 * Theme Custom Post Type(CPTs)
 * @package Softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}

if (!class_exists('Softim_Custom_Post_Type')) {
    class Softim_Custom_Post_Type
    {

        //$instance variable
        private static $instance;

        public function __construct()
        {
            //register post type
            add_action('init', array($this, 'register_custom_post_type'));
        }

        /**
         * get Instance
         * @since  2.0.0
         */
        public static function getInstance()
        {
            if (null == self::$instance) {
                self::$instance = new self();
            }

            return self::$instance;
        }

        /**
         * Register Custom Post Type
         * @since  2.0.0
         */
        public function register_custom_post_type()
        {
            if (!defined('ELEMENTOR_VERSION')) {
                return;
            }
            $all_post_type = array(
                [
                    'post_type' => 'service',
                    'args' => array(
                        'label' => esc_html__('Service', 'softim-core'),
                        'description' => esc_html__('Service', 'softim-core'),
                        'labels' => array(
                            'name' => esc_html_x('Service', 'Post Type General Name', 'softim-core'),
                            'singular_name' => esc_html_x('Service', 'Post Type Singular Name', 'softim-core'),
                            'menu_name' => esc_html__('Service', 'softim-core'),
                            'all_items' => esc_html__('Services', 'softim-core'),
                            'view_item' => esc_html__('View Service', 'softim-core'),
                            'add_new_item' => esc_html__('Add New Service', 'softim-core'),
                            'add_new' => esc_html__('Add New Service', 'softim-core'),
                            'edit_item' => esc_html__('Edit Service', 'softim-core'),
                            'update_item' => esc_html__('Update Service', 'softim-core'),
                            'search_items' => esc_html__('Search Service', 'softim-core'),
                            'not_found' => esc_html__('Not Found', 'softim-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'softim-core'),
                            'featured_image' => esc_html__('Service Image', 'softim-core'),
                            'remove_featured_image' => esc_html__('Remove Service Image', 'softim-core'),
                            'set_featured_image' => esc_html__('Set Service Image', 'softim-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'taxonomies' => array( 'post_tag'), // this is IMPORTANT
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'softim_theme_options',
                        "rewrite" => array('slug' => 'all-services', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ],
                [
                    'post_type' => 'packages',
                    'args' => array(
                        'label' => esc_html__('Packages', 'softim-core'),
                        'description' => esc_html__('Packages', 'softim-core'),
                        'labels' => array(
                            'name' => esc_html_x('Packages', 'Post Type General Name', 'softim-core'),
                            'singular_name' => esc_html_x('Packages', 'Post Type Singular Name', 'softim-core'),
                            'menu_name' => esc_html__('Packages', 'softim-core'),
                            'all_items' => esc_html__('Packagess', 'softim-core'),
                            'view_item' => esc_html__('View Packages', 'softim-core'),
                            'add_new_item' => esc_html__('Add New Packages', 'softim-core'),
                            'add_new' => esc_html__('Add New Packages', 'softim-core'),
                            'edit_item' => esc_html__('Edit Packages', 'softim-core'),
                            'update_item' => esc_html__('Update Packages', 'softim-core'),
                            'search_items' => esc_html__('Search Packages', 'softim-core'),
                            'not_found' => esc_html__('Not Found', 'softim-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'softim-core'),
                            'featured_image' => esc_html__('Packages Image', 'softim-core'),
                            'remove_featured_image' => esc_html__('Remove Packages Image', 'softim-core'),
                            'set_featured_image' => esc_html__('Set Packages Image', 'softim-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'softim_theme_options',
                        "rewrite" => array('slug' => 'all-packages', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ],
                [
                    'post_type' => 'deals',
                    'args' => array(
                        'label' => esc_html__('Deals', 'softim-core'),
                        'description' => esc_html__('Deals', 'softim-core'),
                        'labels' => array(
                            'name' => esc_html_x('Deals', 'Post Type General Name', 'softim-core'),
                            'singular_name' => esc_html_x('Deals', 'Post Type Singular Name', 'softim-core'),
                            'menu_name' => esc_html__('Deals', 'softim-core'),
                            'all_items' => esc_html__('Deals', 'softim-core'),
                            'view_item' => esc_html__('View Deals', 'softim-core'),
                            'add_new_item' => esc_html__('Add New Deals', 'softim-core'),
                            'add_new' => esc_html__('Add New Deals', 'softim-core'),
                            'edit_item' => esc_html__('Edit Deals', 'softim-core'),
                            'update_item' => esc_html__('Update Deals', 'softim-core'),
                            'search_items' => esc_html__('Search Deals', 'softim-core'),
                            'not_found' => esc_html__('Not Found', 'softim-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'softim-core'),
                            'featured_image' => esc_html__('Deals Image', 'softim-core'),
                            'remove_featured_image' => esc_html__('Remove Deals Image', 'softim-core'),
                            'set_featured_image' => esc_html__('Set Deals Image', 'softim-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'softim_theme_options',
                        "rewrite" => array('slug' => 'all-deals', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ],
                [
                    'post_type' => 'team',
                    'args' => array(
                        'label' => esc_html__('team', 'softim-core'),
                        'description' => esc_html__('team', 'softim-core'),
                        'labels' => array(
                            'name' => esc_html_x('Team', 'Post Type General Name', 'softim-core'),
                            'singular_name' => esc_html_x('Team', 'Post Type Singular Name', 'softim-core'),
                            'menu_name' => esc_html__('Teams', 'softim-core'),
                            'all_items' => esc_html__('Teams', 'softim-core'),
                            'view_item' => esc_html__('View Teams', 'softim-core'),
                            'add_new_item' => esc_html__('Add New Team Member', 'softim-core'),
                            'add_new' => esc_html__('Add New Team Member', 'softim-core'),
                            'edit_item' => esc_html__('Edit Team', 'softim-core'),
                            'update_item' => esc_html__('Update Team', 'softim-core'),
                            'search_items' => esc_html__('Search Team', 'softim-core'),
                            'not_found' => esc_html__('Not Found', 'softim-core'),
                            'not_found_in_trash' => esc_html__('Not found in Trash', 'softim-core'),
                            'featured_image' => esc_html__('Team Image', 'softim-core'),
                            'remove_featured_image' => esc_html__('Remove Team Image', 'softim-core'),
                            'set_featured_image' => esc_html__('Set Team Image', 'softim-core'),
                        ),
                        'supports' => array('title', 'thumbnail', 'excerpt', 'editor', 'comments'),
                        'hierarchical' => false,
                        'public' => true,
                        "publicly_queryable" => true,
                        'show_ui' => true,
                        'show_in_menu' => 'softim_theme_options',
                        "rewrite" => array('slug' => 'all-team', 'with_front' => true),
                        'can_export' => true,
                        'capability_type' => 'post',
                        "show_in_rest" => true,
                        'query_var' => true
                    )
                ]
            );

            if (!empty($all_post_type) && is_array($all_post_type)) {

                foreach ($all_post_type as $post_type) {
                    call_user_func_array('register_post_type', $post_type);
                }
            }


            /**
             * Custom Taxonomy Register
             * @since 1.0.0
            */

            $all_custom_taxonmy = array(
                array(
                    'taxonomy' => 'service-cat',
                    'object_type' => 'service',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Service Category", 'softim-core'),
                            "singular_name" => esc_html__("Service Category", 'softim-core'),
                            "menu_name" => esc_html__("Service Category", 'softim-core'),
                            "all_items" => esc_html__("All Service Category", 'softim-core'),
                            "add_new_item" => esc_html__("Add New Service Category", 'softim-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'service-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                ),
                array(
                    'taxonomy' => 'packages-cat',
                    'object_type' => 'packages',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Packages Category", 'softim-core'),
                            "singular_name" => esc_html__("Packages Category", 'softim-core'),
                            "menu_name" => esc_html__("Packages Category", 'softim-core'),
                            "all_items" => esc_html__("All Packages Category", 'softim-core'),
                            "add_new_item" => esc_html__("Add New Packages Category", 'softim-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'packages-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                ),
                array(
                    'taxonomy' => 'deals-cat',
                    'object_type' => 'deals',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Deals Category", 'softim-core'),
                            "singular_name" => esc_html__("Deals Category", 'softim-core'),
                            "menu_name" => esc_html__("Deals Category", 'softim-core'),
                            "all_items" => esc_html__("All Deals Category", 'softim-core'),
                            "add_new_item" => esc_html__("Add New Deals Category", 'softim-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'deals-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                ),
                array(
                    'taxonomy' => 'team-cat',
                    'object_type' => 'team',
                    'args' => array(
                        "labels" => array(
                            "name" => esc_html__("Team Category", 'softim-core'),
                            "singular_name" => esc_html__("Team Category", 'softim-core'),
                            "menu_name" => esc_html__("Team Category", 'softim-core'),
                            "all_items" => esc_html__("All Team Category", 'softim-core'),
                            "add_new_item" => esc_html__("Add New Team Category", 'softim-core')
                        ),
                        "public" => true,
                        "hierarchical" => true,
                        "show_ui" => true,
                        "show_in_menu" => true,
                        "show_in_nav_menus" => true,
                        "query_var" => true,
                        "rewrite" => array('slug' => 'team-cat', 'with_front' => true),
                        "show_admin_column" => true,
                        "show_in_rest" => true,
                        "show_in_quick_edit" => true,
                    )
                )
            );

            if (is_array($all_custom_taxonmy) && !empty($all_custom_taxonmy)) {
                foreach ($all_custom_taxonmy as $taxonomy) {
                    call_user_func_array('register_taxonomy', $taxonomy);
                }
            }

            flush_rewrite_rules();
        }

    }//end class

    if (class_exists('Softim_Custom_Post_Type')) {
        Softim_Custom_Post_Type::getInstance();
    }
}