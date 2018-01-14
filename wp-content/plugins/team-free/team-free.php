<?php
/*
Plugin Name: Team
Description: Team Free is a powerful WordPress Team plugin that helps you to showcase your team member and personnel beautifully.
Plugin URI: http://shapedplugin.com/plugin/team-pro
Author: ShapedPlugin
Author URI: http://shapedplugin.com
Version: 1.0.2
*/


/* Define */
define( 'SP_TEAM_FREE_URL', plugins_url('/') . plugin_basename( dirname( __FILE__ ) ) . '/' );
define( 'SP_TEAM_FREE_PATH', plugin_dir_path( __FILE__ ) );

if ( in_array( 'team-pro/team-pro.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {} else {
	/* Including files */
	if(file_exists( SP_TEAM_FREE_PATH . 'inc/functions.php')){
		require_once(SP_TEAM_FREE_PATH . "inc/functions.php");
	}
}
if(file_exists( SP_TEAM_FREE_PATH . 'inc/scripts.php')){
	require_once(SP_TEAM_FREE_PATH . "inc/scripts.php");
}
if(file_exists( SP_TEAM_FREE_PATH . 'inc/shortcodes.php')){
	require_once(SP_TEAM_FREE_PATH . "inc/shortcodes.php");
}

/* Plugin Action Links */
function sp_team_free_action_links( $links ) {
	$links[] = '<a href="https://shapedplugin.com/plugin/team-pro" target="_blank" style="color: red; font-weight: 600;">Go
Pro!</a>';

	return $links;
}
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'sp_team_free_action_links' );

// Redirect after active
function sp_team_free_active_redirect( $plugin ) {
	if ( $plugin == plugin_basename( __FILE__ ) ) {
		exit( wp_redirect( admin_url() ) );
	}
}
add_action( 'activated_plugin', 'sp_team_free_active_redirect',  10, 2);

function sp_team_free_activate() {
	add_option( 'sp_team_free_activation_redirect', true );
}
register_activation_hook( __FILE__, 'sp_team_free_activate' );

function sp_team_free_redirect() {
	if ( get_option( 'sp_team_free_activation_redirect', false ) ) {
		delete_option( 'sp_team_free_activation_redirect' );
		if ( ! isset( $_GET['activate-multi'] ) ) {
			wp_redirect( "edit.php?post_type=team_free&page=sp_team_free_support_page" );
		}
	}
}
add_action( 'admin_init', 'sp_team_free_redirect' );