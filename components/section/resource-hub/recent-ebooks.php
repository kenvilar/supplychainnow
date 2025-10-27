<?php

$posts_per_page        = $args['posts_per_page'] ?? - 1;
$sitePaddingClassnames = $args['sitePaddingClassnames'] ?? '';
?>
<section class="section">
	<div class="site-padding sm:py-60 py-40 <?= esc_attr( $sitePaddingClassnames ); ?>">
		<div class="w-layout-blockcontainer max-w-1372 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Recent E-Books</h2>
				</div>
				<div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container">
					<div class="absolute absolute--r flex items-center pr-32">
						<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
					</div>
				</div>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1248 w-container">
          <?php
          echo do_shortcode( '[resource_hub_recent_ebooks]' );
          ?>
				</div>
			</div>
		</div>
	</div>
</section>
