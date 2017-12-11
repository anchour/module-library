<?php
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('aml/masonry.js', '//unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js', false, null, true);
}, 100);
?>
