<?php
/*
Plugin Name: FacetWP Shortcodes Fallback
Description: Provides a fallback for FacetWP shortcodes (e.g., [facetwp]) and removes leftover tags so pages render cleanly without the plugin.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fallback handler for [facetwp ...] ... [/facetwp]
 * FacetWP shortcodes are often self-closing; if inner content exists, render it.
 */
function wp_fallback_facetwp_shortcode( $atts = array(), $content = null ) {
	return do_shortcode( (string) $content );
}

add_shortcode( 'facetwp', 'wp_fallback_facetwp_shortcode' );

/**
 * After shortcodes run, strip any remaining [facetwp ...] and [/facetwp] tags
 * to prevent raw shortcode text on pages, preserving inner content.
 */
function wp_fallback_strip_unknown_facetwp_shortcodes( $content ) {
	if ( strpos( $content, '[facetwp' ) === false ) {
		return $content;
	}
	// Remove opening/self-closing tags like [facetwp ...]
	$content = preg_replace( '/\[facetwp([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/facetwp]
	$content = preg_replace( '/\[(\/facetwp)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'wp_fallback_strip_unknown_facetwp_shortcodes', 99 );
