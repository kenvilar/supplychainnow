<?php

$tabNumber = $args["tabNumber"] ?? 1;
?>
<section class="section">
  <div class="site-padding py-0">
    <div class="w-layout-blockcontainer max-w-full w-container">
      <div class="flex justify-center xs:flex-col">
        <a href="/on-demand-programming" class="on-demand-programming-link w-inline-block
				<?php
        echo $tabNumber ==
             1
          ? "w--current"
          : ""; ?>">
          <div>All Content</div>
        </a>
        <a href="/podcasts-and-livestreams" class="on-demand-programming-link w-inline-block
				<?php
        echo $tabNumber ==
             2
          ? "w--current"
          : ""; ?>">
          <div>Podcasts &amp; Livestreams</div>
        </a>
        <a href="/webinars" class="on-demand-programming-link w-inline-block
				<?php
        echo $tabNumber ==
             3
          ? "w--current"
          : ""; ?>">
          <div>Webinars</div>
        </a>
      </div>
    </div>
  </div>
  <div class="w-full h-1 bg-cargogrey/25 opacity-75 xs:display-none"></div>
</section>