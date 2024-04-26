<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/evenement' => [[['_route' => 'app_evenement_index', '_controller' => 'App\\Controller\\EvenementController::index'], null, ['GET' => 0], null, true, false, null]],
        '/evenement/search' => [[['_route' => 'app_evenement_search', '_controller' => 'App\\Controller\\EvenementController::search'], null, ['GET' => 0], null, false, false, null]],
        '/evenement/new' => [[['_route' => 'app_evenement_new', '_controller' => 'App\\Controller\\EvenementController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/export-evenements-csv' => [[['_route' => 'export_evenements_csv', '_controller' => 'App\\Controller\\EvenementCsvController::exportEvenementsCsv'], null, null, null, false, false, null]],
        '/pdf-events' => [[['_route' => 'app_pdf_events', '_controller' => 'App\\Controller\\PdfController::generateEventsPdf'], null, null, null, false, false, null]],
        '/test2' => [[['_route' => 'app_web', '_controller' => 'App\\Controller\\TestController::index2'], null, null, null, false, false, null]],
        '/test' => [[['_route' => 'app_test', '_controller' => 'App\\Controller\\TestController::index'], null, null, null, false, false, null]],
        '/index.html.twig' => [
            [['_route' => 'app_indes', '_controller' => 'App\\Controller\\TestController::indexhome'], null, null, null, false, false, null],
            [['_route' => 'app_admin7', '_controller' => 'App\\Controller\\TestController::aboutadmin7'], null, null, null, false, false, null],
        ],
        '/about.html.twig' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\TestController::about'], null, null, null, false, false, null]],
        '/courses.html.twig' => [[['_route' => 'app_courses', '_controller' => 'App\\Controller\\TestController::courses'], null, null, null, false, false, null]],
        '/scholarship.html.twig' => [[['_route' => 'app_scholarship', '_controller' => 'App\\Controller\\TestController::scholarship'], null, null, null, false, false, null]],
        '/blog.html.twig' => [[['_route' => 'app_blog', '_controller' => 'App\\Controller\\TestController::blog'], null, null, null, false, false, null]],
        '/blog-single.html.twig' => [[['_route' => 'app_blog-single', '_controller' => 'App\\Controller\\TestController::blogsing'], null, null, null, false, false, null]],
        '/contact.html.twig' => [[['_route' => 'app_contact', '_controller' => 'App\\Controller\\TestController::contact'], null, null, null, false, false, null]],
        '/course-single.html.twig' => [[['_route' => 'app_cs', '_controller' => 'App\\Controller\\TestController::coursesingle'], null, null, null, false, false, null]],
        '/events.html.twig' => [[['_route' => 'app_events', '_controller' => 'App\\Controller\\TestController::events'], null, null, null, false, false, null]],
        '/notice-single.html.twig' => [[['_route' => 'app_notices', '_controller' => 'App\\Controller\\TestController::notices'], null, null, null, false, false, null]],
        '/notice.html.twig' => [[['_route' => 'app_notice', '_controller' => 'App\\Controller\\TestController::notice'], null, null, null, false, false, null]],
        '/research.html.twig' => [[['_route' => 'app_search', '_controller' => 'App\\Controller\\TestController::search'], null, null, null, false, false, null]],
        '/teacher-single.html.twig' => [[['_route' => 'app_ts', '_controller' => 'App\\Controller\\TestController::ts'], null, null, null, false, false, null]],
        '/teacher.html.twig' => [[['_route' => 'app_teacher', '_controller' => 'App\\Controller\\TestController::teacher'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\TestController::aboutadmin'], null, null, null, false, false, null]],
        '/indexadmin' => [[['_route' => 'app_indexadmin', '_controller' => 'App\\Controller\\TestController::indexadmin'], null, null, null, false, false, null]],
        '/pages-profile.html.twig' => [[['_route' => 'app_admin2', '_controller' => 'App\\Controller\\TestController::aboutadmin2'], null, null, null, false, false, null]],
        '/pages-sign-in.html.twig' => [[['_route' => 'app_admin3', '_controller' => 'App\\Controller\\TestController::aboutadmin3'], null, null, null, false, false, null]],
        '/pages-sign-up.html.twig' => [[['_route' => 'app_admin4', '_controller' => 'App\\Controller\\TestController::aboutadmin4'], null, null, null, false, false, null]],
        '/charts-chartjs.html.twig' => [[['_route' => 'app_admin5', '_controller' => 'App\\Controller\\TestController::aboutadmin5'], null, null, null, false, false, null]],
        '/icons-feather.html.twig' => [[['_route' => 'app_admin6', '_controller' => 'App\\Controller\\TestController::aboutadmin6'], null, null, null, false, false, null]],
        '/maps-google.html.twig' => [[['_route' => 'app_admin8', '_controller' => 'App\\Controller\\TestController::aboutadmin8'], null, null, null, false, false, null]],
        '/pages-blank.html.twig' => [[['_route' => 'app_admin9', '_controller' => 'App\\Controller\\TestController::aboutadmin9'], null, null, null, false, false, null]],
        '/ui-buttons.html.twig' => [[['_route' => 'app_admin10', '_controller' => 'App\\Controller\\TestController::aboutadmin10'], null, null, null, false, false, null]],
        '/ui-cards.html.twig' => [[['_route' => 'app_admin11', '_controller' => 'App\\Controller\\TestController::aboutadmin11'], null, null, null, false, false, null]],
        '/ui-forms.html.twig' => [[['_route' => 'app_admin12', '_controller' => 'App\\Controller\\TestController::aboutadmin12'], null, null, null, false, false, null]],
        '/ui-typography.html.twig' => [[['_route' => 'app_admin13', '_controller' => 'App\\Controller\\TestController::aboutadmin13'], null, null, null, false, false, null]],
        '/upgrade-to-pro.html.twig' => [[['_route' => 'app_admin14', '_controller' => 'App\\Controller\\TestController::aboutadmin14'], null, null, null, false, false, null]],
        '/usr/evt' => [[['_route' => 'app_usr_evt_index', '_controller' => 'App\\Controller\\UsrEvtController::index'], null, ['GET' => 0], null, true, false, null]],
        '/usr/evt/new' => [[['_route' => 'app_usr_evt_new', '_controller' => 'App\\Controller\\UsrEvtController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/even(?'
                    .'|ement/(?'
                        .'|show/([^/]++)(*:37)'
                        .'|edit/([^/]++)(*:57)'
                        .'|([^/]++)(*:72)'
                    .')'
                    .'|t/([^/]++)(*:90)'
                .')'
                .'|/usr/evt/([^/]++)(?'
                    .'|(*:118)'
                    .'|/edit(*:131)'
                    .'|(*:139)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:179)'
                    .'|wdt/([^/]++)(*:199)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:245)'
                            .'|router(*:259)'
                            .'|exception(?'
                                .'|(*:279)'
                                .'|\\.css(*:292)'
                            .')'
                        .')'
                        .'|(*:302)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'app_evenement_show', '_controller' => 'App\\Controller\\EvenementController::show'], ['idEvent'], null, null, false, true, null]],
        57 => [[['_route' => 'app_evenement_edit', '_controller' => 'App\\Controller\\EvenementController::edit'], ['idEvent'], null, null, false, true, null]],
        72 => [[['_route' => 'app_evenement_delete', '_controller' => 'App\\Controller\\EvenementController::delete'], ['idEvent'], ['POST' => 0], null, false, true, null]],
        90 => [[['_route' => 'app_es', '_controller' => 'App\\Controller\\TestController::eventsingle'], ['idEvent'], null, null, false, true, null]],
        118 => [[['_route' => 'app_usr_evt_show', '_controller' => 'App\\Controller\\UsrEvtController::show'], ['idUE'], ['GET' => 0], null, false, true, null]],
        131 => [[['_route' => 'app_usr_evt_edit', '_controller' => 'App\\Controller\\UsrEvtController::edit'], ['idUE'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        139 => [[['_route' => 'app_usr_evt_delete', '_controller' => 'App\\Controller\\UsrEvtController::delete'], ['idUE'], ['POST' => 0], null, false, true, null]],
        179 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        199 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        245 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        259 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        279 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        292 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        302 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
