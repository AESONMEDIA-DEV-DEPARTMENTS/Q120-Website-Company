<?php



add_action('init', 'sl_menu_params', 99);

/**
 * Additional functions
 */

/**
 * Additional functions
 */


function sl_menu_params() {
    global $kc;

    $kc->add_map(array(
        'sl_menu' => array(
            'name' => esc_html__( 'Menu', 'ssc' ),
            'description' => esc_html__( 'It display menu', 'ssc' ),
            'icon' => 'kc-icon-box ssc-icon-7',
            'category' => 'SecretLab',
            'css_box' => true,
            'params' => array(
                esc_html__( 'General', 'ssc' ) => array(
	                array(
		                'name'        => 'class',
		                'label'       => __(' Wrapper extra class', 'ssc'),
		                'type'        => 'text',
		                'description' => __(' If you wish to style a particular content element differently, please add a class name to this field and refer to it in your custom CSS file.', 'ssc'),
	                ),
                    array(
                        'name' => 'menu_id',
                        'label' => esc_html__( 'Menu', 'ssc' ),
                        'type' => 'select',
                        'options' => slmm_get_menu_select(),
                        'value' => '',
                        'description' => esc_html__( 'Menu to display', 'ssc' ),
                    ),
                    array(
                        'name' => 'max_menu_depth',
                        'label' => esc_html__( 'Menu Depth', 'ssc' ),
                        'type' => 'select',
                        'options' => array(
                            1 => '1',
                            2 => '2',
                            3 => '3',
                        ),
                        'value' => 3,
                        'description' => esc_html__( 'Choose depth of submenu', 'ssc' ),
                    ),
                    array(
                        'name' => 'animation_type',
                        'label' => esc_html__( 'Animation Type', 'ssc' ),
                        'type' => 'radio',
                        'options' => array(
                            '' => esc_html__( 'Fade', 'ssc' ),
                            'slmm-anim-flip' => esc_html__( 'Flip', 'ssc' ),
                            'slmm-anim-scale' => esc_html__( 'Scale', 'ssc' ),
                            'slmm-anim-slide' => esc_html__( 'Slide', 'ssc' ),
                        ),
                        'value' => '',
                        'description' => esc_html__( 'Choose animation of submenu', 'ssc' ),
                    ),
                    array(
                        'name' => 'icon_for_arrow',
                        'label' => esc_html__( 'Select Icon for First lvl', 'ssc' ),
                        'type' => 'icon_picker',
                        'admin_label' => true,
                        'value' => 'fa-chevron-down',
                        'relation' => array(
                            'parent' => 'icon_type',
                            'show_when' => 'icon'
                        )
                    ),
                    array(
                        'name' => 'icon_for_arrow_sec',
                        'label' => esc_html__( 'Select Icon for Second lvl', 'ssc' ),
                        'type' => 'icon_picker',
                        'admin_label' => true,
                        'value' => 'fa-chevron-down',
                        'relation' => array(
                            'parent' => 'icon_type',
                            'show_when' => 'icon'
                        )
                    ),
                    array(
                        'name' => 'mobile_type',
                        'label' => esc_html__( 'Use mobile menu', 'ssc' ),
                        'type' => 'radio',
                        'options' => array(
                            true => esc_html__( 'Yes', 'ssc' ),
                            false => esc_html__( 'No', 'ssc' ),
                        ),
                        'value' => 1,
                        'description' => esc_html__( 'Hide menu on mobile', 'ssc' ),
                    ),
                    array(
                        'name' => 'mobile_text',
                        'label' => esc_html__( 'Text for mobile button', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => '',
                        'relation' => array(
                            'parent' => 'mobile_type',
                            'show_when' => 1,
                        )
                    ),
                    array(
                        'name' => 'icon_for_mobile_menu_hiden',
                        'label' => esc_html__( 'Select Icon for Mobile Menu (open)', 'ssc' ),
                        'type' => 'icon_picker',
                        'admin_label' => true,
                        'value' => 'fa-bars',
                        'relation' => array(
                            'parent' => 'mobile_type',
                            'show_when' => 1,
                        )
                    ),
                    array(
                        'name' => 'icon_for_mobile_menu_shown',
                        'label' => esc_html__( 'Select Icon for Mobile Menu (close)', 'ssc' ),
                        'type' => 'icon_picker',
                        'admin_label' => true,
                        'value' => 'fa-times',
                        'relation' => array(
                            'parent' => 'mobile_type',
                            'show_when' => 1,
                        )
                    ),
                    array(
                        'name' => 'menu_box_id',
                        'label' => esc_html__( 'Menu Box ID', 'ssc' ),
                        'type' => 'random',
                        'admin_label' => true,
                    ),
                    array(
                        'name' => 'menu_cart_title',
                        'label' => esc_html__( '"Cart Totals" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Cart Totals', 'ssc' ),
                    ),
                    array(
                        'name' => 'menu_cart_button',
                        'label' => esc_html__( '"Go to cart" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Go to cart', 'ssc' ),
                    ),
                    array(
                        'name' => 'menu_cart_total',
                        'label' => esc_html__( '"Total" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Total', 'ssc' ),
                    ),
                    array(
                        'name' => 'menu_cart_empty',
                        'label' => esc_html__( '"Empty cart" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Empty cart', 'ssc' ),
                    ),
                    array(
                        'name' => 'menu_cart_item',
                        'label' => esc_html__( '"Item" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Item', 'ssc' ),
                    ),
                    array(
                        'name' => 'menu_cart_items',
                        'label' => esc_html__( '"Items" text', 'ssc' ),
                        'type' => 'text',
                        'admin_label' => true,
                        'value' => esc_html__( 'Items', 'ssc' ),
                    ),
                ),
                //Styling
                esc_html__( 'styling', 'ssc' ) => array(
                    array(
                        'name' => 'my-css',
                        'label' => esc_html__( 'Styling', 'ssc' ),
                        'type' => 'css',
                        'value' => '{`kc-css`:{`999`:{`box`:{`padding|.slmm, .slmm-respmenu`:`15px inherit 10px inherit`},`item-box`:{`display|.slmm li`:`block`,`float|.slmm li`:`none`,`padding|.slmm li`:`inherit 5px inherit 5px`},`item`:{`padding|.slmm li a, .slmm li > span`:`10px inherit 10px inherit`},`search`:{`background|.slmm .slm-search-block .slm-search-input`:`eyJjb2xvciI6InRyYW5zcGFyZW50IiwibGluZWFyR3JhZGllbnQiOlsiIl0sImltYWdlIjoibm9uZSIsInBvc2l0aW9uIjoiMCUgMCUiLCJzaXplIjoiYXV0byIsInJlcGVhdCI6InJlcGVhdCIsImF0dGFjaG1lbnQiOiJzY3JvbGwiLCJhZHZhbmNlZCI6MH0=`,`margin|.slmm .slm-search-block .slm-search-input`:`inherit inherit 5px inherit`,`background|.slmm .slm-search-block`:`eyJjb2xvciI6InJnYmEoMjU1LCAyNTUsIDI1NSwgMCkiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`}},`any`:{`box`:{`text-align|.slmm-respmenu`:`right`,`background|.slmm-respmenu .slm-open-menu-list`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`color|.slmm-respmenu .slm-open-menu-list`:`#768188`,`border|.slmm-respmenu .slm-open-menu-list`:`2px solid #b2b9be`,`width|.slmm, .slmm-respmenu`:`100%`,`text-align|.slmm`:`right`},`item-box`:{`display|.slmm li`:`inline-block`,`text-align|.slmm li`:`left`,`padding|.slmm li`:`inherit 5px inherit 5px`},`item`:{`font-size|.slmm li a, .slmm li > span`:`13px`,`line-height|.slmm li a, .slmm li > span`:`13px`,`color|.slmm li a, .slmm li > span`:`#2c3840`,`color|.slmm li.current-menu-item a`:`#768188`,`font-weight|.slmm li a, .slmm li > span`:`700`,`text-transform|.slmm li a, .slmm li > span`:`uppercase`,`text-decoration|.slmm li a span, .slmm li > span`:`none`,`border|.slmm li a, .slmm li > span`:`||3px solid rgba(255, 189, 0, 0)|`,`padding|.slmm li a, .slmm li > span`:`32px 5px 30px 5px`},`caret`:{`font-size|.slmm li .caret`:`9px`,`color|.slmm li .caret`:`#b2b9be`,`line-height|.slmm li .caret`:`1em`,`margin|.slmm li .caret`:`inherit inherit inherit 10px`},`search`:{`width|.slmm .slm-search-block form`:`50%`,`background|.slmm .slm-search-block .slm-search-input`:`eyJjb2xvciI6InJnYmEoMjU1LCAyNTUsIDI1NSwgMC45NSkiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`border|.slmm .slm-search-block .slm-search-input`:`2px solid #a2a2a2`,`padding|.slmm .slm-search-block .slm-search-input`:`0 45px inherit 45px`,`color|.slmm .slm-search-block .slm-search-close`:`#dd3333`,`background|.slmm .slm-search-block`:`eyJjb2xvciI6InJnYmEoMCwgMCwgMCwgMC43MykiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`},`cart`:{`background|.slmm li.slm-cart-menu-item i`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`color|.slm-menu-item-cart-block strong`:`#0081d7`,`font-size|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`15px`,`line-height|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`24px`,`color|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`#768188`,`color|.slmm .slm-cart-menu-item .slm-menu-item-cart-block h4`:`#2c3840`,`background|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`box-shadow|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`0px 0px 5px 0px rgba(0,0,0,0.30)`,`padding|.slmm .slm-cart-menu-item .slm-menu-item-cart-block`:`25px 30px 25px 30px`,`font-size|.slmm .slm-cart-menu-item .slm-link-to-cart`:`13px`,`line-height|.slmm .slm-cart-menu-item .slm-link-to-cart`:`13px`,`color|.slmm .slm-cart-menu-item .slm-link-to-cart`:`#2c3840`,`font-weight|.slmm .slm-cart-menu-item .slm-link-to-cart`:`700`,`background|.slmm .slm-cart-menu-item .slm-link-to-cart`:`eyJjb2xvciI6IiNmZmJlMDAiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`border|.slmm .slm-cart-menu-item .slm-link-to-cart`:`0px solid #ffffff`,`border-radius|.slmm .slm-cart-menu-item .slm-link-to-cart`:`0px 0px 0px 0px`,`padding|.slmm .slm-cart-menu-item .slm-link-to-cart`:`10px 30px 10px 30px`,`margin|.slmm .slm-cart-menu-item .slm-link-to-cart`:`14px inherit inherit inherit`},`box-2-lvl`:{`padding|.slmm li ul`:`15px 0px 25px 30px`,`background|.slmm li ul`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`box-shadow|.slmm li ul`:`0px 0px 5px 0px rgba(0,0,0,0.30)`},`item-box-2-lvl`:{`display|.slmm li ul li`:`block`,`float|.slmm li ul li`:`left`,`background|.slmm li ul li`:`eyJjb2xvciI6InRyYW5zcGFyZW50IiwibGluZWFyR3JhZGllbnQiOlsiIl0sImltYWdlIjoibm9uZSIsInBvc2l0aW9uIjoiMCUgMCUiLCJzaXplIjoiYXV0byIsInJlcGVhdCI6InJlcGVhdCIsImF0dGFjaG1lbnQiOiJzY3JvbGwiLCJhZHZhbmNlZCI6MH0=`,`height|.slmm li ul li`:`100%`,`width|.slmm li ul li`:`100%`,`padding|.slmm li ul li`:`0px 30px 0px 0px`},`item-2-lvl`:{`font-size|.slmm li ul li a, .slmm li ul li > span`:`14px`,`line-height|.slmm li ul li a, .slmm li ul li > span`:`19px`,`color|.slmm li ul li a, .slmm li ul li > span`:`#2c3840`,`color|.slm-mega-item li ul li.current-menu-item a, .slm-mega-item li ul li.current-menu-item > span`:`#768188`,`font-weight|.slmm li ul li a, .slmm li ul li > span`:`400`,`text-transform|.slmm li ul li a, .slmm li ul li > span`:`capitalize`,`background|.slmm li ul li a, .slmm li ul li > span`:`eyJjb2xvciI6InJnYmEoMjU1LCAyNTUsIDI1NSwgMCkiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`border|.slmm li ul li a, .slmm li ul li > span`:`||1px solid #d7dce0|`,`padding|.slmm li ul li a, .slmm li ul li > span`:`10px 15px 10px 0px`},`icon-2-lvl`:{`color|.slmm li ul li a i, .slmm li ul li a img`:`#ffbd00`,`color|.slm-mega-item li ul li.current-menu-item i`:`#ffbd00`,`padding|.slmm li ul li a i, .slmm li ul li a img`:`inherit 10px inherit inherit`},`caret-2-lvl`:{`font-size|.slmm li ul li .caret`:`15px`},`box-3-lvl`:{`background|.slmm li ul li ul`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`}}}}', // remove this if you do not need a default content
                        //'options' => array(), register css properties, selectors and screens
                        'description' => esc_html__( 'Styles', 'ssc' ),
                        'options' => array(
                            array(
                                'screens' => "any",
                                'Wrapper' => array(
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '+.ssc_menu'),
                                ),
                                'Box' => array(
                                    array('property' => 'text-align', 'label' => esc_html__( 'Position of mobile menu button (left/right)', 'ssc' ), 'selector' => '.slmm-respmenu'),
                                    array('property' => 'background', 'selector' => '.slmm-respmenu .slm-open-menu-list'),
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height of icon for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Font Family of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin of text for mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu i'),
                                    array('property' => 'color', 'label' => esc_html__( 'Text Color of mobile menu button text', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list'),
                                    array('property' => 'color', 'label' => esc_html__( 'Text Color of mobile menu button icon', 'ssc' ), 'selector' => '.slm-open-menu-list i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border of mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius of mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list'),
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm'),
                                    array('property' => 'float', 'label' => esc_html__( 'Position left/right', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                ),
                                'Box 1 Lvl' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'background', 'selector' => '.slmm'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm'),
                                ),
                                'Item Box' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'background', 'selector' => '.slmm li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slmm li:last-child'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li'),
                                ),

                                'Item' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item span'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slmm li:last-child > a, .slmm li:last-child > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                ),
                                'Icon' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li i,.slmm li img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li i,.slmm li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item i'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li i, .slmm li i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item i, .slmm li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                ),
                                'Caret' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li .caret'),
                                ),
                                'Search' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Icon Line Height', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'display', 'label' => esc_html__( 'Icon Display', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'float', 'label' => esc_html__( 'Icon Float', 'ssc' ), 'selector' => '.slmm .slm-search-menu-item.slm-mega-item'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slm-search-icon i'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slm-search-icon i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Search Link Padding', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Icon Margin', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    // Input
                                    array('property' => 'font-size', 'label' => esc_html__( 'Input Font Size', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Input Line Height', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'width', 'label' => esc_html__( 'Input Width', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
                                    array('property' => 'color', 'label' => esc_html__( 'Input Text Color', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'display', 'label' => esc_html__( 'Input Display', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'float', 'label' => esc_html__( 'Input Float', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'background', 'label' => esc_html__( 'Input Background', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'border', 'label' => esc_html__( 'Input Border', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Input Border Radius', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Input Padding', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Form Margin', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Input Margin', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    // Close Icon
                                    array('property' => 'color', 'label' => esc_html__( 'Color of Close Icon', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-close'),
                                    array('property' => 'background', 'label' => esc_html__( 'Layout Background', 'ssc' ), 'selector' => '.slmm .slm-search-block'),
                                ),
                                'Cart' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Icon Line Height', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slmm .slmm li.slm-cart-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Icon Display', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'float', 'label' => esc_html__( 'Icon Float', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item.slm-mega-item'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Icon Margin', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    // Cart Money
                                    array('property' => 'color', 'label' => esc_html__( 'Money Total Text Color', 'ssc' ), 'selector' => '.slm-menu-item-cart-block strong'),
                                    // Block
                                    array('property' => 'font-size', 'label' => esc_html__( 'Cart Font Size', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Cart Line Height', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'width', 'label' => esc_html__( 'Cart Block Width', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Header Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block h4'),
                                    array('property' => 'background', 'label' => esc_html__( 'Cart Block Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'border', 'label' => esc_html__( 'Cart Block Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Cart Block Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Cart Block Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Cart Block Margin', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    // Cart Link
                                    array('property' => 'font-size', 'label' => esc_html__( 'Cart Link Font Size', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Cart Link Line Height', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Link Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Cart Link Font Family', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Cart Link Font Weight', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Cart Link Font Style', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Cart Link Text Transform', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Cart Link Text Decoration', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'background', 'label' => esc_html__( 'Cart Link Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'border', 'label' => esc_html__( 'Cart Link Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Cart Link Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Cart Link Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Cart Link Margin', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                ),
                                'Box 2 lvl' => array(
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'float', 'label' => esc_html__( 'Position left/right', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'background', 'selector' => '.slmm li ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul'),
                                ),
                                'Item Box 2 lvl' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'float', 'label' => esc_html__( 'Position left/right', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'min-width', 'label' => esc_html__( 'Min-Width', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li'),
                                ),
                                'Item 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item a, .slmm li ul li.current-menu-item span'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li a span, .slmm li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item a, .slmm li ul li.current-menu-item > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child > a, .slm-sub-menu li:last-child > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                ),
                                'Icon 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li a i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item i, .slmm li ul li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                ),
                                'Caret 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                ),
                                'Box 3 lvl' => array(
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                ),
                                'Item Box 3 lvl' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                ),
                                'Item 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item a, .slm-mega-item li ul li ul li.current-menu-item > span'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li ul li a span, .slmm li ul li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item a, .slmm li ul li ul li.current-menu-item > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                ),
                                'Icon 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li ul li img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li ul li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item i, .slmm li ul li ul li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                ),
                                'Mega Menu Box' => array(
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'background', 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                ),
                                'Column Box' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.slmm-column.current-menu-item'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li.slmm-column:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column:last-child'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
                                ),
                                'Column Item' => array(
	                                array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item span'),
	                                array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child > a, .slm-sub-menu li:last-child > span'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
                                ),
                            ),
                            array(
                                'screens' => "999,768,667,479",
                                'Wrapper' => array(
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '+.ssc_menu'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '+.ssc_menu'),
                                ),
                                'Box' => array(

                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'float', 'label' => esc_html__( 'Position left/right', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'background', 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm, .slmm-respmenu'),

                                ),
                                'Box 1 Lvl' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'background', 'selector' => '.slmm'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm'),
                                ),
                                'Item Box' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'background', 'selector' => '.slmm li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li'),
                                ),
                                'Item' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li a, .slmm li > span'),
                                ),
                                'Icon' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item i, .slmm li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li i, .slmm li img'),
                                ),
                                'Caret' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li .caret'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li .caret'),
                                ),
                                'Search' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Icon Line Height', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'float', 'label' => esc_html__( 'Block Float', 'ssc' ), 'selector' => '.slmm .slm-search-menu-item.slm-mega-item'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Icon Margin', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon'),
                                    // Input
                                    array('property' => 'font-size', 'label' => esc_html__( 'Input Font Size', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Input Line Height', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'width', 'label' => esc_html__( 'Input Width', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
                                    array('property' => 'color', 'label' => esc_html__( 'Input Text Color', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'display', 'label' => esc_html__( 'Input Display', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'float', 'label' => esc_html__( 'Input Float', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'background', 'label' => esc_html__( 'Input Background', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'border', 'label' => esc_html__( 'Input Border', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Input Border Radius', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Input Padding', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Form Margin', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Input Margin', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input'),
                                    // Close Icon
                                    array('property' => 'color', 'label' => esc_html__( 'Color of Close Icon', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-close'),
                                    array('property' => 'background', 'label' => esc_html__( 'Layout Background', 'ssc' ), 'selector' => '.slmm .slm-search-block'),
                                ),
                                'Cart' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Icon Line Height', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'float', 'label' => esc_html__( 'Block Float', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item.slm-mega-item'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Icon Margin', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item i'),
                                    // Block
                                    array('property' => 'font-size', 'label' => esc_html__( 'Data Font Size', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Data Line Height', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'width', 'label' => esc_html__( 'Data Block Width', 'ssc' ), 'selector' => '.slmm .slm-search-block form'),
                                    array('property' => 'color', 'label' => esc_html__( 'Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'color', 'label' => esc_html__( 'Header Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block h4'),
                                    array('property' => 'background', 'label' => esc_html__( 'Data Block Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),

                                    array('property' => 'border', 'label' => esc_html__( 'Data Block Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Data Block Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Data Block Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Data Block Margin', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-menu-item-cart-block'),
                                    // Cart Link
                                    array('property' => 'font-size', 'label' => esc_html__( 'Cart Link Font Size', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Cart Link Line Height', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Link Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-family', 'label' => esc_html__( 'Cart Link Font Family', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Cart Link Font Weight', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Cart Link Font Style', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Cart Link Text Transform', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Cart Link Text Decoration', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'background', 'label' => esc_html__( 'Cart Link Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'border', 'label' => esc_html__( 'Cart Link Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Cart Link Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Cart Link Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Cart Link Margin', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart'),
                                ),
                                'Box 2 lvl' => array(
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'float', 'label' => esc_html__( 'Position left/right', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'background', 'selector' => '.slmm li ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul'),
                                ),
                                'Item Box 2 lvl' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li'),

                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li'),
                                ),
                                'Item 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item a, .slm-mega-item li ul li.current-menu-item > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li a span, .slmm li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item a, .slmm li ul li.current-menu-item > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li a, .slmm li ul li > span'),
                                ),
                                'Icon 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li a i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item i, .slmm li ul li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li a i, .slmm li ul li a img'),
                                ),
                                'Caret 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li .caret'),
                                ),
                                'Box 3 lvl' => array(
                                    array('property' => 'width', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul'),
                                ),
                                'Item Box 3 lvl' => array(
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item'),
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li'),
                                ),
                                'Item 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item a, .slm-mega-item li ul li ul li.current-menu-item > span'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li ul li a span, .slmm li ul li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item a, .slmm li ul li ul li.current-menu-item > span'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li a, .slmm li ul li ul li > span'),
                                ),
                                'Icon 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li ul li i,.slmm li ul li ul li img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li ul li i,.slmm li ul li ul li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item i'),
                                    array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item i, .slmm li ul li ul li.current-menu-item img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li ul li ul li i, .slmm li ul li ul li img'),
                                ),
                                'Mega Menu Box' => array(
                                    array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'background', 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                ),
                                'Column Box' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.slmm-column.current-menu-item'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li.slmm-column:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
                                ),
                                'Column Item' => array(
	                                array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item span'),
	                                array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child > a, .slm-sub-menu li:last-child > span'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
                                ),
                            )
                        )
                    )
                ),
                // Hover
                esc_html__( 'hover', 'ssc' ) => array(
                    array(
                        'name' => 'hover-css',
                        'label' => esc_html__( 'Hover', 'ssc' ),
                        'type' => 'css',
                        'value' => '{`kc-css`:{`any`:{`box`:{`background|.slmm-respmenu .slm-open-menu-list:hover`:`eyJjb2xvciI6IiNmZmZmZmYiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`,`color|.slmm-respmenu .slm-open-menu-list:hover`:`#768188`,`border|.slmm-respmenu .slm-open-menu-list:hover`:`2px solid #ffbd00`},`item`:{`color|.slmm li a:hover, .slmm li > span:hover`:`#768188`,`color|.slmm li.current-menu-item a:hover`:`#768188`,`border|.slmm li a:hover, .slmm li > span:hover`:`||3px solid #ffbd00|`},`cart`:{`color|.slmm .slm-cart-menu-item .slm-link-to-cart:hover`:`#ffbd00`,`background|.slmm .slm-cart-menu-item .slm-link-to-cart:hover`:`eyJjb2xvciI6IiMyYzM4NDAiLCJsaW5lYXJHcmFkaWVudCI6WyIiXSwiaW1hZ2UiOiJub25lIiwicG9zaXRpb24iOiIwJSAwJSIsInNpemUiOiJhdXRvIiwicmVwZWF0IjoicmVwZWF0IiwiYXR0YWNobWVudCI6InNjcm9sbCIsImFkdmFuY2VkIjowfQ==`},`item-2-lvl`:{`color|.slmm li ul li a:hover, .slmm li ul li > span:hover`:`#0081d7`,`color|.slm-mega-item li ul li.current-menu-item a:hover`:`#768188`,`text-decoration|.slmm li ul li a:hover span, .slmm li ul li > span:hover`:`none`,`background|.slmm li ul li a:hover, .slmm li ul li > span:hover`:`eyJjb2xvciI6InRyYW5zcGFyZW50IiwibGluZWFyR3JhZGllbnQiOlsiIl0sImltYWdlIjoibm9uZSIsInBvc2l0aW9uIjoiMCUgMCUiLCJzaXplIjoiYXV0byIsInJlcGVhdCI6InJlcGVhdCIsImF0dGFjaG1lbnQiOiJzY3JvbGwiLCJhZHZhbmNlZCI6MH0=`,`border|.slmm li ul li a:hover, .slmm li ul li > span:hover`:`||1px solid #b2b9be|`},`icon-2-lvl`:{`color|.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img`:`#0081d7`,`color|.slm-mega-item li ul li.current-menu-item:hover i`:`#0081d7`}}}}', // remove this if you do not need a default content
                        'description' => esc_html__( 'Styles for Hover Condition', 'ssc' ),
                        'options' => array(
                            array(
                                'screens' => "any",
                                'Box' => array(
                                    array('property' => 'background', 'selector' => '.slmm-respmenu .slm-open-menu-list:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Text Color of mobile menu button text', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Text Color of mobile menu button icon', 'ssc' ), 'selector' => '.slm-open-menu-list:hover i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border of mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius of mobile menu button', 'ssc' ), 'selector' => '.slmm-respmenu .slm-open-menu-list:hover'),
                                ),
                                'Box 1 Lvl' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'background', 'selector' => '.slmm'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm'),
                                ),
                                'Item Box' => array(
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'background', 'selector' => '.slmm li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover'),
                                ),
                                'Item' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a:hover, .slmm li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a:hover span, .slmm li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                ),
                                'Icon' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li:hover i,.slmm li:hover img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li:hover i,.slmm li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover i, .slmm li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover i, .slmm li:hover img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover i, .slmm li.current-menu-item:hover img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover i, .slmm li:hover img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover i, .slmm li:hover img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover i, .slmm li:hover img'),
                                ),
                                'Caret' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                ),
                                'Search' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    // Input
                                    array('property' => 'font-size', 'label' => esc_html__( 'Input Font Size', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Input Text Color', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Input Background', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Input Border', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Input Border Radius', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    // Close Icon
                                    array('property' => 'color', 'label' => esc_html__( 'Color of Close Icon', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-close:hover'),
                                ),
                                'Cart' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    // Cart Link
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Link Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Cart Link Font Weight', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Cart Link Text Transform', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Cart Link Text Decoration', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Cart Link Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Cart Link Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Cart Link Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Cart Link Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                ),
                                'Box 2 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                ),
                                'Item Box 2 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                ),
                                'Item 2 lvl' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item a:hover, .slm-mega-item li ul li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item a:hover, .slmm li ul li.current-menu-item > span:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                ),
                                'Icon 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i,.slmm li:hover ul li a:hover a img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i,.slmm li:hover ul li a:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item:hover i, .slmm li ul li.current-menu-item img:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                ),
                                'Caret 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                ),
                                'Box 3 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                ),
                                'Item Box 3 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                ),
                                'Item 3 lvl' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item a:hover, .slm-mega-item li ul li ul li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover span, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item a:hover, .slmm li ul li ul li.current-menu-item > span:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                ),
                                'Icon 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i,.slmm li ul li ul li:hover img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i,.slmm li ul li ul li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item:hover i, .slmm li ul li ul li.current-menu-item:hover img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                ),
                                'Mega Menu Box' => array(
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'background', 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                ),
                                'Column Box' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.slmm-column.current-menu-item'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li.slmm-column:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column:last-child'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
                                ),
                                'Column Item' => array(
	                                array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item span'),
	                                array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child > a, .slm-sub-menu li:last-child > span'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
                                ),
                            ),
                            array(
                                "screens" => "999,768,667,479",
                                'Box 1 Lvl' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'background', 'selector' => '.slmm'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm'),
                                ),
                                'Item Box' => array(
                                    array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'background', 'selector' => '.slmm li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover'),
                                ),
                                'Item' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a:hover, .slmm li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a:hover span, .slmm li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li a:hover, .slmm li > span:hover'),
                                ),
                                'Icon' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li i:hover'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li i:hover,.slmm li img:hover'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li i:hover,.slmm li img:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li i:hover, .slmm li img:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li i:hover, .slmm li img:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item:hover i, .slmm li.current-menu-item img:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li i:hover, .slmm li img:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li i:hover, .slmm li img:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li i:hover, .slmm li img:hover'),
                                ),
                                'Caret' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover .caret'),
                                ),
                                'Search' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slm-mega-item .slm-search-icon i.menu-item-icon:hover'),
                                    // Input
                                    array('property' => 'font-size', 'label' => esc_html__( 'Input Font Size', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Input Text Color', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Input Background', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Input Border', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Input Border Radius', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-input:hover'),
                                    // Close Icon
                                    array('property' => 'color', 'label' => esc_html__( 'Color of Close Icon', 'ssc' ), 'selector' => '.slmm .slm-search-block .slm-search-close:hover'),
                                ),
                                'Cart' => array(
                                    // Icon
                                    array('property' => 'font-size', 'label' => esc_html__( 'Icon Font Size', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'color', 'label' => esc_html__( 'Icon Color', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Icon Background', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'border', 'label' => esc_html__( 'Icon Border', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Icon Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Icon Padding', 'ssc' ), 'selector' => '.slmm li.slm-cart-menu-item:hover i'),
                                    // Cart Link
                                    array('property' => 'color', 'label' => esc_html__( 'Cart Link Text Color', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Cart Link Font Weight', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Cart Link Text Transform', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Cart Link Text Decoration', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Cart Link Background', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Cart Link Border', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Cart Link Border Radius', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Cart Link Padding', 'ssc' ), 'selector' => '.slmm .slm-cart-menu-item .slm-link-to-cart:hover'),
                                ),
                                'Box 2 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul:hover'),
                                ),
                                'Item Box 2 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li:hover'),
                                ),
                                'Item 2 lvl' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item a:hover, .slm-mega-item li ul li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item a:hover, .slmm li ul li.current-menu-item > span:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li a:hover, .slmm li ul li > span:hover'),
                                ),
                                'Icon 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i,.slmm li:hover ul li a:hover a img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover a i,.slmm li:hover ul li a:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li.current-menu-item:hover i, .slmm li ul li.current-menu-item img:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                    array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover i, .slmm li:hover ul li a:hover img'),
                                ),
                                'Caret 2 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item .caret:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li:hover ul li a:hover .caret'),
                                ),
                                'Box 3 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul:hover'),
                                ),
                                'Item Box 3 lvl' => array(
                                    array('property' => 'background', 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover'),
                                ),
                                'Item 3 lvl' => array(
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item a:hover, .slm-mega-item li ul li ul li.current-menu-item > span:hover'),
                                    array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover span, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item a:hover, .slmm li ul li ul li.current-menu-item > span:hover'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li a:hover, .slmm li ul li ul li > span:hover'),
                                ),
                                'Icon 3 lvl' => array(
                                    array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i'),
                                    array('property' => 'height', 'label' => esc_html__( 'Image Height', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i,.slmm li ul li ul li:hover img'),
                                    array('property' => 'width', 'label' => esc_html__( 'Image Width', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i,.slmm li ul li ul li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slm-mega-item li ul li ul li.current-menu-item:hover i'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li ul li ul li.current-menu-item:hover i, .slmm li ul li ul li.current-menu-item:hover img'),
                                    array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                    array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li ul li ul li:hover i, .slmm li ul li ul li:hover img'),
                                ),
                                'Mega Menu Box' => array(
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'background', 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'box-shadow', 'label' => esc_html__( 'Box Shadow', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slm-mega-block > ul'),
                                ),
                                'Column Box' => array(
	                                array('property' => 'display', 'label' => esc_html__( 'Display', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'float', 'label' => esc_html__( 'Float', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'text-align', 'label' => esc_html__( 'Text Align', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background for active item', 'ssc' ), 'selector' => '.slmm li.slmm-column.current-menu-item'),
	                                array('property' => 'height', 'label' => esc_html__( 'Height', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'width', 'label' => esc_html__( 'Width', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li.slmm-column:last-child'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column'),
                                ),
                                'Column Item' => array(
	                                array('property' => 'font-size', 'label' => esc_html__( 'Font Size', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'line-height', 'label' => esc_html__( 'Line Height', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'color', 'label' => esc_html__( 'Color on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item span'),
	                                array('property' => 'font-family', 'label' => esc_html__( 'Font Family', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-weight', 'label' => esc_html__( 'Font Weight', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'font-style', 'label' => esc_html__( 'Font Style', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-transform', 'label' => esc_html__( 'Text Transform', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'text-decoration', 'label' => esc_html__( 'Text Decoration', 'ssc' ), 'selector' => '.slmm li a span, .slmm li > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'background', 'label' => esc_html__( 'Background on Active', 'ssc' ), 'selector' => '.slmm li.current-menu-item a, .slmm li.current-menu-item > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'border', 'label' => esc_html__( 'Border Last Child', 'ssc' ), 'selector' => '.slm-sub-menu li:last-child > a, .slm-sub-menu li:last-child > span'),
	                                array('property' => 'border-radius', 'label' => esc_html__( 'Border Radius', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'padding', 'label' => esc_html__( 'Padding', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
	                                array('property' => 'margin', 'label' => esc_html__( 'Margin', 'ssc' ), 'selector' => '.slmm li.slmm-column > a, .slmm li.slmm-column > span'),
                                ),
                            )
                        )
                    )
                )

            )
        )
    ));
}

function slmm_get_menu_select (){
    $menus = get_terms( array (
        'taxonomy'      => 'nav_menu',
        'orderby'       => 'id',
        'order'         => 'ASC',
        'hide_empty'    => true,
        'object_ids'    => null,
        'include'       => array(),
        'exclude'       => array(),
        'exclude_tree'  => array(),
        'number'        => '',
        'fields'        => 'all',
        'count'         => false,
        'slug'          => '',
        'parent'         => '',
        'hierarchical'  => true,
    ) );
    $out = array();
    if( is_array( $menus ) ) {
        foreach( $menus as $menu ){
            $out[$menu->slug] = $menu->name;
        }
    }
    return $out;
}

// Register Shortcode

class sl_walker_nav_menu extends Walker_Nav_Menu {

    public $top_level_counter              = 0;

    public $menu_key                       = '_menu-item-seclab';
    public $dropdown_width                 = '';
    public $dropdown_position              = 'left';
    public $dropdown_sub_open_pos          = 'left';
    public $mega_menu_column_width         = '50%';
    public $container_style                = '';
    public $container_align_class          = ' slm-submenu-pos-right ';
    public $item_text_color                = '';
    public $item_text_hover_color          = '';
    public $item_text_weight               = '';
    public $item_bg_color                  = '';
    public $item_resp_text_color           = '';
    public $item_resp_text_hover_color     = '';
    public $item_resp_text_weight          = '';
    public $item_resp_bg_color             = '';
    public $item_display                   = '';
    public $only_icon                      = '';

    public static $desc_styles = '';

    public static $res_styles = '';

    function __construct ($atts) {
        $this->atts = $atts;
    }

    public function slmm_desc_styles() {
        return self::$desc_styles;
    }

    public function slmm_resp_styles() {
        return self::$resp_styles;
    }

    // add classes to ul sub-menus
    function start_lvl( &$output, $depth = 0, $args = array() ) {

        // depth dependent classes
        $indent = ( $depth > 0  ? str_repeat( "\t", $depth ) : '' ); // code indent
        $display_depth = ( $depth + 1); // because it counts the first submenu as 0
        $classes = array(
            'slm-sub-menu',
            ( $display_depth % 2  ? 'menu-odd' : 'menu-even' ),
            ( $display_depth >= 2 ? 'sub-sub-menu' : '' ),
            'slm-menu-depth-' . $display_depth,
        );
        $class_names = implode( ' ', $classes );

        switch( $this->menu_type ) {
            case 'mega_menu' :
                if ( $display_depth > 1 ){ $this->container_style = 'width:100%;'; }
                $output .= "\n" . $indent . '<ul class="slmm-container ' . $this->container_align_class . $class_names . '" style="' . $this->container_style . ' " >' . "\n"; break;
            case 'dropdown' :
                $output .= "\n" . $indent . '<ul class=" ' . $class_names . ' ' . $this->dropdown_sub_open_pos . '" style="' . $this->dropdown_width . '">' . "\n"; break;

            default :
                // build html
                $output .= "\n" . $indent . '<ul class="' . $class_names . '">' . "\n";
        }

    }

    // add main/sub classes to li's and mega_menu
    function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
        $args = ( !is_object( $args ) ) ? (object)$args : $args ;
        $args->link_before = $args->link_after = $args->before = $args->after = '';
        $indent = ( $depth > 0 ? str_repeat( "\t", $depth ) : '' ); // code indent
        $item_meta = get_post_meta( $item->ID );
        $this->item_text_color = ( isset( $item_meta[$this->menu_key.'-text_color'][0] ) && !empty( $item_meta[$this->menu_key.'-text_color'][0] ) ) ? $item_meta[$this->menu_key.'-text_color'][0] : '';
        $this->item_text_hover_color = ( isset( $item_meta[$this->menu_key.'-text_hover_color'][0] ) && !empty( $item_meta[$this->menu_key.'-text_hover_color'][0] ) ) ? $item_meta[$this->menu_key.'-text_hover_color'][0] : '';
        $this->item_text_weight = ( isset( $item_meta[$this->menu_key.'-text_weight'][0] ) && !empty( $item_meta[$this->menu_key.'-text_weight'][0] ) ) ? $item_meta[$this->menu_key.'-text_weight'][0] : '';
        $this->item_bg_color = ( isset( $item_meta[$this->menu_key.'-item_bg_color'][0] ) && !empty( $item_meta[$this->menu_key.'-item_bg_color'][0] ) ) ? $item_meta[$this->menu_key.'-item_bg_color'][0] : '';
        $this->item_resp_text_color = ( isset( $item_meta[$this->menu_key.'-resp_text_color'][0] ) && !empty( $item_meta[$this->menu_key.'-resp_text_color'][0] ) ) ? $item_meta[$this->menu_key.'-resp_text_color'][0] : '';
        $this->item_resp_text_hover_color = ( isset( $item_meta[$this->menu_key.'-resp_text_hover_color'][0] ) && !empty( $item_meta[$this->menu_key.'-resp_text_hover_color'][0] ) ) ? $item_meta[$this->menu_key.'-resp_text_hover_color'][0] : '';
        $this->item_resp_text_weight = ( isset( $item_meta[$this->menu_key.'-resp_text_weight'][0] ) && !empty( $item_meta[$this->menu_key.'-resp_text_weight'][0] ) ) ? $item_meta[$this->menu_key.'-resp_text_weight'][0] : '';
        $this->item_resp_bg_color = ( isset( $item_meta[$this->menu_key.'-resp_item_bg_color'][0] ) && !empty( $item_meta[$this->menu_key.'-resp_item_bg_color'][0] ) ) ? $item_meta[$this->menu_key.'-resp_item_bg_color'][0] : '';
        $this->only_icon = isset( $item_meta[$this->menu_key.'-link_icon_only'][0] ) ? $item_meta[$this->menu_key.'-link_icon_only'][0] : 'text_and_icon';
        $menu_item_acess = ( ( isset( $item_meta[$this->menu_key.'-link_user_logged'][0] ) && !empty( $item_meta[$this->menu_key.'-link_user_logged'][0] ) ) ? $item_meta[$this->menu_key.'-link_user_logged'][0] : 'both' );
        if ( ( 'logged_in' == $menu_item_acess && is_user_logged_in() ) || ( 'logged_out' == $menu_item_acess && !is_user_logged_in() ) || 'both' == $menu_item_acess ) {
            // depth dependent classes
            $depth_classes = array(
                ( $depth == 0 ? 'main-menu-item slm-mega-item' : 'sub-menu-item' ),
                ( $depth >=2 ? 'sub-sub-menu-item' : '' ),
                ( $depth % 2 ? 'menu-item-odd' : 'menu-item-even' ),
                'slm-menu-item-depth-' . $depth
            );

            $depth_class_names = esc_attr( implode( ' ', $depth_classes ) );

            if ( isset( $item_meta[$this->menu_key.'-link_icon_position'][0] ) ) {
                if ( "icon_font" == $item_meta[$this->menu_key.'-link_icon_type'][0] && !empty( $item_meta[$this->menu_key.'-link_icon'][0] ) ) {
                    $icon  = $item_meta[$this->menu_key.'-link_icon'][0];
                    switch( $item_meta[$this->menu_key.'-link_icon_position'][0] ) {
                        case 'right' : $args->link_after = '<i class="menu-item-icon' . ' ' . $icon . '"></i>'; $args->link_before = ''; break;
                        default : $args->link_before = '<i class="menu-item-icon' . ' ' . $icon . '"></i>'; $args->link_after = '';
                    }
                } else if ( "upload" == $item_meta[$this->menu_key.'-link_icon_type'][0] && !empty( $item_meta[$this->menu_key.'-link_icon_image'][0] ) ) {
                    $icon_image  = $item_meta[$this->menu_key.'-link_icon_image'][0];
                    switch( $item_meta[$this->menu_key.'-link_icon_position'][0] ) {
                        case 'right' : $args->link_after = '<img src="' . $icon_image . '" class="menu-item-icon">'; $args->link_before = ''; break;
                        default : $args->link_before = '<img src="' . $icon_image . '">'; $args->link_after = '';
                    }
                }
            }

            // passed classes
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $class_names = esc_attr( implode( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) ) );

            // build html
            $current_url = (is_ssl()?'https://':'http://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            $item_url = esc_attr( $item->url );

            if( $depth === 0 ) {

                $this->top_level_counter += 1;

                $this->menu_type = ( ( isset( $item_meta[$this->menu_key.'-menu_type'][0] ) && !empty( $item_meta[$this->menu_key.'-menu_type'][0] ) ) ? $item_meta[$this->menu_key.'-menu_type'][0] : '' );

                switch( $this->menu_type ) {
                    case 'dropdown' :

                        $this->dropdown_width = ( ( isset( $item_meta[$this->menu_key.'-dropdown_width'][0] ) && !empty( $item_meta[$this->menu_key.'-dropdown_width'][0] ) ) ? 'width:' . $item_meta[$this->menu_key.'-dropdown_width'][0] . ';' : '' );

                        if( isset( $item_meta[$this->menu_key.'-dropdown_open_pos'][0] ) && $item_meta[$this->menu_key.'-dropdown_open_pos'][0] != '' ){
                            switch( $item_meta[$this->menu_key.'-dropdown_open_pos'][0] ) {
                                case ( 'right' ) :
                                    $this->dropdown_position =  'right';
                                    $this->dropdown_sub_open_pos = 'slm-submenu-pos-right';
                                    break;
                                default :
                                    $this->dropdown_position =  'left';
                                    $this->dropdown_sub_open_pos = 'slm-submenu-pos-left';
                            }
                        }

                        if( in_array( "menu-item-has-children", $item->classes ) && $depth == 0 && isset($this->atts['max_menu_depth']) && $this->atts['max_menu_depth'] > 1 ) {
                            $args->link_after .= '<i class="caret' . ' ' . $this->atts['icon_for_arrow'] . '"></i>';
                        }

                        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class=" slm-dropd-item ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '" style="z-index: 1; ">';

                        // link attributes

                        $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                        if( ! empty( $item->url ) ){

                            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                            if ( $item_url != $current_url ) {
                                $attributes .= ' href="'   . esc_attr( $item->url ) .'" ';
                            } else {
                                $attributes .= ' href="#" ';
                            }
                            $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';

                            $this->set_link_styles( $attributes, $item );

                            $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                                $args->before,
                                $attributes,
                                $args->link_before,
                                apply_filters( 'the_title', $item->title, $item->ID ),
                                $args->link_after,
                                $args->after
                            );

                        } else {

                            $attributes = ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';

                            $this->set_link_styles( $attributes, $item );

                            $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                                $args->before,
                                $attributes,
                                $args->link_before,
                                apply_filters( 'the_title', $item->title, $item->ID ),
                                $args->link_after,
                                $args->after
                            );

                        }

                        // build html
                        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                        break;

                    case 'mega_menu' :

                        // options
                        $this->mega_menu_column_width =  isset( $item_meta[$this->menu_key.'-mega_menu_column_width'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_column_width'][0] : '50%';
                        $mega_menu_fullwidth =  isset( $item_meta[$this->menu_key.'-mega_menu_fullwidth'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_fullwidth'][0] : 'off';
                        $top_link_style = ' position:initial; ';
                        if( $mega_menu_fullwidth == 'off' or $mega_menu_fullwidth == '' ){
                            $container_width =  isset( $item_meta[$this->menu_key.'-mega_menu_width'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_width'][0] : '500px';
                            $container_align =  isset( $item_meta[$this->menu_key.'-mega_menu_align'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_align'][0]: 'right';
                            $this->container_style = 'width:'.$container_width.';';
                            $top_link_style  = ' position:relative; ';

                            if( $container_align == 'left' ){
                                $this->container_align_class = ' slm-submenu-pos-left ';
                            }
                            else if( $container_align == 'right' ){
                                $this->container_align_class = ' slm-submenu-pos-right ';
                            }
                            else{
                                $this->container_style .= ' margin-left: -'.( ( (int) $container_width ) / 2 ).'px; ';
                                $this->container_align_class = ' slm-submenu-pos-center ';
                            }
                        } else {
                            $this->container_style = 'width:100%;';
                        }

                        if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_image'][0] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_image'][0] ) ) {
                            $bg_rep = !empty( $item_meta[$this->menu_key.'-mega_menu_bg_repeat'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_bg_repeat'][0] : 'no-repeat';
                            $bg_size = !empty( $item_meta[$this->menu_key.'-mega_menu_bg_size'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_bg_size'][0] : 'inherit';
                            $bg_pos = !empty( $item_meta[$this->menu_key.'-mega_menu_bg_position'][0] ) ? $item_meta[$this->menu_key.'-mega_menu_bg_position'][0] : 'center center';
                            $this->container_style .= ' background: url(' . $item_meta[$this->menu_key.'-mega_menu_bg_image'][0] . ') ' . $bg_pos . ' ' . $bg_rep . '; background-size:' . $bg_size . '; ';
                        }

                        if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_color'][0] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_color'][0] ) ) {
                            $this->container_style .= ' background-color:' . esc_attr( $item_meta[$this->menu_key.'-mega_menu_bg_color'][0] ) . '; ';
                        }

                        $arrow = '';
                        $has_arrow = '';
                        if( in_array( "menu-item-has-children", $item->classes ) && $depth == 0 && isset($this->atts['max_menu_depth']) && $this->atts['max_menu_depth'] > 1 ) {
                            $args->link_after .= '<i class="caret' . ' ' . $this->atts['icon_for_arrow'] . '"></i>';
                        }

                        $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class="slm-mega-block ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '" style="' . $top_link_style . '">';

                        // link attributes

                        $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                        if( ! empty( $item->url ) ){

                            $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                            $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                            $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                            if ( $item_url != $current_url ) {
                                $attributes .= ' href="'   . esc_attr( $item->url ) .'" ';
                            } else {
                                $attributes .= ' href="#" ';
                            }
                            $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                            $this->set_link_styles( $attributes, $item );

                            $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                                $args->before,
                                $attributes,
                                $args->link_before,
                                apply_filters( 'the_title', $item->title, $item->ID ),
                                $args->link_after,
                                $args->after
                            );

                        } else {

                            $attributes = ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                            $this->set_link_styles( $attributes, $item );

                            $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                                $args->before,
                                $attributes,
                                $args->link_before,
                                apply_filters( 'the_title', $item->title, $item->ID ),
                                $args->link_after,
                                $args->after
                            );

                        }

                        // build html
                        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                        break;
                    case 'search' :

                        $icon = ( isset( $item_meta[$this->menu_key.'-link_icon'][0] ) && $item_meta[$this->menu_key.'-link_icon'][0] != '' ) ? $item_meta[$this->menu_key.'-link_icon'][0] : 'nat-search3';
                        $output .= '<li class="slm-search-menu-item ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';
                        $output .= '<div class="slm-search-block">';
	                    $output .= '        <span aria-hidden="true" class="slm-search-close sl-remove"><svg width="184" height="184" viewBox="0 0 184 184" fill="white" xmlns="http://www.w3.org/2000/svg">
<rect x="169.782" y="0.0761108" width="20" height="240" transform="rotate(45 169.782 0.0761108)" />
<rect x="0.0761108" y="14.2183" width="20" height="240" transform="rotate(-45 0.0761108 14.2183)" />
</svg>
</span>';
                        $output .= '    <form action="'.get_bloginfo('url').'" method="get" >';
                        $output .= '        <input type="text" name="s" class="slm-search-input" value="" placeholder="' . ( isset( $item_meta[$this->menu_key.'-search_text'][0] ) ? $item_meta[$this->menu_key.'-search_text'][0] : esc_attr__( 'Search', 'ssc' ) ) . '" >';
                        $output .= '        <span aria-hidden="true" class="slm-search-submit-icon "><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 511.999 511.999" style="fill:white" xml:space="preserve">
<g>
	<g>
		<path d="M508.874,478.708L360.142,329.976c28.21-34.827,45.191-79.103,45.191-127.309c0-111.75-90.917-202.667-202.667-202.667
			S0,90.917,0,202.667s90.917,202.667,202.667,202.667c48.206,0,92.482-16.982,127.309-45.191l148.732,148.732
			c4.167,4.165,10.919,4.165,15.086,0l15.081-15.082C513.04,489.627,513.04,482.873,508.874,478.708z M202.667,362.667
			c-88.229,0-160-71.771-160-160s71.771-160,160-160s160,71.771,160,160S290.896,362.667,202.667,362.667z"/>
	</g>
</g>
</svg></span>';
                        $output .= '        <input class="slm-search-submit" type="submit">';

                        $output .= '    </form>';
                        $output .= '</div>';

                        $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;

                        $attributes = ' href="#" class="menu-link slm-search-icon ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                        // build html
                        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                        break;
                    case 'woocommerce_cart' :

                        if (class_exists('WC_Integration')) {

                            global $woocommerce;

                            if (is_object($woocommerce->cart)) {

                                $cart_url = wc_get_cart_url();
                                $cart_contents_count = $woocommerce->cart->cart_contents_count;
                                $cart_contents = sprintf( _n( '<span>%d</span> '.$this->atts["menu_cart_item"], '<span>%d</span> '.$this->atts["menu_cart_items"], $cart_contents_count ), $cart_contents_count );
                                $cart_total = $woocommerce->cart->get_cart_total();

                                $output .= '<li style="" class="slm-cart-menu-item ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';
                                $args->after = '<div class=" slm-menu-item-cart-block ">';
                                $args->after .= '<div>';
                                $args->after .= '<h4>' . esc_attr( $this->atts['menu_cart_title'] ) . '</h4>';
                                $args->after .= '<div>'.$cart_contents.'</div>';
                                $args->after .= '<div>'.esc_attr( $this->atts['menu_cart_total'] ) . ' <strong>' . $cart_total . '</strong></div></div>';
                                $args->after .=  '<a href="' . $cart_url . '" class="slm-link-to-cart';
                                $args->after .=  '">' . esc_attr( $this->atts['menu_cart_button'] ) . '</a></div>';

                                $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;

                                $attributes = ' href="#"  class=" menu-link slm-cart-icon ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                                $this->set_link_styles( $attributes, $item );

                                $item_output = sprintf( '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
                                    $args->before,
                                    $attributes,
                                    $args->link_before,
                                    apply_filters( 'the_title', $item->title, $item->ID ),
                                    $args->link_after,
                                    $args->after
                                );

                                // build html
                                $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                            }

                        }

                        break;
                }

            } else {}

            // Dropdown
            if( 'dropdown' == $this->menu_type )
            {
                if( $depth == 1 ){

                    if( in_array( "menu-item-has-children", $item->classes ) && $depth <= 1 && isset($this->atts['max_menu_depth']) && $this->atts['max_menu_depth'] > 1 ) {
                        $args->link_after .= '<i class="caret' . ' ' . $this->atts['icon_for_arrow_sec'] . '"></i>';
                    }

                    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class=" ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';

                    $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                    if( ! empty( $item->url ) ){

                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        if ( $item_url != $current_url ) {
                            $attributes .= ' href="'   . esc_attr( $item->url ) .'" ';
                        } else {
                            $attributes .= ' href="#" ';
                        }
                        $attributes .= ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    } else {

                        $attributes = ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    }

                    // build html
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                }
                else if( $depth == 2 )
                {

                    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class=" ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';

                    // link attributes
                    $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                    if( ! empty( $item->url ) ){

                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        if ( $item_url != $current_url ) {
                            $attributes .= ' href="'   . esc_attr( $item->url ) .'" ';
                        } else {
                            $attributes .= ' href="#" ';
                        }
                        $attributes .= ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    } else {

                        $attributes = ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    }

                    // build html
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                }
                else if( $depth == 3 )
                {
                    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class=" ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';

                    // link attributes
                    $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                    if( ! empty( $item->url ) ){

                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        if ( $item_url != $current_url ) {
                            $attributes .= ' href="' . esc_attr( $item->url ) . '" ';
                        } else {
                            $attributes .= ' href="#" ';
                        }
                        $attributes .= ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    } else {

                        $attributes = ' class="menu-link sub-menu-link " ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    }

                    // build html
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                }
            }

            // mega_menu
            if( 'mega_menu' == $this->menu_type ) {
                if( $depth == 1 ) {

                    // link attributes

                    $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                    $output .= '<li id="nav-menu-item-'. $item->ID . '" class="slmm-column" style="width:'.$this->mega_menu_column_width.';">';
                    if( ! empty( $item->url ) ){

                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        if ( $item_url != $current_url ) {
                            $attributes .= ' href="' . esc_attr( $item->url  ) .'" ';
                        } else {
                            $attributes .= ' href="#" ';
                        }
                        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    } else {

                        $attributes = ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    }

                    // build html
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

                } else if ( $depth >= 2 ) {
                    $output .= $indent . '<li id="nav-menu-item-'. $item->ID . '" class=" ' . $depth_class_names . ' ' . $class_names . ' ' . $menu_item_acess . '">';

                    // link attributes
                    $item->title = ( 'only_icon' === $this->only_icon ) ? '' : $item->title;
                    if( ! empty( $item->url ) ){

                        $attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
                        $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
                        $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
                        if ( $item_url != $current_url ) {
                            $attributes .= ' href="' . esc_attr( $item->url ) . '" ';
                        } else {
                            $attributes .= ' href="#" ';
                        }
                        $attributes .= ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s<a%2$s>%3$s<span>%4$s</span>%5$s</a>%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    } else {

                        $attributes = ' class="menu-link ' . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) . '" ';
                        $this->set_link_styles( $attributes, $item );

                        $item_output = sprintf( '%1$s%3$s<span%2$s>%4$s</span>%5$s%6$s',
                            $args->before,
                            $attributes,
                            $args->link_before,
                            apply_filters( 'the_title', $item->title, $item->ID ),
                            $args->link_after,
                            $args->after
                        );

                    }

                    // build html
                    $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
                }
            }

        } else {

            $output .= $indent . '<li class="' . $menu_item_acess . '" style="display: none;">';
            $item_output = apply_filters( 'the_title', $item->title, $item->ID );
            // build html
            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        }

    }

    function end_el( &$output, $object, $depth = 0, $args = array() ) {


        // Dropdown
        if( 'dropdown' == $this->menu_type )
        {
            $output .= '</li>';
        }

        // mega_menu
        if( 'mega_menu' == $this->menu_type ){
            if( $depth === 0 ){
                $output .= '</li><!--sl_submenu_columns_wrap-->';
            }
            if( $depth === 1 ){
                $output .= '</li>';
            }
        }

    }// End Func


    public function set_link_styles( $attr = '', $item ) {

        if ( $this->item_text_color != '' || $this->item_text_weight != '' || $this->item_bg_color != '' || $this->only_icon == 'none' ) {
            self::$desc_styles .= '.slmm li#nav-menu-item-' . $item->ID . ' > a, .slmm li#nav-menu-item-' . $item->ID . ' > span {';
            if ( $this->item_text_color != '' ) {
                self::$desc_styles .= 'color:' . $this->item_text_color . ';';
            }
            if ( $this->item_text_weight != '' ) {
                self::$desc_styles .= 'font-weight:' . $this->item_text_weight . ';';
            }
            if ( $this->item_bg_color != '' ) {
                self::$desc_styles .= 'background-color:' . $this->item_bg_color . ';';
            }
            if ( $this->only_icon == 'none' ) {
                self::$desc_styles .= 'display:none;';
            }
            self::$desc_styles .= '} ';
        }
        if ( $this->item_text_hover_color != '' ) {
            self::$desc_styles .= '.slmm li#nav-menu-item-' . $item->ID . ':hover > a, .slmm li#nav-menu-item-' . $item->ID . ':hover > span {';
            self::$desc_styles .= 'color:' . $this->item_text_hover_color . ';';
            self::$desc_styles .= '} ';
        }
        if ( $this->item_resp_text_color != '' || $this->item_resp_text_weight != '' || $this->item_resp_bg_color != '' || $this->only_icon === 'none' ) {
            self::$res_styles .= '.slmm li#nav-menu-item-' . $item->ID . ' > a, .slmm li#nav-menu-item-' . $item->ID . ' > span {';
            if ( $this->item_resp_text_color != '' ) {
                self::$res_styles .= 'color:' . $this->item_resp_text_color . ';';
            }
            if ( $this->item_resp_text_weight != '' ) {
                self::$res_styles .= 'font-weight:' . $this->item_resp_text_weight . ';';
            }
            if ( $this->item_resp_bg_color != '' ) {
                self::$res_styles .= 'background-color:' . $this->item_resp_bg_color . ';';
            }
            self::$res_styles .= '} ';
        }
        if ( $this->item_resp_text_hover_color != '' ) {
            self::$res_styles .= '.slmm li#nav-menu-item-' . $item->ID . ':hover > a, .slmm li#nav-menu-item-' . $item->ID . ':hover > span {';
            self::$res_styles .= 'color:' . $this->item_resp_text_hover_color . ';';
            self::$res_styles .= '} ';
        }
    }

}

function sl_menu_shortcode( $atts, $content = null ) {
	$class = '';
    extract( shortcode_atts( array(
        'menu_id' => '',
        'animation_type' => '',
        'max_menu_depth' => '',
        'icon_for_arrow' => '',
        'icon_for_arrow_sec' => '',
        'menu_box_id' => '',
        'mobile_type'=>'',
        'mobile_text'=> '',
        'icon_for_mobile_menu_hiden' => '',
        'icon_for_mobile_menu_shown' => '',
        'menu_cart_title' => '',
        'menu_cart_button' => '',
        'menu_cart_total' => '',
        'menu_cart_empty' => '',
        'menu_cart_item' => '',
        'menu_cart_items' => '',
        'class' => '',
    ) , $atts ) );



    $wrp_classes = apply_filters( 'kc-el-class', $atts );
    $output = '<div  class="ssc_menu '.implode( ' ', $wrp_classes ) . ' '.$class.'">';
    if ( isset($mobile_type) && true == $mobile_type ) {
        $output .= '<div class="slmm-respmenu "><button type="button" class="slm-open-menu-list" data-slmenu-target="#slmenu-' . $menu_box_id .  '">';
        if( !empty( $mobile_text ) ){
            $output .= '<span>' . esc_html( $mobile_text ) . '</span>';
        }
        $output .= '<i class="slmm-icon-menu-hiden' . ' ' . $icon_for_mobile_menu_hiden . '"></i><i class="slmm-icon-menu-shown' . ' '  . $icon_for_mobile_menu_shown . '" style="display: none;"></i></button></div>';
        $container_class = 'slmm-mobile-hide';
    } else {
        $container_class = '';
    }
    $output .= wp_nav_menu( array(
        'theme_location'  => '',
        'menu'            => $menu_id,
        'container'       => 'div',
        'container_class' => $container_class,
        'container_id'    => 'slmenu-' . $menu_box_id,
        'menu_class'      => 'slmm '.$animation_type,
        'menu_id'         => '',
        'echo'            => false,
        'fallback_cb'     => 'wp_page_menu',
        'before'          => '',
        'after'           => '',
        'link_before'     => '',
        'link_after'      => '',
        'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
        'depth'           => $max_menu_depth,
        'walker'          => new sl_walker_nav_menu( $atts ),
    ) );
    if ( sl_walker_nav_menu::$desc_styles != '' || sl_walker_nav_menu::$res_styles != '' ) {
//        wp_register_style('ssc-styles-menu', false);
//        wp_enqueue_style('ssc-styles-menu');
//	    wp_add_inline_style( 'ssc-styles-menu',
//		    sl_walker_nav_menu::$desc_styles . '@media (max-width: 999px){' . sl_walker_nav_menu::$res_styles . '}' );
//	    sl_walker_nav_menu::$desc_styles = sl_walker_nav_menu::$res_styles = '';

	    add_action(
		    'wp_enqueue_scripts',
		    function () {
			    wp_add_inline_style( 'ssc-styles',
				    sl_walker_nav_menu::$desc_styles . '@media (max-width: 999px){' . sl_walker_nav_menu::$res_styles . '}' );
			    sl_walker_nav_menu::$desc_styles = sl_walker_nav_menu::$res_styles = '';
		    },
            13000
	    );
    }
    $output .= '</div>';
    return $output;

}
add_shortcode( 'sl_menu', 'sl_menu_shortcode' );

add_filter( 'wp_edit_nav_menu_walker', 'sl_replace_backend_walker', 3000 );

/** Swith To SecretLab Walker Axtion **/
add_action( 'wp_ajax_sl_switch_menu_walker' , 'sl_switch_menu_walker' );


function sl_replace_backend_walker( $name )
{
    return 'sl_backend_walker';
}


/**
 * Very Important .
 * Replace The WP add menu item by AJAX
 * This Will be remove when they add an action in the future
 *
 */
function sl_switch_menu_walker() {
    if ( ! current_user_can( 'edit_theme_options' ) )
        die('-1');

    check_ajax_referer( 'add-menu_item', 'menu-settings-column-nonce' );

    require_once ABSPATH . 'wp-admin/includes/nav-menu.php';

    $item_ids = wp_save_nav_menu_items( 0, $_POST['menu-item'] );
    if ( is_wp_error( $item_ids ) )
        die('-1');

    foreach ( ( array ) $item_ids as $menu_item_id ) {
        $menu_obj = get_post( $menu_item_id );
        if ( !empty( $menu_obj->ID ) ) {
            $menu_obj = wp_setup_nav_menu_item( $menu_obj );
            $menu_obj->label = $menu_obj->title; // don't show "(pending)" in ajax-added items
            $menu_items[] = $menu_obj;
        }
    }

    if ( ! empty( $menu_items ) ) {
        $args = array(
            'after' => '',
            'before' => '',
            'link_after' => '',
            'link_before' => '',
            'walker' => new sl_backend_walker,
        );
        echo walk_nav_menu_tree( $menu_items, 0, ( object ) $args );
    }

    die('end');
}

if( !class_exists( 'sl_backend_walker' ) ){

    /**
     * @package CTFramework
     * @since 1.0
     * @uses Walker_Nav_Menu
     */
    class sl_backend_walker extends Walker_Nav_Menu {

        protected $sl_menu_type;
        protected $sl_menu_parent_and_child_id = 0;
        public $menu_key                       = '_menu-item-seclab';


        function __construct(){
            $this->sl_all_categories = self::all_cats_by_select( 'sl_all_cats_tax_types', 'sl_all_cats_tax_types' , '', 0, true );
        }

        static function all_cats_by_select( $id = '', $class = '', $name = '', $selected_cat = 0 , $return = false ) {
            // get All taxonomies
            $new_taxonomies = get_taxonomies( '' , 'names' );
            $new_post_types = get_post_types( '' , 'names' );
            $new_taxonomies = array_merge( $new_taxonomies,$new_post_types );

            // Taxonomies not needed
            $del_array = array(
                'post_tag',
                'nav_menu',
                'link_category',
                'post_format',
                'page',
                'attachment',
                'revision',
                'nav_menu_item'
            );

            foreach ( $del_array as $del )
            {
                foreach ( $new_taxonomies as $taxy )
                {
                    if( $del == $taxy )
                    {
                        unset($new_taxonomies[$taxy]);
                    }
                }
            }

            // Get Categories by taxonomies
            $html  = '<select id="'.$id.'" class="'.$class.'" name="'.$name.'" >';
            $html .= '<option  value="0" data-category_id="0" selected="selected" >Choose a Category</option>';
            foreach ( $new_taxonomies as $taxy )
            {
                $html .= '<optgroup label="'.$taxy.'">';

                $selected = $selected_cat == $taxy ? ' selected="selected" ' : '';
                $html .= '<option value="'.$taxy.'" data-taxonomy="'.$taxy.'" data-category_id="none" data-category_name="none" data-category_url="none" '.$selected.' >'.$taxy.'</option>';

                $args = array(
                    'hide_empty'    => 0,
                    'hierarchical'  => 1,
                    'echo'          => 0,
                    'taxonomy'      => $taxy,
                    'title_li'      => $taxy,
                    'style'         => 'none',
                    'walker'        => new SL_all_cats_as_select( $selected_cat )
                );

                $html .= wp_list_categories($args);
                $html .= '</optgroup>';

            }
            $html .= '</select>';

            if( $return )
                return $html;
            else
                echo $html;
        }


        /**
         * @see Walker_Nav_Menu::start_lvl()
         * @since 3.0.0
         *
         * @param string $output Passed by reference.
         * @param int $depth Depth of page.
         */
        function start_lvl( &$output, $depth = 0, $args = array() ){}

        /**
         * @see Walker_Nav_Menu::end_lvl()
         * @since 3.0.0
         *
         * @param string $output Passed by reference.
         * @param int $depth Depth of page.
         */
        function end_lvl( &$output, $depth = 0, $args = array() ) {}

        /**
         * @see Walker::start_el()
         * @since 3.0.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $item Menu item data object.
         * @param int $depth Depth of menu item. Used for padding.
         * @param int $current_page Menu item ID.
         * @param object $args
         */
        function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

            global $_wp_nav_menu_max_depth;
            $_wp_nav_menu_max_depth = $depth > $_wp_nav_menu_max_depth ? $depth : $_wp_nav_menu_max_depth;

            ob_start();
            $item_id    = esc_attr( $item->ID );

            $removed_args = array(
                'action',
                'customlink-tab',
                'edit-menu-item',
                'menu-item',
                'page-tab',
                '_wpnonce',
            );

            $original_title = '';
            if ( 'taxonomy' == $item->type ) {
                $original_title = get_term_field( 'name', $item->object_id, $item->object, 'raw' );
            } elseif ( 'post_type' == $item->type ) {
                $original_object = get_post( $item->object_id );
                $original_title = $original_object->post_title;
            }

            $classes = array(
                'menu-item menu-item-depth-' . $depth,
                'menu-item-' . esc_attr( $item->object ),
                'menu-item-edit-' . ( ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? 'active' : 'inactive' ),
            );

            $title      = $item->title;

            if ( isset( $item->post_status ) && 'draft' == $item->post_status ) {
                $classes[] = 'pending';
                /* translators: %s: title of menu item in draft status */
                $title = sprintf( __('%s (Pending)','ssc' ), $item->title );
            }

            $title = empty( $item->label ) ? $title : $item->label;

            if( $depth == 0 )
            {
                $this->sl_menu_parent_and_child_id = $this->sl_menu_parent_and_child_id + 1;
            }

            $depth_class = "sl_menu_item sl_menu_parent_and_child_id_" . $this->sl_menu_parent_and_child_id . " sl_menu_item_" . $this->sl_menu_type . " ";

            $item_meta = get_post_meta( $item->ID );

            if ( isset($item_meta[$this->menu_key.'-menu_type'] ) ) {
                $menu_type  = ( $item_meta[$this->menu_key.'-menu_type'][0] == '' ) ? "dropdown" : $item_meta[$this->menu_key.'-menu_type'][0];
            }
            else {
                $menu_type = 'dropdown';
            }

            ?>

        <li  id="menu-item-<?php echo $item_id; ?>" class="<?php echo $depth_class; echo implode(' ', $classes ); ?>">

            <dl class="menu-item-bar">
                <dt class="menu-item-handle" style="position:relative;" >
                    <span class="item-title"><?php echo esc_html( $title ); ?></span>
                    <span class="item-controls">
                            <span class="item-type item-type-default"><?php echo "( ".esc_html( $menu_type )." )"; ?></span>
                            <a class="item-edit" id="edit-<?php echo $item_id; ?>" title="<?php _e( 'Edit Menu Item', 'ssc' ); ?>" href="<?php
                            echo ( isset( $_GET['edit-menu-item'] ) && $item_id == $_GET['edit-menu-item'] ) ? admin_url( 'nav-menus.php' ) : add_query_arg( 'edit-menu-item', $item_id, remove_query_arg( $removed_args, admin_url( 'nav-menus.php#menu-item-settings-' . $item_id ) ) );
                            ?>"><?php _e( 'Edit Menu Item', 'ssc' ); ?></a>
                        </span>
                </dt>
            </dl>

            <div class="menu-item-settings" id="menu-item-settings-<?php echo $item_id; ?>">
                <?php if( 'custom' == $item->type ) : ?>
                    <p class="field-url description description-wide">
                        <label for="edit-menu-item-url-<?php echo $item_id; ?>">
                            <?php _e( 'URL' , 'ssc' ); ?>
                            <input type="text" id="edit-menu-item-url-<?php echo $item_id; ?>" class="widefat code edit-menu-item-url" name="menu-item-url[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->url ); ?>" />
                        </label>
                    </p>
                <?php endif; ?>
                <p class="description description-thin description-label avia_label_desc_on_active">
                    <label for="edit-menu-item-title-<?php echo $item_id; ?>">
                        <span class='avia_default_label'><?php _e( 'Navigation Label', 'ssc' ); ?></span>
                        <input type="text" id="edit-menu-item-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-title" name="menu-item-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->title ); ?>" />
                    </label>
                </p>
                <p class="description description-thin description-title">
                    <label for="edit-menu-item-attr-title-<?php echo $item_id; ?>">
                        <?php _e( 'Title Attribute', 'ssc' ); ?>
                        <input type="text" id="edit-menu-item-attr-title-<?php echo $item_id; ?>" class="widefat edit-menu-item-attr-title" name="menu-item-attr-title[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->post_excerpt ); ?>" />
                    </label>
                </p>
                <p class="field-link-target description description-thin">
                    <label for="edit-menu-item-target-<?php echo $item_id; ?>">
                        <?php _e( 'link Target', 'ssc' ); ?>
                        <select id="edit-menu-item-target-<?php echo $item_id; ?>" class="widefat edit-menu-item-target" name="menu-item-target[<?php echo $item_id; ?>]">
                            <option value="" <?php selected( $item->target, ''); ?>><?php _e( 'Same window or tab', 'ssc' ); ?></option>
                            <option value="_blank" <?php selected( $item->target, '_blank'); ?>><?php _e( 'New window or tab', 'ssc' ); ?></option>
                        </select>
                    </label>
                </p>
                <p class="field-css-classes description description-thin">
                    <label for="edit-menu-item-classes-<?php echo $item_id; ?>">
                        <?php _e( 'CSS Classes (optional)', 'ssc' ); ?>
                        <input type="text" id="edit-menu-item-classes-<?php echo $item_id; ?>" class="widefat code edit-menu-item-classes" name="menu-item-classes[<?php echo $item_id; ?>]" value="<?php echo esc_attr( implode(' ', $item->classes ) ); ?>" />
                    </label>
                </p>
                <p class="field-xfn description description-thin">
                    <label for="edit-menu-item-xfn-<?php echo $item_id; ?>">
                        <?php _e( 'link Relationship (XFN)' , 'ssc' ); ?>
                        <input type="text" id="edit-menu-item-xfn-<?php echo $item_id; ?>" class="widefat code edit-menu-item-xfn" name="menu-item-xfn[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->xfn ); ?>" />
                    </label>
                </p>
                <p class="field-description description description-wide">
                    <label for="edit-menu-item-description-<?php echo $item_id; ?>">
                        <?php _e( 'Description' , 'ssc' ); ?>
                        <textarea id="edit-menu-item-description-<?php echo $item_id; ?>" class="widefat edit-menu-item-description" rows="3" cols="20" name="menu-item-description[<?php echo $item_id; ?>]"><?php echo esc_html( $item->post_content ); ?></textarea>
                    </label>
                </p>

                <!-- *************** SecretLab menu Options *************** -->

                <div class="sl-clearfix"></div>

                <!-- *************** new item *************** -->
                <div class="admin-sl-box admin-sl-box_menu_type" >

                    <?php
                    // Menu Type
                    $title  = esc_html__( 'Choose the menu type' , 'ssc' );
                    $key    = "menu-item-seclab-menu_type";
                    ?>

                    <div class="admin-sl-box_header">
                        <span><?php echo $title; ?> :</span>
                        <a class="dashicons dashicons-arrow-down-alt2" ></a>
                    </div>


                    <div class="admin-sl-box_container">

                        <!-- Select Menu Type -->
                        <div class="admin_sl_box_menu_item_types">

                            <label>
                                <input type="radio" value="dropdown" class="sl_menu_type <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" <?php if($menu_type=="dropdown") echo "checked"; ?> /> &nbsp;&nbsp; <?php _e('Use as DropDown','ssc'); ?>
                            </label>

                            <label>
                                <input type="radio" value="mega_menu" class="sl_menu_type <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" <?php if($menu_type=="mega_menu") echo "checked"; ?> /> &nbsp;&nbsp; <?php _e('Use as Mega Menu','ssc'); ?>
                            </label>

                            <label>
                                <input type="radio" value="search" class="sl_menu_type <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" <?php if($menu_type=="search") echo "checked"; ?> /> &nbsp;&nbsp; <?php _e('Use as Search Form','ssc'); ?>
                            </label>

                            <label>
                                <input type="radio" value="woocommerce_cart" class="sl_menu_type <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" <?php if($menu_type=="woocommerce_cart") echo "checked"; ?> /> &nbsp;&nbsp; <?php _e('Use as Woocommerce Cart','ssc'); ?>
                            </label>

                        </div>
                        <div class="sl-clearfix"></div>


                        <!-- Menu Type : woocommerce_cart -->
                        <div <?php if( 'woocommerce_cart' != $menu_type) echo "style='display:none;'"; ?> class="admin-sl-box_option_inside sl_box_type admin-sl-box_option_inside_woocommerce_cart">
                        </div>


                        <!-- Menu Type : DropDown -->
                        <div <?php if( 'dropdown' != $menu_type) echo "style='display:none;'"; ?> class="admin-sl-box_option_inside sl_box_type admin-sl-box_option_inside_dropdown">

                            <?php
                            // Width
                            $title  = esc_html__( 'Submenu Width' , 'ssc' );
                            $key    = 'menu-item-seclab-dropdown_width';
                            if ( isset( $item_meta[$this->menu_key.'-dropdown_width'] ) && !empty( $item_meta[$this->menu_key.'-dropdown_width'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-dropdown_width'][0];
                            }
                            else {
                                $value = '';
                            }
                            ?>

                            <span class="fl" ><?php echo $title; ?></span>
                            <input maxlength="7" type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class="fr <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />

                            <?php
                            // Open Sub Position
                            $title  = esc_html__( 'Open Submenu To' , 'ssc' );
                            $key    = "menu-item-seclab-dropdown_open_pos";
                            if ( isset( $item_meta[$this->menu_key.'-dropdown_open_pos'] )  && !empty( $item_meta[$this->menu_key.'-dropdown_open_pos'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-dropdown_open_pos'][0];
                            }
                            else {
                                $value = 'right';
                            }
                            ?>
                            <div class="sl-clearfix"></div>
                            <span class="fl" ><?php echo $title . ':'; ?></span>
                            <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                <option value="right" <?php if( 'right' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'right' , 'ssc' ); ?></option>
                                <option value="left" <?php if( 'left' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'left' , 'ssc' ); ?></option>
                            </select>
                            <div class="sl-clearfix"></div>
                        </div>


                        <!-- Menu Type : Search -->
                        <div <?php if( 'search' != $menu_type) echo "style='display:none;'"; ?> class="admin-sl-box_option_inside sl_box_type admin-sl-box_option_inside_search">

                            <?php
                            // Menu Type
                            $title  = esc_html__( 'Search Text' , 'ssc' );
                            $key    = "menu-item-seclab-search_text";
                            if ( isset( $item_meta[$this->menu_key.'-search_text'] ) && !empty( $item_meta[$this->menu_key.'-search_text'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-search_text'][0];
                            }
                            else {
                                $value = 'Search...';
                            }
                            ?>

                            <span class="fl" ><?php echo $title; ?></span>

                            <input type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class="fr <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />

                            <div class="sl-clearfix"></div>

                        </div>


                        <!-- Menu Type : mega_menu -->
                        <div <?php if( 'mega_menu' != $menu_type) echo "style='display:none;'"; ?> class="admin-sl-box_option_inside sl_box_type admin-sl-box_option_inside_mega_menu">

                            <?php
                            // FullWidth
                            $title  = esc_html__( 'FullWidth' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_fullwidth";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_fullwidth'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_fullwidth'][0] ) ) {
                                $value = $item_meta[$this->menu_key.'-mega_menu_fullwidth'][0];
                            }
                            else {
                                $value = '';
                            }

                            $FullWidth_hide = '';
                            $FullWidth      = '';
                            if( $value == '' )
                            {
                                $value          = "off";
                                $FullWidth      = "off";
                                $FullWidth_hide = 'style="display:block;"';
                            }
                            else if ( $value == "off" )
                            {
                                $value          = "off";
                                $FullWidth      = "off";
                                $FullWidth_hide = 'style="display:block;"';
                            }
                            else if( $value == "on" )
                            {
                                $value          = "on";
                                $FullWidth      = "on";
                                $FullWidth_hide = 'style="display:none;"';
                            }
                            ?>

                            <span class="fl" ><?php echo $title; ?></span>
                            <div class="fr">
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                    <option value="off" <?php if( 'off' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'off' , 'ssc' ); ?></option>
                                    <option value="on" <?php if( 'on' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'on' , 'ssc' ); ?></option>
                                </select>
                            </div>

                            <div class="sl-clearfix"></div>

                            <?php
                            // Container Width
                            $title  = esc_html__( 'Container Width' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_width";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_width'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_width'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_width'][0];
                            }
                            else {
                                $value = '500px';
                            }
                            ?>

                            <span class="admin_sl_fullwidth_div" <?php echo $FullWidth_hide; ?> ><?php echo $title; ?></span>
                            <div class="admin_sl_fullwidth_div" <?php echo $FullWidth_hide; ?> >
                                <input type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />
                                <div class="sl-clearfix"></div>
                            </div>


                            <?php
                            // Align
                            $title  = esc_html__( 'Align' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_align";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_align'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_align'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_align'][0];
                            }
                            else {
                                $value = 'right';
                            }
                            ?>

                            <span class="admin_sl_fullwidth_div" <?php echo $FullWidth_hide; ?> ><?php echo $title; ?></span>
                            <div class="admin_sl_fullwidth_div" <?php echo $FullWidth_hide; ?> >
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                    <option value="right" <?php if( 'right' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'right' , 'ssc' ); ?></option>
                                    <option value="center" <?php if( 'center' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'center' , 'ssc' ); ?></option>
                                    <option value="left" <?php if( 'left' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'left' , 'ssc' ); ?></option>
                                </select>
                                <div class="sl-clearfix"></div>
                            </div>


                            <?php
                            // Container Width
                            $title  = esc_html__( 'Column Width' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_column_width";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_column_width'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_column_width'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_column_width'][0];
                            }
                            else {
                                $value = '50%';
                            }
                            ?>

                            <span ><?php echo $title; ?></span>
                            <div >
                                <input type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />
                            </div>
                            <div class="sl-clearfix"></div>

                            <?php
                            // Background Color
                            $title  = esc_html__( 'Background Color' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_bg_color";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_color'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_color'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_bg_color'][0];
                            }
                            else {
                                $value = '';
                            }
                            echo $title; ?>

                            <div>
                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />
                            </div>

                            <div class="sl-clearfix"></div>

                            <?php
                            // Background Image
                            $title  = esc_html__( 'Background Image' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_bg_image";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_image'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_image'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_bg_image'][0];
                            }
                            else {
                                $value = '';
                            }

                            echo $title; ?>
                            <div>
                                <input type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class="admin_sl_upload_input <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />

                                <button class="admin_sl_upload button-primary fr">Upload</button>
                            </div>

                            <div class="sl-clearfix"></div>

                            <?php
                            // Background Repeat
                            $title  = esc_html__( 'Background Repeat' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_bg_repeat";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_repeat'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_repeat'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_bg_repeat'][0];
                            }
                            else {
                                $value = 'no-repeat';
                            }
                            ?>

                            <span><?php echo $title; ?></span>
                            <div>
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                    <option value="no-repeat" <?php if( 'no-repeat' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'No Repeat' , 'ssc' ); ?></option>
                                    <option value="repeat" <?php if( 'repeat' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Repeat All' , 'ssc' ); ?></option>
                                    <option value="repeat-x" <?php if( 'repeat-x' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Repeat Horizontally' , 'ssc' ); ?></option>
                                    <option value="repeat-y" <?php if( 'repeat-y' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Repeat Vertically' , 'ssc' ); ?></option>
                                    <option value="inherit" <?php if( 'inherit' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Inherit' , 'ssc' ); ?></option>
                                </select>
                            </div>

                            <div class="sl-clearfix"></div>

                            <?php
                            // Background Size
                            $title  = esc_html__( 'Background Size' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_bg_size";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_size'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_size'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_bg_size'][0];
                            }
                            else {
                                $value = 'auto';
                            }
                            ?>

                            <span><?php echo $title; ?></span>
                            <div>
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                    <option value="auto" <?php if( 'inherit' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Auto' , 'ssc' ); ?></option>
                                    <option value="cover" <?php if( 'cover' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Cover' , 'ssc' ); ?></option>
                                    <option value="contain" <?php if( 'contain' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Contain' , 'ssc' ); ?></option>
                                    <option value="contain" <?php if( '100% 100%' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( '100% 100%' , 'ssc' ); ?></option>
                                </select>
                            </div>

                            <div class="sl-clearfix"></div>

                            <?php
                            // Background Position
                            $title  = esc_html__( 'Background Position' , 'ssc' );
                            $key    = "menu-item-seclab-mega_menu_bg_position";
                            if ( isset( $item_meta[$this->menu_key.'-mega_menu_bg_position'] ) && !empty( $item_meta[$this->menu_key.'-mega_menu_bg_position'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-mega_menu_bg_position'][0];
                            }
                            else {
                                $value = 'center center';
                            }
                            ?>

                            <span><?php echo $title; ?></span>
                            <div>
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                    <option vale="left top" <?php if( 'left top' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Left Top' , 'ssc' ); ?></option>
                                    <option value="left center" <?php if( 'left center' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Left Center' , 'ssc' ); ?></option>
                                    <option value="left bottom" <?php if( 'left bottom' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Left Bottom' , 'ssc' ); ?></option>
                                    <option value="center top" <?php if( 'center top' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Center Top' , 'ssc' ); ?></option>
                                    <option value="center center" <?php if( 'center center' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Center Center' , 'ssc' ); ?></option>
                                    <option value="center bottom" <?php if( 'center bottom' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Center Bottom' , 'ssc' ); ?></option>
                                    <option value="right top" <?php if( 'right top' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Right Top' , 'ssc' ); ?></option>
                                    <option value="right center" <?php if( 'right center' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Right Center' , 'ssc' ); ?></option>
                                    <option value="right bottom" <?php if( 'right bottom' == $value ) echo 'selected="selected"'; ?> ><?php esc_html_e( 'Right Bottom' , 'ssc' ); ?></option>
                                </select>
                            </div>

                            <div class="sl-clearfix"></div>

                        </div>
                    </div>
                </div>
                <!-- *************** end item *************** -->
                <div class="admin-sl-box admin-sl-box-menu-item-settings">

                    <?php
                    // Menu Type
                    $title  = esc_html__( 'Link & Icon Settings' , 'ssc' );
                    ?>

                    <div class="admin-sl-box_header">
                        <span><?php echo $title; ?> :</span>
                        <a class="dashicons dashicons-arrow-down-alt2" ></a>
                    </div>

                    <div class="admin-sl-box_container">
                        <div id="menu-item-sl-link-logged-in" >
                            <?php
                            // User Logged In / Out
                            $title  = esc_html__( 'Show link when user' , 'ssc' );
                            $key    = "menu-item-seclab-link_user_logged";
                            if ( isset( $item_meta[$this->menu_key.'-link_user_logged'] ) && !empty( $item_meta[$this->menu_key.'-link_user_logged'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-link_user_logged'][0];
                            }
                            else {
                                $value = 'both';
                            }
                            ?>

                            <?php echo $title; ?>
                            <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                <option value="both" <?php if( 'both' == $value ) echo 'selected="selected"'; ?> ><?php _e( 'Both Logged in/out', 'ssc' ); ?></option>
                                <option value="logged_in" <?php if( 'logged_in' == $value ) echo 'selected="selected"'; ?> ><?php _e( 'Logged in', 'ssc' ); ?></option>
                                <option value="logged_out" <?php if( 'logged_out' == $value ) echo 'selected="selected"'; ?> ><?php _e( 'Logged out', 'ssc' ); ?></option>
                            </select>
                        </div>
                        <div class="sl-clearfix"></div>

                        <div id="menu-item-sl-link-icon-only">
                            <?php
                            // Use icon only
                            $title  = esc_html__( 'Show link as' , 'ssc' );
                            $key    = "menu-item-seclab-link_icon_only";
                            if ( isset( $item_meta[$this->menu_key.'-link_icon_only'] ) && !empty( $item_meta[$this->menu_key.'-link_icon_only'][0] ) ) {
                                $link_type  = $item_meta[$this->menu_key.'-link_icon_only'][0];
                            }
                            else {
                                $link_type = 'text_and_icon';
                            }
                            ?>

                            <?php echo $title;?>

                            <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                <option value="text_and_icon" <?php if( 'text_and_icon' == $link_type ) echo 'selected="selected"'; ?> ><?php _e( 'Text with Icon', 'ssc' ); ?></option>
                                <?php if( class_exists( 'SL_Icon_Manager' ) ){ ?>
                                    <option value="only_icon" <?php if( 'only_icon' == $link_type ) echo 'selected="selected"'; ?> ><?php _e( 'Only Icon', 'ssc' ); ?></option>
                                <?php } ?>
                                <option value="none" <?php if( 'none' == $link_type ) echo 'selected="selected"'; ?> ><?php _e( 'None', 'ssc' ); ?></option>
                            </select>

                        </div>
                        <div class="sl-clearfix"></div>
                        <?php if( class_exists( 'SL_Icon_Manager' ) ){ ?>
                        <div id="menu-item-sl-position-container" <?php if( 'none' == $link_type ) echo 'style="display:none;"'; ?>>
                            <?php
                            // Position
                            $title  = esc_html__( 'Icon Position' , 'ssc' );
                            $key    = "menu-item-seclab-link_icon_position";
                            if ( isset( $item_meta[$this->menu_key.'-link_icon_position'] ) && !empty( $item_meta[$this->menu_key.'-link_icon_position'][0] ) ) {
                                $icon_position  = $item_meta[$this->menu_key.'-link_icon_position'][0];
                            }
                            else {
                                $icon_position = 'left';
                            }
                            ?>

                            <?php echo $title; ?>
                            <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" >
                                <option value="left" <?php if( 'left' == $icon_position ) echo 'selected="selected"'; ?> ><?php _e( 'Before Text', 'ssc' ); ?></option>
                                <option value="right" <?php if( 'right' == $icon_position ) echo 'selected="selected"'; ?> ><?php _e( 'After Text', 'ssc' ); ?></option>
                            </select>
                        </div>
                        <div class="sl-clearfix"></div>
                        <?php } ?>

                        <?php
                        // Upload or Icon Font
                        $title  = esc_html__( 'Choose Icon' , 'ssc' );
                        $key    = "menu-item-seclab-link_icon_type";
                        if ( isset( $item_meta[$this->menu_key.'-link_icon_type'] ) && !empty( $item_meta[$this->menu_key.'-link_icon_type'][0] ) ) {
                            $icon_type  = $item_meta[$this->menu_key.'-link_icon_type'][0];
                        } else {
                            $icon_type = 'icon_font';
                        }

                        ?>
                        <div id="<?php echo $key; ?>" <?php if( 'none' == $link_type ) echo 'style="display:none;"'; ?>>
                            <label for="edit-<?php echo $key.'-'.$item_id; ?>" >

                                <?php echo $title; ?>

                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>"  >
                                    <?php if( class_exists( 'SL_Icon_Manager' ) ){ ?>
                                    <option value="icon_font" <?php if( 'icon_font' == $icon_type ) echo 'selected="selected"' ?> ><?php _e( 'Icon font', 'ssc' ); ?></option>
                                    <?php } ?>
                                    <option value="upload" <?php if( 'upload' == $icon_type ) echo 'selected="selected"' ?> ><?php _e( 'Upload new icon', 'ssc' ); ?></option>
                                </select>

                                <div class="sl-clearfix"></div>

                            </label>
                        </div>
                        <?php if ( ! class_exists( 'SL_Icon_Manager' ) ) {
                            $icon_type = 'upload';
                        } ?>
                        <div <?php if( $icon_type != 'upload' ) echo 'style="display:none;"' ; ?> class="admin-sl-box_option_inside admin-sl-box_option_inside_icon_upload">

                            <?php
                            // Use icon only
                            $title  = esc_html__( 'Icon' , 'ssc' );
                            $key    = "menu-item-seclab-link_icon_image";
                            if ( isset( $item_meta[$this->menu_key.'-link_icon_image'] ) && !empty( $item_meta[$this->menu_key.'-link_icon_image'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-link_icon_image'][0];
                            }
                            else {
                                $value = '';
                            }
                            $uploaded_icon = $value;
                            ?>
                            <?php echo $title; ?>
                            <div>
                                <input type="text" value="<?php echo $value; ?>" id="edit-<?php echo $key.'-'.$item_id; ?>" class="admin_sl_upload_input <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />

                                <button class="admin_sl_upload button-primary fr">Upload</button>
                            </div>

                            <div class="sl-clearfix"></div>

                        </div>


                        <?php if( class_exists( 'SL_Icon_Manager' ) ){ ?>
                        <div <?php if( $icon_type != 'icon_font' || 'none' == $link_type ) echo 'style="display:none;"' ; ?> class="admin-sl-box_option_inside admin-sl-box_option_inside_icon_font">

                            <?php
                            // Use icon only
                            $title  = esc_html__( 'Icon' , 'ssc' );
                            $key    = "menu-item-seclab-link_icon";
                            if ( isset( $item_meta[$this->menu_key.'-link_icon'] ) && !empty( $item_meta[$this->menu_key.'-link_icon'][0] ) ) {
                                $value  = $item_meta[$this->menu_key.'-link_icon'][0];
                            }
                            else {
                                $value = '';
                            }
                            $value_icon = $value;
                            ?>
                            <?php echo $title; ?>

                            <button id="<?php echo $item->ID; ?>" class="admin_sl_select_icon_button button-primary fr"><?php _e( 'Select' , 'ssc' ); ?></button>
                            <button id="<?php echo $item->ID; ?>" class="admin_sl_delete_icon_button button-primary fr"><?php _e( 'Delete' , 'ssc' ); ?></button>
                            <input type="hidden" value="<?php echo $value_icon; ?>" id="edit-<?php echo $key . '-' . $item_id; ?>" class="fr admin_sl_icon_font_hidden-<?php echo $item->ID . ' ' . $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>" />
                            <div class="sl-clearfix"></div>

                            <div class="sl_admin_icon_fonts_container">
                                <?php
                                $upload_dir = wp_get_upload_dir();
                                $dir_name = 'sl_icons';
                                $icon_folders = scandir( $upload_dir['basedir'] . '/' . $dir_name );
                                if ( $icon_folders && count ( $icon_folders ) > 0 ) {
                                    foreach ( $icon_folders as $icon_folder ) {
                                        if ( is_file ( $upload_dir['basedir'] . '/' . $dir_name . '/' . $icon_folder . '/' . $icon_folder . '.css' ) && $icon_folder != '.' && $icon_folder != '..' ) {
                                            $icon_styles[$icon_folder]['dir'] = $upload_dir['basedir'] . '/' . $dir_name . '/' . $icon_folder . '/' . $icon_folder . '.css';
                                            $icon_styles[$icon_folder]['url'] = $upload_dir['baseurl'] . '/' . $dir_name . '/' . $icon_folder . '/' . $icon_folder . '.css';
                                        }
                                    }
                                }


                                if ( count ( $icon_styles ) > 0 ) {
                                    $out = '<div class="sl_icons_admin_box" >';
                                    $out .= '<a id="close-sl-icons-box">X</a>';
                                    $out .= '<div id="sl_admin_icons_search' . '-' . $item_id . '" class="col-xs-12 sl_admin_icons_search">' . esc_html__( 'Search by icon name', 'ssc' ) .': <input type="text" placeholder="Search"></div>';
                                    $out .= '<button class="sl_admin_icon_fonts_container_button admin_sl_add_icon_button meta_btn">Add</button>';
                                    $out .= '</div>';
                                }
                                else {
                                    $out = '
                                <div class="no_fonts">
                                    <p>' . esc_html__( 'No font icons uploaded. Upload some font icons to display here.', 'ssc' ) . '</p>
                                </div>';
                                }
                                echo $out;
                                ?>
                            </div>

                            <span class="admin_sl_icon_font_icon_box_preview admin_sl_icon_font_icon_box_preview-<?php echo $item->ID; ?>">
                                    <span style="font-size:20px; ?>;" aria-hidden="true" class="<?php echo $value_icon; ?>"></span>
                                </span>
                        </div>
                        <?php } else { ?>
                            <div><?php esc_html_e(  'For using "Icon Fonts" install "Marketing and SEO Booster" SecretLab plugin','ssc' ) ?></div>
                        <?php } ?>
                    </div>
                </div>
                <div class="admin-sl-box admin-sl-box-menu-item-design">

                    <?php
                    // Item settings
                    $title  = esc_html__( 'Design' , 'ssc' );
                    ?>

                    <div class="admin-sl-box_header">
                        <span><?php echo $title; ?> :</span>
                        <a class="dashicons dashicons-arrow-down-alt2" ></a>
                    </div>

                    <div class="admin-sl-box_container slmenu-tabs">
                        <ul>
                            <li><?php esc_attr_e( 'Desktop' , 'ssc' ); ?></li>
                            <li><?php esc_attr_e( 'Responsive' , 'ssc' ); ?></li>
                        </ul>
                        <div class="slmenu-tab-box">
                            <div class="slmenu-item-desc">
                                <?php
                                // Text Color
                                $title  = esc_html__( 'Text Color' , 'ssc' );
                                $key    = "menu-item-seclab-text_color";
                                if ( isset( $item_meta[$this->menu_key.'-text_color'] ) && !empty( $item_meta[$this->menu_key.'-text_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-text_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                                <div class="sl-clearfix"></div>

                                <?php
                                // Text Color Hover
                                $title  = esc_html__( 'Text Color on Hover' , 'ssc' );
                                $key    = "menu-item-seclab-text_hover_color";
                                if ( isset( $item_meta[$this->menu_key.'-text_hover_color'] ) && !empty( $item_meta[$this->menu_key.'-text_hover_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-text_hover_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                                <div class="sl-clearfix"></div>

                                <?php
                                // Container Width
                                $title  = esc_html__( 'Font Weight' , 'ssc' );
                                $key    = "menu-item-seclab-text_weight";
                                if ( isset( $item_meta[$this->menu_key.'-text_weight'] ) && !empty( $item_meta[$this->menu_key.'-text_weight'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-text_weight'][0];
                                }
                                else {
                                    $value = '';
                                }
                                ?>

                                <span ><?php echo $title; ?></span>
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>"  >
                                    <option value="" <?php if( '' == $value ) echo 'selected="selected"' ?> ><?php _e( 'Non Set', 'ssc' ); ?></option>
                                    <option value="100" <?php if( '100' == $value ) echo 'selected="selected"' ?> >100</option>
                                    <option value="200" <?php if( '200' == $value ) echo 'selected="selected"' ?> >200</option>
                                    <option value="300" <?php if( '300' == $value ) echo 'selected="selected"' ?> >300</option>
                                    <option value="400" <?php if( '400' == $value ) echo 'selected="selected"' ?> >400</option>
                                    <option value="500" <?php if( '500' == $value ) echo 'selected="selected"' ?> >500</option>
                                    <option value="600" <?php if( '600' == $value ) echo 'selected="selected"' ?> >600</option>
                                    <option value="700" <?php if( '700' == $value ) echo 'selected="selected"' ?> >700</option>
                                    <option value="800" <?php if( '800' == $value ) echo 'selected="selected"' ?> >800</option>
                                    <option value="900" <?php if( '900' == $value ) echo 'selected="selected"' ?> >900</option>
                                </select>
                                <div class="sl-clearfix"></div>

                                <?php
                                // Background Color
                                $title  = esc_html__( 'Background Color' , 'ssc' );
                                $key    = "menu-item-seclab-item_bg_color";
                                if ( isset( $item_meta[$this->menu_key.'-item_bg_color'] ) && !empty( $item_meta[$this->menu_key.'-item_bg_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-item_bg_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                            </div>
                            <div class="slmenu-item-resp">
                                <?php
                                // Text Color
                                $title  = esc_html__( 'Text Color' , 'ssc' );
                                $key    = "menu-item-seclab-resp_text_color";
                                if ( isset( $item_meta[$this->menu_key.'-resp_text_color'] ) && !empty( $item_meta[$this->menu_key.'-resp_text_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-resp_text_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                                <div class="sl-clearfix"></div>

                                <?php
                                // Text Color Hover
                                $title  = esc_html__( 'Text Color on Hover' , 'ssc' );
                                $key    = "menu-item-seclab-resp_text_hover_color";
                                if ( isset( $item_meta[$this->menu_key.'-resp_text_hover_color'] ) && !empty( $item_meta[$this->menu_key.'-resp_text_hover_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-resp_text_hover_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                                <div class="sl-clearfix"></div>

                                <?php
                                // Container Width
                                $title  = esc_html__( 'Font Weight' , 'ssc' );
                                $key    = "menu-item-seclab-resp_text_weight";
                                if ( isset( $item_meta[$this->menu_key.'-resp_text_weight'] ) && !empty( $item_meta[$this->menu_key.'-resp_text_weight'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-resp_text_weight'][0];
                                }
                                else {
                                    $value = '';
                                }
                                ?>

                                <span ><?php echo $title; ?></span>
                                <select id="edit-<?php echo $key.'-'.$item_id; ?>" class=" <?php echo $key; ?>" name="<?php echo $key . "[". $item_id ."]";?>"  >
                                    <option value="" <?php if( '' == $value ) echo 'selected="selected"' ?> ><?php _e( 'Non Set', 'ssc' ); ?></option>
                                    <option value="100" <?php if( '100' == $value ) echo 'selected="selected"' ?> >100</option>
                                    <option value="200" <?php if( '200' == $value ) echo 'selected="selected"' ?> >200</option>
                                    <option value="300" <?php if( '300' == $value ) echo 'selected="selected"' ?> >300</option>
                                    <option value="400" <?php if( '400' == $value ) echo 'selected="selected"' ?> >400</option>
                                    <option value="500" <?php if( '500' == $value ) echo 'selected="selected"' ?> >500</option>
                                    <option value="600" <?php if( '600' == $value ) echo 'selected="selected"' ?> >600</option>
                                    <option value="700" <?php if( '700' == $value ) echo 'selected="selected"' ?> >700</option>
                                    <option value="800" <?php if( '800' == $value ) echo 'selected="selected"' ?> >800</option>
                                    <option value="900" <?php if( '900' == $value ) echo 'selected="selected"' ?> >900</option>
                                </select>
                                <div class="sl-clearfix"></div>

                                <?php
                                // Background Color
                                $title  = esc_html__( 'Background Color' , 'ssc' );
                                $key    = "menu-item-seclab-resp_item_bg_color";
                                if ( isset( $item_meta[$this->menu_key.'-resp_item_bg_color'] ) && !empty( $item_meta[$this->menu_key.'-resp_item_bg_color'][0] ) ) {
                                    $value  = $item_meta[$this->menu_key.'-resp_item_bg_color'][0];
                                }
                                else {
                                    $value = '';
                                }
                                echo '<span>' . $title . '</span>'; ?>

                                <input id="edit-<?php echo $key.'-'.$item_id; ?>" class="slnm-color-rgba wp-color-picker" name="<?php echo $key . "[". $item_id ."]";?>" value="<?php echo esc_attr($value); ?>" data-alpha="true" />

                            </div>
                        </div>
                    </div>
                </div>
                <!-- *************** end SecretLab menu Options *************** -->

                <div class="menu-item-actions description-wide submitbox">
                    <?php if( 'custom' != $item->type ) : ?>
                        <p class="link-to-original">
                            <?php printf( __( 'Original: %s','ssc' ), '<a href="' . esc_attr( $item->url ) . '">' . esc_html( $original_title ) . '</a>' ); ?>
                        </p>
                    <?php endif; ?>
                    <a class="item-delete submitdelete deletion" id="delete-<?php echo $item_id; ?>" href="<?php
                    echo wp_nonce_url(
                        add_query_arg(
                            array(
                                'action' => 'delete-menu-item',
                                'menu-item' => $item_id,
                            ),
                            remove_query_arg($removed_args, admin_url( 'nav-menus.php' ) )
                        ),
                        'delete-menu_item_' . $item_id
                    ); ?>"><?php _e( 'Remove', 'ssc' ); ?></a> <span class="meta-sep"> | </span> <a class="item-cancel submitcancel" id="cancel-<?php echo $item_id; ?>" href="<?php    echo add_query_arg( array('edit-menu-item' => $item_id, 'cancel' => time()), remove_query_arg( $removed_args, admin_url( 'nav-menus.php' ) ) );
                    ?>#menu-item-settings-<?php echo $item_id; ?>">Cancel</a>
                </div>

                <input class="menu-item-data-db-id" type="hidden" name="menu-item-db-id[<?php echo $item_id; ?>]" value="<?php echo $item_id; ?>" />
                <input class="menu-item-data-object-id" type="hidden" name="menu-item-object-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object_id ); ?>" />
                <input class="menu-item-data-object" type="hidden" name="menu-item-object[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->object ); ?>" />
                <input class="menu-item-data-parent-id" type="hidden" name="menu-item-parent-id[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_item_parent ); ?>" />
                <input class="menu-item-data-position" type="hidden" name="menu-item-position[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->menu_order ); ?>" />
                <input class="menu-item-data-type" type="hidden" name="menu-item-type[<?php echo $item_id; ?>]" value="<?php echo esc_attr( $item->type ); ?>" />
            </div><!-- .menu-item-settings-->
            <ul class="menu-item-transport"></ul>
            <?php
            $output .= ob_get_clean();
        }

        public function sl_get_font_info( $css_file ) {
            global $wp_filesystem;

            $css = $wp_filesystem->get_contents( $css_file );
            $preg_result = array();
            if ( $css ) {
                preg_match( '/\[class.?=.?\"([^\"]+)\"\]/', $css, $prefix );
                if ( $prefix && $prefix[1] ) {
                    $prefix = preg_replace('/\s/', '', $prefix[1]);
                    $result = preg_match_all( '/' . $prefix . '([^:]+):before\s?\{[^["\']+["\']([^["\']+)/', $css, $icons );
                    if ( $result && strpos( $icons[1][0], ']' ) ) { unset( $icons[0][0] ); unset( $icons[1][0] ); unset( $icons[2][0] ); }
                }
                else {
                    $prefix = 'fa fa-';
                    $result = preg_match_all( '/fa-([^:]+):before\s\{[^\"]+\"([^\"]+)/', $css, $icons );
                }
            }
            if ( count ( $result ) > 0 ) return array( 'prefix' => $prefix, 'icons' => $icons ); else return false;

        }

    }


}

function sl_backend_css_js( $hook ){

    if( 'nav-menus.php' == $hook ) {
        wp_enqueue_script( 'jquery' );
        wp_enqueue_script( 'wp-color-picker' );
        wp_enqueue_style( 'wp-color-picker' );
        wp_enqueue_script( 'wp-color-picker-alpha', plugin_dir_url(__FILE__) . 'js/wp-color-picker-alpha.js', array( 'wp-color-picker' ), false, true );
        wp_enqueue_script('sl_admin_menus_script', plugin_dir_url( __FILE__ ) . 'js/sl_menu_admin.js' , array( 'jquery', 'wp-color-picker-alpha' ) );
        $params = array(
            'nonce' => wp_create_nonce( 'sl_nonce' ),
            'loadimg' => get_admin_url() . 'images/loading.gif',
        );
        wp_localize_script( 'sl_admin_menus_script', 'seclab_params', $params );
    }
}

add_action( 'admin_enqueue_scripts' , 'sl_backend_css_js' );

function ajax_slSaveItemsData(){

    check_ajax_referer( 'sl_nonce', 'nonce' );

    $post_data = json_decode( stripslashes( $_POST['data'] ), true );

    foreach ( $post_data as $option ) {

        $id = explode( '[', $option['name'] );
        $name = '_'.$id[0];
        $id = str_replace( ']', '', $id[1] );

        update_post_meta( $id, $name, $option['value'] );
    }

    exit();
}
add_action( 'wp_ajax_slSaveItemsData','ajax_slSaveItemsData' );

if( !class_exists( 'SL_all_cats_as_select' ) ) {
    /**
     * Create HTML '<select>' of categories.
     *
     * @package WordPress
     * @since 2.1.0
     * @uses Walker
     */
    class SL_all_cats_as_select extends Walker_Category {

        public $selected_cat;

        function __construct( $selected_cat = 0 ) {

            $this->selected_cat = $selected_cat;
        }

        /**
         * @see Walker::$tree_type
         * @since 2.1.0
         * @var string
         */
        var $tree_type = 'category';
        /**
         * @see Walker::$db_fields
         * @since 2.1.0
         * @todo Decouple this
         * @var array
         */
        var $db_fields = array ('parent' => 'parent', 'id' => 'term_id');
        /**
         * @see Walker::start_lvl()
         * @since 2.1.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int $depth Depth of category. Used for tab indentation.
         * @param array $args Will only append content if style argument value is 'list'.
         */
        function start_lvl( &$output, $depth = 0, $args = array() ) {
        }
        /**
         * @see Walker::end_lvl()
         * @since 2.1.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param int $depth Depth of category. Used for tab indentation.
         * @param array $args Will only append content if style argument value is 'list'.
         */
        function end_lvl( &$output, $depth = 0, $args = array() ) {
        }
        /**
         * @see Walker::start_el()
         * @since 2.1.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $category Category data object.
         * @param int $depth Depth of category in reference to parents.
         * @param array $args
         */
        function start_el( &$output, $category, $depth = 0, $args = array(), $id = 0 ) {
            extract($args);

            // Category Name
            $cat_name = esc_attr( $category->name );
            $cat_name = apply_filters( 'list_cats', $cat_name, $category );

            // Prepare Select "<option>"
            $indent = '';
            if ( $category->category_parent != 0 )
            {
                $indent = '&nbsp;&nbsp;&nbsp;&nbsp;';
            }

            $wp_get_url = get_term_link( $category );
            $cat_url = '';
            if( !is_wp_error( $wp_get_url ) )
            {
                $cat_url = $wp_get_url;
            }

            $selected = $this->selected_cat == $category->cat_ID ? ' selected="selected" ' : '';
            $op  = '<option value="'.$category->cat_ID.'" data-taxonomy="'.$category->taxonomy.'" data-category_id="'.$category->cat_ID.'" data-category_name="'.$cat_name.'" data-category_url="' .$cat_url. '" '.$selected.' >';
            $op .= $indent.$cat_name . '</option>';

            // Output
            $output .= $op;
        }
        /**
         * @see Walker::end_el()
         * @since 2.1.0
         *
         * @param string $output Passed by reference. Used to append additional content.
         * @param object $page Not used.
         * @param int $depth Depth of category. Not used.
         * @param array $args Only uses 'list' for whether should append to output.
         */
        function end_el( &$output, $page, $depth = 0, $args = array() ) {
            $output .= '';
        }
    }// End Class
}