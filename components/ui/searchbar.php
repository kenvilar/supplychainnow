<?php
$site_padding = $args["site_padding"] ?? ""; 
?>
<section class="section">
	<div class="site-padding sm:py-60 <?php echo esc_attr($site_padding); ?>">
		<div class="max-w-615 mx-auto">
			<div class="flex gap-11 justify-between">
				<div class="max-w-423 w-full md:max-w-full">
					<form class="relative overflow-hidden rounded-100 border border-secondary/50 bg-[#EBF6FF]"
						method="get" action="<?php echo esc_url(home_url(add_query_arg([]))); ?>">
						<label>
							<input
								type="search"
								name="s"
								value="<?php echo esc_attr(get_search_query()); ?>"
								placeholder="Search by episode, topic, name, etc..."
								class="overflow-hidden rounded-100 w-full h-43 py-14 pl-48 pr-12 text-sm font-light placeholder:text-secondary" />
						</label>
						<div class="absolute absolute--l flex items-center justify-center pl-22">
							<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
								<path
									d="M6.31756 11.6351C9.25436 11.6351 11.6351 9.25436 11.6351 6.31756C11.6351 3.38075 9.25436 1 6.31756 1C3.38075 1 1 3.38075 1 6.31756C1 9.25436 3.38075 11.6351 6.31756 11.6351Z"
									stroke="#4E88B6" stroke-miterlimit="10" />
								<path d="M14 13.9997L10.4529 10.4526" stroke="#4E88B6" stroke-miterlimit="10" />
							</svg>
						</div>
					</form>
				</div>
				<div class="max-w-181 w-full md:max-w-full">
					ok
				</div>
			</div>
		</div>
	</div>
</section>