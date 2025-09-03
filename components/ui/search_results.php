<?php

// Read query params (component only; no header/footer)
$search_query = isset( $_GET['s'] ) ? sanitize_text_field( wp_unslash( $_GET['s'] ) ) : '';
// Support custom param `search` when using in-page search (avoids WP search routing)
if ( $search_query === '' && isset( $_GET['search'] ) ) {
  $search_query = sanitize_text_field( wp_unslash( $_GET['search'] ) );
}
$industries = isset( $_GET['industries'] ) ? sanitize_text_field( wp_unslash( $_GET['industries'] ) ) : '';

// Early return if no filters/search so this component can be included anywhere safely
if ( $search_query === '' && $industries === '' && ( is_singular( 'brands' ) && ! isset( $_GET['taxonomy'] ) ) ) {
  return;
}

$post_type    = $args['post_type'] ?? 'page';
$resource_hub = $args['resource_hub'] ?? false;
$media_type   = $args['media_type'] ?? ''; // 'podcasts-and-livestreams' || 'podcasts' || 'webinars' || 'livestreams'

$pageId = get_the_ID();

// Determine current page for pagination
$paged = (int) get_query_var( 'paged' );
if ( $paged < 1 ) {
  $paged = isset( $_GET['paged'] ) ? max( 1, (int) $_GET['paged'] ) : 1;
}

// Extracts brand slug from URL
$brand_name = get_post_field( 'post_name', get_the_ID() );

// Build query only if there is something to search/filter
$results_query = null;
if ( $search_query !== '' || $industries !== '' || ( is_singular( 'brands' ) && isset( $_GET['taxonomy'] ) ) ) {
  $taxonomy = isset( $_GET['taxonomy'] ) ? sanitize_key( $_GET['taxonomy'] ) : 'post_tag';

  $args = [
    'post_type'              => $post_type,            // try 'any' to test
    'post_status'            => 'publish',
    's'                      => $search_query,     // from ?search=
    'posts_per_page'         => 9,
    'paged'                  => $paged,
    'search_columns'         => [ 'post_title', 'post_content' ],
    'suppress_filters'       => true,               // critical: ignore posts_where/posts_search filters
    'update_post_meta_cache' => false, // set false if not reading lots of meta
    'update_post_term_cache' => false,
    "meta_query"             => [
      "relation" => "AND",
      [
        'key'     => '_wp_page_template',
        'value'   => [ 'episode-detail.php', 'webinar-detail.php', 'livestream-detail.php' ],
        'compare' => 'IN',
        'type'    => 'CHAR',
      ],
    ],
    "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ], //'rand',
  ];

  if ( $media_type !== '' && $media_type == 'podcasts-and-livestreams' ) {
    $args['meta_query'] = [
      "relation" => "AND",
      [
        'key'     => '_wp_page_template',
        'value'   => [ 'episode-detail.php', 'livestream-detail.php' ],
        'compare' => 'IN',
        'type'    => 'CHAR',
      ],
    ];
  }

  if ( $media_type !== '' && $media_type == 'podcasts' ) {
    $args['meta_query'] = [
      "relation" => "AND",
      [
        'key'     => '_wp_page_template',
        'value'   => [ 'episode-detail.php' ],
        'compare' => 'IN',
        'type'    => 'CHAR',
      ],
    ];
  }

  if ( $media_type !== '' && $media_type == 'webinars' ) {
    $args['meta_query'] = [
      "relation" => "AND",
      [
        'key'     => '_wp_page_template',
        'value'   => [ 'webinar-detail.php' ],
        'compare' => 'IN',
        'type'    => 'CHAR',
      ],
    ];
  }

  if ( $media_type !== '' && $media_type == 'livestreams' ) {
    $args['meta_query'] = [
      "relation" => "AND",
      [
        'key'     => '_wp_page_template',
        'value'   => [ 'livestream-detail.php' ],
        'compare' => 'IN',
        'type'    => 'CHAR',
      ],
    ];
  }

  if ( $industries !== '' ) {
    $args['tax_query'] = [
      [
        'taxonomy'         => $taxonomy,
        'field'            => 'name',
        'terms'            => [ $industries ],
        'include_children' => false,
      ],
    ];
  }

  if ( $resource_hub ) {
    $args['meta_query']  = [];
    $args['tax_query'][] = [
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => [
        'blog-post',
        'guest-post',
        'white-paper',
        'ebook',
        'article',
        'weekly-summary',
        'news',
        'guide',
      ],
      'operator' => 'IN',
    ];
    $args['tax_query'][] = [
      'taxonomy' => 'category',
      'field'    => 'slug',
      'terms'    => [ 'podcast-episode' ],
      'operator' => 'NOT IN',
    ];
  }

  $results_query = new WP_Query( $args );

  if ( is_singular( 'brands' ) ) {
    $brands_page_args = [
      'post_type'              => 'page',            // try 'any' to test
      'post_status'            => 'publish',
      's'                      => $search_query,     // from ?search=
      'posts_per_page'         => - 1,
      'search_columns'         => [ 'post_title', 'post_content' ],
      'suppress_filters'       => true,               // critical: ignore posts_where/posts_search filters
      'update_post_meta_cache' => false, // set false if not reading lots of meta
      'update_post_term_cache' => false,
      "meta_query"             => [
        "relation" => "AND",
        [
          'key'     => '_wp_page_template',
          'value'   => [ 'episode-detail.php', 'webinar-detail.php', 'livestream-detail.php' ],
          'compare' => 'IN',
          'type'    => 'CHAR',
        ],
        [
          'relation' => 'OR',
          [
            'key'     => 'select_programs',
            'value'   => '"' . (int) $pageId . '"',
            'compare' => 'LIKE',
            'type'    => 'CHAR',
          ],
          [
            'key'     => 'select_programs_for_webinar',
            'value'   => '"' . (int) $pageId . '"',
            'compare' => 'LIKE',
            'type'    => 'CHAR',
          ],
          [
            'key'     => 'select_programs_for_livestream',
            'value'   => '"' . (int) $pageId . '"',
            'compare' => 'LIKE',
            'type'    => 'CHAR',
          ],
        ],
      ],
      "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ], //'rand',
    ];
    $brands_post_args = [
      'post_type'              => "post",            // try 'any' to test
      'post_status'            => 'publish',
      's'                      => $search_query,     // from ?search=
      'posts_per_page'         => - 1,
      'search_columns'         => [ 'post_title', 'post_content' ],
      'suppress_filters'       => true,               // critical: ignore posts_where/posts_search filters
      'update_post_meta_cache' => false, // set false if not reading lots of meta
      'update_post_term_cache' => false,
      "tax_query"              => [
        [
          "taxonomy" => "category",
          "field"    => "slug",
          "terms"    => [ $brand_name ],
          "operator" => "IN",
        ],
      ],
      "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
    ];

    if ( $industries !== '' ) {
      $brands_page_args['tax_query']   = [
        [
          'taxonomy'         => $taxonomy,
          'field'            => 'name',
          'terms'            => [ $industries ],
          'include_children' => false,
        ],
      ];
      $brands_post_args['tax_query'][] = [
        [
          'taxonomy'         => $taxonomy,
          'field'            => 'name',
          'terms'            => [ $industries ],
          'include_children' => false,
        ],
      ];
    }

    $brands_page_query = new WP_Query( $brands_page_args );
    $brands_post_query = new WP_Query( $brands_post_args );

    $post_ids = [];
    if ( $brands_page_query->have_posts() ) {
      $post_ids = array_merge( $post_ids, wp_list_pluck( $brands_page_query->posts, 'ID' ) );
    }
    if ( $brands_post_query->have_posts() ) {
      $post_ids = array_merge( $post_ids, wp_list_pluck( $brands_post_query->posts, 'ID' ) );
    }

    $brands_args = [
      'post_type'      => [ 'page', 'post' ],
      'post_status'    => 'publish',
      //'s'                      => $search_query,     // from ?search=
      'posts_per_page' => 9,
      'paged'          => $paged,
      'search_columns' => [ 'post_title', 'post_content' ],
      "post__in"       => $post_ids,
      //'suppress_filters'       => true,               // critical: ignore posts_where/posts_search filters
      //'update_post_meta_cache' => false, // set false if not reading lots of meta
      //'update_post_term_cache' => false,
    ];

    $brands_args = array_merge( $brands_args );

    $results_query = new WP_Query( $brands_args );
  }
}

?>
<section class="section">
  <div class="site-padding sm:py-60 pb-60">
    <div class="max-w-1252 mx-auto">
      <?php
      if ( $results_query instanceof WP_Query ) : ?>
        <div class="mb-52">
          <div class="mb-20">
            <h2 class="text-center">Search Results</h2>
          </div>
          <?php
          get_template_part(
            'components/line-with-blinking-dot',
            null,
            [
              'maxWidthClassnames' => ''
            ]
          );
          ?>
        </div>
        <?php
        if ( $results_query->have_posts() ) : ?>
          <div class="mb-60 grid gap-32 gap-y-60 grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            <?php
            while ( $results_query->have_posts() ) :
              $results_query->the_post();
              $selectMediaType = get_field( "select_media_type", $results_query->post->ID );
              ?>
              <a href="<?php
              the_permalink( $results_query->post->ID ); ?>" class="relative w-full group <?php
              echo $classNames; ?>">
                <div class="relative flex flex-col justify-between gap-20 h-full">
                  <div class="w-full">
                    <div class="mb-28">
                      <div class="overflow-hidden rounded-12 relative h-222 bg-cargogrey">
                        <img
                          src="<?php
                          echo get_the_post_thumbnail_url( $results_query->post->ID )
                            ? get_the_post_thumbnail_url( $results_query->post->ID, 'medium_large' )
                            : get_stylesheet_directory_uri() .
                              "/assets/img/misc/default-card-img-thumbnail.avif"; ?>"
                          loading="lazy" alt="" class="image relative opacity-90">
                        <?php
                        $terms = get_the_terms( $results_query->post->ID, "tags" );
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
                            <?php
                            echo get_the_date( "F j, Y", $results_query->post->ID ); ?>
                          </div>
                          <!--<div>•</div>
                          <div>6 min 25 sec</div>-->
                        </div>
                      </div>
                    </div>
                    <h3 class="font-semibold text-lg" scn-text-limit="2">
                      <?php
                      the_title(); ?>
                    </h3>
                  </div>
                  <div class="w-full tracking-[1.4px] text-sm" scn-text-limit="3">
                    <?php
                    if ( get_the_excerpt( $results_query->post->ID ) ) {
                      the_excerpt();
                    } elseif ( get_field( "livestream_description", $results_query->post->ID ) ) {
                      the_field( "livestream_description", $results_query->post->ID );
                    } elseif ( get_field( "episode_summary", $results_query->post->ID ) ) {
                      the_field( "episode_summary", $results_query->post->ID );
                    } elseif ( get_field( "webinar_description", $results_query->post->ID ) ) {
                      the_field( "webinar_description", $results_query->post->ID );
                    } ?>
                  </div>
                </div>
              </a>
            <?php
            endwhile; ?>
          </div>
          <?php
          // Debug: Output current $_GET to understand the corruption
          if ( current_user_can( 'administrator' ) ) {
            echo '<!-- DEBUG $_GET: ' . print_r( $_GET, true ) . ' -->';
          }

          $big = 999999999; // unlikely integer

          // Build pagination arguments manually from clean values
          $add_args = [];
          if ( $search_query !== '' ) {
            $add_args['search'] = $search_query;
          }
          if ( $industries !== '' ) {
            $add_args['industries'] = $industries;
          }
          // Only add taxonomy if it exists and doesn't contain HTML entities
          if ( isset( $_GET['taxonomy'] ) && strpos( $_GET['taxonomy'], '#038;' ) === false ) {
            $add_args['taxonomy'] = sanitize_key( $_GET['taxonomy'] );
          }
          // Custom pagination to avoid WordPress URL corruption issues
          $total_pages = (int) $results_query->max_num_pages;
          if ( $total_pages > 1 ) {
            $current_url  = strtok( $_SERVER["REQUEST_URI"], '?' );
            $query_string = http_build_query( $add_args );

            echo '<div class="pagination mt-24">';

            // Previous link
            if ( $paged > 1 ) {
              $prev_page = $paged - 1;
              $prev_url  = $current_url . '?paged=' . $prev_page;
              if ( $query_string ) {
                $prev_url .= '&' . $query_string;
              }
              echo '<a href="' . esc_url( $prev_url ) . '">« Prev</a> ';
            }

            // Page numbers with smart pagination
            $range      = 2; // Show 2 pages before and after current page
            $start_page = max( 1, $paged - $range );
            $end_page   = min( $total_pages, $paged + $range );

            // Show first page and ellipsis if needed
            if ( $start_page > 1 ) {
              $page_url = $current_url . '?paged=1';
              if ( $query_string ) {
                $page_url .= '&' . $query_string;
              }
              echo '<a href="' . esc_url( $page_url ) . '">1</a> ';

              if ( $start_page > 2 ) {
                echo '<span>…</span> ';
              }
            }

            // Show page range around current page
            for ( $i = $start_page; $i <= $end_page; $i ++ ) {
              $page_url = $current_url . '?paged=' . $i;
              if ( $query_string ) {
                $page_url .= '&' . $query_string;
              }

              if ( $i == $paged ) {
                echo '<span class="current">' . $i . '</span> ';
              } else {
                echo '<a href="' . esc_url( $page_url ) . '">' . $i . '</a> ';
              }
            }

            // Show ellipsis and last page if needed
            if ( $end_page < $total_pages ) {
              if ( $end_page < $total_pages - 1 ) {
                echo '<span class="text-primary">…</span> ';
              }

              $page_url = $current_url . '?paged=' . $total_pages;
              if ( $query_string ) {
                $page_url .= '&' . $query_string;
              }
              echo '<a href="' . esc_url( $page_url ) . '">' . $total_pages . '</a> ';
            }

            // Next link
            if ( $paged < $total_pages ) {
              $next_page = $paged + 1;
              $next_url  = $current_url . '?paged=' . $next_page;
              if ( $query_string ) {
                $next_url .= '&' . $query_string;
              }
              echo '<a href="' . esc_url( $next_url ) . '">Next »</a>';
            }

            echo '</div>';
          }
          wp_reset_postdata();
          ?>
        <?php
        else : ?>
          <p class="text-center">No results found.</p>
        <?php
        endif; ?>
      <?php
      endif; ?>
    </div>
  </div>
</section>