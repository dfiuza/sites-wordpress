<?php
/*
Plugin Name: Secreto
Description: Um plugin secreto licenciado.
Version: 1.0
Author: dfiuza
Author URI: https://dfiuza.com.br/
Text Domain: secreto
*/

if(!function_exists('add_action')) {
	echo "Opa! Arquivo não permitido!";
	exit;
}

// Setup
define('SECRETO_PLUGIN_URL', __FILE__);

// Includes
include 'includes/activation.php';
include 'includes/admin/admin_init.php';
include 'includes/admin/menus.php';
include 'includes/admin/secreto_admin_page.php';

// Hooks
register_activation_hook(SECRETO_PLUGIN_URL, 'bs_activate_plugin');
register_deactivation_hook(SECRETO_PLUGIN_URL, 'bs_deactivate_plugin');
add_action('admin_init', 'bs_secreto_admin_init');
add_action('admin_menu', 'bs_secreto_admin_menus');