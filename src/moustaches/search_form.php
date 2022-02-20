<?php


class check_search_form {

    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │          check for {{search_form}} and replace with item image          │
    // │                   will check for searchform.php in theme                │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function run($code, $item)
    {

        if (empty($code) || empty($item)){ return $code; }

        if (strpos($code, '{{search_form}}') !== false) {
            return str_replace('{{search_form}}', get_search_form(false), $code);
            return str_replace('{{search_form}}', get_search_form(false), $code);
        }
        
        return $code;
    }

}