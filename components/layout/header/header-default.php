<?php

$nav_classnames = $args['nav_classnames'] ?? ''; // '' || 'nav-fixed'
?>
<div class="nav <?= esc_attr($nav_classnames); ?>">
	<div data-animation="default" class="navbar w-nav" data-easing2="ease" data-easing="ease" data-collapse="all"
	     role="banner" data-no-scroll="1" data-duration="400" data-doc-height="1">
		<div class="nav-padding">
			<div class="nav-container w-container">
				<div class="nav-wrapper">
					<a href="/" aria-current="page" class="nav__brandlink w-nav-brand w--current" aria-label="home">
						<div>
							<img
								src="<?php
								echo get_stylesheet_directory_uri(); ?>/assets/img/logo/header-logo.svg"
								loading="lazy" alt="header logo" class="image h-auto!">
						</div>
					</a>
					<nav role="navigation" class="navmenu w-nav-menu">
						<div class="navlink__group">
							<div data-delay="0" data-hover="true" class="nav__dropdown w-dropdown" style="max-width: 1250px;">
								<div class="nav-dropdown__toggle group w-dropdown-toggle" id="w-dropdown-toggle-0"
								     aria-controls="w-dropdown-list-0" aria-haspopup="menu" aria-expanded="false" role="button"
								     tabindex="0">
									<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">
										<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
									</div>
									<div>About Us</div>
								</div>
								<nav class="nav-dropdown__list w-dropdown-list" id="w-dropdown-list-0"
								     aria-labelledby="w-dropdown-toggle-0">
									<div class="nav-dropdown__listmenu">
										<a href="/about" class="nav_dropdown_link w-dropdown-link" tabindex="0">Our Story</a>
										<a href="/our-team-and-hosts" class="nav_dropdown_link w-dropdown-link" tabindex="0">Our Team &amp;
											Hosts
										</a>
									</div>
								</nav>
							</div>
							<div data-delay="0" data-hover="true" class="nav__dropdown w-dropdown" style="max-width: 1250px;">
								<div class="nav-dropdown__toggle group w-dropdown-toggle" id="w-dropdown-toggle-1"
								     aria-controls="w-dropdown-list-1" aria-haspopup="menu" aria-expanded="false" role="button"
								     tabindex="0">
									<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">
										<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
									</div>
									<div>Watch and Listen</div>
								</div>
								<nav class="nav-dropdown__list w-dropdown-list" id="w-dropdown-list-1"
								     aria-labelledby="w-dropdown-toggle-1">
									<div class="nav-dropdown__listmenu">
										<a href="/upcoming-live-programming" class="nav_dropdown_link w-dropdown-link" tabindex="0">Upcoming
											Live Programming
										</a>
										<a href="/on-demand-programming" class="nav_dropdown_link w-dropdown-link" tabindex="0">On-Demand
											Programming
										</a>
										<a href="/brands" class="nav_dropdown_link w-dropdown-link" tabindex="0">Brands</a>
										<ul role="list" class="nav_dropdown_link-sub-list w-list-unstyled">
											<li>
												<a href="/program/supply-chain-now" class="nav_dropdown_link-sub" tabindex="0">Supply Chain
													Now
												</a>
											</li>
											<li>
												<a href="/program/supply-chain-now-en-espanol" class="nav_dropdown_link-sub" tabindex="0">Supply
													Chain Now en Español
												</a>
											</li>
											<li>
												<a href="/program/logistics-with-purpose" class="nav_dropdown_link-sub" tabindex="0">Logistics
													With Purpose
												</a>
											</li>
											<li>
												<a href="/program/tango-tango" class="nav_dropdown_link-sub" tabindex="0">Tango Tango</a>
											</li>
											<li>
												<a href="/program/supply-chain-is-boring" class="nav_dropdown_link-sub" tabindex="0">Supply
													Chain is Boring
												</a>
											</li>
											<li>
												<a href="/program/digital-transformers" class="nav_dropdown_link-sub" tabindex="0">Digital
													Transformers
												</a>
											</li>
											<li>
												<a href="/program/veteran-voices" class="nav_dropdown_link-sub" tabindex="0">Veteran Voices</a>
											</li>
											<li>
												<a href="/program/business-history" class="nav_dropdown_link-sub" tabindex="0">The Week in
													Business History
												</a>
											</li>
											<li>
												<a href="/program/tektok" class="nav_dropdown_link-sub" tabindex="0">TEK TOK</a>
											</li>
											<li>
												<a href="/program/techquila-sunrise" class="nav_dropdown_link-sub" tabindex="0">TECHquila
													Sunrise
												</a>
											</li>
										</ul>
										<a href="/national-supply-chain-day" class="nav_dropdown_link w-dropdown-link" tabindex="0">National
											Supply Chain Day
										</a>
										<a href="/on-the-road" class="nav_dropdown_link w-dropdown-link" tabindex="0">On The Road</a>
									</div>
								</nav>
							</div>
							<div data-delay="0" data-hover="true" class="nav__dropdown w-dropdown" style="max-width: 1250px;">
								<div class="nav-dropdown__toggle group w-dropdown-toggle" id="w-dropdown-toggle-2"
								     aria-controls="w-dropdown-list-2" aria-haspopup="menu" aria-expanded="false" role="button"
								     tabindex="0">
									<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">
										<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
									</div>
									<div>Work With Us</div>
								</div>
								<nav class="nav-dropdown__list w-dropdown-list" id="w-dropdown-list-2"
								     aria-labelledby="w-dropdown-toggle-2">
									<div class="nav-dropdown__listmenu">
										<a href="/work-with-us" class="nav_dropdown_link w-dropdown-link" tabindex="0">Work With Us</a>
										<a href="/case-studies-customer-stories" class="nav_dropdown_link w-dropdown-link" tabindex="0">Case
											Studies &amp; Customer Stories
										</a>
										<a href="/media-kit" class="nav_dropdown_link w-dropdown-link" tabindex="0">Media Kit</a>
									</div>
								</nav>
							</div>
							<div data-delay="0" data-hover="true" class="nav__dropdown w-dropdown" style="max-width: 1250px;">
								<div class="nav-dropdown__toggle group w-dropdown-toggle" id="w-dropdown-toggle-3"
								     aria-controls="w-dropdown-list-3" aria-haspopup="menu" aria-expanded="false" role="button"
								     tabindex="0">
									<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">
										<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
									</div>
									<div>NOW Campaign Directory</div>
								</div>
								<nav class="nav-dropdown__list w-dropdown-list" id="w-dropdown-list-3"
								     aria-labelledby="w-dropdown-toggle-3">
									<div class="nav-dropdown__listmenu">
										<a href="/campaign-directory" class="nav_dropdown_link w-dropdown-link" tabindex="0">Campaign
											Directory
										</a>
										<a href="#" class="nav_dropdown_link pointer-events-none w-dropdown-link" tabindex="0">Network
											Partners
										</a>
										<ul role="list" class="nav_dropdown_link-sub-list w-list-unstyled">
											<li>
												<a href="/easypost" class="nav_dropdown_link-sub" tabindex="0">EasyPost</a>
											</li>
											<li>
												<a href="/enable" class="nav_dropdown_link-sub" tabindex="0">Enable</a>
											</li>
											<li>
												<a href="/us-bank" class="nav_dropdown_link-sub" tabindex="0">U.S. Bank</a>
											</li>
										</ul>
										<a href="#" class="nav_dropdown_link pointer-events-none w-dropdown-link" tabindex="0">Campaign
											Partners
										</a>
										<ul role="list" class="nav_dropdown_link-sub-list w-list-unstyled">
											<li>
												<a href="/altium" class="nav_dropdown_link-sub" tabindex="0">Altium</a>
											</li>
											<li>
												<a href="/autoscheduler" class="nav_dropdown_link-sub" tabindex="0">AutoScheduler.AI</a>
											</li>
											<li>
												<a href="/bem" class="nav_dropdown_link-sub" tabindex="0">bem</a>
											</li>
											<li>
												<a href="/coupa" class="nav_dropdown_link-sub" tabindex="0">Coupa</a>
											</li>
											<li>
												<a href="/doss" class="nav_dropdown_link-sub" tabindex="0">Doss</a>
											</li>
											<li>
												<a href="/ratelinx" class="nav_dropdown_link-sub" tabindex="0">RateLinx</a>
											</li>
											<li>
												<a href="/sap" class="nav_dropdown_link-sub" tabindex="0">SAP</a>
											</li>
											<li>
												<a href="/trucker-tools" class="nav_dropdown_link-sub" tabindex="0">Trucker Tools</a>
											</li>
											<li>
												<a href="/bastian-solutions" class="nav_dropdown_link-sub" tabindex="0">Bastian Solutions</a>
											</li>
											<li>
												<a href="/dp-world" class="nav_dropdown_link-sub" tabindex="0">DP World</a>
											</li>
											<li>
												<a href="/omp" class="nav_dropdown_link-sub" tabindex="0">OMP</a>
											</li>
											<li>
												<a href="/zebra-technologies" class="nav_dropdown_link-sub" tabindex="0">Zebra Technologies</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
							<a href="/blog-news" class="nav__link group w-inline-block">
								<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">
									<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>
								</div>
								<div>Resource Hub</div>
							</a>
						</div>
						<div class="navlink_cta__group">
							<a href="/contact" class="btn secondary w-inline-block">
								<div>Contact Us</div>
							</a>
							<a href="https://account.moxo.com/getstarted/#/freeLogin/EnterYourAccount" target="_blank"
							   class="btn primary-outline w-inline-block client-portal">
								<div>Client Portal</div>
							</a>
						</div>
					</nav>
					<div class="navmenu__btn w-nav-button" style="-webkit-user-select: text;" aria-label="menu" role="button"
					     tabindex="0" aria-controls="w-nav-overlay-0" aria-haspopup="menu" aria-expanded="false">
						<div class="navmenu__icon">
							<div class="navmenu__icon-bar top"></div>
							<div class="navmenu__icon-bar middle"></div>
							<div class="navmenu__icon-bar bottom"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="w-nav-overlay" data-wf-ignore="" id="w-nav-overlay-0"></div>
	</div>
	<div class="display-none">
		<script>
			/* ======Fixed Navbar Scroll Animation====== */
			document.addEventListener("DOMContentLoaded", (event) => {
				function navWhileScrollAnimation() {
					const nav = document.querySelector(".nav");
					const offset = 100;
					const mq = window.matchMedia('(max-width: 991px)');

					window.addEventListener("scroll", () => {
						const scrollPos = window.scrollY;

						if (scrollPos > offset) {
							if (!nav.classList.contains("scroll-fixed")) {
								nav.classList.add("scroll-fixed");
								if (!mq.matches) {
									nav.classList.add("bg-cargogrey")
								}
							} else {
								if (!mq.matches) {
									nav.classList.add("bg-cargogrey")
								}
							}
						} else {
							if (nav.classList.contains("bg-cargogrey")) {
								nav.classList.add('opacity-0!');
								setTimeout(() => {
									nav.classList.remove("scroll-fixed", "bg-cargogrey");
									nav.classList.remove('opacity-0!');
								}, 100);
							} else {
								nav.classList.add('opacity-0!');
								setTimeout(() => {
									nav.classList.remove("scroll-fixed");
									nav.classList.remove('opacity-0!');
								}, 100);
							}
						}
					});
				}

				navWhileScrollAnimation();
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', (event) => {
				function clickNavHamburgerBtn() {
					let navMenuBtn = document.querySelector('.navmenu__btn');
					let mainWrapper = document.querySelector('.main-wrapper');
					let wrapperInnerContent = document.querySelector('.wrapper_inner .content');
					let navMenu = document.querySelector('.navmenu');
					let footer = document.querySelector('footer');
					let wNavOverlay = document.querySelector('.w-nav-overlay');
					navMenuBtn.addEventListener('click', function (event) {
						navMenuBtn.classList.toggle('w--open');
						if (mainWrapper) {
							mainWrapper.classList.toggle('display-none');
						} else {
							if (wrapperInnerContent) {
								wrapperInnerContent.classList.toggle('display-none');
							}
						}
						footer.classList.toggle('display-none');
						['overflow-visible!', 'h-full!', 'block!'].forEach(c => wNavOverlay.classList.toggle(c));
						if (navMenu) {
							navMenu.classList.toggle('data-menu-open');
						}
					});
				}

				setTimeout(function () {
					clickNavHamburgerBtn();
				}, 500);
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				function navMenuMoveToOverlayWhenMobile() {
					const navMenu = document.querySelector('.navmenu.w-nav-menu');
					const navOverlay = document.querySelector('.w-nav-overlay');
					const brandLink = document.querySelector('a.nav__brandlink.w-nav-brand');

					if (!navMenu || !navOverlay || !brandLink) return;

					const mq = window.matchMedia('(max-width: 991px)');

					const placeNav = (m) => {
						if (m.matches) {
							// <= 991px: put nav inside overlay
							if (navMenu.parentElement !== navOverlay) {
								navOverlay.appendChild(navMenu);
							}
						} else {
							// > 991px: put nav right AFTER the brand link (same parent, as a sibling)
							if (brandLink.nextElementSibling !== navMenu) {
								brandLink.insertAdjacentElement('afterend', navMenu);
							}
						}
					};

					placeNav(mq); // on load
					mq.addEventListener('change', placeNav); // on resize breakpoint changes
				}

				navMenuMoveToOverlayWhenMobile();
			});
		</script>
		<script>
			document.addEventListener('DOMContentLoaded', () => {
				function navMenuClickDuringMobile() {
					const dropdowns = document.querySelectorAll('.nav__dropdown.w-dropdown');

					// turn off Webflow hover to avoid fighting
					dropdowns.forEach((el) => el.setAttribute('data-hover', 'false'));

					const canHover = window.matchMedia(
						'(hover: hover) and (pointer: fine)'
					).matches;

					dropdowns.forEach((dd) => {
						const list = dd.querySelector('.nav-dropdown__list.w-dropdown-list');
						const toggle = dd.querySelector('.w-dropdown-toggle');
						if (!list || !toggle) return;

						const open = () => {
							dd.classList.add('w--open');
							list.classList.add('w--open');
							toggle.setAttribute('aria-expanded', 'true');
							list.style.display = 'block'; // override inline style from Webflow
						};

						const close = () => {
							dd.classList.remove('w--open');
							list.classList.remove('w--open');
							toggle.setAttribute('aria-expanded', 'false');
							list.style.display = '';
						};

						// desktop hover
						if (canHover) {
							dd.addEventListener('mouseenter', open);
							dd.addEventListener('mouseleave', close);
						}

						// mobile tap
						const onToggle = (e) => {
							e.preventDefault();
							e.stopPropagation();
							dd.classList.contains('w--open') ? close() : open();
						};
						toggle.addEventListener('click', onToggle);
						toggle.addEventListener('touchend', onToggle);

						// close when tapping outside
						document.addEventListener('click', (e) => {
							if (!dd.contains(e.target)) close();
						});
					});
				}

				navMenuClickDuringMobile();
			});
		</script>
	</div>
</div>
