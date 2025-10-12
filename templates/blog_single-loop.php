<?php

//$bridge_qode_options = bridge_qode_return_global_options();
$bridge_qode_options            = [];
$bridge_qode_blog_hide_comments = "";
if ( isset( $bridge_qode_options['blog_hide_comments'] ) ) {
  $bridge_qode_blog_hide_comments = $bridge_qode_options['blog_hide_comments'];
}
$bridge_qode_blog_share_like_layout = 'in_post_info';
if ( isset( $bridge_qode_options['blog_share_like_layout'] ) ) {
  $bridge_qode_blog_share_like_layout = $bridge_qode_options['blog_share_like_layout'];
}
$bridge_qode_enable_social_share = 'no';
if ( isset( $bridge_qode_options['enable_social_share'] ) ) {
  $bridge_qode_enable_social_share = $bridge_qode_options['enable_social_share'];
}
$bridge_qode_blog_author_info = "no";
if ( isset( $bridge_qode_options['blog_author_info'] ) ) {
  $bridge_qode_blog_author_info = $bridge_qode_options['blog_author_info'];
}
$bridge_qode_like = "on";
if ( isset( $bridge_qode_options['qode_like'] ) ) {
  $bridge_qode_like = $bridge_qode_options['qode_like'];
}

if ( function_exists( 'bridge_qode_check_gallery_post_layout' ) ) {
  $bridge_qode_gallery_post_layout = bridge_qode_check_gallery_post_layout( get_the_ID() );
}

$bridge_qode_params = array(
  'blog_share_like_layout' => $bridge_qode_blog_share_like_layout,
  'enable_social_share'    => $bridge_qode_enable_social_share,
  'qode_like'              => $bridge_qode_like
);

$bridge_qode_post_format = get_post_format();
?>
<article id="post-<?php
the_ID(); ?>" <?php
post_class(); ?>>
  <?php
  get_template_part( 'components/section/blog-post/blog-posts' );
  ?>
  <?php
  do_action( 'bridge_qode_action_after_article_content' );
  ?>
</article>