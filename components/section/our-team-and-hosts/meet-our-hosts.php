<?php

$postID = get_the_ID();
?>
<section class="section">
	<div class="site-padding sm:py-60 py-88">
		<div class="w-layout-blockcontainer max-w-1252 sm:text-center w-container">
			<div class="mb-44">
				<div class="mb-20">
					<h2 class="text-center">Meet Our Hosts</h2>
				</div>
				<?php
				get_template_part( 'components/line-with-blinking-dot', null, [
					'maxWidthClassnames' => ''
				] );
				?>
			</div>
      <?php
      echo do_shortcode( '[our_team_and_hosts_meet_our_hosts]' );
      ?>
		</div>
	</div>
</section>
