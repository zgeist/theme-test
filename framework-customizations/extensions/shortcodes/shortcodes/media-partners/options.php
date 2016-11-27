<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$options = array(
    'partners'    => array(
        'type'  => 'addable-box',
        'label' => __( 'Partners', 'fw' ),
        'desc'  => __( 'Add partners list', 'fw' ),
        'box-options' => array(
            'logo' => array(
                'label' => __('Logo', 'fw'),
                'type' => 'upload'
            ),
            'link' => array(
                'type' => 'text'
            ),
        ),
        'template' => '<img src="{{- logo.url }}" width="30">'
    ),
);