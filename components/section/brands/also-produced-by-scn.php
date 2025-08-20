<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-76">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="mb-52">
				<div class="mb-20">
					<h2 class="text-center">Also Produced by Supply Chain Now</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="w-dyn-list">
				<div role="list" class="grid grid-cols-3 gap-32 md:grid-cols-2 sm:grid-cols-1 w-dyn-items">
					<?php
					$defaults_args = [
						"post_type" => "program",
						"post_status" => "publish",
						"posts_per_page" => 6,
						"offset" => 0,
						'post_name__in' => [
							'supply-chain-is-boring',
							'digital-transformers',
							'veteran-voices',
							'business-history',
							'tektok',
							'techquila-sunrise'
						],
						"orderby" => ["post_name__in" => 'ASC'],
					];
					$q = new WP_Query($defaults_args);

					if ($q->have_posts()): ?>
						<?php
						while ($q->have_posts()):
							$q->the_post();
							?>
							<a href="<?php
							the_permalink($q->ID); ?>"
							   class="w-full overflow-hidden rounded-24 hover-shadow2 w-inline-block">
								<div class="h-396 sm:h-200">
									<img
										src="<?php
										if (get_field('program_thumbnail_image_upload', $q->ID)) {
											echo get_field('program_thumbnail_image_upload', $q->ID);
										} else {
											echo get_the_post_thumbnail_url($q->ID);
										}
										?>"
										loading="lazy" alt="Supply Chain is Boring" class="image">
								</div>
							</a>
						<?php
						endwhile;
						wp_reset_postdata();
						?>
					<?php
					else:
						echo '<p class="w-full text-center">No items found.</p>';
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
