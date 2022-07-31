<?php
function bs_secreto_admin_menus() {

	add_menu_page(
		'Validação do Secreto',
		'Secreto',
		'edit_theme_options',
		'bs_secreto_key',
		'bs_secreto_admin_page'
	);

}