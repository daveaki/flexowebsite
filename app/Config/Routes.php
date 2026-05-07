<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Main::index');
$routes->get('/test', 'Test::index');
$routes->get('/docs', 'Documentation::index');
$routes->get('/docs/(:segment)', 'Documentation::page/$1');
$routes->get('/scaffold-demo', 'Main::scaffoldDemo');
$routes->get('/contact', 'Main::contact');
$routes->get('/customize', 'Customize::index');
$routes->post('/customize/compile', 'Customize::compile');

// Locale prefix routes
$routes->group('{locale}', ['namespace' => 'App\Controllers'], static function ($routes) {
    $routes->get('/', 'Main::index');
    $routes->get('test', 'Test::index');
    $routes->get('docs', 'Documentation::index');
    $routes->get('docs/(:segment)', 'Documentation::page/$1');
    $routes->get('scaffold-demo', 'Main::scaffoldDemo');
    $routes->get('contact', 'Main::contact');
    $routes->get('customize', 'Customize::index');
    $routes->post('customize/compile', 'Customize::compile');
});
