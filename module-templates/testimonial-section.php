<?php

use Anchour\ModuleLibrary\Template;

Template::get('partials/title');

if ($testimonials = get_sub_field('testimonials')): ?>
    <div class="am-testimonial-wrap">
        <?php foreach ($testimonials as $testimonial): ?>
            <article class="am-testimonial">
                <div class="am-content">
                    <?=$testimonial->post_content?>
                    <label>- <?=$testimonial->post_title?></label>
                </div>
            </article>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<script>
if (typeof jQuery !== 'undefined') {
  var $ = jQuery;
  $(document).ready(function() {
    $('.am-testimonial-wrap').slick({
      dots: true,
      autoplaySpeed: 5000,
      speed: 500,
      autoplay: true,
      fade: true
    });
  });
}
</script>
