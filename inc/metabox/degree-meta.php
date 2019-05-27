<?php

function cmb2_add_metabox_degree() {

	$prefix = '_pust_degree';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_page_show',
		'title'        => __( 'Home Page Show', 'pustdepartment' ),
		'object_types' => array( 'degree' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'For Home Page', 'pustdepartment' ),
		'id' => $prefix . 'for_home_page',
		'type' => 'wysiwyg',
	) );

}
add_action( 'cmb2_init', 'cmb2_add_metabox_degree' );