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
            add_action( 'init', [$this, 'create_service_cpt'], 0 );
            add_action( 'init', [$this, 'create_service_taxonomy'], 0 );
            add_action( 'init', [$this, 'create_project_cpt'], 0 );
            add_action( 'init', [$this, 'create_project_taxonomy'], 0 );
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

        // Register Custom Post Type service
        public function create_service_cpt() {

            $labels = array(
                'name' => _x( 'Services', 'Post Type General Name', 'softim' ),
                'singular_name' => _x( 'service', 'Post Type Singular Name', 'softim' ),
                'menu_name' => _x( 'Services', 'Admin Menu text', 'softim' ),
                'name_admin_bar' => _x( 'service', 'Add New on Toolbar', 'softim' ),
                'archives' => __( 'service Archives', 'softim' ),
                'attributes' => __( 'service Attributes', 'softim' ),
                'parent_item_colon' => __( 'Parent service:', 'softim' ),
                'all_items' => __( 'All Services', 'softim' ),
                'add_new_item' => __( 'Add New service', 'softim' ),
                'add_new' => __( 'Add New', 'softim' ),
                'new_item' => __( 'New service', 'softim' ),
                'edit_item' => __( 'Edit service', 'softim' ),
                'update_item' => __( 'Update service', 'softim' ),
                'view_item' => __( 'View service', 'softim' ),
                'view_items' => __( 'View Services', 'softim' ),
                'search_items' => __( 'Search service', 'softim' ),
                'not_found' => __( 'Not found', 'softim' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'softim' ),
                'featured_image' => __( 'Featured Image', 'softim' ),
                'set_featured_image' => __( 'Set featured image', 'softim' ),
                'remove_featured_image' => __( 'Remove featured image', 'softim' ),
                'use_featured_image' => __( 'Use as featured image', 'softim' ),
                'insert_into_item' => __( 'Insert into service', 'softim' ),
                'uploaded_to_this_item' => __( 'Uploaded to this service', 'softim' ),
                'items_list' => __( 'Services list', 'softim' ),
                'items_list_navigation' => __( 'Services list navigation', 'softim' ),
                'filter_items_list' => __( 'Filter Services list', 'softim' ),
            );
            $args = array(
                'label' => __( 'service', 'softim' ),
                'description' => __( 'Services ', 'softim' ),
                'labels' => $labels,
                'menu_icon' => '',
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => 'softim_theme_options',
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => true,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type( 'service', $args );

        }
        // Register Custom taxonomy Type service
        public function create_service_taxonomy() {
            $labels = array(
                'name' => __('Category', 'softim'),
                'singular_name' => __('Category', 'softim'),
                'search_items' => __('Search categories', 'softim'),
                'all_items' => __('Categories', 'softim'),
                'parent_item' => __('Parent category', 'softim'),
                'parent_item_colon' => __('Parent category:', 'softim'),
                'edit_item' => __('Edit category', 'softim'),
                'update_item' => __('Update category', 'softim'),
                'add_new_item' => __('Add category', 'softim'),
                'new_item_name' => __('New category', 'softim'),
                'menu_name' => __('Category', 'softim'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                "show_in_menu" => true,
                "show_in_nav_menus" => true,
                "query_var" => true,
                "show_admin_column" => true,
                'show_ui' => true,
                'rewrite' => array('slug' => 'service-cat'),
            );
            register_taxonomy('service-cat', 'service', $args);
        }
        // Register Custom Post Type project
        public function create_project_cpt() {

            $labels = array(
                'name' => _x( 'Projects', 'Post Type General Name', 'softim' ),
                'singular_name' => _x( 'project', 'Post Type Singular Name', 'softim' ),
                'menu_name' => _x( 'Projects', 'Admin Menu text', 'softim' ),
                'name_admin_bar' => _x( 'project', 'Add New on Toolbar', 'softim' ),
                'archives' => __( 'project Archives', 'softim' ),
                'attributes' => __( 'project Attributes', 'softim' ),
                'parent_item_colon' => __( 'Parent project:', 'softim' ),
                'all_items' => __( 'All Projects', 'softim' ),
                'add_new_item' => __( 'Add New project', 'softim' ),
                'add_new' => __( 'Add New', 'softim' ),
                'new_item' => __( 'New project', 'softim' ),
                'edit_item' => __( 'Edit project', 'softim' ),
                'update_item' => __( 'Update project', 'softim' ),
                'view_item' => __( 'View project', 'softim' ),
                'view_items' => __( 'View Projects', 'softim' ),
                'search_items' => __( 'Search project', 'softim' ),
                'not_found' => __( 'Not found', 'softim' ),
                'not_found_in_trash' => __( 'Not found in Trash', 'softim' ),
                'featured_image' => __( 'Featured Image', 'softim' ),
                'set_featured_image' => __( 'Set featured image', 'softim' ),
                'remove_featured_image' => __( 'Remove featured image', 'softim' ),
                'use_featured_image' => __( 'Use as featured image', 'softim' ),
                'insert_into_item' => __( 'Insert into project', 'softim' ),
                'uploaded_to_this_item' => __( 'Uploaded to this project', 'softim' ),
                'items_list' => __( 'Projects list', 'softim' ),
                'items_list_navigation' => __( 'Projects list navigation', 'softim' ),
                'filter_items_list' => __( 'Filter Projects list', 'softim' ),
            );
            $args = array(
                'label' => __( 'project', 'softim' ),
                'description' => __( 'Projects ', 'softim' ),
                'labels' => $labels,
                'menu_icon' => '',
                'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'author', 'comments', 'page-attributes', 'post-formats'),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => 'softim_theme_options',
                'can_export' => true,
                'has_archive' => true,
                'hierarchical' => true,
                'exclude_from_search' => false,
                'show_in_rest' => true,
                'publicly_queryable' => true,
                'capability_type' => 'post',
            );
            register_post_type( 'project', $args );

        }
        // Register Custom taxonomy Type project
        public function create_project_taxonomy() {
            $labels = array(
                'name' => __('Category', 'softim'),
                'singular_name' => __('Category', 'softim'),
                'search_items' => __('Search categories', 'softim'),
                'all_items' => __('Categories', 'softim'),
                'parent_item' => __('Parent category', 'softim'),
                'parent_item_colon' => __('Parent category:', 'softim'),
                'edit_item' => __('Edit category', 'softim'),
                'update_item' => __('Update category', 'softim'),
                'add_new_item' => __('Add category', 'softim'),
                'new_item_name' => __('New category', 'softim'),
                'menu_name' => __('Category', 'softim'),
            );
            $args = array(
                'labels' => $labels,
                'hierarchical' => true,
                "show_in_menu" => true,
                "show_in_nav_menus" => true,
                "query_var" => true,
                "show_admin_column" => true,
                'show_ui' => true,
                'rewrite' => array('slug' => 'project-cat'),
            );
            register_taxonomy('project-cat', 'project', $args);
        }
    }//end class

    if (class_exists('Softim_Custom_Post_Type')) {
        Softim_Custom_Post_Type::getInstance();
    }
}