<?php

?>
<section class="section">
	<div class="site-padding sm:py-60 py-40">
		<div class="w-layout-blockcontainer max-w-1248 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Blogs</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="w-full w-dyn-list">
				<div role="list" class="flex justify-center gap-28 sm:flex-col w-dyn-items">
					<?php
					echo get_template_part('components/ui/card1-post', null, [
						'q' => [
							'posts_per_page' => 2,
							"tax_query" => [
								[
									"taxonomy" => "category",
									"field" => "slug",
									"terms" => [
										"ebook",
										"news",
										"visibility-guide",
										"white-paper",
										"article",
										"guest-post",
										"weekly-summary"
									],
									"operator" => "NOT IN",
								],
							],
						],
						'attributes' => [],
						'classNames' => '',
						'noItemsFound' => '',
						'taxQueryTerms' => [],
					]);
					?>
				</div>
			</div>
		</div>
	</div>
</section>
