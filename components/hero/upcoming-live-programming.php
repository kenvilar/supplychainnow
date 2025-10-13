<?php

$pageID      = get_the_ID();
$page_title  = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Upcoming Live Programming' );
$description = esc_html( get_field( 'Description', $pageID ) ?: "" );
$hero_image  = esc_url( get_field( 'Hero_Image',
	$pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--upcoming-live-programming.avif' );
$icon        = esc_url( get_field( 'Icon',
	$pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/icons/calendar.svg' );
$hide_icon   = get_field( 'Hide_Icon', $pageID ) ?: false;
//
$section      = get_field( 'Cards_Section', $pageID );
$title1       = esc_html( ! empty( $section['Title_1'] ) ? $section['Title_1'] : 'Livestreams' );
$title2       = esc_html( ! empty( $section['Title_2'] ) ? $section['Title_2'] : 'Webinars' );
$description1 = esc_html( ! empty( $section['Description_1'] ) ? $section['Description_1'] : 'Get real-time insights on supply chain trends. Register to join the conversation.' );
$description2 = ! empty( $section['Description_2'] ) ? esc_html( $section['Description_2'] ) : 'Learn from industry leaders.<br>Sign up to save your spot.';
$buttonText1  = esc_html( ! empty( $section['Button_Text_1'] ) ? $section['Button_Text_1'] : 'Register Now' );
$buttonText2  = esc_html( ! empty( $section['Button_Text_2'] ) ? $section['Button_Text_2'] : 'Register Now' );
$buttonLink1  = esc_url( ! empty( $section['Button_Link_1'] ) ? $section['Button_Link_1'] : '#upcoming-livestreams' );
$buttonLink2  = esc_url( ! empty( $section['Button_Link_2'] ) ? $section['Button_Link_2'] : '#upcoming-webinars' );
?>
<div class="relative">
	<section class="section bg-cargogrey text-white rounded-b-100 overflow-visible! sm:rounded-b-none">
		<div class="site-padding sm:py-60 pt-200 pb-100 relative z-10 pb-200">
			<div class="w-layout-blockcontainer pt-40 w-container text-center max-w-960">
				<div class="mb-20 <?= $hide_icon ? 'hidden' : '' ?>">
					<img
						class="size-53 mx-auto"
						src="<?= $icon; ?>"
						loading="lazy" alt="">
				</div>
				<div class="mb-16">
					<h1 class="scn-page-title"><?= $page_title; ?></h1>
				</div>
			</div>
		</div>
		<div class="absolute absolute--full w-full h-full">
			<img
				src="<?= $hero_image; ?>"
				loading="lazy" alt="hero-upcoming-live-programming" class="image opacity-10">
		</div>
	</section>
	<div class="pt-12 pb-100 relative z-20">
		<div class="absolute absolute--b px-12 sm:relative">
			<div class="w-layout-blockcontainer max-w-1048 w-container">
				<div class="flex gap-32 justify-between sm:flex-col">
					<div class="card">
						<div class="w-full h-full pt-48 pb-40 px-52">
							<div class="mb-16">
								<div class="font-family-alternate font-medium text-xl tracking-[2.4px]"><?= $title1; ?></div>
							</div>
							<div class="mb-32">
								<p class="tracking-[1.6px]">
									<?= $description1; ?>
								</p>
							</div>
							<?php
							echo get_template_part( "components/ui/btn", null, [
								"text"       => $buttonText1,
								"link"       => $buttonLink1,
								"style"      => "primary",
								"class"      => "",
								'attributes' => [
									'onclick' => "location.href='#upcoming-livestreams'"
									/*'target' => '_blank',
									'rel' => 'noopener noreferrer',*/
								],
								//onclick="location.href='#target'"
							] ); ?>
						</div>
					</div>
					<div class="card">
						<div class="w-full h-full pt-48 pb-40 px-52">
							<div class="mb-16">
								<div class="font-family-alternate font-medium text-xl tracking-[2.4px]"><?= $title2; ?></div>
							</div>
							<div class="mb-32">
								<p class="tracking-[1.6px]">
									<?= $description2; ?>
								</p>
							</div>
							<?php
							echo get_template_part( "components/ui/btn", null, [
								"text"       => $buttonText2,
								"link"       => $buttonLink2,
								"style"      => "tertiary",
								"class"      => "",
								'attributes' => [
									'onclick' => "location.href='#upcoming-webinars'"
									/*'target' => '_blank',
									'rel' => 'noopener noreferrer',*/
								],
							] ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
