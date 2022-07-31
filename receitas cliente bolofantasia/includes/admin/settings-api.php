<?php
function settings_api() {

	register_setting('br_opts_group', 'br_receita_opts');

	add_settings_section(
		'receita_settings',
		'Config das Receitas',
		'br_settings_section',
		'br_opts_section'
	);

	add_settings_field(
		'voto_login',
		'Usuário pode votar sem estar logado',
		'br_voto_login_input',
		'br_opts_section',
		'receita_settings'
	);

	add_settings_field(
		'receita_login',
		'Usuário pode adicionar receita sem estar logado',
		'br_receita_login_input',
		'br_opts_section',
		'receita_settings'
	);

}

function br_settings_section() {
	echo "Texto Qualquer";
}

function br_voto_login_input() {
	$receita_opts = get_option('br_receita_opts');
	
	?>
	<select id="voto_login" name="br_receita_opts[voto_login]">
		<option value="1" <?php echo ($receita_opts['voto_login']=='1')?'selected="selected"':''; ?>>Não</option>
		<option value="2" <?php echo ($receita_opts['voto_login']=='2')?'selected="selected"':''; ?>>Sim</option>
	</select>
	<?php
}

function br_receita_login_input() {
	$receita_opts = get_option('br_receita_opts');
	
	?>
	<select id="receita_login" name="br_receita_opts[receita_login]">
		<option value="1" <?php echo ($receita_opts['receita_login']=='1')?'selected="selected"':''; ?>>Não</option>
		<option value="2" <?php echo ($receita_opts['receita_login']=='2')?'selected="selected"':''; ?>>Sim</option>
	</select>
	<?php
}