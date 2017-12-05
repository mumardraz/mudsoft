<?php
/**
 * Amaryllo functions and definitions
 *
 * @package Amaryllo
 */
/*
 * Loads the Options Panel
 *
 */

/*----------------------------*/
/*	Adding customizer with kirki 
/*----------------------------*/ 
include_once( trailingslashit(get_template_directory()) . '/lib/customizer.php' );
include_once( trailingslashit(get_template_directory()) . '/lib/kirki/kirki.php' );
 
/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @see http://developer.wordpress.com/themes/content-width/Enqueue
 */
 
if ( ! isset( $content_width ) ) {
	$content_width = 1135; /* pixels */
}

/**
 * Theme support and thumbnail sizes
*/
 
if( ! function_exists( 'amaryllo_theme_setup' ) ) {

	function amaryllo_theme_setup() {
	
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on BuildPress, use a find and replace
		 */
		 
		load_theme_textdomain( 'amaryllo', get_template_directory() . '/lang' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 			

		// Custom Backgrounds
		add_theme_support( 'custom-background', array(
			'default-color' => 'ffffff',
		) );

		/**
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		 
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 150, 150, true );
		add_image_size( 'amaryllo-news-box', 335, 219, true );
		add_image_size( 'amaryllo-portfolio-box', 360, 230, true );

		// Menus
		add_theme_support( 'menus' );
		register_nav_menu( 'amaryllo-main-menu', _x( 'Main Menu', 'backend', 'amaryllo' ) );

		// Add theme support for Semantic Markup
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption'
		) );

		// add excerpt support for pages
		add_post_type_support( 'page', 'excerpt' );

		// Add CSS for the TinyMCE editor
		add_editor_style();
	}
	add_action( 'after_setup_theme', 'amaryllo_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */
 
if( ! function_exists( 'amaryllo_enqueue_styles' ) ) {
	function amaryllo_enqueue_styles() {
	
	    // main style
	
	    wp_enqueue_style( 'amaryllo-style', get_stylesheet_uri() );

		// owl theme
		wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0' );
		
		// owl carousel
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );
		
		// font awesome
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.css', array(), '1.0' );
		
		// responsive
		wp_enqueue_style( 'amaryllo-responsive-main', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' ); 

	}
	add_action( 'wp_enqueue_scripts', 'amaryllo_enqueue_styles' );
}


/**
 * Enqueue JS scripts
 */
 
if( ! function_exists( 'amaryllo_enqueue_scripts' ) ) {
	function amaryllo_enqueue_scripts() {
		
		// OWL carousel for sliders
		wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null );			
		
		// main for script js
		wp_enqueue_script( 'amaryllo-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );			
		
	
		// for nested comments
		if ( is_singular() && comments_open() ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
	add_action( 'wp_enqueue_scripts', 'amaryllo_enqueue_scripts' );
}

/**
 * Register sidebars for Amaryllo
 *
 * @package Amaryllo
 */

function amaryllo_sidebars() {

	// Blog Sidebar
	
	register_sidebar(array(
		'name' => __( 'Blog Sidebar', "amaryllo"),
		'id' => 'blog-sidebar',
		'description' => __( 'Sidebar on the blog layout.', "amaryllo"),
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
	
	// Footer Sidebar
	
	register_sidebar(array(
		'name' => __( 'Footer Widget Area', "amaryllo"),
		'id' => 'footer-widget-area',
		'description' => __( 'The footer widget area', "amaryllo"),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
	));	
}

add_action( 'widgets_init', 'amaryllo_sidebars' );

// Create Function Paginate

if ( ! function_exists( 'amaryllo_paginate_page' ) ) :
	function amaryllo_paginate_page() {
	
		wp_link_pages( array( 'before' => '<div class="pagination">', 'after' => '</div><div class="clear"></div>', 'link_before' => '<span class="current_pag">','link_after' => '</span>' ) );
		
	}
endif; 

// Create Function Credits

if ( ! function_exists( 'amaryllo_credits' ) ) :

function amaryllo_credits() {
		
		$text = sprintf( __('Theme created by <a href="%s">ThemesTune</a>. Powered by <a href="%s">WordPress.org</a>', 'amaryllo'), esc_url('http://www.themestune.com'), esc_url('http://wordpress.org/')); 		
		
		echo apply_filters( 'amaryllo_credits_text', $text) ;
		
}
endif; 

add_action( 'amaryllo_display_credits', 'amaryllo_credits' );
?>