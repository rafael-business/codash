<?php
/*
Plugin Name: 	Admin Columns Pro - Pods
Version: 		1.6.1
Description: 	Supercharges your Admin Columns Pro with unique Pods columns.
Author:         AdminColumns.com
Author URI:     https://www.admincolumns.com
Plugin URI:     https://www.admincolumns.com
Text Domain: 	codepress-admin-columns
Requires PHP:   5.6.20
*/

use ACA\Pods\Dependencies;
use ACA\Pods\Pods;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! is_admin() ) {
	return;
}

require_once __DIR__ . '/classes/Dependencies.php';

add_action( 'after_setup_theme', function () {
	$dependencies = new Dependencies( plugin_basename( __FILE__ ), '1.6.1' );
	$dependencies->requires_acp( '5.6' );
	$dependencies->requires_php( '5.6.20' );

	$min_required_pods_version = '2.7';

	if ( ! function_exists( 'pods' ) || ! defined( 'PODS_VERSION' ) || ! version_compare( PODS_VERSION, $min_required_pods_version, '>=' ) ) {
		$dependencies->add_missing_plugin( __( 'Pods', 'pods' ), $dependencies->get_search_url( 'Pods' ), $min_required_pods_version );
	}

	if ( $dependencies->has_missing() ) {
		return;
	}

	$class_map = __DIR__ . '/config/autoload-classmap.php';

	if ( is_readable( $class_map ) ) {
		AC\Autoloader::instance()->register_class_map( require $class_map );
	} else {
		AC\Autoloader::instance()->register_prefix( 'ACA\Pods', __DIR__ . '/classes' );
	}

	$addon = new Pods( __FILE__ );
	$addon->register();
} );

function ac_addon_pods() {
	return new Pods( __FILE__ );
}