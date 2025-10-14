<?php

/**
 * Create a metabox here for all pages and post with these plans;
 * - name the metabox as "Full Width"
 *  - - the field is select, the options are:
 *  - - - yes
 *  - - - no
 *  - - - default is no
 * - when the field is yes, it will add `.full-width` class to `.entry-content` element
 * - when the field is no, it will remove the `.full-width` class from `.entry-content` element if there is existing
 * */
function add_full_width_meta_box() {
	add_meta_box(
		'scn_full_width_metabox',
		'Full Width',
		'render_full_width_meta_box',
		[ 'page', 'post' ],
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'add_full_width_meta_box' );

// Render Full Width metabox
function render_full_width_meta_box( $post ) {
	wp_nonce_field( 'save_full_width_meta', 'full_width_nonce' );

	$full_width = get_post_meta( $post->ID, '_scn_full_width', true );
	$full_width = $full_width === 'yes' ? 'yes' : 'no';

	echo '<p><label for="scn_full_width">Enable full width layout:</label></p>';
	echo '<select id="scn_full_width" name="scn_full_width" style="width:100%;">';
	echo '<option value="no"' . selected( $full_width, 'no', false ) . '>No</option>';
	echo '<option value="yes"' . selected( $full_width, 'yes', false ) . '>Yes</option>';
	echo '</select>';
}

// Save Full Width metabox data
function save_full_width_meta( $post_id ) {
	if ( ! isset( $_POST['full_width_nonce'] )
	     || ! wp_verify_nonce( $_POST['full_width_nonce'], 'save_full_width_meta' )
	) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['scn_full_width'] ) ) {
		$value = sanitize_text_field( $_POST['scn_full_width'] );
		if ( in_array( $value, [ 'yes', 'no' ], true ) ) {
			update_post_meta( $post_id, '_scn_full_width', $value );
		}
	}
}

add_action( 'save_post', 'save_full_width_meta' );

// Add .full-width class to .entry-content on frontend
function add_full_width_class_to_content( $classes ) {
	if ( is_singular( [ 'page', 'post' ] ) ) {
		$full_width = get_post_meta( get_the_ID(), '_scn_full_width', true );
		if ( $full_width === 'yes' ) {
			$classes[] = 'full-width';
		}
	}

	return $classes;
}

add_filter( 'post_class', 'add_full_width_class_to_content' );