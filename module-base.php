<?php if (have_rows('anchour_modules')): ?>
    <?php while (have_rows('anchour_modules')): the_row(); ?>

        <section <?php apply_filters('App/Theme/PageRowAttributes', ''); ?>>
            <div class="am-wrapper-1">
                <div class="am-wrapper-2">
                    <div class="am-wrapper-3">

                        <?php include 'module-templates/' . str_replace('_', '-', get_row_layout()) . '.php'; ?>

                    </div>
                </div>
            </div>
        </section>

    <?php endwhile; ?>
<?php endif; ?>
