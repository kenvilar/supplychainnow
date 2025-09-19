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
											<div class="text-xs tracking-[1.2px] list-circle">
												<?= $description; ?>
											</div>
										</div>
									</div>
									<div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
								</li>
							<?php
							endforeach;
						else:
							?>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Brand Awareness / Thought Leadership</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<p class="text-xs tracking-[1.2px]">After growing rapidly (via sales and acquisitions) the last
											few
											years, brand clarity and awareness became even more crucial.
											<br>
											<br>
											The Supply Chain Now team helped drive clarity around Company B’s messages and positioned
											Company B as a Thought Leader in the space.
										</p>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
							</li>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Lead Generation</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<p class="text-xs tracking-[1.2px]">Supply Chain Now Campaigns see anywhere between 500K - 1M
											impressions across social media.
											<br>
											<br>
											Company B was able to reach new and existing customers by sparking conversation online with
											the content they created with Supply Chain Now.
										</p>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
							</li>
							<li class="accordion-item">
								<div class="accordion-item-header">
									<div class="flex items-center">
										<div class="font-semibold text-md">+ &nbsp; Content Creation</div>
									</div>
								</div>
								<div class="accordion-item-body">
									<div class="accordion-item-body-content">
										<p class="text-xs tracking-[1.2px]">Compared to every other webinar they have done (both
											internally
											and with external third parties), the Supply Chain Now webinar beat the others for registrants
											by 180%!
											<br>
											<br>
											The conversion rate to attendees was 49%, which is more than double that the 20% they usually
											experience.
										</p>
									</div>
								</div>
								<div class="absolute absolute--full gradient2 -z-1 opacity-25"></div>
							</li>
						<?php
						endif;
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
