<?php
function bs_secreto_admin_page_validate() {

	if( !current_user_can('edit_theme_options') ) {
		wp_die('Acesso Negado!');
	}

	check_admin_referer('bs_secreto_admin_verify');

	if(!empty($_POST['bs_secreto_key'])) {

		$key = $_POST['bs_secreto_key'];

		// $1$G17wM8Vq$az19aSSOjpMXPaRJpmQID1

		$url = 'https://teste.dfiuza.com.br/apis/wp_secreto/validate?key='.$key;
		$json = json_decode( file_get_contents($url) );

		if($json->valid === true) {

			update_option('bs_secreto_key', $key);
			wp_redirect( admin_url('admin.php?page=bs_secreto_key&success=1') );

		} else {

			wp_redirect( admin_url('admin.php?page=bs_secreto_key&fail=1') );

		}

	} else {
		wp_redirect( admin_url('admin.php?page=bs_secreto_key') );
	}

}