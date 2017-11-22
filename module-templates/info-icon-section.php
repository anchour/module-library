<?php include $GLOBALS['partial_path'] . 'title.php'; ?>

<div class="am-flex-item-wrap">
    <div class="am-info-wrap">
        <?php include $GLOBALS['partial_path'] . 'header.php'; ?>
        <?php include $GLOBALS['partial_path'] . 'content.php'; ?>
        <?php include $GLOBALS['partial_path'] . 'buttons.php'; ?>
    </div>

    <?php if (have_rows('icon_sections')): ?>
        <div class="am-column-wrap">
            <?php while (have_rows('icon_sections')): the_row(); ?>
                <div class="am-column">

                    <?php if ($link = get_sub_field('link')): ?>
                        <a href="<?=$link?>">
                    <?php endif; ?>

                        <?php include $GLOBALS['partial_path'] . 'image.php'; ?>
                        <?php include $GLOBALS['partial_path'] . 'content.php'; ?>

                    <?php if ($link): ?>
                        </a>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
