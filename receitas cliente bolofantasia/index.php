<?php
/*
Plugin Name: Receitas
Description: Um plugin simples para adição e configuração de receitas.
Version: 1.0
Author: dfiuza
Author URI: https://dfiuza.com.br
Text Domain: receitas
*/

if(!function_exists('add_action')) {
	echo __('Opa! Eu sou só um plugin, não posso ser chamado diretamente!', 'receitas');
	exit;
}

// Setup
define('RECEITA_PLUGIN_URL', __FILE__);

// Includes
include('includes/init.php');
include('includes/activate.php');
include('includes/admin/admin_init.php');
include('includes/filter-content.php');
include('includes/enqueue.php');
include('includes/voto-receita.php');
include(dirname(RECEITA_PLUGIN_URL).'/includes/widgets.php');
include('includes/widgets/receita_diaria.php');
include('includes/cron.php');
include('includes/deactivate.php');
include('includes/shortcodes/receitas-criador.php');
include('includes/shortcodes/receita-auth.php');
include('includes/receita-submit.php');
include('includes/receita-cadastro-submit.php');
include('includes/receita-login-submit.php');
include('includes/admin/dashboard-widgets.php');
include('includes/admin/menus.php');
include('includes/admin/receita_opts_page.php');

// Hooks
register_activation_hook(RECEITA_PLUGIN_URL, 'br_activate_plugin');
register_deactivation_hook(RECEITA_PLUGIN_URL, 'br_deactivate_plugin');
add_action('init', 'br_receitas_init');
add_action('admin_init', 'br_receitas_admin_init');
add_action('save_post_receita', 'br_save_post_admin', 10, 3);
add_filter('the_content', 'br_filter_receita_content');
add_action('wp_enqueue_scripts', 'br_enqueue_scripts', 100);
add_action('widgets_init', 'br_widgets_init');
add_action('br_receita_diaria_hook', 'br_gerar_receita_diaria');
add_action('wp_dashboard_setup', 'br_add_dashboard_widgets');
add_action('admin_menu', 'br_admin_menus');

// Ajax
add_action('wp_ajax_br_voto_receita', 'br_voto_receita');
add_action('wp_ajax_nopriv_br_voto_receita', 'br_voto_receita');

add_action('wp_ajax_br_receitas_submit', 'br_receitas_submit');
add_action('wp_ajax_nopriv_br_receitas_submit', 'br_receitas_submit');

add_action('wp_ajax_nopriv_br_receita_criar_conta', 'br_receita_criar_conta');
add_action('wp_ajax_nopriv_br_receita_login', 'br_receita_login');

// Shortcodes
add_shortcode('receitas_criador', 'br_receitas_criador_shortcode');
add_shortcode('receitas_auth_form', 'br_receitas_auth_form_shortcode');













