<?php


class check_shortcodes {

    // ┌─────────────────────────────────────────────────────────────────────────┐
    // │                                                                         │
    // │          check for [shortcode] and replace with shortcode result        │
    // │                                                                         │
    // └─────────────────────────────────────────────────────────────────────────┘ 
    public function run($code, $item)
    {

        if (empty($code) || empty($item)){ return $code; }

        // capture all shortcodes.
        preg_match_all('/\[(.*?)\]/s', $code, $matches);
        
        $code = preg_replace ('/\[(.*?)\]/s', \do_shortcode('$1') , $code);

        foreach ($matches[0] as $key => $match){
            $shortcode_result = do_shortcode($match);
            $code = str_replace($matches[1][$key], $shortcode_result, $code);
        }

        return $code;
    }

}