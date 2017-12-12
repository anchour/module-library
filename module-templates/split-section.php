<?php if(have_rows('columns')): ?>
    <div class="am-column-wrap">
        <?php while(have_rows('columns')): the_row(); ?>
            <div <?=apply_filters('AML/SplitSectionAttributes', '')?>>
                <div class="am-flex-item-wrap">
                    <?php
                        include $GLOBALS['partial_path'] . 'header.php';

                        include $GLOBALS['partial_path'] . 'content.php';

                        include $GLOBALS['partial_path'] . 'buttons.php';
                    ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
