<?php

/* Homepage */
get_header();
?>
	<div class="page-wrapper">
		<div class="main-wrapper">
			<?php
			get_template_part('components/hero/home');
			get_template_part('components/section/home/featured-content');
			get_template_part('components/section/home/connect-your-brand-with-an-active-global-audience');
			get_template_part('components/section/home/latest-podcast-episodes');
			get_template_part('components/section/home/content-that-converts-to-sales-leads');
			get_template_part('components/section/home/upcoming-livestreams-and-webinars');
			get_template_part('components/section/home/network-partners');
			get_template_part('components/section/home/what-the-supply-chain-community-has-to-say');
			get_template_part('components/section/home/work-with-us');
			?>
		</div>
	</div>
<?php
get_footer(); ?>