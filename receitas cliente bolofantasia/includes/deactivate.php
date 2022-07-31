<?php
function br_deactivate_plugin() {
	wp_clear_scheduled_hook('br_receita_diaria_hook');
}