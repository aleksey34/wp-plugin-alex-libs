<?php
/**
 * Plugin Name:       Alex Libs
 * Description:       Add libs for AlexTheme - carbonfields and others
 * Requires at least: 1.0
 * Requires PHP: 7.4
 * Version:           1.0
 * Author:            aleksey34
 * License:           GPL-2.0-or-later
 * Text Domain:       alex_theme
 /
 * @package          plugin core of alextheme
 */
// - if file of translate in plugin - Domain Path: /languages


use AlexLibs\CarbonFields\CarbonFieldsInit;


if(!defined('ABSPATH')) exit;

//define("AlexExtraCorePluginDIR" , plugin_dir_path(__FILE__) );
//define("AlexExtraCorePluginURI" , plugin_dir_url( __FILE__ ));
//define("AlexExtraCorePluginPageTemplateDir" , plugin_dir_path(__FILE__)  . 'page-template/' );
//define("AlexExtraCorePluginTemplateDir" , plugin_dir_path(__FILE__)  . 'src/app-template/' );


/**
 * ANY change in composer.json - require command in console -- composer update -- IMPORTANT
 *
 */
/**
 * composer autoload classes
 */
require_once  plugin_dir_path(__FILE__) .  'vendor/autoload.php';



/**
 * Carbon fields init meta and theme options
 */
CarbonFieldsInit::instance();

/**
 * TGM plugin activation
 *
 */
\AlexLibs\TGM\TgmSettings::instance();
