<?php

$tabNumber = $args['tabNumber'] ?? 1;
?>
<section class="section">
	<div class="site-padding py-0">
		<div class="w-layout-blockcontainer max-w-full w-container">
			<div class="flex justify-center items-center sm:flex-col">
				<a href="/resource-hub" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 1 ? 'w--current' : ''; ?>">
					<div>All Content</div>
				</a>
				<a href="/blog" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 2 ? 'w--current' : ''; ?>">
					<div>Blog</div>
				</a>
				<a href="/white-paper" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 3 ? 'w--current' : ''; ?>">
					<div>White Paper</div>
				</a>
				<a href="/ebook" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 4 ? 'w--current' : ''; ?>">
					<div>E-Book</div>
				</a>
				<a href="/article" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 5 ? 'w--current' : ''; ?>">
					<div>Article</div>
				</a>
				<a href="/news" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 6 ? 'w--current' : ''; ?>">
					<div>News</div>
				</a>
				<a href="/guide" class="resource-hub-link w-inline-block <?php
				echo $tabNumber == 7 ? 'w--current' : ''; ?>">
					<div>Guide</div>
				</a>
			</div>
		</div>
	</div>
	<div class="w-full h-1 bg-cargogrey/25 opacity-75 sm:display-none"></div>
</section>
