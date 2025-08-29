<?php
/*
 * Template Name: Upcoming Live Programming v2
 */

set_query_var( 'header_args', [
  'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
] );
get_header();
$pageId = get_the_ID();
?>
  <style>
		html {
			scroll-behavior: smooth;
		}
  </style>
  <div class="page-wrapper">
    <div class="main-wrapper">
      <?php
      get_template_part( 'components/hero/upcoming-live-programming' );
      //get_template_part('components/section/upcoming-live-programming/featured-upcoming-programming');
      get_template_part( 'components/ui/searchbar', null, [
        'site_padding' => 'pt-60 pb-52',
        'taxonomy'     => 'tags',
      ] );

      scn_render_if_no_filters( 'components/section/upcoming-live-programming/upcoming-livestreams' );

      get_template_part( 'components/ui/search_results' );
      get_template_part( 'components/layout/footer/cta-footer-2' );
      ?>
    </div>
  </div>
  <dialog data-lenis-prevent="" class="my-modal">
    <div class="relative">
      <div class="h-full flex justify-center pt-68 pb-80 px-20">
        <div class="w-layout-blockcontainer max-w-796 w-full md:max-w-full w-container">
          <script src="https://js.hsforms.net/forms/embed/49227407.js" defer></script>
          <div class="hs-form-frame" data-region="na1" data-form-id="d724459f-7eb6-4028-aeff-576f78a92fdc" data-portal-id="49227407"></div>
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
          
          // Open modal after page load
          setTimeout(function() {
            myModal.showModal();
          }, 1000);
          
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