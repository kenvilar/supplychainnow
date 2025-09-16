<?php
/*
 * Template Name: National Supply Chain Day v2
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
    get_template_part( 'components/hero/national-supply-chain-day' );
    get_template_part( 'components/section/national-supply-chain-day/our-hosts-behind-the-microphone' );
    get_template_part( 'components/section/national-supply-chain-day/celebrating-national-supply-chain-day' );
    get_template_part( 'components/section/national-supply-chain-day/sponsorships-available' );
    get_template_part( 'components/section/national-supply-chain-day/check-out-our-livestream' );
    ?>
  </div>
</div>
<?php
get_footer(); ?>
