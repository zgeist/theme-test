<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}

?>

<div class="partners">
    <?php foreach( $atts['partners'] as $partner ) : ?>
        <div class="partner <?php echo $partner['size']; ?>">
            <a href="<?php echo $partner['link']; ?>">
                <img src="<?php echo $partner['logo']['url'] ?>" alt="Partner">
            </a>
        </div>

    <?php endforeach; ?>
</div>
