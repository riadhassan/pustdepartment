<?php
add_action( 'cmb2_init', 'cmb2_add_metabox_std_atachment' );
function cmb2_add_metabox_std_atachment() {

	$prefix = '_pustdep_std_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'atachment',
		'title'        => __( 'Attachment', 'pustdepartment' ),
		'object_types' => array( 'studentsection' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Session', 'pustdepartment' ),
		'id' => $prefix . 'session',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Year-Semester', 'pustdepartment' ),
		'id' => $prefix . 'year_semester',
		'type' => 'text',
	) );

	$cmb->add_field( array(
		'name' => __( 'Attachment', 'pustdepartment' ),
		'id' => $prefix . 'attachment',
		'type' => 'file_list',
	) );

}