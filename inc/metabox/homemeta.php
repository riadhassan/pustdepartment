<?php
$page_id = 0;
if ( isset( $_REQUEST['post'] ) || isset( $_REQUEST['post_ID'] ) ) {
	$page_id = empty( $_REQUEST['post_ID'] ) ? $_REQUEST['post'] : $_REQUEST['post_ID'];
}
$pustdep_page_template = get_post_meta($page_id, '_wp_page_template', true);
if('template-parts/home-page.php' != $pustdep_page_template){
	return;
}

function pustdep_home_meta_slider() {

	$prefix = '_pustdep_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_page_slide',
		'title'        => __( 'Home page', 'pustdepartment' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$slider_group = $cmb->add_field( array(
		'name' => __( 'Slider', 'pustdepartment' ),
		'id' => $prefix . 'slider',
		'type' => 'group',
	) );

	$cmb->add_group_field( $slider_group, array(
		'name' => __( 'Title', 'pustdepartment' ),
		'id' => $prefix . 'title',
		'type' => 'text',
	) );

	$cmb->add_group_field( $slider_group, array(
		'name' => __( 'Image', 'pustdepartment' ),
		'id' => $prefix . 'image',
		'type' => 'file',
	) );

}

add_action( 'cmb2_init', 'pustdep_home_meta_slider' );

function pustdep_home_meta() {

	$prefix = '_pustdep_';

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . 'home_page',
		'title'        => __( 'Home page', 'pustdepartment' ),
		'object_types' => array( 'page' ),
		'context'      => 'normal',
		'priority'     => 'default',
	) );

	$cmb->add_field( array(
		'name' => __( 'Chairman Message', 'pustdepartment' ),
		'id' => $prefix . 'chairman_message',
		'type' => 'wysiwyg',
	) );

	$cmb->add_field( array(
		'name' => __( 'Chairman Picture', 'pustdepartment' ),
		'id' => $prefix . 'chairman_picture',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'Our Vision', 'pustdepartment' ),
		'id' => $prefix . 'our_vision',
		'type' => 'wysiwyg',
	) );

	$cmb->add_field( array(
		'name' => __( 'Vision Image', 'pustdepartment' ),
		'id' => $prefix . 'vision_image',
		'type' => 'file',
	) );

	$cmb->add_field( array(
		'name' => __( 'About Department', 'pustdepartment' ),
		'id' => $prefix . 'about_department',
		'type' => 'wysiwyg',
	) );

	$cmb->add_field( array(
		'name' => __( 'About Department Image', 'pustdepartment' ),
		'id' => $prefix . 'about_department_image',
		'type' => 'file',
	) );

}
add_action( 'cmb2_init', 'pustdep_home_meta' );

