<?php
/*
 * Template Name: Resource Hub - News v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/news');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 6
		]);
		get_template_part('components/section/resource-hub/featured-content', null, [
			'q' => [],
			'sectionName' => 'News',
			'taxQueryTerms' => ['news'],
		]);
		get_template_part('components/section/resource-hub/recent-news', null, [
			'posts_per_page' => -1,
			'sitePaddingClassnames' => 'pb-92',
		]);
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
