<?php

/*
Plugin Name: Advanced Custom Fields: Unique ID Field
Plugin URI: https://wordpress.org/plugins/acf-unique-id-field
Description: Create a unique ID to easily identify repeater field's rows.
Version: 1.0.0
Author: KLicheR
Author URI: https://github.com/KLicheR
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-unique_id', false, dirname( plugin_basename(__FILE__) ) . '/lang/' ); 




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_unique_id( $version ) {
	include_once('acf-unique_id-v5.php');
}

add_action('acf/include_field_types', 'include_field_types_unique_id');
