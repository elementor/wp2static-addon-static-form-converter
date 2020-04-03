<?php

/**
 * Plugin Name:       WP2Static Add-on: Static Form Converter
 * Plugin URI:        https://wp2static.com
 * Description:       Static form converter add-on for WP2Static.
 * Version:           1.0-alpha-001
 * Author:            Leon Stafford
 * Author URI:        https://ljs.dev
 * License:           Unlicense
 * License URI:       http://unlicense.org
 * Text Domain:       wp2static-addon-static-form-converter
 * Domain Path:       /languages
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

define( 'WP2STATIC_STATIC_FORM_CONVERTER_PATH', plugin_dir_path( __FILE__ ) );
define( 'WP2STATIC_STATIC_FORM_CONVERTER_VERSION', '0.1' );

require WP2STATIC_STATIC_FORM_CONVERTER_PATH . 'vendor/autoload.php';

function run_wp2static_addon_zip() {
	$controller = new WP2StaticStaticFormConverter\Controller();
	$controller->run();
}

register_activation_hook(
    __FILE__,
    [ 'WP2StaticStaticFormConverter\Controller', 'activate' ]
);

register_deactivation_hook(
    __FILE__,
    [ 'WP2StaticStaticFormConverter\Controller', 'deactivate' ]
);

run_wp2static_addon_zip();

