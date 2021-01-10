<?php


class code_inject
{


    public function __construct()
    {
        
        add_filter('nav_menu_link_attributes', [$this, 'a_tag_class_inject'], 10, 4);

        add_filter('walker_nav_menu_start_el', [$this, 'menu_item_open'], 10, 4);
        add_filter('walker_nav_menu_close_el', [$this, 'menu_item_close'], 10, 4);

        add_filter('nav_menu_submenu_open', [$this, 'submenu_open'], 10, 2);
        add_filter('nav_menu_submenu_close', [$this, 'submenu_close'], 10, 2);
    }


    /**
     * 
     * Usual Menu structure:
     * 
     * <ul>
     *      <li>
     *          <a> </a>
     *          <ul class="sub-menu">
     *              <li>
     *                  <a> </a>
     *              <li>
     *          </ul>
     *      </li>
     * </ul>
     * 
     * These Filters contol the classes on the <a></a> tags
     * and the <ul class="sub-menu"> tags.
     * 
     * It also injects code between the <a></a> tags. 
     * 
     */


    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                 Class Injection for <A> tags under <LI> tags            │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    public function a_tag_class_inject($atts, $item, $args, $depth )
    {
        
        // vars
        $a_classes = get_field('a_classes', $item);

        if (!$a_classes) { return $atts; }

        $atts['class'] = $a_classes;

        return $atts;

    }


    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                              Code Injection                             │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    public function menu_item_open($item_output, $item, $depth, $args)
    {
        
        $code = get_field('menu_item_open', $item);

        // look for {{image}} or {{image_div}}
        $code = $this->check_for_image_moustaches($code, $item);
        $code = $this->check_for_image_div_moustaches($code, $item);

        if (!$code) {
            return $item_output;
        }
        
        return $code;

    }

    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │                              Code Injection                             │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    public function menu_item_close($item_output, $item, $depth, $args)
    {
        
        // vars
        $code = get_field('menu_item_close', $item);

        if (!$code) {
            return $item_output;
        }
        
        return $code;

    }




    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │              Replace the opening sub-menu tags tith filter              │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    public function submenu_open($start_lvl, $item )
    {

        $code = get_field('submenu_open', $item);

        if (!$code) {
            return $start_lvl;
        }
        
        return $code;

    }



    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │              Replace the closing sub-menu tags tith filter              │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘
    public function submenu_close($close_lvl, $item )
    {

        $code = get_field('submenu_close', $item);

        if (!$code) {
            return $close_lvl;
        }
        
        return $code;

    }


    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │              check for {{image}} and replace with item image            │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function check_for_image_moustaches($code, $item)
    {
        $image = '';
        

        if (empty($code) || empty($item)){ return $code; }

        if (strpos($code, '{{image}}') == false) { return $code; }

        $image         = get_field('menu_image', $item);

        if (empty($image)){ return $code; }

        $image_classes = '';
        $image_classes = get_field('menu_image_classes', $item);

        $image_code = wp_get_attachment_image( $image['ID'], 'full', false, [ 'class' => $image_classes ] );

        return str_replace('{{image}}', $image_code, $code);
    }


    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │           check for {{image_div}} and replace with item image           │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function check_for_image_div_moustaches($code, $item)
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

