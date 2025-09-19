<?php

$item = $args["item"] ?? [];

$template = get_page_template_slug( $item );
// Default for posts or other content types
$selectMediaType = 'podcast';
if ( $template === 'livestream-detail.php' ) {
	$selectMediaType = 'livestream';
} elseif ( $template === 'episode-detail.php' ) {
	$selectMediaType = 'podcast';
} elseif ( $template === 'webinar-detail.php' ) {
	$selectMediaType = 'webinar';
}
$primaryTag = get_field( "Primary_Tag", $item );
?>
<a href="<?php
the_permalink( $item ); ?>" class="relative w-full group splide__slide">
	<div class="relative flex flex-col justify-start gap-20 h-full">
		<div class="w-full">
			<div class="mb-28">
				<div
					class="overflow-hidden rounded-12 relative h-222 md:h-auto bg-cargogrey">
					<img
						src="<?php
						echo get_the_post_thumbnail_url( $item )
							? get_the_post_thumbnail_url( $item, 'medium_large' )
							: get_stylesheet_directory_uri() .
							  "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
						loading="lazy" alt="" class="image relative opacity-90"/>
					<?php
					$terms    = get_the_terms( $item, "tags" );
					$post_tag = get_the_terms( $item, "post_tag" );
					if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
						$first = array_values( $terms )[0]; ?>
						<div class="absolute absolute--tl p-24 flex items-center justify-center">
							<div class="relative rounded-full overflow-hidden py-4 px-8">
								<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
									<?php
									if ( ! empty( $primaryTag->name ) ):
										echo $primaryTag->name;
									else:
										echo $first->name;
									endif;
									?>
								</div>
								<?php
								echo $selectMediaType == "livestream"
									? '<div class="absolute absolute--full bg-primary"></div>'
									: "";
								echo $selectMediaType == "podcast"
									? '<div class="absolute absolute--full bg-secondary"></div>'
									: "";
								echo $selectMediaType == "webinar"
									? '<div class="absolute absolute--full bg-tertiary"></div>'
									: "";
								echo ( $selectMediaType != "livestream" || $selectMediaType != "podcast" || $selectMediaType != "webinar" )
									? '<div class="absolute absolute--full bg-tertiary"></div>'
									: "";
								?>
							</div>
						</div>
						<?php
					}
					if ( ! is_wp_error( $post_tag ) && ! empty( $post_tag ) ) {
						$first = array_values( $post_tag )[0]; ?>
						<div class="absolute absolute--tl p-24 flex items-center justify-center">
							<div class="relative rounded-full overflow-hidden py-4 px-8">
								<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
									<?php
									if ( ! empty( $primaryTag->name ) ):
										echo $primaryTag->name;
									else:
										echo $first->name;
									endif;
									?>
								</div>
								<?php
								echo $selectMediaType == "livestream"
									? '<div class="absolute absolute--full bg-primary"></div>'
									: "";
								echo $selectMediaType == "podcast"
									? '<div class="absolute absolute--full bg-secondary"></div>'
									: "";
								echo $selectMediaType == "webinar"
									? '<div class="absolute absolute--full bg-tertiary"></div>'
									: "";
								echo ( $selectMediaType != "livestream" || $selectMediaType != "podcast" || $selectMediaType != "webinar" )
									? '<div class="absolute absolute--full bg-tertiary"></div>'
									: "";
								?>
							</div>
						</div>
						<?php
					}
					?>
					<div
						class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
						<?php
						if ( $selectMediaType == "livestream" ) { ?>
							<img
								src="<?php
								echo get_stylesheet_directory_uri() .
								     "/assets/img/icons/play-button-livestream.avif"; ?>"
								loading="lazy" alt="play-button-livestream"/>
							<?php
						} elseif ( $selectMediaType == "podcast" ) { ?>
							<img
								src="<?php
								echo get_stylesheet_directory_uri() .
								     "/assets/img/icons/play-button-podcast.avif"; ?>"
								loading="lazy" alt="play-button-podcast"/>
							<?php
						} elseif ( $selectMediaType == "webinar" ) { ?>
							<img
								src="<?php
								echo get_stylesheet_directory_uri() .
								     "/assets/img/icons/play-button-webinar.avif"; ?>"
								loading="lazy" alt="play-button-webinar"/>
							<?php
						} else {
							?>
							<img
								src="<?php
								echo get_stylesheet_directory_uri() .
								     "/assets/img/icons/play-button-podcast.avif"; ?>"
								loading="lazy" alt="play-button-podcast"/>
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
									loading="lazy" alt="livestream-music"/>
								<?php
							} elseif ( $selectMediaType == "podcast" ) { ?>
								<img
									class="size-24"
									src="<?php
									echo get_stylesheet_directory_uri() .
									     "/assets/img/icons/podcast-card-icon.png"; ?>"
									loading="lazy" alt="podcast-blue-microphone"/>
								<?php
							} elseif ( $selectMediaType == "webinar" ) { ?>
								<img
									class="size-24"
									src="<?php
									echo get_stylesheet_directory_uri() .
									     "/assets/img/icons/webinar-card-icon.png"; ?>"
									loading="lazy" alt="webinar-person"/>
								<?php
							} else {
								?>
								<img
									class="size-24"
									src="<?php
									echo get_stylesheet_directory_uri() .
									     "/assets/img/icons/podcast-card-icon.png"; ?>"
									loading="lazy" alt="podcast-blue-microphone"/>
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
							<?= get_the_date( "F j, Y", $item ); ?>
						</div>
						<!--<div>•</div>
						<div>6 min 25 sec</div>-->
					</div>
				</div>
			</div>
			<h3 class="font-semibold text-lg"
			    scn-text-limit="2">
				<?= get_the_title( $item ); ?>
			</h3>
		</div>
		<div class="w-full tracking-[1.6px] text-sm rt--plain" scn-text-limit="3">
			<?php
			if ( $template == 'livestream-detail.php' ) {
				echo esc_html( kv_build_acf_fields_like_excerpt( [
					get_field( "livestream_description", $item ),
					get_the_content( null, false, $item ),
				] ) );
			} else {
				if ( $template == 'episode-detail.php' ) {
					echo esc_html( kv_build_acf_fields_like_excerpt( [
						get_field( "episode_summary", $item ),
						get_the_content( null, false, $item ),
					] ) );
				} else {
					if ( $template == 'webinar-detail.php' ) {
						echo esc_html( kv_build_acf_fields_like_excerpt( [
							get_field( "webinar_description", $item ),
							get_the_content( null, false, $item ),
						] ) );
					} else {
						if ( get_the_content( null, false, $item ) ) {
							echo esc_html( kv_build_acf_fields_like_excerpt( [
								get_the_content( null, false, $item )
							] ) );
						} else {
							echo esc_html( get_the_excerpt( $item ) );
						}
					}
				}
			}
			?>
		</div>
	</div>
</a>
