<?php
include 'metabox_br_receita_opcoes.php';
include 'enqueue.php';
include 'columns.php';
include 'receita_opts_page_save.php';
include 'settings-api.php';

function br_receitas_admin_init() {
	add_action('add_meta_boxes_receita', 'br_receitas_metaboxes');
	add_action('admin_enqueue_scripts', 'br_admin_enqueue');
	add_action('admin_post_br_receita_opts_save', 'br_receita_opts_save');

	add_filter('manage_receita_posts_columns', 'br_receita_columns');
	add_action('manage_receita_posts_custom_column', 'br_manage_receita_columns', 10, 2);

	settings_api();
}

function br_receitas_metaboxes() {

	add_meta_box(
		'br_receita_opcoes',
		__('Opções da receita', 'receitas'),
		'br_receita_opcoes',
		'receita',
		'normal', // normal, side, advanced
		'high' // high, default, low
	);

}

function br_save_post_admin($post_id, $post, $update) {

	if(!$update) {
		return;
	}

	$receita_data = array(
		'ingredientes' => $_POST['br_ingredientes'],
		'tempo' => $_POST['br_tempo'],
		'utensilios' => $_POST['br_utensilios'],
		'dificuldade' => $_POST['br_dificuldade'],
		'tipo' => $_POST['br_tipo']
	);

	update_post_meta($post_id, 'receita_data', $receita_data);

}













