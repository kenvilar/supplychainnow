<?php

add_post_type_support( 'page', 'excerpt' );

add_filter( 'redirect_canonical', function ( $redirect_url, $requested_url ) {
	if (
		is_singular( 'brands' )
		|| is_page( 'resource-hub' ) // resource-hub
		|| is_page( 26503 ) // resource-hub
		|| is_page( 'blog' ) // blog
		|| is_page( 26504 ) // blog
		|| is_page( 'white-paper' ) // white-paper
		|| is_page( 26505 ) // white-paper
		|| is_page( 'ebook' ) // ebook
		|| is_page( 26506 ) // ebook
		|| is_page( 'article' ) // article
		|| is_page( 26507 ) // article
		|| is_page( 'news' ) // news
		|| is_page( 26508 ) // news
		|| is_page( 'guide' ) // guide
		|| is_page( 26509 ) // guide
		|| is_page( 'on-demand-programming' ) // on-demand-programming
		|| is_page( 26500 ) // on-demand-programming
		|| is_page( 'podcasts-and-livestreams' ) // podcasts-and-livestreams
		|| is_page( 26501 ) // podcasts-and-livestreams
		|| is_page( 'webinars' ) // webinars
		|| is_page( 26502 ) // webinars
	) {
		return false;
	}

	return $redirect_url;
}, 10, 2 );

function my_custom_menus() {
	register_nav_menus( array(
		'scn_primary_menu' => __( 'SCN Primary Menu' ),
		'scn_footer_menu'  => __( 'SCN Footer Menu' ),
	) );
}

add_action( 'init', 'my_custom_menus' );

class SCN_Nav_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		if ( $depth == 0 ) {
			$output .= "\n$indent<nav class=\"nav-dropdown__list w-dropdown-list\" aria-labelledby=\"nav-toggle-{$this->current_item_id}\">\n";
			$output .= "$indent\t<div class=\"nav-dropdown__listmenu\">\n";
		} else {
			$output .= "\n$indent<ul role=\"list\" class=\"nav_dropdown_link-sub-list w-list-unstyled\">\n";
		}
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		if ( $depth == 0 ) {
			$output .= "$indent\t</div>\n";
			$output .= "$indent</nav>\n";
		} else {
			$output .= "$indent</ul>\n";
		}
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent    = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$this->current_item_id = $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $depth == 0 && $has_children ) {
			$output .= $indent . '<div data-delay="0" data-hover="true" class="nav__dropdown w-dropdown" style="max-width: 1250px;">';
			$output .= '<div class="nav-dropdown__toggle group w-dropdown-toggle" id="nav-toggle-' . $item->ID . '" aria-controls="nav-list-' . $item->ID . '" aria-haspopup="menu" aria-expanded="false" role="button" tabindex="0">';
			$output .= '<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">';
			$output .= '<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>';
			$output .= '</div>';
			$output .= '<div>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</div>';
			$output .= '</div>';
		} elseif ( $depth == 0 ) {
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$output .= $indent . '<a' . $attributes . ' class="nav__link group w-inline-block">';
			$output .= '<div class="absolute absolute--t flex justify-center opacity-0 group-hover:opacity-100">';
			$output .= '<div blinking-dot="" class="size-8 rounded-8 bg-primary"></div>';
			$output .= '</div>';
			$output .= '<div>' . apply_filters( 'the_title', $item->title, $item->ID ) . '</div>';
			$output .= '</a>';
		} elseif ( $depth == 1 ) {
			if ( $has_children ) {
				$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

				$pointer_events_class = ( empty( $item->url ) || $item->url === '#' ) ? ' pointer-events-none' : '';

				$output .= $indent . '<a' . $attributes . ' class="nav_dropdown_link' . $pointer_events_class . ' w-dropdown-link" tabindex="0">' . apply_filters( 'the_title',
						$item->title,
						$item->ID ) . '</a>';
			} else {
				$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

				$output .= $indent . '<a' . $attributes . ' class="nav_dropdown_link w-dropdown-link" tabindex="0">' . apply_filters( 'the_title',
						$item->title,
						$item->ID ) . '</a>';
			}
		} else {
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$output .= $indent . '<li>';
			$output .= '<a' . $attributes . ' class="nav_dropdown_link-sub" tabindex="0">' . apply_filters( 'the_title',
					$item->title,
					$item->ID ) . '</a>';
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $depth == 0 && $has_children ) {
			$output .= "</div>\n";
		} elseif ( $depth > 1 ) {
			$output .= "</li>\n";
		}
	}
}

class SCN_Footer_Walker extends Walker_Nav_Menu {

	function start_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		if ( $depth == 0 ) {
			$output .= "\n$indent<ul role=\"list\" class=\"m-0 flex flex-col gap-12 w-list-unstyled\">\n";
		} else {
			$output .= "\n$indent<ul role=\"list\" class=\"m-0 flex flex-col gap-8 w-list-unstyled\">\n";
		}
	}

	function end_lvl( &$output, $depth = 0, $args = null ) {
		$indent = str_repeat( "\t", $depth );
		$output .= "$indent</ul>\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$indent    = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $depth == 0 && $has_children ) {
			$pointer_events_class = ( empty( $item->url ) || $item->url === '#' ) ? ' pointer-events-none' : '';
			$output               .= $indent . '<div class="w-layout-vflex flex gap-16">';
			$output               .= '<a href="' . esc_attr( $item->url ) . '" class="footer-link-heading' . $pointer_events_class . '">' . apply_filters( 'the_title',
					$item->title,
					$item->ID ) . '</a>';
		} elseif ( $depth == 0 ) {
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$output .= $indent . '<div class="w-layout-vflex flex gap-16">';
			$output .= '<a' . $attributes . ' class="footer-link-heading">' . apply_filters( 'the_title',
					$item->title,
					$item->ID ) . '</a>';
			$output .= '</div>';
		} elseif ( $depth == 1 ) {
			if ( $has_children ) {
				$pointer_events_class = ( empty( $item->url ) || $item->url === '#' ) ? ' not-link' : '';
				$output               .= $indent . '<li class="flex flex-col gap-12">';
				$output               .= '<a href="' . esc_attr( $item->url ) . '" class="footer-link' . $pointer_events_class . '">' . apply_filters( 'the_title',
						$item->title,
						$item->ID ) . '</a>';
			} else {
				$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
				$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
				$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
				$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

				$output .= $indent . '<li>';
				$output .= '<a' . $attributes . ' class="footer-link">' . apply_filters( 'the_title',
						$item->title,
						$item->ID ) . '</a>';
				$output .= '</li>';
			}
		} else {
			$attributes = ! empty( $item->attr_title ) ? ' title="' . esc_attr( $item->attr_title ) . '"' : '';
			$attributes .= ! empty( $item->target ) ? ' target="' . esc_attr( $item->target ) . '"' : '';
			$attributes .= ! empty( $item->xfn ) ? ' rel="' . esc_attr( $item->xfn ) . '"' : '';
			$attributes .= ! empty( $item->url ) ? ' href="' . esc_attr( $item->url ) . '"' : '';

			$output .= $indent . '<li>';
			$output .= '<a' . $attributes . ' class="footer-link-sub">' . apply_filters( 'the_title',
					$item->title,
					$item->ID ) . '</a>';
			$output .= '</li>';
		}
	}

	function end_el( &$output, $item, $depth = 0, $args = null ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes );

		if ( $depth == 0 && $has_children ) {
			$output .= "</div>\n";
		} elseif ( $depth == 0 ) {
			// Already closed in start_el for single items
		} elseif ( $depth == 1 && $has_children ) {
			$output .= "</li>\n";
		}
	}
}


if ( ! function_exists( 'bridge_qode_child_theme_enqueue_scripts' ) ) {
	function bridge_qode_child_theme_enqueue_scripts() {
		// Remove parent style
		wp_dequeue_style( 'bridge-stylesheet' );
		wp_deregister_style( 'bridge-stylesheet' );
		// Remove parent style
		//wp_dequeue_style('bridge-style-dynamic');
		//wp_deregister_style('bridge-style-dynamic');

		// Asset versions (cache busting)
		$theme_dir             = get_stylesheet_directory();
		$ver_bridge_stylesheet = file_exists( $theme_dir . '/assets/css/bridge-stylesheet.css' ) ? filemtime( $theme_dir . '/assets/css/bridge-stylesheet.css' ) : null;
		$ver_mej_controls      = file_exists( $theme_dir . '/assets/css/mej-controls.css' ) ? filemtime( $theme_dir . '/assets/css/mej-controls.css' ) : null;
		$ver_style_css         = file_exists( $theme_dir . '/style.css' ) ? filemtime( $theme_dir . '/style.css' ) : null;
		$ver_tailwind          = file_exists( $theme_dir . '/assets/css/tailwind-output.css' ) ? filemtime( $theme_dir . '/assets/css/tailwind-output.css' ) : null;

		wp_enqueue_style(
			'bridge-stylesheet-copy-from-parent',
			get_stylesheet_directory_uri() . '/assets/css/bridge-stylesheet.css',
			[],
			$ver_bridge_stylesheet
		);

		//splide style
		if ( scn_is_splide_page() ) {
			$ver_splide_css = file_exists( $theme_dir . '/assets/css/splide.min.css' ) ? filemtime( $theme_dir . '/assets/css/splide.min.css' ) : null;
			wp_enqueue_style( 'splide-style',
				get_stylesheet_directory_uri() . '/assets/css/splide.min.css',
				[],
				$ver_splide_css );
		}

		wp_enqueue_style(
			'mej-controls-style',
			get_stylesheet_directory_uri() . '/assets/css/mej-controls.css',
			[],
			$ver_mej_controls
		);

		wp_enqueue_style(
			'bridge-childstyle',
			get_stylesheet_uri(),
			[],
			$ver_style_css
		);

		wp_enqueue_style(
			'tailwind-style',
			get_stylesheet_directory_uri() . '/assets/css/tailwind-output.css',
			[ 'bridge-childstyle' ],
			$ver_tailwind
		);
	}

	function supplyChainNowScripts() {
		$theme_dir = get_stylesheet_directory();
		if ( scn_is_splide_page() ) {
			//splide script
			$ver_splide_js = file_exists( $theme_dir . '/assets/js/splide.min.js' ) ? filemtime( $theme_dir . '/assets/js/splide.min.js' ) : null;
			wp_enqueue_script(
				'splide-script',
				get_stylesheet_directory_uri() . '/assets/js/splide.min.js',
				[],
				$ver_splide_js,
				true // load in footer
			);

			//splide auto scroll extension
			$ver_splide_ext = file_exists( $theme_dir . '/assets/js/splide-extension-auto-scroll.min.js' ) ? filemtime( $theme_dir . '/assets/js/splide-extension-auto-scroll.min.js' ) : null;
			wp_enqueue_script(
				'splide-extension-auto-scroll',
				get_stylesheet_directory_uri() . '/assets/js/splide-extension-auto-scroll.min.js',
				[],
				$ver_splide_ext,
				true // load in footer
			);
		}

		//custom script
		$ver_external_links_in_new_window_js = file_exists( $theme_dir . '/assets/js/external_links_in_new_windows.js' ) ? filemtime( $theme_dir . '/assets/js/external_links_in_new_windows.js' ) : null;
		wp_enqueue_script(
			'supply-chain-now-external-links-in-new-window-script',
			get_stylesheet_directory_uri() . '/assets/js/external_links_in_new_windows.js',
			[],
			$ver_external_links_in_new_window_js,
			true // load in footer
		);

		//custom script
		$ver_custom_js = file_exists( $theme_dir . '/assets/js/custom.js' ) ? filemtime( $theme_dir . '/assets/js/custom.js' ) : null;
		wp_enqueue_script(
			'supply-chain-now-custom-script',
			get_stylesheet_directory_uri() . '/assets/js/custom.js',
			[],
			$ver_custom_js,
			true // load in footer
		);
	}

	add_action( 'wp_enqueue_scripts', 'bridge_qode_child_theme_enqueue_scripts', 11 );
	add_action( 'wp_enqueue_scripts', 'supplyChainNowScripts' );
}

// script to show handle name of styles (we can remove this script) this is only for testing
add_action( 'wp_enqueue_scripts', function () {
	global $wp_styles;
	//	echo '<pre>';
	//	var_dump($wp_styles->queue);
	//	echo '</pre>';
}, 100 );

add_action( 'admin_init', 'hide_editor' );

function hide_editor() {
	$post_id = null;

	if ( isset( $_GET['post'] ) ) {
		$post_id = (int) $_GET['post'];
	} elseif ( isset( $_POST['post_ID'] ) ) {
		$post_id = (int) $_POST['post_ID'];
	}

	if ( empty( $post_id ) ) {
		return;
	}

	$template_file = get_post_meta( $post_id, '_wp_page_template', true );

	if ( $template_file == 'episode-detail.php' ) { // edit the template name
		remove_post_type_support( 'page', 'editor' );
	}
}

function cptui_register_my_cpts_meet_the_team() {
	/**
	 * Post Type: Meet the Team.
	 */
	$labels = [
		"name"          => esc_html__( "Meet the Team", "custom-post-type-ui" ),
		"singular_name" => esc_html__( "Meet the Team", "custom-post-type-ui" ),
	];
	$args   = [
		"label"                 => esc_html__( "Meet the Team", "custom-post-type-ui" ),
		"labels"                => $labels,
		"description"           => "",
		"public"                => true,
		"publicly_queryable"    => true,
		"show_ui"               => true,
		"show_in_rest"          => true,
		"rest_base"             => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace"        => "wp/v2",
		"has_archive"           => false,
		"show_in_menu"          => true,
		"show_in_nav_menus"     => true,
		"delete_with_user"      => false,
		"exclude_from_search"   => false,
		"capability_type"       => "post",
		"map_meta_cap"          => true,
		"hierarchical"          => false,
		"can_export"            => true,
		"rewrite"               => [ "slug" => "meet_the_team", "with_front" => true ],
		"query_var"             => true,
		"supports"              => [ "title", "editor", "thumbnail", "excerpt", "custom-fields" ],
		"show_in_graphql"       => false,
	];
	register_post_type( "meet_the_team", $args );
}

add_action( 'init', 'cptui_register_my_cpts_meet_the_team' );


//function cptui_register_my_cpts_program()
//{
//	/**
//	 * Post Type: Programs.
//	 */
//
//	$labels = [
//		"name" => __("Programs", "custom-post-type-ui"),
//		"singular_name" => __("program", "custom-post-type-ui"),
//	];
//
//	$args = [
//		"label" => __("Programs", "custom-post-type-ui"),
//		"labels" => $labels,
//		"description" => "",
//		"public" => true,
//		"publicly_queryable" => true,
//		"show_ui" => true,
//		"show_in_rest" => true,
//		"rest_base" => "",
//		"rest_controller_class" => "WP_REST_Posts_Controller",
//		"has_archive" => false,
//		"show_in_menu" => true,
//		"show_in_nav_menus" => true,
//		"delete_with_user" => false,
//		"exclude_from_search" => false,
//		"capability_type" => "post",
//		"map_meta_cap" => true,
//		"hierarchical" => false,
//		"rewrite" => ["slug" => "program", "with_front" => true],
//		"query_var" => true,
//		"supports" => ["title", "editor", "thumbnail"],
//	];
//
//	register_post_type("program", $args);
//}
//
//add_action('init', 'cptui_register_my_cpts_program');

add_action( 'template_redirect', function () {
	if ( is_admin() || wp_doing_ajax() || ( defined( 'REST_REQUEST' ) && REST_REQUEST ) ) {
		return;
	}

	$req  = $_SERVER['REQUEST_URI'] ?? '/';
	$base = parse_url( home_url( '/' ), PHP_URL_PATH ) ?: '/';
	if ( $base !== '/' && str_starts_with( $req, $base ) ) {
		$req = substr( $req, strlen( $base ) );
	}
	$path = ltrim( parse_url( $req, PHP_URL_PATH ) ?: '', '/' );

	if ( preg_match( '/^program\/([^\/?#]+)\/?$/i', $path, $m ) ) {
		wp_redirect( home_url( user_trailingslashit( 'brands/' . $m[1] ) ), 301 );
		exit;
	}
}, 0 );

/* Filter the single_template with our custom function
add_filter('single_template', 'custom_program');

function custom_program($single) {

    global $post;

    // Checks for single template by post type
    if ( $post->post_type == 'program' ) {
		console.log("Program post");
        if ( file_exists( get_template_directory() . '/single-program.php' ) ) {
            return get_template_directory() . '/single-program.php';
        }
    }

    return $single;

}*/


function custom_program_shortcode() {
	$query = new WP_Query( array(
		'post_type'   => 'program',
		'post_status' => 'publish',
		'numberposts' => - 1,
		'orderby'     => 'menu_order',
		'order'       => 'ASC'
	) );

	while ( $query->have_posts() ) {
		$query->the_post();
		$post_id           = get_the_ID();
		$post_url          = get_permalink( $post_id );
		$post_thumbnail_id = get_field( 'program_thumbnail_image_upload', $post_id );

		echo "<div class='pic-curved wpb_column vc_column_container vc_col-sm-4'><div class='vc_column-inner'><div class='wpb_wrapper'><div class='q_image_with_text_over q_iwto_hover'><div class='shader' style='background-color: rgba(0, 0, 0, 0.01);'></div><div class='shader_hover' style='background-color: rgba(39, 47, 55, 0.8);'></div><img alt='' src='" . $post_thumbnail_id . "' class='lazyload' /><div class='text'> <table><tr> <td><h3 class='caption no_icon' style=''></h3></td> </tr> </table> <table><tr> <td><div class='desc'><a itemprop='url' href='" . $post_url . "' target='_self' class='qbutton default' style=''>Learn More</a></div> </td></tr></table></div></div> <div class='vc_empty_space' style='height: 25px;'> <span class='vc_empty_space_inner'> <span class='empty_space_image'></span> </span></div></div></div></div>";
	}
	wp_reset_query();
}

add_shortcode( 'program_shortcode', 'custom_program_shortcode' );


function custom_related_post_shortcode() {
	global $post;
	$orig_post = $post;
	//console.log("shortcode");
	$post_type = get_post_type( $post );

	if ( $post_type == 'page' ) {
		$related_episodes = get_field( 'related_episodes', $post->ID );
		$program_episode  = get_field( 'select_programs', $post->ID );
		if ( empty( $related_episodes ) ) {
			$query = new WP_Query( array(
				'post_type'         => 'page',
				'post_status'       => 'publish',
				'meta_key'          => 'select_programs',
				'meta_value'        => $program_episode,
				'_shuffle_and_pick' => 3, // <-- our custom argument
				'post__not_in'      => array( get_the_ID() )
			) );
			//$query=shuffle($query1);
			//echo '<pre>';
			//print_r($query);die;
			$i = 0;
			while ( $query->have_posts() /*&& $i < 3*/ ) {
				$query->the_post();
				$post_id            = get_the_ID();
				$post_url           = get_permalink( $post_id );
				$post_thumbnail_url = get_field( 'thumbnail_upload', $post_id );
				if ( ! empty( $post_thumbnail_url ) ) {
					echo "<div class='pic-curved wpb_column vc_column_container vc_col-sm-4'><div class='vc_column-inner'> <div class='wpb_wrapper'> <div class='q_image_with_text_over q_iwto_hover'>    <div class='shader' style='background-color: rgba(0, 0, 0, 0.01);'></div> <div class='shader_hover' style='background-color: rgba(39, 47, 55, 0.8);'></div><img itemprop='image' alt='' src='" . $post_thumbnail_url . "' class='lazyload' />  <div class='text'> <table>  <tr> <td><h3 class='caption no_icon' style=''></h3></td> </tr> </table> <table>  <tr> <td>  <div class='desc'><a itemprop='url' href='" . $post_url . "' target='_self' class='qbutton default' style=''>Listen Now</a></div> </td> </tr> </table>  </div> </div>  <div class='vc_empty_space' style='height: 15px;'> <span class='vc_empty_space_inner'>  <span class='empty_space_image'></span> </span> </div>  </div>  </div> </div> ";
					//$i++;
				}
			}
			wp_reset_query();
		}
	} elseif ( $post_type == 'program' ) {
		$related_programs = get_field( 'you_may_also_like_programs', $post->ID );
		if ( empty( $related_programs ) ) {
			$query = new WP_Query( array(
				'post_type'         => 'program',
				'post_status'       => 'publish',
				'orderby'           => 'rand',
				'_shuffle_and_pick' => 3, // <-- our custom argument
				'post__not_in'      => array( get_the_ID() )
				//'posts_per_page' => 3
			) );
			//echo '<pre>';
			//print_r($query);die;
			$i = 0;
			while ( $query->have_posts() /*&& $i < 3*/ ) {
				$query->the_post();
				$post_id            = get_the_ID();
				$post_url           = get_permalink( $post_id );
				$post_thumbnail_url = get_field( 'program_thumbnail_image_upload', $post_id );
				if ( ! empty( $post_thumbnail_url ) ) {
					echo "<div class='pic-curved wpb_column vc_column_container vc_col-sm-4'> <div class='vc_column-inner'><div class='wpb_wrapper'> <div class='q_image_with_text_over q_iwto_hover'>  <div class='shader' style='background-color: rgba(0, 0, 0, 0.01);'></div>  <div class='shader_hover' style='background-color: rgba(39, 47, 55, 0.8);'></div>  <img itemprop='image' alt='' src='" . $post_thumbnail_url . "' class='lazyload' />    <div class='text'>   <table>  <tr> <td><h3 class='caption no_icon' style=''></h3></td>  </tr>  </table>   <table>   <tr> <td>  <div class='desc'><a itemprop='url' href='" . $post_url . "' target='_self' class='qbutton default' style=''>Listen Now</a></div>  </td> </tr> </table>  </div></div> <div class='vc_empty_space' style='height: 15px;'>  <span class='vc_empty_space_inner'> <span class='empty_space_image'></span>   </span> </div>  </div>  </div> </div>	";
					//$i++;
				}
			}
			wp_reset_query();
		}
	}
}

add_shortcode( 'custom_related_post', 'custom_related_post_shortcode' );


add_filter( 'rp4wp_append_content', '__return_false' );


// Meta fields to select from already-selected tags.
// - Pages use taxonomy "tags"
// - Posts use taxonomy "post_tag"
add_action( 'add_meta_boxes', function () {
	// Pages: taxonomy "tags"
	add_meta_box(
		'scn_page_selected_tags_meta',
		'Primary Tag (from selected tags)',
		'scn_render_selected_tags_meta_box_pages',
		'page',
		'side',
		'default'
	);

	// Posts: taxonomy "post_tag"
	add_meta_box(
		'scn_post_selected_post_tags_meta',
		'Related Post Tag (from selected post_tags)',
		'scn_render_selected_tags_meta_box_posts',
		'post',
		'side',
		'default'
	);
} );

/**
 * Render meta box for Pages (taxonomy = tags)
 */
function scn_render_selected_tags_meta_box_pages( $post ) {
	$taxonomy = 'tags'; // taxonomy used on pages per request
	wp_nonce_field( 'scn_save_selected_tag_meta', 'scn_selected_tag_nonce' );

	$options = array();
	if ( taxonomy_exists( $taxonomy ) ) {
		$assigned_terms = get_the_terms( $post->ID, $taxonomy );
		if ( ! is_wp_error( $assigned_terms ) && ! empty( $assigned_terms ) ) {
			foreach ( $assigned_terms as $term ) {
				$options[ $term->term_id ] = $term->name;
			}
			// Sort options by name for better UX.
			asort( $options, SORT_NATURAL | SORT_FLAG_CASE );
		}
	}

	$current = get_post_meta( $post->ID, '_scn_selected_page_tag', true );

	echo '<p><label for="scn_selected_page_tag">Choose one of the selected tags:</label></p>';
	echo '<select id="scn_selected_page_tag" name="scn_selected_page_tag" style="width:100%;">';
	echo '<option value="">— None —</option>';
	foreach ( $options as $term_id => $label ) {
		printf(
			'<option value="%d"%s>%s</option>',
			(int) $term_id,
			selected( (int) $current, (int) $term_id, false ),
			esc_html( $label )
		);
	}
	echo '</select>';

	if ( empty( $options ) ) {
		echo '<p style="margin-top:8px;color:#666;">No tags are selected on this page. Assign some tags in the Tags box first.</p>';
	}
}

/**
 * Render meta box for Posts (taxonomy = post_tag)
 */
function scn_render_selected_tags_meta_box_posts( $post ) {
	$taxonomy = 'post_tag';
	wp_nonce_field( 'scn_save_selected_tag_meta', 'scn_selected_tag_nonce' );

	$options = array();
	if ( taxonomy_exists( $taxonomy ) ) {
		$assigned_terms = get_the_terms( $post->ID, $taxonomy );
		if ( ! is_wp_error( $assigned_terms ) && ! empty( $assigned_terms ) ) {
			foreach ( $assigned_terms as $term ) {
				$options[ $term->term_id ] = $term->name;
			}
			asort( $options, SORT_NATURAL | SORT_FLAG_CASE );
		}
	}

	$current = get_post_meta( $post->ID, '_scn_selected_post_tag', true );

	echo '<p><label for="scn_selected_post_tag">Choose one of the selected post tags:</label></p>';
	echo '<select id="scn_selected_post_tag" name="scn_selected_post_tag" style="width:100%;">';
	echo '<option value="">— None —</option>';
	foreach ( $options as $term_id => $label ) {
		printf(
			'<option value="%d"%s>%s</option>',
			(int) $term_id,
			selected( (int) $current, (int) $term_id, false ),
			esc_html( $label )
		);
	}
	echo '</select>';

	if ( empty( $options ) ) {
		echo '<p style="margin-top:8px;color:#666;">No post tags are selected on this post. Assign some tags in the Tags panel first.</p>';
	}
}

/**
 * Save meta box selections safely and only if chosen term is among assigned terms
 */
// Run after taxonomies are saved to avoid wiping the selected primary tag when terms
// haven’t been persisted yet (Gutenberg/REST timing).
add_action( 'save_post', function ( $post_id ) {
	// Basic checks
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! isset( $_POST['scn_selected_tag_nonce'] )
	     || ! wp_verify_nonce( $_POST['scn_selected_tag_nonce'],
			'scn_save_selected_tag_meta' )
	) {
		return;
	}

	// Capability checks
	if ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) {
		if ( ! current_user_can( 'edit_page', $post_id ) ) {
			return;
		}
	} else {
		if ( ! current_user_can( 'edit_post', $post_id ) ) {
			return;
		}
	}

	// Helper to validate selection against assigned terms and store readable name
	$validate_and_save = function ( $meta_key, $maybe_id, $taxonomy ) use ( $post_id ) {
		$maybe_id      = is_string( $maybe_id ) ? sanitize_text_field( wp_unslash( $maybe_id ) ) : $maybe_id;
		$name_meta_key = $meta_key . '_name';

		if ( $maybe_id === '' ) {
			delete_post_meta( $post_id, $meta_key );
			delete_post_meta( $post_id, $name_meta_key );

			return;
		}

		$maybe_id = (int) $maybe_id;

		if ( ! taxonomy_exists( $taxonomy ) ) {
			// Taxonomy missing -> don't save stray values
			delete_post_meta( $post_id, $meta_key );
			delete_post_meta( $post_id, $name_meta_key );

			return;
		}

		$assigned_terms = get_the_terms( $post_id, $taxonomy );
		if ( is_wp_error( $assigned_terms ) ) {
			// If terms can't be fetched right now, do not modify existing selection.
			return;
		}
		if ( empty( $assigned_terms ) ) {
			// Terms may not be persisted yet (editor timing). Avoid clearing previous selection.
			return;
		}

		$assigned_ids = wp_list_pluck( $assigned_terms, 'term_id' );
		if ( in_array( $maybe_id, $assigned_ids, true ) ) {
			update_post_meta( $post_id, $meta_key, $maybe_id );

			// Save readable name alongside the ID for easy display.
			$term_obj = get_term( $maybe_id, $taxonomy );
			if ( $term_obj && ! is_wp_error( $term_obj ) ) {
				update_post_meta( $post_id, $name_meta_key, sanitize_text_field( $term_obj->name ) );
			} else {
				delete_post_meta( $post_id, $name_meta_key );
			}
		} else {
			// The selected term isn’t among the post's assigned terms at this moment.
			// This can occur due to timing; avoid clearing previous value.
			return;
		}
	};

	// Save for Page (taxonomy=tags)
	if ( isset( $_POST['scn_selected_page_tag'] ) && ( isset( $_POST['post_type'] ) && 'page' === $_POST['post_type'] ) ) {
		$validate_and_save( '_scn_selected_page_tag', $_POST['scn_selected_page_tag'], 'tags' );
	}

	// Save for Post (taxonomy=post_tag)
	if ( isset( $_POST['scn_selected_post_tag'] ) && ( ! isset( $_POST['post_type'] ) || 'post' === $_POST['post_type'] ) ) {
		$validate_and_save( '_scn_selected_post_tag', $_POST['scn_selected_post_tag'], 'post_tag' );
	}
}, 100 );

/**
 * Get the readable selected tag name for a post.
 *
 * Checks the pre-saved name meta first, then falls back to resolving via the stored ID.
 *
 * @param int $post_id
 *
 * @return string Readable term name or empty string if none.
 */
if ( ! function_exists( 'scn_get_selected_tag_name' ) ) {
	function scn_get_selected_tag_name( $post_id ) {
		// Prefer stored readable names if available.
		$name = get_post_meta( $post_id, '_scn_selected_page_tag_name', true );
		if ( is_string( $name ) && $name !== '' ) {
			return $name;
		}

		$name = get_post_meta( $post_id, '_scn_selected_post_tag_name', true );
		if ( is_string( $name ) && $name !== '' ) {
			return $name;
		}

		// Fallback: compute name from stored IDs.
		$id = (int) get_post_meta( $post_id, '_scn_selected_page_tag', true );
		if ( $id > 0 ) {
			$term = get_term( $id, 'tags' );
			if ( $term && ! is_wp_error( $term ) ) {
				return $term->name;
			}
		}

		$id = (int) get_post_meta( $post_id, '_scn_selected_post_tag', true );
		if ( $id > 0 ) {
			$term = get_term( $id, 'post_tag' );
			if ( $term && ! is_wp_error( $term ) ) {
				return $term->name;
			}
		}

		return '';
	}
}

// FacetWP functions
add_filter( 'facetwp_facet_dropdown_show_counts', '__return_false' );

/*add_filter( 'get_search_form', function( $form ) {
	$form = str_replace( 'name="s"', 'name="_search_filter"', $form );
	$form = preg_replace( '/action=".*"/', 'action="/search-results/"', $form );
	return $form;
} );
*/


add_filter( 'facetwp_builder_item_value', function ( $value, $item ) {
	if ( 'post_excerpt' == $item['source'] ) {
		//$value = substr( $value, 0, 320 );
		$value = wp_trim_words( $value, 40, '...' );
	}

	return $value;
}, 10, 2 );

/**
 ** displays alternate html when no posts are found
 **/
add_filter( 'facetwp_template_html', function ( $output, $class ) {
	if ( $class->query->found_posts < 1 ) {
		$output = 'No results found.';
		// add below if you want to output any facets from the filters
		// change my_facet_name to the name of your facet

	}

	return $output;
}, 10, 2 );

// Custom Support for the _shuffle_and_pick WP_Query argument.

add_filter( 'the_posts', function ( $posts, \WP_Query $query ) {
	if ( $pick = $query->get( '_shuffle_and_pick' ) ) {
		shuffle( $posts );
		$posts = array_slice( $posts, 0, (int) $pick );
	}

	return $posts;
}, 10, 2 );

function preserve_random_order( $orderby ) {
	$seed    = floor( time() / 1 ); // 10800 randomize every 3 hours
	$orderby = str_replace( 'RAND()', "RAND({$seed})", $orderby );

	return $orderby;
}

add_filter( 'posts_orderby', 'preserve_random_order' );


add_filter( 'wp_kses_allowed_html', 'acf_add_allowed_iframe_tag', 10, 2 );
function acf_add_allowed_iframe_tag( $tags, $context ) {
	if ( $context === 'acf' ) {
		$tags['iframe'] = array(
			'src'             => true,
			'height'          => true,
			'width'           => true,
			'frameborder'     => true,
			'allowfullscreen' => true,
		);
	}

	return $tags;
}

// apply_filters('acf/the_field/allow_unsafe_html', false, $selector, $post_id, $field_type, $field_object);

add_filter( 'acf/the_field/allow_unsafe_html', function ( $allowed, $selector ) {
	// return true;
	return $allowed;
}, 10, 2 );

add_filter( 'acf/the_field/escape_html_optin', '__return_true' );

function scn_is_splide_page() {
	return true;
	/*return is_front_page()
	       || is_page( 'about' )
	       || is_page( 'our-team-and-hosts' )
	       || is_page( 'upcoming-live-programming' )
	       || is_page( 'on-demand-programming' )
	       || is_singular( 'program' )
	       || is_singular( 'brands' )
	       || is_page( 'work-with-us' )
	       || is_page( 'podcasts-and-livestreams' )
	       || is_page( 'webinars' )
	       || is_page( 'resource-hub' )
	       || is_page( 'blog' )
	       || is_page( 'white-paper' )
	       || is_page( 'ebook' )
	       || is_page( 'article' )
	       || is_page( 'news' )
	       || is_page( 'guide' )
	       || is_page( 'dev' )
	       || is_page( 'success-stories' );*/
}

/*
Sample:
scn_render_if_no_filters('path/to/part', ['foo' => 'bar']);
*/
function scn_render_if_no_filters( string $template_slug, array $template_args = [] ): void {
	$qs_s = isset( $_GET['s'] ) ? sanitize_text_field( wp_unslash( $_GET['s'] ) ) : '';
	if ( $qs_s === '' && isset( $_GET['search'] ) ) {
		$qs_s = sanitize_text_field( wp_unslash( $_GET['search'] ) );
	}
	$qs_ind = isset( $_GET['industries'] ) ? sanitize_text_field( wp_unslash( $_GET['industries'] ) ) : '';
	if ( $qs_ind === '' && $qs_s === '' ) {
		get_template_part( $template_slug, null, $template_args );
	}
}

/**
 * Extract MP3 media player URLs from content
 *
 * @param string $content The content to search through
 *
 * @return array Array of MP3 URLs found in the content
 */
function get_the_media_player( $content ) {
	if ( empty( $content ) ) {
		return [];
	}

	$mp3_urls = [];

	// Pattern 1: Direct MP3 links
	preg_match_all( '/https?:\/\/[^\s<>"]+\.mp3/i', $content, $direct_matches );
	if ( ! empty( $direct_matches[0] ) ) {
		$mp3_urls = array_merge( $mp3_urls, $direct_matches[0] );
	}

	// Pattern 2: Audio shortcodes [audio src="..."]
	preg_match_all( '/\[audio[^\]]*src=["\']([^"\']*\.mp3)["\'][^\]]*\]/i', $content, $shortcode_matches );
	if ( ! empty( $shortcode_matches[1] ) ) {
		$mp3_urls = array_merge( $mp3_urls, $shortcode_matches[1] );
	}

	// Pattern 3: HTML audio tags
	preg_match_all( '/<audio[^>]*>.*?<source[^>]*src=["\']([^"\']*\.mp3)["\'][^>]*>.*?<\/audio>/is',
		$content,
		$html_matches );
	if ( ! empty( $html_matches[1] ) ) {
		$mp3_urls = array_merge( $mp3_urls, $html_matches[1] );
	}

	// Pattern 4: Audio tags with direct src
	preg_match_all( '/<audio[^>]*src=["\']([^"\']*\.mp3)["\'][^>]*>/i', $content, $audio_src_matches );
	if ( ! empty( $audio_src_matches[1] ) ) {
		$mp3_urls = array_merge( $mp3_urls, $audio_src_matches[1] );
	}

	// Remove duplicates and return
	return array_unique( $mp3_urls );
}

/**
 * Get first MP3 URL from content
 *
 * @param string $content The content to search through
 *
 * @return string|null First MP3 URL found or null if none
 */
function get_first_media_player( $content ) {
	$mp3_urls = get_the_media_player( $content );

	return ! empty( $mp3_urls ) ? $mp3_urls[0] : null;
}

/**
 * Extract download links from anchor tags containing "download" text
 *
 * @param string $content The content to search through
 *
 * @return array Array of download URLs found in the content
 */
function get_the_download_links( $content ) {
	if ( empty( $content ) ) {
		return [];
	}

	$download_urls = [];

	// Pattern to match <a> tags containing "download" text (case insensitive)
	preg_match_all( '/<a[^>]*href=["\']([^"\']+)["\'][^>]*>(.*?)<\/a>/is', $content, $matches, PREG_SET_ORDER );

	foreach ( $matches as $match ) {
		$url       = $match[1];
		$link_text = $match[2];

		// Check if the link text contains "download" (case insensitive)
		if ( stripos( $link_text, 'download' ) !== false ) {
			// Replace scnnowdev.wpenginepowered.com with supplychainnow.com
			$url             = str_replace( 'scnnowdev.wpenginepowered.com', 'supplychainnow.com', $url );
			$download_urls[] = $url;
		}
	}

	// Remove duplicates and return
	return array_unique( $download_urls );
}

/**
 * Get first download link from content
 *
 * @param string $content The content to search through
 *
 * @return string|null First download URL found or null if none
 */
function get_first_download_link( $content ) {
	$download_urls = get_the_download_links( $content );

	return ! empty( $download_urls ) ? $download_urls[0] : null;
}

// for example "echo esc_html( kv_build_excerpt( get_the_content( null, false, get_the_ID() ) ) );"
function kv_build_excerpt( $text, $words = 200 ) {
	// 1) get content
	$content = $text;

	// 2) remove block wrappers and shortcodes
	if ( function_exists( 'excerpt_remove_blocks' ) ) {
		$content = excerpt_remove_blocks( $content );
	}
	$content = strip_shortcodes( $content );

	// 3) run the_content filters if you need embeds converted, then strip tags
	$content = apply_filters( 'the_content', $content );
	$content = wp_strip_all_tags( $content, true );

	// 4) normalize spaces and decode entities like &nbsp; and &amp;
	$content = preg_replace( '/\x{00A0}/u', ' ', $content ); // non-breaking space
	$content = preg_replace( '/\s+/', ' ', $content );
	$content = html_entity_decode( $content, ENT_QUOTES, get_bloginfo( 'charset' ) );

	// 5) trim to N words
	return wp_trim_words( trim( $content ), $words, '…' );
}

// for example
// esc_html( kv_build_acf_fields_like_excerpt( [
//   get_field( "episode_summary", get_the_ID() ),
//	 get_the_content( null, false, get_the_ID() ),
// ] ) );
function kv_build_acf_fields_like_excerpt( $text, $words = 200 ) {
	// Allow both string and array inputs.
	$sources = is_array( $text ) ? $text : [ $text ];

	$chosen = '';
	foreach ( $sources as $src ) {
		if ( is_string( $src ) && trim( $src ) !== '' ) {
			$chosen = $src;
			break;
		}
	}

	// Normalize Visual Composer/shortcodes-heavy content to plain text.
	if ( $chosen !== '' ) {
		// Render any nested shortcodes to avoid keeping placeholders, then remove shortcodes and tags.
		$rendered      = do_shortcode( $chosen );
		$no_shortcodes = strip_shortcodes( $rendered );
		$plain         = wp_strip_all_tags( $no_shortcodes, true );
		$plain         = trim( preg_replace( '/\s+/', ' ', $plain ) );

		// If stripped result is empty, fall back to original plain-stripped content.
		if ( $plain === '' ) {
			$plain = wp_strip_all_tags( strip_shortcodes( $chosen ), true );
			$plain = trim( preg_replace( '/\s+/', ' ', $plain ) );
		}

		return kv_build_excerpt( $plain, $words );
	}

	return kv_build_excerpt( '', $words );
}

function override_tinymce_option( $initArray ) {
	$opts                                 = '*[*]';
	$initArray['valid_elements']          = $opts;
	$initArray['extended_valid_elements'] = $opts;

	return $initArray;
}

add_filter( 'tiny_mce_before_init', 'override_tinymce_option' );

/*
add_action('admin_head', 'my_custom_css');

function my_custom_css() {
  echo '<style>
    #acf-group_6064825bb6648{display:none!important;}
  </style>';
}


function custom_admin_js() {
    //$url = get_bloginfo('template_directory') . '/js/wp-admin.js';
    echo '"<script type="text/javascript">	
	jQuery( document ).ready(function() {	
	
		jQuery("#acf-field_60215fe798ec6 option:selected").each(function(){
        var $this = jQuery(this);
		   if ($this.length) {
			var selText = $this.text();
			console.log(selText);
			
			if( selText == "Supply Chain Now en Espanol"){
				jQuery("div #acf-group_6064825bb6648").attr("style", "display: block!important");	 
			}else{
			  jQuery("div #acf-group_6064825bb6648").attr("style", "display: none!important");	
			}
			
		   }else{
			   jQuery("div #acf-group_6064825bb6648").attr("style", "display: none!important");
		   }
		});
		
	 jQuery("select#acf-field_60215fe798ec6").on( "change", function() {		
		jQuery("#acf-field_60215fe798ec6 option:selected").each(function(){
        var $this = jQuery(this);
		console.log($this.length);
		   if ($this.length) {
			var selText = $this.text();
			console.log(selText);
			
			if( selText == "Supply Chain Now en Espanol"){
				jQuery("div #acf-group_6064825bb6648").attr("style", "display: block!important");	 
			}else{
			  jQuery("div #acf-group_6064825bb6648").attr("style", "display: none!important");	
			}
			
		   }else{
			   jQuery("div #acf-group_6064825bb6648").attr("style", "display: none!important");
		   }
		});
	
	 });
	
	});

	</script>"';
}
add_action('admin_footer', 'custom_admin_js');

*/

// Include custom [btn] shortcode file
$main_shortocdes = get_stylesheet_directory() . '/components/shortcodes/index.php';
if ( file_exists( $main_shortocdes ) ) {
	require_once $main_shortocdes;
}

// Metabox
$main_metabox = get_stylesheet_directory() . '/metabox/index.php';
if ( file_exists( $main_metabox ) ) {
	require_once $main_metabox;
}

/**
 * Move selected plugin pages under Settings and hide their top-level menus.
 */
add_action( 'admin_menu', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}

	// List the plugin page slugs you want to move (the value after ?page=)
	$targets = [
		'windpress', // WindPress
	];

	// Ensure we know which plugin slugs actually exist in the admin menu
	global $menu;
	$existing_slugs = [];
	foreach ( (array) $menu as $m ) {
		if ( ! empty( $m[2] ) && in_array( $m[2], $targets, true ) ) {
			$existing_slugs[] = $m[2];
		}
	}
	$existing_slugs = array_unique( $existing_slugs );

	// Create Settings links that redirect to the original pages (only for existing plugins)
	foreach ( $existing_slugs as $slug ) {
		$title = ucwords( str_replace( [ '-', '_' ], ' ', $slug ) ); // fallback title
		// Try to grab the real title from the admin menu if available
		foreach ( (array) $menu as $m ) {
			if ( ! empty( $m[2] ) && $m[2] === $slug && ! empty( $m[0] ) ) {
				$title = wp_strip_all_tags( $m[0] );
				break;
			}
		}

		// Add under Settings → {Title}
		add_submenu_page(
			'options-general.php',
			$title,
			$title,
			'manage_options',
			"kv-relay-$slug",
			function () use ( $slug ) {
				wp_safe_redirect( admin_url( "admin.php?page=$slug" ) );
				exit;
			}
		);
	}

	// Hide original top-level menus (do this late) - only for existing plugins
	foreach ( $existing_slugs as $slug ) {
		remove_menu_page( $slug );
	}
}, PHP_INT_MAX );
// Belt and suspenders: if a plugin re-adds its menu after ours (The first function is more defensive and check-based, removing only if the slug exists in $menu)
add_action( 'admin_head', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	// Only attempt to remove known slugs that exist
	global $menu;
	$existing_slugs = [];
	foreach ( [ 'windpress', ] as $slug ) {
		foreach ( (array) $menu as $m ) {
			if ( ! empty( $m[2] ) && $m[2] === $slug ) {
				$existing_slugs[] = $slug;
				break;
			}
		}
	}
	$existing_slugs = array_unique( $existing_slugs );
	foreach ( $existing_slugs as $slug ) {
		remove_menu_page( $slug );
	}
}, PHP_INT_MAX );
// Belt and suspenders: if a plugin re-adds its menu after ours (The second is a straightforward call, assuming for example 'windpress' is there)
add_action( 'admin_head', function () {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	// List all slugs to be hidden
	$slugs = [ 'windpress', ];
	foreach ( $slugs as $slug ) {
		remove_menu_page( $slug );
	}
}, PHP_INT_MAX );

// functions.php
add_action( 'admin_head-post.php', 'kv_hide_acf_groups_on_posts_pages' );
add_action( 'admin_head-post-new.php', 'kv_hide_acf_groups_on_posts_pages' );

function kv_hide_acf_groups_on_posts_pages() {
	$screen = get_current_screen();
	if ( ! $screen || ! in_array( $screen->post_type, [ 'post', 'page' ], true ) ) {
		return;
	}

	// list the ACF field group keys you want hidden on posts/pages
	$groups = [
		'group_6113b4ccbea22', // Episode Quote Section
		'group_601acba8a6740', // Featured Guests For Page
		'group_601ada8fdbc9b', // Hosts Section For Page
		'group_601c5aae4dc5f', // Episode Additional Resources
		'group_602c2d5f50947', // Related Episodes
	];

	echo '<style>';
	foreach ( $groups as $key ) {
		// ACF metabox has data-id="group_xxx"
		echo '#acf-' . esc_attr( $key ) . '{display:none !important;}';
	}
	echo '</style>';
}