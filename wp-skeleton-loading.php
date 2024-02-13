<?php
/**
 * Plugin Name: Wordpress Skeleton Loading
 * Plugin URI: https://www.trentech.id
 * Description: Wordpress skeleton loading, improve user experience with skeleton loading.
 * Version: 0.0.1
 * Author: @permanart
 * Author URI: https://www.trentech.id/
 * Developer: Angga Permana
 * Developer URI: https://www.trentech.id/
 * Text Domain: wp-skeleton-loading
 * Domain Path: /languages
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 */

 function wp_skeleton_loading_styles() {
    wp_enqueue_style( plugin_dir_url( __FILE__ ) . 'assets/s-style.css', false );
}

// function wp_skeleton_loading_jss() {
//     wp_enqueue_script( plugin_dir_url( __FILE__ ) . 'assets/skeleton.js', false );
// }

add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_styles' );
// add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_jss' );

function wp_skeleton_loading_style() {
    $plugin_url = plugin_dir_url( __FILE__ );

wp_enqueue_style( 'style',  $plugin_url . "/assets/s-style.css");
}

add_action( 'admin_print_styles', 'wp_skeleton_loading_style' );