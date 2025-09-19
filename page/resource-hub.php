<?php
/*
 * Template Name: Resource Hub v2
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
			get_template_part( 'components/hero/resource-hub' );
			get_template_part( 'components/section/resource-hub/tab-links', null, [
				'tabNumber' => 1
			] );
			get_template_part( 'components/ui/searchbar', null, [
				'site_padding' => 'pt-52 pb-40',
				'taxonomy'     => 'post_tag',
			] );
			scn_render_if_no_filters( 'components/section/resource-hub/featured-content' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-blogs' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-white-papers' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-ebooks' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-articles' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-news' );
			scn_render_if_no_filters( 'components/section/resource-hub/recent-guides' );

			get_template_part( 'components/ui/search_results', null, [
				'post_type'    => 'post',
				'resource_hub' => true,
			] );

			get_template_part( 'components/layout/footer/cta-footer-2' );
			?>
		</div>
	</div>
<?php
get_footer(); ?>