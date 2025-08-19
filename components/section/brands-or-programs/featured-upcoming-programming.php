<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-76">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="mb-52">
				<div class="mb-20">
					<h2 class="text-center">Featured Upcoming Programming</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="w-layout-blockcontainer max-w-1036 w-container">
				<div class="w-dyn-list">
					<div role="list" class="grid grid-cols-2 gap-36 sm:grid-cols-1 w-dyn-items">
						<?php
						$defaults_args = [
							"post_type" => "program",
							"post_status" => "publish",
							"posts_per_page" => 4,
							"offset" => 0,
							'post_name__in' => [
								'supply-chain-now',
								'supply-chain-now-en-espanol',
								'logistics-with-purpose',
								'tango-tango'
							],
							"orderby" => ["post_name__in" => "ASC"],
						];
						$q = new WP_Query($defaults_args);
						if ($q->have_posts()): ?>
							<?php
							while ($q->have_posts()):
								$q->the_post();
								?>
								<a href="<?php
								the_permalink($q->ID); ?>" class="w-full overflow-hidden rounded-24 hover-shadow2 w-inline-block">
									<div class="h-496 sm:h-200">
										<img
											src="<?php
											if (get_field('program_thumbnail_image_upload', $q->ID)) {
												echo get_field('program_thumbnail_image_upload', $q->ID);
											} else {
												echo get_the_post_thumbnail_url($q->ID);
											}
											?>"
											loading="lazy" alt="" class="image">
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
	</div>
</section>
