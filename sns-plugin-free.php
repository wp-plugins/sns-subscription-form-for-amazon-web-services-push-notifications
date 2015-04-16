<?php
/*
 * Plugin Name: SNS Plugin FREE Subscription Form
 * Author: Party Plugins
 *Version: 1.0
 * Author URL: http://www.snsplugin.com
 * Plugin Url: http://www.snsplugin.com
 * Description: Use this SNS Plugin form with Amazon's Simple Notification Service to keep in touch with customers easily. Send up to 1,000 email notifications and 100 SMS Text notifications every month absolutely FREE. By Party Plugins
 */

add_option("hvk_amazon_key", "");
add_option("hvk_amazon_secret", "");
add_option("hvk_branding", "no");
function plugin_settings_link($links) {
	$settings_link = '<a href="options-general.php?page=hvk_sns_free_settings">Settings</a>';
	array_unshift($links, $settings_link);
	return $links;
}

$plugin = plugin_basename(__FILE__);
add_filter("plugin_action_links_$plugin", 'plugin_settings_link');

function wpb_adding_scripts() {
	wp_register_script('hvk-form-script', plugins_url('script.js', __FILE__), array("jquery"), '1.0', true);
	wp_enqueue_script('hvk-form-script');
}
add_action('wp_enqueue_scripts', 'wpb_adding_scripts');

add_action('admin_menu', 'hvk_settings_menu');
function hvk_settings_menu() {
	add_options_page('SNS Plugin Settings', 'SNS Plugin Settings', 'manage_options', 'hvk_sns_free_settings', 'settings_page');
}
if (get_option("hvk_amazon_key") != "" && get_option("hvk_amazon_secret") != "") {
	add_action('admin_menu', 'hvk_sns_menu');
}
function form_styles() {
	wp_enqueue_style('hvk_form_styles', plugins_url('/sns-subscription-form-for-amazon-web-services-push-notifications/styles.css'));

}
add_action('wp_enqueue_scripts', 'form_styles');

function hvk_sns_menu() {

	add_menu_page('SNS Plugin', 'SNS Plugin', 'manage_options', 'hvk_sns', 'show_settings', plugins_url('images/icon.png', __FILE__), 6);
	add_submenu_page('hvk_sns', 'SNS Topics', 'SNS Topics', 'manage_options', 'hvk-topics', 'list_topics');

}
add_shortcode("sns_form", "form_shortcode");
function settings_page() {require "includes/settings.php";}
function form_shortcode($attr) {
	require "includes/shortcode.php";
}
function show_settings() {require "includes/brand.php";}
function list_topics() {require "includes/topics.php";}