<?php
/* Homepage */
get_header();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<?php get_template_part('components/hero/home'); ?>
			<?php get_template_part('components/section/home-featured-content'); ?>
		</div>
	</div>
<?php
get_footer(); ?>