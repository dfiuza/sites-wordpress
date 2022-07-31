<footer>
	<div class="footer_up">
		<div class="container">
			<h3>Nossos Cursos</h3>
			<div class="row cursos">
				<div class="col-sm-4">
					<a href="https://site.com.br" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/pzp_cover.png" />
					</a>
				</div>
				<div class="col-sm-4">
					<a href="https://site.com.br" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/wpzp_cover.png" />
					</a>
				</div>
				<div class="col-sm-4">
					<a href="https://site.com.br" target="_blank">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/cursos/rnzp_cover.png" />
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_down">
		<div class="container">
			<?php bloginfo('name'); ?> - <?php echo date('Y'); ?><br/>
			Todos os direitos reservados
		</div>
	</div>
</footer>
<script type="text/javascript">
var ajaxUrl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>
<?php wp_footer(); ?>
<style type="text/css">
.post_title a {
	color:<?php echo get_theme_mod('bb_cortitulo'); ?>;
}
.post_button {
	background-color:<?php echo get_theme_mod('bb_corbotao'); ?>;
}
</style>
</body>
</html>









