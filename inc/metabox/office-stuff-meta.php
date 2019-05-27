<?php
function cmb2_add_metabox_office_stuff() {

	$prefix = '_pustdep_office_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'office-stuff',
		'title'        => __( 'office-stuff', 'pustdepartment' ),
		'object_types' => array( 'officestuff' ),
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
		'name' => __( 'officer', 'cmb2' ),
		'id' => $prefix . 'officer',
		'type' => 'checkbox',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_metabox_office_stuff' );