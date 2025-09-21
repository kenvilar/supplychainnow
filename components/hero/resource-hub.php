<?php

$pageID     = get_the_ID();
$page_title = esc_html( get_field( 'Page_Title', $pageID ) ?: 'Explore Our Resource Hub' );
$icon       = esc_url( get_field( 'Icon',
	$pageID ) ?: get_stylesheet_directory_uri() . '/assets/img/icons/3by3.svg' );
$hide_icon  = get_field( 'Hide_Icon', $pageID ) ?: false;
?>
<section class="section bg-cargogrey text-white rounded-b-100 sm:rounded-b-none">
	<div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
		<div class="w-layout-blockcontainer pt-20 w-container text-center max-w-680">
			<div class="mb-20 <?= $hide_icon ? 'hidden' : '' ?>">
				<img
					class="size-53 mx-auto"
					src="<?= $icon; ?>"
					loading="lazy" alt="3by3">
			</div>
			<div class="mb-16">
				<h1><?= $page_title; ?></h1>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full">
		<img
			src="<?php
			if ( get_field( 'Hero_Image', $pageID ) ) {
				echo get_field( 'Hero_Image', $pageID );
			} elseif ( is_page( 'resource-hub' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub.avif';
			} elseif ( is_page( 'blog' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-blogs.avif';
			} elseif ( is_page( 'white-paper' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-white-papers.avif';
			} elseif ( is_page( 'ebook' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-ebooks.avif';
			} elseif ( is_page( 'article' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-articles.avif';
			} elseif ( is_page( 'news' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-news.avif';
			} elseif ( is_page( 'guide' ) ) {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub-guides.avif';
			} else {
				echo get_stylesheet_directory_uri() . '/assets/img/hero-img/hero--resource-hub.avif';
			}
			?>"
			loading="lazy" alt="hero--resource hub" class="image opacity-10">
	</div>
</section>
