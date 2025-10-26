<?php

$pageID   = get_the_ID();
$section  = get_field( 'Case_Study_#2_Section', $pageID );
$topTitle = esc_html( ! empty( $section['Top_Title'] ) ? $section['Top_Title'] : 'Case Study #2' );
$title    = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'F500 Supply Chain Solution Provider' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-80">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="flex gap-20 justify-between sm:flex-col">
				<div class="max-w-608 w-full md:max-w-full">
					<div class="mb-20">
						<div class="font-family-alternate font-semibold text-lg text-secondary"><em><?= $topTitle; ?></em></div>
					</div>
					<div class="mb-36">
						<div class="max-w-396 w-full md:max-w-full">
							<h2><?= $title; ?></h2>
						</div>
					</div>
					<div class="tracking-[1.6px]">
						<?php
						if ( ! empty( $section['Description'] ) ):
							echo $section['Description'];
						else:
							?>
							F500 supply chain solution provider specializing in shipping and logistics (“Company B”) partnered with
							Supply Chain Now on a Campaign
						<?php
						endif;
						?>
					</div>
				</div>
				<div class="max-w-588 w-full md:max-w-full">
          <?php
          echo do_shortcode( '[success_stories_accordion_2]' );
          ?>
				</div>
			</div>
		</div>
	</div>
</section>
