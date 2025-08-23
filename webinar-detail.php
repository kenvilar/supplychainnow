<?php
/*
 * Template Name: Webinar Detail
 */

set_query_var('header_args', [
	'nav_classnames' => '', // '' || 'fixed'
]);
get_header();
$pageId = get_the_ID();
$webinar_button_link = get_field('webinar_button_link', $pageId);
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			
			<?php echo get_template_part('components/section/webinar-detail/hero', null, [
				'pageId' => $pageId,
				'webinar_button_link' => $webinar_button_link,
			]); ?>
			<section class="section">
				<div class="site-padding sm:py-60 py-64">
					<div class="mx-auto max-w-1249 w-full md:max-w-full">
						<div class="flex gap-20 justify-between">
							<?php echo get_template_part('components/section/webinar-detail/content-left', null, [
								'pageId' => $pageId,
								'webinar_button_link' => $webinar_button_link,
							]); ?>
							<?php echo get_template_part('components/section/webinar-detail/sidebar', null, [
								'pageId' => $pageId,
							]); ?>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
<?php
get_footer(); ?>