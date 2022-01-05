<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), ":");
$route->namespace("Source\Controller");

/**
 * WEB ROUTES
 */
$route->group(null);
$route->get("/", "DashboardController:dashboard");

/**
 * SETTINGS ROUTES
 */
$route->group("/configuracoes");
$route->get("/painel_de_configuracoes", "SettingsController:dashboard");

/**
 * TERMS ROUTES
 */
$route->group("/termos");
$route->get("/", "TermsController:dashboard");

/**
 * LOGIN ROUTES
 */
$route->group("/login");
$route->get("/entrar", "AuthenticationController:signIn");

/**
 * INSTALL ROUTES
 */
$route->group("install");
$route->get("/", "InstallController:install");

/**
 * ERROR ROUTES
 */
$route->group("/ops");
$route->get("/{errcode}", "ErrorController:error");

/**
 * ROUTE
 */
$route->dispatch();

/**
 * ERROR REDIRECT
 */
if ($route->error()) {
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();