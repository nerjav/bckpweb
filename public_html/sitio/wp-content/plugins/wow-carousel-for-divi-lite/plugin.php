<?php

namespace Divi_Carousel_Lite;

/**
 * Main class plugin
 */
class Plugin
{
    /**
     * @var Plugin
     */
    private static $instance;

    const PLUGIN_PATH   = DCL_PLUGIN_DIR;
    const BASENAME      = DCL_PLUGIN_BASE;
    const DOCS_LINK     = 'https://diviepic.com/docs/';
    const PRICING_LINK  = 'https://diviepic.com/pricing/';

    /**
     * Plugin constructor.
     */
    private function __construct()
    {
        $this->load_dependencies();
        $this->define_hooks();
    }

    /**
     * Get an instance of the Plugin
     *
     * @return Plugin
     */
    public static function get_instance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
            self::$instance->init();
        }

        return self::$instance;
    }

    /**
     * Load required files
     */
    private function load_dependencies()
    {
        require_once self::PLUGIN_PATH . 'includes/admin.php';
        require_once self::PLUGIN_PATH . 'includes/backend-helpers.php';
        require_once self::PLUGIN_PATH . 'includes/divi4/assets.php';
    }

    /**
     * Define WP hooks
     */
    private function define_hooks()
    {
        // Add action links for the plugin
        add_filter('plugin_action_links_' . self::BASENAME, [$this, 'add_plugin_action_links']);

        // Load plugin translations
        add_action('plugins_loaded', [$this, 'load_textdomain'], 15);

        // Initialize Divi 4 extension
        add_action('et_builder_ready', [$this, 'init_extension']);
    }

    /**
     * Initialize required instances
     */
    public function init()
    {
        Assets::get_instance();
        Admin::get_instance();
    }

    /**
     * Load plugin translations
     */
    public function load_textdomain()
    {
        load_plugin_textdomain('divi-carousel-lite', false, self::BASENAME . '/languages');
    }

    /**
     * Add action links for the plugin
     *
     * @param array $links
     * @return array
     */
    public function add_plugin_action_links($links)
    {
        $links[] = sprintf(
            '<a href="%s" target="_blank" style="color: #197efb;font-weight: 600;">%s</a>',
            self::DOCS_LINK,
            __('Docs', 'divi-carousel-lite')
        );

        $links[] = sprintf(
            '<a href="%s" target="_blank" style="color: #FF6900;font-weight: 600;">%s</a>',
            self::PRICING_LINK,
            __('Get Epic Suite', 'divitorque')
        );

        return $links;
    }

    /**
     * Initialize extension 
     */
    public function init_extension()
    {
        // Load Divi 4 extension
        if (!class_exists('ET_Builder_Element')) {
            return;
        }

        require_once self::PLUGIN_PATH . 'includes/divi4/base/base.php';

        require_once self::PLUGIN_PATH . 'includes/divi4/modules/ImageCarousel/ImageCarousel.php';
        require_once self::PLUGIN_PATH . 'includes/divi4/modules/ImageCarouselChild/ImageCarouselChild.php';

        require_once self::PLUGIN_PATH . 'includes/divi4/modules/LogoCarousel/LogoCarousel.php';
        require_once self::PLUGIN_PATH . 'includes/divi4/modules/LogoCarouselChild/LogoCarouselChild.php';

        require_once self::PLUGIN_PATH . 'includes/divi4/modules/TwitterFeedCarousel/TwitterFeedCarousel.php';
    }
}

Plugin::get_instance();
