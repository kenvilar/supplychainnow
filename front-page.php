<?php

/* Homepage */
get_header();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<?php
			get_template_part('components/hero/home'); ?>
			<?php
			get_template_part('components/section/home/featured-content'); ?>
			<?php
			get_template_part('components/section/home/connect-your-brand-with-an-active-global-audience'); ?>
			<?php
			get_template_part('components/section/home/latest-podcast-episodes'); ?>
			<?php
			get_template_part('components/section/home/content-that-converts-to-sales-leads'); ?>
			<?php
			get_template_part('components/section/home/upcoming-livestreams-and-webinars'); ?>
			<?php
			get_template_part('components/section/home/network-partners'); ?>
			<?php
			get_template_part('components/section/home/what-the-supply-chain-community-has-to-say'); ?>
		</div>
	</div>
<?php
get_footer(); ?>