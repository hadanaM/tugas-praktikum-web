<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('pegawai', 'Pegawai::index');
$routes->post('pegawai/simpan', 'Pegawai::simpan');
$routes->get('pegawai/hapus/(:segment)', 'Pegawai::hapus/$1');
$routes->get('pegawai/edit/(:segment)', 'Pegawai::edit/$1');
