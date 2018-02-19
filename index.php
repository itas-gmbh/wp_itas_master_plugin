<?php
/*
 * Plugin Name: ITAS Main
 * Version: 1.0.0
 * Description: ITAS Main Plugin for all the important basics after the initial installation
 * Author: ITAS GmbH - Michael Allram
 * Author URI: https://itas.cc
 * Plugin URI: https://github.com/itas-gmbh/wp_itas_master_plugin
 * License: MIT 2018 ITAS GmbH
 * License URI: https://opensource.org/licenses/MIT
*/



function wpse_load_plugin_css() {
    $plugin_url = plugin_dir_url( __FILE__ );

    wp_enqueue_style( 'style1', $plugin_url . 'css/style1.css' );
    wp_enqueue_style( 'style2', $plugin_url . 'css/style2.css' );
}
add_action( 'wp_enqueue_scripts', 'wpse_load_plugin_css' );



?>
