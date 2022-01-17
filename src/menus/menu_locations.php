<?php

function register_custom_menu_locations()
{
    register_nav_menus(
        array(
            'sub-menu' => 'Sub-Menu',
            'main-right' => 'Main Right',
        )
    );
}

add_action('init', 'register_custom_menu_locations');
