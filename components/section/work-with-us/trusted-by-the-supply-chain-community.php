<?php

$pageID      = get_the_ID();
$section     = get_field( 'Trusted_by_the_Supply_Chain_Community_Section', $pageID );
$title       = esc_html( ! empty( $section['Title'] ) ? $section['Title'] : 'Trusted by the Supply Chain Community' );
$stat1Number = esc_html( ! empty( $section['Statistics_1_Number'] ) ? $section['Statistics_1_Number'] : '1000+' );
$stat1Title  = esc_html( ! empty( $section['Statistics_1_Title'] ) ? $section['Statistics_1_Title'] : 'Podcast Episodes' );
$stat2Number = esc_html( ! empty( $section['Statistics_2_Number'] ) ? $section['Statistics_2_Number'] : '400K+' );
$stat2Title  = esc_html( ! empty( $section['Statistics_2_Title'] ) ? $section['Statistics_2_Title'] : 'Social Followers' );
$stat3Number = esc_html( ! empty( $section['Statistics_3_Number'] ) ? $section['Statistics_3_Number'] : '7M+' );
$stat3Title  = esc_html( ! empty( $section['Statistics_3_Title'] ) ? $section['Statistics_3_Title'] : 'Downloads' );
?>
<div class="gradient1 rounded-100 sm:rounded-none">
	<section class="section text-white py-96 sm:py-60">
		<div class="relative z-10">
			<div class="mb-72">
				<div class="site-padding">
					<div class="w-layout-blockcontainer max-w-836 text-center w-container">
						<h2><?= $title; ?></h2>
					</div>
				</div>
			</div>
			<div class="mb-72">
        <?php
        echo do_shortcode( '[work_with_us_trusted_by_community_slider]' );
        ?>
        <div class="mb-36"></div>
        <?php
        echo do_shortcode( '[work_with_us_trusted_by_community_slider_reverse]' );
        ?>
			</div>
			<div>
				<div class="site-padding">
					<div class="w-layout-blockcontainer max-w-664 text-center w-container">
						<div class="flex justify-between gap-20 sm:flex-col">
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat1Number; ?></div>
								<div class="font-semibold text-md"><?= $stat1Title; ?></div>
							</div>
							<div class="w-1 bg-white/25"></div>
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat2Number; ?></div>
								<div class="font-semibold text-md"><?= $stat2Title; ?></div>
							</div>
							<div class="w-1 bg-white/25"></div>
							<div>
								<div class="font-family-secondary text-36 tracking-[3.6px]"><?= $stat3Number; ?></div>
								<div class="font-semibold text-md"><?= $stat3Title; ?></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
