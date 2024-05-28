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

















?>