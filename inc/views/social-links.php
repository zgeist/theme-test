<ul class="site-social site-social-list">
    <?php foreach( $icons as $icon ) : ?>
    <li class="site-social-item">
        <a href="<?php $icon['link'] ?>">
            <span class="<?php echo $icon['icon'] ?>"></span>
        </a>
    </li>
    <?php endforeach; ?>
</ul>