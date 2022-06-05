<?php
/*
Plugin Name: Softim Core
Plugin URI: https://themeforest.net/user/themeim/portfolio
Description: Plugin to contain short codes and custom post types of the Softim theme.
Author: Themeim
Author URI: https://themeim.com/
Version: 1.0.1
Text Domain: softim-core
*/


/**
 * If this file is called directly, abort.
 * @package softim
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


/**
 * Plugin directory path
 * @package softim
 * @since 1.0.0
 */
define( 'SOFTIM_CORE_ROOT_PATH', plugin_dir_path( __FILE__ ) );
define( 'SOFTIM_CORE_ROOT_URL', plugin_dir_url( __FILE__ ) );
define( 'SOFTIM_CORE_SELF_PATH', 'softim-core/softim-core.php' );
define( 'SOFTIM_CORE_VERSION', '1.0.0' );
define( 'SOFTIM_CORE_INC', SOFTIM_CORE_ROOT_PATH .'/inc');
define( 'SOFTIM_CORE_LIB', SOFTIM_CORE_ROOT_PATH .'/lib');
define( 'SOFTIM_CORE_ELEMENTOR', SOFTIM_CORE_ROOT_PATH .'/elementor');
define( 'SOFTIM_CORE_DEMO_IMPORT', SOFTIM_CORE_ROOT_PATH .'/demo-import');
define( 'SOFTIM_CORE_ADMIN', SOFTIM_CORE_ROOT_PATH .'/admin');
define( 'SOFTIM_CORE_ADMIN_ASSETS', SOFTIM_CORE_ROOT_URL .'admin/assets');
define( 'SOFTIM_CORE_WP_WIDGETS', SOFTIM_CORE_ROOT_PATH .'/wp-widgets');
define( 'SOFTIM_CORE_ASSETS', SOFTIM_CORE_ROOT_URL .'assets/');
define( 'SOFTIM_CORE_CSS', SOFTIM_CORE_ASSETS .'css');
define( 'SOFTIM_CORE_JS', SOFTIM_CORE_ASSETS .'js');
define( 'SOFTIM_CORE_IMG', SOFTIM_CORE_ASSETS .'img');


/**
 * Load additional helpers functions
 * @package softim
 * @since 1.0.0
 */
if (!function_exists('softim_core')){
	require_once SOFTIM_CORE_INC .'/theme-core-helper-functions.php';
	if (!function_exists('softim_core')){
		function softim_core(){
			return class_exists('Softim_Core_Helper_Functions') ? new Softim_Core_Helper_Functions() : false;
		}
	}
}
//ob flash
remove_action( 'shutdown', 'wp_ob_end_flush_all', 1 );


/**
 * Load Codestar Framework Functions
 * @package softim
 * @since 1.0.0
 */
if ( !softim_core()->is_softim_active()) {
	if ( file_exists( SOFTIM_CORE_ROOT_PATH . '/inc/csf-functions.php' ) ) {
		require_once SOFTIM_CORE_ROOT_PATH . '/inc/csf-functions.php';
	}
}


/**
 * Core Plugin Init
 * @package softim
 * @since 1.0.0
 */
if ( file_exists( SOFTIM_CORE_ROOT_PATH . '/inc/theme-core-init.php' ) ) {
	require_once SOFTIM_CORE_ROOT_PATH . '/inc/theme-core-init.php';
}
