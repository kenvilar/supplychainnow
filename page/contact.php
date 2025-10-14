<?php
/* Deprecated: Former "Contact v2" page template.
 * The "Template Name" header has been removed to hide it from Page Attributes.
 */

set_query_var( 'header_args', [
  'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
] );
get_header();
$pageId     = get_the_ID();
$embed_code = get_field( 'Embed_Code', $pageId ) ?: '';
?>
<div class="page-wrapper">
  <div class="main-wrapper">
    <?php
    get_template_part( 'components/hero/contact' );
    ?>
    <section class="section">
      <div class="site-padding sm:py-60 py-84">
        <div class="w-layout-blockcontainer max-w-1252 w-container">
          <div class="w-embed w-script">
            <?php
            if ( ! empty( $embed_code ) ):
              echo $embed_code;
            else:
              ?>
              <script src="https://js.hsforms.net/forms/embed/49227407.js" defer></script>
              <div class="hs-form-frame" data-region="na1" data-form-id="f4a3b3e0-7d0c-4a13-a9f5-4e952150321d"
                   data-portal-id="49227407"></div>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
    </section>
    <?php
    get_template_part( 'components/layout/footer/cta-footer' );
    ?>
  </div>
</div>
<dialog data-lenis-prevent="" class="my-modal">
  <div class="relative">
    <div class="h-full flex justify-center pt-68 pb-80 px-20">
      <div class="w-layout-blockcontainer max-w-796 w-full md:max-w-full w-container">
        <script src="https://js.hsforms.net/forms/embed/49227407.js" defer></script>
        <div class="hs-form-frame" data-region="na1" data-form-id="02f86d9b-b867-4a83-ac58-7ff35ed8dba6"
             data-portal-id="49227407"></div>
      </div>
    </div>
    <div close-modal="" class="flex absolute absolute--tr p-12 mt-36 mr-36 cursor-pointer w-embed">
      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
        <path d="M1 1L12.73 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
        <path d="M12.73 1L1 12.73" stroke="#313F4A" stroke-width="2" stroke-miterlimit="10"></path>
      </svg>
    </div>
  </div>
</dialog>
<div class="display-none w-embed w-script">
  <script>
    document.addEventListener("DOMContentLoaded", (event) => {
      function myModalFunc() {
        const myModal = document.querySelector(".my-modal");
        const closeModal = document.querySelector("[close-modal]");
        let openModal = document.querySelector("[open-modal]");

        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.get("register-for-the-2026-event") === "true") {
          setTimeout(function() {
            myModal.showModal();
          }, 200);
        }

        if (openModal) {
          openModal.addEventListener("click", function(e) {
            e.preventDefault();
            // open the modal
            setTimeout(function() {
              myModal.showModal();
            }, 200);
          });
        }
        if (closeModal) {
          closeModal.addEventListener("click", function() {
            // close the modal
            myModal.close();
          });
          myModal.addEventListener("close", () => {
            myModal.close();
          });
          myModal.addEventListener("click", (e) => {
            if (e.target === myModal) {
              myModal.close();
            }
          });
        }
      }

      myModalFunc();
    });
  </script>
</div>
<?php
get_footer(); ?>
