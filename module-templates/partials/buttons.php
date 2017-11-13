<?php if ($has_btns = have_rows('buttons')): ?>
    <div <?php apply_filters('AML/ButtonRowClasses', 'button-wrap'); ?>>
        <?php while ($has_btns): the_row();?>
            <a href="<?=get_sub_field('button_link')?>" <?php apply_filters('AML/ButtonRowClasses', 'button'); ?>><?=get_sub_field('button_text')?></a>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
