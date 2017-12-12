<?php

use Anchour\ModuleLibrary\Template;

Template::get('partials/title');

if (have_rows('columns')): ?>
    <div class="am-flex-item-wrap am-column-wrap">
        <?php while (have_rows('columns')): the_row(); ?>
            <div class="am-column">
                <?php Template::get('partials/header'); ?>
                <?php Template::get('partials/content'); ?>
                <?php Template::get('partials/buttons'); ?>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>

<?php Template::get('partials/buttons'); ?>
