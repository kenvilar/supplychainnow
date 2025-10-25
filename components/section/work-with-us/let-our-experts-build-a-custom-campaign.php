<?php

$pageID  = get_the_ID();
$section = get_field( 'Let_Our_Experts_Build_a_Custom_Campaign_for_You_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Let Our Experts Build a Custom Campaign for You' );
$image   = esc_url( ! empty( $section['Image'] ) ? $section['Image'] : get_stylesheet_directory_uri() . '/assets/img/work-with-us/Let-Our-Experts-Build-a-Custom-Campaign-for-You.avif' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-100 relative z-10">
		<div class="w-layout-blockcontainer max-w-1208 w-container">
			<div class="flex gap-20 justify-between items-center sm:flex-col">
				<div class="max-w-588 w-full md:max-w-full sm:order-2">
					<div class="mb-36">
						<h2><?= $title; ?></h2>
					</div>
					<div class="mb-48">
						<div class="max-w-424 w-full md:max-w-full">
							<div class="tracking-[1.6px]">
								<?php
								if ( ! empty( $section['Description'] ) ):
									echo $section['Description'];
								else:
									echo 'Podcasts, livestreams, and webinars to drive the best results for your organization.';
								endif;
								?>
							</div>
						</div>
					</div>
          <?php
          echo do_shortcode( '[work_with_us_experts_build_campaign_accordion]' );
          ?>
				</div>
				<div class="max-w-496 w-full md:max-w-full">
					<img
						src="<?= $image; ?>"
						loading="lazy" alt="Let Our Experts Build a Custom Campaign for You" class="image">
				</div>
			</div>
		</div>
	</div>
	<div class="absolute absolute--r flex items-center w-[50%] sm:display-none">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/grid/bg-grid.avif'; ?>"
		     loading="lazy" alt="bg-grid">
	</div>
</section>
