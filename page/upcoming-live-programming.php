<?php
/*
 * Template Name: Upcoming Live Programming v2
 */

set_query_var('header_args', [
	'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
]);
get_header();
$pageId = get_the_ID();
?>
<style>
	html {
		scroll-behavior: smooth;
	}
</style>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/upcoming-live-programming');
		//get_template_part('components/section/upcoming-live-programming/featured-upcoming-programming');
		get_template_part('components/ui/searchbar', null, [
			'site_padding' => 'pt-60 pb-52',
		]);

		$qs_s = isset($_GET['s']) ? sanitize_text_field(wp_unslash($_GET['s'])) : '';
		if ($qs_s === '' && isset($_GET['search'])) {
			$qs_s = sanitize_text_field(wp_unslash($_GET['search']));
		}
		$qs_ind = isset($_GET['industries']) ? sanitize_text_field(wp_unslash($_GET['industries'])) : '';
		if ($qs_ind === '' && $qs_s === '') {
			get_template_part('components/section/upcoming-live-programming/upcoming-livestreams');
		}

		get_template_part('components/ui/search_results');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>