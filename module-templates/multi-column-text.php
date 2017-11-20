<?php include $GLOBALS['partial_path'] . 'title.php'; ?>

<?php if (have_rows('columns')): ?>
    <div class="am-flex-item-wrap am-column-wrap">
        <?php while (have_rows('columns')): the_row(); ?>
            <div class="am-column">
                <?php include $GLOBALS['partial_path'] . 'header.php'; ?>
                <?php include $GLOBALS['partial_path'] . 'content.php'; ?>
                <?php include $GLOBALS['partial_path'] . 'buttons.php'; ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php include $GLOBALS['partial_path'] . 'buttons.php'; ?>
