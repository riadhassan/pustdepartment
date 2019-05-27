<?php

function cmb2_add_metabox_faculty() {

$prefix = '_pustdep_';

$cmb = new_cmb2_box( array(
'id'           => $prefix . 'faculty',
'title'        => __( 'Faculty', 'pustdepartment' ),
'object_types' => array( 'teacher' ),
'context'      => 'normal',
'priority'     => 'default',
) );


$cmb->add_field( array(
'name' => __( 'Designation', 'pustdepartment' ),
'id' => $prefix . 'designation',
'type' => 'text',
) );

	$cmb->add_field( array(
		'name' => __( 'Qualification', 'pustdepartment' ),
		'id' => $prefix . 'qualification',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'research Area', 'pustdepartment' ),
		'id' => $prefix . 'rese_area',
		'type' => 'text',
	) );

$cmb->add_field( array(
'name' => __( 'Department', 'pustdepartment' ),
'id' => $prefix . 'department',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'Campus', 'pustdepartment' ),
'id' => $prefix . 'campus',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'Mobile 1', 'pustdepartment' ),
'id' => $prefix . 'mobile_1',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'Mbile 2', 'pustdepartment' ),
'id' => $prefix . 'mbile_2',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'PABX', 'pustdepartment' ),
'id' => $prefix . 'pabx',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'IP Telephone', 'pustdepartment' ),
'id' => $prefix . 'ip_telephone',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'Email 1', 'pustdepartment' ),
'id' => $prefix . 'email_1',
'type' => 'text',
) );

$cmb->add_field( array(
'name' => __( 'Email 2', 'pustdepartment' ),
'id' => $prefix . 'email_2',
'type' => 'text',
) );

$cmb->add_field( array(
	'name' => __( 'User Slug', 'pustdepartment' ),
	'id' => $prefix . 'userslag',
	'type' => 'text',
) );

	$cmb->add_field( array(
		'name' => __( 'Chairman', 'cmb2' ),
		'id' => $prefix . 'chai',
		'type' => 'checkbox',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_metabox_faculty' );

function cmb2_attached_research() {
	$example_meta = new_cmb2_box( array(
		'id'           => '_pustdep_facu_research_field',
		'title'        => __( 'Attached research', 'pustdepartment' ),
		'object_types' => array( 'teacher' ), // Post type
		'context'      => 'normal',
		'priority'     => 'high',
		'show_names'   => false, // Show field names on the left
	) );
	$example_meta->add_field( array(
		'name'    => __( 'Attached Posts', 'pustdepartment' ),
		'desc'    => __( 'Drag posts from the left column to the right column to attach them to this page.<br />You may rearrange the order of the posts in the right column by dragging and dropping.', 'yourtextdomain' ),
		'id'      => '_pustdep_facu_research',
		'type'    => 'custom_attached_posts',
		'column'  => true, // Output in the admin post-listing as a custom column. https://github.com/CMB2/CMB2/wiki/Field-Parameters#column
		'options' => array(
			'show_thumbnails' => true, // Show thumbnails on the left
			'filter_boxes'    => true, // Show a text box for filtering the results
			'query_args'      => array(
				'posts_per_page' => 10,
				'post_type'      => 'research',
			), // override the get_posts args
		),
	) );
}
add_action( 'cmb2_init', 'cmb2_attached_research' );