<?php

$pageID     = get_the_ID();
$section    = get_field( 'Do_you_want_to_partner_with_Supply_Chain_Now_Section', $pageID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Do you want to partner with Supply Chain Now at your upcoming event?' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Partner With Us' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '#' );
?>
<div class="overflow-hidden relative rounded-t-100 sm:rounded-t-none">
	<section class="section">
		<div class="site-padding sm:py-60 py-76">
			<div class="w-layout-blockcontainer max-w-776 w-container">
				<div class="mb-32">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
				<div class="flex justify-center">
					<a
						<?php
						if ( empty( $section['Button_Link'] ) ) {
							?>
							open-modal
							<?php
						}
						?>
						href="<?= $buttonLink; ?>" class="btn primary w-inline-block">
						<div><?= $buttonText; ?></div>
					</a>
				</div>
			</div>
		</div>
	</section>
	<div class="absolute absolute--full gradient2 opacity-25 z--1"></div>
</div>
