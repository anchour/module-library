<?php

use Anchour\ModuleLibrary\Template;

Template::get('partials/title');

?>

<div class="am-flex-item-wrap am-column-wrap">
    <div class="am-column am-column-txt">
        <?php Template::get('partials/header'); ?>
        <?php Template::get('partials/content'); ?>
        <?php Template::get('partials/buttons'); ?>
    </div>

    <div class="am-column am-column-img">
        <?php Template::get('partials/image'); ?>
    </div>
</div>
