<?php
/*
echo get_template_part('components/ui/card1', null, [
	'q' => [],
	'attributes' => [],
	'classNames' => '',
	'noItemsFound' => '',
]);
*/

$override_args      = $args["q"] ?? [];
$override_args_post = $args["q_post"] ?? [];
$post_per_page      = $args["post_per_page"] ?? 2;
$offset             = $args["offset"] ?? 0;
$orderby            = $args["orderby"] ?? [ "menu_order" => "ASC", "date" => "DESC" ];
$post_type          = $args["post_type"] ?? [ "page", "post" ];
$card_size          = $args["card_size"] ?? 'large'; // 'large' || 'small'
$attributes         = $args["attributes"] ?? [];
$classNames         = $args["classNames"] ?? ''; // 'splide__slide'
$noItemsFound       = $args["noItemsFound"] ?? '<p class="w-full text-center">No items found.</p>';
if ( ! is_array( $override_args ) ) {
	$override_args = [];
}
if ( ! is_array( $override_args_post ) ) {
	$override_args_post = [];
}

// Convert attributes array to HTML string
$attr_string = "";
foreach ( $attributes as $key => $value ) {
	$attr_string .= sprintf( ' %s="%s"', esc_attr( $key ), esc_attr( $value ) );
}

// Query for pages with specific templates
$page_args = [
	"post_type"              => "page",
	"post_status"            => "publish",
	"posts_per_page"         => $post_per_page,
	"offset"                 => 0,
	'no_found_rows'          => true,  // set true if not paginating
	'update_post_meta_cache' => false, // set false if not reading lots of meta
	'update_post_term_cache' => false,
	"meta_query"             => [
		[
			"relation" => "AND",
			[
				'key'     => '_wp_page_template',
				'value'   => [ 'episode-detail.php', 'livestream-detail.php', 'webinar-detail.php', ],
				'compare' => 'IN',
				'type'    => 'CHAR',
			],
		],
	],
	"orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
];

// Query for posts with specific categories
$post_args = [
	"post_type"              => "post",
	"post_status"            => "publish",
	"posts_per_page"         => $post_per_page,
	"offset"                 => 0,
	'no_found_rows'          => true,  // set true if not paginating
	'update_post_meta_cache' => false, // set false if not reading lots of meta
	'update_post_term_cache' => false,
	"tax_query"              => [
		[
			"taxonomy" => "category",
			"field"    => "name",
			"terms"    => [ "Podcast Episode", ],
			"operator" => "IN",
		],
	],
	"orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
];

// Merge override args with page and post queries
$page_query_args = array_merge( $page_args, $override_args );
$post_query_args = array_merge( $post_args, $override_args_post );

// Execute the queries
$page_query = new WP_Query( $page_query_args );
$post_query = new WP_Query( $post_query_args );

$post_ids = [];
if ( $page_query->have_posts() ) {
	$post_ids = array_merge( $post_ids, wp_list_pluck( $page_query->posts, 'ID' ) );
}
if ( $post_query->have_posts() ) {
	$post_ids = array_merge( $post_ids, wp_list_pluck( $post_query->posts, 'ID' ) );
}

$defaults_args = [
	"post_type"      => $post_type,
	"post_status"    => "publish",
	"posts_per_page" => empty( $post_ids ) ? 0 : $post_per_page,
	"offset"         => empty( $post_ids ) ? 0 : $offset,
	"post__in"       => $post_ids ?: [ 0 ],
	"orderby"        => empty( $post_ids ) ? "date" : $orderby,
];

$query_args = array_merge( $defaults_args );

$q = new WP_Query( $query_args );

if ( $q->have_posts() ): ?>
	<?php
	while ( $q->have_posts() ):

		$q->the_post();
		// Determine media type based on page template
		$template = get_page_template_slug( $q->post->ID );

		// Default for posts or other content types
		$selectMediaType = 'podcast';

		if ( $template === 'livestream-detail.php' ) {
			$selectMediaType = 'livestream';
		} elseif ( $template === 'episode-detail.php' ) {
			$selectMediaType = 'podcast';
		} elseif ( $template === 'webinar-detail.php' ) {
			$selectMediaType = 'webinar';
		}

		$primaryTag = get_field( "Primary_Tag", $q->post->ID );
		?>
		<a href="<?php
		the_permalink( $q->post->ID ); ?>" class="relative w-full group <?= $classNames; ?>" <?= $attr_string ?>>
			<div class="relative flex flex-col justify-start gap-20 h-full">
				<div class="w-full">
					<div class="mb-28">
						<div
							class="overflow-hidden rounded-0 relative <?php
							echo $card_size == 'large' ? 'h-344 md:h-auto' : 'h-222 md:h-auto';
							if ( $selectMediaType == 'livestream' ) {
								echo 'bg-cargogrey';
							}
							?>">
							<img
								src="<?php
								echo get_the_post_thumbnail_url( $q->post->ID )
									? get_the_post_thumbnail_url( $q->post->ID, $card_size == 'large' ? 'full' : 'large' )
									: get_stylesheet_directory_uri() .
									  "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
								loading="lazy" alt="" class="image relative object-contain max-w-full">
							<div class="absolute absolute--tl p-24 flex flex-wrap items-center gap-4">
								<?php
								$terms    = get_the_terms( $q->post->ID, "tags" );
								$post_tag = get_the_terms( $q->post->ID, "post_tag" );
								if ( ! empty( $primaryTag ) ) {
									foreach ( $primaryTag as $primaryTagItem ) {
										?>
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
												<?= $primaryTagItem->name; ?>
											</div>
											<?php
											$bgByType = [
												'livestream' => 'bg-primary',
												'podcast'    => 'bg-secondary',
												'webinar'    => 'bg-tertiary',
											];
											$bgClass  = $bgByType[ $selectMediaType ] ?? 'bg-tertiary';
											echo '<div class="absolute absolute--full ' . esc_attr( $bgClass ) . '"></div>';
											?>
										</div>
										<?php
									}
								} else {
									if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
										$terms      = array_values( $terms );
										$randIndex  = array_rand( $terms );
										$randomTerm = $terms[ $randIndex ];
										?>
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
												<?= $randomTerm->name; ?>
											</div>
											<?php
											$bgByType = [
												'livestream' => 'bg-primary',
												'podcast'    => 'bg-secondary',
												'webinar'    => 'bg-tertiary',
											];
											$bgClass  = $bgByType[ $selectMediaType ] ?? 'bg-tertiary';
											echo '<div class="absolute absolute--full ' . esc_attr( $bgClass ) . '"></div>';
											?>
										</div>
										<?php
									} elseif ( ! is_wp_error( $post_tag ) && ! empty( $post_tag ) ) {
										$terms      = array_values( $post_tag );
										$randIndex  = array_rand( $post_tag );
										$randomTerm = $terms[ $randIndex ];
										?>
										<div class="relative rounded-full overflow-hidden py-4 px-8">
											<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
												<?php
												if ( ! empty( $primaryTag->name ) ):
													echo $primaryTag->name;
												else:
													echo $randomTerm->name;
												endif;
												?>
											</div>
											<?php
											$bgByType = [
												'livestream' => 'bg-primary',
												'podcast'    => 'bg-secondary',
												'webinar'    => 'bg-tertiary',
											];
											$bgClass  = $bgByType[ $selectMediaType ] ?? 'bg-tertiary';
											echo '<div class="absolute absolute--full ' . esc_attr( $bgClass ) . '"></div>';
											?>
										</div>
										<?php
									}
								}
								?>
							</div>
							<div
								class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
								<?php
								if ( $selectMediaType == "livestream" ) { ?>
									<img
										src="<?php
										echo get_stylesheet_directory_uri() .
										     "/assets/img/icons/play-button-livestream.avif"; ?>"
										loading="lazy" alt="play-button-livestream">
									<?php
								} elseif ( $selectMediaType == "podcast" ) { ?>
									<img
										src="<?php
										echo get_stylesheet_directory_uri() .
										     "/assets/img/icons/play-button-podcast.avif"; ?>"
										loading="lazy" alt="play-button-podcast">
									<?php
								} elseif ( $selectMediaType == "webinar" ) { ?>
									<img
										src="<?php
										echo get_stylesheet_directory_uri() .
										     "/assets/img/icons/play-button-webinar.avif"; ?>"
										loading="lazy" alt="play-button-webinar">
									<?php
								} else {
									?>
									<img
										src="<?php
										echo get_stylesheet_directory_uri() .
										     "/assets/img/icons/play-button-podcast.avif"; ?>"
										loading="lazy" alt="play-button-podcast">
									<?php
								}
								?>
							</div>
						</div>
					</div>
					<div class="mb-12">
						<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
							<div class="flex items-center gap-8">
								<div class="flex items-center">
									<?php
									if ( $selectMediaType == "livestream" ) { ?>
										<img
											src="<?php
											echo get_stylesheet_directory_uri() .
											     "/assets/img/icons/livestream-card-icon.svg"; ?>"
											loading="lazy" alt="livestream-music">
										<?php
									} elseif ( $selectMediaType == "podcast" ) { ?>
										<img
											class="size-24"
											src="<?php
											echo get_stylesheet_directory_uri() .
											     "/assets/img/icons/podcast-card-icon.png"; ?>"
											loading="lazy" alt="podcast-blue-microphone">
										<?php
									} elseif ( $selectMediaType == "webinar" ) { ?>
										<img
											class="size-24"
											src="<?php
											echo get_stylesheet_directory_uri() .
											     "/assets/img/icons/webinar-card-icon.png"; ?>"
											loading="lazy" alt="webinar-person">
										<?php
									} else {
										?>
										<img
											class="size-24"
											src="<?php
											echo get_stylesheet_directory_uri() .
											     "/assets/img/icons/podcast-card-icon.png"; ?>"
											loading="lazy" alt="podcast-blue-microphone">
										<?php
									}
									?>
								</div>
								<div class="font-family-secondary text-sm capitalize">
									<?php
									echo $selectMediaType ?? 'Podcast'; ?>
								</div>
							</div>
							<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
								<div>
									<?php
									echo get_the_date( "F j, Y", $q->post->ID ); ?>
								</div>
								<!--<div>•</div>
								<div>6 min 25 sec</div>-->
							</div>
						</div>
					</div>
					<h3 class="font-semibold <?= $card_size == 'large' ? '' : 'text-lg'; ?>"
					    scn-text-limit="<?= $card_size == 'large' ? '3' : '2'; ?>">
						<?php
						the_title(); ?>
					</h3>
				</div>
				<div class="w-full tracking-[1.6px] <?= $card_size == 'large' ? '' : 'text-sm'; ?>"
				     scn-text-limit="<?= $card_size == 'large' ? '2' : '3'; ?>">
					<?php
					if ( get_field( "livestream_description", $q->post->ID ) ) {
						echo esc_html( kv_build_acf_fields_like_excerpt( [
							get_field( "livestream_description", $q->post->ID ),
							get_the_content( null, false, $q->post->ID ),
						] ) );
					} else {
						if ( get_field( "episode_summary", $q->post->ID ) ) {
							echo esc_html( kv_build_acf_fields_like_excerpt( [
								get_field( "episode_summary", $q->post->ID ),
								get_the_content( null, false, $q->post->ID ),
							] ) );
						} else {
							if ( get_field( "webinar_description", $q->post->ID ) ) {
								echo esc_html( kv_build_acf_fields_like_excerpt( [
									get_field( "webinar_description", $q->post->ID ),
									get_the_content( null, false, $q->post->ID ),
								] ) );
							} else {
								if ( get_the_content( null, false, $q->post->ID ) ) {
									echo esc_html( kv_build_acf_fields_like_excerpt( [
										get_the_content( null, false, $q->post->ID )
									] ) );
								} else {
									echo esc_html( get_the_excerpt( $q->post->ID ) );
								}
							}
						}
					}
					?>
				</div>
			</div>
		</a>
	<?php
	endwhile;
	wp_reset_postdata();
	?>
<?php
else:
	echo $noItemsFound;
endif;
?>