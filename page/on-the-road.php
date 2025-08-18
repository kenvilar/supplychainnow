<?php
/*
 * Template Name: On The Road v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/on-the-road');
		get_template_part('components/section/on-the-road/on-site-events');
		get_template_part('components/section/on-the-road/do-you-want-to-partner');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
