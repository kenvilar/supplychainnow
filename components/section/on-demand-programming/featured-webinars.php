<?php

$pageID                    = get_the_ID();
$site_padding              = $args["site_padding"] ?? "";
$featured_content_webinars = get_field( 'featured_content_webinars', $pageID );
$section                   = get_field( 'Featured_Webinars_Section', $pageID );
$title                     = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Featured Webinars' );
?>
<section class="section">
	<div class="site-padding sm:py-60 pb-80 <?php
	echo esc_attr( $site_padding ); ?>">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
				<?php
				get_template_part( "components/line-with-blinking-dot" ); ?>
			</div>
			<div class="w-layout-blockcontainer max-w-1252 w-container">
				<?php
				echo do_shortcode( '[on_demand_programming_all_content_featured_webinars]' );
				?>
			</div>
		</div>
	</div>
</section>