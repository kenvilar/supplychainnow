<?php
/*
 * Template Name: Resource Hub - Article v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/resource-hub');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 5
		]);
		get_template_part('components/section/resource-hub/featured-content', null, [
			'q' => [],
			'sectionName' => 'Articles',
			'taxQueryTerms' => ["article", "guest-post", "weekly-summary"],
		]);
		get_template_part('components/section/resource-hub/recent-articles', null, [
			'posts_per_page' => -1,
			'sitePaddingClassnames' => 'pb-92',
		]);
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
