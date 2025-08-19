<?php

?>
<div class="overflow-hidden relative rounded-t-100">
	<section class="section sm:text-center">
		<div class="site-padding sm:py-60 pt-100">
			<div class="w-layout-blockcontainer max-w-1172 w-container">
				<div class="flex items-center justify-between gap-20 sm:flex-col">
					<div class="max-w-528 w-full md:max-w-full">
						<img
							src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688c9ad97de19e17000d9354_Book%20a%20Free%20Strategy%20Session.avif"
							loading="lazy" alt="Book a Free Strategy Session" class="image">
					</div>
					<div class="max-w-548 w-full md:max-w-full">
						<div class="mb-20">
							<div class="max-w-348 w-full md:max-w-full">
								<h2>Book a Free Strategy Session</h2>
							</div>
						</div>
						<div class="mb-28">
							<div class="max-w-416 w-full md:max-w-full">
								<div class="font-family-alternate font-semibold text-lg text-secondary">Get started driving leads
									with interactive, reusable content.
								</div>
							</div>
						</div>
						<div class="mb-36">
							<p class="tracking-[1.6px]">Ready to get in front of 1M+ Supply Chain Professionals? Book a call today
								to
								learn about our packages that include podcasts, livestreams, webinars, and much more.
							</p>
						</div>
						<div class="flex sm:justify-center">
							<?php
							echo get_template_part('components/ui/btn', null, [
								'text' => 'Get Started',
								'link' => '/contact',
								'style' => 'primary',
								'class' => '',
								/*'attributes' => [
									'target' => '_blank',
									'rel'    => 'noopener noreferrer',
								],*/
							]);
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="absolute absolute--full gradient2 opacity-25 z--1 h-half"></div>
</div>
