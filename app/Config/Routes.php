<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/menu', 'Menu::index');
$routes->get('/reservation', 'Reservation::index');
$routes->get('/contact', 'Contact::index');
$routes->post('/send', 'Home::send');
