<?php if (!defined('FW')) die('Forbidden');

$uri = fw_get_template_customizations_directory_uri('/extensions/shortcodes/shortcodes/contact-form-7');

wp_enqueue_script(
    'nli-shortcode-contact-form-7-nice-select',
    $uri . '/static/js/jquery.nice-select.min.js',
    array('jquery'),
    false,
    true
);

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
    'fw-shortcode-nice-select',
    $uri . '/static/css/nice-select.css'
);

