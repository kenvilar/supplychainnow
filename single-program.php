<?php

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/single-program');
		get_template_part('components/section/single-program/featured-episodes');
		get_template_part('components/section/single-program/suggested-podcasts');
		get_template_part('components/layout/footer/cta-footer-2');
		?>
	</div>
</div>
<?php
get_footer(); ?>
