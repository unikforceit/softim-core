<?php
/**
 * Theme Social Share Widget
 * @package Softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('softim_social_share_widget', array(
        'title' => esc_html__('Softim: Social Share', 'softim-core'),
        'classname' => 'softim-social-share-about',
        'description' => esc_html__('Display Social Share widget', 'softim-core'),
        'fields' => array(
            array(
                'id' => 'heading',
                'type' => 'text',
                'title' => esc_html__('Enter Your Header Title', 'softim-core'),
                'default' => esc_html__('Never Miss News', 'softim-core')
            ),
            array(
                'id' => 'softim-social-icon-repeater',
                'type' => 'repeater',
                'title' => esc_html__('Social Icon', 'softim-core'),
                'fields' => array(
                    array(
                        'id' => 'softim-social-icon',
                        'type' => 'icon',
                        'title' => esc_html__('Icon', 'softim-core'),
                        'default' => 'fab fa-facebook'
                    ),
                    array(
                        'id' => 'softim-social-text',
                        'type' => 'text',
                        'title' => esc_html__('Enter Your Ulr', 'softim-core'),
                        'default' => '#'
                    ),
                ),
            ),
        )
    ));


    if (!function_exists('softim_social_share_widget')) {
        function softim_social_share_widget($args, $instance)
        {

            echo $args['before_widget'];
            

            $heading_title = $instance['heading'] ?? '';
            $socialIcon = is_array($instance['softim-social-icon-repeater']) && !empty($instance['softim-social-icon-repeater']) ? $instance['softim-social-icon-repeater'] : [];


            ?>
            <div class="social-share-widget">
                <h4 class="widget-headline"><?php echo esc_html($heading_title); ?></h4>
                <ul class="social-icon style-03">
                    <?php
                    foreach ($socialIcon as $icon) {
                        printf('<li><a href="%2$s"><i class="%1$s"></i></a></li>', esc_html($icon['softim-social-icon']), esc_url($icon['softim-social-text']));
                    };
                    ?>
                </ul>
            </div>

            <?php

            echo $args['after_widget'];

        }
    }

}

?>