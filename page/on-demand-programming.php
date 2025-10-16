<?php
/*
 * Template Name: On-Demand Programming v2
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
			get_template_part( 'components/hero/on-demand-programming' );
			get_template_part( 'components/section/on-demand-programming/tab-links', null, [
				'tabNumber' => 1,
			] );

			/*get_template_part( 'components/ui/searchbar', null, [
				'site_padding' => 'pt-52 pb-40',
				'taxonomy'     => 'tags',
			] );*/
			echo do_shortcode( '[searchbar site_padding="pt-52 pb-40" taxonomy="tags"]' );

			scn_render_if_no_filters( 'components/section/on-demand-programming/featured-episodes' );
			scn_render_if_no_filters( 'components/section/on-demand-programming/featured-webinars' );
			scn_render_if_no_filters( 'components/section/on-demand-programming/podcast-episodes' );
			scn_render_if_no_filters( 'components/section/on-demand-programming/on-demand-webinars' );

			/*get_template_part( 'components/ui/search_results', null, [
				'media_type' => 'all-events',
			] );*/
			echo do_shortcode( '[on_demand_programming_all_content_search_results]' );

			get_template_part( 'components/layout/footer/cta-footer-2' );
			?>
		</div>
	</div>
<?php
get_footer(); ?>