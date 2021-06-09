<?php
/**
 * Plugin Name: Cheetah Optimizer
 * Plugin URI: https://github.com/ramphor/cheetah
 * Author: Ramphor Premium
 * Author URI: https://puleeno.com
 * Description: The WordPress Optimize Plugin: Speedup & Improve SEO
 * Version: 1.0.0
 * Tag: speed, seo, optimize, lighthouse
 */

if (!defined('RAMPHOR_CHEETAH_OPTIMIZER_PLUGIN_FILE')) {
    define('RAMPHOR_CHEETAH_OPTIMIZER_PLUGIN_FILE', __FILE__);
}

$composer_autoload = sprintf('%s/vendor/autoload.php', dirname('RAMPHOR_CHEETAH_OPTIMIZER_PLUGIN_FILE'));
if (file_exists($composer_autoload)) {
    require_once $composer_autoload;
}

if (!class_exists(\Cheetah\Optimizer::class)) {
    return;
}

if (!function_exists('cheeta_optimizer')) {
    function cheeta_optimizer()
    {
        $cheeta = \Cheetah\Optimizer::get_instance();
    }
}

$GLOBALS['cheeta'] = cheeta_optimizer();
