<?php
/*
Plugin Name: Popup Builder Shortcodes Fallback
Description: Provides a fallback for Popup Builder shortcodes (e.g., [sg_popup]) and removes leftover tags so pages render cleanly without the plugin.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fallback handler for [sg_popup ...] ... [/sg_popup]
 * Renders inner content only, removing raw shortcode text.
 */
function wp_fallback_sg_popup_shortcode( $atts = array(), $content = null ) {
	// Ensure inner content (e.g., "Click Me" button label) is displayed.
	return do_shortcode( (string) $content );
}

add_shortcode( 'sg_popup', 'wp_fallback_sg_popup_shortcode' );

/**
 * After shortcodes run, strip any remaining unknown [sg_*] tags to prevent raw shortcode text on pages.
 * This preserves inner content by removing only the tags themselves.
 */
function wp_fallback_strip_unknown_sg_shortcodes( $content ) {
	if ( strpos( $content, '[sg_' ) === false ) {
		return $content;
	}

	// Remove opening/self-closing tags like [sg_xyz ...]
	$content = preg_replace( '/\[(sg_[a-z0-9_]+)([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/sg_xyz]
	$content = preg_replace( '/\[(\/sg_[a-z0-9_]+)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'wp_fallback_strip_unknown_sg_shortcodes', 99 );
