<?php

$pageID  = get_the_ID();
$section = get_field( 'The_Buzz_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'The Buzz' );
?>
<section class="section">
	<div class="site-padding sm:py-60 pb-80">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-52">
				<div class="mb-20">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
				<?php
				get_template_part( 'components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				] );
				?>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<?php
					echo do_shortcode( '[on_demand_podcasts_and_livestreams_podcast_series]' );
					?>
				</div>
			</div>
		</div>
	</div>
</section>