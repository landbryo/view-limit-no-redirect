<?php
/**
 * Plugin Name:       View Limit - No Redirect
 * Plugin URI:        https://skillfulplugins.com
 * Description:       Prevents View Limit from redirecting.
 * Version:           0.0.1
 * Requires at least: 5.2
 * Requires PHP:      7.0
 * Author:            Landon Otis
 * Author URI:        https://missionlab.dev
 * License:           GPL v3 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

function spvlnr_enqueue_scripts() {
	wp_enqueue_script( 'view-limit-no-redirect', plugin_dir_url( __FILE__ ) . 'assets/js/scripts.js', [ 'view-limit-script' ], '0.0.1', 'true' );
}

add_action( 'wp_enqueue_scripts', 'spvlnr_enqueue_scripts' );