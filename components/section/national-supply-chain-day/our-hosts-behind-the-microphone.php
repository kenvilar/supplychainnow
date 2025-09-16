<?php

$pageID     = get_the_ID();
$section    = get_field( 'Celebrating_the_Backbone_of_the_Industry_Section', $pageID );
$title      = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Celebrating the Backbone of the Industry' );
$buttonText = esc_html( ! empty( $section['Button_Text'] ) ? $section['Button_Text'] : 'Learn More' );
$buttonLink = esc_url( ! empty( $section['Button_Link'] ) ? $section['Button_Link'] : 'https://linktr.ee/Supplychainnow?fbclid=PAZXh0bgNhZW0CMTEAAaeUwT0HgleEdMIgdSFAMNFw5XHXweqOR0cBt5kQKeNX1PVUZDW1gomBKleWzw_aem_sF5GDmuaeT-qg4pzKobvwA' );
?>
<section class="section sm:text-center">
  <div class="site-padding sm:py-60 py-92">
    <div class="w-layout-blockcontainer max-w-708 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <div class="w-layout-blockcontainer max-w-136 w-full h-1 relative bg-cargogrey/25 w-container">
          <div class="absolute absolute--r flex items-center pr-32">
            <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
          </div>
        </div>
      </div>
      <div class="mb-48">
        <div class="w-layout-blockcontainer max-w-644 w-container tracking-[1.6px]">
          <?php
          if ( $section['Description'] ):
            echo $section['Description'];
          else:
            ?>
            <p>National Supply Chain Day®, is a celebration and a spotlight on the industry
              professionals of Supply Chain: the people that connect the world. From the intricate logistics that
              power your morning coffee to the complex networks ensuring critical medical supplies reach their
              destinations, supply chain professionals are the backbone of our connected world.
              <br>
              <br>
              <strong>Join us every year on April 29th as we delve into the stories, breakthroughs and technologies of
                the global supply chain.
              </strong>
            </p>
          <?php
          endif;
          ?>
        </div>
      </div>
      <div class="w-layout-blockcontainer max-w-424 sm:max-w-full w-container">
        <div class="flex items-center flex-wrap justify-center gap-20 sm:flex-col">
          <div class="flex">
            <a
              href="<?= $buttonLink; ?>"
              target="_blank" class="btn primary w-inline-block">
              <div><?= $buttonText; ?></div>
            </a>
          </div>
          <div class="flex items-center gap-16 xs:flex-col flex-child-static">
            <div class="text-sm font-semibold">FOLLOW US</div>
            <div class="flex items-center gap-12">
              <a href="https://www.facebook.com/SupplyChainNow" class="w-inline-block" target="_blank"
                 rel="noopener noreferrer">
                <div class="flex items-center text-secondary hover:text-primary w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 11.8644C0 5.31188 5.31188 0 11.8644 0C18.4169 0 23.7288 5.31188 23.7288 11.8644C23.7288 18.4169 18.4169 23.7288 11.8644 23.7288C5.31188 23.7288 0 18.4169 0 11.8644ZM11.8644 5.9322C15.1271 5.9322 17.7966 8.6017 17.7966 11.8644C17.7966 14.8305 15.6462 17.3517 12.6801 17.7966V13.5699H14.089L14.3856 11.8644H12.7542V10.7521C12.7542 10.3072 12.9767 9.86229 13.7182 9.86229H14.4597V8.37924C14.4597 8.37924 13.7924 8.23093 13.125 8.23093C11.7903 8.23093 10.9004 9.04661 10.9004 10.5297V11.8644H9.41737V13.5699H10.9004V17.7225C8.08263 17.2775 5.9322 14.8305 5.9322 11.8644C5.9322 8.6017 8.6017 5.9322 11.8644 5.9322Z"
                          fill="currentColor"></path>
                  </svg>
                </div>
              </a>
              <a href="https://www.instagram.com/supplychainnow/" class="w-inline-block" target="_blank"
                 rel="noopener noreferrer">
                <div class="flex items-center text-secondary hover:text-primary w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path
                      d="M12.5932 13.9407C11.4809 13.9407 10.5169 13.0508 10.5169 11.8644C10.5169 10.7521 11.4067 9.78813 12.5932 9.78813C13.7055 9.78813 14.6694 10.678 14.6694 11.8644C14.6694 12.9767 13.7055 13.9407 12.5932 13.9407Z"
                      fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M15.1144 6.82203H10.072C9.47876 6.89618 9.18215 6.97034 8.95969 7.04449C8.66308 7.11864 8.44062 7.26695 8.21817 7.4894C8.04214 7.66543 7.95897 7.84146 7.85844 8.05423C7.83195 8.1103 7.80418 8.16908 7.77325 8.23093C7.76178 8.26534 7.74853 8.30153 7.73434 8.34032C7.65676 8.55226 7.55079 8.84177 7.55079 9.34322V14.3856C7.62495 14.9788 7.6991 15.2754 7.77325 15.4979C7.8474 15.7945 7.99571 16.0169 8.21817 16.2394C8.3942 16.4154 8.57022 16.4986 8.78299 16.5991C8.83911 16.6256 8.89779 16.6534 8.95969 16.6843C8.99411 16.6958 9.03029 16.709 9.06908 16.7232C9.28102 16.8008 9.57053 16.9068 10.072 16.9068H15.1144C15.7076 16.8326 16.0042 16.7585 16.2266 16.6843C16.5233 16.6102 16.7457 16.4619 16.9682 16.2394C17.1442 16.0634 17.2274 15.8874 17.3279 15.6746C17.3544 15.6185 17.3821 15.5598 17.4131 15.4979C17.4246 15.4635 17.4378 15.4273 17.452 15.3885C17.5296 15.1766 17.6355 14.887 17.6355 14.3856V9.34322C17.5614 8.75 17.4872 8.45339 17.4131 8.23093C17.3389 7.93432 17.1906 7.71186 16.9682 7.4894C16.7921 7.31338 16.6161 7.23021 16.4033 7.12968C16.3473 7.10321 16.2884 7.07539 16.2266 7.04449C16.1922 7.03302 16.156 7.01977 16.1173 7.00558C15.9053 6.928 15.6158 6.82203 15.1144 6.82203ZM12.5932 8.67585C10.8135 8.67585 9.40461 10.0847 9.40461 11.8644C9.40461 13.6441 10.8135 15.053 12.5932 15.053C14.3728 15.053 15.7817 13.6441 15.7817 11.8644C15.7817 10.0847 14.3728 8.67585 12.5932 8.67585ZM16.5974 8.60169C16.5974 9.01123 16.2654 9.34322 15.8559 9.34322C15.4463 9.34322 15.1144 9.01123 15.1144 8.60169C15.1144 8.19216 15.4463 7.86017 15.8559 7.86017C16.2654 7.86017 16.5974 8.19216 16.5974 8.60169Z"
                          fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.72876 11.8644C0.72876 5.31188 6.04064 0 12.5932 0C19.1457 0 24.4576 5.31188 24.4576 11.8644C24.4576 18.4169 19.1457 23.7288 12.5932 23.7288C6.04064 23.7288 0.72876 18.4169 0.72876 11.8644ZM10.072 5.70974H15.1144C15.7817 5.7839 16.2266 5.85805 16.5974 6.00635C17.0423 6.22881 17.3389 6.37712 17.7097 6.74788C18.0805 7.11864 18.3029 7.4894 18.4512 7.86017C18.5995 8.23093 18.7478 8.67585 18.7478 9.34322V14.3856C18.6737 15.053 18.5995 15.4979 18.4512 15.8686C18.2288 16.3136 18.0805 16.6102 17.7097 16.9809C17.3389 17.3517 16.9682 17.5742 16.5974 17.7225C16.2266 17.8708 15.7817 18.0191 15.1144 18.0191H10.072C9.40461 17.9449 8.95969 17.8708 8.58893 17.7225C8.14401 17.5 7.8474 17.3517 7.47664 16.9809C7.10588 16.6102 6.88342 16.2394 6.73512 15.8686C6.58681 15.4979 6.43851 15.053 6.43851 14.3856V9.34322C6.51266 8.67585 6.58681 8.23093 6.73512 7.86017C6.95757 7.41525 7.10588 7.11864 7.47664 6.74788C7.8474 6.37712 8.21817 6.15466 8.58893 6.00635C8.95969 5.85805 9.40461 5.70974 10.072 5.70974Z"
                          fill="currentColor"></path>
                  </svg>
                </div>
              </a>
              <a href="https://www.linkedin.com/company/supply-chain-now/" class="w-inline-block" target="_blank"
                 rel="noopener noreferrer">
                <div class="flex items-center text-secondary hover:text-primary w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.45752 11.8644C0.45752 5.31188 5.7694 0 12.3219 0C18.8745 0 24.1863 5.31188 24.1863 11.8644C24.1863 18.4169 18.8745 23.7288 12.3219 23.7288C5.7694 23.7288 0.45752 18.4169 0.45752 11.8644ZM6.53803 9.86229V17.7966H9.05922V9.86229H6.53803ZM6.38972 7.3411C6.38972 8.15678 6.98295 8.75 7.79862 8.75C8.6143 8.75 9.20752 8.15678 9.20752 7.3411C9.20752 6.52543 8.6143 5.9322 7.79862 5.9322C7.0571 5.9322 6.38972 6.52543 6.38972 7.3411ZM15.7329 17.7966H18.1058V12.9025C18.1058 10.4555 16.6228 9.63983 15.2139 9.63983C13.9533 9.63983 13.0635 10.4555 12.841 10.9746V9.86229H10.4681V17.7966H12.9893V13.5699C12.9893 12.4576 13.7308 11.8644 14.4723 11.8644C15.2139 11.8644 15.7329 12.2352 15.7329 13.4958V17.7966Z"
                          fill="currentColor"></path>
                  </svg>
                </div>
              </a>
              <a href="https://x.com/_supplychainnow" class="w-inline-block" target="_blank" rel="noopener noreferrer">
                <div class="flex items-center text-secondary hover:text-primary w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path d="M14.9424 17.0607H16.5501L9.14998 6.7032H7.54231L14.9424 17.0607Z"
                          fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M12.0507 23.7288C5.49816 23.7288 0.186279 18.4169 0.186279 11.8644C0.186279 5.31188 5.49816 0 12.0507 0C18.6032 0 23.9151 5.31188 23.9151 11.8644C23.9151 18.4169 18.6032 23.7288 12.0507 23.7288ZM17.5962 5.9322L13.1792 10.956L17.9829 17.7966H14.45L11.2151 13.1901L7.16519 17.7966H6.11848L10.7505 12.5284L6.11848 5.9322H9.65139L12.7145 10.2943L16.5496 5.9322H17.5962Z"
                          fill="currentColor"></path>
                  </svg>
                </div>
              </a>
              <a href="https://www.youtube.com/channel/UCuqKDp8uxinIM8ORIOLr0qw" class="w-inline-block" target="_blank"
                 rel="noopener noreferrer">
                <div class="flex items-center text-secondary hover:text-primary w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                    <path d="M14.7074 11.8644L11.593 10.0847V13.6441L14.7074 11.8644Z" fill="currentColor"></path>
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0.915039 11.8644C0.915039 5.31188 6.22692 0 12.7794 0C19.332 0 24.6439 5.31188 24.6439 11.8644C24.6439 18.4169 19.332 23.7288 12.7794 23.7288C6.22692 23.7288 0.915039 18.4169 0.915039 11.8644ZM17.3769 7.93432C17.896 8.08263 18.2667 8.45339 18.415 8.97246C18.7117 9.93644 18.7116 11.8644 18.7116 11.8644C18.7116 11.8644 18.7117 13.7924 18.4892 14.7564C18.3409 15.2754 17.9701 15.6462 17.451 15.7945C16.4871 16.0169 12.7794 16.017 12.7794 16.017C12.7794 16.017 8.99766 16.0169 8.10783 15.7945C7.58877 15.6462 7.21801 15.2754 7.0697 14.7564C6.84724 13.7924 6.84724 11.8644 6.84724 11.8644C6.84724 11.8644 6.84724 9.93644 6.99555 8.97246C7.14385 8.45339 7.51462 8.08263 8.03369 7.93432C8.99767 7.71187 12.7053 7.71187 12.7053 7.71187C12.7053 7.71187 16.4871 7.71187 17.3769 7.93432Z"
                          fill="currentColor"></path>
                  </svg>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
