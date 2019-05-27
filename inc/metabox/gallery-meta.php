<?php
$page_id = 0;
if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
	$page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}
$pustdep_page_template = get_post_meta($page_id, '_wp_page_template', true);
if('template-parts/gallery.php' != $pustdep_page_template){
	return;
}

function pustdep_home_meta_gallery() {

	$prefix = '_pustdep_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_page_slide',
		'title'        => __( 'Gallery', 'pustdepartment' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$gallery_group = $cmb->add_field( array(
		'name' => __( 'gallery', 'pustdepartment' ),
		'id' => $prefix . 'gallery',
		'type' => 'group',
	) );

	$cmb->add_group_field( $gallery_group, array(
		'name' => __( 'Image', 'pustdepartment' ),
		'id' => $prefix . 'image',
		'type' => 'file',
	) );

	$cmb->add_group_field( $gallery_group, array(
		'name' => __( 'Title', 'pustdepartment' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

}

add_action( 'cmb2_init', 'pustdep_home_meta_gallery' );