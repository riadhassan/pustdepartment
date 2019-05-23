<?php
add_action( 'cmb2_init', 'cmb2_add_metabox_date_file' );
function cmb2_add_metabox_date_file() {

	$prefix = '_dep_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'date_and_file',
		'title'        => __( 'Date and file', 'pustdepartment' ),
		'object_types' => array( 'event', 'notice' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Date', 'pustdepartment' ),
		'id' => $prefix . 'date',
		'type' => 'text_date',
	) );


	$cmb->add_field( array(
		'name' => __( 'File', 'pustdepartment' ),
		'id' => $prefix . 'file',
		'type' => 'file',
		'default' => '0',
	) );

}
