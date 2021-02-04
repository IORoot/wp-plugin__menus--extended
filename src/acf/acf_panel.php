<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ed379b8bcea1',
        'title' => 'Menu Code Injector',
        'fields' => array(
            array(
                'key' => 'field_5ed37c7f324c0',
                'label' => '<span class="mdi mdi-needle"></span> Replace List Item',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ff86cc6baa76',
                'label' => 'Item opening code',
                'name' => 'menu_item_open',
                'type' => 'textarea',
                'instructions' => 'This will completely replace the normal list item and link that would normally be output. <code>{{image}}</code> or <code>{{image_div}}</code> is available.
    
    Generally best to start with an LI tag and A tag.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 12,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5ff8981702693',
                'label' => 'Item closing code',
                'name' => 'menu_item_close',
                'type' => 'textarea',
                'instructions' => 'The end of the element code.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 12,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5ffacc00323d6',
                'label' => '<span class="mdi mdi-image"></span> Image',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ffacb8725dea',
                'label' => 'Image',
                'name' => 'menu_image',
                'type' => 'image',
                'instructions' => 'Use this image within the injected code with <code>{{image}}</code> or <code>{{image_div}}</code>.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'array',
                'preview_size' => 'thumbnail',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5ffad0a2e4ede',
                'label' => 'Image classes',
                'name' => 'menu_image_classes',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ff897cb02692',
                'label' => '<span class="mdi mdi-link"></span> Link Classes',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ff87addf3e9e',
                'label' => 'A tag classes',
                'name' => 'a_classes',
                'type' => 'text',
                'instructions' => 'If you are not injecting new code, you can add classes here to insert into the link.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5ff8978a02691',
                'label' => '<span class="mdi mdi-needle"></span> Submenus',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_5ff88a9b3e00f',
                'label' => 'Sub-menu open',
                'name' => 'submenu_open',
                'type' => 'textarea',
                'instructions' => 'Replace the opening tags.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5ff88aba3e010',
                'label' => 'Sub-menu Close',
                'name' => 'submenu_close',
                'type' => 'textarea',
                'instructions' => 'Replace the closing tags',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_601064a7db00a',
                'label' => '<span class="mdi mdi-help"></span> Help',
                'name' => '',
                'type' => 'tab',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'placement' => 'top',
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_60106494db009',
                'label' => '',
                'name' => '',
                'type' => 'message',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => 'All menu items are <li> list items in an unordered list.
    
    <ul>
            <li></li>
            <li></li>
    </ul>
    
    1. The "Replace List Item" section allows you to completely replace that list-item for custom code.
    
    2. The "Image" section defines an image that you can insert into that custom code.
    
    3. The "Link Classes" section will be used if there is no custom code. Instead, it will inject those classes into the item.
    
    <li class="[CLASSES]"></li>
    
    4. The "Submenus" Code defines how to wrap any sub items beneath that item.
    
    <ul class="depth-0">
    
            <li>
                     <a href="/">Menu Item 1</a>
            
                     [SUBMENU_START]
                                 <li>submenu item 1</li>
                                 <li>submenu item 2</li>
                     [SUBMENU_CLOSE]
    
             </li>
    </ul>',
                'new_lines' => 'br',
                'esc_html' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'nav_menu_item',
                    'operator' => '==',
                    'value' => 'all',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));
    
    endif;