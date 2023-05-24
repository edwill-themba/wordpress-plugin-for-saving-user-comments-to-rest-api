<?php

/**
 * Plugin Name: Edwill Post Comments 
 * Description: This is a plugin for saving user posts to a comments rest api
 * Version: 1.0
 * Author: Edwill Themba
 * License: GPLv2
 */

 // checks if you want access plugins file via url

if (!defined('ABSPATH')) {
    exit;
}
// includes plugin main entry and functions files
require_once plugin_dir_path(__FILE__) . 'includes/index.php';
require_once plugin_dir_path(__FILE__) . 'includes/functions.php';


