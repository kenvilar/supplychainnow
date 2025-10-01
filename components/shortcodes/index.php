<?php

// Include custom [btn] shortcode file
$scn_btn_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/btn.php';
if ( file_exists( $scn_btn_shortcode_file ) ) {
	require_once $scn_btn_shortcode_file;
}

// Include custom [hero_slider] shortcode file
$scn_hero_slider_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/hero-slider.php';
if ( file_exists( $scn_hero_slider_shortcode_file ) ) {
	require_once $scn_hero_slider_shortcode_file;
}

// Include custom [heading_separator] shortcode file
$scn_heading_separator_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/heading-separator.php';
if ( file_exists( $scn_heading_separator_shortcode_file ) ) {
	require_once $scn_heading_separator_shortcode_file;
}

// Include custom [home_featured_content] shortcode file
$scn_home_featured_content_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/featured-content.php';
if ( file_exists( $scn_home_featured_content_shortcode_file ) ) {
	require_once $scn_home_featured_content_shortcode_file;
}

// Include custom [latest_podcast_episodes] shortcode file
$scn_latest_podcast_episodes_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/latest-podcast-episodes.php';
if ( file_exists( $scn_latest_podcast_episodes_shortcode_file ) ) {
	require_once $scn_latest_podcast_episodes_shortcode_file;
}

// Include custom [home_recent_webinars_slider] shortcode file
$scn_recent_webinars_slider_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/recent-webinars-slider.php';
if ( file_exists( $scn_recent_webinars_slider_shortcode_file ) ) {
	require_once $scn_recent_webinars_slider_shortcode_file;
}

// Include custom [home_network_partners_cards] shortcode file
$scn_network_partners_cards_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/network-partners-cards.php';
if ( file_exists( $scn_network_partners_cards_shortcode_file ) ) {
	require_once $scn_network_partners_cards_shortcode_file;
}

// Include custom [home_testimonial_slider] shortcode file
$scn_home_testimonial_slider_shortcode_file = get_stylesheet_directory() . '/components/shortcodes/home/home_testimonial_slider.php';
if ( file_exists( $scn_home_testimonial_slider_shortcode_file ) ) {
	require_once $scn_home_testimonial_slider_shortcode_file;
}