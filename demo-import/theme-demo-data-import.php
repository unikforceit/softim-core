<?php

/**
 * One click demo setup
 */

function softim_import_files()
{
    return [
        [
            'import_file_name'           => 'Home 01',
//            'categories'                   => 'softim',
            'local_import_file'            => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/content.xml',
            'local_import_customizer_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/customize.dat',
            'local_import_widget_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/widgets.wie',
            'local_import_json' => array(
                array(
                    'file_path'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/theme-settings.json',
                    'option_name'   => 'softim_theme_options',
                ),
            ),
            'import_notice' => esc_html__( 'Please Give Some Time To Import Theme Demo Data, It May Take 5-10 Minutes, It Will Download All Theme Data From Server So Be Cool!.', 'appside-master' ),
            'preview_url'   => 'https://themeim.com/wp/softim',
            'import_preview_image_url' => SOFTIM_CORE_ROOT_URL .'demo-import/demo-data/home-1/home-1.jpg'
        ],
        [
            'import_file_name'           => 'Home 02',
//            'categories'                   => 'softim',
            'local_import_file'            => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/content.xml',
            'local_import_customizer_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/customize.dat',
            'local_import_widget_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/widgets.wie',
            'local_import_json' => array(
                array(
                    'file_path'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/theme-settings.json',
                    'option_name'   => 'softim_theme_options',
                ),
            ),
            'import_notice' => esc_html__( 'Please Give Some Time To Import Theme Demo Data, It May Take 5-10 Minutes, It Will Download All Theme Data From Server So Be Cool!.', 'appside-master' ),
            'preview_url'   => 'https://themeim.com/wp/softim',
            'import_preview_image_url' => SOFTIM_CORE_ROOT_URL .'demo-import/demo-data/home-2/home-2.jpg'
        ],
        [
            'import_file_name'           => 'Home 03',
//            'categories'                   => 'softim',
            'local_import_file'            => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/content.xml',
            'local_import_customizer_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/customize.dat',
            'local_import_widget_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/widgets.wie',
            'local_import_json' => array(
                array(
                    'file_path'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/theme-settings.json',
                    'option_name'   => 'softim_theme_options',
                ),
            ),
            'import_notice' => esc_html__( 'Please Give Some Time To Import Theme Demo Data, It May Take 5-10 Minutes, It Will Download All Theme Data From Server So Be Cool!.', 'appside-master' ),
            'preview_url'   => 'https://themeim.com/wp/softim',
            'import_preview_image_url' => SOFTIM_CORE_ROOT_URL .'demo-import/demo-data/home-3/home-3.jpg'
        ],
        [
            'import_file_name'           => 'Home 04',
//            'categories'                   => 'softim',
            'local_import_file'            => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/content.xml',
            'local_import_customizer_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/customize.dat',
            'local_import_widget_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/widgets.wie',
            'local_import_json' => array(
                array(
                    'file_path'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/theme-settings.json',
                    'option_name'   => 'softim_theme_options',
                ),
            ),
            'import_notice' => esc_html__( 'Please Give Some Time To Import Theme Demo Data, It May Take 5-10 Minutes, It Will Download All Theme Data From Server So Be Cool!.', 'appside-master' ),
            'preview_url'   => 'https://themeim.com/wp/softim',
            'import_preview_image_url' => SOFTIM_CORE_ROOT_URL .'demo-import/demo-data/home-4/home-4.jpg'
        ],
        [
            'import_file_name'           => 'Home 05',
//            'categories'                   => 'softim',
            'local_import_file'            => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/content.xml',
            'local_import_customizer_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/customize.dat',
            'local_import_widget_file'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/widgets.wie',
            'local_import_json' => array(
                array(
                    'file_path'     => trailingslashit(SOFTIM_CORE_ROOT_PATH) . 'demo-import/demo-data/home-1/theme-settings.json',
                    'option_name'   => 'softim_theme_options',
                ),
            ),
            'import_notice' => esc_html__( 'Please Give Some Time To Import Theme Demo Data, It May Take 5-10 Minutes, It Will Download All Theme Data From Server So Be Cool!.', 'appside-master' ),
            'preview_url'   => 'https://themeim.com/wp/softim',
            'import_preview_image_url' => SOFTIM_CORE_ROOT_URL .'demo-import/demo-data/home-5/home-5.jpg'
        ],
    ];
}
add_filter('ocdi/import_files', 'softim_import_files');


// Before Import
function softim_clear_before_import() {
    global $wpdb;
    //delete posts
    $tables = ['commentmeta','comments','postmeta','posts','termmeta','terms','term_relationships','term_taxonomy'];

    foreach ( $tables as $table ) {
        $table  = $wpdb->prefix . $table;
        $wpdb->query( "TRUNCATE TABLE $table" );
    }
}
add_action( 'pt-ocdi/before_content_import', 'softim_clear_before_import' );

// After Import
function softim_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );


    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id, // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );

    // Assign front page and posts page (blog page).
    if ($selected_import['import_file_name'] === 'Home 02') {
        $front_page_id = get_page_by_title('Home 02');
    }elseif ($selected_import['import_file_name'] === 'Home 03') {
        $front_page_id = get_page_by_title('Home 03');
    }elseif ($selected_import['import_file_name'] === 'Home 04') {
        $front_page_id = get_page_by_title('Home 04');
    }else {
        $front_page_id = get_page_by_title('Home 01');
    }

    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'softim_after_import_setup' );