<?php

$postID           = get_the_ID();
$section          = get_field( 'Content_that_Converts_to_Sales_Leads_Section', $postID );
$title            = esc_html( ! empty ( $section['Title'] ) ? $section['Title'] : 'Content that Converts to Sales Leads' );
$description      = ! empty ( $section['Description'] ) ? $section['Description'] : 'In just one webinar with Supply Chain Now, one company received <em>394 total registrations</em>.';
$button1Text      = esc_html( ! empty ( $section['Button_1_Text'] ) ? $section['Button_1_Text'] : 'Read More Case Studies' );
$button1Link      = esc_html( ! empty ( $section['Button_1_Link'] ) ? $section['Button_1_Link'] : '/success-stories' );
$button2Text      = esc_html( ! empty ( $section['Button_2_Text'] ) ? $section['Button_2_Text'] : 'Explore Sponsorship' );
$button2Link      = esc_html( ! empty ( $section['Button_2_Link'] ) ? $section['Button_2_Link'] : '/media-kit' );
$card1Number      = esc_html( ! empty ( $section['Card_1_Number'] ) ? $section['Card_1_Number'] : '207' );
$card1Title       = esc_html( ! empty ( $section['Card_1_Title'] ) ? $section['Card_1_Title'] : 'People attended' );
$card1Description = esc_html( ! empty ( $section['Card_1_Description'] ) ? $section['Card_1_Description'] : 'for a 52% registration-to-attendee conversion rate.' );
$card2Number      = esc_html( ! empty ( $section['Card_2_Number'] ) ? $section['Card_2_Number'] : '191' );
$card2Title       = esc_html( ! empty ( $section['Card_2_Title'] ) ? $section['Card_2_Title'] : 'Attendees were net new qualified leads' );
$card2Description = esc_html( ! empty ( $section['Card_2_Description'] ) ? $section['Card_2_Description'] : 'and passed on to the sales team.' );
?>
<section class="section sm:text-center">
  <div class="site-padding pb-60 sm:py-60">
    <div class="w-layout-blockcontainer max-w-1252 w-container">
      <div class="flex gap-20 justify-between sm:flex-col items-center sm:gap-40">
        <div class="max-w-488 w-full md:max-w-full pt-120 sm:pt-0">
          <div class="mb-20">
            <h2><?= $title; ?></h2>
          </div>
          <div class="mb-40">
            <div class="font-family-alternate font-semibold! text-lg! text-secondary!">
              <?= $description; ?>
            </div>
          </div>
          <div class="flex items-center gap-12 sm:flex-col sm:items-stretch">
            <?php
            echo get_template_part( 'components/ui/btn', null, [
              'text'  => $button1Text,
              'link'  => $button1Link,
              'style' => 'primary',
              'class' => '',
              /*'attributes' => [
                'target' => '_blank',
                'rel'    => 'noopener noreferrer',
              ],*/
            ] );
            echo get_template_part( 'components/ui/btn', null, [
              'text'       => $button2Text,
              'link'       => $button2Link,
              'style'      => 'primary-outline',
              'class'      => '',
              'attributes' => [
                'target' => '_blank',
                'rel'    => 'noopener noreferrer',
              ],
            ] );
            ?>
          </div>
        </div>
        <div class="max-w-608 w-full md:max-w-full">
          <div class="flex items-end gap-28 sm:flex-col sm:gap-12">
            <div class="max-w-288 w-full md:max-w-full group transition-all hover:-translate-y-25">
              <div class="opacity-0 group-hover:opacity-100 transition-all">
                <div class="mb-20">
                  <div class="flex justify-center items-center w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="180" height="73" viewBox="0 0 180 73" fill="none">
                      <path
                        d="M88.071 35.8003C91.6057 35.8003 94.4712 32.9349 94.4712 29.4002C94.4712 25.8655 91.6057 23 88.071 23C84.5363 23 81.6708 25.8655 81.6708 29.4002C81.6708 32.9349 84.5363 35.8003 88.071 35.8003Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M76 49.9999L77.027 44.85C77.5328 42.2912 78.9097 39.9867 80.9232 38.3286C82.9368 36.6706 85.4627 35.7614 88.071 35.7559C90.6732 35.7661 93.1914 36.6779 95.1969 38.336C97.2025 39.9942 98.5713 42.2961 99.0704 44.85L100.112 49.9999"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M91.6284 34.7138C92.5916 35.3605 93.7125 35.7332 94.8712 35.7921C96.0299 35.8509 97.1828 35.5937 98.2067 35.048C99.2305 34.5022 100.087 33.6884 100.684 32.6936C101.281 31.6988 101.596 30.5604 101.596 29.4002C101.596 28.24 101.281 27.1016 100.684 26.1068C100.087 25.112 99.2305 24.2982 98.2067 23.7524C97.1828 23.2066 96.0299 22.9494 94.8712 23.0082C93.7125 23.0671 92.5916 23.4398 91.6284 24.0865"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M107.257 49.9999L106.215 44.8351C105.904 43.27 105.264 41.789 104.336 40.4906C103.408 39.1923 102.215 38.1064 100.835 37.3052C99.455 36.504 97.9202 36.0058 96.3328 35.8439C94.7454 35.682 93.1416 35.86 91.6284 36.366"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <circle cx="90.5002" cy="36.6433" r="33.5388" stroke="#EAEAEA" stroke-width="5"
                              stroke-linejoin="round" stroke-dasharray="2 4"></circle>
                      <path d="M148.287 30.5034L139.305 25.3177" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M141.194 32.4036L146.38 23.4216" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M32.4746 22.4434L37.355 33.4061" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M40.4063 25.4885L29.4436 30.3689" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M145.231 56.3843L141.087 63.5612" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M146.749 62.0518L139.572 57.9081" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M37.7805 56.1462L41.1509 63.7171" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M43.2581 58.2493L35.6872 61.6197" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path
                        d="M6.06621 60.2393L2 61.09L2.85067 57.0238L15.1344 44.672C15.3475 44.4584 15.6008 44.2891 15.8796 44.1737C16.1585 44.0584 16.4574 43.9994 16.7592 44C17.3683 44 17.9525 44.242 18.3833 44.6727C18.814 45.1035 19.056 45.6877 19.056 46.2968C19.0566 46.5986 18.9976 46.8975 18.8822 47.1763C18.7669 47.4552 18.5976 47.7085 18.3839 47.9216L6.06621 60.2393Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M16.623 49.6827L13.3735 46.4331" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path
                        d="M177.463 45.3085C177.054 43.6193 176.233 42.0579 175.072 40.7643C173.912 39.4707 172.448 38.4855 170.813 37.8968C169.178 37.3082 167.422 37.1345 165.704 37.3916C163.985 37.6486 162.357 38.3282 160.966 39.3694C159.574 40.4107 158.463 41.781 157.732 43.3575C157 44.9339 156.672 46.6673 156.775 48.402C156.879 50.1368 157.411 51.8187 158.325 53.297C159.239 54.7752 160.505 56.0035 162.011 56.8717C163.241 57.5852 164.604 58.0399 166.016 58.2079C167.428 58.3758 168.859 58.2535 170.223 57.8485"
                        stroke="#FFAB56" stroke-width="1.75" stroke-miterlimit="10"></path>
                      <path
                        d="M173.554 45.5578C173.034 44.0512 171.985 42.7846 170.601 41.9935C169.067 41.1077 167.243 40.8676 165.532 41.3261C163.821 41.7847 162.362 42.9042 161.476 44.4385C160.59 45.9728 160.35 47.7962 160.809 49.5074C161.267 51.2187 162.387 52.6778 163.921 53.5636C165.298 54.3663 166.92 54.642 168.484 54.3393"
                        stroke="#FFAB56" stroke-width="1.75" stroke-miterlimit="10"></path>
                      <path
                        d="M169.362 45.8394C169.154 45.6416 168.929 45.4618 168.691 45.3018C168.077 44.9441 167.352 44.8293 166.658 44.9801C165.964 45.1308 165.351 45.5362 164.941 46.1162C164.826 46.2639 164.732 46.4272 164.661 46.6012C164.364 47.2462 164.319 47.9792 164.536 48.6557C164.752 49.3322 165.214 49.903 165.831 50.2555C166.089 50.3821 166.357 50.4866 166.632 50.5679"
                        stroke="#FFAB56" stroke-width="1.75" stroke-miterlimit="10"></path>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="text-center rounded-t-24 overflow-hidden relative px-20 pt-48 pb-112 cursor-pointer">
                <div class="w-layout-blockcontainer max-w-200 w-full md:max-w-full w-container">
                  <div class="mb-4">
                    <div class="text-36 tracking-[3.6px] text-secondary"><?= $card1Number; ?></div>
                  </div>
                  <div class="mb-28">
                    <div class="text-md font-semibold"><?= $card1Title; ?></div>
                  </div>
                  <div class="text-sm tracking-[1.4px]"><?= $card1Description; ?></div>
                </div>
                <div class="absolute absolute--full w-full h-full z--1">
                  <div class="_w-full h-full gradient2 opacity-25 group-hover-gradient5"></div>
                </div>
              </div>
            </div>
            <div class="max-w-288 w-full md:max-w-full group transition-all hover:-translate-y-25">
              <div class="opacity-0 group-hover:opacity-100">
                <div class="mb-20">
                  <div class="flex justify-center items-center w-embed">
                    <svg xmlns="http://www.w3.org/2000/svg" width="182" height="94" viewBox="0 0 182 94" fill="none">
                      <circle cx="90.5002" cy="46.6432" r="33.5388" transform="rotate(-34.5434 90.5002 46.6432)"
                              stroke="#EAEAEA" stroke-width="5" stroke-linejoin="round" stroke-dasharray="2 4"></circle>
                      <path d="M148.287 40.9624L139.305 35.7767" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M141.194 42.8625L146.38 33.8806" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M32.4746 32.9021L37.355 43.8648" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M40.4062 35.9473L29.4435 40.8277" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M145.233 66.3843L141.09 73.5612" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M146.752 72.0518L139.575 67.9081" stroke="#EAEAEA" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M37.7805 66.1462L41.1509 73.7171" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M43.2581 68.2493L35.6872 71.6197" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <foreignObject x="65.3767" y="21.8054" width="50.6128" height="50.6128">
                        <div xmlns="http://www.w3.org/1999/xhtml"
                             style="backdrop-filter:blur(2px);clip-path:url(#bgblur_0_437_1347_clip_path);height:100%;width:100%"></div>
                      </foreignObject>
                      <path data-figma-bg-blur-radius="4"
                            d="M90.683 67.4181C101.898 67.4181 110.989 58.3266 110.989 47.1118C110.989 35.8969 101.898 26.8054 90.683 26.8054C79.4682 26.8054 70.3767 35.8969 70.3767 47.1118C70.3767 58.3266 79.4682 67.4181 90.683 67.4181Z"
                            stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M126.192 82.6207L104.637 61.0652" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <path d="M99.647 41.4587L90.7199 50.3951L87.1435 46.8187L80 53.9622" stroke="#FFAB56"
                            stroke-width="1.91" stroke-miterlimit="10"></path>
                      <path d="M95.1831 41.4587H99.6466V45.9223" stroke="#FFAB56" stroke-width="1.91"
                            stroke-miterlimit="10"></path>
                      <path
                        d="M15.6811 66.4587H3.31892C3.01439 66.4587 2.71285 66.4016 2.43151 66.2905C2.15016 66.1794 1.89453 66.0166 1.67919 65.8114C1.46386 65.6062 1.29305 65.3625 1.17652 65.0944C1.05998 64.8263 1 64.5389 1 64.2486V52.4587H7.18108L9.48384 55.4081H18V64.2486C18 64.5389 17.94 64.8263 17.8235 65.0944C17.7069 65.3625 17.5361 65.6062 17.3208 65.8114C17.1055 66.0166 16.8498 66.1794 16.5685 66.2905C16.2871 66.4016 15.9856 66.4587 15.6811 66.4587Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M179.495 50.4706L170.28 48.0014C169.261 47.7284 168.214 48.3331 167.941 49.352L163.494 65.9466C163.221 66.9655 163.826 68.0128 164.845 68.2859L174.06 70.755C175.079 71.028 176.126 70.4233 176.399 69.4044L180.846 52.8098C181.119 51.7909 180.514 50.7436 179.495 50.4706Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path
                        d="M176.487 50.648L172.797 49.6593C172.672 49.6274 172.554 49.5699 172.452 49.4904C172.35 49.4109 172.265 49.3111 172.203 49.1973C172.141 49.0835 172.104 48.9582 172.092 48.8292C172.081 48.7002 172.097 48.5702 172.138 48.4475L177.663 49.928C177.638 50.0549 177.587 50.1753 177.512 50.2815C177.438 50.3876 177.343 50.4773 177.232 50.5449C177.122 50.6126 176.999 50.6566 176.87 50.6743C176.742 50.6921 176.612 50.6831 176.487 50.648Z"
                        stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10"></path>
                      <path d="M169.275 66.512L171.111 67.0037" stroke="#FFAB56" stroke-width="2"
                            stroke-miterlimit="10"></path>
                      <defs>
                        <clipPath id="bgblur_0_437_1347_clip_path" transform="translate(-65.3767 -21.8054)">
                          <path
                            d="M90.683 67.4181C101.898 67.4181 110.989 58.3266 110.989 47.1118C110.989 35.8969 101.898 26.8054 90.683 26.8054C79.4682 26.8054 70.3767 35.8969 70.3767 47.1118C70.3767 58.3266 79.4682 67.4181 90.683 67.4181Z"></path>
                        </clipPath>
                      </defs>
                    </svg>
                  </div>
                </div>
              </div>
              <div class="text-center rounded-t-24 overflow-hidden relative px-20 pt-48 pb-148 cursor-pointer">
                <div class="w-layout-blockcontainer max-w-200 w-full md:max-w-full w-container">
                  <div class="mb-4">
                    <div class="text-36 tracking-[3.6px] text-secondary"><?= $card2Number; ?></div>
                  </div>
                  <div class="mb-28">
                    <div class="text-md font-semibold"><?= $card2Title; ?></div>
                  </div>
                  <div class="text-sm tracking-[1.4px]"><?= $card2Description; ?></div>
                </div>
                <div class="absolute absolute--full w-full h-full z--1">
                  <div class="_w-full h-full gradient2 opacity-25 group-hover-gradient5"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
