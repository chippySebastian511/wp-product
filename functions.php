<?php

function create_new_post_type_product()
{
    register_post_type(
        'product',
        array(
            'labels' => array(
                'name' => __('Product'),
            ),
            $rewrite = array(
                'slug' => 'product',
                'pages' => true,
                'feeds' => true,
            ),
            'public' => true,
            'has_archive' => true,
        )
    );
    register_taxonomy(
        'product_category',
        array('product'),
        array(
            'labels' => array(
                'name'    =>  'Product Category',
            ),
            'hierarchical' => true,
            'show_ui' => true,
            'show_in_rest' => true,
            'show_admin_column' => true,
            'query_var' => true,
        ),
        $rewrite = array(
            'slug' => 'product_category'

        )
    );
}
// Hooking up our function to theme setup
add_post_type_support('product', 'thumbnail');
add_action('init', 'create_new_post_type_product');
/* Custom Post Type End */

function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');
// add_theme_support('post-thumbnails');
// add_post_type_support('products', 'thumbnail');
add_theme_support('post-thumbnails');
// add_post_type_support('product', 'thumbnail');
set_post_thumbnail_size(250, 250);

function custom_new_menu()
{
    register_nav_menus(
        array(
            'header' => 'Header Menu',

        )
    );
}
add_action('init', 'custom_new_menu');

function wpdocs_theme_slug_widgets_init()
{
    register_sidebar(array(
        'name'          => __('Main Sidebar', 'textdomain'),
        'id'            => 'sidebar-1',
        'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'wpdocs_theme_slug_widgets_init');
get_page_template();
