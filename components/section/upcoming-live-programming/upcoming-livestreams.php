<?php

$pageID  = get_the_ID();
$section = get_field( 'Embed_Code_Section', $pageID );
?>
<section class="section overflow-visible!">
	<style>
		.on24-embed * {
			margin: 0 !important;
			padding: 0 !important;
		}
	</style>
	<div class="site-padding sm:py-60 py-0">
		<div class="max-w-1372 mx-auto">
			<div class="max-w-full mx-auto">
				<div class="on24-embed">
					<div id="upcoming-livestreams"></div>
					<?php
					if ( ! empty( $section['Embed_Code_1'] ) ):
						echo $section['Embed_Code_1'];
					else:
						?>
						<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
						        data-height="1000"
						        data-url="https://gateway.on24.com/wcc/eh/4818584/category/143073/upcoming-livestreams"></script>
					<?php
					endif;
					?>
					<div id="upcoming-webinars"></div>
					<?php
					if ( ! empty( $section['Embed_Code_2'] ) ):
						echo $section['Embed_Code_2'];
					else:
						?>
						<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
						        data-height="1600"
						        data-url="https://gateway.on24.com/wcc/eh/4818584/category/141465/upcoming-webinars"></script>
					<?php
					endif;
					?>
					<!--<iframe src="https://gateway.on24.com/wcc/eh/4818584/category/143073/upcoming-livestreams"
									width="100%" height="1000" allow="fullscreen"></iframe>-->
					<!--<iframe src="https://gateway.on24.com/wcc/eh/4818584/category/141465/upcoming-webinars"
									width="100%" height="1600" allow="fullscreen"></iframe>-->
				</div>
			</div>
		</div>
	</div>
</section>