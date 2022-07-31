<?php
function bb_depoimentos_customizer($wp_customize) {
	// Settings
	$wp_customize->add_setting('bb_depo1_url', array('default'=>''));
	$wp_customize->add_setting('bb_depo1_txt', array('default'=>''));
	$wp_customize->add_setting('bb_depo1_autor', array('default'=>''));

	$wp_customize->add_setting('bb_depo2_url', array('default'=>''));
	$wp_customize->add_setting('bb_depo2_txt', array('default'=>''));
	$wp_customize->add_setting('bb_depo2_autor', array('default'=>''));

	$wp_customize->add_setting('bb_depo3_url', array('default'=>''));
	$wp_customize->add_setting('bb_depo3_txt', array('default'=>''));
	$wp_customize->add_setting('bb_depo3_autor', array('default'=>''));

	$wp_customize->add_setting('bb_depo4_url', array('default'=>''));
	$wp_customize->add_setting('bb_depo4_txt', array('default'=>''));
	$wp_customize->add_setting('bb_depo4_autor', array('default'=>''));

	$wp_customize->add_setting('bb_depo5_url', array('default'=>''));
	$wp_customize->add_setting('bb_depo5_txt', array('default'=>''));
	$wp_customize->add_setting('bb_depo5_autor', array('default'=>''));

	// Panel
	$wp_customize->add_panel('bb_depoimentos', array(
		'title' => 'Depoimentos',
		'priority' => 10
	));

	// Sections
	$wp_customize->add_section('bb_depo1', array(
		'title' => 'Depoimento 1',
		'priority' => 1,
		'panel' => 'bb_depoimentos'
	));
	$wp_customize->add_section('bb_depo2', array(
		'title' => 'Depoimento 2',
		'priority' => 2,
		'panel' => 'bb_depoimentos'
	));
	$wp_customize->add_section('bb_depo3', array(
		'title' => 'Depoimento 3',
		'priority' => 3,
		'panel' => 'bb_depoimentos'
	));
	$wp_customize->add_section('bb_depo4', array(
		'title' => 'Depoimento 4',
		'priority' => 4,
		'panel' => 'bb_depoimentos'
	));
	$wp_customize->add_section('bb_depo5', array(
		'title' => 'Depoimento 5',
		'priority' => 5,
		'panel' => 'bb_depoimentos'
	));

	// Controllers
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo1_txt',
			array(
				'label' => 'Texto:',
				'section' => 'bb_depo1',
				'settings' => 'bb_depo1_txt'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo2_txt',
			array(
				'label' => 'Texto:',
				'section' => 'bb_depo2',
				'settings' => 'bb_depo2_txt'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo3_txt',
			array(
				'label' => 'Texto:',
				'section' => 'bb_depo3',
				'settings' => 'bb_depo3_txt'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo4_txt',
			array(
				'label' => 'Texto:',
				'section' => 'bb_depo4',
				'settings' => 'bb_depo4_txt'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo5_txt',
			array(
				'label' => 'Texto:',
				'section' => 'bb_depo5',
				'settings' => 'bb_depo5_txt'
			)
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo1_autor',
			array(
				'label' => 'Autor:',
				'section' => 'bb_depo1',
				'settings' => 'bb_depo1_autor'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo2_autor',
			array(
				'label' => 'Autor:',
				'section' => 'bb_depo2',
				'settings' => 'bb_depo2_autor'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo3_autor',
			array(
				'label' => 'Autor:',
				'section' => 'bb_depo3',
				'settings' => 'bb_depo3_autor'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo4_autor',
			array(
				'label' => 'Autor:',
				'section' => 'bb_depo4',
				'settings' => 'bb_depo4_autor'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bb_depo5_autor',
			array(
				'label' => 'Autor:',
				'section' => 'bb_depo5',
				'settings' => 'bb_depo5_autor'
			)
		)
	);


	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'bb_depo1_url',
			array(
				'label' => 'Imagem:',
				'section' => 'bb_depo1',
				'settings' => 'bb_depo1_url'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'bb_depo2_url',
			array(
				'label' => 'Imagem:',
				'section' => 'bb_depo2',
				'settings' => 'bb_depo2_url'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'bb_depo3_url',
			array(
				'label' => 'Imagem:',
				'section' => 'bb_depo3',
				'settings' => 'bb_depo3_url'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'bb_depo4_url',
			array(
				'label' => 'Imagem:',
				'section' => 'bb_depo4',
				'settings' => 'bb_depo4_url'
			)
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_customize,
			'bb_depo5_url',
			array(
				'label' => 'Imagem:',
				'section' => 'bb_depo5',
				'settings' => 'bb_depo5_url'
			)
		)
	);
}
















