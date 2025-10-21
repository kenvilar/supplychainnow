<?php

/**
 * Plugin Fallback Handler: Bridge Core shortcode
 *
 * When the Bridge Core plugin is removed, any leftover shortcodes in
 * content would render as raw text. This fallback registers a no-op handler so
 * WordPress consumes the shortcode and outputs nothing.
 *
 * Safe behavior:
 * - Runs early on init (priority 1)
 * - Only registers the fallback if the shortcode tag doesn't already exist
 *   (so if the plugin returns, it takes precedence)
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Prevent direct access
}

add_action( 'init', function () {
	$tag = 'icons';
	if ( ! shortcode_exists( $tag ) ) {
		add_shortcode( $tag, function ( $atts = [], $content = null ) {
			return '';
		} );
	}

	$tag1 = 'button';
	if ( ! shortcode_exists( $tag1 ) ) {
		add_shortcode( $tag1, function ( $atts = [], $content = null ) {
			return '';
		} );
	}
}, 1 );
