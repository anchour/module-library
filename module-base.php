<?php if (have_rows('anchour_modules')): ?>
    <?php while (have_rows('anchour_modules')): the_row(); ?>

        <section <?=apply_filters('AML/ModuleAttributes', '')?>>
            <div class="aml-wrapper-1">
                <div class="aml-wrapper-2">
                    <div class="aml-wrapper-3">

                        <?php $layout = str_replace('_', '-', get_row_layout()); ?>
                        <?php include $GLOBALS['aml_path'] . 'module-templates/' . $layout . '.php'; ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
