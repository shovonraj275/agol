<?php


// add favicon  

add_theme_support( 'custom-logo', array(
    'height' => 480,
    'width'  => 720,
    ) );

// add logo
add_theme_support('custom-logo', array(
    'height' => 100,
    'width' => 300,
    'flex-width' => true,
    'flex-height' => true,
));
function theme_prefix_the_custom_logo() {
   if ( function_exists( 'the_custom_logo' ) ) {
      the_custom_logo();
   }}
add_filter('get_custom_logo','change_logo_class');
function change_logo_class($html){
   $html = str_replace('custom-logo-link', 'replace-this-with-your-classes', $html);
   return $html;
}
function feature_image_support(){
	add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','feature_image_support');
// menu 

function register_my_menus() {
    register_nav_menus(
      array(
        'header-top-menu' => __('Header Top Menu'),
    'header-menu' => __('Header Menu'),
        'footer-menu' => __('Footer Menu')
      )
    );
  }
add_action( 'init', 'register_my_menus');

// widgets

function agol_widget_one(){
	register_sidebar( array(
		'name' => __( 'Footer Widget One', 'Left' ),
		'id' => 'footer_one',
		'before_widget' => '<div class="footer-column col-lg-4 col-md-4 col-sm-12">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'agol_widget_one' );
function agol_widget_two(){
	register_sidebar( array(
		'name' => __( 'Footer Widget Two', 'Left' ),
		'id' => 'footer_two',
		'before_widget' => '<div class="footer-column col-lg-4 col-md-4 col-sm-12">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'agol_widget_two' );
function agol_widget_three(){
	register_sidebar( array(
		'name' => __( 'Footer Widget Three', 'Left' ),
		'id' => 'footer_three',
		'before_widget' => '<div class="footer-column col-lg-4 col-md-4 col-sm-12">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'agol_widget_three' );
function agol_widget_four(){
	register_sidebar( array(
		'name' => __( 'Footer Widget Four', 'Left' ),
		'id' => 'footer_four',
		'before_widget' => '<div class="footer-column col-lg-4 col-md-4 col-sm-12">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'agol_widget_four' );
function agol_widget_five(){
	register_sidebar( array(
		'name' => __( 'Footer Widget Five', 'Left' ),
		'id' => 'footer_five',
		'before_widget' => '<div class="footer-column col-lg-8 col-md-4 col-sm-12">',
		'after_widget' => '</div>',
		'before_title' => '<h4>',
		'after_title' => '</h4>',
	) );
}
add_action( 'widgets_init', 'agol_widget_five' );

//  customers_testimonial
function custom_post_customers_testimonial() {
    register_post_type('customerstestimonial',
        array(
            'labels' => array(
                'name' => __( 'Customers Testimonial Content' ),
                'singular_name' => __( 'Customers Testimonial content' ),
                'search_items'      => __( 'Customers Testimonial Content' ),
                'all_items'         => __( 'All Customers Testimonial Content' ),
                'parent_item'       => __( 'Parent Customers Testimonial Content' ),
                'parent_item_colon' => __( 'Parent Customers Testimonial Content' ),
                'edit_item'         => __( 'Edit Customers Testimonial Content' ),
                'update_item'       => __( 'Update Customers Testimonial Content' ),
                'add_new_item'      => __( 'Add New Customers Testimonial Content' ),
                'new_item_name'     => __( 'New Latest Customers Testimonial Content' ),
                'menu_name'         => __( 'MY Customers Testimonial' ),
            ),
        'public' => true,
        'has_archive' => true,
        'menu_position' => 4,
        'rewrite' => array('slug' => 'customerstestimonial-content-main'),
        'supports' => array('title','editor','thumbnail','excerpt', 'comments','custom-fields', 'revisions'),
        )
    );
}
add_action( 'init', 'custom_post_customers_testimonial' ); 


require_once('includes/ReduxCore/framework.php');
require_once('includes/sample/agol-config.php');

















// function customizer_agol_time($agol_time){
	
// 	$agol_time->add_section('agol__set_',array(
	
// 		'title' => 'Top Header Option',
// 		'priority' => '20',
	
// 	));
	
// 	$agol_time->add_setting('agol_time_set_con_start',array(
	
// 		'default' => __( 'Saturday' ),
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_time->add_control('agol_time_set_con_start',array(
// 		'label' => 'Select Your Started Day',
// 		'section' => 'agol__set_',
// 		'settings' => 'agol_time_set_con_start',
// 		'type' => 'select',
// 		'choices' => array(
// 			'Saturday' => 'Saturday',
// 			'Sunday' => 'Sunday',
// 			'Monday' => 'Monday',
// 			'Tuesday' => 'Tuesday',
// 			'Wednesday' => 'Wednesday',
// 			'Thursday' => 'Thursday',
// 			'Friday' => 'Friday',
// 		)
	
// 	));
// 	$agol_time->add_setting('agol_time_set_con_end',array(
	
// 		'default' => __( 'Friday' ),
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_time->add_control('agol_time_set_con_end',array(
// 		'label' => 'Select Your Ended Day',
// 		'section' => 'agol__set_',
// 		'settings' => 'agol_time_set_con_end',
// 		'type' => 'select',
// 		'choices' => array(
//             'Saturday' => 'Saturday',
// 			'Sunday' => 'Sunday',
// 			'Monday' => 'Monday',
// 			'Tuesday' => 'Tuesday',
// 			'Wednesday' => 'Wednesday',
// 			'Thursday' => 'Thursday',
// 			'Friday' => 'Friday',
// 		)
	
// 	));
	
// 	$agol_time->add_setting('agol_time_set_con_time',array(
	
// 		'default' =>  '9am To 5pm' ,
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_time->add_control('agol_time_set_con_time',array(
// 		'label' => 'Add Your Time',
// 		'section' => 'agol__set_',
// 		'settings' => 'agol_time_set_con_time',
// 		'type' => 'text',
	
// 	));
// 	$agol_time->add_setting('agol_time_set_con_phone',array(
	
// 		'default' =>  '+8801740737445' ,
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_time->add_control('agol_time_set_con_phone',array(
// 		'label' => 'Select Your Time',
// 		'section' => 'agol__set_',
// 		'settings' => 'agol_time_set_con_phone',
// 		'type' => 'text',
	
// 	));
	
	
// }
// add_action('customize_register','customizer_agol_time');


//slider


// function customizer_agol_slider($agol_slider){
	
//     $agol_slider->add_panel( 'agol_slider_pn', array(
 
//         'title' => 'Slider Options',
//         'priority' => 30,
//         'capability' => 'edit_theme_options', 
//         'theme_supports' => '',
//         'active_callback' => ''
//     ));

// 	$agol_slider->add_section('agol_slider_set_one',array(
//         'panel' => 'agol_slider_pn',
// 		'title' => 'Slider One',
// 		'priority' => '30',
	
// 	));
	
//     $agol_slider->add_setting( 'agol_set_con_slider_one', array(
//         'default' => get_theme_file_uri('images/main-slider/1.jpg'), // Add Default Image URL 
//         'sanitize_callback' => 'esc_url_raw'
//     ));
  
//     $agol_slider->add_control( new WP_Customize_Image_Control( $agol_slider, 'agol_set_con_slider_one', array(
//         'label' => 'Upload Slider images One',
//         'section' => 'agol_slider_set_one',
//         'settings' => 'agol_set_con_slider_one',
//         'button_labels' => array(// All These labels are optional
//                     'select' => 'Select Images',
//                     'remove' => 'Remove Images',
//                     'change' => 'Change Images',
//                     )
//     )));
  
	
// 	$agol_slider->add_setting('agol_slider_set_con_heading_one',array(
	
// 		'default' => 'Here Best Tires ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_one',array(
// 		'label' => 'Add Your Heading',
// 		'section' => 'agol_slider_set_one',
// 		'settings' => 'agol_slider_set_con_heading_one',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_one_sub',array(
	
// 		'default' => 'For Your Vehicle ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_one_sub',array(
// 		'label' => 'Add Your Sub Heading',
// 		'section' => 'agol_slider_set_one',
// 		'settings' => 'agol_slider_set_con_heading_one_sub',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_one_description',array(
	
// 		'default' => '>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_one_description',array(
// 		'label' => 'Add Your Description',
// 		'section' => 'agol_slider_set_one',
// 		'settings' => 'agol_slider_set_con_heading_one_description',
// 		'type' => 'textarea',
	
// 	));
// 	// TWO
// 	$agol_slider->add_section('agol_slider_set_two',array(
// 		'panel' => 'agol_slider_pn',
// 		'title' => 'Slider Two',
// 		'priority' => '30',
	
// 	));
	
// 	$agol_slider->add_setting( 'agol_set_con_slider_two', array(
// 		'default' => get_theme_file_uri('images/main-slider/1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw'
// 	));
	
// 	$agol_slider->add_control( new WP_Customize_Image_Control( $agol_slider, 'agol_set_con_slider_two', array(
// 		'label' => 'Upload Slider images Two',
// 		'section' => 'agol_slider_set_two',
// 		'settings' => 'agol_set_con_slider_two',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
// 	)));
	
	
// 	$agol_slider->add_setting('agol_slider_set_con_heading_two',array(
	
// 		'default' => 'Here Best Tires ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_two',array(
// 		'label' => 'Add Your Heading',
// 		'section' => 'agol_slider_set_two',
// 		'settings' => 'agol_slider_set_con_heading_two',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_two_sub',array(
	
// 		'default' => 'For Your Vehicle ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_two_sub',array(
// 		'label' => 'Add Your Sub Heading',
// 		'section' => 'agol_slider_set_two',
// 		'settings' => 'agol_slider_set_con_heading_two_sub',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_two_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_two_description',array(
// 		'label' => 'Add Your Description',
// 		'section' => 'agol_slider_set_two',
// 		'settings' => 'agol_slider_set_con_heading_two_description',
// 		'type' => 'textarea',
	
// 	));
// 	// THREE
// 	$agol_slider->add_section('agol_slider_set_three',array(
// 		'panel' => 'agol_slider_pn',
// 		'title' => 'Slider Three',
// 		'priority' => '30',
	
// 	));
	
// 	$agol_slider->add_setting( 'agol_set_con_slider_three', array(
// 		'default' => get_theme_file_uri('images/main-slider/1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw'
// 	));
	
// 	$agol_slider->add_control( new WP_Customize_Image_Control( $agol_slider, 'agol_set_con_slider_three', array(
// 		'label' => 'Upload Slider images Three',
// 		'section' => 'agol_slider_set_three',
// 		'settings' => 'agol_set_con_slider_three',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
// 	)));
	
	
// 	$agol_slider->add_setting('agol_slider_set_con_heading_three',array(
	
// 		'default' => 'Here Best Tires ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_three',array(
// 		'label' => 'Add Your Heading',
// 		'section' => 'agol_slider_set_three',
// 		'settings' => 'agol_slider_set_con_heading_three',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_three_sub',array(
	
// 		'default' => 'For Your Vehicle ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_three_sub',array(
// 		'label' => 'Add Your Sub Heading',
// 		'section' => 'agol_slider_set_three',
// 		'settings' => 'agol_slider_set_con_heading_three_sub',
// 		'type' => 'text',
	
// 	));
// 	$agol_slider->add_setting('agol_slider_set_con_heading_three_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt u Excepteur sint occaecat cupidatat non proident labore et dolore magna aliqua ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_slider->add_control('agol_slider_set_con_heading_three_description',array(
// 		'label' => 'Add Your Description',
// 		'section' => 'agol_slider_set_three',
// 		'settings' => 'agol_slider_set_con_heading_three_description',
// 		'type' => 'textarea',
	
// 	));
	
	
	
// }
// add_action('customize_register','customizer_agol_slider');



//slider
// about us

function customizer_agol_about_us($agol_about_us){
	
	$agol_about_us->add_section('agol_about_us_set',array(
	
		'title' => 'About Us Option',
		'priority' => '36',
	
	));
	$agol_about_us->add_setting('agol_about_us_set_con_right_side',array(
		'default' => get_theme_file_uri('images/resource/about-1.jpg'), // Add Default Image URL 
		'sanitize_callback' => 'esc_url_raw',
	
	));
	$agol_about_us->add_control(new WP_Customize_Image_Control( $agol_about_us,'agol_about_us_set_con_right_side',array(
		'label' => 'Upload images For Right Side',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_right_side',
		'button_labels' => array(// All These labels are optional
					'select' => 'Select Images',
					'remove' => 'Remove Images',
					'change' => 'Change Images',
					)
		
	)));

	$agol_about_us->add_setting('agol_about_us_set_con_description',array(
	
		'default' => 'Welcome to the Amiel Incidents, Amiel thanks our customers for the trust they have given us in choosing the tire replacement through us.
		Choosing a tire type is important for passenger safety, fuel savings and comfort, and these details are important to get from a reliable and professional professional. Our company has a wide network of incidents to provide customer service. continue',
		'transport' => 'refresh',
	
	));
	
	$agol_about_us->add_control('agol_about_us_set_con_description',array(
		'label' => 'Add Your Description',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_description',
		'type' => 'textarea',
	
	));
	$agol_about_us->add_setting('agol_about_us_set_con_author_img',array(
		'default' => get_theme_file_uri('images/resource/author-1.jpg'), // Add Default Image URL 
		'sanitize_callback' => 'esc_url_raw',
	
	));
	$agol_about_us->add_control(new WP_Customize_Image_Control( $agol_about_us,'agol_about_us_set_con_author_img',array(
		'label' => 'Upload Author Images',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_author_img',
		'button_labels' => array(// All These labels are optional
					'select' => 'Select Images',
					'remove' => 'Remove Images',
					'change' => 'Change Images',
					)
		
		)));
	$agol_about_us->add_setting('agol_about_us_set_con_author_name',array(
	
		'default' => 'Ezaz Ahamed',
		'transport' => 'refresh',
	
	));
	$agol_about_us->add_control('agol_about_us_set_con_author_name',array(
		'label' => 'Add Author Name',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_author_name',
		'type' => 'text',
	
	));
	$agol_about_us->add_setting('agol_about_us_set_con_author_designation',array(
	
		'default' => 'CEO & Founder',
		'transport' => 'refresh',
	
	));
	$agol_about_us->add_control('agol_about_us_set_con_author_designation',array(
		'label' => 'Add Author Designation',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_author_designation',
		'type' => 'text',
	
	));
	$agol_about_us->add_setting('agol_about_us_set_con_signature',array(
		'default' => get_theme_file_uri('images/resource/signature.png'), // Add Default Image URL 
		'sanitize_callback' => 'esc_url_raw',
	
	));
	$agol_about_us->add_control(new WP_Customize_Image_Control( $agol_about_us,'agol_about_us_set_con_signature',array(
		'label' => 'Upload Author Signature Images',
		'section' => 'agol_about_us_set',
		'settings' => 'agol_about_us_set_con_signature',
		'button_labels' => array(// All These labels are optional
					'select' => 'Select Images',
					'remove' => 'Remove Images',
					'change' => 'Change Images',
					)
		
	)));
}
add_action('customize_register','customizer_agol_about_us');



// about us

// // service 
				
// function customizer_agol_service($agol_service){
	
// 	$agol_service->add_panel( 'agol_pn', array(
 
// 		'title' => 'Service Options',
// 		'description' => 'DIWP Options help you to customize your site.',
// 		'priority' => 37,
// 		'capability' => 'edit_theme_options', 
// 		'theme_supports' => '',
// 		'active_callback' => ''
// 	));
// 	$agol_service->add_section('agol_service_set_one',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option One',
// 		'priority' => '20',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_one_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_one_images',array(
// 		'label' => 'Upload Your Service One images',
// 		'section' => 'agol_service_set_one',
// 		'settings' => 'agol_service_set_con_one_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_one_heading',array(
	
// 		'default' => 'Service One',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_one_heading',array(
// 		'label' => 'Add Your Sercvice One heading',
// 		'section' => 'agol_service_set_one',
// 		'settings' => 'agol_service_set_con_one_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_one_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_one_description',array(
// 		'label' => 'Add Your service One Description',
// 		'section' => 'agol_service_set_one',
// 		'settings' => 'agol_service_set_con_one_description',
// 		'type' => 'textarea',
	
// 	));
// 	// TWO
// 	$agol_service->add_section('agol_service_set_two',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option Two',
// 		'priority' => '22',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_two_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_two_images',array(
// 		'label' => 'Upload Your Service Two images',
// 		'section' => 'agol_service_set_two',
// 		'settings' => 'agol_service_set_con_two_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_two_heading',array(
	
// 		'default' => 'Service Two',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_two_heading',array(
// 		'label' => 'Add Your Sercvice Two heading',
// 		'section' => 'agol_service_set_two',
// 		'settings' => 'agol_service_set_con_two_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_two_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_two_description',array(
// 		'label' => 'Add Your service Two Description',
// 		'section' => 'agol_service_set_two',
// 		'settings' => 'agol_service_set_con_two_description',
// 		'type' => 'textarea',
	
// 	));
// 	// three
// 	$agol_service->add_section('agol_service_set_three',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option Three',
// 		'priority' => '23',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_three_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_three_images',array(
// 		'label' => 'Upload Your Service Three images',
// 		'section' => 'agol_service_set_three',
// 		'settings' => 'agol_service_set_con_three_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_three_heading',array(
	
// 		'default' => 'Service Three',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_three_heading',array(
// 		'label' => 'Add Your Sercvice Three heading',
// 		'section' => 'agol_service_set_three',
// 		'settings' => 'agol_service_set_con_three_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_three_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_three_description',array(
// 		'label' => 'Add Your service Three Description',
// 		'section' => 'agol_service_set_three',
// 		'settings' => 'agol_service_set_con_three_description',
// 		'type' => 'textarea',
	
// 	));
// 	// four
// 	$agol_service->add_section('agol_service_set_four',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option Four',
// 		'priority' => '24',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_four_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_four_images',array(
// 		'label' => 'Upload Your Service Four images',
// 		'section' => 'agol_service_set_four',
// 		'settings' => 'agol_service_set_con_four_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_four_heading',array(
	
// 		'default' => 'Service Four',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_four_heading',array(
// 		'label' => 'Add Your Sercvice Four heading',
// 		'section' => 'agol_service_set_four',
// 		'settings' => 'agol_service_set_con_four_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_four_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_four_description',array(
// 		'label' => 'Add Your service Four Description',
// 		'section' => 'agol_service_set_four',
// 		'settings' => 'agol_service_set_con_four_description',
// 		'type' => 'textarea',
	
// 	));
// 	// five
// 	$agol_service->add_section('agol_service_set_five',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option Five',
// 		'priority' => '25',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_five_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_five_images',array(
// 		'label' => 'Upload Your Service Five images',
// 		'section' => 'agol_service_set_five',
// 		'settings' => 'agol_service_set_con_five_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_five_heading',array(
	
// 		'default' => 'Service Five',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_five_heading',array(
// 		'label' => 'Add Your Sercvice Five heading',
// 		'section' => 'agol_service_set_five',
// 		'settings' => 'agol_service_set_con_five_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_five_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_five_description',array(
// 		'label' => 'Add Your service Five Description',
// 		'section' => 'agol_service_set_five',
// 		'settings' => 'agol_service_set_con_five_description',
// 		'type' => 'textarea',
	
// 	));
// 	// six
// 	$agol_service->add_section('agol_service_set_six',array(
		
// 		'panel' => 'agol_pn',
// 		'title' => 'Service Option Six',
// 		'priority' => '25',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_six_images',array(
// 		'default' => get_theme_file_uri('images/resource/service-6.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_service->add_control(new WP_Customize_Image_Control( $agol_service,'agol_service_set_con_six_images',array(
// 		'label' => 'Upload Your Service Six images',
// 		'section' => 'agol_service_set_six',
// 		'settings' => 'agol_service_set_con_six_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
	
// 	$agol_service->add_setting('agol_service_set_con_six_heading',array(
	
// 		'default' => 'Service Six',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_six_heading',array(
// 		'label' => 'Add Your Sercvice Six heading',
// 		'section' => 'agol_service_set_six',
// 		'settings' => 'agol_service_set_con_six_heading',
// 		'type' => 'text',
	
// 	));
// 	$agol_service->add_setting('agol_service_set_con_six_description',array(
	
// 		'default' => 'We provide top-notch service for import and domestic car repairs. Servicing Brakes, Tune Ups, Engine Repairs',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_service->add_control('agol_service_set_con_six_description',array(
// 		'label' => 'Add Your service Six Description',
// 		'section' => 'agol_service_set_six',
// 		'settings' => 'agol_service_set_con_six_description',
// 		'type' => 'textarea',
	
// 	));
	


// }
// add_action('customize_register','customizer_agol_service');

// service 

// video section


// function customizer_agol_Videos($agol_videos){
	
// 	$agol_videos->add_section('agol_videos_set',array(
	
// 		'title' => 'Videos Option',
// 		'priority' => '38',
	
// 	));
// 	$agol_videos->add_setting('agol_videos_set_con_bg',array(
// 		'default' => get_theme_file_uri('images/background/1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_videos->add_control(new WP_Customize_Image_Control( $agol_videos,'agol_videos_set_con_bg',array(
// 		'label' => 'Upload Background Images',
// 		'section' => 'agol_videos_set',
// 		'settings' => 'agol_videos_set_con_bg',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));
// 	$agol_videos->add_setting('agol_videos_set_con_dscription',array(
	
// 		'default' => 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat  nulla pariatur. Excepteur sint occaecat cupidatat Duis aute irure dolor in reprehenderit in voluptate velit esse cillum <br> dolore eu fugiat nulla pariatur..',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_videos->add_control('agol_videos_set_con_dscription',array(
// 		'label' => 'Add Your Description',
// 		'section' => 'agol_videos_set',
// 		'settings' => 'agol_videos_set_con_dscription',
// 		'type' => 'textarea',
	
// 	));
// 	$agol_videos->add_setting('agol_videos_set_con_link',array(
	
// 		'default' => 'https://www.youtube.com/watch?v=kxPCFljwJws',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_videos->add_control('agol_videos_set_con_link',array(
// 		'label' => 'Add Your Youtube Link',
// 		'section' => 'agol_videos_set',
// 		'settings' => 'agol_videos_set_con_link',
// 		'type' => 'text',
	
// 	));
	
	
// }
// add_action('customize_register','customizer_agol_Videos');



// video section
// feature_work
// function customizer_agol_feature_work($agol_feature_work){
// 	$agol_feature_work->add_panel( 'agol_feature_work_pn', array(
 
// 		'title' => 'Feature Work',
// 		'priority' => 39,
// 		'capability' => 'edit_theme_options', 
// 		'theme_supports' => '',
// 		'active_callback' => ''
// 	));
// 	$agol_feature_work->add_section('agol_feature_work_set_one',array(
	
// 		'panel' => 'agol_feature_work_pn',
// 		'title' => 'Feature Work One',
// 		'priority' => '20',
	
// 	));
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_one_images',array(
// 		'default' => get_theme_file_uri('images/resource/feature-1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_feature_work->add_control(new WP_Customize_Image_Control( $agol_feature_work,'agol_feature_work_set_con_one_images',array(
// 		'label' => 'Upload Your Feature Work images One',
// 		'section' => 'agol_feature_work_set_one',
// 		'settings' => 'agol_feature_work_set_con_one_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

// 	$agol_feature_work->add_setting('agol_feature_work_set_con_one_heading',array(
	
// 		'default' => 'The primary benefit of supporting tire is that it allows you to keep driving ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_one_heading',array(
// 		'label' => 'Add Your Feature Work One Heading',
// 		'section' => 'agol_feature_work_set_one',
// 		'settings' => 'agol_feature_work_set_con_one_heading',
// 		'type' => 'text',
	
// 	));
	
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_one_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_one_',array(
// 		'label' => 'Add Your Feature Work One Description',
// 		'section' => 'agol_feature_work_set_one',
// 		'settings' => 'agol_feature_work_set_con_one_description',
// 		'type' => 'textarea',
	
// 	));
// 	// two
// 	$agol_feature_work->add_section('agol_feature_work_set_two',array(
	
// 		'panel' => 'agol_feature_work_pn',
// 		'title' => 'Feature Work Two',
// 		'priority' => '20',
	
// 	));
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_two_images',array(
// 		'default' => get_theme_file_uri('images/resource/feature-1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_feature_work->add_control(new WP_Customize_Image_Control( $agol_feature_work,'agol_feature_work_set_con_two_images',array(
// 		'label' => 'Upload Your Feature Work images Two',
// 		'section' => 'agol_feature_work_set_two',
// 		'settings' => 'agol_feature_work_set_con_two_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

// 	$agol_feature_work->add_setting('agol_feature_work_set_con_two_heading',array(
	
// 		'default' => 'The primary benefit of supporting tire is that it allows you to keep driving ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_two_heading',array(
// 		'label' => 'Add Your Feature Work Two Heading',
// 		'section' => 'agol_feature_work_set_two',
// 		'settings' => 'agol_feature_work_set_con_two_heading',
// 		'type' => 'text',
	
// 	));
	
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_two_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_two_description',array(
// 		'label' => 'Add Your Feature Work Two Description',
// 		'section' => 'agol_feature_work_set_two',
// 		'settings' => 'agol_feature_work_set_con_two_description',
// 		'type' => 'textarea',
	
// 	));
// 	// THREE
// 	$agol_feature_work->add_section('agol_feature_work_set_three',array(
	
// 		'panel' => 'agol_feature_work_pn',
// 		'title' => 'Feature Work Three',
// 		'priority' => '20',
	
// 	));
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_three_images',array(
// 		'default' => get_theme_file_uri('images/resource/feature-1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_feature_work->add_control(new WP_Customize_Image_Control( $agol_feature_work,'agol_feature_work_set_con_three_images',array(
// 		'label' => 'Upload Your Feature Work images Three',
// 		'section' => 'agol_feature_work_set_three',
// 		'settings' => 'agol_feature_work_set_con_three_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

// 	$agol_feature_work->add_setting('agol_feature_work_set_con_three_heading',array(
	
// 		'default' => 'The primary benefit of supporting tire is that it allows you to keep driving ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_three_heading',array(
// 		'label' => 'Add Your Feature Work Three Heading',
// 		'section' => 'agol_feature_work_set_three',
// 		'settings' => 'agol_feature_work_set_con_three_heading',
// 		'type' => 'text',
	
// 	));
	
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_three_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_three_description',array(
// 		'label' => 'Add Your Feature Work Three Description',
// 		'section' => 'agol_feature_work_set_three',
// 		'settings' => 'agol_feature_work_set_con_three_description',
// 		'type' => 'textarea',
	
// 	));
// 	// FOUR
// 	$agol_feature_work->add_section('agol_feature_work_set_four',array(
	
// 		'panel' => 'agol_feature_work_pn',
// 		'title' => 'Feature Work Four',
// 		'priority' => '20',
	
// 	));
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_four_images',array(
// 		'default' => get_theme_file_uri('images/resource/feature-1.jpg'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_feature_work->add_control(new WP_Customize_Image_Control( $agol_feature_work,'agol_feature_work_set_con_four_images',array(
// 		'label' => 'Upload Your Feature Work images Four',
// 		'section' => 'agol_feature_work_set_four',
// 		'settings' => 'agol_feature_work_set_con_four_images',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

// 	$agol_feature_work->add_setting('agol_feature_work_set_con_four_heading',array(
	
// 		'default' => 'The primary benefit of supporting tire is that it allows you to keep driving ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_four_heading',array(
// 		'label' => 'Add Your Feature Work Four Heading',
// 		'section' => 'agol_feature_work_set_four',
// 		'settings' => 'agol_feature_work_set_con_four_heading',
// 		'type' => 'text',
	
// 	));
	
// 	$agol_feature_work->add_setting('agol_feature_work_set_con_four_description',array(
	
// 		'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna Lorem ipsum was purposefully designed to ',
// 		'transport' => 'refresh',
	
// 	));
	
// 	$agol_feature_work->add_control('agol_feature_work_set_con_four_description',array(
// 		'label' => 'Add Your Feature Work Four Description',
// 		'section' => 'agol_feature_work_set_four',
// 		'settings' => 'agol_feature_work_set_con_four_description',
// 		'type' => 'textarea',
	
// 	));
	
	
// }
// add_action('customize_register','customizer_agol_feature_work');
// Feature Work
// brands
// function customizer_agol_brands($agol_brands){
	
// 	$agol_brands->add_section('agol_brands_set',array(
	
// 		'title' => 'Brands Option',
// 		'priority' => '40',
	
// 	));
// 	//one
// 	$agol_brands->add_setting('agol_brands_set_con_one',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_one',array(
// 		'label' => 'Upload brand Images One',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_one',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
// 	// two
// 	$agol_brands->add_setting('agol_brands_set_con_two',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_two',array(
// 		'label' => 'Upload brand Images Two',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_two',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
// 	// three
// 	$agol_brands->add_setting('agol_brands_set_con_three',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_three',array(
// 		'label' => 'Upload brand Images Three',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_three',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)
		
// 	)));

	
// 	// four
// 	$agol_brands->add_setting('agol_brands_set_con_four',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_four',array(
// 		'label' => 'Upload brand Images Four',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_four',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));

// 	// five
// 	$agol_brands->add_setting('agol_brands_set_con_five',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_five',array(
// 		'label' => 'Upload brand Images Five',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_five',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
	
// 	// six
// 	$agol_brands->add_setting('agol_brands_set_con_six',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_six',array(
// 		'label' => 'Upload brand Images Six',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_six',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
// 	// seven
// 	$agol_brands->add_setting('agol_brands_set_con_seven',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_seven',array(
// 		'label' => 'Upload brand Images Seven',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_seven',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
// 	// eight
// 	$agol_brands->add_setting('agol_brands_set_con_eight',array(
// 		'default' => get_theme_file_uri('images/clients/2.png'), // Add Default Image URL 
// 		'sanitize_callback' => 'esc_url_raw',
	
// 	));
// 	$agol_brands->add_control(new WP_Customize_Image_Control( $agol_brands,'agol_brands_set_con_eight',array(
// 		'label' => 'Upload brand Images Eight',
// 		'section' => 'agol_brands_set',
// 		'settings' => 'agol_brands_set_con_eight',
// 		'button_labels' => array(// All These labels are optional
// 					'select' => 'Select Images',
// 					'remove' => 'Remove Images',
// 					'change' => 'Change Images',
// 					)	
// 	)));
	
	
// }
// add_action('customize_register','customizer_agol_brands');
// // brands

?>