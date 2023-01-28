<?php

namespace Accessories;

class EnqueueScripts
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    public function enqueue_scripts()
    {
        wp_register_style('accessories-style', plugin_dir_url(dirname(__FILE__)) . 'dist/css/app.css', [], 1, 'all');
        wp_enqueue_style('accessories-style');

        wp_register_script('accessories-script', plugin_dir_url(dirname(__FILE__)) . 'dist/js/app.js', ['jquery'], 1, true);
        wp_enqueue_script('accessories-script');
    }
}
