<section class="section">
	<div class="site-padding sm:py-60 py-60">
		<div class="w-layout-blockcontainer max-w-1372 relative w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Featured Upcoming Programming</h2>
				</div>
				<?php
				get_template_part("components/line-with-blinking-dot"); ?>
			</div>
			<div class="mb-68">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
					        data-height="auto"
					        data-url="https://gateway.on24.com/wcc/eh/4818584/category/144749/upcoming-events"></script>
					<!--<div class="w-dyn-list">
						<div role="list" class="flex justify-center gap-28 sm:flex-col w-dyn-items">
							<?php
					/*							echo get_template_part("components/ui/card1", null, [
													"q" => [
														"posts_per_page" => 2,
														"meta_query" => [
															"relation" => "AND",
															[
																"relation" => "OR",
																[
																	"key" => "_wp_page_template",
																	"value" => "webinar-detail.php",
																	"compare" => "=",
																],
																[
																	"key" => "_wp_page_template",
																	"value" => "livestream-detail.php",
																	"compare" => "=",
																],
															],
															[
																"key" => "select_media_type",
																"value" => ["livestream", "webinar"],
																"compare" => "IN",
																"type" => "CHAR",
															],
														],
														"date_query" => [
															[
																"after" => current_time("Y-m-d"),
																"inclusive" => true, // include today
															],
														],
													],
													"attributes" => [],
													"classNames" => "",
													"noItemsFound" =>
														'<p class="w-full text-center">No upcoming events found.</p>',
												]); */ ?>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</section>
