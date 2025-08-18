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
		get_template_part('components/hero/article');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 5
		]);
		get_template_part('components/section/article/featured-articles');
		get_template_part('components/section/article/recent-articles');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
