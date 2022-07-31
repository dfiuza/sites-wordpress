<?php
function br_admin_menus() {

	add_menu_page(
		'Opções de Receita', // Titulo da página
		'Config. de Receitas', // Titulo do menu
		'edit_theme_options', // Capability responsável
		'br_receita_opts', // Slug da página
		'br_receita_opts_page' // Função de criação da página
	);

}