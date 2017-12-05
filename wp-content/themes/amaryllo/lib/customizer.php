<?php

function amaryllo_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'amaryllo' ),
        'background-image' => __( 'Background Image', 'amaryllo' ),
        'no-repeat' => __( 'No Repeat', 'amaryllo' ),
        'repeat-all' => __( 'Repeat All', 'amaryllo' ),
        'repeat-x' => __( 'Repeat Horizontally', 'amaryllo' ),
        'repeat-y' => __( 'Repeat Vertically', 'amaryllo' ),
        'inherit' => __( 'Inherit', 'amaryllo' ),
        'background-repeat' => __( 'Background Repeat', 'amaryllo' ),
        'cover' => __( 'Cover', 'amaryllo' ),
        'contain' => __( 'Contain', 'amaryllo' ),
        'background-size' => __( 'Background Size', 'amaryllo' ),
        'fixed' => __( 'Fixed', 'amaryllo' ),
        'scroll' => __( 'Scroll', 'amaryllo' ),
        'background-attachment' => __( 'Background Attachment', 'amaryllo' ),
        'left-top' => __( 'Left Top', 'amaryllo' ),
        'left-center' => __( 'Left Center', 'amaryllo' ),
        'left-bottom' => __( 'Left Bottom', 'amaryllo' ),
        'right-top' => __( 'Right Top', 'amaryllo' ),
        'right-center' => __( 'Right Center', 'amaryllo' ),
        'right-bottom' => __( 'Right Bottom', 'amaryllo' ),
        'center-top' => __( 'Center Top', 'amaryllo' ),
        'center-center' => __( 'Center Center', 'amaryllo' ),
        'center-bottom' => __( 'Center Bottom', 'amaryllo' ),
        'background-position' => __( 'Background Position', 'amaryllo' ),
        'background-opacity' => __( 'Background Opacity', 'amaryllo' ),
        'ON' => __( 'ON', 'amaryllo' ),
        'OFF' => __( 'OFF', 'amaryllo' ),
        'all' => __( 'All', 'amaryllo' ),
        'cyrillic' => __( 'Cyrillic', 'amaryllo' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'amaryllo' ),
        'devanagari' => __( 'Devanagari', 'amaryllo' ),
        'greek' => __( 'Greek', 'amaryllo' ),
        'greek-ext' => __( 'Greek Extended', 'amaryllo' ),
        'khmer' => __( 'Khmer', 'amaryllo' ),
        'latin' => __( 'Latin', 'amaryllo' ),
        'latin-ext' => __( 'Latin Extended', 'amaryllo' ),
        'vietnamese' => __( 'Vietnamese', 'amaryllo' ),
        'serif' => _x( 'Serif', 'font style', 'amaryllo' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'amaryllo' ),
        'monospace' => _x( 'Monospace', 'font style', 'amaryllo' ),
    );	

	$args = array(
  
        // Change the logo image. (URL) Point this to the path of the logo file in your theme directory
        // The developer recommends an image size of about 250 x 250
        
		'logo_image'   => get_template_directory_uri() . '/assets/images/logo.png',
  
        // The color of active menu items, help bullets etc.
        'color_active' => '#95c837',
		
		// Color used on slider controls and image selects
		'color_accent' => '#e7e7e7',
	
        // Color used for secondary elements and desable/inactive controls
        'color_light'  => '#e7e7e7',
  
        // Color used for button-set controls and other elements
        'color_select' => '#34495e',
		 
        // For the parameter here, use the handle of your stylesheet you use in wp_enqueue
        'stylesheet_id' => 'customize-styles', 
		
        // Only use this if you are bundling the plugin with your theme (see above)
        'url_path'     => get_template_directory_uri() . '/lib/kirki/',

        'textdomain'   => 'amaryllo',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'amaryllo_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'amaryllo_add_panels_and_sections' ); 
function amaryllo_add_panels_and_sections( $wp_customize ) {

	//Add panels

	$wp_customize->add_panel('slider',               array( 'title' => __( 'Slider', 'amaryllo' ),                  'description' => __( 'Information here is demo, to display live on your website, please enter your information', 'amaryllo' ),          'priority' => 140));
	$wp_customize->add_panel('boxhomepage',          array( 'title' => __( 'Box Home Page', 'amaryllo' ),           'description' => __( 'Information here is demo, to display live on your website, please enter your information', 'amaryllo' ),          'priority' => 140));
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'amaryllo'),            'description' => '',    'priority' => 130,));
	$wp_customize->add_section('promo',     array('title' => __('About Amaryllo Theme', 'amaryllo'),          'description' => '',    'priority' => 170,));
	
	// slider sections
	$wp_customize->add_section('slide',              array('title' => __('Slide Options', 'amaryllo'),              'description' => '',             'panel' => 'slider',		'priority' => 140,));		
	$wp_customize->add_section('slide1',              array('title' => __('Slide 1', 'amaryllo'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	$wp_customize->add_section('slide2',              array('title' => __('Slide 2', 'amaryllo'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	
	// boxhomepage sections

	$wp_customize->add_section('boxhomepage1',              array('title' => __('Home Box 1', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage2',              array('title' => __('Home Box 2', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage3',              array('title' => __('Home Box 3', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage4',              array('title' => __('Home Box 4', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage5',              array('title' => __('Home Box 5', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	$wp_customize->add_section('boxhomepage6',              array('title' => __('Home Box 6', 'amaryllo'),                   'description' => '',             'panel' => 'boxhomepage',		'priority' => 140,));
	
}


function amaryllo_custom_setting( $controls ) {

      $titlemess = __('Welcome To Amaryllo Theme', 'amaryllo' );
      $copyrights = sprintf( __('Copyright &copy; 2015 %s All Rights Reserved.', 'amaryllo'), get_bloginfo('name') );	  
	  $defaulttext = __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet dui lectus, non lacinia augue cursus Pellentesque molestie tincidunt scelerisque. Nunc rhoncus diam eget enim euismod, sed viverra mi venenatis.', 'amaryllo');
	  $infofont = __( 'Select a icons in this list http://fortawesome.github.io/Font-Awesome/icons/ and enter the code', "amaryllo");
      $buttontext = __('Read More', 'amaryllo' );
    
	// General Settings	 
	 
	  $controls[] = array('label' => __('Upload logo', "amaryllo"),              'setting' => 'pp_logo_upload',               'type' => 'upload',        'description' => '',                                                'default' => '',                                   'section'     => 'general');	 
	  $controls[] = array('label' => __('Text Logo 1', "amaryllo"),              'setting' => 'text_logo_1',                  'type' => 'text',          'description' => __( 'Add text color for logo', "amaryllo"),        'default' => __( '', "amaryllo"),                  'section'     => 'general');
	  $controls[] = array('label' => __('Text Logo 2', "amaryllo"),              'setting' => 'text_logo_2',                  'type' => 'text',          'description' => __( 'Add text black for logo', "amaryllo"),        'default' => __( '', "amaryllo"),                  'section'     => 'general');	
	  $controls[] = array('label' => __('Copyrights text', "amaryllo"),          'setting' => 'pp_copyrights',                'type' => 'text',          'description' => __( 'Text in footer left', "amaryllo"),            'default' => $copyrights,                          'section'     => 'general');  
	  $controls[] = array('label' => __('Blog Header Title', "amaryllo"),        'setting' => 'blog_header_title',            'type' => 'text',          'description' => __( '', "amaryllo"),            'default' => __( 'Our Blog', "amaryllo"),                             'section'     => 'general');  
	  $controls[] = array('label' => __('Blog Header Image', "amaryllo"),        'setting' => 'blog_header_image',            'type' => 'upload',        'description' => '',                                                 'default' => '',                                  'section'     => 'general');  

     // Home Box 

	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_1',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage1');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_1',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage1');  
 	 
	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_2',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage2');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_2',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage2');  
 	 
	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_3',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage3');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_3',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage3');  
 	 
	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_4',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage4');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_4',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage4');  
 	 
	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_5',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage5');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_5',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage5');  
 	  
	  $controls[] = array('label' => __('Select Page', "amaryllo"),              'setting' => 'circles_box_page_6',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section'     => 'boxhomepage6');	
	  $controls[] = array('label' => __('Box Icon', "amaryllo"),                 'setting' => 'circles_box_image_6',          'type' => 'text',                    'description' => $infofont,     'default' => 'location-arrow',            'section'     => 'boxhomepage6');  
 
	  

     // Slide 1

	 $controls[] = array('label' => __('Background Slider', "amaryllo"),        'setting' => 'background_slider',                  'type' => 'upload',            'description' => '',       'default' => '',                 'section'     => 'slide');	 

	 $controls[] = array('label' => __('Select Page Content For Slider', 'amaryllo'),      'setting' => 'slider_content_1',        'type' => 'dropdown-pages',    'default' => '0',    'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section' => 'slide1',             'description' => ''); 
	 $controls[] = array('label' => __('Button Text', "amaryllo"),                         'setting' => 'slider_button_text_1',    'type' => 'text',              'description' => '',     'default' => 'Read More',            'section'     => 'slide1');  
 

	 $controls[] = array('label' => __('Select Page Content For Slider', 'amaryllo'),      'setting' => 'slider_content_2',          'type' => 'dropdown-pages',              'default' => '0',    'sanitize_callback'	=> 'amaryllo_sanitize_integer',   'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Button Text', "amaryllo"),                         'setting' => 'slider_button_text_2',    'type' => 'text',              'description' => '',     'default' => 'Read More',            'section'     => 'slide2');  	 

   // Promo
	 $controls[] = array('label' => __( 'Amaryllo Promo', 'amaryllo' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'amaryllo_custom_setting' );

// Sanitize Integer

function amaryllo_sanitize_integer( $input ) {
	
    if( is_numeric( $input ) ) {  return intval( $input ); }
	
}
