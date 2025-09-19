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
					<ul role="list" class="accordion w-list-unstyled">
						<?php
						if ( ! empty( $section['Accordion'] ) ):
							foreach ( $section['Accordion'] as $idx => $item ):
								$title = $item['Title'];
								$description = $item['Description'];
								?>
								<li class="accordion-item">
									<div class="accordion-item-header">
										<div class="flex items-center">
											<div class="font-semibold text-md">+ &nbsp; <?= $title; ?></div>
										</div>
									</div>
									<div class="accordion-item-body">
										<div class="accordion-item-body-content">
											<div class="w-richtext list-circle text-xs tracking-[1.2px] pl-28">
												<?= $description; ?>
											</div>
										</div>
									</div>
									<div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
								</li>
							<?php
								//
							endforeach;
						else:
							?>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Podcast</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<div class="w-richtext">
											<ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
												<li>Brand awareness</li>
												<li>Thought leadership</li>
												<li>3rd party validation</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
							</li>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Livestream</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<div class="w-richtext">
											<ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
												<li>Thought leadership</li>
												<li>Genuine engagement</li>
												<li>Social traffic</li>
												<li>3rd party validation</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
							</li>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Webinar</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<div class="w-richtext">
											<ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
												<li>Brand awareness</li>
												<li>Genuine engagement</li>
												<li>Lead generation</li>
												<li>3rd party validation</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
							</li>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Advertisement</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<div class="w-richtext">
											<ul role="list" class="list-circle text-xs tracking-[1.2px] pl-28">
												<li>Brand awareness</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 z--1 opacity-25"></div>
							</li>
						<?php
						endif;
						?>
					</ul>
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
