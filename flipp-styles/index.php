<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/*
Plugin Name: Flipp Styles
Description: A custom wordpress admin reskin and style options for a unique client experience
Version: 0.0.1-beta
Author: Nathan de Graaf
Author URI: http://thinkflipp.com
Text Domain: flipp-styles
*/

function flipp_style_stylesheet() {
  wp_enqueue_style( 'custom-styles',plugin_dir_url(__FILE__). 'css/style.css' );
}

add_action( 'admin_enqueue_scripts', 'flipp_style_stylesheet' );

?>