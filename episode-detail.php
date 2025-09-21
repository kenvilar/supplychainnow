<?php
/*
 * Template Name: Episode Detail
 */

set_query_var( 'header_args', [
	'nav_classnames' => '', // '' || 'fixed'
] );
get_header();
$pageId = get_the_ID();

$iframe_youtube = get_field( 'youtube_embed_link', $pageId ); // returns iframe HTML
preg_match( '/src="([^"]+)"/', $iframe_youtube, $matches ); // Extract the src attribute from the iframe
$youtube_url = $matches[1] ?? '';

$mp3AudioLink           = get_field( 'MP3Audio_Link', $pageId );
$episode_captivate_link = get_field( 'episode_captivate_link', $pageId );
preg_match( '/src="([^"]+)"/', $episode_captivate_link, $episode_captivate_link_matches );
$episode_captivate_link_get_link_only = $episode_captivate_link_matches[1] ?? '';
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<section class="section">
				<div class="site-padding sm:py-60 pt-58">
					<div class="mx-auto text-center">
						<a href="/podcasts-and-livestreams" class="font-semibold text-reg text-secondary!">
							< Back to Episodes
						</a>
					</div>
				</div>
			</section>
			<section class="section">
				<div class="site-padding sm:py-60 pt-29">
					<div class="mx-auto max-w-1010 w-full md:max-w-full">
						<div class="overflow-hidden rounded-25 relative">
							<div class="relative group z-1 text-align-center">
								<img class="relative z-10 w-auto overflow-hidden rounded-25 max-h-568 sm:max-h-200"
								     src="<?php
								     if ( get_field( 'upload_cover_image', $pageId ) ) {
									     echo get_field( 'upload_cover_image', $pageId );
								     } else {
									     the_post_thumbnail_url( 'large' );
								     }
								     ?>" alt="">
								<?php
								if ( $mp3AudioLink || $episode_captivate_link_get_link_only || $youtube_url ) :
									?>
									<a href="<?php
									if ( ! empty( $mp3AudioLink ) ):
										echo esc_url( $mp3AudioLink );
									else:
										if ( ! empty( $episode_captivate_link_get_link_only ) ):
											echo esc_url( $episode_captivate_link_get_link_only );
										else:
											if ( ! empty( $youtube_url ) ):
												echo esc_url( $youtube_url );
											endif;
										endif;
									endif;
									?>" target="_blank" rel="noopener noreferrer"
									   class="absolute absolute--full z-10 flex items-center justify-center translate-y-300 group-hover:translate-y-0 transition-all duration-500">
										<img
											src="<?php
											echo get_stylesheet_directory_uri() .
											     "/assets/img/icons/play-button-podcast.avif"; ?>"
											loading="lazy" alt="play-button-podcast">
									</a>
								<?php
								endif;
								?>
							</div>
							<!--<div class="absolute absolute--full bg-cargogrey z--1"></div>-->
						</div>
					</div>
				</div>
			</section>
			<?php
			if ( $episode_captivate_link || $mp3AudioLink || $iframe_youtube ) :
				?>
				<section class="section">
					<div class="site-padding sm:py-60 pt-20 pb-40">
						<div class="mx-auto max-w-1249 w-full md:max-w-full">
							<div class="relative overflow-hidden shadow4 rounded-8 pt-56 pb-47 px-20">
								<div class="mx-auto max-w-1129 w-full md:max-w-full flex justify-center">
									<?php
									if ( ! empty( $episode_captivate_link ) ) {
										echo $episode_captivate_link;
									} else {
										if ( ! empty( $mp3AudioLink ) ) {
											?>
											<audio class="wp-audio-shortcode" id="audio-26231-1" preload="none" style="width: 100%;"
											       controls="controls">
												<source type="audio/mpeg"
												        src="<?= $mp3AudioLink; ?>?_=1"/>
												<a href="<?= $mp3AudioLink; ?>">
													https://episodes.captivate.fm/episode/28f8a5ee-e04d-4324-9bf2-74880d8ed8f5.mp3
												</a>
											</audio>
											<?php
										} else {
											if ( ! empty( $iframe_youtube ) ) {
												echo $iframe_youtube;
											}
										}
									}
									?>
								</div>
							</div>
						</div>
					</div>
				</section>
			<?php
			endif;
			?>
			<section class="section">
				<div class="site-padding sm:py-60 py-64">
					<div class="mx-auto max-w-1249 w-full md:max-w-full">
						<div class="flex gap-20 justify-between">
							<div class="max-w-775 w-full md:max-w-full">
								<div class="mb-60">
									<div class="flex gap-28 items-center">
										<div class="flex items-center gap-15">
											<div class="tracking-[1.6px]">Share:</div>
											<?php
											get_template_part( 'components/section/events/social-media-icons' );
											?>
										</div>
										<div class="flex items-center gap-12">
											<?php
											echo get_template_part( 'components/ui/btn', null, [
												'text'       => 'Transcript',
												'link'       => '',
												'style'      => 'secondary',
												'class'      => '',
												'attributes' => [
													'open-modal' => '',
												],
											] );
											?>

											<?php
											if ( $youtube_url ) {
												?>
												<a href="<?php
												echo esc_url( $youtube_url ); ?>" class="btn primary w-inline-block py-20! px-32!"
												   target="_blank"
												   rel="noopener noreferrer">
													<div class="flex items-center gap-8">
														<div>Watch on Youtube</div>
														<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
														     fill="none">
															<path d="M11.625 10L9 8.5V11.5L11.625 10Z" fill="white"/>
															<path fill-rule="evenodd" clip-rule="evenodd"
															      d="M0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10ZM13.875 6.6875C14.3125 6.8125 14.625 7.125 14.75 7.5625C15 8.375 15 10 15 10C15 10 15 11.625 14.8125 12.4375C14.6875 12.875 14.375 13.1875 13.9375 13.3125C13.125 13.5 10 13.5 10 13.5C10 13.5 6.8125 13.5 6.0625 13.3125C5.625 13.1875 5.3125 12.875 5.1875 12.4375C5 11.625 5 10 5 10C5 10 5 8.375 5.125 7.5625C5.25 7.125 5.5625 6.8125 6 6.6875C6.8125 6.5 9.9375 6.5 9.9375 6.5C9.9375 6.5 13.125 6.5 13.875 6.6875Z"
															      fill="white"/>
														</svg>
													</div>
												</a>
												<?php
											}
											?>
										</div>
									</div>
								</div>
								<div class="rt--default tracking-[1.6px]">
									<?php
									if ( get_field( 'episode_summary', $pageId ) ) {
										echo wp_kses_post( get_field( 'episode_summary', $pageId ) );
									} else {
										if ( get_field( 'episode_summary_espanol', $pageId ) ) {
											echo get_field( 'episode_summary_espanol', $pageId );
										}
									}
									?>
								</div>
							</div>
							<div class="max-w-395 w-full md:max-w-full">
								<div class="mb-36">
									<div class="mb-20">
										<h2 class="text-2xl">More Podcast Episodes</h2>
									</div>
									<?php
									get_template_part( 'components/line-with-blinking-dot', null, [
										'maxWidthClassnames' => 'ml-0'
									] );
									?>
								</div>
								<div class="mb-52">
									<?php
									get_template_part( 'components/ui/searchbar', null, [
										'site_padding'  => 'px-0! py-0 pb-0',
										'taxonomy'      => 'tags',
										'hide_dropdown' => true,
										'redirect_to'   => '/podcasts-and-livestreams',
									] );
									?>
								</div>
								<div class="mb-52 flex flex-col gap-58 sm:gap-20">
									<?php
									$q = new WP_Query( [
										'post_type'              => 'page',
										'post_status'            => 'publish',
										'posts_per_page'         => 2,
										'offset'                 => 0,
										'no_found_rows'          => true,  // set true if not paginating
										'update_post_meta_cache' => false, // set false if not reading lots of meta
										'update_post_term_cache' => false,
										'meta_query'             => [
											'relation' => 'AND',
											[
												'relation' => 'OR',
												[
													'key'     => '_wp_page_template',
													'value'   => 'episode-detail.php',
													'compare' => '=',
												],
											],
										],
										'date_query'             => [
											[
												'after'     => 'January 1st, 2024',
												'inclusive' => true,
											],
										],
										"post__not_in"           => [ $pageId ],
										'orderby'                => 'rand', // random order
									] );

									if ( $q->have_posts() ): ?>
										<?php
										while ( $q->have_posts() ): $q->the_post(); ?>
											<a href="<?php
											the_permalink( $q->post->ID ); ?>" class="relative w-full group">
												<div class="relative flex flex-col justify-between gap-20 h-full">
													<div class="w-full">
														<div class="mb-28">
															<div class="overflow-hidden rounded-0 relative h-222">
																<img
																	src="<?php
																	echo get_the_post_thumbnail_url( $q->post->ID )
																		? get_the_post_thumbnail_url( $q->post->ID, 'large' )
																		: get_stylesheet_directory_uri() . '/assets/img/misc/default-card-img-thumbnail.avif' ?>"
																	loading="lazy" alt="" class="image relative object-contain max-w-full">
																<div class="absolute absolute--tl p-24 flex flex-wrap items-center gap-4">
																	<?php
																	$primaryTag = get_field( "Primary_Tag", $q->post->ID );
																	$terms      = get_the_terms( $q->post->ID, 'tags' );

																	if ( ! empty( $primaryTag ) ) {
																		foreach ( $primaryTag as $primaryTagItem ) {
																			?>
																			<div class="relative rounded-full overflow-hidden py-4 px-8">
																				<div
																					class="relative font-semibold uppercase text-2xs text--white lh-normal z-10">
																					<?= $primaryTagItem->name; ?>
																				</div>
																				<div class="absolute absolute--full bg-secondary"></div>
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
																				<div
																					class="relative font-semibold uppercase text-2xs text--white lh-normal z-10">
																					<?= $randomTerm->name; ?>
																				</div>
																				<div class="absolute absolute--full bg-secondary"></div>
																			</div>
																			<?php
																		}
																	}
																	?>
																</div>
																<div
																	class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
																	<img
																		src="<?php
																		echo get_stylesheet_directory_uri() . '/assets/img/icons/play-button-podcast.avif'; ?>"
																		loading="lazy" alt="play-button-podcast">
																</div>
															</div>
														</div>
														<div class="mb-12">
															<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
																<div class="flex items-center gap-8">
																	<div class="flex items-center">
																		<img
																			class="size-24"
																			src="<?php
																			echo get_stylesheet_directory_uri() . '/assets/img/icons/podcast-card-icon.png'; ?>"
																			loading="lazy" alt="podcast-blue-microphone">
																	</div>
																	<div class="font-family-secondary text-sm capitalize">
																		Podcast
																	</div>
																</div>
																<div class="flex items-center gap-8 text-sm font-light font-family-secondary">
																	<div><?php
																		echo get_the_date( 'F j, Y', $q->post->ID ); ?></div>
																	<!--<div>•</div>
																		<div>6 min 25 sec</div>-->
																</div>
															</div>
														</div>
														<h3 class="font-semibold text-lg" scn-text-limit="2"><?php
															the_title(); ?></h3>
													</div>
													<div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
														<?php
														echo esc_html( kv_build_acf_fields_like_excerpt( [
															get_field( "episode_summary", $q->post->ID ),
															get_field( "episode_summary_espanol", $q->post->ID ),
															get_the_content( null, false, $q->post->ID ),
															get_the_excerpt( $q->post->ID ),
														] ) );
														?>
													</div>
												</div>
											</a>
										<?php
										endwhile;
										wp_reset_postdata();
									else:
										echo '<p class="w-full">No episodes found.</p>';
									endif; ?>
								</div>
								<div>
									<?php
									echo get_template_part( 'components/ui/btn', null, [
										'text'  => 'More Podcasts',
										'link'  => '/podcasts-and-livestreams',
										'style' => 'primary',
										'class' => '',
										/*'attributes' => [
												'target' => '_blank',
												'rel'    => 'noopener noreferrer',
											],*/
									] )
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<dialog data-lenis-prevent="" class="my-modal scrollbar">
		<div class="relative">
			<div class="min-h-990 h-full flex justify-center pt-70 pb-57 px-32">
				<div class="w-layout-blockcontainer max-w-841 w-full md:max-w-full w-container">
					<h3 class="mb-36 text-34 lh-43 font-semibold" scn-text-limit="2">
						<?php
						the_title(); ?>
					</h3>
					<div class="mb-36 flex gap-24 items-center">
						<div class="flex items-center gap-15">
							<div class="tracking-[1.6px]">Share:</div>
							<?php
							get_template_part( 'components/section/events/social-media-icons' );
							?>
						</div>
						<div class="flex items-center gap-12">
							<a href="<?php
							if ( $youtube_url ) {
								echo esc_url( $youtube_url );
							} ?>" class="btn primary w-inline-block <?php
							echo empty( $youtube_url ) ? 'hidden' : ''; ?>" target="_blank" rel="noopener noreferrer">
								<div class="flex items-center gap-8">
									<div>Watch on Youtube</div>
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 20 20"
									     fill="none">
										<path d="M11.625 10L9 8.5V11.5L11.625 10Z" fill="white"/>
										<path fill-rule="evenodd" clip-rule="evenodd"
										      d="M0 10C0 4.47715 4.47715 0 10 0C15.5228 0 20 4.47715 20 10C20 15.5228 15.5228 20 10 20C4.47715 20 0 15.5228 0 10ZM13.875 6.6875C14.3125 6.8125 14.625 7.125 14.75 7.5625C15 8.375 15 10 15 10C15 10 15 11.625 14.8125 12.4375C14.6875 12.875 14.375 13.1875 13.9375 13.3125C13.125 13.5 10 13.5 10 13.5C10 13.5 6.8125 13.5 6.0625 13.3125C5.625 13.1875 5.3125 12.875 5.1875 12.4375C5 11.625 5 10 5 10C5 10 5 8.375 5.125 7.5625C5.25 7.125 5.5625 6.8125 6 6.6875C6.8125 6.5 9.9375 6.5 9.9375 6.5C9.9375 6.5 13.125 6.5 13.875 6.6875Z"
										      fill="white"/>
									</svg>
								</div>
							</a>
						</div>
					</div>
					<div class="tracking-[1.6px]">
						<?php
						if ( get_field( 'episode_transcript', $pageId ) ) {
							echo wp_kses_post( get_field( 'episode_transcript', $pageId ) );
						} else {
							if ( get_field( 'episode_transcript_espanol', $pageId ) ) {
								echo wp_kses_post( get_field( 'episode_transcript_espanol', $pageId ) );
							} else {
								if ( get_field( 'episode_summary', $pageId ) ) {
									echo wp_kses_post( get_field( 'episode_summary', $pageId ) );
								}
							}
						}
						?>
					</div>
				</div>
			</div>
			<div close-modal="" class="flex absolute absolute--tr p-12 mt-36 mr-36 cursor-pointer w-embed">
				<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
					<path d="M1 1L12.73 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
					<path d="M12.73 1L1 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
				</svg>
			</div>
		</div>
	</dialog>
	<div class="display-none w-embed w-script">
		<style>
			.scrollbar::-webkit-scrollbar {
				width: 5px;
				height: 10px;
			}
			.scrollbar::-webkit-scrollbar-track {
				border-radius: 20px;
				background: rgba(78, 136, 182, 0.25);
			}
			.scrollbar::-webkit-scrollbar-thumb {
				background: #4E88B6;
				border-radius: 20px;
			}
			.scrollbar::-webkit-scrollbar-thumb:hover {
				/*background: #c0a0b9;*/
			}
		</style>
		<script>
			document.addEventListener("DOMContentLoaded", (event) => {
				function myModalFunc() {
					const myModal = document.querySelector(".my-modal");
					const closeModal = document.querySelector("[close-modal]");
					let openModal = document.querySelector("[open-modal]");
					if (openModal) {
						openModal.addEventListener("click", function (e) {
							e.preventDefault();
							// open the modal
							setTimeout(function () {
								myModal.showModal();
							}, 200);
						});
					}
					if (closeModal) {
						//close the modal by clicking the 'x' button
						closeModal.addEventListener("click", function () {
							// close the modal
							myModal.close();
						});
						//close the modal by clicking the 'esc' button
						myModal.addEventListener("close", () => {
							//
						});
						//close the modal by clicking the background or backdrop
						myModal.addEventListener("click", (e) => {
							if (e.target === myModal) {
								myModal.close();
							}
						});
					}
				}

				myModalFunc();
			});
		</script>
	</div>
<?php
get_footer(); ?>