<?php

?>
<section class="section">
  <div class="site-padding sm:py-60 py-88">
    <div class="max-w-1252 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center">Featured Content</h2>
        </div>
        <?php
        get_template_part('components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ]);
        ?>
      </div>
      <div class="mb-48">
        <div class="flex justify-center gap-28 sm:flex-col">
          <?php
          echo get_template_part('components/ui/card1', null, [
            'attributes' => [],
            'classNames' => '',
          ]);
          ?>
        </div>
      </div>
      <div class="mb-64">
        <div class="flex justify-center gap-32 sm:flex-col">
          <?php
          echo get_template_part('components/ui/card1', null, [
            "post_per_page" => 3,
            'offset' => 2,
            'card_size' => 'small',
            'attributes' => [],
            'classNames' => '',
          ]);
          ?>
        </div>
      </div>
      <div class="flex justify-center gap-12 sm:flex-col">
        <?php
        echo get_template_part('components/ui/btn', null, [
          'text' => 'Browse All Podcasts',
          'link' => '/podcasts-and-livestreams',
          'style' => 'secondary',
          'class' => '',
          /*'attributes' => [
            'target' => '_blank',
            'rel'    => 'noopener noreferrer',
          ],*/
        ]);
        echo get_template_part('components/ui/btn', null, [
          'text' => 'Browse All Webinars',
          'link' => '/webinars',
          'style' => 'secondary-outline',
          'class' => '',
          /*'attributes' => [
            'target' => '_blank',
            'rel'    => 'noopener noreferrer',
          ],*/
        ]);
        ?>
      </div>
    </div>
  </div>
</section>