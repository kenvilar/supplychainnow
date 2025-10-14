<?php
/**
 * Shortcode: [heading_separator]
 *
 * Outputs a horizontal line with a blinking dot. Accepts an optional
 * attribute maxWidthClassnames to append max-width related utility classes.
 *
 * Example usage:
 *   [heading_separator]
 *   [heading_separator maxWidthClassnames="bg-white/25"]
 */

if ( ! function_exists( 'scn_heading_separator_shortcode' ) ) {
	function scn_heading_separator_shortcode( $atts = [] ) {
		// WordPress lowercases attribute keys, so support both variants.
		$defaults = [
			'maxWidthClassnames' => '',
			'maxwidthclassnames' => '',
		];
		$atts     = shortcode_atts( $defaults, $atts, 'heading_separator' );

		$max = $atts['maxWidthClassnames'] !== ''
			? $atts['maxWidthClassnames']
			: $atts['maxwidthclassnames'];

		ob_start();
		?>
		<div class="max-w-136 w-full h-1 relative bg-cargogrey/25 mx-auto <?= esc_attr( $max ); ?>">
			<div class="absolute absolute--r flex items-center pr-32">
				<div blinking-dot class="size-8 rounded-8 bg-primary"></div>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'heading_separator', 'scn_heading_separator_shortcode' );
} );
