<?php
/**
 * Gets the attributes/classes for each page row in the flexible page layout.
 *
 * @param     $attributes
 * @param int $count
 *
 * @return string
 */
function aml_module_attributes($attributes): string
{
    $attributes = collect();
    $classes = collect(['am']);

    $layout = sanitize_title(str_replace('_', '-', get_row_layout()));
    $classes->push('am-' . $layout);

    $classes->push('am-bg-' . sanitize_title(get_sub_field('background_color') ? : 'white'));
    $classes->push('am-txt-' . sanitize_title(get_sub_field('text_color') ? : 'primary'));

    if ($txt_bg = get_sub_field('text_section_background')) $classes->push('am-text-section-bg-' . $txt_bg);

    if ($width = get_sub_field('content_width')) $classes->push('am-content-width-' . $width);
    if ($height = get_sub_field('content_height')) $classes->push('am-content-height-' . $height);

    if ($columns = get_sub_field('columns')) $classes->push('am-column-count-' . count($columns));

    if ($align_x = get_sub_field('horizontal_alignment')) $classes->push('am-align-x-' . $align_x);
    if ($align_y = get_sub_field('vertical_alignment')) $classes->push('am-align-y-' . $align_y);

    if (get_sub_field('remove_top_padding')) $classes->push('am-padding-top-0');
    if (get_sub_field('remove_bottom_padding')) $classes->push('am-padding-bottom-0');

    if (get_sub_field('image_first')) $classes->push('am-flip-columns');
    if (get_sub_field('overlapping_columns')) $classes->push('am-column-overlap');

    if ($placement = get_sub_field('icon_placement')) $classes->push('am-icon-placement-' . $placement);
    if ($sections = get_sub_field('sections_per_row')) $classes->push('am-sections-per-row-' . $sections);

    static $count = 0;
    $count++;
    if ($count === 1) {
        $classes->push('am-first');
    }

    $attributes->put('class', $classes->implode(' '));

    if (get_sub_field('background_image')) {
        $img = get_sub_field('background_image');
        $attributes->put('style', 'background-image:url(' . $img . ');');
    }

    return $attributes->map(function ($value, $key) {
        return "$key=\"$value\"";
    })->implode(' ');
}

add_filter('AML/ModuleAttributes', 'aml_module_attributes');

/**
 * Gets the attributes/classes for each page row in the flexible page layout.
 *
 * @param     $attributes
 * @param int $count
 *
 * @return string
 */
function aml_button_attributes(): string
{
    $attributes = collect();

    $link = get_sub_field('link');
    $attributes->put('href', $link);

    if (parse_url($link, PHP_URL_HOST) && parse_url($link, PHP_URL_HOST) !== $_SERVER['HTTP_HOST']) {
        $attributes->put('target', "_blank");
    }

    $classes = collect(['am-button']);
    $classes->push('am-button-' . sanitize_title(get_sub_field('button_color') ? : 'primary'));
    if (get_sub_field('hollow')) $classes->push('am-button-hollow');

    $attributes->put('class', $classes->implode(' '));

    return $attributes->map(function ($value, $key) {
        return "$key=\"$value\"";
    })->implode(' ');
}

add_filter('AML/ButtonAttributes', 'aml_button_attributes');

function lazyloaded_image_tag(int $imageId = 0, $size = 'large', $attrs = []): string
{
    if ($imageId === 0) {
        return '';
    }

    $file      = get_attached_file($imageId);
    $extension = pathinfo($file, PATHINFO_EXTENSION);

    if ($extension === 'svg') {
        ob_start();

        include $file;

        return ob_get_clean();
    }

    $tag = wp_get_attachment_image($imageId, $size, false, $attrs);
    $tag = str_replace('src=', 'data-original=', $tag);
    $tag = str_replace('data-original=', 'src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEWysrKSPAk+AAAACklEQVQIHWNgAAAAAgABz8g15QAAAABJRU5ErkJggg==" data-original=', $tag);
    $tag = str_replace('srcset=', 'data-original-set=', $tag);

    return $tag;
}

add_filter('AML/LazyloadedImage', 'lazyloaded_image_tag', 10, 3);


function icon_group_content_order(string $placement, int $i): string
{
    $fields = array();
    switch ($placement) {
        case 'top':
        case 'left':
            $fields = array('image', 'header', 'content', 'fake-button');
            break;

        case 'bottom':
        case 'right':
            $fields = array('header', 'content', 'fake-button', 'image');
            break;

        case 'middle':
            $fields = array('header', 'image', 'content', 'fake-button');
            break;
    }

    return $fields[$i];
}

add_filter('AML/IconGroupContentOrder', 'icon_group_content_order', 10, 2);
?>
