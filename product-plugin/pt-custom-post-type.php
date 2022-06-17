<?php

/**
 * Plugin Name: PT Custom Post Types
 */

function create_new_post_type_plugin()
{
    register_post_type(
        'testimonial',
        array(
            'labels' => array(
                'name' => __('testimonial'),
            ),
            $rewrite = array(
                'slug' => 'testimonial',
                'pages' => true,
                'feeds' => true,
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
    register_post_type(
        'event',
        array(
            'labels' => array(
                'name' => __('event'),
            ),
            $rewrite = array(
                'slug' => 'event',
                'pages' => true,
                'feeds' => true,
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
}
add_action('init', 'create_new_post_type_plugin');
