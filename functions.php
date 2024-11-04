<?php
function translate_test_load_theme_textdomain() {
  $result = load_theme_textdomain( 'translate-test', get_template_directory() . '/languages' );
  // echo '<pre style="border:1px red solid">';
  // var_dump( $result );
  // echo '</pre>';
}
add_action( 'after_setup_theme', 'translate_test_load_theme_textdomain' );
