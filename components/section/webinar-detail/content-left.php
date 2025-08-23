<?php
/**
 * Left content column for Webinar Detail
 * Renders share icons and the webinar description
 */

$pageId = $args['pageId'] ?? get_the_ID();
$webinar_button_link = $args['webinar_button_link'] ?? get_field('webinar_button_link', $pageId);
?>
<div class="max-w-775 w-full md:max-w-full">
	<div class="mb-60">
		<div class="flex gap-28 items-center">
			<div class="flex items-center gap-15">
				<div class="tracking-[1.6px]">Share:</div>
				<?php get_template_part('components/section/events/social-media-icons'); ?>
			</div>
		</div>
	</div>
	<div class="tracking-[1.6px]">
		<?php
		if (get_field('webinar_description', $pageId)) {
			echo wp_kses_post(get_field('webinar_description', $pageId));
		}
		?>
	</div>
</div>

