<?php

$pageID = get_the_ID();
$page_title = get_field("Page_Title", $pageID) ?: "Work With Us";
$description = get_field("Description", $pageID) ?: "<strong>Reach 1M+ Supply Chain Professionals</strong> actively engaging with Supply Chain Now and generate qualified new leads for your business.";
$hero_image = esc_url(get_field("Hero_Image", $pageID) ?: get_stylesheet_directory_uri() . "/assets/img/hero-img/hero--work-with-us.avif");
$hide_icon = get_field("Hide_Icon", $pageID) ?: false;
$section = get_field("Hero_Section", $pageID);
$buttonText = esc_html(!empty($section["Button_Text"]) ? $section["Button_Text"] : "Get Started");
$buttonLink = esc_url(!empty($section["Button_Link"]) ? $section["Button_Link"] : "/contact");
?>
<section class="section bg-cargogrey text-white rounded-b-100 sm:rounded-b-none">
	<div class="site-padding sm:py-60 pt-200 pb-100 relative z-10">
		<div class="w-layout-blockcontainer pt-20 w-container text-center max-w-960">
			<div class="mb-28">
				<h1 class="scn-page-title"><?= $page_title ?></h1>
			</div>
			<div class="mb-36">
        <?php
        echo do_shortcode( '[work_with_us_hero_text_slider]' );
        ?>
			</div>
			<div class="mb-28">
				<div class="w-layout-blockcontainer max-w-672 w-container">
					<p>
						<?= $description ?>
					</p>
				</div>
			</div>
			<div class="flex justify-center">
				<?php echo get_template_part("components/ui/btn", null, [
        "text" => $buttonText,
        "link" => $buttonLink,
        "style" => "primary",
        "class" => "",
        /*'attributes' => [
						'target' => '_blank',
						'rel'    => 'noopener noreferrer',
					],*/
    ]); ?>
			</div>
		</div>
	</div>
	<div class="absolute absolute--full w-full h-full">
		<img
			src="<?= $hero_image ?>"
			loading="lazy" alt="hero-work with us" class="image opacity-10">
	</div>
</section>
