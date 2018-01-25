<?php
/*
Plugin Name: WP CLI Composer Issue Test Plugin
Plugin URI: https://github.com/remcotolsma/wp-cli-composer-issue
Description: 

Version: 1.0.0
Requires at least: 4.7

Author: Remco Tolsma
Author URI: https://www.remcotolsma.nl/
*/

/**
 * Autoload
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Plugin
 */
$test_plugin = new \RemcoTolsma\WP_CLI_ComposerIssue\TestPlugin();

var_dump( $test_plugin );
