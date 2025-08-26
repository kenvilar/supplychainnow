<?php
/*
echo get_template_part('components/ui/card1', null, [
	'q' => [],
	'attributes' => [],
	'classNames' => '',
	'noItemsFound' => '',
]);
*/

$override_args = $args["q"] ?? [];
$override_args_post = $args["q_post"] ?? [];
$post_per_page = $args["post_per_page"] ?? 1;
$attributes = $args["attributes"] ?? [];
$classNames = $args["classNames"] ?? '';
$noItemsFound = $args["noItemsFound"] ?? '<p class="w-full text-center">No items found.</p>';
if (!is_array($override_args)) {
	$override_args = [];
}

// Convert attributes array to HTML string
$attr_string = "";
foreach ($attributes as $key => $value) {
	$attr_string .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
}

// Query for pages with specific templates
$page_args = [
	"post_type" => "page",
	"post_status" => "publish",
	"posts_per_page" => -1,
	"offset" => 0,
	"meta_query" => [
		[
			"relation" => "OR",
			[
				"key" => "_wp_page_template",
				"value" => "episode-detail.php",
				"compare" => "=",
			],
			[
				"key" => "_wp_page_template",
				"value" => "webinar-detail.php",
				"compare" => "=",
			],
			[
				"key" => "_wp_page_template",
				"value" => "livestream-detail.php",
				"compare" => "=",
			],
		],
	],
	"orderby" => ["menu_order" => "ASC", "date" => "DESC"],
];

// Query for posts with specific categories
$post_args = [
	"post_type" => "post",
	"post_status" => "publish",
	"posts_per_page" => -1,
	"offset" => 0,
	"tax_query" => [
		[
			"taxonomy" => "category",
			"field" => "name",
			"terms" => ["Podcast Episode",],
			"operator" => "IN",
		],
	],
	"orderby" => ["menu_order" => "ASC", "date" => "DESC"],
];

// Merge override args with page and post queries
$page_query_args = array_merge($page_args, $override_args);
$post_query_args = array_merge($post_args, $override_args_post);

// Execute the queries
$page_query = new WP_Query($page_query_args);
$post_query = new WP_Query($post_query_args);

$post_ids = [];
if ($page_query->have_posts()) {
	$post_ids = array_merge($post_ids, wp_list_pluck($page_query->posts, 'ID'));
}
if ($post_query->have_posts()) {
	$post_ids = array_merge($post_ids, wp_list_pluck($post_query->posts, 'ID'));
}

$defaults_args = [
	"post_type" => ["page", "post"],
	"post_status" => "publish",
	"posts_per_page" => $post_per_page,
	"offset" => 0,
	"post__in" => $post_ids,
	"orderby" => ["menu_order" => "ASC", "date" => "DESC"],
];

$query_args = array_merge($defaults_args);

$q = new WP_Query($query_args);

if ($q->have_posts()): ?>
	<?php
	while ($q->have_posts()):

		$q->the_post();
		$selectMediaType = get_field("select_media_type", $q->post->ID);
	?>
		<a href="<?php
					the_permalink($q->post->ID); ?>" class="relative w-full group <?= $classNames; ?>" <?= $attr_string ?>>
			<div class="relative flex flex-col justify-between gap-20 h-full">
				<div class="w-full">
					<div class="mb-28">
						<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
							<img
								src="<?php
										echo get_the_post_thumbnail_url($q->post->ID)
											? get_the_post_thumbnail_url($q->post->ID, 'medium_large')
											: get_stylesheet_directory_uri() .
											"/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
								loading="lazy" alt="" class="image relative opacity-90">
							<?php
							$terms = get_the_terms($q->post->ID, "tags");
							if (!is_wp_error($terms) && !empty($terms)) {
								$first = array_values($terms)[0]; ?>
								<div class="absolute absolute--tl p-24 flex items-center justify-center">
									<div class="relative rounded-full overflow-hidden py-4 px-8">
										<div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
											<?php
											echo $first->name; ?>
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
										?>
									</div>
								</div>
							<?php
							}
							?>
							<div
								class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
								<?php
								if ($selectMediaType == "livestream") { ?>
									<img
										src="<?php
												echo get_stylesheet_directory_uri() .
													"/assets/img/icons/play-button-livestream.avif"; ?>"
										loading="lazy" alt="play-button-livestream">
								<?php
								} elseif ($selectMediaType == "podcast") { ?>
									<img
										src="<?php
												echo get_stylesheet_directory_uri() .
													"/assets/img/icons/play-button-podcast.avif"; ?>"
										loading="lazy" alt="play-button-podcast">
								<?php
								} elseif ($selectMediaType == "webinar") { ?>
									<img
										src="<?php
												echo get_stylesheet_directory_uri() .
													"/assets/img/icons/play-button-webinar.avif"; ?>"
										loading="lazy" alt="play-button-webinar">
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
									if ($selectMediaType == "livestream") { ?>
										<img
											src="<?php
													echo get_stylesheet_directory_uri() .
														"/assets/img/icons/livestream-card-icon.svg"; ?>"
											loading="lazy" alt="livestream-music">
									<?php
									} elseif ($selectMediaType == "podcast") { ?>
										<img
											class="size-24"
											src="<?php
													echo get_stylesheet_directory_uri() .
														"/assets/img/icons/podcast-card-icon.png"; ?>"
											loading="lazy" alt="podcast-blue-microphone">
									<?php
									} elseif ($selectMediaType == "webinar") { ?>
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
									echo get_the_date("F j, Y", $q->post->ID); ?>
								</div>
								<!--<div>•</div>
								<div>6 min 25 sec</div>-->
							</div>
						</div>
					</div>
					<h3 class="font-semibold" scn-text-limit="3">
						<?php
						the_title(); ?>
					</h3>
				</div>
				<div class="w-full tracking-[1.6px]" scn-text-limit="2">
					<?php
					if (get_the_excerpt($q->post->ID)) {
						the_excerpt();
					} elseif (get_field("livestream_description", $q->post->ID)) {
						the_field("livestream_description", $q->post->ID);
					} elseif (get_field("episode_summary", $q->post->ID)) {
						the_field("episode_summary", $q->post->ID);
					} elseif (get_field("webinar_description", $q->post->ID)) {
						the_field("webinar_description", $q->post->ID);
					} ?>
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