<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/products' => [[['_route' => 'product_list', '_controller' => 'App\\Controller\\ProductController::list'], null, null, null, false, false, null]],
        '/sellers' => [[['_route' => 'seller_list', '_controller' => 'App\\Controller\\SellerController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/products/([^/]++)(*:60)'
                .'|/sellers/([^/]++)(*:84)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        60 => [[['_route' => 'product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], null, null, false, true, null]],
        84 => [
            [['_route' => 'seller_show', '_controller' => 'App\\Controller\\SellerController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
