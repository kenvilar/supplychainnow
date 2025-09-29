<?php

$postId           = get_the_ID();
$featured_content = get_field( 'featured_content', $postId );
$section          = get_field( 'Featured_Content_Buttons', $postId );
$title            = esc_html( ! empty( get_field( 'Featured_Content_Title' ) ) ? get_field( 'Featured_Content_Title' ) : 'Featured Content' );
$button1Text      = esc_html( ! empty( $section['Button_1_Text'] ) ? $section['Button_1_Text'] : 'Browse All Podcasts' );
$button1Link      = esc_url( ! empty( $section['Button_1_Link'] ) ? $section['Button_1_Link'] : '/podcasts-and-livestreams' );
$button2Text      = esc_html( ! empty( $section['Button_2_Text'] ) ? $section['Button_2_Text'] : 'Browse All Webinars' );
$button2Link      = esc_url( ! empty( $section['Button_2_Link'] ) ? $section['Button_2_Link'] : '/webinars' );
?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="max-w-1252 w-container">
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
			<?php
			if ( shortcode_exists( 'home_featured_content' ) ) {
				echo do_shortcode( '[home_featured_content]' );
			}
			?>
			<div class="flex justify-center gap-12 sm:flex-col">
				<?php
				echo get_template_part( 'components/ui/btn', null, [
					'text'  => $button1Text,
					'link'  => $button1Link,
					'style' => 'secondary',
					'class' => '',
					/*'attributes' => [
						'target' => '_blank',
						'rel'    => 'noopener noreferrer',
					],*/
				] );
				echo get_template_part( 'components/ui/btn', null, [
					'text'  => $button2Text,
					'link'  => $button2Link,
					'style' => 'secondary-outline',
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