<?php

$pageID  = get_the_ID();
$section = get_field( 'Where_We_Give_Section', $pageID );
$title   = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Where We Give' );
?>
<section class="section">
  <div class="site-padding sm:py-60 py-76">
    <div class="w-layout-blockcontainer max-w-1252 w-container">
      <div class="mb-44">
        <div class="mb-20">
          <h2 class="text-center"><?= $title; ?></h2>
        </div>
        <?php
        get_template_part( 'components/line-with-blinking-dot', null, [
          'maxWidthClassnames' => ''
        ] );
        ?>
      </div>
      <div class="mb-44">
        <div class="w-layout-blockcontainer max-w-612 w-container">
          <div class="text-center tracking-[1.6px]">
            <?php
            if ( ! empty( $section['Description'] ) ):
              echo $section['Description'];
            else:
              ?>
              <p>
                We believe in the power of generosity to drive meaningful impact. With a
                commitment to sharing our resources, time, and expertise, we aim to make a difference wherever we are.
                Through genuine, purposeful action, we strive to be the change that is needed in the world today.
                <br>
                <br>
                <strong>Here are just a few of the organizations we support:</strong>
              </p>
            <?php
            endif;
            ?>
          </div>
        </div>
      </div>
      <div>
        <div class="flex flex-wrap gap-20 justify-center">
          <?php
          echo do_shortcode( '[about_organizations_we_support]' );
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
