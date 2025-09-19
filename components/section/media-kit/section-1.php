<?php

$pageId     = get_the_ID();
$embed_code = get_field( 'Embed_Code', $pageId ) ?: '';
?>
<section class="section">
	<div class="site-padding sm:py-60 py-84">
		<div class="w-layout-blockcontainer max-w-1252 w-container">
			<div class="overflow-hidden rounded-12 relative">
				<?php
				if ( ! empty( $embed_code ) ):
					echo $embed_code;
				else:
					?>
					<script src="https://js.hsforms.net/forms/embed/49227407.js" defer></script>
					<div class="hs-form-frame" data-region="na1" data-form-id="df02de9f-5fd6-47e6-adfc-45fda24d037e"
					     data-portal-id="49227407"></div>
				<?php
				endif;
				?>
			</div>
		</div>
	</div>
</section>
