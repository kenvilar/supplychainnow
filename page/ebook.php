<?php
/*
 * Template Name: Resource Hub - Ebook v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/ebook');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 4
		]);
		get_template_part('components/section/resource-hub/featured-content', null, [
			'q' => [],
			'sectionName' => 'E-Books',
			'taxQueryTerms' => ['ebook'],
		]);
		get_template_part('components/section/resource-hub/recent-ebooks', null, [
			'posts_per_page' => -1,
			'sitePaddingClassnames' => 'pb-92',
		]);
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
