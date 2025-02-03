<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/users', 'UserController::index');
$routes->get('/users/new', 'UserController::new');
$routes->post('/users', 'UserController::create');
$routes->get('/users/(:num)', 'UserController::show/$1');
$routes->get('/users/(:num)/edit', 'UserController::edit/$1');
$routes->post('/users/(:num)', 'UserController::update/$1');
$routes->get('/users/(:num)/delete', 'UserController::delete/$1');

$routes->get('/laporan', 'LaporanController::index');
