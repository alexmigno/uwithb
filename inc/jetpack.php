<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package uwithb
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function uwithb_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'uwithb_jetpack_setup' );
