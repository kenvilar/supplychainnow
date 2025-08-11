<?php
/*
 * Template Name: Contact v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
	  <?php
	  get_template_part('components/hero/contact');
	  ?>
		<section class="section">
			<div class="site-padding sm:py-60 py-84">
				<div class="w-layout-blockcontainer max-w-1252 w-container">
					<div class="w-embed w-script">
						<script src="https://js.hsforms.net/forms/embed/49227407.js" defer></script>
						<div class="hs-form-frame" data-region="na1" data-form-id="f4a3b3e0-7d0c-4a13-a9f5-4e952150321d"
						     data-portal-id="49227407"></div>
					</div>
				</div>
			</div>
		</section>
	  <?php
	  get_template_part('components/section/home/work-with-us');
	  ?>
	</div>
</div>
<?php
get_footer(); ?>
