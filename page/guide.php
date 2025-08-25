<?php
/*
 * Template Name: Resource Hub - Guide v2
 */

set_query_var('header_args', [
	'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
]);
get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/resource-hub');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 7
		]);
		get_template_part('components/ui/searchbar', null, [
			'site_padding' => 'pt-52 pb-40',
			'taxonomy' => 'post_tag',
		]);
		scn_render_if_no_filters('components/section/resource-hub/featured-content', [
			'q' => [],
			'sectionName' => 'Guides',
			'taxQueryTerms' => [
				'guide',
			],
		]);
		scn_render_if_no_filters('components/section/resource-hub/recent-guides', [
			'posts_per_page' => -1,
			'sitePaddingClassnames' => 'pb-92',
		]);
		get_template_part('components/ui/search_results', null, [
			'post_type' => 'post',
			'resource_hub' => true,
		]);
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>