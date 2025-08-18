<?php
/*
 * Template Name: On-Demand Programming/Podcasts & Livestreams v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/on-demand-programming--podcasts-and-livestreams');
		get_template_part('components/section/on-demand-programming/tab-links', null, [
			'tabNumber' => 2,
		]);
		get_template_part('components/section/on-demand-programming--podcasts-and-livestreams/featured-podcast-episodes');
		get_template_part('components/section/on-demand-programming--podcasts-and-livestreams/recent-episodes');
		get_template_part('components/section/on-demand-programming--podcasts-and-livestreams/podcast-series');
		get_template_part('components/section/on-demand-programming--podcasts-and-livestreams/women-in-supply-chain');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
