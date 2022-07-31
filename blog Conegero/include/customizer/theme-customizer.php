<?php
require get_template_directory().'/include/customizer/social.php';
require get_template_directory().'/include/customizer/depoimentos.php';
require get_template_directory().'/include/customizer/cores.php';

function bb_customize_register( $wp_customize ) {

	bb_social_customizer($wp_customize);
	bb_depoimentos_customizer($wp_customize);
	bb_cores_customizer($wp_customize);

}