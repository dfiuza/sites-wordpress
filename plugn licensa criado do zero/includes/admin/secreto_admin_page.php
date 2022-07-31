<?php
include 'secreto_download.php';

function bs_secreto_admin_page() {

	if(!empty($_GET['success'])) {

		bs_secreto_download();

	} else {
		?>
		<div class="wrap">
			<h1>Validação de chave - Secreto</h1>

			Para usar este plugin, você precisa inserir a chave ou comprá-la aqui.<br/><br/>

			<?php if(!empty($_GET['fail'])): ?>
				<div style="border:2px dashed red;color:red;padding:10px;margin-bottom:20px">
					Esta chave é inválida ou já foi utilizada.
				</div>
			<?php endif; ?>

			<form method="POST" action="admin-post.php">

				<input type="hidden" name="action" value="bs_secreto_admin_page_validate" />

				<?php wp_nonce_field('bs_secreto_admin_verify'); ?>

				Chave de licença:<br/>
				<input type="text" name="bs_secreto_key" /><br/><br/>

				<input type="submit" value="Validar" />

			</form>

		</div>
		<?php
	}
}