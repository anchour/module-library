<?php if ($content = get_sub_field('content')): ?>
    <div <?php apply_filters('App/Theme/ContentClasses', 'content-wrap'); ?>>
        <?=$content?>
    </div>
<?php endif; ?>
