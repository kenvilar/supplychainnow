<?php

if ( ! function_exists( 'brands_produced_by_supply_chain_now_cards_shortcode' ) ) {
  function brands_produced_by_supply_chain_now_cards_shortcode( $atts = [] ) {
    $pageID  = get_the_ID();
    $section = get_field( 'Also_Produced_by_Supply_Chain_Now_Section', $pageID );
    ob_start();
    ?>
    <div role="list" class="grid grid-cols-3 gap-32 md:grid-cols-2 sm:grid-cols-1 w-dyn-items">
      <?php
      if ( ! empty( $section['Item_List_Repeater'] ) ):
        foreach ( $section['Item_List_Repeater'] as $index => $item ):
          $item = $item['Item'];
          ?>
          <a href="<?php
          the_permalink( $item ); ?>"
             class="w-full overflow-hidden rounded-24 hover-shadow2 w-inline-block">
            <div class="h-396 sm:h-auto">
              <img
                src="<?php
                if ( get_field( 'program_thumbnail_image_upload', $item ) ) {
                  echo get_field( 'program_thumbnail_image_upload', $item );
                } else {
                  echo get_the_post_thumbnail_url( $item );
                }
                ?>"
                loading="lazy" alt="Supply Chain is Boring" class="image">
            </div>
          </a>
        <?php
        endforeach;
      else:
        $defaults_args = [
          "post_type"              => "brands",
          "post_status"            => "publish",
          "posts_per_page"         => 6,
          "offset"                 => 0,
          'no_found_rows'          => true,  // set true if not paginating
          'update_post_meta_cache' => false, // set false if not reading lots of meta
          'update_post_term_cache' => false,
          'post_name__in'          => [
            'supply-chain-is-boring',
            'digital-transformers',
            'veteran-voices',
            'business-history',
            'tektok',
            'techquila-sunrise'
          ],
          "orderby"                => [ "post_name__in" => 'ASC' ],
        ];

        $q = new WP_Query( $defaults_args );
        if ( $q->have_posts() ): ?>
          <?php
          while ( $q->have_posts() ):
            $q->the_post();
            ?>
            <a href="<?php
            the_permalink( $q->ID ); ?>"
               class="w-full overflow-hidden rounded-24 hover-shadow2 w-inline-block">
              <div class="h-396 sm:h-200">
                <img
                  src="<?php
                  if ( get_field( 'program_thumbnail_image_upload', $q->ID ) ) {
                    echo get_field( 'program_thumbnail_image_upload', $q->ID );
                  } else {
                    echo get_the_post_thumbnail_url( $q->ID );
                  }
                  ?>"
                  loading="lazy" alt="Supply Chain is Boring" class="image">
              </div>
            </a>
          <?php
          endwhile;
          wp_reset_postdata();
          ?>
        <?php
        else:
          echo '<p class="w-full text-center">No items were found.</p>';
        endif;
      endif;
      ?>
    </div>
    <?php
    return ob_get_clean();
  }
}

add_action( 'init', function () {
  add_shortcode( 'brands_produced_by_supply_chain_now_cards', 'brands_produced_by_supply_chain_now_cards_shortcode' );
} );