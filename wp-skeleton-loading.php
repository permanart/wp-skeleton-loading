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
    wp_enqueue_style( WP_PLUGIN_DIR .'/wp-skeleton-loading/assets', '/wp-content/plugins/wp-skeleton-loading/assets/s-style.css', false );
}
add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_styles' );

function wp_skeleton_loading_js() {
    wp_enqueue_script( WP_PLUGIN_DIR .'/wp-skeleton-loading/assets', '/wp-content/plugins/wp-skeleton-loading/assets/skeleton.js', false );
}

add_action( 'wp_enqueue_scripts', 'wp_skeleton_loading_js' );

function wp_skeleton_loading_new() {
  global $wp_skeleton_loading_new;
  foreach($wp_skeleton_loading_new as $skeleton)
    // inject all code snippets, if any
    echo '<script type="text/javascript">document.addEventListener("DOMContentLoaded", function() {
    document.querySelectorAll(".wp-skeleton-loading").forEach(function(element) {
      element.classList.add("show-skeleton");
      setTimeout(function() {
        element.classList.remove("wp-skeleton-loading");
      }, 100);
    });
    window.addEventListener("load", function() {
      document.querySelectorAll(".show-skeleton").forEach(function(element) {
        element.classList.add("hide-skeleton");
      });
    });
  });</script>';
}
add_action('wp_head', 'wp_skeleton_loading_new');