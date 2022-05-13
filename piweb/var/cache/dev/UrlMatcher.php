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
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'display_activite', '_controller' => 'App\\Controller\\ActiviteController::index'], null, null, null, false, false, null]],
        '/front' => [[['_route' => 'display_admin', '_controller' => 'App\\Controller\\ActiviteController::indexAdmin'], null, null, null, false, false, null]],
        '/addActivite' => [[['_route' => 'addActivite', '_controller' => 'App\\Controller\\ActiviteController::addActivite'], null, null, null, false, false, null]],
        '/reglement' => [[['_route' => 'display_reglement', '_controller' => 'App\\Controller\\ReglementController::index'], null, null, null, false, false, null]],
        '/addReglement' => [[['_route' => 'app_reglement', '_controller' => 'App\\Controller\\ReglementController::addReglement'], null, null, null, false, false, null]],
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
                .'|/remove(?'
                    .'|Activite/([^/]++)(*:196)'
                    .'|Reglement/([^/]++)(*:222)'
                .')'
                .'|/modif(?'
                    .'|Activite([^/]++)(*:256)'
                    .'|Regelement([^/]++)(*:282)'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'supp_activite', '_controller' => 'App\\Controller\\ActiviteController::suppressionActivite'], ['id'], null, null, false, true, null]],
        222 => [[['_route' => 'supp_reglement', '_controller' => 'App\\Controller\\ReglementController::suppressionActivite'], ['id'], null, null, false, true, null]],
        256 => [[['_route' => 'modifActivite', '_controller' => 'App\\Controller\\ActiviteController::modifActivite'], ['id'], null, null, false, true, null]],
        282 => [
            [['_route' => 'modifReglement', '_controller' => 'App\\Controller\\ReglementController::modifReglement'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
