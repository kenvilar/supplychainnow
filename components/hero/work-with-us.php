<?php

$pageID      = get_the_ID();
$page_title  = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Work With Us' );
$description = get_field( 'Description',
  $pageID ) ?: "<strong>Reach 1M+ Supply Chain Professionals</strong> actively engaging with Supply Chain Now and generate qualified new leads for your business.";
$hero_image  = esc_url( get_field( 'Hero_Image',
  $pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--work-with-us.avif' );
$hide_icon   = get_field( 'Hide_Icon', $pageID ) ?: false;
?>
<section class="section bg-cargogrey text-white rounded-b-100">
  <div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
    <div class="w-layout-blockcontainer pt-20 w-container text-center max-w-960">
      <div class="mb-28">
        <h1><?= $page_title; ?></h1>
      </div>
      <div class="mb-36">
        <div slider-1="" class="splide">
          <div class="splide__track">
            <ul class="splide__list">
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="28" viewBox="0 0 27 28" fill="none">
                      <path
                        d="M21.4522 22.7262H21.3927C19.6125 20.9406 17.4973 19.524 15.1684 18.5577C12.8395 17.5914 10.3427 17.0944 7.82129 17.0952V7.95241C10.342 7.95546 12.8384 7.46064 15.1674 6.49638C17.4963 5.53211 19.6119 4.11737 21.3927 2.33337H21.4522V22.7262Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M21.4524 0V24.9999" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M21.4524 9.09521L26 10.2262V14.7738L21.4524 15.9166V9.09521Z" stroke="#FFAB56"
                            stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M5.54767 7.95239H7.82147V17.0476H5.54767C4.94846 17.0476 4.35516 16.9292 3.80186 16.6992C3.24856 16.4692 2.74618 16.132 2.32358 15.7072C1.90098 15.2824 1.5665 14.7783 1.33937 14.2238C1.11224 13.6693 0.996925 13.0754 1.00006 12.4762C1.00636 11.2742 1.48825 10.1236 2.34041 9.27593C3.19258 8.42823 4.34568 7.95238 5.54767 7.95239Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M8.95239 17.0476L10.5476 23.4047C10.6268 23.7299 10.6312 24.0687 10.5606 24.3958C10.49 24.7229 10.3462 25.0297 10.14 25.2932C9.93372 25.5568 9.67045 25.7701 9.36991 25.9173C9.06937 26.0644 8.7394 26.1415 8.40477 26.1428C7.91169 26.1416 7.43313 25.9758 7.04496 25.6717C6.65679 25.3676 6.38122 24.9427 6.26192 24.4643L4.40479 17.0476"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Brand Awareness</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" viewBox="0 0 23 30" fill="none">
                      <path
                        d="M11.1785 8.65601L12.1777 10.7477L14.4293 11.0808L12.8039 12.7062L13.1903 15.011L11.1785 13.9319L9.16677 15.011L9.55313 12.7062L7.92773 11.0808L10.1793 10.7477L11.1785 8.65601Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M21.3574 11.2006C21.3611 9.50077 20.939 7.82712 20.1296 6.33235C19.3203 4.83758 18.1495 3.56929 16.7241 2.64323C15.2987 1.71717 13.6641 1.16281 11.9695 1.03076C10.2748 0.898713 8.57403 1.19317 7.0224 1.88726C5.47076 2.58135 4.11765 3.65297 3.08655 5.00433C2.05545 6.35569 1.3792 7.94376 1.1195 9.62361C0.859801 11.3035 1.02493 13.0216 1.59982 14.6212C2.17471 16.2209 3.14104 17.6511 4.41065 18.7813C4.93891 19.2572 5.36131 19.8387 5.65049 20.4882C5.93967 21.1377 6.08918 21.8407 6.08934 22.5517V26.4553C6.08934 27.1302 6.35744 27.7775 6.83465 28.2547C7.31187 28.7319 7.95912 29 8.63402 29H13.7234C14.3983 29 15.0455 28.7319 15.5227 28.2547C16 27.7775 16.2681 27.1302 16.2681 26.4553V22.5517C16.2642 21.8433 16.4107 21.1422 16.6977 20.4945C16.9848 19.8469 17.406 19.2675 17.9334 18.7946C19.0088 17.843 19.87 16.674 20.4602 15.365C21.0504 14.0559 21.3562 12.6365 21.3574 11.2006Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M6.08911 22.645H16.2678" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Thought Leadership</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path
                        d="M25.7625 8.19999L8.87499 25.1125L2 26.0125L2.9 19.1375L19.8125 2.25C20.2006 1.85468 20.6636 1.54056 21.1743 1.32595C21.6851 1.11135 22.2335 1.00054 22.7875 1C23.3417 0.999998 23.8905 1.10937 24.4024 1.32185C24.9143 1.53433 25.3793 1.84574 25.7706 2.23823C26.1619 2.63072 26.472 3.09658 26.6829 3.6091C26.8939 4.12163 27.0016 4.67075 27 5.225C27.0011 5.77813 26.8922 6.32597 26.6798 6.83669C26.4674 7.3474 26.1555 7.81081 25.7625 8.19999Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M17.4749 4.58728L23.4248 10.5373" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path
                        d="M8.87499 25.0999L2 26.0124L2.9 19.1375C4.32177 19.5146 5.61661 20.2656 6.65 21.3124C7.72081 22.3503 8.48982 23.6593 8.87499 25.0999Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M20.4499 7.5625L6.69995 21.3125" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Content Creation</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="21" viewBox="0 0 31 21" fill="none">
                      <path d="M30 1L16.8232 14.1906L11.5442 8.9116L1 19.4558" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Social Traffic</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="27" viewBox="0 0 28 27" fill="none">
                      <path
                        d="M22.3374 9.05096L22.282 18.1165C22.2765 19.0166 21.9137 19.8776 21.2734 20.5102C20.6331 21.1427 19.7677 21.495 18.8677 21.4895L16.6013 21.4756L16.5805 24.8693L9.80207 21.4341L5.26928 21.4065C4.82362 21.4037 4.38286 21.3133 3.97216 21.1402C3.56147 20.9671 3.18888 20.7149 2.87567 20.3978C2.24312 19.7575 1.89085 18.8921 1.89634 17.9921L1.95169 8.9265C1.95719 8.02644 2.32 7.16543 2.96032 6.53289C3.60064 5.90034 4.46602 5.54806 5.36607 5.55356L18.9644 5.63658C19.8645 5.64208 20.7255 6.00489 21.3581 6.64521C21.9906 7.28553 22.3429 8.15091 22.3374 9.05096Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M22.2891 16.9773L23.4757 16.9845C24.3635 16.9775 25.2132 16.623 25.8425 15.9968C26.4719 15.3706 26.8309 14.5228 26.8424 13.635L26.8979 4.54571C26.9034 3.64566 26.5512 2.78028 25.9186 2.13996C25.2861 1.49964 24.425 1.13683 23.525 1.13133L9.92662 1.04831C9.02656 1.04281 8.16119 1.39509 7.52087 2.02764C6.88055 2.66019 6.51773 3.52119 6.51224 4.42125L6.50499 5.60784"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Genuine Engagement</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                      <path
                        d="M13.5 26C20.4036 26 26 20.4036 26 13.5C26 6.59644 20.4036 1 13.5 1C6.59644 1 1 6.59644 1 13.5C1 20.4036 6.59644 26 13.5 26Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M8 13.5714L11.9683 17.1429L19.9048 10" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">3rd Party Validation</div>
                </div>
              </li>
              <li class="splide__slide">
                <div class="flex items-center gap-20 justify-center xs:flex-col">
                  <div class="flex w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                      <path
                        d="M11.6352 22.2704C17.5089 22.2704 22.2704 17.5089 22.2704 11.6352C22.2704 5.76155 17.5089 1 11.6352 1C5.76155 1 1 5.76155 1 11.6352C1 17.5089 5.76155 22.2704 11.6352 22.2704Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M26.9999 27L19.3237 19.3239" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path
                        d="M8.09424 17.5409C8.09424 16.6018 8.4673 15.7011 9.13136 15.037C9.79541 14.373 10.6961 13.9999 11.6352 13.9999C12.1054 13.9917 12.5725 14.0772 13.0093 14.2515C13.446 14.4258 13.8437 14.6853 14.1791 15.0149C14.5145 15.3445 14.7809 15.7377 14.9627 16.1714C15.1445 16.6051 15.2381 17.0706 15.238 17.5409"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M11.635 11.6353C12.941 11.6353 13.9998 10.5765 13.9998 9.27052C13.9998 7.9645 12.941 6.90576 11.635 6.90576C10.329 6.90576 9.27026 7.9645 9.27026 9.27052C9.27026 10.5765 10.329 11.6353 11.635 11.6353Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                  <div class="font-family-alternate text-xl tracking-[2.4px] xs:text-md">Lead Generation</div>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="display-none w-embed w-script">
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              function slider1() {
                let splideTarget = "[slider-1]";
                let splideTargetEl = document.querySelector(`${splideTarget}`);
                if (!splideTargetEl) return;
                var options = {
                  /*suggested options*/
                  type: "loop", //'fade', //"slide", //"loop",
                  direction: "ttb",
                  height: 30,
                  autoHeight: true,
                  arrows: false,
                  pagination: false,
                  /*custom options*/
                  rewind: true,
                  autoplay: true,
                  //fixedWidth: 'auto',
                  perMove: 1,
                  perPage: 1,
                  gap: 21,
                  // autoplay: true,
                  pauseOnHover: false,
                  updateOnMove: true,
                  interval: 2000,
                  speed: 2000,
                  /*autoScroll: {
                    speed: 1,
                  },*/
                  intersection: {
                    inView: {
                      autoplay: true
                    },
                    outView: {
                      autoplay: false
                    }
                  },
                  breakpoints: {
                    479: {
                      height: 80
                    }
                  }
                };
                var splide = new Splide(`${splideTarget}`, options);
                splide.mount(); //splide.mount(window.splide.Extensions);
              }

              setTimeout(function() {
                slider1();
              }, 500);
            });
          </script>
        </div>
      </div>
      <div class="mb-28">
        <div class="w-layout-blockcontainer max-w-672 w-container">
          <p>
            <?= $description; ?>
          </p>
        </div>
      </div>
      <div class="flex justify-center">
        <?php
        echo get_template_part( 'components/ui/btn', null, [
          'text'  => 'Get Started',
          'link'  => '/contact',
          'style' => 'primary',
          'class' => '',
          /*'attributes' => [
            'target' => '_blank',
            'rel'    => 'noopener noreferrer',
          ],*/
        ] );
        ?>
      </div>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full">
    <img
      src="<?= $hero_image; ?>"
      loading="lazy" alt="hero-work with us" class="image opacity-10">
  </div>
</section>
