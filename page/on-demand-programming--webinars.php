<?php
/*
 * xxTemplate Namexx: xxOn-Demand Programming/Webinars v2xx
 */

set_query_var( 'header_args', [
	'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
] );
get_header();
$pageId = get_the_ID();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<?php
			get_template_part( 'components/hero/on-demand-programming--webinars' );
			get_template_part( 'components/section/on-demand-programming/tab-links', null, [
				'tabNumber' => 3,
			] );

			get_template_part( 'components/ui/searchbar', null, [
				'site_padding' => 'pt-52 pb-40',
				'taxonomy'     => 'tags',
			] );

			//scn_render_if_no_filters('components/section/on-demand-programming--webinars/featured-webinars');
			scn_render_if_no_filters( 'components/section/on-demand-programming/featured-webinars', [
				'site_padding' => 'pt-60 pb-80',
			] );
			scn_render_if_no_filters( 'components/section/on-demand-programming--webinars/recent-webinars' );

			/*get_template_part( 'components/ui/search_results', null, [
				'media_type' => 'webinars',
			] );*/
			echo do_shortcode( '[on_demand_webinars_search_results]' );

			get_template_part( 'components/layout/footer/cta-footer-2' );
			?>
		</div>
	</div>
<?php
get_footer(); ?>