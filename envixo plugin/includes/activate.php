<?php

function br_activate_plugin(){
    
    //versao 6.0.1 < 4.5
    if(version_compare(get_bloginfo('version'), '4.5', '<')) {
        wp_die(__('Você precisa atualizar o WordPress para utilizar o plugin!', 'envixo'));
    }
}