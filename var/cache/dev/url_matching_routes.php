<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/burgers' => [[['_route' => 'app_burgers_index', '_controller' => 'App\\Controller\\BurgersController::index'], null, null, null, true, false, null]],
        '/burgers/new' => [[['_route' => 'app_burgers_new', '_controller' => 'App\\Controller\\BurgersController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cart' => [[['_route' => 'cart_index', '_controller' => 'App\\Controller\\CartController::index'], null, null, null, true, false, null]],
        '/main' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/menu' => [[['_route' => 'app_menu', '_controller' => 'App\\Controller\\MenuController::index'], null, null, null, false, false, null]],
        '/checkout' => [[['_route' => 'app_checkout', '_controller' => 'App\\Controller\\OrdersController::index'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'profile_index', '_controller' => 'App\\Controller\\ProfilController::index'], null, null, null, false, false, null]],
        '/recap' => [[['_route' => 'app_recap', '_controller' => 'App\\Controller\\RecapController::index'], null, null, null, false, false, null]],
        '/recap/new' => [[['_route' => 'app_orders_new', '_controller' => 'App\\Controller\\RecapController::new'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/Reverif' => [[['_route' => 'resend_verify', '_controller' => 'App\\Controller\\RegistrationController::resendVerif'], null, null, null, false, false, null]],
        '/sandwichs' => [[['_route' => 'app_sandwichs_index', '_controller' => 'App\\Controller\\SandwichsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/sandwichs/new' => [[['_route' => 'app_sandwichs_new', '_controller' => 'App\\Controller\\SandwichsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/texmexs' => [[['_route' => 'app_texmexs_index', '_controller' => 'App\\Controller\\TexmexsController::index'], null, ['GET' => 0], null, true, false, null]],
        '/texmexs/new' => [[['_route' => 'app_texmexs_new', '_controller' => 'App\\Controller\\TexmexsController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/burgers/([^/]++)(?'
                    .'|(*:189)'
                    .'|/edit(*:202)'
                    .'|(*:210)'
                .')'
                .'|/c(?'
                    .'|art/(?'
                        .'|add/([^/]++)(*:243)'
                        .'|remove/([^/]++)(*:266)'
                        .'|delete/([^/]++)(*:289)'
                    .')'
                    .'|heckout/(?'
                        .'|success/([^/]++)(*:325)'
                        .'|failure/([^/]++)(*:349)'
                    .')'
                .')'
                .'|/verif/([^/]++)(*:374)'
                .'|/sandwichs/([^/]++)(?'
                    .'|(*:404)'
                    .'|/edit(*:417)'
                    .'|(*:425)'
                .')'
                .'|/texmexs/([^/]++)(?'
                    .'|(*:454)'
                    .'|/edit(*:467)'
                    .'|(*:475)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:501)'
                    .'|/edit(*:514)'
                    .'|(*:522)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        189 => [[['_route' => 'app_burgers_show', '_controller' => 'App\\Controller\\BurgersController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        202 => [[['_route' => 'app_burgers_edit', '_controller' => 'App\\Controller\\BurgersController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        210 => [[['_route' => 'app_burgers_delete', '_controller' => 'App\\Controller\\BurgersController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        243 => [[['_route' => 'cart_add', '_controller' => 'App\\Controller\\CartController::add'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'cart_remove', '_controller' => 'App\\Controller\\CartController::remove'], ['id'], null, null, false, true, null]],
        289 => [[['_route' => 'cart_delete', '_controller' => 'App\\Controller\\CartController::delete'], ['id'], null, null, false, true, null]],
        325 => [[['_route' => 'app_checkout_success', '_controller' => 'App\\Controller\\OrdersController::success'], ['stripeSessionId'], null, null, false, true, null]],
        349 => [[['_route' => 'app_checkout_failure', '_controller' => 'App\\Controller\\OrdersController::failure'], ['stripeSessionId'], null, null, false, true, null]],
        374 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\RegistrationController::verifyUser'], ['token'], null, null, false, true, null]],
        404 => [[['_route' => 'app_sandwichs_show', '_controller' => 'App\\Controller\\SandwichsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'app_sandwichs_edit', '_controller' => 'App\\Controller\\SandwichsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [[['_route' => 'app_sandwichs_delete', '_controller' => 'App\\Controller\\SandwichsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_texmexs_show', '_controller' => 'App\\Controller\\TexmexsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        467 => [[['_route' => 'app_texmexs_edit', '_controller' => 'App\\Controller\\TexmexsController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        475 => [[['_route' => 'app_texmexs_delete', '_controller' => 'App\\Controller\\TexmexsController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        501 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        514 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        522 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
