<?php if ($content = get_sub_field('content')): ?>
    <div class="am-content">
        <?= apply_filters('the_content', $content); ?>
    </div>
<?php endif; ?>
