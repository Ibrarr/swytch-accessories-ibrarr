<?php

namespace Accessories;

class CustomPostType
{
    public function __construct()
    {
        add_action('init', array($this, 'custom_post_type_accessories'));
    }

    public function custom_post_type_accessories()
    {
        register_post_type(
            'accessories',
            array(
                'labels' => array(
                    'name' => __('Accessories'),
                    'singular_name' => __('Accessories'),
                    'view_item' => __('View Accessories')
                ),
                'query_var' => true,
                'show_in_rest' => true,
                'show_ui' => true,
                'capability_type' => 'post',
                'menu_icon' => 'dashicons-editor-ul                ',
                'public' => true,
                'supports' => array(
                    'title',
                    'extra-page-post-settings',
                    'tag',
                    'excerpt',
                    'taxonomy',
                    'editor',
                    'image',
                    'description',
                    'thumbnail',
                    'page-attributes',
                    'post-formats',
                )
            )
        );
    }
}
