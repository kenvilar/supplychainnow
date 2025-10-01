<?php

$postID      = get_the_ID();
$section     = get_field( 'Network_Partners_Section', $postID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Network Partners' );
$description = esc_html( ! empty( $section['Description'] ) ? $section['Description'] : 'Supply Chain Now is powered by partnerships. Our Network Partners are top content creators in the supply chain space - discover their content below.' );
$buttonText  = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Explore More Partners' );
$buttonLink  = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/campaign-directory' );
?>
<div class="rounded-b-100 sm:rounded-b-none overflow-hidden relative">
	<section class="section">
		<div class="site-padding sm:py-60 py-68">
			<div class="w-layout-blockcontainer max-w-1036 w-container">
				<div class="mb-40 sm:mb-20">
					<div class="mb-20">
						<h2 class="text-center"><?= $title; ?></h2>
					</div>
					<?php
					get_template_part( 'components/line-with-blinking-dot', null, [
						'maxWidthClassnames' => ''
					] );
					?>
				</div>
				<div class="mb-44">
					<div class="w-layout-blockcontainer max-w-612 w-container">
						<div class="text-center">
							<p class="tracking-[1.6px]">
								<?= $description; ?>
							</p>
						</div>
					</div>
				</div>
				<div class="mb-48 sm:mb-20">
					<div class="flex gap-24 justify-between sm:flex-col">
						<?php
						if ( shortcode_exists( 'home_network_partners_cards' ) ) {
							do_shortcode( '[home_network_partners_cards]' );
						}
						?>
					</div>
				</div>
				<div class="flex justify-center">
					<?php
					echo get_template_part( 'components/ui/btn', null, [
						'text'  => $buttonText,
						'link'  => $buttonLink,
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
	<div class="absolute absolute--full gradient2 opacity-25 rotate-180 z--1"></div>
</div>