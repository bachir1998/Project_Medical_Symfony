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
        '/homepage' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\HomepageController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomepageController::home'], null, null, null, false, false, null]],
        '/espace_personnel' => [[['_route' => 'home_user', '_controller' => 'App\\Controller\\HomepageController::espacepersonnel'], null, null, null, false, false, null]],
        '/espace_personnel/patient/pathologie' => [[['_route' => 'patient_index_pathologie', '_controller' => 'App\\Controller\\PatientController::index'], null, null, null, true, false, null]],
        '/espace_personnel/patient/age' => [[['_route' => 'patient_index_age', '_controller' => 'App\\Controller\\PatientController::indexAge'], null, null, null, true, false, null]],
        '/espace_personnel/patient/genre' => [[['_route' => 'patient_index_sexe', '_controller' => 'App\\Controller\\PatientController::indexSexe'], null, null, null, true, false, null]],
        '/espace_personnel/patient/new' => [[['_route' => 'patient_new', '_controller' => 'App\\Controller\\PatientController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace_personnel/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/espace_personnel/search' => [[['_route' => 'search_patient', '_controller' => 'App\\Controller\\SearchController::searchPatient'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/espace_personnel/listUser' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/espace_personnel/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/espace_personnelmespatients' => [[['_route' => 'user_patients', '_controller' => 'App\\Controller\\UserController::mespatients'], null, ['GET' => 0], null, true, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/espace_personnel/(?'
                    .'|patient/(?'
                        .'|([^/]++)(?'
                            .'|(*:211)'
                            .'|/edit(*:224)'
                            .'|(*:232)'
                        .')'
                        .'|supprime/image/([^/]++)(*:264)'
                    .')'
                    .'|([^/]++)(?'
                        .'|(*:284)'
                        .'|/edit(?'
                            .'|Role(*:304)'
                            .'|(*:312)'
                        .')'
                        .'|(*:321)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        211 => [[['_route' => 'patient_show', '_controller' => 'App\\Controller\\PatientController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        224 => [[['_route' => 'patient_edit', '_controller' => 'App\\Controller\\PatientController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        232 => [[['_route' => 'patient_delete', '_controller' => 'App\\Controller\\PatientController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        264 => [[['_route' => 'patient_delete_image', '_controller' => 'App\\Controller\\PatientController::deleteImage'], ['id'], ['DELETE' => 0], null, false, true, null]],
        284 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        304 => [[['_route' => 'user_edit_role', '_controller' => 'App\\Controller\\UserController::editRole'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        312 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        321 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
