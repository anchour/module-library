<?php
$btn_color = get_sub_field('button_color');
$btn_txt = get_sub_field('button_text');

include $GLOBALS['partial_path'] . 'title.php';
?>
<?php if($members = get_sub_field('team_members')): ?>
    <div class="am-column-wrap am-flex-item-wrap">
        <?php foreach($members as $member): ?>
            <div class="am-column">
                <div class="am-column-inner" style="background-image:url(<?=get_the_post_thumbnail_url($member->ID)?>);"></div>
                <article>
                    <span class="am-hover-push-up">
                        <h4><?=$member->post_title?></h4>
                        <label><?=get_field('title', $member->ID)?></label>
                    </span>
                    <span class="am-hover-show">
                        <?php if ($btn_txt): ?>
                            <a href="<?=$member->guid?>" class="am-button am-button-<?=$btn_color?>"><?=$btn_txt?></a>
                        <?php endif; ?>
                    </span>
                </article>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
