<?php

use Anchour\ModuleLibrary\Template;

if (have_rows('columns')): ?>
    <div class="am-column-wrap">
        <?php while (have_rows('columns')): the_row(); ?>
            <div <?=apply_filters('AML/SplitSectionAttributes', '')?>>
                <div class="am-flex-item-wrap">
                    <?php
                        Template::get('partials/header');

                        Template::get('partials/content');

                        Template::get('partials/buttons');
                    ?>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
