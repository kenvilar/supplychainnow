<?php

$pageID  = get_the_ID();
$section = get_field( 'Awards_&_Recognitions_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Awards &amp; Recognitions' );
?>
<section class="section sm:py-60 py-64">
	<div class="site-padding">
		<div class="w-layout-blockcontainer max-w-1388 w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center"><?= $title; ?></h2>
				</div>
				<?php
				get_template_part( 'components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				] );
				?>
			</div>
		</div>
	</div>
	<?php
	echo do_shortcode( '[about_awards_and_recognitions]' );
	?>
</section>
