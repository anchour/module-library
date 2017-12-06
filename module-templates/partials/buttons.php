<?php if (have_rows('buttons')): ?>
    <div class="am-buttons">
        <?php while (have_rows('buttons')): the_row();?>
            <div class="am-button-wrap">
                <a <?=apply_filters('AML/ButtonAttributes', '')?>><?=get_sub_field('button_text')?></a>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
