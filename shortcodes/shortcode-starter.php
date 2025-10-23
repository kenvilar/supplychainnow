<?php

if ( ! function_exists( 'starter_shortcode' ) ) {
	function starter_shortcode( $atts, $content = null ) {
		$defaults = array(
			'class' => '',
			'id'    => '',
		);

		$raw_atts = is_array( $atts ) ? $atts : array();
		$atts     = shortcode_atts( $defaults, $raw_atts );

		$class = esc_attr( $atts['class'] );
		$id    = esc_attr( $atts['id'] );
		ob_start();
		?>
    <div class="<?= $class; ?>" id="<?= $id; ?>">
      This is a starter shortcode.
    </div>
		<?php
		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'starter', 'starter_shortcode' );
} );