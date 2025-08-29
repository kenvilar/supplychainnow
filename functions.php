<?php

add_post_type_support( 'page', 'excerpt' );

add_filter( 'redirect_canonical', function ( $redirect_url, $requested_url ) {
	if ( is_singular( 'brands' ) || is_page( 'resource-hub' ) || is_page( 'blog' ) || is_page( 'white-paper' ) || is_page( 'ebook' ) || is_page( 'article' ) || is_page( 'news' ) || is_page( 'guide' ) ) {
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
	$args = [
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
	return is_front_page()
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
	       || is_page( 'case-studies-customer-stories' );
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
