<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5ed379b8bcea1',
        'title' => 'Menu Code Injector',
        'fields' => array(
            array(
                'key' => 'field_5ed37c7f324c0',
                'label' => '<span class="mdi mdi-needle"></span>Menu Item',
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
                'instructions' => 'Opening code.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '70',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '<a class="flex-1" href="/example">
        <ul class="flex flex-col py-6 px-4 hover:bg-Amber500 hover:text-white rounded-lg">
                    <li>
                    {{image}}
            <h2 class="text-xl mb-2">Example Title</h2>
            <p class="text-sm text-center">Example description</p>',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 12,
                'new_lines' => '',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
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
                    'width' => '30',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '</li>
    </ul>
    </a>',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 12,
                'new_lines' => '',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
            ),
            array(
                'key' => 'field_5ff8978a02691',
                'label' => '<span class="mdi mdi-needle"></span>Menu with Sub items',
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
                    'width' => '70',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '<ul class="hidden top-24 left-0 absolute w-full mb-16 sm:mb-0 shadow-xl bg-black text-white">
        <div class="container w-full flex-col md:flex-row flex flex-wrap justify-between mx-2 p-6">',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => '',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
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
                    'width' => '30',
                    'class' => 'ue__codemirror',
                    'id' => '',
                ),
                'default_value' => '</div>
    </ul>',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => 4,
                'new_lines' => '',
                'show_column' => 0,
                'show_column_weight' => 1000,
                'allow_quickedit' => 0,
                'allow_bulkedit' => 0,
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
                'message' => '<h2>Setup</h2>
    Top of the menu edit page (this page), click on \'Screen Options\' and enable:
    - Link Target
    - Title Attribute
    - CSS Classes
    
    <h2>Layout</h2>
    All menu items are list items in an unordered list.
    
    <pre>
            <textarea rows="4">
            &lt;ul&gt;
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            </textarea>
    </pre>
    
    <h2>CSS Classes</h2>
    By adding class names into the CSS Classes (optional) form field, you will inject it into the list item.
    
    <pre>
            <textarea rows="4">
            &lt;ul&gt;
                    &lt;li class=&quot;added_class&quot;&gt;&lt;a href=&quot;/&quot;&gt;Link Title&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            </textarea>
    </pre>
    
    <h2>Link Classes</h2>
    If you simply want to add classes into the link, you can use this textbox.
    
    <pre>
            <textarea rows="4">
            &lt;ul&gt;
                    &lt;li &gt;&lt;a class=&quot;link_class&quot; href=&quot;/&quot;&gt;Link Title&lt;/a&gt;&lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            </textarea>
    </pre>
    
    <h2>Menu Item</h2>
    The "Menu Item" section allows you to completely replace that list-item for custom code.
    
    <pre>
            <textarea rows="4">
            &lt;ul&gt;
                    [OPEN CODE][CLOSE CODE]
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            </textarea>
    </pre>
    
    The reason we have both open and close code is if we have submenu items. Then this code will wrap that item.
    
    <h2>Menu with sub items</h2>
    If a menu item has a sub item, then a nested unordered list will be injected into the main list.
    
    <pre>
    <textarea rows="9">
            &lt;ul&gt;
                    &lt;li&gt;
                            &lt;a href=&quot;/&quot;&gt;Title&lt;/a&gt;
                            &lt;ul class=&quot;sub-menu&quot;&gt;
                                    &lt;li&gt;&lt;a href=&quot;/sub&quot;&gt;Sub item title&lt;/a&gt;&lt;/li&gt;
                            &lt;/ul&gt;
                    &lt;/li&gt;
                    &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
    </textarea>
    </pre>
    
    The \'Menu with sub items\' opening and closing textareas allow you to change the unordered list to anything else.
    
    <pre>
    <textarea rows="9">
    &lt;ul&gt;
            &lt;li&gt;
                    &lt;a href=&quot;/&quot;&gt;Title&lt;/a&gt;
                    [OPEN CODE]
                    &lt;li&gt;&lt;a href=&quot;/sub&quot;&gt;Sub item title&lt;/a&gt;&lt;/li&gt;
                    [CLOSE CODE]
            &lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;/&quot;&gt;Link Title 2&lt;/a&gt;&lt;/li&gt;
    &lt;/ul&gt;
    </textarea>
    </pre>
    
    It replaces the unordered list tag with a class of "sub-menu".
    
    <h2>Images</h2>
    Use the media picker to choose an image you wish to inject into the code. Once the image is selected you can embed it into any of the fields with one of the following moustache codes:
    
    <h4>{{image}}</h4>
    This injects the image as an image tag.
    
    <pre>
            <textarea rows="1">
            &lt;img class=&quot;IMG_CLASSES&quot; data-bg=&quot;IMG_URL&quot; alt=&quot;IMG_ALT&quot; src=&quot;IMG_URL&quot; &gt;&lt;/img&gt;;
            </textarea>
    </pre>				
    
    
    <h4>{{image_div}}</h4>
    This injects the image as a background image to a div.
    <pre>
            <textarea rows="1">
            &lt;div class=&quot;IMG_CLASSES&quot; data-bg=&quot;IMG_URL&quot; alt=&quot;IMG_ALT&quot; style=&quot;background-image: url(IMG_URL);&quot; &gt;&lt;/div&gt;;
            </textarea>
    </pre>
    
    
    <h4>Theme CSS</h4>
    Make sure your theme contains the following CSS so that the hovering works for submenu items.
    
    <pre>
            <textarea rows="1">
            header nav div #main-menu {
    
                    /* For hovering */
                    &amp; &gt; ul:hover &gt; div,
                    &amp; &gt; li:hover &gt; div {
                            display: block;
                    }
    
                    &amp; &gt; ul:hover &gt; ul, 
                    &amp; &gt; li:hover &gt; ul {
                            display: block; 
                    } 
    
            }
            </textarea>
    </pre>
    
    
    <h4>Shortcodes</h4>
    All [shortcodes] will be run within the menus.',
                'new_lines' => '',
                'esc_html' => 0,
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
        'description' => 'Fully customisable Wordpress menus',
    ));
    
    endif;