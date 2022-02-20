<?php

class check_image_div {

    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │           check for {{image_div}} and replace with item image           │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function run($code, $item)
    {
        $image = '';

        if (empty($code) || empty($item)){ return $code; }

        if (strpos($code, '{{image_div}}') == false) { return $code; }

        $image = get_field('menu_image', $item);

        if (empty($image)){ return $code; }

        $image_classes = '';
        $image_classes = get_field('menu_image_classes', $item);

        $image_code = '<div';
        $image_code .= ' class="' . $image_classes . '"';
        $image_code .= ' data-bg="' . $image['url'] . '"';
        $image_code .= ' alt="' . $image['alt'] . '"';
        $image_code .= ' style="background-image: url(\'' . $image['url'] . '\'); "';
        $image_code .= '>';
        $image_code .= '</div>';

        return str_replace('{{image_div}}', $image_code, $code);
    }
}