<?php if (have_rows('anchour_modules')): ?>
    <?php while (have_rows('anchour_modules')): the_row(); ?>

        <section <?=apply_filters('AML/ModuleAttributes', '')?>>
            <div class="crust">
                <div class="mantle">
                    <div class="core">

                        <?php $layout = str_replace('_', '-', get_row_layout()); ?>
                        <?php include $GLOBALS['aml_path'] . 'module-templates/' . $layout . '.php'; ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
