<?php
function br_activate_plugin() {
	if( version_compare(get_bloginfo('version'), '4.5', '<') ) {
		wp_die(__('Você precisa atualizar o WordPress para usar este plugin', 'receitas'));
	}

	br_receitas_init();
	flush_rewrite_rules();

	global $wpdb;

	$sql = "CREATE TABLE ".$wpdb->prefix."receitas_votos (
		ID BIGINT(20) NOT NULL AUTO_INCREMENT,
		receita_id BIGINT(20) NOT NULL,
		voto TINYINT(1) NOT NULL,
		user_ip VARCHAR(32) NOT NULL,
		PRIMARY KEY (ID)
	) ".$wpdb->get_charset_collate();

	require_once(ABSPATH.'/wp-admin/includes/upgrade.php');
	dbDelta( $sql );

	// hourly, dialy, twicedaily
	wp_schedule_event(time(), 'daily', 'br_receita_diaria_hook');

	$receitas_opts = get_option('br_receita_opts');

	if(!$receitas_opts) {
		$opts = array(
			'voto_login' => 1,
			'receita_login' => 1
		);

		add_option('br_receita_opts', $opts);
	}
}