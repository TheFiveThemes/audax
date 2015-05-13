<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package Audax
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function audax_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'audax_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function audax_jetpack_setup
add_action( 'after_setup_theme', 'audax_jetpack_setup' );

function audax_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function audax_infinite_scroll_render