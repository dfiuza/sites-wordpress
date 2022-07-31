<?php
function bb_theme_styles() {
	// CSS
	wp_enqueue_style("bootstrap_css", get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_style("google_fonts", "https://fonts.googleapis.com/css?family=Lato");
	wp_enqueue_style("template_css", get_template_directory_uri().'/assets/css/template.css', array('bootstrap_css', "google_fonts"));


	// JAVASCRIPT
	wp_enqueue_script("bootstrap_js", get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script("script_js", get_template_directory_uri().'/assets/js/script.js', array('jquery', 'bootstrap_js'), false, true);

}
function bb_after_setup() {
	add_theme_support("title-tag");
	add_theme_support("post-thumbnails");
	add_theme_support("custom-logo");

	register_nav_menu("top", "Menu Superior");
}
function bb_widgets() {

}