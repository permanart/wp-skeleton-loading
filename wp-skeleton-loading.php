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

 function wp_skeleton_loading_style() {
    wp_enqueue_style( '/wp-content/plugins/wp-skeleton-loading/assets', 's-style.css', false );
}

function wp_skeleton_loading_js() {
    wp_enqueue_script( '/wp-content/plugins/wp-skeleton-loading/assets', 'skeleton.js', false );
}

add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_style' );
add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_js' );