<?php
/*
 * Template Name: Dev Styles
 */

get_header();
$pageId = get_the_ID();
?>
	<style>
		[color-swatch] > div {
			padding: 0;
			width: 100%;
			height: 100%;
		}
	</style>
	<!-- Custom code Start -->
	<section class="section">
		<div class="site-padding">
			<div class="grid gap-40 grid-cols-2 sm:grid-cols-1">
				<div class="w-full">
					<h1>h1. Bootstrap heading</h1>
					<h2>h2. Bootstrap heading</h2>
					<h3>h3. Bootstrap heading</h3>
					<h4>h4. Bootstrap heading</h4>
					<h5>h5. Bootstrap heading</h5>
					<h6>h6. Bootstrap heading</h6>
				</div>
				<div class="w-full">
					<div class="text-2xs">2xs lorem ipsum</div>
					<div class="text-xs">xs lorem ipsum</div>
					<div class="text-sm">sm lorem ipsum</div>
					<div class="text-reg">reg lorem ipsum</div>
					<div class="text-md">md lorem ipsum</div>
					<div class="text-lg">lg lorem ipsum</div>
					<div class="text-xl">xl lorem ipsum</div>
					<div class="text-2xl">2xl lorem ipsum</div>
					<div class="text-3xl">3xl lorem ipsum</div>
					<div class="text-4xl">4xl lorem ipsum</div>
					<div class="text-22">22px lorem ipsum</div>
					<div class="text-36">36px lorem ipsum</div>
					<div class="text-37">37px lorem ipsum</div>
					<div class="text-45">45px lorem ipsum</div>
				</div>
				<div class="w-full p-12">
					<div class="flex flex-col gap-8">
						<h4 styles-label="">Background Color Swatches</h4>
						<div class="border border--black">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--black"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--black"></div>
								</div>
								<div class="text--black">text--black</div>
								<div class="hover-text--black">hover-text--black</div>
							</div>
						</div>
						<div class="border border--white">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden outline-1--black">
									<div class="bg--white"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden outline-1--black">
									<div class="hover-bg--white"></div>
								</div>
								<div class="text--white">#FFFFFF</div>
								<div class="hover-text--white">hover-text--white</div>
							</div>
						</div>
						<div class="border border--dev">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--dev"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--dev"></div>
								</div>
								<div class="text--dev">text--dev</div>
								<div class="hover-text--dev">hover-text--dev</div>
							</div>
						</div>
						<div class="border border--primary">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--primary"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--primary"></div>
								</div>
								<div class="text--primary">text--primary</div>
								<div class="hover-text--primary">hover-text--primary</div>
							</div>
						</div>
						<div class="border border--secondary">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--secondary"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--secondary"></div>
								</div>
								<div class="text--secondary">text--secondary</div>
								<div class="hover-text--secondary">hover-text--secondary</div>
							</div>
						</div>
						<div class="border border--tertiary">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--tertiary"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--tertiary"></div>
								</div>
								<div class="text--tertiary">text--tertiary</div>
								<div class="hover-text--tertiary">hover-text--tertiary</div>
							</div>
						</div>
						<div class="border border--textcolor">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--textcolor"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--textcolor"></div>
								</div>
								<div class="text--textcolor">text--textcolor</div>
								<div class="hover-text--textcolor">hover-text--textcolor</div>
							</div>
						</div>
						<div class="border border--cargogrey">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--cargogrey"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--cargogrey"></div>
								</div>
								<div class="text--cargogrey">text--cargo-grey</div>
								<div class="hover-text--cargogrey">hover-text--cargo-grey</div>
							</div>
						</div>
						<div class="border border--expressorange">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--expressorange"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--expressorange"></div>
								</div>
								<div class="text--expressorange">text--expressorange</div>
								<div class="hover-text--expressorange">hover-text--expressorange</div>
							</div>
						</div>
						<div class="border border--freightblue">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--freightblue"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--freightblue"></div>
								</div>
								<div class="text--freightblue">text--freightblue</div>
								<div class="hover-text--freightblue">hover-text--freightblue</div>
							</div>
						</div>
						<div class="border border--brightgray">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--brightgray"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--brightgray"></div>
								</div>
								<div class="text--brightgray">text--brightgray</div>
								<div class="hover-text--brightgray">hover-text--brightgray</div>
							</div>
						</div>
						<div class="border border--lightgrey">
							<div class="flex gap-4 items-center">
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="bg--lightgrey"></div>
								</div>
								<div color-swatch="" class="w-40 h-40 rounded-4 overflow-hidden">
									<div class="hover-bg--lightgrey"></div>
								</div>
								<div class="text--lightgrey">text--lighgrey</div>
								<div class="hover-text--lightgrey">hover-text--lighgrey</div>
							</div>
						</div>
					</div>
				</div>
				<div class="w-full p-12">
					<div class="flex flex-col gap-8">
						<h4 styles-label="">Gradient</h4>
						<h4 class="bg-clip-text">bg-clip-text</h4>
						<div class="gradient1">
							<div class="py-48"></div>
						</div>
						<div class="gradient2">
							<div class="py-48"></div>
						</div>
						<div class="gradient3">
							<div class="py-48"></div>
						</div>
						<div class="gradient4">
							<div class="py-48"></div>
						</div>
						<div class="gradient5">
							<div class="py-48"></div>
						</div>
						<div class="gradient6">
							<div class="py-48"></div>
						</div>
						<div class="gradient7">
							<div class="py-48"></div>
						</div>
						<div class="gradient8">
							<div class="py-48"></div>
						</div>
					</div>
				</div>
				<div class="w-full p-12">
					<div class="flex flex-col gap-8">
						<h4 styles-label="">Box-shadow</h4>
						<div class="grid grid-cols-2">
							<div class="shadow1">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow1">
								<div class="py-48"></div>
							</div>
							<div class="shadow2">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow2">
								<div class="py-48"></div>
							</div>
							<div class="shadow3">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow3">
								<div class="py-48"></div>
							</div>
							<div class="shadow4">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow4">
								<div class="py-48"></div>
							</div>
							<div class="shadow5">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow5">
								<div class="py-48"></div>
							</div>
							<div class="shadow6">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow6">
								<div class="py-48"></div>
							</div>
							<div class="shadow7">
								<div class="py-48"></div>
							</div>
							<div class="hover-shadow7">
								<div class="py-48"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="p-12 flex flex-col gap-8">
					<h4 styles-label="">Font Weights</h4>
					<div class="font-thin">font-thin (100)</div>
					<div class="font-extralight">font-extralight (200)</div>
					<div class="font-light">font-light (300)</div>
					<div class="font-normal">font-normal (400)</div>
					<div class="font-medium">font-medium (500)</div>
					<div class="font-semibold">font-semibold (600)</div>
					<div class="font-bold">font-bold (700)</div>
					<div class="font-extrabold">font-extrabold (800)</div>
					<div class="font-black">font-black (900)</div>
				</div>
				<div class="p-12 flex flex-col gap-8">
					<h4 styles-label="">Links &amp; Buttons</h4>
					<a href="#">Text Link</a>
					<div>
						<a href="#" class="w-inline-block">
							<div>Text Element Inside Link Block</div>
						</a>
					</div>
					<div>
						<a href="#" class="w-button">Don't Use Native Button</a>
					</div>
					<div>
						<a href="#" class="p-12 rounded-4 bg--black text--white w-inline-block">
							<div>Sample Custom Button</div>
						</a>
					</div>
					<div class="flex flex-wrap items-center gap-4">
						<a href="#" class="btn w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn dev w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn black w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn white w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn link w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn primary w-inline-block">
							<div>Learn More About Sponsorship</div>
						</a>
						<a href="#" class="btn secondary w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn tertiary w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn primary-outline w-inline-block">
							<div>Sample Custom Button</div>
						</a>
						<a href="#" class="btn secondary-outline w-inline-block">
							<div>Sample Custom Button</div>
						</a>
					</div>
				</div>
				<div class="p-12 flex flex-col gap-8">
					<h4 styles-label="">Cards</h4>
					<div class="flex flex-wrap items-center gap-4">
						<div class="card">
							<div class="py-28 px-24"></div>
						</div>
						<div class="card v2">
							<div class="py-28 px-24"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Custom code End -->
<?php
get_footer(); ?>