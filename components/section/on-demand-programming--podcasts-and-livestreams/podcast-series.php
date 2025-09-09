<?php

$pageID  = get_the_ID();
$section = get_field( 'The_Buzz_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'The Buzz' );
?>
<section class="section">
  <div class="site-padding sm:py-60 pb-80">
    <div class="w-layout-blockcontainer max-w-1372 relative w-container">
      <div class="mb-52">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <?php
        get_template_part( 'components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ] );
        ?>
      </div>
      <div class="relative">
        <div class="w-layout-blockcontainer max-w-1252 w-container">
          <div slider-2="" class="splide">
            <div class="splide__track">
              <div class="splide__list">
                <?php
                if ( ! empty( $section['The_Buzz_Repeater'] ) ):
                  foreach ( $section['The_Buzz_Repeater'] as $idx => $item ) :
                    $item = $item['Item'];
                    $template = get_page_template_slug( $item );

                    // Default for posts or other content types
                    $selectMediaType = 'podcast';
                    if ( $template === 'livestream-detail.php' ) {
                      $selectMediaType = 'livestream';
                    } elseif ( $template === 'episode-detail.php' ) {
                      $selectMediaType = 'podcast';
                    } elseif ( $template === 'webinar-detail.php' ) {
                      $selectMediaType = 'webinar';
                    }
                    ?>
                    <a href="<?php
                    the_permalink( $item ); ?>" class="relative w-full group splide__slide">
                      <div class="relative flex flex-col justify-start gap-20 h-full">
                        <div class="w-full">
                          <div class="mb-28">
                            <div
                              class="overflow-hidden rounded-12 relative h-222 md:h-auto bg-cargogrey">
                              <img
                                src="<?php
                                echo get_the_post_thumbnail_url( $item )
                                  ? get_the_post_thumbnail_url( $item, 'medium_large' )
                                  : get_stylesheet_directory_uri() .
                                    "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
                                loading="lazy" alt="" class="image relative opacity-90">
                              <?php
                              $terms    = get_the_terms( $item, "tags" );
                              $post_tag = get_the_terms( $item, "post_tag" );
                              if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
                                $first = array_values( $terms )[0]; ?>
                                <div class="absolute absolute--tl p-24 flex items-center justify-center">
                                  <div class="relative rounded-full overflow-hidden py-4 px-8">
                                    <div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
                                      <?php
                                      echo $first->name; ?>
                                    </div>
                                    <?php
                                    echo $selectMediaType == "livestream"
                                      ? '<div class="absolute absolute--full bg-primary"></div>'
                                      : "";
                                    echo $selectMediaType == "podcast"
                                      ? '<div class="absolute absolute--full bg-secondary"></div>'
                                      : "";
                                    echo $selectMediaType == "webinar"
                                      ? '<div class="absolute absolute--full bg-tertiary"></div>'
                                      : "";
                                    echo ( $selectMediaType != "livestream" || $selectMediaType != "podcast" || $selectMediaType != "webinar" )
                                      ? '<div class="absolute absolute--full bg-tertiary"></div>'
                                      : "";
                                    ?>
                                  </div>
                                </div>
                                <?php
                              }
                              if ( ! is_wp_error( $post_tag ) && ! empty( $post_tag ) ) {
                                $first = array_values( $post_tag )[0]; ?>
                                <div class="absolute absolute--tl p-24 flex items-center justify-center">
                                  <div class="relative rounded-full overflow-hidden py-4 px-8">
                                    <div class="relative font-semibold uppercase text-2xs text-white lh-normal z-10">
                                      <?php
                                      echo $first->name; ?>
                                    </div>
                                    <?php
                                    echo $selectMediaType == "livestream"
                                      ? '<div class="absolute absolute--full bg-primary"></div>'
                                      : "";
                                    echo $selectMediaType == "podcast"
                                      ? '<div class="absolute absolute--full bg-secondary"></div>'
                                      : "";
                                    echo $selectMediaType == "webinar"
                                      ? '<div class="absolute absolute--full bg-tertiary"></div>'
                                      : "";
                                    echo ( $selectMediaType != "livestream" || $selectMediaType != "podcast" || $selectMediaType != "webinar" )
                                      ? '<div class="absolute absolute--full bg-tertiary"></div>'
                                      : "";
                                    ?>
                                  </div>
                                </div>
                                <?php
                              }
                              ?>
                              <div
                                class="absolute absolute--full flex items-center justify-center translate-y-220 group-hover:translate-y-0 transition-all duration-500">
                                <?php
                                if ( $selectMediaType == "livestream" ) { ?>
                                  <img
                                    src="<?php
                                    echo get_stylesheet_directory_uri() .
                                         "/assets/img/icons/play-button-livestream.avif"; ?>"
                                    loading="lazy" alt="play-button-livestream">
                                  <?php
                                } elseif ( $selectMediaType == "podcast" ) { ?>
                                  <img
                                    src="<?php
                                    echo get_stylesheet_directory_uri() .
                                         "/assets/img/icons/play-button-podcast.avif"; ?>"
                                    loading="lazy" alt="play-button-podcast">
                                  <?php
                                } elseif ( $selectMediaType == "webinar" ) { ?>
                                  <img
                                    src="<?php
                                    echo get_stylesheet_directory_uri() .
                                         "/assets/img/icons/play-button-webinar.avif"; ?>"
                                    loading="lazy" alt="play-button-webinar">
                                  <?php
                                } else {
                                  ?>
                                  <img
                                    src="<?php
                                    echo get_stylesheet_directory_uri() .
                                         "/assets/img/icons/play-button-podcast.avif"; ?>"
                                    loading="lazy" alt="play-button-podcast">
                                  <?php
                                }
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="mb-12">
                            <div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
                              <div class="flex items-center gap-8">
                                <div class="flex items-center">
                                  <?php
                                  if ( $selectMediaType == "livestream" ) { ?>
                                    <img
                                      src="<?php
                                      echo get_stylesheet_directory_uri() .
                                           "/assets/img/icons/livestream-card-icon.svg"; ?>"
                                      loading="lazy" alt="livestream-music">
                                    <?php
                                  } elseif ( $selectMediaType == "podcast" ) { ?>
                                    <img
                                      class="size-24"
                                      src="<?php
                                      echo get_stylesheet_directory_uri() .
                                           "/assets/img/icons/podcast-card-icon.png"; ?>"
                                      loading="lazy" alt="podcast-blue-microphone">
                                    <?php
                                  } elseif ( $selectMediaType == "webinar" ) { ?>
                                    <img
                                      class="size-24"
                                      src="<?php
                                      echo get_stylesheet_directory_uri() .
                                           "/assets/img/icons/webinar-card-icon.png"; ?>"
                                      loading="lazy" alt="webinar-person">
                                    <?php
                                  } else {
                                    ?>
                                    <img
                                      class="size-24"
                                      src="<?php
                                      echo get_stylesheet_directory_uri() .
                                           "/assets/img/icons/podcast-card-icon.png"; ?>"
                                      loading="lazy" alt="podcast-blue-microphone">
                                    <?php
                                  }
                                  ?>
                                </div>
                                <div class="font-family-secondary text-sm capitalize">
                                  <?php
                                  echo $selectMediaType ?? 'Podcast'; ?>
                                </div>
                              </div>
                              <div class="flex items-center gap-8 text-sm font-light font-family-secondary">
                                <div>
                                  <?= get_the_date( "F j, Y", $item ); ?>
                                </div>
                                <!--<div>•</div>
                                <div>6 min 25 sec</div>-->
                              </div>
                            </div>
                          </div>
                          <h3 class="font-semibold text-lg"
                              scn-text-limit="2">
                            <?= get_the_title( $item ); ?>
                          </h3>
                        </div>
                        <div class="w-full tracking-[1.6px] text-sm" scn-text-limit="3">
                          <?php
                          if ( get_the_excerpt( $item ) ) {
                            the_excerpt();
                          } elseif ( get_field( "livestream_description", $item ) ) {
                            the_field( "livestream_description", $item );
                          } elseif ( get_field( "episode_summary", $item ) ) {
                            the_field( "episode_summary", $item );
                          } elseif ( get_field( "webinar_description", $item ) ) {
                            the_field( "webinar_description", $item );
                          } ?>
                        </div>
                      </div>
                    </a>
                  <?php
                  endforeach;
                  wp_reset_postdata();
                else:
                  echo get_template_part( 'components/ui/card1', null, [
                    'q'             => [
                      "meta_query" => [
                        [
                          "relation" => "AND",
                          [
                            'key'     => '_wp_page_template',
                            'value'   => [ 'episode-detail.php', ],
                            'compare' => 'IN',
                            'type'    => 'CHAR',
                          ],
                        ],
                      ],
                    ],
                    'q_post'        => [],
                    'post_per_page' => 500,
                    'card_size'     => 'small',
                    'attributes'    => [],
                    'classNames'    => 'splide__slide',
                    'noItemsFound'  => '',
                  ] );
                endif;
                ?>
              </div>
            </div>
            <?php
            get_template_part( 'components/splide-arrows' );
            ?>
          </div>
          <div class="display-none w-embed">
            <style>
							[slider-2] .splide__arrow {
								background: transparent;
							}
            </style>
          </div>
          <div class="display-none w-embed w-script">
            <script>
              document.addEventListener("DOMContentLoaded", function() {
                function slider2() {
                  let splideTarget = "[slider-2]";
                  let splideTargetEl = document.querySelector(`${splideTarget}`);
                  if (!splideTargetEl) return;
                  var options = {
                    /*suggested options*/
                    type: "slide", //'fade', //"slide", //"loop",
                    arrows: true,
                    pagination: false,
                    /*custom options*/
                    rewind: true,
                    //fixedWidth: 394,
                    perMove: 1,
                    perPage: 3,
                    gap: 32,
                    autoplay: false,
                    pauseOnHover: true,
                    updateOnMove: true,
                    lazyLoad: "nearby", //boost performance
                    drag: false, //boost performance
                    speed: 400, //boost performance
                    autoScroll: {
                      speed: 1
                    },
                    intersection: {
                      inView: {
                        autoplay: false
                      },
                      outView: {
                        autoplay: false
                      }
                    },
                    breakpoints: {
                      991: {
                        // 		type: 'slide',
                        perPage: 2,
                        padding: { left: 42, right: 42 }
                        // 		perMove: 1,
                        // 		fixedWidth: '100%',
                        // 		padding: { left: 0, right: 0 },
                      },
                      767: {
                        perPage: 1,
                        gap: 50,
                        padding: { left: 42, right: 42 }
                      }
                    }
                  };
                  var splide = new Splide(`${splideTarget}`, options);
                  splide.mount();
                }

                setTimeout(function() {
                  slider2();
                }, 500);
              });
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>