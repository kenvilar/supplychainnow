<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 pt-60 pb-80">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Episodes</h2>
				</div>
				<?php
				get_template_part("components/line-with-blinking-dot"); ?>
			</div>
			<div class="w-layout-blockcontainer max-w-1252 w-container">
				<div class="w-dyn-list">
					<div role="list" class="flex justify-center gap-28 sm:flex-col w-dyn-items">
						<?php
						echo get_template_part("components/ui/card1", null, [
							"q" => [
								"post_type" => "page",
								"post_status" => "publish",
								"posts_per_page" => 2,
								"offset" => 0,
								"meta_query" => [
									[
										"relation" => "AND",
										[
											'key'     => '_wp_page_template',
											'value'   => ['episode-detail.php', 'livestream-detail.php'],
											'compare' => 'IN',
											'type'    => 'CHAR',
										],
									],
								],
                'no_found_rows' => true,  // set true if not paginating
                'update_post_meta_cache' => false, // set false if not reading lots of meta
                'update_post_term_cache' => false,
								"orderby" => ["menu_order" => "ASC", "date" => "DESC"],
							],
							"post_per_page" => 2,
							"attributes" => [],
							"classNames" => "",
							"noItemsFound" => "",
						]); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>