<?php
/*
 * xxTemplate Namexx: xxResource Hub - News v2xx
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
				'tabNumber' => 6
			] );
      /*get_template_part( 'components/ui/searchbar', null, [
        'site_padding' => 'pt-52 pb-40',
        'taxonomy'     => 'post_tag',
        'placeholder'  => 'Search',
      ] );*/
      echo do_shortcode( '[searchbar site_padding="pt-52 pb-40" taxonomy="post_tag" placeholder="Search"]' );
      echo do_shortcode( '[news_featured_content]' );
      echo do_shortcode( '[news_recent_news]' );
      echo do_shortcode( '[resource_hub_search_results]' );
			get_template_part( 'components/layout/footer/cta-footer-2' );
			?>
		</div>
	</div>
<?php
get_footer(); ?>