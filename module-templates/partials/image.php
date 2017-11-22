<?php if ($img = get_sub_field('image')): ?>
    <?=apply_filters('AML/LazyloadedImage', $img, 'am-image')?>
<?php endif; ?>
