<?php

$pageId     = get_the_ID();
$embed_code = get_field( 'Embed_Code', $pageId ) ?: '';
?>
<section class="section">
	<div class="site-padding sm:py-60 py-92">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div>
				<div class="overflow-hidden rounded-12 relative">
					<?php
					if ( ! empty( $embed_code ) ):
						echo $embed_code;
					else:
						?>
						<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js"
						        data-width="100%"
						        data-height="auto"
						        data-url="https://gateway.on24.com/wcc/eh/4818584/supply-chain-now/?partnerref=ehub"></script>
					<?php
					endif;
					?>
				</div>
			</div>
		</div>
	</div>
</section>
