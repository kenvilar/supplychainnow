<?php

$postId           = get_the_ID();
$featured_content = get_field( 'featured_content', $postId )
?>
<section class="section">
  <div class="site-padding sm:py-60 py-88">
    <div class="max-w-1252 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center">Featured Content</h2>
        </div>
        <?php
        get_template_part( 'components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ] );
        ?>
      </div>
      <div class="mb-48">
        <div class="flex justify-center gap-28 sm:flex-col">
          <?php
          if ( $featured_content ) {
            foreach ( $featured_content as $index => $item ) {
              $post = $item['featured_content'];
              echo get_template_part( 'components/ui/card1', null, [
                'q'             => [
                  'post__in' => [ $post->ID ],
                ],
                'q_post'        => [
                  'post__in' => [ $post->ID ],
                ],
                "post_per_page" => 1,
                'attributes'    => [],
                'classNames'    => '',
              ] );
              if ( $index == 1 ) {
                break;
              }
            }
          }
          /*echo get_template_part('components/ui/card1', null, [
            'attributes' => [],
            'classNames' => '',
          ]);*/
          ?>
        </div>
      </div>
      <div class="mb-64">
        <div class="grid grid-cols-3 justify-center gap-32 sm:grid-cols-2 xs:grid-cols-1">
          <?php
          if ( $featured_content ) {
            foreach ( $featured_content as $index => $item ) {
              if ( $index > 1 ) {
                $post = $item['featured_content'];
                echo get_template_part( 'components/ui/card1', null, [
                  'q'             => [
                    'post__in' => [ $post->ID ],
                  ],
                  'q_post'        => [
                    'post__in' => [ $post->ID ],
                  ],
                  "post_per_page" => 1,
                  'card_size'     => 'small',
                  'attributes'    => [],
                  'classNames'    => '',
                ] );
              }
            }
          }
          /*echo get_template_part( 'components/ui/card1', null, [
            "post_per_page" => 3,
            'offset'        => 2,
            'card_size'     => 'small',
            'attributes'    => [],
            'classNames'    => '',
          ] );*/
          ?>
        </div>
      </div>
      <div class="flex justify-center gap-12 sm:flex-col">
        <?php
        echo get_template_part( 'components/ui/btn', null, [
          'text'  => 'Browse All Podcasts',
          'link'  => '/podcasts-and-livestreams',
          'style' => 'secondary',
          'class' => '',
          /*'attributes' => [
            'target' => '_blank',
            'rel'    => 'noopener noreferrer',
          ],*/
        ] );
        echo get_template_part( 'components/ui/btn', null, [
          'text'  => 'Browse All Webinars',
          'link'  => '/webinars',
          'style' => 'secondary-outline',
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
</section>