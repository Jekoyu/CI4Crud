<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;


$routes = Services::routes();

// Rute default
$routes->get('/', 'Home::index');

// Rute untuk AsdosController
$routes->get('/data', 'AsdosController::index');
$routes->get('/create', 'AsdosController::create');
$routes->post('/save', 'AsdosController::save');
$routes->get('/edit/(:num)', 'AsdosController::edit/$1');
$routes->post('update/(:num)', 'AsdosController::update/$1');
$routes->get('/delete/(:num)', 'AsdosController::delete/$1');
