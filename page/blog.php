<?php
/*
 * Template Name: Resource Hub - Blog v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/blog');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 2
		]);
		get_template_part('components/section/resource-hub/featured-content', null, [
			'q' => [
				"tax_query" => [
					[
						"taxonomy" => "category",
						"field" => "slug",
						"terms" => [
							"ebook",
							"news",
							"visibility-guide",
							"white-paper",
							"article",
							"guest-post",
							"weekly-summary"
						],
						"operator" => "NOT IN",
					],
				],
			],
			'sectionName' => 'Blogs',
		]);
		get_template_part('components/section/resource-hub/recent-blogs', null, [
			'posts_per_page' => -1,
			'sitePaddingClassnames' => 'pb-92',
		]);
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
