<?php
/*
    Plugin Name: Gazetto Changelog
    Description: Changelog
    Version: 1.0.0
    Author: Medo
    Author URI: https://github.com/medotek
    Text Domain: medo_gchangelog_textdomain
    Domain Path: /lang
*/

$autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;

    if (strstr($_SERVER['REQUEST_URI'], '/wp-admin/') && isset($_GET['action']) && $_GET['action'] == 'elementor')
        return;

    $plugin = \Medo\GChangelog\Plugin::getInstance();
}
