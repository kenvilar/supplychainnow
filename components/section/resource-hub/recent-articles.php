<?php

$posts_per_page        = $args['posts_per_page'] ?? - 1;
$sitePaddingClassnames = $args['sitePaddingClassnames'] ?? '';
?>
<section class="section">
	<div class="site-padding sm:py-60 py-40 <?= esc_attr( $sitePaddingClassnames ); ?>">
		<div class="w-layout-blockcontainer max-w-1372 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Recent Articles</h2>
				</div>
				<?php
				get_template_part( 'components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				] );
				?>
			</div>
			<div class="relative">
				<div class="w-layout-blockcontainer max-w-1248 w-container">
          <?php
          echo do_shortcode( '[resource_hub_recent_articles]' );
          ?>
				</div>
			</div>
		</div>
	</div>
</section>