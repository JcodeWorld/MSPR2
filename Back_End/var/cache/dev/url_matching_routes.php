<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/action' => [[['_route' => 'admin_action_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/action/new' => [[['_route' => 'admin_action_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/action/batch-delete' => [[['_route' => 'admin_action_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/action/autocomplete' => [[['_route' => 'admin_action_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/action/render-filters' => [[['_route' => 'admin_action_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/contenu' => [[['_route' => 'admin_contenu_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/contenu/new' => [[['_route' => 'admin_contenu_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/contenu/batch-delete' => [[['_route' => 'admin_contenu_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/contenu/autocomplete' => [[['_route' => 'admin_contenu_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/contenu/render-filters' => [[['_route' => 'admin_contenu_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message' => [[['_route' => 'admin_message_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message/new' => [[['_route' => 'admin_message_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/message/batch-delete' => [[['_route' => 'admin_message_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/message/autocomplete' => [[['_route' => 'admin_message_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/message/render-filters' => [[['_route' => 'admin_message_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-contenu' => [[['_route' => 'admin_modifier_contenu_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-contenu/new' => [[['_route' => 'admin_modifier_contenu_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/modifier-contenu/batch-delete' => [[['_route' => 'admin_modifier_contenu_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/modifier-contenu/autocomplete' => [[['_route' => 'admin_modifier_contenu_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-contenu/render-filters' => [[['_route' => 'admin_modifier_contenu_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-tarif' => [[['_route' => 'admin_modifier_tarif_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-tarif/new' => [[['_route' => 'admin_modifier_tarif_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/modifier-tarif/batch-delete' => [[['_route' => 'admin_modifier_tarif_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/modifier-tarif/autocomplete' => [[['_route' => 'admin_modifier_tarif_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/modifier-tarif/render-filters' => [[['_route' => 'admin_modifier_tarif_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/profil' => [[['_route' => 'admin_profil_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/profil/new' => [[['_route' => 'admin_profil_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/profil/batch-delete' => [[['_route' => 'admin_profil_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/profil/autocomplete' => [[['_route' => 'admin_profil_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/profil/render-filters' => [[['_route' => 'admin_profil_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarif' => [[['_route' => 'admin_tarif_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarif/new' => [[['_route' => 'admin_tarif_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/tarif/batch-delete' => [[['_route' => 'admin_tarif_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/tarif/autocomplete' => [[['_route' => 'admin_tarif_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/tarif/render-filters' => [[['_route' => 'admin_tarif_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/traiter' => [[['_route' => 'admin_traiter_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/traiter/new' => [[['_route' => 'admin_traiter_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/traiter/batch-delete' => [[['_route' => 'admin_traiter_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/traiter/autocomplete' => [[['_route' => 'admin_traiter_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/traiter/render-filters' => [[['_route' => 'admin_traiter_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-admin' => [[['_route' => 'admin_user_admin_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-admin/new' => [[['_route' => 'admin_user_admin_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user-admin/batch-delete' => [[['_route' => 'admin_user_admin_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user-admin/autocomplete' => [[['_route' => 'admin_user_admin_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user-admin/render-filters' => [[['_route' => 'admin_user_admin_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/api/contact' => [[['_route' => 'api_contact', '_controller' => 'App\\Controller\\ContactController::contact'], null, ['POST' => 0], null, false, false, null]],
        '/api/contenu/Toutepage' => [[['_route' => 'api_contenu_toute_page', '_controller' => 'App\\Controller\\ContenuPageController::getContenusToutesPages'], null, ['GET' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::index'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LogoutController::logout'], null, null, null, false, false, null]],
        '/signin' => [[['_route' => 'app_signin', '_controller' => 'App\\Controller\\SigninController::index'], null, null, null, false, false, null]],
        '/api/tarif' => [[['_route' => 'api_tarif', '_controller' => 'App\\Controller\\TarifPageController::getTarif'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|pi(?'
                        .'|/(?'
                            .'|docs(?:\\.([^/]++))?(*:40)'
                            .'|\\.well\\-known/genid/([^/]++)(*:75)'
                            .'|validation_errors/([^/]++)(*:108)'
                        .')'
                        .'|(?:/(index)(?:\\.([^/]++))?)?(*:145)'
                        .'|/(?'
                            .'|cont(?'
                                .'|e(?'
                                    .'|xts/([^.]+)(?:\\.(jsonld))?(*:194)'
                                    .'|n(?'
                                        .'|irs(?'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:238)'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:264)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:302)'
                                            .')'
                                        .')'
                                        .'|us(?'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(*:343)'
                                            .'|(?:\\.([^/]++))?(?'
                                                .'|(*:369)'
                                            .')'
                                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                                .'|(*:407)'
                                            .')'
                                        .')'
                                    .')'
                                .')'
                                .'|ainers(?'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(*:454)'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:480)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:518)'
                                    .')'
                                .')'
                            .')'
                            .'|errors/(\\d+)(?:\\.([^/]++))?(*:556)'
                            .'|validation_errors/([^/]++)(?'
                                .'|(*:593)'
                            .')'
                            .'|associer_contenus(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:648)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:674)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:712)'
                                .')'
                            .')'
                            .'|page_webs(?'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(*:760)'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:786)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:824)'
                                .')'
                            .')'
                        .')'
                    .')'
                    .'|dmin/(?'
                        .'|action/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:870)'
                                .'|delete(*:884)'
                            .')'
                            .'|(*:893)'
                        .')'
                        .'|contenu/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:929)'
                                .'|delete(*:943)'
                            .')'
                            .'|(*:952)'
                        .')'
                        .'|m(?'
                            .'|essage/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:991)'
                                    .'|delete(*:1005)'
                                .')'
                                .'|(*:1015)'
                            .')'
                            .'|odifier\\-(?'
                                .'|contenu/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1064)'
                                        .'|delete(*:1079)'
                                    .')'
                                    .'|(*:1089)'
                                .')'
                                .'|tarif/([^/]++)(?'
                                    .'|/(?'
                                        .'|edit(*:1124)'
                                        .'|delete(*:1139)'
                                    .')'
                                    .'|(*:1149)'
                                .')'
                            .')'
                        .')'
                        .'|profil/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:1187)'
                                .'|delete(*:1202)'
                            .')'
                            .'|(*:1212)'
                        .')'
                        .'|t(?'
                            .'|arif/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1250)'
                                    .'|delete(*:1265)'
                                .')'
                                .'|(*:1275)'
                            .')'
                            .'|raiter/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1311)'
                                    .'|delete(*:1326)'
                                .')'
                                .'|(*:1336)'
                            .')'
                        .')'
                        .'|user(?'
                            .'|\\-admin/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1381)'
                                    .'|delete(*:1396)'
                                .')'
                                .'|(*:1406)'
                            .')'
                            .'|/([^/]++)(?'
                                .'|/(?'
                                    .'|edit(*:1436)'
                                    .'|delete(*:1451)'
                                .')'
                                .'|(*:1461)'
                            .')'
                        .')'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1505)'
                    .'|wdt/([^/]++)(*:1526)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:1569)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:1607)'
                                .'|router(*:1622)'
                                .'|exception(?'
                                    .'|(*:1643)'
                                    .'|\\.css(*:1657)'
                                .')'
                            .')'
                            .'|(*:1668)'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        40 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        75 => [[['_route' => 'api_genid', '_controller' => 'api_platform.action.not_exposed', '_api_respond' => 'true'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        108 => [[['_route' => 'api_validation_errors', '_controller' => 'api_platform.action.not_exposed'], ['id'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        145 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        194 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], ['GET' => 0, 'HEAD' => 1], null, false, true, null]],
        238 => [[['_route' => '_api_/contenirs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenir', '_api_operation_name' => '_api_/contenirs/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        264 => [
            [['_route' => '_api_/contenirs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenir', '_api_operation_name' => '_api_/contenirs{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contenirs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenir', '_api_operation_name' => '_api_/contenirs{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        302 => [
            [['_route' => '_api_/contenirs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenir', '_api_operation_name' => '_api_/contenirs/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/contenirs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenir', '_api_operation_name' => '_api_/contenirs/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        343 => [[['_route' => '_api_/contenus/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenu', '_api_operation_name' => '_api_/contenus/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        369 => [
            [['_route' => '_api_/contenus{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenu', '_api_operation_name' => '_api_/contenus{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/contenus{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenu', '_api_operation_name' => '_api_/contenus{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        407 => [
            [['_route' => '_api_/contenus/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenu', '_api_operation_name' => '_api_/contenus/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/contenus/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Contenu', '_api_operation_name' => '_api_/contenus/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        454 => [[['_route' => '_api_/containers/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Container', '_api_operation_name' => '_api_/containers/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        480 => [
            [['_route' => '_api_/containers{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Container', '_api_operation_name' => '_api_/containers{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/containers{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Container', '_api_operation_name' => '_api_/containers{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        518 => [
            [['_route' => '_api_/containers/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Container', '_api_operation_name' => '_api_/containers/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/containers/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\Container', '_api_operation_name' => '_api_/containers/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        556 => [[['_route' => '_api_errors', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\State\\ApiResource\\Error', '_api_operation_name' => '_api_errors', '_format' => null], ['status', '_format'], ['GET' => 0], null, false, true, null]],
        593 => [
            [['_route' => '_api_validation_errors_problem', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_problem', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_hydra', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_hydra', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_validation_errors_jsonapi', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => null, '_api_resource_class' => 'ApiPlatform\\Validator\\Exception\\ValidationException', '_api_operation_name' => '_api_validation_errors_jsonapi', '_format' => null], ['id'], ['GET' => 0], null, false, true, null],
        ],
        648 => [[['_route' => '_api_/associer_contenus/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AssocierContenu', '_api_operation_name' => '_api_/associer_contenus/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        674 => [
            [['_route' => '_api_/associer_contenus{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AssocierContenu', '_api_operation_name' => '_api_/associer_contenus{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/associer_contenus{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AssocierContenu', '_api_operation_name' => '_api_/associer_contenus{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        712 => [
            [['_route' => '_api_/associer_contenus/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AssocierContenu', '_api_operation_name' => '_api_/associer_contenus/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/associer_contenus/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\AssocierContenu', '_api_operation_name' => '_api_/associer_contenus/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        760 => [[['_route' => '_api_/page_webs/{id}{._format}_get', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PageWeb', '_api_operation_name' => '_api_/page_webs/{id}{._format}_get', '_format' => null], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        786 => [
            [['_route' => '_api_/page_webs{._format}_get_collection', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PageWeb', '_api_operation_name' => '_api_/page_webs{._format}_get_collection', '_format' => null], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => '_api_/page_webs{._format}_post', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PageWeb', '_api_operation_name' => '_api_/page_webs{._format}_post', '_format' => null], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        824 => [
            [['_route' => '_api_/page_webs/{id}{._format}_patch', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PageWeb', '_api_operation_name' => '_api_/page_webs/{id}{._format}_patch', '_format' => null], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
            [['_route' => '_api_/page_webs/{id}{._format}_delete', '_controller' => 'api_platform.symfony.main_controller', '_stateless' => true, '_api_resource_class' => 'App\\Entity\\PageWeb', '_api_operation_name' => '_api_/page_webs/{id}{._format}_delete', '_format' => null], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
        ],
        870 => [[['_route' => 'admin_action_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        884 => [[['_route' => 'admin_action_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        893 => [[['_route' => 'admin_action_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ActionCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ActionCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        929 => [[['_route' => 'admin_contenu_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        943 => [[['_route' => 'admin_contenu_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        952 => [[['_route' => 'admin_contenu_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ContenuCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ContenuCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        991 => [[['_route' => 'admin_message_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1005 => [[['_route' => 'admin_message_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1015 => [[['_route' => 'admin_message_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\MessageCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\MessageCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1064 => [[['_route' => 'admin_modifier_contenu_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1079 => [[['_route' => 'admin_modifier_contenu_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1089 => [[['_route' => 'admin_modifier_contenu_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierContenuCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierContenuCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1124 => [[['_route' => 'admin_modifier_tarif_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1139 => [[['_route' => 'admin_modifier_tarif_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1149 => [[['_route' => 'admin_modifier_tarif_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ModifierTarifCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ModifierTarifCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1187 => [[['_route' => 'admin_profil_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1202 => [[['_route' => 'admin_profil_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1212 => [[['_route' => 'admin_profil_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ProfilCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ProfilCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1250 => [[['_route' => 'admin_tarif_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1265 => [[['_route' => 'admin_tarif_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1275 => [[['_route' => 'admin_tarif_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TarifCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TarifCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1311 => [[['_route' => 'admin_traiter_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1326 => [[['_route' => 'admin_traiter_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1336 => [[['_route' => 'admin_traiter_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\TraiterCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\TraiterCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1381 => [[['_route' => 'admin_user_admin_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1396 => [[['_route' => 'admin_user_admin_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1406 => [[['_route' => 'admin_user_admin_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserAdminCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserAdminCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1436 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        1451 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        1461 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        1505 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1526 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        1569 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        1607 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        1622 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        1643 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        1657 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        1668 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
