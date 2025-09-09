<?php

$pageID           = get_the_ID();
$section          = get_field( 'Footer_CTA_Section', $pageID );
$title            = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Follow Supply Chain Now for the latest updates, insights, and news.' );
$background_image = esc_url( ! empty( $section['Background_Image'] ) ? $section['Background_Image'] : get_stylesheet_directory_uri() . '/assets/img/footer/bg-footer-cta-media-kit.avif' );
?>
<section class="section rounded-t-100 overflow-hidden text-white select-none">
  <div class="site-padding sm:py-60 py-164">
    <div class="w-layout-blockcontainer max-w-816 text-center w-container">
      <div class="mb-44">
        <h2 class="text-45"><?= $title; ?></h2>
      </div>
      <ul role="list" class="flex items-center justify-center gap-16 m-0 w-list-unstyled">
        <li class="flex">
          <a href="https://www.facebook.com/SupplyChainNow" target="_blank" rel="noopener noreferrer"
             class="text-white hover:text-primary w-inline-block">
            <div class="flex items-center justify-center w-embed">
              <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0 18C0 8.05888 8.05888 0 18 0C27.9411 0 36 8.05888 36 18C36 27.9411 27.9411 36 18 36C8.05888 36 0 27.9411 0 18ZM18 9C22.95 9 27 13.05 27 18C27 22.5 23.7375 26.325 19.2375 27V20.5875H21.375L21.825 18H19.35V16.3125C19.35 15.6375 19.6875 14.9625 20.8125 14.9625H21.9375V12.7125C21.9375 12.7125 20.925 12.4875 19.9125 12.4875C17.8875 12.4875 16.5375 13.725 16.5375 15.975V18H14.2875V20.5875H16.5375V26.8875C12.2625 26.2125 9 22.5 9 18C9 13.05 13.05 9 18 9Z"
                      fill="currentColor"></path>
              </svg>
            </div>
          </a>
        </li>
        <li class="flex">
          <a href="https://www.instagram.com/supplychainnow/" target="_blank" rel="noopener noreferrer"
             class="text-white hover:text-primary w-inline-block">
            <div class="flex w-embed">
              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                <path
                  d="M18.206 21.15C16.5185 21.15 15.056 19.8 15.056 18C15.056 16.3125 16.406 14.85 18.206 14.85C19.8935 14.85 21.356 16.2 21.356 18C21.356 19.6875 19.8935 21.15 18.206 21.15Z"
                  fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M22.031 10.35H14.381C13.481 10.4625 13.031 10.575 12.6935 10.6875C12.2435 10.8 11.906 11.025 11.5685 11.3625C11.3014 11.6296 11.1753 11.8966 11.0227 12.2194C10.9825 12.3045 10.9404 12.3937 10.8935 12.4875C10.8761 12.5397 10.856 12.5946 10.8345 12.6535C10.7168 12.975 10.556 13.4142 10.556 14.175V21.825C10.6685 22.725 10.781 23.175 10.8935 23.5125C11.006 23.9625 11.231 24.3 11.5685 24.6375C11.8356 24.9046 12.1026 25.0307 12.4254 25.1833C12.5106 25.2235 12.5996 25.2655 12.6935 25.3125C12.7457 25.3299 12.8006 25.35 12.8595 25.3715C13.181 25.4892 13.6202 25.65 14.381 25.65H22.031C22.931 25.5375 23.381 25.425 23.7185 25.3125C24.1685 25.2 24.506 24.975 24.8435 24.6375C25.1106 24.3704 25.2367 24.1034 25.3892 23.7806C25.4295 23.6955 25.4715 23.6064 25.5185 23.5125C25.5359 23.4603 25.556 23.4054 25.5775 23.3465C25.6952 23.025 25.856 22.5858 25.856 21.825V14.175C25.7435 13.275 25.631 12.825 25.5185 12.4875C25.406 12.0375 25.181 11.7 24.8435 11.3625C24.5764 11.0954 24.3094 10.9693 23.9866 10.8167C23.9016 10.7766 23.8123 10.7344 23.7185 10.6875C23.6663 10.6701 23.6114 10.65 23.5525 10.6285C23.231 10.5108 22.7918 10.35 22.031 10.35ZM18.206 13.1625C15.506 13.1625 13.3685 15.3 13.3685 18C13.3685 20.7 15.506 22.8375 18.206 22.8375C20.906 22.8375 23.0435 20.7 23.0435 18C23.0435 15.3 20.906 13.1625 18.206 13.1625ZM24.281 13.05C24.281 13.6713 23.7773 14.175 23.156 14.175C22.5347 14.175 22.031 13.6713 22.031 13.05C22.031 12.4287 22.5347 11.925 23.156 11.925C23.7773 11.925 24.281 12.4287 24.281 13.05Z"
                      fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.205994 18C0.205994 8.05888 8.26487 0 18.206 0C28.1471 0 36.206 8.05888 36.206 18C36.206 27.9411 28.1471 36 18.206 36C8.26487 36 0.205994 27.9411 0.205994 18ZM14.381 8.6625H22.031C23.0435 8.775 23.7185 8.8875 24.281 9.1125C24.956 9.45 25.406 9.675 25.9685 10.2375C26.531 10.8 26.8685 11.3625 27.0935 11.925C27.3185 12.4875 27.5435 13.1625 27.5435 14.175V21.825C27.431 22.8375 27.3185 23.5125 27.0935 24.075C26.756 24.75 26.531 25.2 25.9685 25.7625C25.406 26.325 24.8435 26.6625 24.281 26.8875C23.7185 27.1125 23.0435 27.3375 22.031 27.3375H14.381C13.3685 27.225 12.6935 27.1125 12.131 26.8875C11.456 26.55 11.006 26.325 10.4435 25.7625C9.88099 25.2 9.54349 24.6375 9.31849 24.075C9.09349 23.5125 8.86849 22.8375 8.86849 21.825V14.175C8.98099 13.1625 9.09349 12.4875 9.31849 11.925C9.65599 11.25 9.88099 10.8 10.4435 10.2375C11.006 9.675 11.5685 9.3375 12.131 9.1125C12.6935 8.8875 13.3685 8.6625 14.381 8.6625Z"
                      fill="currentColor"></path>
              </svg>
            </div>
          </a>
        </li>
        <li class="flex">
          <a href="https://www.linkedin.com/company/supply-chain-now/" target="_blank" rel="noopener noreferrer"
             class="text-white hover:text-primary w-inline-block">
            <div class="flex items-center justify-center w-embed">
              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.411255 18C0.411255 8.05888 8.47013 0 18.4113 0C28.3524 0 36.4113 8.05888 36.4113 18C36.4113 27.9411 28.3524 36 18.4113 36C8.47013 36 0.411255 27.9411 0.411255 18ZM9.63625 14.9625V27H13.4613V14.9625H9.63625ZM9.41125 11.1375C9.41125 12.375 10.3113 13.275 11.5488 13.275C12.7863 13.275 13.6863 12.375 13.6863 11.1375C13.6863 9.9 12.7863 9 11.5488 9C10.4238 9 9.41125 9.9 9.41125 11.1375ZM23.5863 27H27.1863V19.575C27.1863 15.8625 24.9362 14.625 22.7987 14.625C20.8863 14.625 19.5363 15.8625 19.1988 16.65V14.9625H15.5988V27H19.4237V20.5875C19.4237 18.9 20.5487 18 21.6737 18C22.7987 18 23.5863 18.5625 23.5863 20.475V27Z"
                      fill="currentColor"></path>
              </svg>
            </div>
          </a>
        </li>
        <li class="flex">
          <a href="https://x.com/_supplychainnow" target="_blank" rel="noopener noreferrer"
             class="text-white hover:text-primary w-inline-block">
            <div class="flex items-center justify-center w-embed">
              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                <path d="M23.0045 25.8835H25.4435L14.2165 10.1697H11.7775L23.0045 25.8835Z"
                      fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M18.6173 36C8.67619 36 0.61731 27.9411 0.61731 18C0.61731 8.05888 8.67619 0 18.6173 0C28.5584 0 36.6173 8.05888 36.6173 18C36.6173 27.9411 28.5584 36 18.6173 36ZM27.0307 9L20.3294 16.6218L27.6173 27H22.2574L17.3497 20.0113L11.2053 27H9.61731L16.6447 19.0074L9.61731 9H14.9772L19.6244 15.6179L25.4428 9H27.0307Z"
                      fill="currentColor"></path>
              </svg>
            </div>
          </a>
        </li>
        <li class="flex">
          <a href="https://www.youtube.com/channel/UCuqKDp8uxinIM8ORIOLr0qw" target="_blank" rel="noopener noreferrer"
             class="text-white hover:text-primary w-inline-block">
            <div class="flex w-embed">
              <svg xmlns="http://www.w3.org/2000/svg" width="37" height="36" viewBox="0 0 37 36" fill="none">
                <path d="M21.7475 18L17.0225 15.3V20.7L21.7475 18Z" fill="currentColor"></path>
                <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M0.82251 18C0.82251 8.05888 8.88138 0 18.8225 0C28.7636 0 36.8225 8.05888 36.8225 18C36.8225 27.9411 28.7636 36 18.8225 36C8.88138 36 0.82251 27.9411 0.82251 18ZM25.7975 12.0375C26.585 12.2625 27.1475 12.825 27.3725 13.6125C27.8225 15.075 27.8225 18 27.8225 18C27.8225 18 27.8225 20.925 27.485 22.3875C27.26 23.175 26.6975 23.7375 25.91 23.9625C24.4475 24.3 18.8225 24.3 18.8225 24.3C18.8225 24.3 13.085 24.3 11.735 23.9625C10.9475 23.7375 10.385 23.175 10.16 22.3875C9.82251 20.925 9.82251 18 9.82251 18C9.82251 18 9.82251 15.075 10.0475 13.6125C10.2725 12.825 10.835 12.2625 11.6225 12.0375C13.085 11.7 18.71 11.7 18.71 11.7C18.71 11.7 24.4475 11.7 25.7975 12.0375Z"
                      fill="currentColor"></path>
              </svg>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <div class="absolute absolute--full w-full h-full gradient1 rotate-180 -z-2"></div>
  <div class="absolute absolute--full w-full h-full -z-1">
    <img
      loading="lazy"
      src="<?= $background_image; ?>"
      alt="bg-footer-cta-media-kit" class="image opacity-15">
  </div>
</section>
