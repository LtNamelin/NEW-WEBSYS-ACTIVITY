<?php

use CodeIgniter\Router\RouteCollection;
// artworks and commissions now act as service pages
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');
$routes->get('/login', 'Users::login');
$routes->get('/signup', 'Users::signup');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/artworks', 'Users::artworks');
$routes->get('/commissions', 'Users::commissions');
$routes->get('/admindash', 'Users::admindash');
$routes->post('/create-account', 'UserController::create');
$routes->get('/test-users', 'TestController::index');
