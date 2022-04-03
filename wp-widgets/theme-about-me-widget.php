<?php
/**
 * Theme About Me Widget
 * @package Softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit(); //exit if access directly
}
// Control core classes for avoid errors
if (class_exists('CSF')) {


    // Create a About Widget
    CSF::createWidget('softim_about_me_widget', array(
        'title' => esc_html__('Softim: About Me', 'softim-core'),
        'classname' => 'softim-widget-about',
        'description' => esc_html__('Display about me widget', 'softim-core'),
        'fields' => array(
            array(
                'id' => 'heading',
                'type' => 'text',
                'title' => esc_html__('Enter Your Header Title', 'softim-core'),
                'default' => esc_html__('Course Instructor', 'softim-core')
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
            )
        )
    ));


    if (!function_exists('softim_about_me_widget')) {
        function softim_about_me_widget($args, $instance)
        {

            echo $args['before_widget'];


            $instructors = tutor_utils()->get_instructors_by_course();
            // Social media content
            $heading_title = $instance['heading'] ?? '';
            $socialIcon = is_array($instance['softim-social-icon-repeater']) && !empty($instance['softim-social-icon-repeater']) ? $instance['softim-social-icon-repeater'] : [];

            if ($instructors) {
                $count = is_array($instructors) ? count($instructors) : 0;

                ?>
                <h4 class="widget-headline"><?php echo esc_html($heading_title); ?></h4>
                <div class="tutor-course-instructors-wrap" id="single-course-ratings">
                    <?php
                    foreach ($instructors as $instructor) {
                        $profile_url = tutor_utils()->profile_url($instructor->ID);
                        ?>
                        <div class="single-instructor-wrap">
                            <div class="single-instructor-top">
                                <div class="tutor-instructor-left">
                                    <div class="instructor-avatar">
                                        <a href="<?php echo $profile_url; ?>">
                                            <?php echo tutor_utils()->get_tutor_avatar($instructor->ID); ?>
                                        </a>
                                    </div>
                                    <div class="instructor-name">
                                        <h3>
                                            <a href="<?php echo $profile_url; ?>"><?php echo $instructor->display_name; ?></a>
                                        </h3>
                                        <?php
                                        if (!empty($instructor->tutor_profile_job_title)) {
                                            echo "<h4>{$instructor->tutor_profile_job_title}</h4>";
                                        }
                                        ?>
                                        <?php
                                        $instructor_rating = tutor_utils()->get_instructor_ratings($instructor->ID);
                                        ?>
                                        <div class="ratings">
                                            <?php
                                            echo " <span class='rating-digits'>{$instructor_rating->rating_avg}<i class='fas fa-star'></i></span> " . __('Instruction rating', 'softim-core') . "</span> ";
                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="instructor-bio">
                                    <?php echo $instructor->tutor_profile_bio ?>
                                </div>
                                <ul class="social-icon style-03">
                                    <?php
                                    foreach ($socialIcon as $icon) {
                                        printf('<li><a href="%2$s"><i class="%1$s"></i></a></li>', esc_html($icon['softim-social-icon']), esc_url($icon['softim-social-text']));
                                    };
                                    ?>
                                </ul>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <?php
            }


            echo $args['after_widget'];

        }
    }

}

?>