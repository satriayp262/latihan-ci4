<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/pegawai', 'Pegawai::index');
$routes->get('/pegawai/create', 'Pegawai::create');
$routes->post('/pegawai/store', 'Pegawai::store');
$routes->get('pegawai/edit/(:num)', 'Pegawai::edit/$1');
$routes->post('pegawai/update/(:num)', 'Pegawai::update/$1');
$routes->get('pegawai/delete/(:num)', 'Pegawai::delete/$1');

$routes->get('/inventaris', 'Inventaris::index');
$routes->get('/inventaris/create', 'Inventaris::create');
$routes->post('/inventaris/store', 'inventaris::store');
$routes->get('inventaris/edit/(:num)', 'Inventaris::edit/$1');
$routes->post('inventaris/update/(:num)', 'Inventaris::update/$1');
$routes->get('inventaris/delete/(:num)', 'Inventaris::delete/$1');