<?php
/*
 * Template Name: Case Studies v2
 */

set_query_var( 'header_args', [
  'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
] );
get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
  <div class="main-wrapper">
    <?php
    get_template_part( 'components/hero/case-studies-customer-stories' );
    get_template_part( 'components/section/case-studies-customer-stories/case-study-1' );
    get_template_part( 'components/section/case-studies-customer-stories/quote-1' );
    get_template_part( 'components/section/case-studies-customer-stories/case-study-2' );
    get_template_part( 'components/section/case-studies-customer-stories/quote-2' );
    get_template_part( 'components/section/home/what-the-supply-chain-community-has-to-say' );
    get_template_part( 'components/layout/footer/cta-footer' );
    ?>
  </div>
</div>
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
<?php
get_footer(); ?>
