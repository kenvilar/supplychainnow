<?php

$postID  = get_the_ID();
$section = get_field( 'Hero_Section', $postID );
$title   = esc_html( ! empty( $section['Page_Title'] ) ? $section['Page_Title'] : 'The #1 Voice of Supply Chain' );

$card1Title       = esc_html( ! empty( $section['Card_1_Title'] ) ? $section['Card_1_Title'] : 'JOIN THE CONVERSATION' );
$card1Description = esc_html( ! empty( $section['Card_1_Description'] ) ? $section['Card_1_Description'] : 'Get expert takes on the industry’s latest topics, via podcast, livestream, or webinar.' );
$card1Button1Text = esc_html( ! empty( $section['Card_1_Button_1_Text'] ) ? $section['Card_1_Button_1_Text'] : 'Listen Now' );
$card1Button1Link = esc_url( ! empty( $section['Card_1_Button_1_Link'] ) ? $section['Card_1_Button_1_Link'] : '/on-demand-programming' );
$card1Button2Text = esc_html( ! empty( $section['Card_1_Button_2_Text'] ) ? $section['Card_1_Button_2_Text'] : 'Subscribe for Updates' );
$card1Button2Link = esc_url( ! empty( $section['Card_1_Button_2_Link'] ) ? $section['Card_1_Button_2_Link'] : 'https://linktr.ee/supplychainnow' );

$card2Title       = esc_html( ! empty( $section['Card_2_Title'] ) ? $section['Card_2_Title'] : 'WORK WITH US' );
$card2Description = esc_html( ! empty( $section['Card_2_Description'] ) ? $section['Card_2_Description'] : 'Reach the right audience as a sponsor or campaign partner and generate high-value leads for your brand.' );
$card2Button1Text = esc_html( ! empty( $section['Card_2_Button_1_Text'] ) ? $section['Card_2_Button_1_Text'] : 'Learn More About Working with Us' );
$card2Button1Link = esc_url( ! empty( $section['Card_2_Button_1_Link'] ) ? $section['Card_2_Button_1_Link'] : '/work-with-us' );
?>
<section class="section sm:text-center py-60">
  <div class="site-padding">
    <div class="max-w-1252 pt-92 md:pt-0 md:mb-20 w-container">
      <div class="mb-36">
        <div class="flex gap-20 justify-between sm:flex-col">
          <div class="max-w-664 w-full">
            <h1><?= $title; ?></h1>
          </div>
        </div>
      </div>
      <div class="flex gap-28 sm:flex-col">
        <div class="max-w-512 md:max-w-full card">
          <div class="pt-48 pb-36 px-12">
            <div class="w-layout-blockcontainer max-w-388 w-full md:max-w-full w-container">
              <div class="mb-16">
                <div class="font-family-alternate font-medium text-xl tracking-[2.4px] xs:text-md">
                  <?= $card1Title; ?>
                </div>
              </div>
              <div class="mb-40">
                <div class="max-w-348 w-full md:max-w-full">
                  <p class="tracking-[1.6px]">
                    <?= $card1Description; ?>
                  </p>
                </div>
              </div>
              <div class="flex gap-12 xs:flex-col sm:flex-col flex-wrap">
                <?php
                echo get_template_part( 'components/ui/btn', null, [
                  'text'  => $card1Button1Text,
                  'link'  => $card1Button1Link,
                  'style' => 'secondary',
                  'class' => '',
                  /*'attributes' => [
                    'target' => '_blank',
                    'rel'    => 'noopener noreferrer',
                  ],*/
                ] );
                echo get_template_part( 'components/ui/btn', null, [
                  'text'       => $card1Button2Text,
                  'link'       => $card1Button2Link,
                  'style'      => 'secondary-outline',
                  'class'      => '',
                  'attributes' => [
                    'target' => '_blank',
                    'rel'    => 'noopener noreferrer',
                  ],
                ] );
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="max-w-512 md:max-w-full card">
          <div class="pt-48 pb-36 px-12">
            <div class="w-layout-blockcontainer max-w-432 w-full md:max-w-full w-container">
              <div class="mb-16">
                <div class="font-family-alternate font-medium text-xl tracking-[2.4px] xs:text-md">
                  <?= $card2Title; ?>
                </div>
              </div>
              <div class="mb-40">
                <div class="max-w-432 w-full md:max-w-full">
                  <p class="tracking-[1.6px]">
                    <?= $card2Description; ?>
                  </p>
                </div>
              </div>
              <div class="flex gap-12 sm:flex-col">
                <?php
                echo get_template_part( 'components/ui/btn', null, [
                  'text'  => $card2Button1Text,
                  'link'  => $card2Button1Link,
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
        </div>
      </div>
    </div>
    <div class="absolute absolute--r w-full h-full z--1 flex justify-end items-center md:relative">
      <div class="w-[50%] h-540 xs:h-full md:w-full">
        <div class="max-w-624 w-full h-full ml-auto md:max-w-full">
          <div slider-1 class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <?php
                if ( $section['Hero_Image_Slider'] ) :
                  foreach ( $section['Hero_Image_Slider'] as $idx => $image ) :
                    $image = esc_url( $image );
                    ?>
                    <img
                      src="<?= $image; ?>"
                      loading="lazy" alt="homepage-slider-<?= $idx + 1; ?>"
                      class="splide__slide overflow-hidden image rounded-l-24 md:rounded-24">
                  <?php
                  endforeach;
                else:
                  ?>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-1.avif'; ?>"
                      loading="lazy" alt="homepage-slider-1"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-2.avif'; ?>"
                      loading="lazy" alt="homepage-slider-2"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-3.avif'; ?>"
                      loading="lazy" alt="homepage-slider-3"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-4.avif'; ?>"
                      loading="lazy" alt="homepage-slider-4"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-5.avif'; ?>"
                      loading="lazy" alt="homepage-slider-5"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-6.avif'; ?>"
                      loading="lazy" alt="homepage-slider-6"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                  <div class="splide__slide">
                    <img
                      src="<?php
                      echo get_stylesheet_directory_uri() . '/assets/img/home/homepage-slider-7.avif'; ?>"
                      loading="lazy" alt="homepage-slider-7"
                      class="overflow-hidden image rounded-l-24 md:rounded-24">
                  </div>
                <?php
                endif;
                ?>
              </div>
            </div>
          </div>
          <script>
            document.addEventListener("DOMContentLoaded", function() {
              function slider1() {
                let splideTarget = "[slider-1]";
                let splideTargetEl = document.querySelector(`${splideTarget}`);
                if (!splideTargetEl) return;
                var options = {
                  /*suggested options*/
                  type: "fade", //'fade', //"slide", //"loop",
                  arrows: false,
                  pagination: false,
                  /*custom options*/
                  rewind: true,
                  fixedWidth: "100%",
                  fixedHeight: 540,
                  perMove: 1,
                  perPage: 1,
                  gap: 0,
                  autoplay: true,
                  pauseOnHover: false,
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
                    991: {
                      fixedWidth: "100%"
                    },
                    479: {
                      autoHeight: true,
                      fixedHeight: "auto"
                    }
                  }
                };
                var splide = new Splide(`${splideTarget}`, options);
                splide.mount();
              }

              setTimeout(function() {
                slider1();
              }, 500);
            });
          </script>
        </div>
      </div>
    </div>
    <div class="absolute absolute--l z--2">
      <img src="<?php
      echo get_stylesheet_directory_uri() . '/assets/img/grid/hero-home-grid.avif'; ?>" alt="hero home grid" />
    </div>
  </div>
</section>
