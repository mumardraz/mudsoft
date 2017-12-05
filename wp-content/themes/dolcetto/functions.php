<?php
/**
 * Dolcetto functions and definitions
 *
 * @package Dolcetto
 */
/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
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

function dolcetto_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dolcetto_content_width', 1135 );
}
add_action( 'after_setup_theme', 'dolcetto_content_width', 0 );

/**
 * Theme support and thumbnail sizes
 */

if( ! function_exists( 'dolcetto_theme_setup' ) ) {

    function dolcetto_theme_setup() {

        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on BuildPress, use a find and replace
         */

        load_theme_textdomain( 'dolcetto', get_template_directory() . '/lang' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );
		
		// Add default title support
		add_theme_support( 'title-tag' ); 

		// Add default logo support		
        add_theme_support( 'custom-logo' );		

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
        add_image_size( 'dolcetto-image-small', 300, 200, true );
        add_image_size( 'dolcetto-image-mediu', 500, 300, true );
        add_image_size( 'dolcetto-image-big', 800, 400, true );		
		add_image_size( 'dolcetto-image-slider', 2000, 600, true );	

        // Menus
        add_theme_support( 'menus' );
        register_nav_menu( 'dolcetto-main-menu', _x( 'Main Menu', 'backend', 'dolcetto' ) );

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
    add_action( 'after_setup_theme', 'dolcetto_theme_setup' );
}


/**
 * Enqueue CSS stylesheets
 */

if( ! function_exists( 'dolcetto_enqueue_styles' ) ) {
    function dolcetto_enqueue_styles() {

        // main style
        wp_enqueue_style( 'dolcetto-style', get_stylesheet_uri() );

        // owl theme
        wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', array(), '1.0' );

        // owl carousel
        wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.css', array(), '1.0' );
		
		// owl transitions
		wp_enqueue_style( 'owl-transitions', get_template_directory_uri() . '/assets/css/owl.transitions.css', array(), '1.0' );		

        // fontello
        wp_enqueue_style( 'font-fontello', get_template_directory_uri() . '/assets/css/fonts/fontello/css/fontello.css', array(), '1.0' );

        // fontello
        wp_enqueue_style( 'animation', get_template_directory_uri() . '/assets/css/fonts/fontello/css/animation.css', array(), '1.0' );

        // responsive
        wp_enqueue_style( 'dolcetto-responsive-main', get_template_directory_uri() . '/assets/css/responsive.css', array(), '1.0' );

    }
    add_action( 'wp_enqueue_scripts', 'dolcetto_enqueue_styles' );
}

/**
 * Enqueue JS scripts
 */

if( ! function_exists( 'dolcetto_enqueue_scripts' ) ) {
    function dolcetto_enqueue_scripts() {

        // OWL carousel for sliders
        wp_enqueue_script( 'carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array('jquery'), null );

        // main for script js
        wp_enqueue_script( 'dolcetto-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null );


        // for nested comments
        if ( is_singular() && comments_open() ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'dolcetto_enqueue_scripts' );
}

if ( ! function_exists( 'dolcetto_the_custom_logo' ) ) :
/**
 * Displays custom logo.
 */
function dolcetto_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;


// load script for  IE9

function dolcetto_ie_support_header() {
    echo '<!--[if lt IE 9]>'. "\n";
    echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/html5.js' ) . '"></script>'. "\n";
    echo '<![endif]-->'. "\n";
}

add_action( 'wp_head', 'dolcetto_ie_support_header', 1 );


/**
 * Register sidebars for Docletto
 *
 * @package Docletto
 */

function dolcetto_sidebars() {

    // Blog Sidebar

    register_sidebar(array(
        'name' => __( 'Blog Sidebar', "dolcetto"),
        'id' => 'blog-sidebar',
        'description' => __( 'Sidebar on the blog layout.', "dolcetto"),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));

    // Footer Sidebar

    register_sidebar(array(
        'name' => __( 'Footer Widget Area', "dolcetto"),
        'id' => 'footer-widget-area',
        'description' => __( 'The footer widget area', "dolcetto"),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'
    ));
}

add_action( 'widgets_init', 'dolcetto_sidebars' );


// Create Function Credits

if ( ! function_exists( 'dolcetto_credits' ) ) :
	function dolcetto_credits() {
		
		$text = sprintf( __('Theme created by <a href="%s">ThemesTune</a>. Powered by <a href="%s">WordPress.org</a>', 'dolcetto'), esc_url('http://www.themestune.com'), esc_url('http://wordpress.org/'));
		
		echo apply_filters( 'dolcetto_credits_text', $text) ;
	}
endif; 

add_action( 'dolcetto_display_credits', 'dolcetto_credits' );
?>