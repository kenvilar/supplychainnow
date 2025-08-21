<?php
/*
 * Template Name: Campaign Directory v2
 */

set_query_var('header_args', [
	'nav_classnames' => 'fixed', // '' || 'fixed'
]);
get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/campaign-directory');
		get_template_part('components/section/campaign-directory/section-1');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
