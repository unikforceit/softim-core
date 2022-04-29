<?php
/**
 * Theme Category Widget
 * @package Softim
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit(); //exit if access directly
}

class Softim_Category_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'softim_category',
            esc_html__( 'Softim:  Category', 'softim-core' ),
            array( 'description' => esc_html__( 'Display  categories', 'softim-core' ) )
        );
    }

    public function widget( $args, $instance ) {

        $allowed_html = softim()->kses_allowed_html('all');
        $title = isset($instance['title']) && !empty($instance['title']) ? $instance['title'] : '';
        $number      = $instance['number'] ?? '';
        $order       = isset( $instance['order'] ) && ! empty( $instance['order'] ) ? $instance['order'] : 'ASC';
        $taxonomy = isset($instance['taxonomy']) && !empty($instance['taxonomy']) ? $instance['taxonomy'] : 'category';
        $orderby     = isset( $instance['orderby'] ) && ! empty( $instance['orderby'] ) ? $instance['orderby'] : 'ID';
        echo wp_kses( $args['before_widget'] ,$allowed_html);
        if (!empty($title)) {
            echo wp_kses_post($args['before_title']) . esc_html($title) . wp_kses_post($args['after_title']);
        }
        $all_terms = get_terms( array(
            'taxonomy'   => $taxonomy,
            'hide_empty' => true,
            'orderby'    => $orderby,
            'order'      => $order,
            'number'     => $number,
        ) );

        //have to write code for displing query data
        if ( ! empty( $all_terms ) ):?>
            <ul>
            <?php
            $all_cat_related_to_post = [];
            $all_cat = wp_get_post_terms(get_the_ID(),$taxonomy);
            foreach($all_cat as $cat){ array_push($all_cat_related_to_post,$cat->term_id); }
            ?>
            <?php foreach ( $all_terms as $term ):
                $acive_class = in_array($term->term_id,$all_cat_related_to_post) ? 'class="service-item-list style-01 active"' : 'class="service-item-list style-01"';

                printf( '<li><a  %3$s href="%1$s">%2$s<span class="arrow-icon">(%4$s)</span></a></li>',
                    get_term_link( $term->term_id ),
                    $term->name ,
                    $acive_class,
                    $term->count
                );
            endforeach;
        else:
            esc_html__( ' Oops, there are no category.', 'softim-core' )
            ?>
        <?php endif; ?>
        </ul>
        <?php
        echo wp_kses( $args['after_widget'] ,$allowed_html);
    }

    public function form( $instance ) {
        //have to create form instance

        if (!empty($instance) && $instance['title']) {

            $title = apply_filters('widget_title', $instance['title']);

        } else {

            $title = esc_html__('Category', 'softim-core');

        }

        $order       = ! empty( $instance ) && $instance['order'] ? $instance['order'] : 'ASC';
        $number      = $instance['number'] ?? '';
        $orderby     = ! empty( $instance ) && $instance['orderby'] ? $instance['orderby'] : 'ID';
        $taxonomy = array(
            'category' => esc_html__('Blog Category', 'softim-core'),
            'service-cat' => esc_html__('Service Category', 'softim-core'),
            'team-cat' => esc_html__('Team Category', 'softim-core'),
            'project-cat' => esc_html__('Project Category', 'softim-core')
        );
        $order_arr   = array(
            'ASC'  => esc_html__( 'Acceding', 'softim-core' ),
            'DESC' => esc_html__( 'Descending', 'softim-core' )
        );
        $orderby_arr = array(
            'ID'            => esc_html__( 'ID', 'softim-core' ),
            'title'         => esc_html__( 'Title', 'softim-core' ),
            'date'          => esc_html__( 'Date', 'softim-core' ),
            'rand'          => esc_html__( 'Random', 'softim-core' )
        );

        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('taxonomy')) ?>"><?php esc_html_e('Taxonomy', 'softim-core'); ?></label>

            <select name="<?php echo esc_attr($this->get_field_name('taxonomy')) ?>" class="widefat"
                    id="<?php echo esc_attr($this->get_field_id('taxonomy')) ?>">

                <?php

                foreach ($taxonomy as $key => $value) {

                    $checked = ($key == $order) ? 'selected' : '';

                    printf('<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked);

                }
                ?>
            </select>
        </p>
        <p>

            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:', 'softim-core'); ?></label>

            <input type="text" class="widefat" id="<?php echo esc_attr($this->get_field_id('title')) ?>"
                   name="<?php echo esc_attr($this->get_field_name('title')); ?>"
                   value="<?php echo esc_attr($title) ?>">

        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'order' ) ) ?>"><?php esc_html_e( 'Order', 'softim-core' ); ?></label>
            <select name="<?php echo esc_attr( $this->get_field_name( 'order' ) ) ?>" class="widefat"
                    id="<?php echo esc_attr( $this->get_field_id( 'order' ) ) ?>">
                <?php
                foreach ( $order_arr as $key => $value ) {
                    $checked = ( $key == $order ) ? 'selected' : '';
                    printf( '<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked );
                }
                ?>
            </select>

        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ) ?>"><?php esc_html_e( 'OrderBy', 'softim-core' ); ?></label>
            <select name="<?php echo esc_attr( $this->get_field_name( 'orderby' ) ) ?>" class="widefat"
                    id="<?php echo esc_attr( $this->get_field_id( 'orderby' ) ) ?>">
                <?php
                foreach ( $orderby_arr as $key => $value ) {
                    $checked = ( $key == $orderby ) ? 'selected' : '';
                    printf( '<option value="%1$s" %3$s >%2$s</option>', $key, $value, $checked );
                }
                ?>
            </select>

        </p>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('number')) ?>"><?php esc_html_e('Number', 'softim-core'); ?></label>
            <input type="number" name="<?php echo esc_attr($this->get_field_name('number')) ?>" class="widefat"
                   id="<?php echo esc_attr($this->get_field_id('number')) ?>" value="<?php echo esc_attr($number) ?>">
        </p>
        <?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance                = array();
        $instance['title'] = (!empty($new_instance['title']) ? sanitize_text_field($new_instance['title']) : '');
        $instance['number']      = (!empty($new_instance['number']) ? sanitize_text_field($new_instance['number']) : '');
        $instance['taxonomy'] = (!empty($new_instance['taxonomy']) ? sanitize_text_field($new_instance['taxonomy']) : '');
        $instance['order']       = ( ! empty( $new_instance['order'] ) ? sanitize_text_field( $new_instance['order'] ) : '' );
        $instance['orderby']     = ( ! empty( $new_instance['orderby'] ) ? sanitize_text_field( $new_instance['orderby'] ) : '' );

        return $instance;
    }

} // end class

if ( ! function_exists( 'Softim_Category_Widget' ) ) {
    function Softim_Category_Widget() {
        register_widget( 'Softim_Category_Widget' );
    }

    add_action( 'widgets_init', 'Softim_Category_Widget' );
}