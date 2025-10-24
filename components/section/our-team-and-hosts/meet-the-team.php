<?php

$postId  = get_the_ID();
$section = get_field( 'Meet_the_Team_Section', $postId );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Meet the Team' );

?>
<div class="gradient1 rounded-100 sm:rounded-none">
  <section class="section text-white">
    <div class="site-padding sm:py-60 py-80">
      <div class="w-layout-blockcontainer max-w-1252 sm:text-center w-container">
        <div class="mb-44">
          <div class="mb-20">
            <h2 class="text-center"><?= $title; ?></h2>
          </div>
          <?php
          get_template_part( 'components/line-with-blinking-dot', null, [
            'maxWidthClassnames' => 'bg-white/25'
          ] );
          ?>
        </div>
        <?php
        echo do_shortcode( '[our_team_and_hosts_meet_the_team]' );
        ?>
      </div>
    </div>
</div>
</section>
</div>
