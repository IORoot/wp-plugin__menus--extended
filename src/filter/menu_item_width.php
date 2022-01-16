<?php

add_action('admin_head', 'full_width_menu_items');

function full_width_menu_items() {
    echo '<style>
    #menu-management .menu-item-bar .menu-item-handle, #menu-management .menu-item-settings { max-width: initial; } 
    </style>';
}