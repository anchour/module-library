<?php $placement = get_sub_field('icon_placement'); ?>

<?php include $GLOBALS['partial_path'] . 'title.php'; ?>

<?php if (have_rows('icon_sections')): ?>
    <div class="am-flex-item-wrap am-column-wrap">
        <?php while (have_rows('icon_sections')): the_row(); ?>
            <div class="am-column">

                <?php if ($link = get_sub_field('link')): ?>
                    <a href="<?=$link?>">
                <?php endif; ?>

                    <?php for ($i=0; $i < 4; $i++): ?>
                        <?php include $GLOBALS['partial_path'] . apply_filters('AML/IconGroupContentOrder', $placement, $i) . '.php'; ?>
                    <?php endfor; ?>

                <?php if ($link): ?>
                    </a>
                <?php endif; ?>

            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
