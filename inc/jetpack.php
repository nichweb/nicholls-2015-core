<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @packageNicholls 2015 Core
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function nicholls_core_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'nicholls_core_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function nicholls_core_jetpack_setup
add_action( 'after_setup_theme', 'nicholls_core_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function nicholls_core_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function nicholls_core_infinite_scroll_render
