<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="max-w-1252 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Content</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot');
				?>
			</div>
			<div class="mb-48">
				<div class="flex justify-center gap-28 sm:flex-col">
					<?php
					echo get_template_part('components/ui/card1', null, [
						'q' => [
							'posts_per_page' => 2,
						],
						'attributes' => [],
					]);
					?>
				</div>
			</div>
			<div class="mb-64">
				<div class="flex justify-center gap-32 sm:flex-col">
					<?php
					echo get_template_part('components/ui/card2', null, [
						'q' => [
							'posts_per_page' => 3,
							'offset' => 2,
						],
						'attributes' => [],
					]);
					?>
				</div>
			</div>
			<div class="flex justify-center gap-12 sm:flex-col">
				<a href="/on-demand-programming/podcasts-and-livestreams" class="btn secondary w-inline-block">
					<div>Browse All Podcasts</div>
				</a>
				<a href="/on-demand-programming/webinars" class="btn secondary-outline w-inline-block">
					<div>Browse All Webinars</div>
				</a>
			</div>
		</div>
	</div>
</section>
