<?php
defined( 'ABSPATH' ) or die( 'Cheatin\' uh?' );

define( 'WP_ROCKET_ADVANCED_CACHE', true );
$rocket_cache_path = '/home/igungyxchosting/public_html/bds17/wp-content/cache/wp-rocket/';
$rocket_config_path = '/home/igungyxchosting/public_html/bds17/wp-content/wp-rocket-config/';

if ( file_exists( '/home/igungyxchosting/public_html/bds17/wp-content/plugins/wp-rocket/inc/front/process.php' ) ) {
	include '/home/igungyxchosting/public_html/bds17/wp-content/plugins/wp-rocket/inc/front/process.php';
} else {
	define( 'WP_ROCKET_ADVANCED_CACHE_PROBLEM', true );
}