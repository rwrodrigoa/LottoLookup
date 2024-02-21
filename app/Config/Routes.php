<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 // API Routes
$routes->get('/api', 'APIController::index');
$routes->get('/api/(:alpha)', 'APIController::draw/$1');
$routes->get('/api/(:alpha)/latest', 'APIController::latest/$1');
$routes->get('/api/(:alpha)/(:num)', 'APIController::draw/$1/$2');

// Web Routes
$routes->get('/', 'SiteController::index');