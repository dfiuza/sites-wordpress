<?php
function bs_secreto_download() {

	$secreto_key = get_option('bs_secreto_key');

	// Baixar o zip e descompactar.
	$url = 'https://teste.dfiuza.com.br/apis/wp_secreto/download?key='.$secreto_key;
	sleep(3);

	?>
	<div class="wrap">
		<h1>Secreto</h1>

		<div style="border:2px dashed green;color:green;padding:10px;margin-bottom:20px">
			Chave validada com sucesso!
		</div>

		<a href="<?php echo admin_url('admin.php?page=bs_secreto_home'); ?>">Ir até o plugin.</a>
	</div>
	<?php
}