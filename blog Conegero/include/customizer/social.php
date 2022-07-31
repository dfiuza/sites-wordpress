<?php
function bb_social_customizer( $wp_customize ) {
	// Settings
	$wp_customize->add_setting('bb_facebook', array('default'=>''));
	$wp_customize->add_setting('bb_youtube', array('default'=>''));
	$wp_customize->add_setting('bb_instagram', array('default'=>''));

	// Sections
	$wp_customize->add_section('bb_social_section', array(
		'title' => 'Redes Sociais',
		'priority' => '1'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_facebook',
			array(
				'label' => 'Link do Facebook',
				'section' => 'bb_social_section',
				'settings' => 'bb_facebook',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_youtube',
			array(
				'label' => 'Link do Youtube',
				'section' => 'bb_social_section',
				'settings' => 'bb_youtube',
				'type' => 'text'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_instagram',
			array(
				'label' => 'Link do Instagram',
				'section' => 'bb_social_section',
				'settings' => 'bb_instagram',
				'type' => 'text'
			)
		)
	);

}