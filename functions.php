<?php
/**
 * @package Umbrella 
 * @subpackage wp_basetheme
 * @version 1.0.0
 * 
 * @author Douglas Alves <alves.douglaz@gmail.com>
 * @link http://https://github.com/BackFront/wp_theme_skeleton/ Project Repository
 * @license http://www.apache.org/licenses/LICENSE-2.0/ Apache License 2.0
 */
if (!defined('ABSPATH'))
    die('No direct script access allowed');

/* ================================
 * Constants =================== */
define('WPTS_VERSION', '1.0.0');
define('WPTS_MODULE_PATH', '/modules');
define('WPTS_VIEWS_PATH', '/view');
define('WPTS_INCLUDES_PATH', '/includes');
define('WPTS_HOME_URL', get_home_url());

define('WPTS_ADMIN_PATH', get_template_directory() . '/admin');
define('WPTS_FRONT_PATH', get_template_directory() . '/front');
define('WPTS_AUTOLOAD', '/vendor/autoload.php');

define('WPTS_ASSETS', get_template_directory_uri() . '/assets');
define('WPTS_MODEL_PATH', '/src');
define('WPTS_TEMPLATE_PATH', get_template_directory());
define('WPTS_TEMPLATE_URI', get_template_directory_uri());
define('WPTS_AUTH', '<YOUR HASH HERE!>'); //Used in authentications
