<?php

$postID     = get_the_ID();
$section    = get_field( 'Latest_Podcast_Episodes_Section', $postID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Latest Podcast Episodes' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Browse All Podcasts' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/podcasts-and-livestreams' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="max-w-1372 relative w-container">
			<div class="mb-44">
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
				<?php
				if ( shortcode_exists( 'home_latest_podcast_episodes' ) ) {
					echo do_shortcode( '[home_latest_podcast_episodes]' );
				}
				?>
			</div>
			<div class="flex justify-center gap-12 sm:flex-col">
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
