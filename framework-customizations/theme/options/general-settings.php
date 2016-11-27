<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'general' => array(
		'title'   => __( 'General', 'unyson' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => __( 'General Settings', 'unyson' ),
				'type'    => 'box',
				'options' => array(
					'logo'    => array(
						'label' => __( 'Logo', 'unyson' ),
						'desc'  => __( 'Upload your website logo image', 'unyson' ),
						'type'  => 'upload'
					),
					'favicon' => array(
						'label' => __( 'Favicon', 'unyson' ),
						'desc'  => __( 'Upload a favicon image', 'unyson' ),
						'type'  => 'upload'
					),
					'social_icons' => array(
						'type'  => 'addable-box',
						'label' => __('Icon links (social links)', 'unyson'),
						'template' => '<i class="{{- icon }}"></i> {{- title }}',
						'box-options' => array(
							'title'	=> array( 'type' 	=> 'text' ),
							'icon' 	=> array( 'type' 	=> 'icon' ),
							'link'	=> array( 'type' 	=> 'text' )
						),
					),
					'copyright'	=> array(
						'type'	=> 'textarea'
					)
				)
			),
		)
	)
);