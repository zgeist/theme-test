<?php if (!defined('FW')) die( 'Forbidden' ); ?>

<?php $color_class = !empty($atts['color']) ? "button-{$atts['color']}" : ''; ?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="button <?php echo esc_attr($color_class); ?>">
	<span><?php echo $atts['label']; ?></span>
</a>