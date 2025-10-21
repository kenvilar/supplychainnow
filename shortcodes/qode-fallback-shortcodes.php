<?php
/*
Plugin Name: Qode Shortcodes Fallback
Description: Provides fallback handlers for removed Qode shortcodes and cleans up leftover tags so pages render consistently.
Author: Site Maintenance
Version: 1.0.0
*/

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register fallback shortcodes for Qode elements so content doesn't render raw tags.
 */
function qode_fallback_register_shortcodes() {
	add_shortcode( 'qode_elements_holder', 'qode_fallback_elements_holder_shortcode' );
	add_shortcode( 'qode_elements_holder_item', 'qode_fallback_elements_holder_item_shortcode' );
}

add_action( 'init', 'qode_fallback_register_shortcodes' );

/**
 * Fallback for [qode_elements_holder] ... [/qode_elements_holder]
 * Acts as a simple wrapper that renders inner items.
 */
function qode_fallback_elements_holder_shortcode( $atts, $content = null ) {
	$content = isset( $content ) ? $content : '';

	return '<div class="qode-fallback-holder">' . do_shortcode( $content ) . '</div>';
}

/**
 * Fallback for [qode_elements_holder_item background_image="338" item_padding="200px 0 200px 0" ...] ... [/qode_elements_holder_item]
 * Renders a basic, responsive banner section with background image and padding.
 */
function qode_fallback_elements_holder_item_shortcode( $atts, $content = null ) {
	$atts = shortcode_atts(
		array(
			'background_image'     => '',
			'item_padding'         => '120px 0 120px 0',
			'vertical_alignment'   => 'middle', // top|middle|bottom
			'horizontal_alignment' => 'center', // left|center|right
			'cover'                => 'yes',
		),
		$atts,
		'qode_elements_holder_item'
	);

	$bg_url  = '';
	$bg_attr = trim( (string) $atts['background_image'] );

	if ( $bg_attr !== '' ) {
		// Accept IDs or URLs
		$maybe = trim( $bg_attr, '"\'' );
		if ( is_numeric( $maybe ) ) {
			$maybe_url = wp_get_attachment_image_url( (int) $maybe, 'full' );
			if ( $maybe_url ) {
				$bg_url = $maybe_url;
			}
		} elseif ( filter_var( $maybe, FILTER_VALIDATE_URL ) ) {
			$bg_url = $maybe;
		}
	}

	$padding = trim( (string) $atts['item_padding'] );
	if ( $padding === '' ) {
		$padding = '120px 0 120px 0';
	}

	$valign = strtolower( (string) $atts['vertical_alignment'] );
	$halign = strtolower( (string) $atts['horizontal_alignment'] );

	$align_items = 'center';
	if ( $valign === 'top' ) {
		$align_items = 'flex-start';
	} elseif ( $valign === 'bottom' ) {
		$align_items = 'flex-end';
	}

	$justify_content = 'center';
	if ( $halign === 'left' ) {
		$justify_content = 'flex-start';
	} elseif ( $halign === 'right' ) {
		$justify_content = 'flex-end';
	}

	$outer_styles   = array();
	$outer_styles[] = 'padding:' . $padding;
	if ( $bg_url ) {
		$outer_styles[] = 'background-image:url(' . esc_url( $bg_url ) . ')';
		$outer_styles[] = 'background-position:center';
		$outer_styles[] = 'background-repeat:no-repeat';
		$outer_styles[] = 'background-size:' . ( strtolower( (string) $atts['cover'] ) === 'no' ? 'contain' : 'cover' );
	}
	$outer_style_attr = esc_attr( implode( ';', $outer_styles ) );

	$inner_style_attr = esc_attr( 'display:flex;align-items:' . $align_items . ';justify-content:' . $justify_content . ';width:100%;' );

	$html = '<section class="qode-fallback-banner" style="' . $outer_style_attr . '">';
	$html .= '<div class="qode-fallback-banner__inner" style="' . $inner_style_attr . '">';
	$html .= '<div class="qode-fallback-banner__content">';
	$html .= do_shortcode( $content );
	$html .= '</div>';
	$html .= '</div>';
	$html .= '</section>';

	return $html;
}

/**
 * After shortcodes run, strip any remaining unknown [qode_*] tags to prevent raw shortcode text on pages.
 * This preserves inner content by removing only the tags themselves.
 */
function qode_fallback_strip_unknown_qode_shortcodes( $content ) {
	if ( strpos( $content, '[qode_' ) === false ) {
		return $content;
	}
	// Remove opening tags like [qode_xyz ...]
	$content = preg_replace( '/\[(qode_[a-z0-9_]+)([^\]]*)\]/i', '', $content );
	// Remove closing tags like [/qode_xyz]
	$content = preg_replace( '/\[(\/qode_[a-z0-9_]+)\]/i', '', $content );

	return $content;
}

add_filter( 'the_content', 'qode_fallback_strip_unknown_qode_shortcodes', 99 );

/**
 * Minimal CSS so fallback banners are centered and consistent with typical page containers.
 */
function qode_fallback_enqueue_inline_styles() {
	$css = '
.qode-fallback-banner { position: relative; width: 100%; }
.qode-fallback-banner__inner { width: 100%; }
.qode-fallback-banner__content { width: 100%; max-width: 1100px; margin: 0 auto; padding-left: 1rem; padding-right: 1rem; text-align: center; }
.qode-fallback-holder { width: 100%; }
';
	if ( ! wp_style_is( 'qode-fallback-inline', 'registered' ) ) {
		wp_register_style( 'qode-fallback-inline', false );
	}
	wp_enqueue_style( 'qode-fallback-inline' );
	wp_add_inline_style( 'qode-fallback-inline', $css );
}

add_action( 'wp_enqueue_scripts', 'qode_fallback_enqueue_inline_styles' );
