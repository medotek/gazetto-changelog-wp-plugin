<?php

namespace Medo\GChangelog\src;

class Plugin
{
    public static $plugin_name = 'gchangelog';
    public $pluginFilePath;
    public $pluginUrl;
    public $assetsUrl;
    private static $instance;

    public static function getInstance(): Plugin
    {
        if (is_null(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function __construct()
    {
        $this->pluginFilePath = plugin_dir_path(__DIR__);
        $this->pluginUrl = plugin_dir_url(__DIR__);
        $this->assetsUrl = $this->pluginUrl . 'assets';
        $this->init();
    }

    public function init(): bool
    {
        add_action('init', [$this, 'initActions']);
        return true;
    }

    public function initActions()
    {
//        $this->registerAssets();
        $this->initShortcodes();
    }

//    public function registerAssets()
//    {
//        if (!is_admin()) {
//            wp_enqueue_script('gchangelog_js', $this->assetsUrl . '/bundle.js', [], '1.0.0', true);
//        }
//    }

    public function initShortcodes() {
        add_shortcode('bienvenue', 'shortcode_bienvenue');
        wp_enqueue_script("zz-shortcode-jscss-script",array('jquery') , '1.0', true);
        wp_enqueue_style("zz-shortcode-jscss-style");
    }
}
