<?php
/**
 * Astra-child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra-child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

// K-Board Change Text

add_filter('gettext', 'my_gettext', 10, 3);
function my_gettext($translated_text, $text, $domain){
	if($domain == 'kboard'){
		switch ($translated_text){
			case 'KBoard Add Media': $translated_text = 'Upload Image'; break;
		}
	}
	
	return $translated_text;
}