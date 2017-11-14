<?php if (have_rows('buttons')): ?>
    <div class="button-wrap">
        <?php while (have_rows('buttons')): the_row();?>
            <a <?=apply_filters('AML/ButtonAttributes', '')?>><?=get_sub_field('button_text')?></a>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
