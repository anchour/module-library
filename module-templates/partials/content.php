<?php if ($content = get_sub_field('content')): ?>
    <div <?php apply_filters('AML/ContentClasses', 'content-wrap'); ?>>
        <?=$content?>
    </div>
<?php endif; ?>
