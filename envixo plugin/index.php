<?php
/*
    * Plugin Name: EnviXo
    * Description: Este é um teste EnviXo   
    * Plugin URI: https://envixo.com.br
    * Version: 1.0.0
    * Author: Diego César Fiuza
    * Author URI: https://envixo.com.br
    * Text Domain: envixo
*/


/*VERIFICA SE CHAMOU DIRETAMENTE OPLUGIN*/
if(!function_exists('add_action')){
    echo __("Opa! Eu sou só um plugin, não posso ser requisitado diretamente!");
    exit;
}


//INCLUDES
include 'includes/activate.php';
/*include 'includes/init.php';*/

// HOOOKS
register_activation_hook(__FILE__,'br_activate_plugin');
/*add_action('init', 'br_envixo_init');*/

function meuEnvixo(){
    $meuEnvixo = "<h2>Aqui vai o conteudo do plugin</h2>";
    return $meuEnvixo;
}

function exibir_content() {
   include 'exibir.php';
}

add_action( 'the_content', 'exibir_content' );

/*add_shortcode('envixo1','meuEnvio');*/

function meuMenu(){
    add_menu_page('EnviXo','EnviXo', 'manage_options','envixo','envixo_page','', 200);
}

add_action('admin_menu','meuMenu');

function envixo_page(){
    include 'envixo.php';     
}


?>

