<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: 
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "agol";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'agol/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    $sampleHTML = '';
    if ( file_exists( dirname( __FILE__ ) . '/info-html.html' ) ) {
        Redux_Functions::initWpFilesystem();

        global $wp_filesystem;

        $sampleHTML = $wp_filesystem->get_contents( dirname( __FILE__ ) . '/info-html.html' );
    }

    // Background Patterns Reader
    $sample_patterns_path = ReduxFramework::$_dir . '../sample/patterns/';
    $sample_patterns_url  = ReduxFramework::$_url . '../sample/patterns/';
    $sample_patterns      = array();
    
    if ( is_dir( $sample_patterns_path ) ) {

        if ( $sample_patterns_dir = opendir( $sample_patterns_path ) ) {
            $sample_patterns = array();

            while ( ( $sample_patterns_file = readdir( $sample_patterns_dir ) ) !== false ) {

                if ( stristr( $sample_patterns_file, '.png' ) !== false || stristr( $sample_patterns_file, '.jpg' ) !== false ) {
                    $name              = explode( '.', $sample_patterns_file );
                    $name              = str_replace( '.' . end( $name ), '', $sample_patterns_file );
                    $sample_patterns[] = array(
                        'alt' => $name,
                        'img' => $sample_patterns_url . $sample_patterns_file
                    );
                }
            }
        }
    }

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: 
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => __( 'Agol Options', 'redux-framework-demo' ),
        'page_title'           => __( 'Agol Options', 'redux-framework-demo' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => '',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => false,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
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
        'page_slug'            => 'agol',
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
         'footer_credit'     => 'My Blog Theme Options Plugin',                   // Disable the footer credit of Redux. Please leave if you can help it.

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

   
    

    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( __( '', 'redux-framework-demo' ), $v );
    } else {
        $args['intro_text'] = __( '', 'redux-framework-demo' );
    }

    // Add content after the form.
    $args['footer_text'] = __( '', 'redux-framework-demo' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => __( 'Theme Information 1', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        ),
        array(
            'id'      => 'redux-help-tab-2',
            'title'   => __( 'Theme Information 2', 'redux-framework-demo' ),
            'content' => __( '<p>This is the tab content, HTML is allowed.</p>', 'redux-framework-demo' )
        )
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = __( '<p>This is the sidebar content, HTML is allowed.</p>', 'redux-framework-demo' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // -> START Basic Fields

    // time 
    Redux::setSection( $opt_name, array(
        'title'      => __( 'Top Header Option', 'redux-framework-demo' ),
        'id'         => 'time',
        //'icon'  => 'el el-home'
        'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
        'subsection' => false,
        'fields'     => array(
            array(
                'id'       => 'start_time',
                'type'     => 'text',
                'title'    => __( 'Add Your Started Day', 'redux-framework-demo' ),
                'subtitle' => __( '' ),
                'default' => __( 'Sunday' ),
            ),
            array(
                'id'       => 'end_time',
                'type'     => 'text',
                'title'    => __( 'Add Your End Day', 'redux-framework-demo' ),
                'subtitle' => __( '' ),
                'default' => __( 'Friday' ),
            ),
            array(
                'id'       => 'working_hour',
                'type'     => 'text',
                'title'    => __( 'Add Your Working Time', 'redux-framework-demo' ),
                'subtitle' => __( '' ),
                'default' => __( '9am to 5pm' ),
            ),
            array(
                'id'       => 'mobile_number',
                'type'     => 'text',
                'title'    => __( 'Add Your Working time', 'redux-framework-demo' ),
                'subtitle' => __( '' ),
                'default' => __( '+8801717171044' ),
            ),
            
        
            
        ),
        
    ) );

// slider


Redux::setSection( $opt_name, array(
    'title'            => __( 'Slider  Option', 'redux-framework-demo' ),
    'id'               => 'slider',
    'desc'             => __( 'These are site option fields!', 'redux-framework-demo' ),
    'customizer_width' => '400px',
    // 'icon'             => 'el el-home'
) );
;


Redux::setSection( $opt_name, array(
	'title'      => __( 'Slider One Option', 'redux-framework-demo' ),
	'id'         => 'slider_opt_one',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your slider one in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'slider_img_one',
			'type'     => 'media',
			'title'    => __( 'Upload Slider images', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
		),
		
		array(
			'id'       => 'slider_heading_one',
			'type'     => 'text',
			'title'    => __( 'Add Your Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Here Best Tires' ),
		),
		
		array(
			'id'       => 'slider_sub_heading_one',
			'type'     => 'text',
			'title'    => __( 'Add Your Slider Sub Heading', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'For Your Vehicle' ),
		),
		array(
			'id'       => 'slider_sub_description_one',
			'type'     => 'textarea',
			'title'    => __( 'Add Your description', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua' ),
		),
		
	),
	
) );
// two

Redux::setSection( $opt_name, array(
	'title'      => __( 'Slider Two Option', 'redux-framework-demo' ),
	'id'         => 'slider_opt_two',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your slider Two in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'slider_img_two',
			'type'     => 'media',
			'title'    => __( 'Upload Slider images', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
		),
		
		array(
			'id'       => 'slider_heading_two',
			'type'     => 'text',
			'title'    => __( 'Add Your Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Here Best Tires' ),
		),
		
		array(
			'id'       => 'slider_sub_heading_two',
			'type'     => 'text',
			'title'    => __( 'Add Your Slider Sub Heading', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'For Your Vehicle' ),
		),
		array(
			'id'       => 'slider_sub_description_two',
			'type'     => 'textarea',
			'title'    => __( 'Add Your description', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua' ),
		),
		
	),
	
) );
// three

Redux::setSection( $opt_name, array(
	'title'      => __( 'Slider Three Option', 'redux-framework-demo' ),
	'id'         => 'slider_opt_Three',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your slider Three in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'slider_img_three',
			'type'     => 'media',
			'title'    => __( 'Upload Slider images', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
		),
		
		array(
			'id'       => 'slider_heading_three',
			'type'     => 'text',
			'title'    => __( 'Add Your Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Here Best Tires' ),
		),
		
		array(
			'id'       => 'slider_sub_heading_three',
			'type'     => 'text',
			'title'    => __( 'Add Your Slider Sub Heading', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'For Your Vehicle' ),
		),
		array(
			'id'       => 'slider_sub_description_three',
			'type'     => 'textarea',
			'title'    => __( 'Add Your description', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua' ),
		),
		
	),
	
) );
// slider
// about us

Redux::setSection( $opt_name, array(
	'title'      => __( 'About us Option', 'redux-framework-demo' ),
	'id'         => 'about_us',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your About us in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'about_us_right_img',
			'type'     => 'media',
			'title'    => __( 'Upload images For Right Side', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		array(
			'id'       => 'about_us_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Description', 'redux-framework-demo' ),
			'default' => __( 'Welcome to the Amiel Incidents, Amiel thanks our customers for the trust they have given us in choosing the tire replacement through us.
            Choosing a tire type is important for passenger safety, fuel savings and comfort, and these details are important to get from a reliable and professional professional. Our company has a wide network of incidents to provide customer service. continue' ),
		),
		
		array(
			'id'       => 'about_us_author_img',
			'type'     => 'media',
			'title'    => __( 'Upload Author Images', 'redux-framework-demo' ),
		),
		
		array(
			'id'       => 'about_us_author_name',
			'type'     => 'text',
			'title'    => __( 'Add Author Name', 'redux-framework-demo' ),
			'default' => __( 'Ezaz Ahamed' ),
		),
		array(
			'id'       => 'about_us_author_designation',
			'type'     => 'text',
			'title'    => __( 'Add Author Designation', 'redux-framework-demo' ),
			'default' => __( 'CEO & Founder' ),
		),
		array(
			'id'       => 'about_us_author_signature',
			'type'     => 'media',
			'title'    => __( 'Upload Author Signature Images', 'redux-framework-demo' ),
		),
		
		
		
	),
	
) );
// about us
// our service
Redux::setSection( $opt_name, array(
    'title'            => __( 'Service  Option', 'redux-framework-demo' ),
    'id'               => 'service',
    'desc'             => __( 'These are service option fields!', 'redux-framework-demo' ),
    'customizer_width' => '400px',
    // 'icon'             => 'el el-home'
) );

// one
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option One', 'redux-framework-demo' ),
	'id'         => 'service_One',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_One_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service One images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_One_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service One Heading', 'redux-framework-demo' ),
             'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_One_descriptions',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service One Description', 'redux-framework-demo' ),
             'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		),
		
	),
	
) );

// Two
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option Two', 'redux-framework-demo' ),
	'id'         => 'service_Two',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_Two_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service Two images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_Two_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service Two Heading', 'redux-framework-demo' ),
             'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_Two_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service Two Description', 'redux-framework-demo' ),
             'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		),
		
	),
	
) );

// Three
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option Three', 'redux-framework-demo' ),
	'id'         => 'service_Three',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_Three_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service Three images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_Three_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service Three Heading', 'redux-framework-demo' ),
             'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_Three_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service Three Description', 'redux-framework-demo' ),
             'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		),
		
	),
	
) );

// Four
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option Four', 'redux-framework-demo' ),
	'id'         => 'service_Four',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_Four_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service Four images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_Four_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service Four Heading', 'redux-framework-demo' ),
             'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_Four_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service Four Description', 'redux-framework-demo' ),
             'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		),
		
	),
	
) );

// Five
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option Five', 'redux-framework-demo' ),
	'id'         => 'service_Five',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_Five_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service Five images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_Five_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service Five Heading', 'redux-framework-demo' ),
             'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_Five_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service Five Description', 'redux-framework-demo' ),
             'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		),
		
	),
	
) );

// Six
Redux::setSection( $opt_name, array(
	'title'      => __( 'Service Option Six', 'redux-framework-demo' ),
	'id'         => 'service_Six',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your time in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'       => 'service_Six_images',
			'type'     => 'media',
			'title'    => __( 'Upload Your Service Six images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'service_Six_heading',
			'type'     => 'text',
			'title'    => __( 'Add Your Service Six Heading', 'redux-framework-demo' ),
            'default' => __( 'Our Services' ),
		),
		array(
			'id'       => 'service_Six_descriptionsss',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Service Six Description', 'redux-framework-demo' ),
		),
        'default' => __( 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs' ),
		
	),
	
) );
// our service
// videos

Redux::setSection( $opt_name, array(
	'title'      => __( 'Videos Option', 'redux-framework-demo' ),
	'id'         => 'videos',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Videos in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'vidoes_bg',
			'type'     => 'media',
			'title'    => __( 'Upload Background Images', 'redux-framework-demo' ),
		),
		array(
			'id'       => 'vidoes_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Description', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat  nulla pariatur. Excepteur sint occaecat cupidatat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur..' ),
		),
		array(
			'id'       => 'vidoes_link',
			'type'     => 'text',
			'title'    => __( 'Add Your Link', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'https://www.youtube.com/watch?v=kxPCFljwJws' ),
		),
		
	),
	
) );
// videos
// Feature Work
Redux::setSection( $opt_name, array(
    'title'            => __( 'Feature Work  Option', 'redux-framework-demo' ),
    'id'               => 'feature_work',
    'desc'             => __( 'These are Feature Work option fields!', 'redux-framework-demo' ),
    'customizer_width' => '400px',
    // 'icon'             => 'el el-home'
) );

Redux::setSection( $opt_name, array(
	'title'      => __( 'Feature Work One Option', 'redux-framework-demo' ),
	'id'         => 'feature_work_One',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Feature Work in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true ,
	'fields'     => array(
		array(
			'id'       => 'feature_work_One_img',
			'type'     => 'media',
			'title'    => __( 'Upload Your Images Feature Work One ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'feature_work_One_heading',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work One Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'The primary benefit of supporting tire is that it allows you to keep driving ' ),
		),
		
		array(
			'id'       => 'feature_work_One_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work One Description ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to' ),
		),
		
	),
	
) );   
// two

Redux::setSection( $opt_name, array(
	'title'      => __( 'Feature Work Two Option', 'redux-framework-demo' ),
	'id'         => 'feature_work_Two',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Feature Work in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true ,
	'fields'     => array(
		array(
			'id'       => 'feature_work_Two_img',
			'type'     => 'media',
			'title'    => __( 'Upload Your Images Feature Work Two ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'feature_work_Two_heading',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Two Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'The primary benefit of supporting tire is that it allows you to keep driving ' ),
		),
		
		array(
			'id'       => 'feature_work_Two_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Two Description ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to' ),
		),
		
	),
	
) );   

// three

Redux::setSection( $opt_name, array(
	'title'      => __( 'Feature Work Three Option', 'redux-framework-demo' ),
	'id'         => 'feature_work_Three',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Feature Work in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true ,
	'fields'     => array(
		array(
			'id'       => 'feature_work_Three_img',
			'type'     => 'media',
			'title'    => __( 'Upload Your Images Feature Work Three ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'feature_work_Three_heading',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Three Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'The primary benefit of supporting tire is that it allows you to keep driving ' ),
		),
		
		array(
			'id'       => 'feature_work_Three_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Three Description ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to' ),
		),
		
	),
	
) );   
// four

Redux::setSection( $opt_name, array(
	'title'      => __( 'Feature Work Four Option', 'redux-framework-demo' ),
	'id'         => 'feature_work_Four',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Feature Work in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => true ,
	'fields'     => array(
		array(
			'id'       => 'feature_work_Four_img',
			'type'     => 'media',
			'title'    => __( 'Upload Your Images Feature Work Four ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'feature_work_Four_heading',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Four Heading ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'The primary benefit of supporting tire is that it allows you to keep driving ' ),
		),
		
		array(
			'id'       => 'feature_work_Four_description',
			'type'     => 'textarea',
			'title'    => __( 'Add Your Feature Work Four Description ', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to' ),
		),
		
	),
	
) );   

Redux::setSection( $opt_name, array(
	'title'      => __( 'Brand Option', 'redux-framework-demo' ),
	'id'         => 'brand',
	//'icon'  => 'el el-home'
	'desc'       => __( 'Add your Brand in the panel below', 'redux-framework-demo' ) . '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'       => 'brand_img_One',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand One', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		array(
			'id'       => 'brand_img_Two',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Two', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Three',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Three', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Four',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Four', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Five',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Five', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Six',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Six', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Seven',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Seven', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		array(
			'id'       => 'brand_img_Eight',
			'type'     => 'media',
			'title'    => __( 'Add Your Images Brand Eight', 'redux-framework-demo' ),
			'subtitle' => __( '' ),
			'default' => __( '' ),
		),
		
		
		
	),
	
) );




    
    
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $field['msg']    = 'your custom error message';
                $return['error'] = $field;
            }

            if ( $warning == true ) {
                $field['msg']      = 'your custom warning message';
                $return['warning'] = $field;
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => __( 'Section via hook', 'redux-framework-demo' ),
                'desc'   => __( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'redux-framework-demo' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-framework plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

