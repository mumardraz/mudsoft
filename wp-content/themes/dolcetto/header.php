<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Dolcetto
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta id="myViewport" name="viewport" content="width=device-width,initial-scale=1">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="page-blog">
        <header>
            <div class="menu-logo">
                <div class="wrapper">
                    <?php
                    if ( has_custom_logo() ) { dolcetto_the_custom_logo(); }
                    else{
                    ?>  
                    <div class="logotitle">
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <h3><?php echo bloginfo('name');?></h3>
                        </a>
                        <span><?php echo get_bloginfo('description');?></span>
                    </div>
                    <?php } ?>
                    <nav class="menu-mobile">
                        <a class="mobile-click" href="#"></a>
					   <?php if ( has_nav_menu( 'dolcetto-main-menu' ) ) { ?>
						  <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'dolcetto-main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
					   <?php } else { ?>
						  <?php wp_nav_menu(  array( 'menu_class'  => 'menu-top') ); ?>	
					   <?php } ?>	
                    </nav>
                    <nav class="menu-top-container">
					   <?php if ( has_nav_menu( 'dolcetto-main-menu' ) ) { ?>
						  <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'dolcetto-main-menu', 'items_wrap'  => '<ul class="menu-top">%3$s</ul>'  ) ); ?>
					   <?php } else { ?>
						  <?php wp_nav_menu(  array( 'menu_class'  => 'menu-top') ); ?>	
					   <?php } ?>
                    </nav>
                </div>
            </div>
        </header>