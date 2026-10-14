<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/admin/donnees' => [[['_route' => 'extend_admin_data', '_controller' => 'App\\Controller\\Admin\\ExtendAdminController::index'], null, null, null, false, false, null]],
        '/admin/heeds' => [[['_route' => 'heeds_csv_import', '_controller' => 'App\\Controller\\Admin\\ExtendAdminController::heeds'], null, null, null, false, false, null]],
        '/admin/workflow' => [[['_route' => 'admin_workflow', '_controller' => 'App\\Controller\\Admin\\WorkflowController::index'], null, null, null, false, false, null]],
        '/admin/workflow/evenements/verif' => [[['_route' => 'verif_evenement', '_controller' => 'App\\Controller\\Admin\\WorkflowController::verifEvent'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/workflow/passages/verif' => [[['_route' => 'verif_passage', '_controller' => 'App\\Controller\\Admin\\WorkflowController::verifPassage'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/workflow/ressources/verif' => [[['_route' => 'verif_ressource', '_controller' => 'App\\Controller\\Admin\\WorkflowController::verifRessource'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/workflow/evenements/add' => [[['_route' => 'add_event', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addEvent'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/groupes/add' => [[['_route' => 'add_groupe', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addGrp'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/etiquettes/add' => [[['_route' => 'add_etiquette', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addTag'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/genreMusical/add' => [[['_route' => 'add_genreMusical', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addGenreMusic'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/instruments/add' => [[['_route' => 'add_instrument', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addInstr'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/labels/add' => [[['_route' => 'add_label', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addLabel'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/lieux/add' => [[['_route' => 'add_lieu', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addLieu'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/musiciens/add' => [[['_route' => 'add_musicien', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addMusicien'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/nationalites/add' => [[['_route' => 'add_nationalite', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addNationalite'], null, ['POST' => 0], null, false, false, null]],
        '/admin/workflow/typeEvenement/add' => [[['_route' => 'add_typeEvenement', '_controller' => 'App\\Controller\\Admin\\WorkflowController::addTypeEvent'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AppController::index'], null, null, null, false, false, null]],
        '/api/categoriesMusicales/liste' => [[['_route' => 'liste_categoriesMusicales', '_controller' => 'App\\Controller\\CategoriesMusicalesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/etiquettes/liste' => [[['_route' => 'listeAll_etiquette', '_controller' => 'App\\Controller\\EtiquettesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/evenements/liste' => [[['_route' => 'listeAll_evenements', '_controller' => 'App\\Controller\\EvenementsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/evenements/search' => [[['_route' => 'search_evenements', '_controller' => 'App\\Controller\\EvenementsController::search'], null, ['GET' => 0], null, false, false, null]],
        '/evenements/component/card' => [[['_route' => 'event_card', '_controller' => 'App\\Controller\\EvenementsController::card'], null, ['GET' => 0], null, false, false, null]],
        '/api/genresMusicaux/liste' => [[['_route' => 'listeAll_genresMusicaux', '_controller' => 'App\\Controller\\GenresMusicauxController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/groupes/liste' => [[['_route' => 'listeAll_groupe', '_controller' => 'App\\Controller\\GroupesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/instruments/liste' => [[['_route' => 'liste_instruments', '_controller' => 'App\\Controller\\InstrumentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/labels/liste' => [[['_route' => 'liste_label', '_controller' => 'App\\Controller\\LabelsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/lieux/liste' => [[['_route' => 'listeAll_lieux', '_controller' => 'App\\Controller\\LieuxController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/membres/liste' => [[['_route' => 'listeAll_membre', '_controller' => 'App\\Controller\\MembresController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/musiciens/liste' => [[['_route' => 'listeAll_musiciens', '_controller' => 'App\\Controller\\MusiciensController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/nationalites/liste' => [[['_route' => 'liste_nationalite', '_controller' => 'App\\Controller\\NationalitesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/passages/liste' => [[['_route' => 'listeAll_passage', '_controller' => 'App\\Controller\\PassagesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/api/ressources/liste' => [[['_route' => 'liste_ressources', '_controller' => 'App\\Controller\\RessourcesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/api/typesEvenements/liste' => [[['_route' => 'listeAll_typesEvenements', '_controller' => 'App\\Controller\\TypesEvenementsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/typesRessources/liste' => [[['_route' => 'listeAll_typeRessource', '_controller' => 'App\\Controller\\TypesRessourcesController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/doc' => [[['_route' => 'app.swagger_ui', '_controller' => 'nelmio_api_doc.controller.swagger_ui'], null, ['GET' => 0], null, true, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|categoriesMusicales/detail/([^/]++)(*:50)'
                    .'|e(?'
                        .'|tiquettes/detail/([^/]++)(*:86)'
                        .'|venements/detail/([^/]++)(*:118)'
                    .')'
                    .'|g(?'
                        .'|enresMusicaux/detail/([^/]++)(*:160)'
                        .'|roupes/detail/([^/]++)(*:190)'
                    .')'
                    .'|instruments/detail/([^/]++)(*:226)'
                    .'|l(?'
                        .'|abels/detail/([^/]++)(*:259)'
                        .'|ieux/detail/([^/]++)(*:287)'
                    .')'
                    .'|m(?'
                        .'|embres/detail/([^/]++)(*:322)'
                        .'|usiciens/detail/([^/]++)(*:354)'
                    .')'
                    .'|nationalites/detail/([^/]++)(*:391)'
                    .'|passages/detail/([^/]++)(*:423)'
                    .'|ressources/detail/([^/]++)(*:457)'
                    .'|types(?'
                        .'|Evenements/detail/([^/]++)(*:499)'
                        .'|Ressources/detail/([^/]++)(*:533)'
                    .')'
                .')'
                .'|/evenements/(?'
                    .'|liste(?:/([^/]++))?(*:577)'
                    .'|detail/([^/]++)(*:600)'
                .')'
                .'|/reset\\-password/reset(?:/([^/]++))?(*:645)'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:684)'
                    .'|wdt/([^/]++)(*:704)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:750)'
                            .'|router(*:764)'
                            .'|exception(?'
                                .'|(*:784)'
                                .'|\\.css(*:797)'
                            .')'
                        .')'
                        .'|(*:807)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        50 => [[['_route' => 'detail_categorieMusicale', '_controller' => 'App\\Controller\\CategoriesMusicalesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        86 => [[['_route' => 'detail_etiquette', '_controller' => 'App\\Controller\\EtiquettesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        118 => [[['_route' => 'detail_api_evenement', '_controller' => 'App\\Controller\\EvenementsController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        160 => [[['_route' => 'detail_genreMusical', '_controller' => 'App\\Controller\\GenresMusicauxController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        190 => [[['_route' => 'detail_groupe', '_controller' => 'App\\Controller\\GroupesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        226 => [[['_route' => 'detail_instrument', '_controller' => 'App\\Controller\\InstrumentsController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        259 => [[['_route' => 'detail_label', '_controller' => 'App\\Controller\\LabelsController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        287 => [[['_route' => 'detail_lieu', '_controller' => 'App\\Controller\\LieuxController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'detail_membre', '_controller' => 'App\\Controller\\MembresController::details'], ['id'], ['GET' => 0], null, false, true, null]],
        354 => [[['_route' => 'detail_musicien', '_controller' => 'App\\Controller\\MusiciensController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [[['_route' => 'detail_nationalite', '_controller' => 'App\\Controller\\NationalitesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        423 => [[['_route' => 'detail_passage', '_controller' => 'App\\Controller\\PassagesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        457 => [[['_route' => 'detail_ressource', '_controller' => 'App\\Controller\\RessourcesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        499 => [[['_route' => 'detail_typeEvenement', '_controller' => 'App\\Controller\\TypesEvenementsController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        533 => [[['_route' => 'detail_typeRessource', '_controller' => 'App\\Controller\\TypesRessourcesController::detail'], ['id'], ['GET' => 0], null, false, true, null]],
        577 => [[['_route' => 'listeFront_evenements', 'currentPage' => 1, '_controller' => 'App\\Controller\\EvenementsController::accueil'], ['currentPage'], null, null, false, true, null]],
        600 => [[['_route' => 'detail_evenement', '_controller' => 'App\\Controller\\EvenementsController::detailFront'], ['id'], null, null, false, true, null]],
        645 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        684 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        704 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        750 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        764 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        784 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        797 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        807 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
