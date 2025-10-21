<?php
/*
Plugin Name: WonderPlugin Shortcodes Fallback
Description: Provides fallback for WonderPlugin shortcodes and cleans up leftover tags so pages render without raw shortcode text.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Fallback handler for [wonderplugin_carousel ...] so it doesn't render raw text.
 * Since the original plugin stores carousel configs elsewhere, we cannot rebuild it reliably.
 * Returning an empty string removes the visible shortcode without breaking layout.
 */
function wp_fallback_wonderplugin_carousel_shortcode( $atts = array(), $content = null ) {
	// Optionally, you could return $content if some uses embed inner HTML.
	return '';
}

add_shortcode( 'wonderplugin_carousel', 'wp_fallback_wonderplugin_carousel_shortcode' );

/**
 * After shortcodes run, strip any remaining unknown [wonderplugin_*] tags to prevent raw shortcode text on pages.
 * This preserves inner content by removing only the tags themselves.
 */
function wp_fallback_strip_unknown_wonderplugin_shortcodes( $content ) {
	if ( strpos( $content, '[wonderplugin_' ) === false ) {
		return $content;
	}
	// Remove opening/self-closing tags like [wonderplugin_xyz ...]
	$content = preg_replace( '/\[(wonderplugin_[a-z0-9_]+)([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/wonderplugin_xyz]
	$content = preg_replace( '/\[(\/wonderplugin_[a-z0-9_]+)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'wp_fallback_strip_unknown_wonderplugin_shortcodes', 99 );
