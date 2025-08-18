<?php

?>
<div class="rounded-b-100 overflow-hidden relative">
	<section class="section">
		<div class="site-padding sm:py-60 py-68">
			<div class="w-layout-blockcontainer max-w-1036 w-container">
				<div class="mb-80 sm:mb-20">
					<div class="mb-20">
						<h2 class="text-center">Network Partners</h2>
					</div>
					<?php
					get_template_part('components/line-with-blinking-dot', null, [
						'maxWidthClassnames' => ''
					]);
					?>
				</div>
				<div class="mb-48 sm:mb-20">
					<div class="flex gap-24 justify-between sm:flex-col">
						<a href="/easypost" class="w-full group w-inline-block">
							<div
								class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
								<img
									src="<?php
									echo get_stylesheet_directory_uri() . '/assets/img/home/easypost.svg'; ?>"
									loading="lazy" alt="easypost logo"
									class="grayscale opacity-20 group-hover:grayscale-0 group-hover:opacity-100 transition-all">
							</div>
						</a>
						<a href="/us-bank" class="w-full group w-inline-block">
							<div
								class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
								<img
									src="<?php
									echo get_stylesheet_directory_uri() . '/assets/img/home/us-bank.svg'; ?>"
									loading="lazy" alt="us-bank logo"
									class="grayscale opacity-20 group-hover:grayscale-0 group-hover:opacity-100 transition-all">
							</div>
						</a>
						<a href="/enable" class="w-full group w-inline-block">
							<div
								class="rounded-12 border border-cargogrey/25 bg-white flex justify-center items-center py-28 px-12 h-full group-hover-shadow1">
								<img
									src="<?php
									echo get_stylesheet_directory_uri() . '/assets/img/home/enable.svg'; ?>"
									loading="lazy" alt="enable logo"
									class="grayscale opacity-20 group-hover:grayscale-0 group-hover:opacity-100 transition-all">
							</div>
						</a>
					</div>
				</div>
				<div class="flex justify-center">
					<?php
					echo get_template_part('components/ui/btn', null, [
						'text' => 'Explore More Partners',
						'link' => '/campaign-directory',
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
	</section>
	<div class="absolute absolute--full gradient2 opacity-25 rotate-180 z--1"></div>
</div>
