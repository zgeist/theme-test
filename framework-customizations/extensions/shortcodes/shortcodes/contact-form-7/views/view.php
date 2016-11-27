<?php if (!defined('FW')) die('Forbidden'); ?>

<div class="contact-form">

    <div class="header">
        <h2><?php echo $atts['title']; ?></h2>
        <p><?php echo $atts['subtitle']; ?></p>
    </div>

    <div class="wrap-forms">
        <?php echo do_shortcode('[contact-form-7 id="' . $atts['form'] . '" title="Contact form"]'); ?>
    </div>

    <script>
        jQuery(function($) {

            $(window).ready(function(){

                $('.contact-form select').niceSelect();

            });

        });
    </script>
</div>