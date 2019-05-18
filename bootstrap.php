<?php
if(!defined('ABSPATH')) die('No direct script access allowed');

/** SITE
 *************//* GLOBAL *//* CONSTANTS */
define('WPTS_VERSION', '1.0');
define('WPTS_MODULE_PATH', '/modules');
define('WPTS_VIEWS_PATH', __DIR__ . '/src/Views');
define('WPTS_INCLUDES_PATH', '/includes');
define('WPTS_HOME_URL', get_home_url());

define('WPTS_ADMIN_PATH', get_template_directory() . '/admin');
define('WPTS_FRONT_PATH', get_template_directory() . '/front');
define('WPTS_AUTOLOAD', '/vendor/autoload.php');

define('WPTS_ASSETS', get_template_directory_uri() . '/assets');
define('WPTS_MODEL_PATH', get_template_directory() . '/src');
define('WPTS_TEMPLATE_PATH', get_template_directory());
define('WPTS_TEMPLATE_URI', get_template_directory_uri());
define('WPTS_AUTH', '<YOUR HASH HERE!>'); //Used in authentications

$autoloader = require_once(dirname(__FILE__) . '/vendor/autoload.php');
/**
 * @var $app Backfront\Wordpress\Application
 */
$app = Backfront\Wordpress\WPApp::getInstance();

/**
 * Application setup
 * @since 1.0
 */
add_action('init', function() use (&$app) {
    $app->MDLPATH = WPTS_MODULE_PATH;
    $app->TPLPATH = WPTS_VIEWS_PATH;
    $app->ASSETS_PATH = WPTS_ASSETS;

    $app->register(App\Providers\TwigProvider::class);
});

add_action('wp_loaded', function() use (&$app) {
    $app->Start();
});
/**
 * Default theme definitions
 * @since 1.0
 */
add_action('after_setup_theme', function() {
    //Your setups
});
