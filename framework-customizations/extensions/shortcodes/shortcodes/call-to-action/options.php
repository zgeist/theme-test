<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'title'         => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'desc'  => __( 'This can be left blank', 'fw' )
	),
	'message'       => array(
		'type'  => 'wp-editor',
		'label' => __( 'Content', 'fw' ),
		'desc'  => __( 'Enter some content for this Info Box', 'fw' )
	),
	'head_color' => array(
		'label'	=> __( 'Head color', 'fw' ),
		'type'	=> 'color-picker'
	)
);