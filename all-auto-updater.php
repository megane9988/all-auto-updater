<?php
/**
 * Plugin Name: All Auto Updater
 * Description: Fource update core,plugins,and themes.
 * Plugin URI: https://megane-blog.com
 * Author: megane9988
 * Author URI: https://github.com/ampproject/amp-wp/graphs/contributors
 * Version: 0.9.9
 * Text Domain: all-auto-updatrer
 * Domain Path: /languages/
 * License: GPLv2 or later
 *
 * @package AAU
 */

/**
 * Update all function.
 *
 * @param bool   $checkout  Whether a VCS checkout was discovered at $context
 *                          or ABSPATH, or anywhere higher.
 * @param string $context The filesystem context (a path) against which
 *                        filesystem status should be checked.
 */
function aau_always_return_false_for_vcs( $checkout, $context ) {
	return false;
}

add_filter( 'automatic_updates_is_vcs_checkout', 'aau_always_return_false_for_vcs', 10, 2 );
add_filter( 'allow_major_auto_core_updates', '__return_true' );
add_filter( 'allow_minor_auto_core_updates', '__return_true' );
add_filter( 'auto_update_theme', '__return_true' );
add_filter( 'auto_update_plugin', '__return_true' );