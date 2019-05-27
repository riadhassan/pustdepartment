<?php
function cmb2_attached_faculty() {
	$example_meta = new_cmb2_box( array(
		'id'           => '_pustdep_research_field',
		'title'        => __( 'Attached Faculty', 'pustdepartment' ),
		'object_types' => array( 'research' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false, // Show field names on the left
	) );
	$example_meta->add_field( array(
		'name'    => __( 'Attached Faculty', 'pustdepartment' ),
		'desc'    => __( 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.', 'yourtextdomain' ),
		'id'      => '_pustdep_RESEARCH_fac',
		'type'    => 'custom_attached_posts',
		'column'  => true,
		// Output in the admin post-listing as a custom column. https://github.com/CMB2/CMB2/wiki/Field-Parameters#column
		'options' => array(
			'show_thumbnails' => true, // Show thumbnails on the left
			'filter_boxes'    => true, // Show a text box for filtering the results
			'query_args'      => array(
				'posts_per_page' => -1,
				'post_type'      => 'teacher',
			), // override the get_posts args
		),
	) );
}

add_action( 'cmb2_init', 'cmb2_attached_faculty' );