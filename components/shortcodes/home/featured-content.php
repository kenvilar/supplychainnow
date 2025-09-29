<?php
/**
 * Shortcode: [home_featured_content]
 *
 * Renders the Featured Content block using the current post's ACF field
 * 'featured_content'. This shortcode does not accept any attributes.
 */

if ( ! function_exists( 'scn_home_featured_content_shortcode' ) ) {
	function scn_home_featured_content_shortcode( $atts = [] ) {
		$postId           = get_the_ID();
		$featured_content = get_field( 'featured_content', $postId );

		ob_start();
		?>
		<div class="mb-48">
			<div class="flex justify-center gap-28 sm:flex-col">
				<?php
				if ( $featured_content ) {
					foreach ( $featured_content as $index => $item ) {
						$post = $item['featured_content'];
						echo get_template_part( 'components/ui/card1', null, [
							'q'             => [
								'post__in' => [ $post->ID ],
							],
							'q_post'        => [
								'post__in' => [ $post->ID ],
							],
							"post_per_page" => 1,
							'attributes'    => [],
							'classNames'    => '',
						] );
						if ( $index == 1 ) {
							break;
						}
					}
				}
				/*echo get_template_part('components/ui/card1', null, [
					'attributes' => [],
					'classNames' => '',
				]);*/
				?>
			</div>
		</div>
		<div class="mb-64">
			<div class="grid grid-cols-3 justify-center gap-32 sm:grid-cols-2 xs:grid-cols-1">
				<?php
				if ( $featured_content ) {
					foreach ( $featured_content as $index => $item ) {
						if ( $index > 1 ) {
							$post = $item['featured_content'];
							echo get_template_part( 'components/ui/card1', null, [
								'q'             => [
									'post__in' => [ $post->ID ],
								],
								'q_post'        => [
									'post__in' => [ $post->ID ],
								],
								"post_per_page" => 1,
								'card_size'     => 'small',
								'attributes'    => [],
								'classNames'    => '',
							] );
						}
					}
				}
				/*echo get_template_part( 'components/ui/card1', null, [
					"post_per_page" => 3,
					'offset'        => 2,
					'card_size'     => 'small',
					'attributes'    => [],
					'classNames'    => '',
				] );*/
				?>
			</div>
		</div>
		<?php
		return ob_get_clean();
	}
}

// Register the shortcode on init
add_action( 'init', function () {
	add_shortcode( 'home_featured_content', 'scn_home_featured_content_shortcode' );
} );
