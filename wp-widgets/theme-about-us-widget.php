<?php
/**
 * Theme About Us Widget
 * @package Softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('softim_about_widget', array(
        'title' => esc_html__('Softim: About Us', 'softim-core'),
        'classname' => 'softim-widget-about',
        'description' => esc_html__('Display about us widget', 'softim-core'),
        'fields' => array(
            array(
                'id' => 'logo-area',
                'type' => 'media',
                'title' => esc_html__('Upload Your Photo', 'softim-core'),
            ),
            array(
                'id' => 'description',
                'type' => 'textarea',
                'title' => esc_html__('Description', 'Softim-core'),
                'default' => esc_html__('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.', 'softim-core')
            ),

            array(
                'id' => 'softim-footer-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'softim-core'),
                'fields' => array(

                    array(
                        'id' => 'softim-footer-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim-core'),
                        'default' => 'flaticon-call'
                    ),
                    array(
                        'id' => 'softim-footer-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Url', 'softim-core'),
                        'default' => esc_html__('#', 'softim-core')
                    ),

                ),
            ),
        )
    ));


    if (!function_exists('softim_about_widget')) {
        function softim_about_widget($args, $instance)
        {

            echo $args['before_widget'];

            // var_dump( $args ); // Widget arguments
            // var_dump( $instance ); // Saved values from database

            $instance['logo-area'];
            $logo = $instance['logo-area'];
            $img_id = $logo['id'] ?? '';
            $img_print = $img_id ? wp_get_attachment_image_src($img_id,'full')[0] : '';
            $alt_text = get_post_meta($img_id, '_wp_attachment_image_alt', true);
            $paragraph = $instance['description'] ?? '';
            $socialIcon = is_array($instance['softim-footer-social-icon-repeater']) && !empty($instance['softim-footer-social-icon-repeater']) ? $instance['softim-footer-social-icon-repeater'] : [];


            ?>
            <div class="footer-widget widget">
                <div class="about_us_widget style-01">
                    <a href="<?php echo get_home_url(); ?>" class="footer-logo"><?php
                        if (!empty($img_print)) {
                            printf('<img src="%1$s" alt="%2$s"/>', esc_url($img_print), esc_attr($alt_text));
                        }
                        ?></a>
                    <p> <?php echo $paragraph; ?></p>
                    <ul class="contact_info_list">
                        <?php
                        foreach ($socialIcon as $icon) {
                            echo '<li class="single-info-item">
                            <div class="icon"><a href="'.$icon['softim-footer-social-text'].'">
                                <i class="' . $icon['softim-footer-social-icon'] . '"></i></a>
                            </div>
                        </li>';
                        };
                        ?>
                    </ul>
                </div>
            </div>

            <?php

            echo $args['after_widget'];

        }
    }

}

?>