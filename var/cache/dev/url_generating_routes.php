<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'app_badge_index' => [[], ['_controller' => 'App\\Controller\\BadgeController::index'], [], [['text', '/badge']], [], [], []],
    'app_badge_new' => [[], ['_controller' => 'App\\Controller\\BadgeController::new'], [], [['text', '/badge/new']], [], [], []],
    'app_badge_delete' => [['id'], ['_controller' => 'App\\Controller\\BadgeController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/badge/delete']], [], [], []],
    'app_Badge_edit' => [['id'], ['_controller' => 'App\\Controller\\BadgeController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/badge']], [], [], []],
    'app_certificat_index' => [[], ['_controller' => 'App\\Controller\\CertificatController::index'], [], [['text', '/certificat/']], [], [], []],
    'app_certificatfront_index' => [[], ['_controller' => 'App\\Controller\\CertificatController::FrontAffichage'], [], [['text', '/certificat/certificatFront']], [], [], []],
    'app_certificat_new' => [[], ['_controller' => 'App\\Controller\\CertificatController::new'], [], [['text', '/certificat/new']], [], [], []],
    'app_certificat_show' => [['idCertif'], ['_controller' => 'App\\Controller\\CertificatController::show'], [], [['variable', '/', '[^/]++', 'idCertif', true], ['text', '/certificat']], [], [], []],
    'app_certificat_edit' => [['idCertif'], ['_controller' => 'App\\Controller\\CertificatController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'idCertif', true], ['text', '/certificat']], [], [], []],
    'app_certificat_delete' => [['idCertif'], ['_controller' => 'App\\Controller\\CertificatController::delete'], [], [['variable', '/', '[^/]++', 'idCertif', true], ['text', '/certificat/delete']], [], [], []],
    'app_web' => [[], ['_controller' => 'App\\Controller\\TestController::index2'], [], [['text', '/test2']], [], [], []],
    'app_test' => [[], ['_controller' => 'App\\Controller\\TestController::index'], [], [['text', '/test']], [], [], []],
    'app_indes' => [[], ['_controller' => 'App\\Controller\\TestController::indexhome'], [], [['text', '/index.html.twig']], [], [], []],
    'app_about' => [[], ['_controller' => 'App\\Controller\\TestController::about'], [], [['text', '/about.html.twig']], [], [], []],
    'app_courses' => [[], ['_controller' => 'App\\Controller\\TestController::courses'], [], [['text', '/courses.html.twig']], [], [], []],
    'app_scholarship' => [[], ['_controller' => 'App\\Controller\\TestController::scholarship'], [], [['text', '/scholarship.html.twig']], [], [], []],
    'app_blog' => [[], ['_controller' => 'App\\Controller\\TestController::blog'], [], [['text', '/blog.html.twig']], [], [], []],
    'app_blog-single' => [[], ['_controller' => 'App\\Controller\\TestController::blogsing'], [], [['text', '/blog-single.html.twig']], [], [], []],
    'app_contact' => [[], ['_controller' => 'App\\Controller\\TestController::contact'], [], [['text', '/contact.html.twig']], [], [], []],
    'app_cs' => [[], ['_controller' => 'App\\Controller\\TestController::coursesingle'], [], [['text', '/course-single.html.twig']], [], [], []],
    'app_es' => [[], ['_controller' => 'App\\Controller\\TestController::eventsingle'], [], [['text', '/event-single.html.twig']], [], [], []],
    'app_events' => [[], ['_controller' => 'App\\Controller\\TestController::events'], [], [['text', '/events.html.twig']], [], [], []],
    'app_notices' => [[], ['_controller' => 'App\\Controller\\TestController::notices'], [], [['text', '/notice-single.html.twig']], [], [], []],
    'app_notice' => [[], ['_controller' => 'App\\Controller\\TestController::notice'], [], [['text', '/notice.html.twig']], [], [], []],
    'app_search' => [[], ['_controller' => 'App\\Controller\\TestController::search'], [], [['text', '/research.html.twig']], [], [], []],
    'app_ts' => [[], ['_controller' => 'App\\Controller\\TestController::ts'], [], [['text', '/teacher-single.html.twig']], [], [], []],
    'app_teacher' => [[], ['_controller' => 'App\\Controller\\TestController::teacher'], [], [['text', '/teacher.html.twig']], [], [], []],
    'app_admin' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin'], [], [['text', '/admin']], [], [], []],
    'app_indexadmin' => [[], ['_controller' => 'App\\Controller\\TestController::indexadmin'], [], [['text', '/indexadmin']], [], [], []],
    'app_admin2' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin2'], [], [['text', '/pages-profile.html.twig']], [], [], []],
    'app_admin3' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin3'], [], [['text', '/pages-sign-in.html.twig']], [], [], []],
    'app_admin4' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin4'], [], [['text', '/pages-sign-up.html.twig']], [], [], []],
    'app_admin5' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin5'], [], [['text', '/charts-chartjs.html.twig']], [], [], []],
    'app_admin6' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin6'], [], [['text', '/icons-feather.html.twig']], [], [], []],
    'app_admin7' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin7'], [], [['text', '/index.html.twig']], [], [], []],
    'app_admin8' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin8'], [], [['text', '/maps-google.html.twig']], [], [], []],
    'app_admin9' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin9'], [], [['text', '/pages-blank.html.twig']], [], [], []],
    'app_admin10' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin10'], [], [['text', '/ui-buttons.html.twig']], [], [], []],
    'app_admin11' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin11'], [], [['text', '/ui-cards.html.twig']], [], [], []],
    'app_admin12' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin12'], [], [['text', '/ui-forms.html.twig']], [], [], []],
    'app_admin13' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin13'], [], [['text', '/ui-typography.html.twig']], [], [], []],
    'app_admin14' => [[], ['_controller' => 'App\\Controller\\TestController::aboutadmin14'], [], [['text', '/upgrade-to-pro.html.twig']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
];