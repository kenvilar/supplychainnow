<?php
/*
Plugin Name: Counter & Testimonials Shortcodes Fallback
Description: Provides fallbacks for [counter] and [testimonials] shortcodes and strips leftover tags so pages render cleanly when providers are inactive.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	return;
}

/**
 * Generic fallback: return inner content (if any), otherwise empty string.
 */
function scn_fallback_return_inner_content( $atts = array(), $content = null ) {
	return do_shortcode( (string) $content );
}

add_action( 'init', function () {
	$tags = array( 'counter', 'testimonials' );
	foreach ( $tags as $tag ) {
		if ( ! shortcode_exists( $tag ) ) {
			add_shortcode( $tag, 'scn_fallback_return_inner_content' );
		}
	}
}, 1 );

/**
 * Strip remaining shortcode tags while preserving any inner content.
 */
function scn_strip_unknown_counter_testimonials_shortcodes( $content ) {
	if ( $content === null || $content === '' ) {
		return $content;
	}

	// Quick bail if neither tag appears
	if ( stripos( $content, '[counter' ) === false && stripos( $content, '[testimonials' ) === false ) {
		return $content;
	}

	// Remove opening/self-closing tags like [counter ...] or [testimonials ...]
	$content = preg_replace( '/\[(counter|testimonials)([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/counter] or [/testimonials]
	$content = preg_replace( '/\[\/(counter|testimonials)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'scn_strip_unknown_counter_testimonials_shortcodes', 99 );
