<?php

/**
 * Create a metabox here for all pages and post with these plans:
 * - name the metabox as "Navbar Fixed"
 *  - - the field is checkbox, the options are:
 *  - - - true
 *  - - - false
 *  - - - default is false
 */

// Add Navbar Fixed metabox to pages and posts
function scn_add_navbar_fixed_meta_box() {
	add_meta_box(
		'scn_navbar_fixed_metabox',
		'Navbar Fixed',
		'scn_render_navbar_fixed_meta_box',
		array( 'page', 'post' ),
		'side',
		'default'
	);
}

add_action( 'add_meta_boxes', 'scn_add_navbar_fixed_meta_box' );

// Render Navbar Fixed metabox
function scn_render_navbar_fixed_meta_box( $post ) {
	wp_nonce_field( 'scn_save_navbar_fixed_meta', 'scn_navbar_fixed_nonce' );

	$value      = get_post_meta( $post->ID, '_scn_navbar_fixed', true );
	$is_checked = in_array( (string) $value, array( '1', 'true' ), true ); // default false

	echo '<p>';
	echo '<label for="scn_navbar_fixed">';
	echo '<input type="checkbox" id="scn_navbar_fixed" name="scn_navbar_fixed" value="1" ' . checked( $is_checked, true, false ) . ' />';
	echo ' Enable fixed navbar (true/false)</label>';
	echo '</p>';
	echo '<p style="color:#666;margin-top:8px;">Default: false</p>';
}

// Save Navbar Fixed metabox data
function scn_save_navbar_fixed_meta( $post_id ) {
	// Nonce check
	if ( ! isset( $_POST['scn_navbar_fixed_nonce'] ) || ! wp_verify_nonce( $_POST['scn_navbar_fixed_nonce'], 'scn_save_navbar_fixed_meta' ) ) {
		return;
	}

	// Autosave check
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
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

	// Save: checked => '1', unchecked => '0' (default false)
	$new_value = isset( $_POST['scn_navbar_fixed'] ) ? '1' : '0';
	update_post_meta( $post_id, '_scn_navbar_fixed', $new_value );
}

add_action( 'save_post', 'scn_save_navbar_fixed_meta' );