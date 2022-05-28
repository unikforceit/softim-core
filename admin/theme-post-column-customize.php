<?php
/**
 * Post Column Customize Custom Function
 * @package Softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access directly
}

if (!class_exists('softim_Post_Column_Customize')){
	class softim_Post_Column_Customize{
		//$instance variable
		private static $instance;
		
		public function __construct() {
			//service admin add table value hook
			add_filter("manage_edit-service_columns", array($this, "edit_service_columns") );
			add_action('manage_service_posts_custom_column', array($this, 'add_thumbnail_columns'), 10,2);
            //service category icon
            add_filter("manage_edit-service-cat_columns", array($this, "edit_service_cat_columns") );
            add_filter('manage_service-cat_custom_column', array($this, 'add_service_category_columns'), 13, 3);
            //project admin add table value hook
            add_filter("manage_edit-project_columns", array($this, "edit_project_columns") );
            add_action('manage_project_posts_custom_column', array($this, 'add_project_thumbnail_columns'), 10,2);
            //project category icon
            add_filter("manage_edit-project-cat_columns", array($this, "edit_project_cat_columns") );
            add_filter('manage_project-cat_custom_column', array($this, 'add_project_category_columns'), 13, 3);
            //team admin add table value hook
            add_filter("manage_edit-team_columns", array($this, "edit_team_columns") );
            add_action('manage_team_posts_custom_column', array($this, 'add_team_thumbnail_columns'), 20,4);
            //team category icon
            add_filter("manage_edit-team-cat_columns", array($this, "edit_team_cat_columns") );
            add_filter('manage_team-cat_custom_column', array($this, 'add_team_category_columns'), 23, 4);
		}

		/**
		 * get Instance
		 * @since 1.0.0
		 */
		public static function getInstance(){
			if (null == self::$instance){
				self::$instance = new self();
			}
			return self::$instance;
		}


		/**
		 * Edit service
		 * @since 1.0.0
		 */
		public function edit_service_columns($columns){

			$order = ( 'asc' == $_GET['order'] ) ? 'desc' : 'asc';
			$cat_title = $columns['taxonomy-service-cat'];
			unset($columns);
			$columns['cb'] = '<input type="checkbox" />';
			$columns['title'] = esc_html__('Title','softim-core');
			$columns['thumbnail'] = '<a href="edit.php?post_type=service&orderby=title&order='.urlencode($order).'">'.esc_html__('Thumbnail','softim-core').'</a>';
			$columns['taxonomy-service-cat'] = '<a href="edit.php?post_type=service&orderby=taxonomy&order='.urlencode($order).'">'.$cat_title.'<span class="sorting-indicator"></span></a>';
			$columns['date'] = esc_html__('Date','softim-core');
			return $columns;
		}

		/**
		 * Add thumbnail
		 * @since 1.0.0
		 */
		public function add_thumbnail_columns($column,$post_id) {
			switch ( $column ) {
				case 'thumbnail' :
					echo '<a class="row-thumbnail" href="' . esc_url( admin_url( 'post.php?post=' . $post_id . '&amp;action=edit' ) ) . '">' . get_the_post_thumbnail( $post_id, 'thumbnail' ) . '</a>';
					break;
				default:
					break;
			}
		}

        /**
         * Service category column customize
         * @since 1.0.0
         */
        public function edit_service_cat_columns($columns){
            $columns['icon'] = esc_html__('Icon','softim-core');
            return $columns;
        }

        /**
         * Service Category column add
         * @since 1.0.0
         */
        public function add_service_category_columns($string,$columns,$post_id){
            $post_term_meta = get_term_meta($post_id,'softim_service_category',true);
            $icon = isset($post_term_meta['icon']) ? $post_term_meta['icon'] : '';
            switch ( $columns ) {
                case 'icon' :
                    echo '<i class="neaterller-font-size50 '.$icon.'"></i>';
                    break;
                default:
                    break;
            }
        }

        /**
         * Edit project
         * @since 1.0.0
         */
        public function edit_project_columns($columns){

            $order = ( 'asc' == $_GET['order'] ) ? 'desc' : 'asc';
            $cat_title = $columns['taxonomy-project-cat'];
            unset($columns);
            $columns['cb'] = '<input type="checkbox" />';
            $columns['title'] = esc_html__('Title','softim-core');
            $columns['thumbnail'] = '<a href="edit.php?post_type=project&orderby=title&order='.urlencode($order).'">'.esc_html__('Thumbnail','softim-core').'</a>';
            $columns['taxonomy-project-cat'] = '<a href="edit.php?post_type=project&orderby=taxonomy&order='.urlencode($order).'">'.$cat_title.'<span class="sorting-indicator"></span></a>';
            $columns['date'] = esc_html__('Date','softim-core');
            return $columns;
        }

        /**
         * Add project thumbnail
         * @since 1.0.0
         */
        public function add_project_thumbnail_columns($column,$post_id) {
            switch ( $column ) {
                case 'thumbnail' :
                    echo '<a class="row-thumbnail" href="' . esc_url( admin_url( 'post.php?post=' . $post_id . '&amp;action=edit' ) ) . '">' . get_the_post_thumbnail( $post_id, 'thumbnail' ) . '</a>';
                    break;
                default:
                    break;
            }
        }

        /**
         * Project category column customize
         * @since 1.0.0
         */
        public function edit_project_cat_columns($columns){
            $columns['icon'] = esc_html__('Icon','softim-core');
            return $columns;
        }

        /**
         * Project Category column add
         * @since 1.0.0
         */
        public function add_project_category_columns($string,$columns,$post_id){
            $post_term_meta = get_term_meta($post_id,'softim_project_category',true);
            $icon = isset($post_term_meta['icon']) ? $post_term_meta['icon'] : '';
            switch ( $columns ) {
                case 'icon' :
                    echo '<i class="neaterller-font-size50 '.$icon.'"></i>';
                    break;
                default:
                    break;
            }
        }

        /**
         * Edit team
         * @since 1.0.0
         */
        public function edit_team_columns($columns){

            $order = ( 'asc' == $_GET['order'] ) ? 'desc' : 'asc';
            $cat_title = $columns['taxonomy-team-cat'];
            unset($columns);
            $columns['cb'] = '<input type="checkbox" />';
            $columns['title'] = esc_html__('Title','softim-core');
            $columns['thumbnail'] = '<a href="edit.php?post_type=team&orderby=title&order='.urlencode($order).'">'.esc_html__('Thumbnail','softim-core').'</a>';
            $columns['taxonomy-team-cat'] = '<a href="edit.php?post_type=team&orderby=taxonomy&order='.urlencode($order).'">'.$cat_title.'<span class="sorting-indicator"></span></a>';
            $columns['date'] = esc_html__('Date','softim-core');
            return $columns;
        }

        /**
         * Add team thumbnail
         * @since 1.0.0
         */
        public function add_team_thumbnail_columns($column,$post_id) {
            switch ( $column ) {
                case 'thumbnail' :
                    echo '<a class="row-thumbnail" href="' . esc_url( admin_url( 'post.php?post=' . $post_id . '&amp;action=edit' ) ) . '">' . get_the_post_thumbnail( $post_id, 'thumbnail' ) . '</a>';
                    break;
                default:
                    break;
            }
        }

        /**
         * Team category column customize
         * @since 1.0.0
         */
        public function edit_team_cat_columns($columns){
            $columns['icon'] = esc_html__('Icon','softim-core');
            return $columns;
        }

        /**
         * Team Category column add
         * @since 1.0.0
         */
        public function add_team_category_columns($string,$columns,$post_id){
            $post_term_meta = get_term_meta($post_id,'softim_team_category',true);
            $icon = isset($post_term_meta['icon']) ? $post_term_meta['icon'] : '';
            switch ( $columns ) {
                case 'icon' :
                    echo '<i class="neaterller-font-size50 '.$icon.'"></i>';
                    break;
                default:
                    break;
            }
        }

	}//end class
	if ( class_exists('softim_Post_Column_Customize')){
		softim_Post_Column_Customize::getInstance();
	}
}