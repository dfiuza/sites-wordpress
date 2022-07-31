<?php
function bb_cores_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('bb_corbotao', array('default'=>'#455482'));
	$wp_customize->add_setting('bb_cortitulo', array('default'=>'#2d3a64'));

	// Sections
	$wp_customize->add_section('bb_cores_section', array(
		'title' => 'Cores',
		'priority' => '2'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bb_corbotao',
			array(
				'label' => 'Cor do botão',
				'section' => 'bb_cores_section',
				'settings' => 'bb_corbotao'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'bb_cortitulo',
			array(
				'label' => 'Cor do titulo',
				'section' => 'bb_cores_section',
				'settings' => 'bb_cortitulo'
			)
		)
	);

}