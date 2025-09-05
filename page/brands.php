<?php
/*
 * Template Name: Brands v2
 */

set_query_var( 'header_args', [
  'nav_classnames' => 'nav-fixed', // '' || 'nav-fixed'
] );
get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
  <div class="main-wrapper">
    <?php
    get_template_part( 'components/hero/brands' );
    get_template_part( 'components/section/brands/featured-podcasts' );
    get_template_part( 'components/section/brands/also-produced-by-scn' );
    get_template_part( 'components/layout/footer/cta-footer-2' );
    ?>
  </div>
</div>
<?php
get_footer(); ?>
