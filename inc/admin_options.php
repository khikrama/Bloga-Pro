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
    'menu_title'           => __( 'Theme Options', 'bloga-pro' ),
    'page_title'           => __( 'Theme Options', 'bloga-pro' ),
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
    'title' => __( 'General', 'bloga-pro' ),
    'id'    => 'general_options',
    'icon'  => 'el el-adjust-alt',
    'subsection' => false,
    'fields'     => array(
        array(
            'id'       => 'xl_theme_style',
            'type'     => 'image_select',
            'title'    => __( 'Default Theme Style', 'bloga-pro' ),
            'subtitle' => __( 'Select theme style from preset.', 'bloga-pro' ),
            'options'  => array(
                'default' => array(
                    'alt' => 'Default',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/default.png'
                ),
                'red' => array(
                    'alt' => 'Red',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/red.png'
                ),
                'pink' => array(
                    'alt' => 'Pink',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/pink.png'
                ),
                'purple' => array(
                    'alt' => 'Purple',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/purple.png'
                ),
                'deep-purple' => array(
                    'alt' => 'Deep Purple',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/deep-purple.png'
                ),
                'indigo' => array(
                    'alt' => 'Indigo',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/indigo.png'
                ),
                'blue' => array(
                    'alt' => 'Blue',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/blue.png'
                ),
                'light-blue' => array(
                    'alt' => 'Light Blue',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/light-blue.png'
                ),
                'cyan' => array(
                    'alt' => 'Cyan',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/cyan.png'
                ),
                'teal' => array(
                    'alt' => 'Teal',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/teal.png'
                ),
                'green' => array(
                    'alt' => 'Green',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/green.png'
                ),
                'light-green' => array(
                    'alt' => 'Light Green',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/light-green.png'
                ),
                'lime' => array(
                    'alt' => 'Lime',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/lime.png'
                ),
                'yellow' => array(
                    'alt' => 'Yellow',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/yellow.png'
                ),
                'amber' => array(
                    'alt' => 'Amber',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/amber.png'
                ),
                'orange' => array(
                    'alt' => 'Orange',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/orange.png'
                ),
                'deep-orange' => array(
                    'alt' => 'Deep Orange',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/deep-orange.png'
                ),
                'brown' => array(
                    'alt' => 'Brown',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/brown.png'
                ),
                'grey' => array(
                    'alt' => 'Grey',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/grey.png'
                ),
                'blue-grey' => array(
                    'alt' => 'Blue Grey',
                    'img' => get_template_directory_uri() . '/assets/images/color-presets/blue-grey.png'
                ),
            ),
            'default'  => 'default'
        ),
        array(
            'id'       => 'xl_blog_style',
            'type'     => 'select',
            'title'    => __( 'Default Blog Style', 'bloga-pro' ),
            'subtitle' => __( 'Select blog style from the list.', 'bloga-pro' ),
            'options'  => array(
                'list' => 'List',
//                'grid' => 'Grid',
            ),
            'default'  => 'list'
        ),
        array(
            'id'       => 'xl_enable_preloader',
            'type'     => 'switch',
            'title'    => __( 'Enable Preloader?', 'bloga-pro' ),
            'default'  => 0,
            'on'       => 'ON',
            'off'      => 'OFF',
        ),
        array(
            'id'       => 'xl_preloader_style',
            'type'     => 'select',
            'title'    => __( 'Preloader Style', 'bloga-pro' ),
            'subtitle' => __( 'Select preloader style from the list.', 'bloga-pro' ),
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
            'title'    => __( 'Preloader Background Color', 'bloga-pro' ),
            'required' => array( 'xl_enable_preloader', "=", 1 ),
        ),
        array(
            'id'       => 'xl_preloader_color',
            'type'     => 'color',
            'title'    => __( 'Preloader Color', 'bloga-pro' ),
            'required' => array( 'xl_enable_preloader', "=", 1 ),
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Logo & Favicon', 'bloga-pro' ),
    'id'    => 'xl_logo_favicon',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-leaf',
    'fields'     => array(
        array(
            'id'       => 'xl_logo_on_off',
            'type'     => 'switch',
            'title'    => __( 'Logo Section', 'bloga-pro' ),
            'subtitle' => __( 'Upload your logo', 'bloga-pro' ),
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
            'title'    => __( 'Upload Logo', 'bloga-pro' ),
            'subtitle'     => __( 'Select an image file for your logo.', 'bloga-pro' ),
        ),
        array(
            'id' => 'xl_favicon',
            'type' => 'media',
            'title' => __('Favicon', 'bloga-pro'),
            'default' => array("url" => get_template_directory_uri() . "/assets/images/favicon.png"),
            'preview' => true,
            "url" => true
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Header', 'bloga-pro' ),
    'id'    => 'xl_header',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-website',
    'fields'     => array(
        array(
            'id'       => 'sticky_header',
            'type'     => 'switch',
            'title'    => __( 'Sticky Header', 'bloga-pro' ),
            'subtitle' => __( 'If you want to keep your header always on top, Enable this option Yes', 'bloga-pro' ),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),

        array(
            'id'       => 'header_style',
            'type'     => 'image_select',
            'title'    => __( 'Header Style', 'bloga-pro' ),
            'subtitle' => __( 'Select a header variation from presets', 'bloga-pro' ),
            //Must provide key => value(array:title|img) pairs for radio options
            'options'  => array(
                '1' => array(
                    'alt' => 'Default',
                    'img' => get_template_directory_uri() . '/assets/images/headers/default.png'
                ),
                '2' => array(
                    'alt' => 'Header 1',
                    'img' => get_template_directory_uri() . '/assets/images/headers/header1.png'
                ),
            ),
            'default'  => '2'
        ),

    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Sidebars', 'bloga-pro' ),
    'id'    => 'xl_sidebars',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-pause',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_sidebar',
            'type'     => 'switch',
            'title'    => __( 'Enable Sidebar', 'bloga-pro' ),
            'subtitle' => __('If you want to display sidebar widget, enable it.', 'bloga-pro'),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'sidebar_position',
            'type'     => 'image_select',
            'title'    => __('Sidebar Position', 'bloga-pro'),
            'subtitle' => __('Select sidebar position', 'bloga-pro'),
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
    'title' => __( 'Typography', 'bloga-pro' ),
    'id'    => 'xl_typography',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-font',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_typography',
            'type'     => 'switch',
            'title'    => __( 'Custom Typography', 'bloga-pro' ),
            'subtitle' => __('Enable custom typography option?.', 'bloga-pro'),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id' => 'xl_body_fonts',
            'type' => 'typography',
            'title' => __('Body Font', 'bloga-pro'),
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
            'id' => 'xl_h1_fonts',
            'type' => 'typography',
            'title' => __('H1 Font', 'bloga-pro'),
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
            'output'      => array('h1'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 35,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_h2_fonts',
            'type' => 'typography',
            'title' => __('H2 Font', 'bloga-pro'),
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
            'output'      => array('h2'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 28,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_h3_fonts',
            'type' => 'typography',
            'title' => __('H3 Font', 'bloga-pro'),
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
            'output'      => array('h3'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 25,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_h4_fonts',
            'type' => 'typography',
            'title' => __('H4 Font', 'bloga-pro'),
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
            'output'      => array('h4'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 22,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_h5_fonts',
            'type' => 'typography',
            'title' => __('H5 Font', 'bloga-pro'),
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
            'output'      => array('h5'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 18,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
        array(
            'id' => 'xl_h6_fonts',
            'type' => 'typography',
            'title' => __('H6 Font', 'bloga-pro'),
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
            'output'      => array('h6'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 16,
                'font-weight' => 700,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),

        array(
            'id' => 'header_top',
            'type' => 'typography',
            'title' => __('Header Top', 'bloga-pro'),
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
            'output'      => array('.header-top'),
            'units'       =>'px',
            'default'     => array(
                'font-family' => 'Ubuntu',
                'font-size' => 16,
                'google'      => true,
            ),
            'required' => array('xl_enable_typography', '=', '1'),
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Blog', 'bloga-pro' ),
    'id'    => 'blog_setting',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-edit',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_limit_post',
            'type'     => 'switch',
            'title'    => __( 'Enable Post Excerpt?', 'bloga-pro' ),
            'default'  => 0,
            'on'       => 'ON',
            'off'      => 'OFF',
        ),
        array(
            'id'       => 'xl_excerpt_length',
            'type'     => 'text',
            'title'    => __( 'Excerpt Length', 'bloga-pro' ),
            'subtitle' => __( 'Enter the excerpt length. It is must be a numeric value.', 'bloga-pro' ),
            'validate' => 'numeric',
            'default'  => '25',
            'required' => array( 'xl_enable_limit_post', "=", 1 ),
        ),
        array(
            'id'       => 'xl_blog_read_more_text',
            'type'     => 'text',
            'title'    => __( 'Read More Text', 'bloga-pro' ),
            'subtitle' => __( 'Enter the read more text.', 'bloga-pro' ),
            'default'  => 'Continue Reading',
            'required' => array( 'xl_enable_limit_post', "=", 1 ),
        ),

    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Custom Style', 'bloga-pro' ),
    'id'    => 'xl_custom_style',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-adjust',
    'fields'     => array(
        array(
            'id'       => 'xl_enable_custom_style',
            'type'     => 'switch',
            'title'    => __( 'Custom Style', 'bloga-pro' ),
            'subtitle' => __('Enable custom Style option?.', 'bloga-pro'),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'color-section-start',
            'type'     => 'section',
            'title'    => __( 'Color Options', 'bloga-pro' ),
            'subtitle' => __( 'Change text color from the following section.', 'bloga-pro' ),
            'indent'   => true,
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'default-color',
            'type'     => 'color',
            'output'   => array( 'a' ),
            'title'    => __( 'Default Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default link color (default: #2b3747).', 'bloga-pro' ),
            'default'  => '#2b3747',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'default-hover-color',
            'type'     => 'color',
            'output'   => array( 'a:hover' ),
            'title'    => __( 'Default Hover Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default link hover color (default: #ef6767).', 'bloga-pro' ),
            'default'  => '#ef6767',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'menu-color',
            'type'     => 'color',
            'output'   => array( '.navbar-default .navbar-nav>li>a' ),
            'title'    => __( 'Menu Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick the menu color (default: #2b3747).', 'bloga-pro' ),
            'default'  => '#2b3747',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'menu-hover-color',
            'type'     => 'color',
            'output'   => array( '.navbar-default .navbar-nav>li>a:hover', '.navbar-default .navbar-nav>li>a:focus' ),
            'title'    => __( 'Menu Hover Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick the menu hover color (default: #ef6767).', 'bloga-pro' ),
            'default'  => '#ef6767',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'menu-active-color',
            'type'     => 'color',
            'output'   => array( '.navbar-default .navbar-nav>li.current-menu-item a' ),
            'title'    => __( 'Menu Active Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick the menu active color (default: #ef6767).', 'bloga-pro' ),
            'default'  => '#ef6767',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'body-color',
            'type'     => 'color',
            'output'   => array( 'html','body' ),
            'title'    => __( 'Body Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default body color (default: #5c6c82).', 'bloga-pro' ),
            'default'  => '#5c6c82',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer-top-widget-color',
            'type'     => 'color',
            'output'   => array( '.footer-top-widget' ),
            'title'    => __( 'Footer Top Widget Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default footer top widget color (default: #5c6c82).', 'bloga-pro' ),
            'default'  => '#5c6c82',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer-widget-color',
            'type'     => 'color',
            'output'   => array( '.footer-widget' ),
            'title'    => __( 'Footer Widget Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default footer widget color (default: #5c6c82).', 'bloga-pro' ),
            'default'  => '#5c6c82',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer-color',
            'type'     => 'color',
            'output'   => array( '.footer-area' ),
            'title'    => __( 'Footer Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick default footer color (default: #5c6c82).', 'bloga-pro' ),
            'default'  => '#5c6c82',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'header-border-top-color',
            'type'     => 'color_rgba',
            'title'    => __( 'Header Border Top Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick the header border top color (default: rgba(221, 221, 221, 0.41)).', 'bloga-pro' ),
            'default'  => array(
                'color' => '#ddd',
                'alpha' => '.41',
                'rgba' => 'rgba(221, 221, 221, 0.41)'
            ),
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'header-border-bottom-color',
            'type'     => 'color_rgba',
            'title'    => __( 'Header Border Bottom Color', 'bloga-pro' ),
            'subtitle' => __( 'Pick the header border bottom color (default: rgba(221, 221, 221, 0.41)).', 'bloga-pro' ),
            'default'  => array(
                'color' => '#ddd',
                'alpha' => '.41',
                'rgba' => 'rgba(221, 221, 221, 0.41)'
            ),
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),

        array(
            'id'       => 'bg-section-start',
            'type'     => 'section',
            'title'    => __( 'Background Options', 'bloga-pro' ),
            'subtitle' => __( 'Change background color, images from the following section.', 'bloga-pro' ),
            'indent'   => true,
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'header_top_area_bg',
            'type'     => 'background',
            'output'   => array( '.header-top' ),
            'title'    => __( 'Header Top Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a header top background color for the theme (default: #ffffff).', 'bloga-pro' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'header_area_bg',
            'type'     => 'background',
            'output'   => array( '.header-area' ),
            'title'    => __( 'Header Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a header background color for the theme (default: #ffffff).', 'bloga-pro' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'content_area_bg',
            'type'     => 'background',
            'output'   => array( '.site-content' ),
            'title'    => __( 'Content Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a content background color for the theme (default: #ffffff).', 'bloga-pro' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_top_widget_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-top-widget' ),
            'title'    => __( 'Footer Top Widget Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a footer top widget background color for the theme (default: #ffffff).', 'bloga-pro' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_widget_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-widget' ),
            'title'    => __( 'Footer Widget Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a footer widget background color for the theme (default: #2b3747).', 'bloga-pro' ),
            'default'  => '#2b3747',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
        array(
            'id'       => 'footer_area_bg',
            'type'     => 'background',
            'output'   => array( '.footer-area' ),
            'title'    => __( 'Footer Background', 'bloga-pro' ),
            'subtitle' => __( 'Pick a footer background color for the theme (default: #ffffff).', 'bloga-pro' ),
            'default'  => '#ffffff',
            'required' => array('xl_enable_custom_style', '=', '1'),
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Social Links', 'bloga-pro' ),
    'id'    => 'button-links',
    'desc'  => __( '', 'bloga-pro' ),
            'icon'  => 'el el-heart-empty',
    'subsection' => false,
    'fields'     => array(
        array(
            'id'       => 'xl_facebook',
            'type'     => 'text',
            'title'    => __('Facebook', 'bloga-pro'),
            'subtitle' => __('Facebook button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_twitter',
            'type'     => 'text',
            'title'    => __('Twitter', 'bloga-pro'),
            'subtitle' => __('Twitter button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_linkedin',
            'type'     => 'text',
            'title'    => __('Linkedin', 'bloga-pro'),
            'subtitle' => __('Linkedin button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_google_plus',
            'type'     => 'text',
            'title'    => __('Google plus', 'bloga-pro'),
            'subtitle' => __('Google plus button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_dribbble',
            'type'     => 'text',
            'title'    => __('Dribbble', 'bloga-pro'),
            'subtitle' => __('Dribbble button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_pinterest',
            'type'     => 'text',
            'title'    => __('Pinterest', 'bloga-pro'),
            'subtitle' => __('Pinterest button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_behance',
            'type'     => 'text',
            'title'    => __('Behance', 'bloga-pro'),
            'subtitle' => __('Behance button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_youtube',
            'type'     => 'text',
            'title'    => __('YouTube', 'bloga-pro'),
            'subtitle' => __('YouTube button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_instagram',
            'type'     => 'text',
            'title'    => __('Instagram', 'bloga-pro'),
            'subtitle' => __('Instagram button link', 'bloga-pro'),
            'validate' => 'url',
        ),
        array(
            'id'       => 'xl_flickr',
            'type'     => 'text',
            'title'    => __('Flickr', 'bloga-pro'),
            'subtitle' => __('Flickr button link', 'bloga-pro'),
            'validate' => 'url',
        ),
    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Footer Settings', 'bloga-pro' ),
    'id'    => 'footer_options',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-magic',
    'fields'     => array(
// Footer Top
        array(
            'id'       => 'xl_enable_footer_top',
            'type'     => 'switch',
            'title'    => __( 'Enable Footer Top', 'bloga-pro' ),
            'subtitle' => __('If you want to display footer top widget, enable it.', 'bloga-pro'),
            'default'  => 0,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'footer_top',
            'type'     => 'image_select',
            'title'    => __('Footer Top Column', 'bloga-pro'),
            'subtitle' => __('Select footer top widget column. Choose between 1 or 2 column layout.', 'bloga-pro'),
            'required' => array('xl_enable_footer_top', '=', '1'),
            'options'  => array(
                '1c'      => array(
                    'alt'   => '1 Column',
                    'img'   => get_template_directory_uri().'/assets/images/footer/1c.png'
                ),
                '2c'      => array(
                    'alt'   => '2 Column',
                    'img'   => get_template_directory_uri().'/assets/images/footer/2c.png'
                ),
                '2cl'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => get_template_directory_uri().'/assets/images/footer/2cl.png'
                ),
                '2cr'      => array(
                    'alt'   => '2 Column Right',
                    'img'  => get_template_directory_uri().'/assets/images/footer/2cr.png'
                )
            ),
            'default' => '2c'
        ),

// Footer Widget
        array(
            'id'       => 'xl_enable_footer_widget',
            'type'     => 'switch',
            'title'    => __( 'Enable Footer Widget', 'bloga-pro' ),
            'subtitle' => __('If you want to display footer widget, enable it.', 'bloga-pro'),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'footer_widget',
            'type'     => 'image_select',
            'title'    => __('Footer Widget Column', 'bloga-pro'),
            'subtitle' => __('Select footer widget column. Choose between 1, 2, 3 or 4 column layout.', 'bloga-pro'),
            'required' => array('xl_enable_footer_widget', '=', '1'),
            'options'  => array(
                '1c'      => array(
                    'alt'   => '1 Column',
                    'img'   => get_template_directory_uri().'/assets/images/footer/1c.png'
                ),
                '2c'      => array(
                    'alt'   => '2 Column',
                    'img'   => get_template_directory_uri().'/assets/images/footer/2c.png'
                ),
                '2cl'      => array(
                    'alt'   => '2 Column Left',
                    'img'   => get_template_directory_uri().'/assets/images/footer/2cl.png'
                ),
                '2cr'      => array(
                    'alt'   => '2 Column Right',
                    'img'  => get_template_directory_uri().'/assets/images/footer/2cr.png'
                ),
                '3c'      => array(
                    'alt'   => '3 Column',
                    'img'   => get_template_directory_uri().'/assets/images/footer/3c.png'
                ),
                '3cm'      => array(
                    'alt'   => '3 Column Middle',
                    'img'   => get_template_directory_uri().'/assets/images/footer/3cm.png'
                ),
                '3cl'      => array(
                    'alt'   => '3 Column Left',
                    'img'   => get_template_directory_uri().'/assets/images/footer/3cl.png'
                ),
                '3cr'      => array(
                    'alt'  => '3 Column Right',
                    'img'  => get_template_directory_uri().'/assets/images/footer/3cr.png'
                ),
                '4c'      => array(
                    'alt'  => '4 Column',
                    'img'  => get_template_directory_uri().'/assets/images/footer/4c.png'
                )
            ),
            'default' => '3c'
        ),

// Copyright
        array(
            'id'       => 'xl_xltheme_credit',
            'type'     => 'switch',
            'title'    => __( 'XLTHEME Credit', 'bloga-pro' ),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'xl_show_copyright',
            'type'     => 'switch',
            'title'    => __( 'Show Copyright', 'bloga-pro' ),
            'default'  => 1,
            'on'       => 'Yes',
            'off'      => 'No',
        ),
        array(
            'id'       => 'xl_copyright',
            'type'     => 'textarea',
            'title'    => __('Copyright', 'bloga-pro'),
            'subtitle' => __('Add your copyright text', 'bloga-pro'),
            'default'  => __('Copyright &copy; 2017 <a href="https://www.xltheme.com/">XLTHEME</a>', 'bloga-pro'),
            'required' => array('xl_show_copyright', '=', '1')
        ),

    ),
) );

Redux::setSection( $opt_name, array(
    'title' => __( 'Custom Code', 'bloga-pro' ),
    'id'    => 'custom_code',
    'desc'  => __( '', 'bloga-pro' ),
    'icon'  => 'el el-file-edit',
    'fields'     => array(
        array(
            'id'       => 'xl_tracking_code',
            'type'     => 'textarea',
            'title'    => __( 'Tracking Code', 'bloga-pro' ),
            'subtitle'     => __( 'Paste your Google Analytics (or other) tracking code here. This will be added into the header template of your theme. Please place code inside script tags.', 'bloga-pro' ),
        ),
        array(
            'id'       => 'xl_space_before_head',
            'type'     => 'textarea',
            'title'    => __( 'Space before < /head>', 'bloga-pro' ),
            'subtitle'     => __( 'Add code before the < /head> tag.', 'bloga-pro' ),
        ),
        array(
            'id'       => 'xl_space_before_body',
            'type'     => 'textarea',
            'title'    => __( 'Space before < /body>', 'bloga-pro' ),
            'subtitle'     => __( 'Add code before the < /body> tag.', 'bloga-pro' ),
        ),
        array(
            'id'       => 'custom_css',
            'type'     => 'ace_editor',
            'title'    => __('Custom CSS', 'bloga-pro'),
            'subtitle' => __('Paste your CSS code here.', 'bloga-pro'),
            'mode'     => 'css',
            'theme'    => 'monokai',
        ),

        array(
            'id'       => 'custom_js',
            'type'     => 'ace_editor',
            'title'    => __('Custom JS', 'bloga-pro'),
            'subtitle' => __('Paste your JS code here.', 'bloga-pro'),
            'mode'     => 'javascript',
            'theme'    => 'monokai',
        ),

    ),
) );