<?php

?>
<section class="section sm:text-center">
	<div class="site-padding sm:py-60 py-76">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-40">
				<div class="max-w-568 w-full md:max-w-full sm:order-2">
					<div class="mb-20">
						<div class="font-family-alternate font-semibold text-lg text-secondary">Breaking Through:</div>
					</div>
					<div class="mb-28">
						<div class="max-w-476 w-full md:max-w-full">
							<h2>The Power of Supply Chain Podcasts</h2>
						</div>
					</div>
					<div class="mb-36">
						<p class="tracking-[1.6px]">Read our latest white paper on the measurable value podcast appearances
							bring to
							your marketing efforts.
						</p>
					</div>
					<div class="flex sm:justify-center">
						<?php
						echo get_template_part('components/ui/btn', null, [
							'text' => 'Download Now',
							'link' => '#',
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
				<div class="max-w-580 w-full md:max-w-full">
					<div class="card v4">
						<div class="relative z-10 py-60 px-20">
							<div class="w-layout-blockcontainer max-w-352 rounded-12 overflow-hidden w-container">
								<img
									src="https://cdn.prod.website-files.com/6858d0b082937600c76df99a/688d77220fe06c2b1a03734e_the%20power%20of%20supply%20chain%20podcasts.avif"
									loading="lazy" alt="the power of supply chain podcasts">
							</div>
						</div>
						<div class="absolute absolute--full w-full h-full gradient9"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
