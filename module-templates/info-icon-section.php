<?php

use Anchour\ModuleLibrary\Template;

Template::get('partials/title'); ?>

<div class="am-flex-item-wrap">
    <div class="am-info-wrap">
        <?php
        Template::get('partials/header');
        Template::get('partials/content');
        Template::get('partials/button');
        ?>
    </div>

    <?php if (have_rows('icon_sections')): ?>
        <div class="am-column-wrap">
            <?php while (have_rows('icon_sections')): the_row(); ?>
                <div class="am-column">

                    <?php if ($link = get_sub_field('link')): ?>
                        <a href="<?=$link?>">
                    <?php endif; ?>

                        <?php Template::get('partials/image'); ?>
                        <?php Template::get('partials/content'); ?>

                    <?php if ($link): ?>
                        </a>
                    <?php endif; ?>

                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</div>
