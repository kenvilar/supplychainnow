<?php

$pageID                    = get_the_ID();
$site_padding              = $args["site_padding"] ?? "";
$featured_content_webinars = get_field( 'featured_content_webinars', $pageID );
$section                   = get_field( 'Featured_Webinars_Section', $pageID );
$title                     = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Featured Webinars' );
?>
<section class="section">
  <div class="site-padding sm:py-60 pb-80 <?php
  echo esc_attr( $site_padding ); ?>">
    <div class="w-layout-blockcontainer max-w-1372 relative w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <?php
        get_template_part( "components/line-with-blinking-dot" ); ?>
      </div>
      <div class="w-layout-blockcontainer max-w-1252 w-container">
        <div class="w-dyn-list">
          <div role="list" class="flex justify-center gap-28 sm:flex-col w-dyn-items">
            <?php
            if ( $featured_content_webinars ) {
              foreach ( $featured_content_webinars as $index => $item ) {
                $post = $item['featured_content_webinars'];
                echo get_template_part( 'components/ui/card1', null, [
                  'q'             => [
                    'post__in'   => [ $post->ID ],
                    "meta_query" => [
                      [
                        "relation" => "AND",
                        [
                          'key'     => '_wp_page_template',
                          'value'   => [ 'webinar-detail.php' ],
                          'compare' => 'IN',
                          'type'    => 'CHAR',
                        ],
                      ],
                    ],
                  ],
                  'q_post'        => [
                    'post__in' => [ $post->ID ],
                  ],
                  "post_per_page" => 1,
                  'attributes'    => [],
                  'post_type'     => [ 'page' ],
                  'classNames'    => '',
                ] );
                if ( $index == 1 ) {
                  break;
                }
              }
            }
            /*echo get_template_part( "components/ui/card1", null, [
              'q'             => [
                "post_type"              => "page",
                "post_status"            => "publish",
                "offset"                 => 0,
                'no_found_rows'          => true,  // set true if not paginating
                'update_post_meta_cache' => false, // set false if not reading lots of meta
                'update_post_term_cache' => false,
                "meta_query"             => [
                  [
                    "relation" => "AND",
                    [
                      'key'     => '_wp_page_template',
                      'value'   => [ 'webinar-detail.php' ],
                      'compare' => 'IN',
                      'type'    => 'CHAR',
                    ],
                  ],
                ],
                "orderby"                => [ "menu_order" => "ASC", "date" => "DESC" ],
              ],
              'q_post'        => [],
              'post_per_page' => 2,
              'post_type'     => [ 'page' ],
              "attributes"    => [],
              "classNames"    => "",
              "noItemsFound"  => "",
            ] );*/
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>