<?php
$btn_color = get_sub_field('button_color');
$btn_txt = get_sub_field('button_text');
$hollow = get_sub_field('hollow') ? ' am-button-hollow' : '';
?>
<?php if($pages = get_sub_field('pages')): ?>
    <div class="am-column-wrap am-flex-item-wrap">
        <?php foreach($pages as $page): ?>
            <a class="am-column" href="<?=$page->guid?>">
                <div class="am-column-inner" style="background-image:url(<?=get_the_post_thumbnail_url($page->ID)?>);">
                    <article>
                        <span class="am-article-inner">
                            <h3><?=$page->post_title?></h3>
                            <span class="am-hover-show">
                                <?=$page->post_content?>
                                <?php if ($btn_txt): ?>
                                    <span class="am-button am-button-<?=$btn_color?><?=$hollow?>"><?=$btn_txt?></span>
                                <?php endif; ?>
                            </span>
                        </span>
                    </article>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
