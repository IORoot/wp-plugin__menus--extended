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

        // look for {{moustaches}}
        $code = (new check_search_form)->run($code, $item);
        $code = (new check_images)->run($code, $item);
        $code = (new check_image_div)->run($code, $item);
        $code = (new check_shortcodes)->run($code, $item);

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

}