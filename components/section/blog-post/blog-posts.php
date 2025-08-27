<?php

$postId             = get_the_ID();
$categories         = get_the_category( $postId );
$categoryResultName = "";
$categorySlug       = '';

if ( isset( $_GET['category'] ) ) {
  $categorySlug = sanitize_text_field( $_GET['category'] );
}

if ( $categorySlug ) {
  if ( $categorySlug == 'ebook' ) { //slug is ebook
    $categoryResultName = 'E-Books';
    $categorySlug       = 'ebook';
  } elseif ( $categorySlug == 'news' ) { //news
    $categoryResultName = 'News';
    $categorySlug       = 'news';
  } elseif ( $categorySlug == 'guide' ) { //guide
    $categoryResultName = 'Guides';
    $categorySlug       = 'guide';
  } elseif ( $categorySlug == 'white-paper' ) { //white-paper
    $categoryResultName = 'White Papers';
    $categorySlug       = 'white-paper';
  } elseif ( $categorySlug == 'article' ) {
    $categoryResultName = 'Articles';
    $categorySlug       = 'article';
  } elseif ( $categorySlug == 'blog' ) {
    $categoryResultName = 'Blogs';
    $categorySlug       = 'blog';
  }
} else {
  if ( ! empty( $categories ) ) {
    if ( $categories[0]->name == 'Guide' ) { //visibility-guide
      $categoryResultName = 'Guides';
      $categorySlug       = 'guide';
    }
    if ( $categories[0]->name == 'White Paper' ) { //white-paper
      $categoryResultName = 'White Papers';
      $categorySlug       = 'white-paper';
    }
    if ( $categories[0]->name == 'eBook' ) { //slug is ebook
      $categoryResultName = 'E-Books';
      $categorySlug       = 'ebook';
    }
    if ( $categories[0]->name == 'Article' || $categories[0]->name == 'Weekly Summary' ) {
      $categoryResultName = 'Articles';
      $categorySlug       = 'article';
    }
    if ( $categories[0]->name == 'News' ) { //news
      $categoryResultName = 'News';
      $categorySlug       = 'news';
    }
    if ( array_intersect( array_column( $categories, 'name' ), [ 'Blog Post', 'Guest Post' ] ) ) {
      $categoryResultName = 'Blogs';
      $categorySlug       = 'blog';
    }
    if ( array_intersect( array_column( $categories, 'name' ), [ 'Podcast Episode' ] ) ) {
      $categoryResultName = 'Episodes';
      $categorySlug       = 'podcasts-and-livestreams';
    }
  }
}

$mp3_url = get_first_media_player( get_the_content() );
$captivate_player_link = get_field('captivate_player_link', $postId);
if (!empty($captivate_player_link)) {
  $mp3_url = $captivate_player_link;
}
$download_url = get_first_download_link( get_the_content() );
$white_paper_ebook_guide_link = get_field('white_paper_ebook_guide_link', $postId);
if (!empty($white_paper_ebook_guide_link)) {
  $download_url = $white_paper_ebook_guide_link;
}
?>
<div class="page-wrapper">
  <div class="main-wrapper">
    <section class="section">
      <div class="site-padding sm:py-60 pt-58">
        <div class="mx-auto text-center">
          <a href="<?= '/' . $categorySlug; ?>" class="font-semibold text-reg text-secondary">
            < Back to <?= $categoryResultName; ?>
          </a>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="site-padding sm:py-60 pt-29">
        <div class="mx-auto max-w-1010 w-full md:max-w-full">
          <div class="overflow-hidden rounded-25 relative">
            <div class="relative group z-1 h-568 sm:h-200">
              <img class="image relative z-10 object-contain!" src="
							<?php
              if ( has_post_thumbnail( $postId ) ) {
                the_post_thumbnail_url( "medium_large" );
              } else {
                echo get_stylesheet_directory_uri() .
                     "/assets/img/misc/default-card-img-thumbnail.avif";
              } ?>" alt="">
              <!-- <img class="absolute absolute--full image z-1" src="<?php
              echo get_stylesheet_directory_uri() .
                   "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
							     alt=""> -->
              <?php
              if ( $mp3_url ) {
                ?>
                <a href="<?php
                echo esc_url( $mp3_url ); ?>" target="_blank" rel="noopener noreferrer"
                   class="absolute absolute--full z-10 flex items-center justify-center translate-y-400 group-hover:translate-y-0 transition-all duration-500">
                  <img
                    src="<?php
                    echo get_stylesheet_directory_uri() .
                         "/assets/img/icons/play-button-podcast.avif"; ?>"
                    loading="lazy" alt="play-button-podcast">
                </a>
                <?php
              } elseif ( $download_url ) {
                ?>
                <a href="<?php
                echo esc_url( $download_url ); ?>" target="_blank" rel="noopener noreferrer"
                   class="absolute absolute--full z-99 flex items-center justify-center translate-y-400 group-hover:translate-y-0 transition-all duration-500">
                  <div class="btn primary">
                    Download
                  </div>
                </a>
                <?php
              }
              ?>
            </div>
            <div class="absolute absolute--full bg-cargogrey z--1"></div>
          </div>
        </div>
      </div>
    </section>
    <section class="section">
      <div class="site-padding sm:py-60 py-64">
        <div class="mx-auto max-w-1249 w-full md:max-w-full">
          <div class="flex gap-20 justify-between md:flex-col">
            <div class="max-w-775 w-full md:max-w-full">
              <div class="mb-60">
                <div class="flex gap-28 items-center">
                  <div class="flex items-center gap-15">
                    <div class="tracking-[1.6px]">Share:</div>
                    <?php
                    get_template_part( 'components/section/blog-post/social-media-icons' );
                    ?>
                  </div>
                </div>
              </div>
              <div class="rt--default tracking-[1.6px]">
                <h1>
                  <?php
                  the_title(); ?>
                </h1>
                <?php
                the_content(); ?>
              </div>
            </div>
            <div class="max-w-395 w-full md:max-w-full">
              <div class="mb-36">
                <div class="mb-20">
                  <h2 class="text-2xl">More <?php
                    echo $categoryResultName; ?></h2>
                </div>
                <?php
                get_template_part( "components/line-with-blinking-dot", null, [
                  "maxWidthClassnames" => "ml-0",
                ] ); ?>
              </div>
              <div class="mb-52">
                <!--<form class="relative overflow-hidden rounded-100 border border-secondary/50 bg-[#EBF6FF]"
								      method="get" action="<?php
                /*									echo esc_url(home_url(add_query_arg([]))); */

                ?>">
									<input
										type="search"
										name="s"
										value="<?php
                /*											echo esc_attr(get_search_query()); */

                ?>"
										placeholder="Search by episode, topic, name, etc..."
										class="overflow-hidden rounded-100 w-full h-43 py-14 pl-48 pr-12 text-sm font-light placeholder:text-secondary"
									/>
									<div class="absolute absolute--l flex items-center justify-center pl-22">
										<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
											<path
												d="M6.31756 11.6351C9.25436 11.6351 11.6351 9.25436 11.6351 6.31756C11.6351 3.38075 9.25436 1 6.31756 1C3.38075 1 1 3.38075 1 6.31756C1 9.25436 3.38075 11.6351 6.31756 11.6351Z"
												stroke="#4E88B6" stroke-miterlimit="10"/>
											<path d="M14 13.9997L10.4529 10.4526" stroke="#4E88B6" stroke-miterlimit="10"/>
										</svg>
									</div>
								</form>-->
                <?php
                get_template_part( 'components/ui/searchbar', null, [
                  'site_padding'  => 'px-0! py-0 pb-0',
                  'taxonomy'      => 'post_tag',
                  'hide_dropdown' => true,
                  'placeholder'   => $categoryResultName == 'Episodes' ? 'Search by episode, topic, name, etc...' : 'Search',
                  'redirect_to'   => '/' . $categorySlug,
                ] );
                ?>
              </div>
              <div class="mb-52 flex flex-col gap-58 sm:gap-20">
                <?php
                $default_args = [
                  "post_type"              => "post",
                  "post_status"            => "publish",
                  "posts_per_page"         => 2,
                  "offset"                 => 0,
                  'no_found_rows'          => true,  // set true if not paginating
                  'update_post_meta_cache' => false, // set false if not reading lots of meta
                  'update_post_term_cache' => false,
                  "post__not_in"           => [ $postId ],
                  "orderby"                => "rand", // random order
                  "tax_query" => [
                    [
                      "taxonomy" => "category",
                      "field" => "slug",
                      "terms" => ["podcast-episode"],
                      "operator" => "NOT IN",
                    ],
                  ],
                ];
                if ( ! empty( $categorySlug ) ) {
                  $default_args['tax_query'] = [
                    [
                      "taxonomy" => "category",
                      "field"    => "slug",
                      "terms"    => $categorySlug,
                      'operator' => 'IN'
                    ],
                  ];
                  if ( $categorySlug == 'blog' ) {
                    $default_args['tax_query'] = [
                      [
                        "taxonomy" => "category",
                        "field"    => "slug",
                        "terms"    => [ 'blog-post', 'guest-post' ],
                        'operator' => 'IN'
                      ],
                    ];
                  }
                  if ( $categoryResultName == 'Episodes' ) {
                    $page_args  = [
                      "post_type"              => "page",
                      "post_status"            => "publish",
                      "posts_per_page"         => - 1,
                      "offset"                 => 0,
                      'no_found_rows'          => true,  // set true if not paginating
                      'update_post_meta_cache' => false, // set false if not reading lots of meta
                      'update_post_term_cache' => false,
                      "meta_query"             => [
                        [
                          "relation" => "OR",
                          [
                            "key"     => "_wp_page_template",
                            "value"   => "episode-detail.php",
                            "compare" => "=",
                          ],
                          [
                            "key"     => "_wp_page_template",
                            "value"   => "webinar-detail.php",
                            "compare" => "=",
                          ],
                          [
                            "key"     => "_wp_page_template",
                            "value"   => "livestream-detail.php",
                            "compare" => "=",
                          ],
                        ],
                      ],
                      "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
                    ];
                    $post_args  = [
                      "post_type"              => "post",
                      "post_status"            => "publish",
                      "posts_per_page"         => - 1,
                      "offset"                 => 0,
                      'no_found_rows'          => true,  // set true if not paginating
                      'update_post_meta_cache' => false, // set false if not reading lots of meta
                      'update_post_term_cache' => false,
                      "tax_query"              => [
                        [
                          "taxonomy" => "category",
                          "field"    => "name",
                          "terms"    => [ "Podcast Episode", ],
                          "operator" => "IN",
                        ],
                      ],
                      "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
                    ];
                    $page_query = new WP_Query( $page_args );
                    $post_query = new WP_Query( $post_args );

                    $post_ids = [];
                    if ( $page_query->have_posts() ) {
                      $post_ids = array_merge( $post_ids, wp_list_pluck( $page_query->posts, 'ID' ) );
                    }
                    if ( $post_query->have_posts() ) {
                      $post_ids = array_merge( $post_ids, wp_list_pluck( $post_query->posts, 'ID' ) );
                    }

                    $default_args = [
                      "post_type"      => [ "page", "post" ],
                      "post_status"    => "publish",
                      "posts_per_page" => 2,
                      "offset"         => 0,
                      "post__in"       => $post_ids,
                      "post__not_in"   => [ $postId ],
                      "orderby"        => "rand", // random order
                    ];
                  }
                }
                $q = new WP_Query( $default_args );

                if ( $q->have_posts() ): ?>
                  <?php
                  while ( $q->have_posts() ):
                    $q->the_post(); ?>
                    <a href="<?= get_permalink( $q->post->ID ) . '?category=' . $categorySlug; ?>"
                       class="relative w-full group">
                      <div class="relative flex flex-col justify-between gap-20 h-full">
                        <div class="w-full">
                          <div class="mb-28">
                            <div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
                              <img
                                src="<?php
                                echo get_the_post_thumbnail_url( $q->post->ID, 'thumbnail' )
                                  ? get_the_post_thumbnail_url( $q->post->ID, 'thumbnail' )
                                  : get_stylesheet_directory_uri() .
                                    "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
                                loading="lazy" alt="" class="image relative opacity-90">
                              <?php
                              $terms = get_the_terms( $q->post->ID, "post_tag" );
                              if ( ! is_wp_error( $terms ) && ! empty( $terms ) ) {
                                $first = array_values( $terms )[0]; ?>
                                <div class="absolute absolute--tl p-24 flex items-center justify-center">
                                  <div class="relative rounded-full overflow-hidden py-4 px-8">
                                    <div
                                      class="relative font-semibold uppercase text-2xs text-textcolor lh-normal z-10">
                                      <?php
                                      echo $first->name; ?>
                                    </div>
                                    <div class="absolute absolute--full bg-white"></div>
                                  </div>
                                </div>
                                <?php
                              }
                              ?>
                            </div>
                          </div>
                          <div class="mb-12">
                            <div class="flex items-center gap-32 sm:flex-wrap sm:gap-8">
                              <div class="flex items-center gap-8">
                                <div class="font-family-secondary text-sm capitalize">
                                  <?php
                                  echo $categoryResultName ?? 'Podcast'; ?>
                                </div>
                              </div>
                              <div class="flex items-center gap-8 text-sm font-light font-family-secondary">
                                <div><?php
                                  echo get_the_date( "F j, Y", $q->post->ID ); ?></div>
                                <!--<div>•</div>
                                <div>6 min 25 sec</div>-->
                              </div>
                            </div>
                          </div>
                          <h3 class="font-semibold text-lg" scn-text-limit="2"><?php
                            the_title(); ?></h3>
                        </div>
                        <div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
                          <?php
                          if ( get_the_excerpt( $q->post->ID ) ) {
                            the_excerpt();
                          } ?>
                        </div>
                      </div>
                    </a>
                  <?php
                  endwhile;
                  wp_reset_postdata();
                  ?>
                <?php
                endif;
                ?>
              </div>
              <div>
                <?php
                echo get_template_part( "components/ui/btn", null, [
                  "text"  => "More " . $categoryResultName,
                  "link"  => "/" . $categorySlug,
                  "style" => "primary",
                  "class" => "",
                  /*'attributes' => [
                    'target' => '_blank',
                    'rel' => 'noopener noreferrer',
                  ],*/
                ] ); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>