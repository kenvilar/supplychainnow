<?php
/**
 * Shortcode: [btn]
 * Usage examples:
 *   [btn text="Learn more" link="/about" style="primary" class="mt-4" target="_blank" rel="noopener"]
 *   [btn link="/contact" style="secondary"]Contact us[/btn]
 *
 * Mirrors components/ui/btn.php output and allows passing extra HTML attributes
 * via arbitrary shortcode attributes (e.g., target, rel, data-*), which are sanitized.
 */

if ( ! function_exists( 'scn_btn_shortcode' ) ) {
	function scn_btn_shortcode( $atts, $content = null ) {
		$defaults = array(
			'text'  => 'Button Secondary',
			'link'  => '#',
			'style' => 'tertiary', // options: primary, secondary, tertiary, primary-outline, secondary-outline
			'class' => '',
		);

		// Preserve raw atts to keep any extra HTML attributes (e.g., target, rel, data-*)
		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts, 'btn' );

		// If content is provided, prefer it as button text
		$text = isset( $content ) && trim( $content ) !== '' ? $content : $atts['text'];

		// Build extra attributes from the raw atts (exclude known keys)
		$extra_atts  = array_diff_key( $raw_atts, $defaults );
		$attr_string = '';
		foreach ( $extra_atts as $key => $value ) {
			if ( $value === '' ) {
				continue;
			}
			$attr_string .= sprintf( ' %s="%s"', esc_attr( $key ), esc_attr( $value ) );
		}

		$href    = esc_url( $atts['link'] );
		$classes = trim( sprintf( 'btn %s w-inline-block %s', $atts['style'], $atts['class'] ) );

		return sprintf(
			'<a href="%s" class="%s"%s>%s</a>',
			$href,
			esc_attr( $classes ),
			$attr_string,
			esc_html( $text )
		);
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'btn', 'scn_btn_shortcode' );
} );
