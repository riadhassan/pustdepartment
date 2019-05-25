<?php
$page_id = 0;
if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
	$page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}
$pustdep_page_template = get_post_meta($page_id, '_wp_page_template', true);
if('template-parts/downloads.php' != $pustdep_page_template){
	return;
}

function pustdep_download_meta_slider() {

	$prefix = '_pustdep_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'downloaads',
		'title'        => __( 'Download', 'pustdepartment' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$slider_group = $cmb->add_field( array(
		'name' => __( 'downloads', 'pustdepartment' ),
		'id' => $prefix . 'dwnFile',
		'type' => 'group',
	) );

	$cmb->add_group_field( $slider_group, array(
		'name' => __( 'Title', 'pustdepartment' ),
		'id' => $prefix . 'downtitle',
		'type' => 'text',
	) );

	$cmb->add_group_field( $slider_group, array(
		'name' => __( 'PDF', 'pustdepartment' ),
		'id' => $prefix . 'downpdf',
		'type' => 'file',
	) );

	$cmb->add_group_field( $slider_group, array(
		'name' => __( 'DOC', 'pustdepartment' ),
		'id' => $prefix . 'downdoc',
		'type' => 'file',
	) );

}

add_action( 'cmb2_init', 'pustdep_download_meta_slider' );