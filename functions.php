<?php
add_action('wp_enqueue_scripts', 'childhood_scripts');

//подключение стилей с помощью функций wordpress
function childhood_scripts() {
  wp_enqueue_style( 'childhood-style', get_stylesheet_uri() );
  wp_enqueue_script( 'childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true);
}

?>