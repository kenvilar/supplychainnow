<?php

?>
<section class="section bg-cargogrey text-white rounded-b-100">
	<div class="site-padding sm:py-60 pt-200 pb-152 relative z-10">
		<div class="w-layout-blockcontainer pt-40 w-container text-center max-w-680">
			<div class="mb-20">
				<img src="<?= get_stylesheet_directory_uri() . '/assets/img/icons/3by3.svg'; ?>"
				     loading="lazy" alt="3by3">
			</div>
			<div class="mb-16">
				<h1>Explore Our Resource Hub</h1>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full">
		<img
			src="<?php
			if (has_post_thumbnail(get_the_ID())) {
				echo get_the_post_thumbnail_url(get_the_ID(), 'full');
			} else {
				echo get_stylesheet_directory_uri() . '/assets/img/resource-hub/hero--resource hub.avif';
			}
			?>"
			loading="lazy" alt="hero--resource hub" class="image opacity-10">
	</div>
</section>
