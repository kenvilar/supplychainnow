<?php

$postID      = get_the_ID();
$section     = get_field( 'Connect_Your_Brand_with_an_Active_Global_Audience_of_Millions_Section', $postID );
$title       = esc_html( ! empty ( $section['Title'] ) ? $section['Title'] : 'Connect Your Brand with an Active Global Audience of Millions' );
$description = esc_html( ! empty ( $section['Description'] ) ? $section['Description'] : 'When you become a sponsor or campaign partner, you become a trusted voice in the industry.' );
$button1Text = esc_html( ! empty ( $section['Button_1_Text'] ) ? $section['Button_1_Text'] : 'Book a Call to Learn More' );
$button1Link = esc_url( ! empty ( $section['Button_1_Link'] ) ? $section['Button_1_Link'] : '/contact' );
$card1Title  = esc_html( ! empty ( $section['Card_1_Title'] ) ? $section['Card_1_Title'] : 'Engage with supply chain decision-makers.' );
$card2Title  = esc_html( ! empty ( $section['Card_2_Title'] ) ? $section['Card_2_Title'] : 'Share your thought-leadership.' );
$card3Title  = esc_html( ! empty ( $section['Card_3_Title'] ) ? $section['Card_3_Title'] : 'Generate new leads.' );
?>
<div class="gradient1 rounded-100">
  <section class="section text-white">
    <div class="site-padding sm:py-60 py-80 relative z-10">
      <div class="mb-88">
        <div class="max-w-1252 sm:text-center w-container">
          <div class="flex gap-20 justify-between sm:flex-col items-center">
            <div class="max-w-736 w-full md:max-w-full">
              <h2><?= $title; ?></h2>
            </div>
            <div class="max-w-444 w-full md:max-w-full">
              <p>
                <strong class="text-lg">
                  <?= $description; ?>
                </strong>
              </p>
            </div>
          </div>
        </div>
        <div class="mb-32"></div>
        <div class="max-w-1120 mx-auto">
          <div class="flex justify-end sm:justify-center">
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
            ?>
          </div>
        </div>
      </div>
      <div class="max-w-1176 w-container">
        <div class="mb-68 sm:mb-20">
          <div class="flex justify-center sm:flex-col">
            <div class="rounded-12 border border-secondary/25 p-28 bg-white text-textcolor relative">
              <div class="flex gap-16 items-center">
                <div class="flex w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="34" height="33" viewBox="0 0 34 33" fill="none">
                    <path d="M11.0134 13.8764L15.3006 18.1635L23.8899 9.58923" stroke="#FFAB56" stroke-width="2"
                          stroke-miterlimit="10" />
                    <path
                      d="M1 6.72619V21.0267C1 22.5453 1.60329 24.0018 2.67716 25.0757C3.75103 26.1496 5.20751 26.7529 6.72619 26.7529H9.58928V31.04L18.2385 26.7529H26.8278C28.3465 26.7529 29.803 26.1496 30.8768 25.0757C31.9507 24.0018 32.554 22.5453 32.554 21.0267V6.72619C32.554 5.20751 31.9507 3.75103 30.8768 2.67716C29.803 1.60329 28.3465 1 26.8278 1H6.72619C5.20751 1 3.75103 1.60329 2.67716 2.67716C1.60329 3.75103 1 5.20751 1 6.72619Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                  </svg>
                </div>
                <div class="tracking-[1.6px]"><?= $card1Title; ?></div>
              </div>
              <div class="absolute -top-4 right-0 pr-32 flex items-center">
                <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="max-w-1048 w-container">
          <div class="flex gap-20 justify-between items-center sm:flex-col sm:items-stretch">
            <div class="rounded-12 border border-secondary/25 p-28 bg-white text-textcolor relative">
              <div class="flex gap-16 items-center">
                <div class="flex w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="33" height="33" viewBox="0 0 33 33" fill="none">
                    <path
                      d="M12.6857 26.6382L6.36176 20.3143C6.08263 20.038 5.85877 19.7113 5.70311 19.3533C5.54745 18.9952 5.46309 18.6128 5.45491 18.2282C5.44672 17.8437 5.51488 17.4645 5.65544 17.1128C5.79599 16.761 6.00616 16.4436 6.27377 16.1789L13.6904 8.76227C16.7085 5.75068 20.8476 4.10764 25.2037 4.19205C26.1406 4.21002 27.0478 4.59903 27.7263 5.27368C28.4022 5.94778 28.7949 6.85091 28.8185 7.78567C28.903 12.1418 27.2599 16.2809 24.2483 19.299L16.8317 26.7156C16.5676 26.9856 16.2501 27.198 15.8978 27.3404C15.5455 27.4829 15.1653 27.5525 14.7794 27.5453C14.3936 27.5381 14.0098 27.4542 13.6503 27.2985C13.2908 27.1428 12.963 26.9183 12.6857 26.6382Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M4.48676 23.5032C5.43575 21.889 7.65355 21.6059 8.97756 22.93L10.0698 24.0222C11.3938 25.3462 11.1107 27.564 9.49659 28.513V28.513C8.37271 29.1737 6.94429 28.9914 6.02241 28.0695L4.93019 26.9773C4.00831 26.0554 3.826 24.627 4.48676 23.5032V23.5032Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M19.0248 24.5226C21.0615 22.4859 24.5343 24.0653 24.3378 26.939L24.1826 29.209C24.1483 29.7109 23.9334 30.1833 23.5777 30.539V30.539C22.7648 31.352 21.4467 31.352 20.6337 30.539L19.0248 28.9301C17.8077 27.713 17.8077 25.7397 19.0248 24.5226V24.5226Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M8.47484 13.9779C10.5103 11.9424 8.92976 8.47175 6.05803 8.67111L3.80105 8.82778C3.29975 8.86258 2.82794 9.07746 2.47262 9.43278V9.43278C1.65929 10.2461 1.65929 11.5648 2.47262 12.3781L4.07238 13.9779C5.28809 15.1936 7.25913 15.1936 8.47484 13.9779V13.9779Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M14.5776 18.4222C15.7439 19.5885 17.5953 19.6279 18.713 18.5102C19.8306 17.3926 19.7912 15.5411 18.625 14.3749C17.4587 13.2086 15.6073 13.1692 14.4896 14.2869C13.372 15.4045 13.4114 17.256 14.5776 18.4222Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M20.4233 4.81543C20.4061 5.82012 20.597 6.82638 20.984 7.77108C21.3711 8.71577 21.946 9.57852 22.6727 10.3052C23.3994 11.0319 24.2621 11.6068 25.2068 11.9938C26.1515 12.3809 27.1578 12.5718 28.1625 12.5545"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                  </svg>
                </div>
                <div class="tracking-[1.6px]"><?= $card2Title; ?></div>
              </div>
              <div class="absolute -top-4 right-0 pr-32 flex items-center">
                <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
              </div>
            </div>
            <div class="rounded-12 border border-secondary/25 p-28 bg-white text-textcolor relative">
              <div class="flex gap-16 items-center">
                <div class="flex w-embed">
                  <svg xmlns="http://www.w3.org/2000/svg" width="35" height="28" viewBox="0 0 35 28" fill="none">
                    <path
                      d="M14.4986 26.8722C21.9536 26.8722 27.9971 21.0805 27.9971 13.9361C27.9971 6.7917 21.9536 1 14.4986 1C7.04351 1 1 6.7917 1 13.9361C1 21.0805 7.04351 26.8722 14.4986 26.8722Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M14.4986 21.1195C18.6383 21.1195 21.9943 17.9033 21.9943 13.9361C21.9943 9.9688 18.6383 6.75269 14.4986 6.75269C10.3588 6.75269 7.00287 9.9688 7.00287 13.9361C7.00287 17.9033 10.3588 21.1195 14.4986 21.1195Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path d="M14.4986 13.9363H30.9986" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path d="M34 11.0601L30.9985 13.9364" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path d="M34 16.8126L30.9985 13.9363" stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                    <path
                      d="M14.4986 15.3669C15.3231 15.3669 15.9914 14.7264 15.9914 13.9363C15.9914 13.1461 15.3231 12.5056 14.4986 12.5056C13.6741 12.5056 13.0057 13.1461 13.0057 13.9363C13.0057 14.7264 13.6741 15.3669 14.4986 15.3669Z"
                      stroke="#FFAB56" stroke-width="2" stroke-miterlimit="10" />
                  </svg>
                </div>
                <div class="tracking-[1.6px]"><?= $card3Title; ?></div>
              </div>
              <div class="absolute -top-4 right-0 pr-32 flex items-center">
                <div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="absolute absolute--b flex justify-center">
      <img
        src="<?php
        echo get_stylesheet_directory_uri() . '/assets/img/misc/abstract-wave-pattern.avif'; ?>"
        loading="lazy" alt="Abstract wave pattern with curved lines in white on a black background" class="max-w-none">
    </div>
  </section>
</div>