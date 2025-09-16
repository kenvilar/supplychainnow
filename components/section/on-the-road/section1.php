<?php

$pageID  = get_the_ID();
$section = get_field( 'Embed_Codes_Section', $pageID );
?>
<section class="section">
  <div class="site-padding sm:py-60 py-76">
    <div class="w-layout-blockcontainer max-w-1252 w-container">
      <div class="overflow-hidden rounded-12">
        <?php
        if ( ! empty( $section['Embed_Codes'] ) ):
          echo $section['Embed_Codes'];
        else:
          ?>
          <!--Upcoming events:-->
          <script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
                  data-height="auto"
                  data-url="https://gateway.on24.com/wcc/eh/4818584/category/144749/upcoming-events"></script>
          <!--Past events:-->
          <script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
                  data-height="auto"
                  data-url="https://gateway.on24.com/wcc/eh/4818584/category/143076/past-events"></script>
        <?php
        endif;
        ?>
        <!--<script src="https://gateway.on24.com/view/orion/engagement-hub/dist/embed/embed.js" data-width="100%"
                data-height="auto"
                data-url="https://gateway.on24.com/wcc/eh/4818584/category/143076/on-site-events"></script>-->
      </div>
    </div>
  </div>
</section>
