<?php if ($img = get_sub_field('image')): ?>
    <div class="am-image-wrap">
        <?=apply_filters('AML/LazyloadedImage', $img, 'am-image')?>
    </div>
<?php endif; ?>
