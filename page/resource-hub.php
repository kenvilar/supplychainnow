<?php
/*
 * Template Name: Resource Hub v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/resource-hub');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 1
		]);
		get_template_part('components/section/resource-hub/featured-content');
		get_template_part('components/section/resource-hub/recent-blogs');
		get_template_part('components/section/resource-hub/recent-white-papers');
		get_template_part('components/section/resource-hub/recent-ebooks');
		get_template_part('components/section/resource-hub/recent-articles');
		get_template_part('components/section/resource-hub/recent-news');
		get_template_part('components/section/resource-hub/recent-guides');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
