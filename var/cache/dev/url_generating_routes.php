<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    'product_show' => [['id'], ['_controller' => 'App\\Controller\\ProductController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/products']], [], []],
    'product_list' => [[], ['_controller' => 'App\\Controller\\ProductController::list'], [], [['text', '/products']], [], []],
    'seller_show' => [['id'], ['_controller' => 'App\\Controller\\SellerController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/sellers']], [], []],
    'seller_list' => [[], ['_controller' => 'App\\Controller\\SellerController::list'], [], [['text', '/sellers']], [], []],
];
