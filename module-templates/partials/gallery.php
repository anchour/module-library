<?php if($images = get_sub_field('gallery')): ?>
    <div class="am-gallery-wrap am-column-wrap">
        <?php foreach($images as $image): ?>
            <a href="<?=$image['url']?>" class="am-gallery-img am-column">
                <?=wp_get_attachment_image( $image['ID'], 'large' )?>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
