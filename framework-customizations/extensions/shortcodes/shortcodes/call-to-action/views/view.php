<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$id = "devider-" . fw_unique_increment();
?>

<?php if( $atts['head_color'] ) : ?>
<style>

	#<?php echo $id ?>:before, #<?php echo $id ?>:after, #<?php echo $id ?> span {
		border-color: <?php echo $atts['head_color'] ?>;
	}

</style>
<?php endif; ?>

<div class="fw-call-to-action">
	<div class="fw-action-content">
		<?php if (!empty($atts['title'])): ?>
		<h2 <?php echo $atts['head_color'] ? 'data-color="' . $atts['head_color'] . '" style="background-color: ' . $atts['head_color'] . '"' : ''; ?>><?php echo $atts['title']; ?></h2>
		<div id="<?php echo $id; ?>" class="devider">
			<span></span>
		</div>
		<?php endif; ?>
		<p><?php echo $atts['message']; ?></p>
	</div>
</div>