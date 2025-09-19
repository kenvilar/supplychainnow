<?php

$maxWidthClassnames = $args['maxWidthClassnames'] ?? '';
?>
<div class="max-w-136 w-full h-1 relative bg-cargogrey/25 mx-auto <?= esc_attr( $maxWidthClassnames ); ?>">
	<div class="absolute absolute--r flex items-center pr-32">
		<div blinking-dot class="size-8 rounded-8 bg-primary"></div>
	</div>
</div>
