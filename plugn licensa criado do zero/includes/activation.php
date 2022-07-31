<?php
function bs_activate_plugin() {
	update_option('bs_secreto_key', '');
}

function bs_deactivate_plugin() {
	update_option('bs_secreto_key', '');
}