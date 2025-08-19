<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-40">
		<div class="w-layout-blockcontainer max-w-1248 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Content</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="flex justify-center gap-28 sm:flex-col w-full">
				<?php
				echo get_template_part('components/ui/card1-post', null, [
					'q' => [
						'posts_per_page' => 2,
					],
					'attributes' => [],
					'classNames' => '',
					'taxQueryTerms' => [],
					'noItemsFound' => '',
				]);
				?>
				<!--<div class="w-full w-dyn-list">
					<div role="list" class="w-dyn-items">
						<div role="listitem" class="w-full group w-dyn-item">
							<div class="flex flex-col gap-20 h-full">
								<div class="w-full h-full">
									<div class="mb-28">
										<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
											<img
												src="https://cdn.prod.website-files.com/6890618031b7f97463816bfc/689061b1797ed4309fbd01b1_image6.jpeg"
												loading="lazy" alt="Data privacy concept with locks" class="image relative opacity-40">
											<div class="w-dyn-list">
												<div role="list" class="w-dyn-items">
													<div role="listitem" class="w-dyn-item">
														<div class="absolute absolute--tl p-24">
															<div class="rounded-full py-4 px-8 bg-white">
																<div class="font-semibold text-2xs uppercase lh-full">Digital Marketing</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-12">
										<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
											<div class="flex items-center gap-8">
												<div class="font-family-secondary text-xs">White Paper</div>
											</div>
											<div class="flex items-center gap-8">
												<div class="font-family-secondary font-light text-xs">October 9, 2023</div>
												<div>•</div>
												<div class="font-family-secondary font-light text-xs">55 minutes</div>
											</div>
										</div>
									</div>
									<h3 class="font-semibold">Understanding Data Privacy Regulations</h3>
								</div>
								<div class="w-full">
									<div class="rt--plain truncate-2-lines-fallback w-richtext">Data Privacy RegulationsData privacy
										regulations are essential for protecting personal information in the digital age. Understanding
										the...
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full w-dyn-list">
					<div role="list" class="w-dyn-items">
						<div role="listitem" class="w-full group w-dyn-item">
							<div class="flex flex-col gap-20 h-full">
								<div class="w-full h-full">
									<div class="mb-28">
										<div class="overflow-hidden rounded-12 relative h-344 bg-cargogrey">
											<img
												src="https://cdn.prod.website-files.com/686225582293e0967d2b9375/686244618d158d543b297379_image6.jpeg"
												loading="lazy" alt="Book fair event" class="image relative opacity-40">
											<div class="w-dyn-list">
												<div role="list" class="w-dyn-items">
													<div role="listitem" class="w-dyn-item">
														<div class="absolute absolute--tl p-24">
															<div class="rounded-full py-4 px-8 bg-white">
																<div class="font-semibold text-2xs uppercase lh-full">Digital Marketing</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="mb-12">
										<div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
											<div class="flex items-center gap-8">
												<div class="font-family-secondary text-xs">News</div>
											</div>
											<div class="flex items-center gap-8">
												<div class="font-family-secondary font-light text-xs">March 25, 2023</div>
												<div>•</div>
												<div class="font-family-secondary font-light text-xs">2 months</div>
											</div>
										</div>
									</div>
									<h3 class="font-semibold">Annual Book Fair Coming Up</h3>
								</div>
								<div class="w-full">
									<div class="rt--plain truncate-2-lines-fallback w-richtext">Annual Book Fair Coming UpThe annual
										book fair is scheduled for May 15, 2023, at the community hall. This event will feature local
										au...
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>
</section>
