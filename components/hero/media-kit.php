<?php

?>
<section class="section bg-cargogrey text-white rounded-b-100">
	<div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
		<div class="w-layout-blockcontainer pt-20 w-container text-center max-w-960">
			<div class="mb-20">
				<img
					src="<?php
					echo get_stylesheet_directory_uri() . '/assets/img/icons/open-envelope.svg'; ?>"
					loading="lazy" alt="open envelope">
			</div>
			<div class="mb-16">
				<h1>Media Kit</h1>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full">
		<img
			src="<?php
			if (has_post_thumbnail(get_the_ID())) {
				the_post_thumbnail_url('full');
			} ?> ?>"
			loading="lazy" alt="hero media kit" class="image opacity-10">
	</div>
</section>
