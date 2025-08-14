<?php
/*
 * Template Name: Upcoming Live Programming v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/upcoming-live-programming');
		get_template_part('components/section/upcoming-live-programming/featured-upcoming-programming');
		get_template_part('components/section/upcoming-live-programming/upcoming-livestreams');
		get_template_part('components/section/upcoming-live-programming/upcoming-webinars');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
