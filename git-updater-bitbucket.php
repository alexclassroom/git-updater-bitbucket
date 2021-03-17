<?php
/**
 * Git Updater Bitbucket.
 * Requires GitHub Updater plugin.
 *
 * @package git-updater-bitbucket
 * @author  Andy Fragen
 * @link    https://github.com/afragen/git-updater-bitbucket
 * @link    https://github.com/afragen/github-updater
 */

/**
 * Plugin Name:       GitHub Updater - Bitbucket
 * Plugin URI:        https://github.com/afragen/git-updater-bitbucket
 * Description:       Add Bitbucket and Bitbucket Server repositories to the GitHub Updater plugin.
 * Version:           0.7.1
 * Author:            Andy Fragen
 * License:           MIT
 * Network:           true
 * Domain Path:       /languages
 * Text Domain:       git-updater-bitbucket
 * GitHub Plugin URI: https://github.com/afragen/git-updater-bitbucket
 * Primary Branch:    main
 * Requires at least: 5.2
 * Requires PHP:      7.0
 */

namespace Fragen\Git_Updater\Bitbucket;

/*
 * Exit if called directly.
 * PHP version check and exit.
 */
if ( ! defined( 'WPINC' ) ) {
	die;
}

// Load Autoloader.
require_once __DIR__ . '/vendor/autoload.php';

( new Bootstrap() )->load_hooks();

add_action(
	'plugins_loaded',
	function() {
		( new Bootstrap() )->run();
	}
);
