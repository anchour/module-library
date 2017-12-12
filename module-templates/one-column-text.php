<?php

use Anchour\ModuleLibrary\Template;

?>

<div class="am-flex-item-wrap am-column">
    <?php
    Template::get('partials/title');

    Template::get('partials/content');

    Template::get('partials/buttons');
    ?>
</div>
