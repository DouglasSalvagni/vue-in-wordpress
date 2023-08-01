<?php
/*
Plugin Name: Meu Plugin Vue.js
*/

// Enqueue Vue.js and component script
function meu_plugin_enqueue_scripts()
{
    // Register the component script
    wp_enqueue_script('meu-componente', plugin_dir_url(__FILE__) . 'assets/meu-componente.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'meu_plugin_enqueue_scripts');


// Shortcode para exibir o componente Vue.js
function meu_plugin_shortcode_meu_componente($atts)
{
    return '<div id="app">
    <meu-componente></meu-componente>
  </div>';
}
add_shortcode('meu_componente', 'meu_plugin_shortcode_meu_componente');


// Inicialize o componente Vue.js no shortcode
function meu_plugin_shortcode_scripts()
{
    echo '';
}
add_action('wp_footer', 'meu_plugin_shortcode_scripts');
