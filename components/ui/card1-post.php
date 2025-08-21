<?php
/*
echo get_template_part('components/ui/card1-post', null, [
	'q' => [],
	'attributes' => [],
	'classNames' => '',
	'noItemsFound' => '',
	'taxQueryTerms' => [],
]);
*/

$override_args = $args["q"] ?? [];
$attributes = $args["attributes"] ?? [];
$classNames = $args["classNames"] ?? '';
$taxQueryTerms = $args["taxQueryTerms"] ?? [];
$noItemsFound = $args["noItemsFound"] ?? '<p class="w-full text-center">No items found.</p>';
if (!is_array($override_args)) {
	$override_args = [];
}

// Convert attributes array to HTML string
$attr_string = "";
foreach ($attributes as $key => $value) {
	$attr_string .= sprintf(' %s="%s"', esc_attr($key), esc_attr($value));
}

$defaults_args = [
	"post_type" => "post",
	"post_status" => "publish",
	"posts_per_page" => 1,
	"offset" => 0,
	"meta_query" => [],
	/*"tax_query" => [
		[
			"taxonomy" => "category",
			"field" => "slug",
			"terms" => ["ebook", "news", "visibility-guide", "white-paper", "article", "guest-post", "weekly-summary"],
			// category slug
			"operator" => "NOT IN",
			// exclude these terms
		],
	],*/
	/*'date_query' => [ //used for upcoming or future
		[
			'after' => current_time('Y-m-d'),
			'inclusive' => true, // include today
		]
	],*/
	"post__not_in" => [], //[get_the_ID()],
	"orderby" => ["menu_order" => "ASC", "date" => "DESC"], //'rand',
];
$firstCategoryName = '';
if (!empty($taxQueryTerms)) {
	$defaults_args['tax_query'] = [
		[
			"taxonomy" => "category",
			"field" => "slug",
			"terms" => $taxQueryTerms,
			'operator' => 'IN'
		],
	];
	$firstCategoryName = $taxQueryTerms[0];
}

$query_args = array_merge($defaults_args, $override_args);

$q = new WP_Query($query_args);

if ($q->have_posts()): ?>
	<?php
	while ($q->have_posts()):
		$q->the_post();

		$categories = get_the_category($q->post->ID);
		$categoryResultName = "";
		$categorySlug = '';
		if ($firstCategoryName) {
			if ($firstCategoryName == 'ebook') { //slug is ebook
				$categoryResultName = 'E-Book';
				$categorySlug = 'ebook';
			} elseif ($firstCategoryName == 'news') { //news
				$categoryResultName = 'News';
				$categorySlug = 'news';
			} elseif ($firstCategoryName == 'visibility-guide') { //visibility-guide
				$categoryResultName = 'Guide';
				$categorySlug = 'visibility-guide';
			} elseif ($firstCategoryName == 'white-paper') { //white-paper
				$categoryResultName = 'White Paper';
				$categorySlug = 'white-paper';
			} elseif (
				$firstCategoryName == 'article'
				|| $firstCategoryName == 'guest-post'
				|| $firstCategoryName == 'weekly-summary'
			) { //article || guest-post || weekly-summary
				$categoryResultName = 'Article';
				$categorySlug = 'article';
			} else {
				$categoryResultName = 'Blog';
				$categorySlug = 'blog';
			}
		} else {
			if (!empty($categories)) {
				if ($categories[0]->name == 'eBook') { //slug is ebook
					$categoryResultName = 'E-Book';
					$categorySlug = 'ebook';
				} elseif ($categories[0]->name == 'News') { //news
					$categoryResultName = 'News';
					$categorySlug = 'news';
				} elseif ($categories[0]->name == 'Visibility Guide') { //visibility-guide
					$categoryResultName = 'Guide';
					$categorySlug = 'visibility-guide';
				} elseif ($categories[0]->name == 'White Paper') { //white-paper
					$categoryResultName = 'White Paper';
					$categorySlug = 'white-paper';
				} elseif (
					$categories[0]->name == 'Article'
					|| $categories[0]->name == 'Guest Post'
					|| $categories[0]->name == 'Weekly Summary'
				) { //article || guest-post || weekly-summary
					$categoryResultName = 'Article';
					$categorySlug = 'article';
				} else {
					$categoryResultName = 'Blog';
					$categorySlug = 'blog';
				}
			}
		}
		?>
		<a href="<?= get_permalink($q->post->ID) . '?category=' . $categorySlug; ?>"
		   class="relative w-full group <?= $classNames; ?>" <?= $attr_string; ?>>
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
								loading="lazy" alt="" class="image relative opacity-90"/>
							<?php
							$terms = get_the_terms($q->post->ID, "post_tag");
							if (!is_wp_error($terms) && !empty($terms)) {
								$first = array_values($terms)[0]; ?>
								<div class="absolute absolute--tl p-24 flex items-center justify-center">
									<div class="relative rounded-full overflow-hidden py-4 px-8">
										<div class="relative font-semibold uppercase text-2xs text-textcolor lh-normal z-10">
											<?php
											echo $first->name; ?>
										</div>
										<div class="absolute absolute--full bg-white"></div>
									</div>
								</div>
								<?php
							}
							?>
						</div>
					</div>
					<div class="mb-12">
						<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
							<div class="flex items-center gap-8">
								<div class="font-family-secondary text-sm capitalize">
									<?= $categoryResultName; ?>
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
					if (has_excerpt()) {
						the_excerpt();
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