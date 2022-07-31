<?php
include 'secreto_admin_page_validate.php';

function bs_secreto_admin_init() {

	add_action('admin_post_bs_secreto_admin_page_validate', 'bs_secreto_admin_page_validate');

}