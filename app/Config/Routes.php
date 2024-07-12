<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Todo::index');

$routes->post('/tambah', 'Todo::tambah');
$routes->post('/edit/(:segment)', 'Todo::edit/$1');
$routes->post('/hapus/(:segment)', 'Todo::hapus/$1');

