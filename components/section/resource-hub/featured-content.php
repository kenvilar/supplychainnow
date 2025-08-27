<?php

$override_args = $args["q"] ?? [];
$sectionName = $args['sectionName'] ?? 'Content';
$taxQueryTerms = $args["taxQueryTerms"] ?? [];

$defaults_args = [
	'posts_per_page' => 2,
  "tax_query" => [
    [
      "taxonomy" => "category",
      "field" => "slug",
      "terms" => ["podcast-episode"],
      "operator" => "NOT IN",
    ],
  ],
];
?>
<section class="section">
	<div class="site-padding sm:py-60 py-40">
		<div class="w-layout-blockcontainer max-w-1248 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">
						Featured <?= $sectionName; ?>
					</h2>
				</div>
				<?php
				get_template_part('components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				]);
				?>
			</div>
			<div class="grid grid-cols-2 gap-28 sm:grid-cols-1 w-full">
				<?php
				$query_args = array_merge($defaults_args, $override_args);
				echo get_template_part('components/ui/card1-post', null, [
					'q' => $query_args,
					'attributes' => [],
					'classNames' => '',
					'noItemsFound' => '',
					'taxQueryTerms' => $taxQueryTerms,
				]);
				?>
			</div>
		</div>
	</div>
</section>
