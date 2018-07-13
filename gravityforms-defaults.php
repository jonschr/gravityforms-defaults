<?php
/*
    Plugin Name: Gravity Forms Defaults
    Plugin URI: https://elod.in
    Description: Some defaults for Gravity Forms which allow for placeholders and add appropriate styles
    Version: 0.1
    Author: Jon Schroeder
    Author URI: https://elod.in

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
    GNU General Public License for more details.
*/

/////////////////
// BASIC SETUP //
/////////////////

// Plugin Directory
define( 'GF_DEFAULTS', dirname( __FILE__ ) );

//////////////////////////
// PLUGIN CUSTOMIZATION //
//////////////////////////

add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );


////////////////////////
// SCRIPTS AND STYLES //
////////////////////////

add_action( 'gform_enqueue_scripts', 'gfdefaults_enqueue_scripts_styles' );
function gfdefaults_enqueue_scripts_styles() {

	// Main style
    wp_enqueue_style( 'gf-default-style', plugin_dir_url( __FILE__ ) . 'css/gf-default-style.css' );

    // Reset errors
    // wp_enqueue_script( 'gf-default-reset-error', plugin_dir_url( __FILE__ ) . 'js/reset-error.js', array( 'jquery' ) );
    
}