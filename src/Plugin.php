<?php

namespace Medo\GChangelog;

class Plugin
{
    public static string $plugin_name = 'gchangelog';
    public string $pluginFilePath;
    public string $pluginUrl;
    public string $assetsUrl;
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
	    $this->registerShortcodes();
    }

	public function registerScripts() {
		wp_register_script('gchangelog_js', $this->assetsUrl . '/js/gchangelog.js', [], '1.0.0', true);
		wp_enqueue_style('gchangelog_css', $this->assetsUrl . '/css/gchangelog.css', [], '1.0.0');
		wp_enqueue_script( 'gchangelog_js' );
	}
    public function registerShortcodes() {
	    add_shortcode('gazetto-changelog', [$this,'shortcodeCallback']);
    }

	public function shortcodeCallback(): string {
		$this->registerScripts();
		return '<div id="app"></div>';
	}
}
