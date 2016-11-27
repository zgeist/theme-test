<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

$forms = array_reduce( get_posts(
    array(
        'post_type'         => 'wpcf7_contact_form',
        'posts_per_page'    => -1
    )
), function( $carry, $form ) {

    $carry[$form->ID] = $form->post_title;

    return $carry;
}, array() );

$options = array(
    'title' => array(
        'type'  => 'text'
    ),
    'subtitle'  => array(
        'type'  => 'text'
    ),
    'form'          => array(
        'type'      => 'select',
        'label'     => __('Select form', 'fw'),
        'choices'   => $forms,
    ),
);