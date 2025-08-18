<?php
/*
 * Template Name: Work With Us v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/work-with-us');
		get_template_part('components/section/work-with-us/decision-makers-prefer-interactive-video');
		get_template_part('components/section/work-with-us/trusted-by-the-supply-chain-community');
		get_template_part('components/section/work-with-us/roadmap-to-content-that-converts-to-leads');
		get_template_part('components/section/work-with-us/results-that-keep-building');
		get_template_part('components/section/work-with-us/let-our-experts-build-a-custom-campaign');
		get_template_part('components/section/work-with-us/book-a-free-strategy-session');
		get_template_part('components/section/work-with-us/voice-of-supply-chain');
		get_template_part('components/section/work-with-us/our-clients-recent-successes');
		get_template_part('components/section/work-with-us/the-power-of-supply-chain-podcasts');
		get_template_part('components/layout/footer/cta-footer-3');
		?>
	</div>
</div>
<div class="display-none w-embed w-script">
	<script>
		document.addEventListener("DOMContentLoaded", (event) => {
			const accordionItemHeaders = document.querySelectorAll(
				".accordion-item-header"
			);
			accordionItemHeaders.forEach((accordionItemHeader) => {
				accordionItemHeader.addEventListener("click", (event) => {
					// Uncomment in case you only want to allow for the display of only one collapsed item at a time!
					const currentlyActiveAccordionItemHeader = document.querySelector(".accordion-item-header.active");
					if (currentlyActiveAccordionItemHeader && currentlyActiveAccordionItemHeader !== accordionItemHeader) {
						currentlyActiveAccordionItemHeader.classList.toggle("active");
						currentlyActiveAccordionItemHeader.nextElementSibling.style.maxHeight = 0;
					}
					accordionItemHeader.classList.toggle("active");
					const accordionItemBody = accordionItemHeader.nextElementSibling;
					if (accordionItemHeader.classList.contains("active")) {
						accordionItemBody.style.maxHeight =
							accordionItemBody.scrollHeight + "px";
					} else {
						accordionItemBody.style.maxHeight = 0;
					}
				});
			});
		});
	</script>
</div>
<?php
get_footer(); ?>
