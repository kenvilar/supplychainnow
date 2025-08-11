<?php
/*
 * Template Name: Our Story v2
 */

get_header();
$pageId = get_the_ID();
?>
<div class="page-wrapper">
	<div class="main-wrapper">
		<?php
		get_template_part('components/hero/our-story');
		get_template_part('components/section/our-story/putting-a-microphone');
		get_template_part('components/section/our-story/count-number-three-columns');
		get_template_part('components/section/our-story/awards-and-recognitions');
		get_template_part('components/section/our-story/behind-the-microphone');
		get_template_part('components/section/our-story/do-good-give-forward');
		get_template_part('components/section/our-story/where-we-give');
		?>
	</div>
</div>
<?php
get_footer(); ?>
