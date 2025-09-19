<?php

$postID      = get_the_ID();
$section     = get_field( 'Network_Partners_Section', $postID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Network Partners' );
$description = esc_html( ! empty( $section['Description'] ) ? $section['Description'] : 'Supply Chain Now is powered by partnerships. Our Network Partners are top content creators in the supply chain space - discover their content below.' );
$buttonText  = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Explore More Partners' );
$buttonLink  = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : '/campaign-directory' );
?>
<div class="rounded-b-100 overflow-hidden relative">
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
						if ( ! empty( $section['Cards'] ) ):
							foreach ( $section['Cards'] as $index => $item ) :
								$image = $item['Card_Image'];
								$link = esc_url( $item['Card_Link'] );
								?>
								<a href="<?= $link; ?>" class="relative w-full overflow-hidden group w-inline-block">
									<div
										class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
										<img
											src="<?= $image; ?>"
											loading="lazy" alt="easypost logo"
											class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all"/>
									</div>
									<div
										class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
										<div class="btn primary">Click for more</div>
									</div>
								</a>
							<?php
							endforeach;
						else:
							?>
							<a href="/easypost" class="relative w-full overflow-hidden group w-inline-block">
								<div
									class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/home/easypost.svg'; ?>"
										loading="lazy" alt="easypost logo"
										class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all"/>
								</div>
								<div
									class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
									<div class="btn primary">Click for more</div>
								</div>
							</a>
							<a href="/us-bank" class="relative w-full overflow-hidden group w-inline-block">
								<div
									class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/home/us-bank.svg'; ?>"
										loading="lazy" alt="us-bank logo"
										class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all">
								</div>
								<div
									class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
									<div class="btn primary">Click for more</div>
								</div>
							</a>
							<a href="/enable" class="relative w-full overflow-hidden group w-inline-block">
								<div
									class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
									<img
										src="<?php
										echo get_stylesheet_directory_uri() . '/assets/img/home/enable.svg'; ?>"
										loading="lazy" alt="enable logo"
										class="grayscale-0 opacity-100 group-hover:grayscale group-hover:opacity-20 transition-all">
								</div>
								<div
									class="absolute absolute--full w-full h-full flex items-center justify-center translate-y-[100%] group-hover:translate-y-0 transition-all duration-500">
									<div class="btn primary">Click for more</div>
								</div>
							</a>
						<?php
						endif;
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