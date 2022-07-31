<?php
// Include
require get_template_directory().'/include/setup.php';
require get_template_directory().'/include/customizer/theme-customizer.php';
require get_template_directory().'/include/ajax.php';

// Hooks
add_action("wp_enqueue_scripts", "bb_theme_styles");
add_action("after_setup_theme", "bb_after_setup");
add_action("widgets_init", "bb_widgets");
add_action("customize_register", "bb_customize_register");