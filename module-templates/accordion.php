<?php

use Anchour\ModuleLibrary\Template;

?>

<div class="am-content-width-md">
    <div class="crust">

    <?php

    Template::get('partials/title');

    if (have_rows('accordions')): while (have_rows('accordions')): the_row(); ?>

        <div class="am-accordion">
            <div class="am-accordion-toggle">
                <div class="am-accordion-toggle-icon">
                    <div class="am-accordion-toggle-icon-bar am-accordion-toggle-icon-bar--first"></div>
                    <div class="am-accordion-toggle-icon-bar am-accordion-toggle-icon-bar--middle"></div>
                    <div class="am-accordion-toggle-icon-bar am-accordion-toggle-icon-bar--last"></div>

                </div>

                <div class="am-accordion-toggle-title">
                    <?php the_sub_field('header'); ?>
                </div>
            </div>

            <div class="am-accordion-body">
                <?php the_sub_field('content'); ?>
            </div>
        </div>

    <?php
    endwhile; endif;

    Template::get('partials/buttons');
    ?>

    </div>
</div>
