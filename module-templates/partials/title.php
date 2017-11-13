<?php if ($title = get_sub_field('title')): ?>
    <div <?php apply_filters('App/Theme/HeadlineClasses', 'title-wrap'); ?>>
        <?=$title?>
    </div>
<?php endif; ?>
