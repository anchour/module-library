<?php
$btn_color = get_sub_field('button_color');
$btn_txt = get_sub_field('button_text');
?>
<?php if($pages = get_sub_field('pages')): ?>
    <div class="am-column-wrap am-flex-item-wrap">
        <?php foreach($pages as $page): ?>
            <div class="am-column">
                <div class="am-column-inner" style="background-image:url(<?=get_the_post_thumbnail_url($page->ID)?>);">
                    <article>
                        <span class="article-inner">
                            <h3><?=$page->post_title?></h3>
                            <span class="hover-show">
                                <?=$page->post_content?>
                                <?php if ($btn_txt): ?>
                                    <a href="<?=$page->guid?>" class="am-button am-button-<?=$btn_color?>"><?=$btn_txt?></a>
                                <?php endif; ?>
                            </span>
                        </span>
                    </article>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
