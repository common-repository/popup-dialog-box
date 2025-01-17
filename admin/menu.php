<?php
if ( ! defined( 'ABSPATH' ) ) exit;
	add_action('admin_menu', 'dbx_menu');
function dbx_menu()
{
    add_menu_page('Popup Dialog Box Settings', 'XYZ Popup Dialog Box', 'manage_options', 'popup-dialog-box-settings', 'dbx_settings',plugin_dir_url(XYZ_DBX_PLUGIN_FILE).'images/popup-dialog-box.png');
	// Add a submenu to the Dashboard:
	$page=add_submenu_page('popup-dialog-box-settings', 'Popup Dialog Box Settings', 'Popup Dialog Box', 'manage_options', 'popup-dialog-box-settings' ,'dbx_settings'); // 8 for admin
	add_submenu_page('popup-dialog-box-settings', 'Popup Dialog Box - Basic Settings', 'Basic Settings', 'manage_options', 'popup-dialog-box-basic-settings' ,'dbx_basic_settings'); // 8 for admin
	add_submenu_page('popup-dialog-box-settings', 'Popup Dialog Box - About', 'About', 'manage_options', 'popup-dialog-box-about' ,'dbx_about'); // 8 for admin
	add_action( "admin_print_scripts-$page", 'dbx_farbtastic_script' );
	add_action( "admin_print_styles-$page", 'dbx_farbtastic_style' );
}
function dbx_basic_settings()
{
	require( dirname( __FILE__ ) . '/header.php' );
	require( dirname( __FILE__ ) . '/settings.php' );
	require( dirname( __FILE__ ) . '/footer.php' );
}
function dbx_settings()
{
	
	require( dirname( __FILE__ ) . '/header.php' );
	require( dirname( __FILE__ ) . '/dialogbox-settings.php' );
	require( dirname( __FILE__ ) . '/footer.php' );
}
function dbx_about()
{
	require( dirname( __FILE__ ) . '/header.php' );
	require( dirname( __FILE__ ) . '/about.php' );
	require( dirname( __FILE__ ) . '/footer.php' );
}
function dbx_farbtastic_script() 
{
	wp_enqueue_script('jquery');
	wp_enqueue_script('farbtastic');

}
function dbx_farbtastic_style() 
{
	wp_enqueue_style('farbtastic');
}
function xyz_dbx_admin_style()
{
	//require( dirname( __FILE__ ) . '/style.php' );
	wp_enqueue_script('jquery');
	wp_register_style('xyz_dbx_style', plugins_url('popup-dialog-box/css/style.css'));
	wp_enqueue_style('xyz_dbx_style');
	wp_register_script( 'xyz_notice_script_dbx', plugins_url('popup-dialog-box/js/notice.js') );
	wp_enqueue_script( 'xyz_notice_script_dbx' );
}
add_action('admin_enqueue_scripts', 'xyz_dbx_admin_style');
?>