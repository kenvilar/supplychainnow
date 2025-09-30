<?php

?>
<div class="gradient1 rounded-100 sm:rounded-none">
	<section class="section text-white">
		<div class="site-padding sm:py-60 py-88">
			<div class="w-layout-blockcontainer max-w-1372 relative w-container">
				<div class="mb-52">
					<div class="mb-20">
						<h2 class="text-center">Recent Webinars</h2>
					</div>
					<?php
					get_template_part( 'components/line-with-blinking-dot', null, [
						'maxWidthClassnames' => 'bg-white/25'
					] );
					?>
				</div>
				<div class="mb-56">
					<div class="max-w-1248 mx-auto">
						<?php
						if ( shortcode_exists( 'home_recent_webinars_slider' ) ) {
							echo do_shortcode( '[home_recent_webinars_slider]' );
						}
						?>
					</div>
				</div>
				<div class="flex justify-center gap-12 sm:flex-col">
					<?php
					echo get_template_part( 'components/ui/btn', null, [
						'text'  => 'Browse Upcoming Live Programming',
						'link'  => '/upcoming-live-programming',
						'style' => 'primary',
						'class' => '',
						/*'attributes' => [
							'target' => '_blank',
							'rel'    => 'noopener noreferrer',
						],*/
					] );
					?>
				</div>
			</div>
		</div>
	</section>
</div>
