<?php
/**
 * ReduxFramework Sample Config File
 * For full documentation, please visit: http://docs.reduxframework.com/
 */

if ( ! class_exists( 'Redux' ) ) {
    return;
}


// This is your option name where all the Redux data is stored.
$opt_name = "xlt_option";


/**
 * ---> SET ARGUMENTS
 * All the possible arguments for Redux.
 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
 * */

$theme = wp_get_theme(); // For use with some settings. Not necessary.

$args = array(
    // TYPICAL -> Change these values as you need/desire
    'opt_name'             => $opt_name,
    // This is where your data is stored in the database and also becomes your global variable name.
    'disable_tracking'     => true,
    //Turn off opt-in Tracking popup
    'display_name'         => $theme->get( 'Name' ),
    // Name that appears at the top of your panel
    'display_version'      => $theme->get( 'Version' ),
    // Version that appears at the top of your panel
    'menu_type'            => 'menu',
    //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
    'allow_sub_menu'       => true,
    // Show the sections below the admin menu item or not
    'menu_title'           => __( 'Theme Options', 'bloga' ),
    'page_title'           => __( 'Theme Options', 'bloga' ),
    // You will need to generate a Google API key to use this feature.
    // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
    'google_api_key'       => '',
    // Set it you want google fonts to update weekly. A google_api_key value is required.
    'google_update_weekly' => false,
    // Must be defined to add google fonts to the typography module
    'async_typography'     => true,
    // Use a asynchronous font on the front end or font string
    //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
    'admin_bar'            => false,
    // Show the panel pages on the admin bar
    'admin_bar_icon'       => 'dashicons-portfolio',
    // Choose an icon for the admin bar menu
    'admin_bar_priority'   => 50,
    // Choose an priority for the admin bar menu
    'global_variable'      => '',
    // Set a different name for your global variable other than the opt_name
    'dev_mode'             => false,
    // Show the time the page took to load, etc
    'update_notice'        => true,
    // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
    'customizer'           => true,
    // Enable basic customizer support
    //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
    //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

    // OPTIONAL -> Give you extra features
    'page_priority'        => null,
    // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
    'page_parent'          => 'themes.php',
    // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
    'page_permissions'     => 'manage_options',
    // Permissions needed to access the options panel.
    'menu_icon'            => '',
    // Specify a custom URL to an icon
    'last_tab'             => '',
    // Force your panel to always open to a specific tab (by id)
    'page_icon'            => 'icon-themes',
    // Icon displayed in the admin panel next to your menu_title
    'page_slug'            => '',
    // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
    'save_defaults'        => true,
    // On load save the defaults to DB before user clicks save or not
    'default_show'         => false,
    // If true, shows the default value next to each field that is not the default value.
    'default_mark'         => '',
    // What to print by the field's title if the value shown is default. Suggested: *
    'show_import_export'   => false,
    // Shows the Import/Export panel when not used as a field.

    // CAREFUL -> These options are for advanced use only
    'transient_time'       => 60 * MINUTE_IN_SECONDS,
    'output'               => true,
    // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
    'output_tag'           => true,
    // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
     'footer_credit'     => 'Copyright © 2015-2017 <a href="http://www.xltheme.com/" target="_blank">XLTHEME</a>. All Rights Reserved.',                   // Disable the footer credit of Redux. Please leave if you can help it.

    // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
    'database'             => '',
    // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
    'use_cdn'              => true,
    // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

    // HINTS
    'hints'                => array(
        'icon'          => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color'    => 'lightgray',
        'icon_size'     => 'normal',
        'tip_style'     => array(
            'color'   => 'red',
            'shadow'  => true,
            'rounded' => false,
            'style'   => '',
        ),
        'tip_position'  => array(
            'my' => 'top left',
            'at' => 'bottom right',
        ),
        'tip_effect'    => array(
            'show' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'mouseover',
            ),
            'hide' => array(
                'effect'   => 'slide',
                'duration' => '500',
                'event'    => 'click mouseleave',
            ),
        ),
    )
);

Redux::setArgs( $opt_name, $args );

/*
 * ---> END ARGUMENTS
 */



// -> START Basic Fields

Redux::setSection( $opt_name, array(
    'title' => __( 'General', 'bloga' ),
    'id'    => 'general_options',
    'icon'  => 'el el-adjust-alt',
    'subsection' => false,
    'fields'     => array(
        array(
            'id'       => 'xl_theme_style',
            'type'     => 'select',
            'title'    => __( 'Default Theme Style', 'bloga' ),
            'subtitle' => __( 'Select theme style from preset.', 'bloga' ),
            'options'  => array(
                'default' => 'Default',
                'blue' => 'Blue',
                'green' => 'Green',
                'orange' => 'Orange',
            ),
            'default'  => 'default'
        ),
        array(
            'id'       => 'xl_blog_style',
            'type'     => 'select',
            'title'    => __( 'Default Blog Style', 'bloga' ),
            'subtitle' => __( 'Select blog style from the list.', 'bloga' ),
            'options'  => array(
                'list' => 'List',
//                'grid' => 'Grid',
            ),
            'default'  => 'list'
        ),
        array(
            'id'       => 'xl_enable_preloader',
            'type'     => 'switch',
            'title'    => __( 'Enable Preloader?', 'bloga' ),
            'default'  => 0,
            'on'       => 'ON',
            'off'      => 'OFF',
        ),
        array(
            'id'       => 'xl_preloader_style',
            'type'     => 'select',
            'title'    => __( 'Preloader Style', 'bloga' ),
            'subtitle' => __( 'Select preloader style from the list.', 'bloga' ),
            'required' => array( 'xl_enable_preloader', "=", 1 ),
            'options'  => array(
                '1' => 'Style 1',
                '2' => 'Style 2',
                '3' => 'Style 3',
                '4' => 'Style 4',
                '5' => 'Style 5',
                '6' => 'Style 6',
                '7' => 'Style 7',
                '8' => 'Style 8',
                '9' => 'Style 9',
                '10' => 'Style 10',
                '11' => 'Style 11',
            ),
            'default'  => '1'
        ),
        array(
            'id'       => 'xl_preloader_bg_color',
            'type'     => 'color',
            'title'    => __( 'Preloader Background Color', 'bloga' ),
            'required' => array( 'xl_enable_preloader', "=", 1 ),
        ),
        array(
            'id'       => 'xl_preloader_color',
            'type'     => 'color',
            'title'    => __( 'Preloader Color', 'bloga' ),
            'required' => array( 'xl_enable_preloader', "=", 1 ),
        ),



        array(
            'id'       => 'xl_logo_on_off',
            'type'     => 'switch',
            'title'    => __( 'Logo Section', 'bloga' ),
            'subtitle' => __( 'Upload your logo', 'bloga' ),
            'default'  => 0,
            'on'       => 'ON',
            'off'      => 'OFF',
        ),
        
        array(
            'id'       => 'xl_logo',
            'type'     => 'media',
            'url'      => true,
            'indent'   => false,
            'required' => array( 'xl_logo_on_off', "=", 1 ),
            'compiler' => 'true',
            'title'    => __( 'Upload Logo', 'bloga' ),
            'subtitle'     => __( 'Select an image file for your logo.', 'bloga' ),
        ),

        array(
            'id' => 'xl_favicon',
            'type' => 'media',
            'title' => __('Favicon', 'bloga'),
            'default' => array("url" => get_template_directory_uri() . "/assets/images/favicon.png"),
            'preview' => true,
            "url" => true
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Header', 'bloga' ),
    'id'    => 'xl_header',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-website',
    'fields'     => array(
        array(
            'id'       => 'sticky_header',
            'type'     => 'switch',
            'title'    => __( 'Sticky Header', 'bloga' ),
            'subtitle' => __( 'If you want to keep your header always on top, Enable this option Yes', 'bloga' ),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
    ),
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Sidebars', 'bloga' ),
    'id'    => 'xl_sidebars',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-pause',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_sidebar',
            'type'     => 'switch',
            'title'    => __( 'Enable Sidebar', 'bloga' ),
            'subtitle' => __('If you want to display sidebar widget, enable it.', 'bloga'),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'sidebar_position',
            'type'     => 'image_select',
            'title'    => __('Sidebar Position', 'bloga'),
            'subtitle' => __('Select sidebar position', 'bloga'),
            'required' => array('xl_enable_sidebar', '=', '1'),
            'options'  => array(
                'sl'      => array(
                    'alt'   => 'Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                'sr'      => array(
                    'alt'   => 'Right',
                    'img'   => ReduxFramework::$_url.'assets/img/2cr.png'
                )
            ),
            'default' => 'sr'
        ),
        
    ),
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Typography', 'bloga' ),
    'id'    => 'xl_typography',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-font',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_typography',
            'type'     => 'switch',
            'title'    => __( 'Custom Typography', 'bloga' ),
            'subtitle' => __('Enable custom typography option?.', 'bloga'),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id' => 'xl_body_fonts',
            'type' => 'typography',
            'title' => __('Body Font', 'bloga'),
            'google'      => true,
            'color' => false,
            'word-spacing'=>true,
            'text-align'=>false,
            'update-weekly'=>false,
            'line-height'=>true,
            'subsets'=>true,
            'letter-spacing'=>true,
            'font-style'=>false,
            'font-backup' => false,
            'font-size'=>true,
            'font-weight'=>true,
            'output'      => array('body'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 14,
                'font-weight' => 400,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_heading_fonts',
            'type' => 'typography',
            'title' => __('Heading Font', 'bloga'),
            'google'      => true,
            'color' => false,
            'word-spacing'=>true,
            'text-align'=>false,
            'update-weekly'=>false,
            'line-height'=>true,
            'subsets'=>true,
            'letter-spacing'=>true,
            'font-style'=>false,
            'font-backup' => false,
            'font-size'=>false,
            'font-weight'=>true,
            'output'      => array('h1', 'h2', 'h3', 'h4', 'h5', 'h6'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Custom Style', 'bloga' ),
    'id'    => 'xl_custom_style',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-adjust',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_custom_style',
            'type'     => 'switch',
            'title'    => __( 'Custom Style', 'bloga' ),
            'subtitle' => __('Enable custom Style option?.', 'bloga'),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'header_area_bg',
            'type'     => 'background',
            'output'   => array( '.header-area' ),
            'title'    => __( 'Header Background', 'bloga' ),
            'subtitle' => __( 'Pick a header background color for the theme (default: #ffffff).', 'bloga' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'content_area_bg',
            'type'     => 'background',
            'output'   => array( '.site-content' ),
            'title'    => __( 'Content Background', 'bloga' ),
            'subtitle' => __( 'Pick a content background color for the theme (default: #ffffff).', 'bloga' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_top_widget_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-top-widget' ),
            'title'    => __( 'Footer Top Widget Background', 'bloga' ),
            'subtitle' => __( 'Pick a footer top widget background color for the theme (default: #ffffff).', 'bloga' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_widget_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-widget' ),
            'title'    => __( 'Footer Widget Background', 'bloga' ),
            'subtitle' => __( 'Pick a footer widget background color for the theme (default: #2b3747).', 'bloga' ),
            'default'  => '#2b3747',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-area' ),
            'title'    => __( 'Footer Background', 'bloga' ),
            'subtitle' => __( 'Pick a footer background color for the theme (default: #ffffff).', 'bloga' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Social Links', 'bloga' ),
    'id'    => 'button-links',
    'desc'  => __( '', 'bloga' ),
            'icon'  => 'el el-heart-empty',
    'subsection' => false,
    'fields'     => array(
        array(
            'id'       => 'xl_facebook',
            'type'     => 'text',
            'title'    => __('Facebook', 'bloga'),
            'subtitle' => __('Facebook button link', 'bloga'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_twitter',
            'type'     => 'text',
            'title'    => __('Twitter', 'bloga'),
            'subtitle' => __('Twitter button link', 'bloga'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_linkedin',
            'type'     => 'text',
            'title'    => __('Linkedin', 'bloga'),
            'subtitle' => __('Linkedin button link', 'bloga'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_google_plus',
            'type'     => 'text',
            'title'    => __('Google plus', 'bloga'),
            'subtitle' => __('Google plus button link', 'bloga'),
            'validate' => 'url',
        ),

    ),
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Footer Settings', 'bloga' ),
    'id'    => 'footer_options',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-magic',
    'fields'     => array(
// Footer Top
        array(
            'id'       => 'xl_enable_footer_top',
            'type'     => 'switch',
            'title'    => __( 'Enable Footer Top', 'bloga' ),
            'subtitle' => __('If you want to display footer top widget, enable it.', 'bloga'),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'footer_top',
            'type'     => 'image_select',
            'title'    => __('Footer Top Column', 'bloga'),
            'subtitle' => __('Select footer top widget column. Choose between 1 or 2 column layout.', 'bloga'),
            'required' => array('xl_enable_footer_top', '=', '1'),
            'options'  => array(
                '1c'      => array(
                    'alt'   => '1 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/1c.png'
                ),
                '2c'      => array(
                    'alt'   => '2 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/2c.png'
                ),
                '2cl'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                '2cr'      => array(
                    'alt'   => '2 Column Right',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                )
            ),
            'default' => '2c'
        ),

// Footer Widget
        array(
            'id'       => 'xl_enable_footer_widget',
            'type'     => 'switch',
            'title'    => __( 'Enable Footer Widget', 'bloga' ),
            'subtitle' => __('If you want to display footer widget, enable it.', 'bloga'),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'footer_widget',
            'type'     => 'image_select',
            'title'    => __('Footer Widget Column', 'bloga'),
            'subtitle' => __('Select footer widget column. Choose between 1, 2, 3 or 4 column layout.', 'bloga'),
            'required' => array('xl_enable_footer_widget', '=', '1'),
            'options'  => array(
                '1c'      => array(
                    'alt'   => '1 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/1c.png'
                ),
                '2c'      => array(
                    'alt'   => '2 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/2c.png'
                ),
                '2cl'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/2cl.png'
                ),
                '2cr'      => array(
                    'alt'   => '2 Column Right',
                    'img'  => ReduxFramework::$_url.'assets/img/2cr.png'
                ),
                '3c'      => array(
                    'alt'   => '3 Column',
                    'img'   => ReduxFramework::$_url.'assets/img/3c.png'
                ),
                '3cm'      => array(
                    'alt'   => '3 Column Middle',
                    'img'   => ReduxFramework::$_url.'assets/img/3cm.png'
                ),
                '3cl'      => array(
                    'alt'   => '3 Column Left',
                    'img'   => ReduxFramework::$_url.'assets/img/3cl.png'
                ),
                '3cr'      => array(
                    'alt'  => '3 Column Right',
                    'img'  => ReduxFramework::$_url.'assets/img/3cr.png'
                ),
                '4c'      => array(
                    'alt'  => '4 Column',
                    'img'  => ReduxFramework::$_url.'assets/img/4c.png'
                )
            ),
            'default' => '3c'
        ),

// Copyright
        array(
            'id'       => 'xl_xltheme_credit',
            'type'     => 'switch',
            'title'    => __( 'XLTHEME Credit', 'bloga' ),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'xl_show_copyright',
            'type'     => 'switch',
            'title'    => __( 'Show Copyright', 'bloga' ),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'xl_copyright',
            'type'     => 'textarea',
            'title'    => __('Copyright', 'bloga'),
            'subtitle' => __('Add your copyright text', 'bloga'),
            'default'  => __('Copyright &copy; 2017 <a href="https://www.xltheme.com/">XLTHEME</a>', 'bloga'),
            'required' => array('xl_show_copyright', '=', '1')
        ),

    ),
) );


Redux::setSection( $opt_name, array(
    'title' => __( 'Custom Code', 'bloga' ),
    'id'    => 'custom_code',
    'desc'  => __( '', 'bloga' ),
    'icon'  => 'el el-edit',
    'fields'     => array(
        array(
            'id'       => 'xl_tracking_code',
            'type'     => 'textarea',
            'title'    => __( 'Tracking Code', 'bloga' ),
            'subtitle'     => __( 'Paste your Google Analytics (or other) tracking code here. This will be added into the header template of your theme. Please place code inside script tags.', 'bloga' ),
        ),
        array(
            'id'       => 'xl_space_before_head',
            'type'     => 'textarea',
            'title'    => __( 'Space before < /head>', 'bloga' ),
            'subtitle'     => __( 'Add code before the < /head> tag.', 'bloga' ),
        ),
        array(
            'id'       => 'xl_space_before_body',
            'type'     => 'textarea',
            'title'    => __( 'Space before < /body>', 'bloga' ),
            'subtitle'     => __( 'Add code before the < /body> tag.', 'bloga' ),
        ),
        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __('Custom CSS', 'bloga'),
            'subtitle' => __('Paste your CSS code here.', 'bloga'),
            'mode'     => 'css',
            'theme'    => 'monokai',
        ),

        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Custom JS', 'bloga'),
            'subtitle' => __('Paste your JS code here.', 'bloga'),
            'mode'     => 'javascript',
            'theme'    => 'monokai',
        ),

    ),
) );