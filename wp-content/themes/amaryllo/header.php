<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Amaryllo
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div class="main-wrapper">
		<header class="main-header">
			<div class="container">
				<div class="column-container">
					<div class="column-3-12">
						<div class="logo-container">	
							<?php if ( get_theme_mod('pp_logo_upload') ) { ?>
							   <a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo"><img src="<?php echo esc_url(get_theme_mod('pp_logo_upload')); ?>" /></div></a>
							<?php } else if (get_theme_mod('text_logo_1')){  ?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo"><p><span class="orange"><?php echo esc_html(get_theme_mod('text_logo_1')); ?></span><span class="gray"><?php echo esc_html(get_theme_mod('text_logo_2')); ?></span></p></div></a>
							<?php } else {  ?>
								<a href="<?php echo esc_url(home_url('/')); ?>"><div class="logo"><p><span class="orange"><?php bloginfo('name'); ?></span></p></div></a>
							<?php } ?>
						</div>
					</div>
					<div class="column-9-12">
						<nav class="menu-top-mob-container clearfix">
							<?php if ( has_nav_menu( 'amaryllo-main-menu' ) ) { ?>
							   <?php wp_nav_menu( array('container'=> '', 'theme_location' => 'amaryllo-main-menu', 'items_wrap'  => '<ul class="header-menu">%3$s</ul>'  ) ); ?>
							<?php } else { ?>
                                 <?php wp_nav_menu(  array('container'=> '', 'menu_class'  => 'header-menu', 'items_wrap'  => '<ul class="header-menu">%3$s</ul>' ) ); ?>								
							<?php } ?>
							<a href="#" class="icon-menu fa"></a>
						</nav>
					</div>
				</div>
			</div>
		</header>
