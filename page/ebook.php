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
		get_template_part('components/section/ebook/featured-ebooks');
		get_template_part('components/section/ebook/recent-ebooks');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
