<?php

/* Plugin Name: Product Catalogue
Plugin URI: https://wordpress.org/plugins/product-catalogue/
Description: Creates a catalogue to display your lovely products
Version: 0.1.0
Author: Etza
Author URI: http://panditita.com
Text Domain: health-check
Domain Path: /languages
*/

add_action('init', function () {
    register_post_type('products', [
        'labels' => [
            'name' => __('Products Catalogue'),
            'singular_name' => __('Product'),
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon'   => 'dashicons-cart'
    ]);
});