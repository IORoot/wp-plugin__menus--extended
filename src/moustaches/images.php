
<?php

class check_images {
    
    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │              check for {{image}} and replace with item image            │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function run($code, $item)
    {
        $image = '';
        
        if (empty($code) || empty($item)){ return $code; }

        if (strpos($code, '{{image}}') == false) { return $code; }

        $image = get_field('menu_image', $item);

        if (empty($image)){ return $code; }

        $image_classes = '';
        $image_classes = get_field('menu_image_classes', $item);

        $image_code = wp_get_attachment_image( $image['ID'], 'full', false, [ 'class' => $image_classes ] );

        return str_replace('{{image}}', $image_code, $code);
    }

}