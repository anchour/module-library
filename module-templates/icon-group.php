<?php

use Anchour\ModuleLibrary\Template;

$placement = get_sub_field('icon_placement');

Template::get('partials/title');

if (have_rows('icon_sections')): ?>
    <div class="am-flex-item-wrap am-column-wrap">
        <?php while (have_rows('icon_sections')): the_row(); ?>
            <div class="am-column">

                <?php if ($link = get_sub_field('link')): ?>
                    <a href="<?=$link?>" <?= get_sub_field('new_tab') ? 'target="_blank"' : '' ?>>
                <?php endif; ?>

                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <?php if (($placement == 'left' && $i == 1) || ($placement == 'right' && $i == 0)): ?>
                            <span class="am-icon-section-content">
                        <?php endif; ?>

                            <?php include $GLOBALS['partial_path'] . apply_filters('AML/IconGroupContentOrder', $placement, $i) . '.php'; ?>

                        <?php if (($placement == 'left' && $i == 3) || ($placement == 'right' && $i == 2)): ?>
                            </span>
                        <?php endif; ?>
                    <?php endfor; ?>

                <?php if ($link): ?>
                    </a>
                <?php endif; ?>

            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
