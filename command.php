<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

/**
 * Says "Hello World" to new users
 *
 * @when before_wp_load
 */
$hello_world_command = function() {
	WP_CLI::success( "V1" );
};
WP_CLI::add_command( 'updateable-package v1', $hello_world_command );
