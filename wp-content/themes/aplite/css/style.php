<?php
    function aplite_dynamic_styles() {
        global $accesspresslite_options;
        $old_settings = get_option( 'accesspresslite_options', $accesspresslite_options );
    	$settings = wp_parse_args($old_settings, $accesspresslite_options);
        $tpl_color = isset( $settings['template_color'] ) ? $settings['template_color'] : '';
        
        $custom_css = "";
        
        if( $tpl_color ) {
            
            /** Background Color **/
            $custom_css .= "
                #masthead #top-header,
                .main-navigation .current-menu-parent > a,
                .main-navigation .current-menu-item > a,
                .main-navigation .current_page_item > a,
                .main-navigation .current_page_parent > a,
                .main-navigation li:hover > a,
                .bttn:after, .event-date-archive,
                .portofolio-layout .entry-title,
                #call-to-action, .event-thumbnail .event-date,
                #bottom-section, .featured-post .featured-overlay,
                #slider-banner .bx-wrapper .bx-pager.bx-default-pager a:after,
                .number404,
                .navigation .nav-links a:hover,
                .bttn:hover, button:hover, input[type=\"button\"]:hover,
                input[type=\"reset\"]:hover, input[type=\"submit\"]:hover,
                .cat-testimonial-list .entry-header{
                    background: {$tpl_color}; 
                }";
                
            /** Color **/
            $custom_css .= "
                #masthead .site-branding h1, a,
                .main-navigation ul ul li:hover > a,
                .main-navigation ul ul li.current-menu-item > a,
                .searchform .searchsubmit, .nav-links .nav-previous a:before,
                .nav-links .nav-next a:after, .featured-post.big-icon h2.has-icon .fa{
                    color: {$tpl_color}; 
                }";
                
            /** Border Color **/
            $custom_css .= "
                .main-navigation ul ul,
                .navigation .nav-links a, .bttn,
                button, input[type=\"button\"], input[type=\"reset\"], input[type=\"submit\"],
                .sidebar h3.widget-title,
                .testimonial-sidebar .testimonial-list,
                .searchform, .page-header,
                .cat-testimonial-list .cat-testimonial-excerpt{
                    border-color: {$tpl_color}; 
                }";
                
            /** trans Border 1 **/
            $custom_css .= "
                .sidebar h3.widget-title:after, .page-header:after{
                    border-color: transparent {$tpl_color} {$tpl_color} transparent;
                }";
                
            /** Trans Border 2 **/
            $custom_css .= "
                .testimonial-sidebar .testimonial-list:after{
                    border-color: {$tpl_color} transparent transparent;
                }";
                
            /** Box Shadow **/
            $custom_css .= "
                #slider-banner .bx-wrapper .bx-pager.bx-default-pager a{
                    box-shadow: 0 0 0 2px {$tpl_color} inset; 
                }";
        }
        
        wp_add_inline_style( 'accesspresslite-responsive', $custom_css );
        
    }
    add_action( 'init', 'aplite_remove_my_action');
    function aplite_remove_my_action() {
        remove_action( 'wp_enqueue_scripts', 'accesspress_lite_dynamic_styles' );
    }
    
    add_action( 'wp_enqueue_scripts', 'aplite_dynamic_styles', 100 );