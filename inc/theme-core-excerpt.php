<?php
/**
 * Theme Excerpt Class
 * @package softim
 * @since 1.0.0
 */

if (!defined('ABSPATH')){
	exit(); //exit if access it directly
}

if (!class_exists('Softim_Core_excerpt')):
class Softim_Core_excerpt {

    public static $length = 55;

    public static $types = array(
      'short' => 25,
      'regular' => 55,
      'long' => 100,
      'promo'=>15
    );

    public static $more = true;

    /**
     * Sets the length for the excerpt
     * @package softim
     */ 
    public static function length($new_length = 55, $more = true) {
        Softim_Core_excerpt::$length = $new_length;
        Softim_Core_excerpt::$more = $more;

        add_filter( 'excerpt_more', 'Softim_Core_excerpt::auto_excerpt_more' );

        add_filter('excerpt_length', 'Softim_Core_excerpt::new_length');

        Softim_Core_excerpt::output();
    }

    public static function new_length() {
        if( isset(Softim_Core_excerpt::$types[Softim_Core_excerpt::$length]) )
            return Softim_Core_excerpt::$types[Softim_Core_excerpt::$length];
        else
            return Softim_Core_excerpt::$length;
    }

    public static function output() {
        the_excerpt();
    }

    public static function continue_reading_link() {

        return '<span class="readmore"><a href="'.get_permalink().'">'.esc_html__('Read More','softim-core').'</a></span>';
    }

    public static function auto_excerpt_more( ) {
        if (Softim_Core_excerpt::$more) :
            return ' ';
        else :
            return ' ';
        endif;
    }

} //end class
endif;

if (!function_exists('softim_core_excerpt')){

	function Softim_Core_excerpt($length = 55, $more=true) {
		Softim_Core_excerpt::length($length, $more);
	}

}


?>