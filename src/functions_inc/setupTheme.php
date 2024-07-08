<?php
// Add Theme Style on website
function nany_css() {
  wp_register_style('nany-style', get_template_directory_uri() . '/style.css', [], '1.0.0', false);
  wp_register_style('nany-tailwind', get_template_directory_uri() . '/dist/css/tailwind.css', [], '1.0.0', false);
  wp_enqueue_style('nany-style');
  wp_enqueue_style('nany-tailwind');
}
add_action('wp_enqueue_scripts', 'nany_css');

?>