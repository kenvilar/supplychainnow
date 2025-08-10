<?php
/* Homepage */
get_header();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<?php get_template_part('components/hero/home'); ?>
			<?php get_template_part('components/section/home/featured-content'); ?>
			<?php get_template_part('components/section/home/connect-your-brand-with-an-active-global-audience'); ?>
		</div>
	</div>
<?php
get_footer(); ?>