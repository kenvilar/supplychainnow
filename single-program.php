<?php

set_query_var('header_args', [
	'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
]);
get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/single-program');

		get_template_part('components/ui/searchbar', null, [
			'site_padding' => 'pt-58 pb-0',
			'taxonomy' => 'tags',
		]);

		if (!isset($_GET['search']) || !isset($_GET['industries'])) {
			get_template_part('components/section/single-program/featured-episodes');
			get_template_part('components/section/single-program/suggested-podcasts');
		}

		get_template_part('components/ui/search_results');

		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>