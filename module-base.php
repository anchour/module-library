<?php

$key = apply_filters('AML/ModuleRowsKey', 'anchour_modules');

if (have_rows($key)): while (have_rows($key)): the_row(); ?>

    <section <?= apply_filters('AML/ModuleAttributes', '') ?>>
        <div class="crust">
            <div class="mantle">
                <div class="core">
                    <?php \Anchour\ModuleLibrary\Template::get(get_row_layout()); ?>
                </div>
            </div>
        </div>
    </section>

<?php endwhile; endif;
