<?php
    function br_envixo_init() {
        $labels = array(
            'name' => 'Envixo',
            'singular_name' => 'Autor',
            'name_admin_bar' => 'Envixo',
            'add_new' => 'Adicionar Nova',
            'add_new_item' => 'Adicionar Novo',
            'new_item' => 'Novo',
            'edit_item' => 'Editar',
            'view_item' => 'Visualizar',
            'all_items' => 'Todos',
            'search_items' => 'Procurar',
            'parent_item_colon' => "Dependentes",
            'not_found' => 'Nenhum cadastro encontrado',
            'not_found_in_trash' => 'Nenhum apagado'            
        );
        
        $array = array(
            'labels' => $labels,
            'description' => "Um tipo de conteúdo",
            'public' => true,
            'publicly_queryable' => true,
            'query_var' => true,
            'show_ui' => true,
            'rewrite' => array('slug' => 'envixo'),
            'capability_type' => 'post',
            'has_archive' => true,
            'hierarchical' => false,
            'menu_position' => 70,
            'supports' => array('tittle', 'editor', 'author', 'thumbnail')   
        );
        
        register_post_type('envixo', $array);
        
    }


