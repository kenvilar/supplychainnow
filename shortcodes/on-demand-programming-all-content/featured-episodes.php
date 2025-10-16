<?php

if ( ! function_exists( 'on_demand_programming_all_content_featured_episodes_shortcode' ) ) {
	function on_demand_programming_all_content_featured_episodes_shortcode( $atts = [] ) {
		$pageID                    = get_the_ID();
		$featured_content_podcasts = get_field( 'featured_content_podcasts', $pageID );
		ob_start();
		?>
		<div role="list" class="flex justify-center gap-28 sm:flex-col w-dyn-items">
			<?php
			if ( $featured_content_podcasts ) {
				foreach ( $featured_content_podcasts as $index => $item ) {
					$post = $item['featured_content_podcasts'];
					echo get_template_part( 'components/ui/card1', null, [
						'q'             => [
							'post__in'   => [ $post->ID ],
							"meta_query" => [
								[
									"relation" => "AND",
									[
										'key'     => '_wp_page_template',
										'value'   => [ 'episode-detail.php', 'livestream-detail.php' ],
										'compare' => 'IN',
										'type'    => 'CHAR',
									],
								],
							],
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
			?>
		</div>
		<?php

		return ob_get_clean();
	}
}

add_action( 'init', function () {
	add_shortcode( 'on_demand_programming_all_content_featured_episodes',
		'on_demand_programming_all_content_featured_episodes_shortcode' );
} );