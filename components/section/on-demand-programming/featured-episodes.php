<?php

$pageID                    = get_the_ID();
$featured_content_podcasts = get_field( 'featured_content_podcasts', $pageID );
$section                   = get_field( 'Featured_Episodes_Section', $pageID );
$title                     = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Featured Episodes' );
?>
<section class="section">
	<div class="site-padding sm:py-60 pt-60 pb-80">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
				<?php
				get_template_part( "components/line-with-blinking-dot" ); ?>
			</div>
			<div class="w-layout-blockcontainer max-w-1252 w-container">
				<div class="w-dyn-list">
					<?php
					echo do_shortcode( '[on_demand_programming_featured_episodes]' );
					?>
				</div>
			</div>
		</div>
	</div>
</section>