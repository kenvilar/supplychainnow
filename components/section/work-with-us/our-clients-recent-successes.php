<?php

$pageID     = get_the_ID();
$section    = get_field( 'Our_Clients’_Recent_Successes_Section', $pageID );
$topTitle   = esc_html( ! empty( $section['Top_Title'] ) ? $section['Top_Title'] : 'Turn One Webinar into a Year’s Worth of Leads' );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Our Clients’ Recent Successes' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Read More' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/success-stories' );
?>
<div class="overflow-hidden relative rounded-t-100 sm:rounded-t-none">
	<section class="section relative z-10">
		<div class="site-padding sm:py-60 pt-64 pb-100">
			<div class="w-layout-blockcontainer max-w-1252 w-container">
				<div class="mb-12 text-center">
					<div class="font-family-alternate text-lg font-semibold">
						<?= $topTitle; ?>
					</div>
				</div>
				<div class="mb-52 text-center">
					<h2><?= $title; ?></h2>
				</div>
				<div class="mb-36">
					<div class="grid grid-cols-2 gap-44 sm:grid-cols-1">
            <?php
            echo do_shortcode( '[work_with_us_clients_success_cards]' );
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
	<div class="absolute inset-0 gradient2 opacity-25 -z-1"></div>
	<div class="absolute absolute--b z--1 flex justify-center">
		<img src="<?php
		echo get_stylesheet_directory_uri() . '/assets/img/misc/double-ring.avif'; ?>"
		     loading="lazy" alt="double ring" class="max-w-396 w-full">
	</div>
</div>
