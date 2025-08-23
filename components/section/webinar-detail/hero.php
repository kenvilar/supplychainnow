<?php
/**
 * Hero section for Webinar Detail
 * Renders back link, hero graphic, and primary CTA button
 */

$pageId = $args['pageId'] ?? get_the_ID();
$webinar_button_link = $args['webinar_button_link'] ?? get_field('webinar_button_link', $pageId);
?>
<section class="section">
	<div class="site-padding sm:py-60 pt-58">
		<div class="mx-auto text-center">
			<a href="/webinars" class="font-semibold text-reg text-secondary">< Back to Webinars</a>
		</div>
	</div>
</section>
<section class="section">
	<div class="site-padding sm:py-60 pt-29">
		<div class="mx-auto max-w-1010 w-full md:max-w-full">
			<div class="overflow-hidden rounded-25 relative">
				<div class="relative z-1 h-426 sm:h-300">
					<a href="<?php
					if ($webinar_button_link) {
						echo esc_url($webinar_button_link);
					} ?>" target="<?php
					if ($webinar_button_link) {
						echo '_blank';
					} else {
						echo '_self';
					}
					?>">
						<img class="image object-contain!" src="
														<?php
						if (get_the_post_thumbnail_url($pageId, 'full')) {
							echo get_the_post_thumbnail_url($pageId, 'full');
						} else {
							if (get_field('thumbnail_upload', $pageId)) {
								echo get_field('thumbnail_upload', $pageId);
							}
						}
						?>" alt="">
					</a>
				</div>
				<div class="absolute absolute--full bg-cargogrey z--1"></div>
			</div>
			<?php if ($webinar_button_link) { ?>
				<div class="mt-24 flex justify-center">
					<?php
					echo get_template_part('components/ui/btn', null, [
						'text' => 'View this Webinar',
						'link' => esc_url($webinar_button_link),
						'style' => 'primary',
						'class' => 'py-18 px-32 text-lg md:text-xl rounded-100 shadow4',
						'attributes' => [
							'target' => '_blank',
							'rel' => 'noopener noreferrer',
						],
					]);
					?>
				</div>
			<?php } ?>
		</div>
	</div>
</section>

