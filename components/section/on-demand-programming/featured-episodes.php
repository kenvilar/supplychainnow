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
								"meta_query" => [
									"relation" => "OR",
									[
										"relation" => "OR",
										[
											"key" => "_wp_page_template",
											"value" => "episode-detail.php",
											"compare" => "=",
										],
										[
											"key" => "_wp_page_template",
											"value" => "livestream-detail.php",
											"compare" => "=",
										],
									],
								],
							],
							"q_post" => [],
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