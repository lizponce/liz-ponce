<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package lp-bootstrap
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function lp_bootstrap_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'lp_bootstrap_jetpack_setup' );
