<?php

?>
<section class="section rounded-t-100 overflow-hidden text-white select-none">
	<div class="site-padding sm:py-60 py-144">
		<div class="w-layout-blockcontainer max-w-564 text-center w-container">
			<div class="mb-32">
				<h2 class="text-45">Work With Us</h2>
			</div>
			<div class="mb-32">
				<p class="font-semibold text-lg">Reach the right audience as a sponsor or campaign partner and generate
					high-value leads for your brand.
				</p>
			</div>
			<div class="flex justify-center">
				<?php
				echo get_template_part('components/ui/btn', null, [
					'text' => 'Learn More About Working with Us',
					'link' => '/work-with-us',
					'style' => 'primary',
					'class' => '',
					/*'attributes' => [
						'target' => '_blank',
						'rel'    => 'noopener noreferrer',
					],*/
				]);
				?>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full gradient1 rotate-180 z--2"></div>
	<div class="absolute absolute--full w-full h-full z--1">
		<img
			src="<?php
			echo get_stylesheet_directory_uri() . '/assets/img/home/professional-video-shoot-camera.avif'; ?>"
			loading="lazy" alt="Camera capturing a professional video shoot setup" class="image opacity-15">
	</div>
</section>