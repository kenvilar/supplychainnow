<?php

// Add meta box for Meet the Team
function add_meet_the_team_meta_box() {
	add_meta_box(
		'meet_the_team_details',
		'Team Member Details',
		'meet_the_team_meta_box_callback',
		'meet_the_team'
	);
}

add_action( 'add_meta_boxes', 'add_meet_the_team_meta_box' );

// Meta box callback function
function meet_the_team_meta_box_callback( $post ) {
	wp_nonce_field( 'save_meet_the_team_meta', 'meet_the_team_nonce' );

	$linkedin_url = get_post_meta( $post->ID, 'linkedin_url', true );
	$designation  = get_post_meta( $post->ID, 'designation', true );

	echo '<table class="form-table">';
	echo '<tr>';
	echo '<th><label for="designation">Designation</label></th>';
	echo '<td><input type="text" id="designation" name="designation" value="' . esc_attr( $designation ) . '" class="regular-text" /></td>';
	echo '</tr>';
	echo '<tr>';
	echo '<th><label for="linkedin_url">LinkedIn URL</label></th>';
	echo '<td><input type="url" id="linkedin_url" name="linkedin_url" value="' . esc_attr( $linkedin_url ) . '" class="regular-text" /></td>';
	echo '</tr>';
	echo '</table>';
}

// Save meta box data
function save_meet_the_team_meta( $post_id ) {
	if ( ! isset( $_POST['meet_the_team_nonce'] )
	     || ! wp_verify_nonce( $_POST['meet_the_team_nonce'],
			'save_meet_the_team_meta' )
	) {
		return;
	}

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}

	if ( ! current_user_can( 'edit_post', $post_id ) ) {
		return;
	}

	if ( isset( $_POST['designation'] ) ) {
		update_post_meta( $post_id, 'designation', sanitize_text_field( $_POST['designation'] ) );
	}

	if ( isset( $_POST['linkedin_url'] ) ) {
		update_post_meta( $post_id, 'linkedin_url', sanitize_url( $_POST['linkedin_url'] ) );
	}
}

add_action( 'save_post', 'save_meet_the_team_meta' );