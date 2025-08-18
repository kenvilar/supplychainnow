<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-148">
		<div class="w-layout-blockcontainer max-w-1068 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-32">
				<div class="max-w-452 w-full md:max-w-full sm:order-2 text-center">
					<div class="mb-32">
						<h2 class="font-semibold text-36">Behind the Microphone</h2>
					</div>
					<div class="flex justify-center">
						<?php
						echo get_template_part('components/ui/btn', null, [
							'text' => 'Meet Our Team',
							'link' => '/our-team-and-hosts',
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
				<div class="max-w-492 w-full md:max-w-full">
					<img
						src="<?php
						echo get_stylesheet_directory_uri() . '/assets/img/our-story/behind-the-microphone.avif'; ?>"
						loading="lazy" alt="behind-the-microphone" class="image">
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full flex items-center justify-center z--1">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/grid/bg-grid.avif'; ?>"
		     loading="lazy" alt="bg-grid">
	</div>
</section>
