<?php
/**
 * Shortcode: [on_demand_programming_tab_link]
 *
 * Attributes:
 * - href (string) - href of the <a> tag. Default: /on-demand-programming
 * - text (string) - inner text content. Default: All Content
 * - currentLink (bool|string) - whether to include the `w--current` class. Accepts: true/false/1/0/yes/no/on/off. Default: false
 *
 * Output:
 * <a href="..." class="on-demand-programming-link w-inline-block [w--current]"><div>...</div></a>
 */

if ( ! function_exists( 'on_demand_programming_tab_link_shortcode' ) ) {
	/**
	 * Render the on_demand_programming_tab_link shortcode.
	 *
	 * @param array<string, mixed> $atts
	 *
	 * @return string
	 */
	function on_demand_programming_tab_link_shortcode( $atts = [] ): string {
		$atts = shortcode_atts(
			[
				'href'        => '/on-demand-programming',
				'text'        => 'All Content',
				'currentLink' => false,
			],
			$atts,
			'on_demand_programming_tab_link'
		);

		// Normalize currentLink to boolean
		$currentRaw = $atts['currentLink'];
		if ( is_bool( $currentRaw ) ) {
			$isCurrent = $currentRaw;
		} else {
			$val       = strtolower( trim( (string) $currentRaw ) );
			$isCurrent = in_array( $val, [ '1', 'true', 'yes', 'on' ], true );
		}

		$classes = 'on-demand-programming-link w-inline-block';
		if ( $isCurrent ) {
			$classes .= ' w--current';
		}

		$href  = esc_url( (string) $atts['href'] );
		$text  = esc_html( (string) $atts['text'] );
		$class = esc_attr( $classes );

		return sprintf(
			'<a href="%s" class="%s"><div>%s</div></a>',
			$href,
			$class,
			$text
		);
	}

	add_shortcode( 'on_demand_programming_tab_link', 'on_demand_programming_tab_link_shortcode' );
}