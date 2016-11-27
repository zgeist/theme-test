<?php if (!defined('FW')) die('Forbidden');

$options = array(
	'responsive-class' => array(
		'label'   => __('Responsive Breakpoint', 'unyson'),
		'type'    => 'select',
		'value'	  => 'mobile-stack',
		'choices' => array(
			'mobile-stack'   => __('Mobile', 'unyson'),
			'tablet-stack'   => __('Tablet', 'unyson')
		)
	),
);