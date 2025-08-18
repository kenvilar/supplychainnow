<?php
/*
 * Template Name: Resource Hub - White Paper v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/white-paper');
		get_template_part('components/section/resource-hub/tab-links', null, [
			'tabNumber' => 3
		]);
		get_template_part('components/section/white-paper/featured-white-papers');
		get_template_part('components/section/white-paper/recent-white-papers');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
