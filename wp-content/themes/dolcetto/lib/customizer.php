<?php

function dolcetto_customizer_config() {
	
    $url  = get_stylesheet_directory_uri() . '/lib/kirki/';

    /**
     * If you need to include Kirki in your theme,
     * then you may want to consider adding the translations here
     * using your textdomain.
     * 
     * If you're using Kirki as a plugin then you can remove these.
     */

    $strings = array(
        'background-color' => __( 'Background Color', 'dolcetto' ),
        'background-image' => __( 'Background Image', 'dolcetto' ),
        'no-repeat' => __( 'No Repeat', 'dolcetto' ),
        'repeat-all' => __( 'Repeat All', 'dolcetto' ),
        'repeat-x' => __( 'Repeat Horizontally', 'dolcetto' ),
        'repeat-y' => __( 'Repeat Vertically', 'dolcetto' ),
        'inherit' => __( 'Inherit', 'dolcetto' ),
        'background-repeat' => __( 'Background Repeat', 'dolcetto' ),
        'cover' => __( 'Cover', 'dolcetto' ),
        'contain' => __( 'Contain', 'dolcetto' ),
        'background-size' => __( 'Background Size', 'dolcetto' ),
        'fixed' => __( 'Fixed', 'dolcetto' ),
        'scroll' => __( 'Scroll', 'dolcetto' ),
        'background-attachment' => __( 'Background Attachment', 'dolcetto' ),
        'left-top' => __( 'Left Top', 'dolcetto' ),
        'left-center' => __( 'Left Center', 'dolcetto' ),
        'left-bottom' => __( 'Left Bottom', 'dolcetto' ),
        'right-top' => __( 'Right Top', 'dolcetto' ),
        'right-center' => __( 'Right Center', 'dolcetto' ),
        'right-bottom' => __( 'Right Bottom', 'dolcetto' ),
        'center-top' => __( 'Center Top', 'dolcetto' ),
        'center-center' => __( 'Center Center', 'dolcetto' ),
        'center-bottom' => __( 'Center Bottom', 'dolcetto' ),
        'background-position' => __( 'Background Position', 'dolcetto' ),
        'background-opacity' => __( 'Background Opacity', 'dolcetto' ),
        'ON' => __( 'ON', 'dolcetto' ),
        'OFF' => __( 'OFF', 'dolcetto' ),
        'all' => __( 'All', 'dolcetto' ),
        'cyrillic' => __( 'Cyrillic', 'dolcetto' ),
        'cyrillic-ext' => __( 'Cyrillic Extended', 'dolcetto' ),
        'devanagari' => __( 'Devanagari', 'dolcetto' ),
        'greek' => __( 'Greek', 'dolcetto' ),
        'greek-ext' => __( 'Greek Extended', 'dolcetto' ),
        'khmer' => __( 'Khmer', 'dolcetto' ),
        'latin' => __( 'Latin', 'dolcetto' ),
        'latin-ext' => __( 'Latin Extended', 'dolcetto' ),
        'vietnamese' => __( 'Vietnamese', 'dolcetto' ),
        'serif' => _x( 'Serif', 'font style', 'dolcetto' ),
        'sans-serif' => _x( 'Sans Serif', 'font style', 'dolcetto' ),
        'monospace' => _x( 'Monospace', 'font style', 'dolcetto' ),
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

        'textdomain'   => 'dolcetto',
		
        'i18n'         => $strings,		
	);
	return $args;
}
add_filter( 'kirki/config', 'dolcetto_customizer_config' );


/**
 * Create the customizer panels and sections
 */
add_action( 'customize_register', 'dolcetto_add_panels_and_sections' ); 
function dolcetto_add_panels_and_sections( $wp_customize ) {

	//Add panels

	$wp_customize->add_panel('slider',               array( 'title' => __( 'Slider', 'dolcetto' ),                  'description' => __( 'Slides details', 'dolcetto' ),          'priority' => 140));
	$wp_customize->add_panel('wub',                  array( 'title' => __( 'Why us Box', 'dolcetto' ),               'description' => '',                                         'priority' => 180));	
	
	
	
	
    // Add Sections
	
    $wp_customize->add_section('general',   array('title' => __('General Settings', 'dolcetto'),            'description' => '',    'priority' => 130,));
    $wp_customize->add_section('homebox',   array('title' => __('Home Box', 'dolcetto'),                    'description' => '',    'priority' => 130,));	
	$wp_customize->add_section('promo',     array('title' => __('About Dolcetto Theme', 'dolcetto'),          'description' => '',    'priority' => 170,));
	
	// slider sections
		
	$wp_customize->add_section('slide1',              array('title' => __('Slide 1', 'dolcetto'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	$wp_customize->add_section('slide2',              array('title' => __('Slide 2', 'dolcetto'),                   'description' => '',             'panel' => 'slider',		'priority' => 140,));
	
}


function dolcetto_custom_setting( $controls ) {

	  $infofont = __( 'Select a icons in this list http://fontello.com/ and enter the code', "dolcetto");
     // General Settings	 
	 
	  $controls[] = array('label' => __('Copyrights text', "dolcetto"),                 'setting' => 'copyrights',            'type' => 'text',            'description' => '',            'default' => '',                    'section'     => 'general');  
	  $controls[] = array('label' => __('Title Blog Page', "dolcetto"),                 'setting' => 'title_blog_page',       'type' => 'text',            'description' => '',                                                'default' => 'Our Blog',                   'section'     => 'general');	 
	  $controls[] = array('label' => __('BG Image Blog', "dolcetto"),                   'setting' => 'bg_image_blog',         'type' => 'upload',          'description' => '',                                                'default' => '',                           'section'     => 'general');	 

     // Home Box 
	 
	  $controls[] = array('label' => __('Home Message Text', "dolcetto"),               'setting' => 'home_message_textarea',        'type' => 'textarea',      'description' => '',     'default' => '',     'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Home Message Text Button', "dolcetto"),        'setting' => 'home_message_title',           'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Home Message Link Button', "dolcetto"),        'setting' => 'home_message_link',            'type' => 'text',          'description' => '',     'default' => '',     'section'     => 'homebox');	 

	  $controls[] = array('label' => __('Why us Title', "dolcetto"),                    'setting' => 'wut',             'type' => 'text',         'description' => '',     'default' => __( 'Why us!', "dolcetto"),     'section'     => 'homebox');	 
	  $controls[] = array('label' => __('Why us Content', "dolcetto"),                  'setting' => 'wuc',             'type' => 'textarea',      'description' => '',     'default' => __( 'Do You Like What You See? View All Of Our Work', "dolcetto"),     'section'     => 'homebox');	 
	  
	  $controls[] = array('label' => __('Select Page', "dolcetto"),              		'setting' => 'circles_box_page_1',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Icon', "dolcetto"),               		    'setting' => 'circles_box_image_1',          'type' => 'text',                    'description' => $infofont,     'default' => 'graduation-cap',            'section'     => 'homebox');  
 	 
	  $controls[] = array('label' => __('Select Page', "dolcetto"),              		'setting' => 'circles_box_page_2',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Icon', "dolcetto"),                 		'setting' => 'circles_box_image_2',          'type' => 'text',                    'description' => $infofont,     'default' => 'codeopen',            'section'     => 'homebox');  
 	 
	  $controls[] = array('label' => __('Select Page', "dolcetto"),              		'setting' => 'circles_box_page_3',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Icon', "dolcetto"),                 		'setting' => 'circles_box_image_3',          'type' => 'text',                    'description' => $infofont,     'default' => 'desktop',            'section'     => 'homebox');  
 	 
	  $controls[] = array('label' => __('Select Page', "dolcetto"),              		'setting' => 'circles_box_page_4',           'type' => 'dropdown-pages',          'description' => '',            'default' => '0',                         'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section'     => 'homebox');	
	  $controls[] = array('label' => __('Box Icon', "dolcetto"),                 		'setting' => 'circles_box_image_4',          'type' => 'text',                    'description' => $infofont,     'default' => 'file-code',            'section'     => 'homebox');  
 	 	  
     // Slide 1
	 
	 $controls[] = array('label' => __('Select Page Content For Slider', 'dolcetto'),      'setting' => 'slider_content_1',        	 'type' => 'dropdown-pages',    	  'default' => 0,    'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section' => 'slide1',             'description' => ''); 
	 $controls[] = array('label' => __('Button Text', "dolcetto"),                         'setting' => 'slider_button_text_1',   	 'type' => 'text',                    'description' => '',     'default' => 'Read More',            'section'     => 'slide1');  
 

	 $controls[] = array('label' => __('Select Page Content For Slider', 'dolcetto'),      'setting' => 'slider_content_2',          'type' => 'dropdown-pages',          'default' => 0,    'sanitize_callback'	=> 'dolcetto_sanitize_integer',   'section' => 'slide2',             'description' => '');
	 $controls[] = array('label' => __('Button Text', "dolcetto"),                         'setting' => 'slider_button_text_2',      'type' => 'text',                    'description' => '',     'default' => 'Read More',            'section'     => 'slide2');  	 


	// Promo
	 $controls[] = array('label' => __( 'Dolcetto Promo', 'dolcetto' ),                   'setting' => 'custompromo',              'type' => 'promo',                                                                         'section' => 'promo',              'priority' => 10);
	 	
     return $controls;
}
add_filter( 'kirki/controls', 'dolcetto_custom_setting' );

function dolcetto_sanitize_integer( $input ) {
	
    if( is_numeric( $input ) ) {  return intval( $input ); }
	
}

