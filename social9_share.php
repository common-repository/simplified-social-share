<?php

/**
 * Plugin Name: Simplified Social Share
 * Plugin URI: http://www.social9.com
 * Description: Social9 social sharing plugin provides you beautiful buttons, sharing capabilities, and analytics. (20+ buttons- Whatsapp, Faceshare, Twitter, LinkedIn, Reddit, and many more...)
 * Version: 6.2
 * Author: Social9 Team
 * Author URI: http://www.social9.com
 * License: GPL2+
 */

// If this file is called directly, abort.
defined('ABSPATH') or die();

define('S9_ROOT_DIR', plugin_dir_path(__FILE__));
define('S9_ROOT_URL', plugin_dir_url(__FILE__));
define('S9_PLUGIN_VERSION', '6.2');
define('S9_ROOT_SETTING_LINK', plugin_basename(__FILE__));

// Initialize Modules in specific order
include_once S9_ROOT_DIR . 'module-loader.php';
new S9_Modules_Loader();
