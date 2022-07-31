<?php
function br_receitas_auth_form_shortcode() {

	if(is_user_logged_in()) {
		return 'Você já está logado!';
	}

	$formHTML = file_get_contents('receita-auth-template.php', true);

	$formHTML = str_replace(
		'SHOW_REG_FORM_PH',
		( get_option('users_can_register') == '0' ) ? 'br_hide_form' : '',
		$formHTML
	);

	return $formHTML;
}