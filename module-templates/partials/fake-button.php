<?php $hollow = get_sub_field('hollow') ? ' am-button-hollow' : ''; ?>
<?php if ($text = get_sub_field('button_text')): ?>
    <span class="am-button am-button-<?=get_sub_field('button_color')?><?=$hollow?>"><?=$text?></span>
<?php endif; ?>
