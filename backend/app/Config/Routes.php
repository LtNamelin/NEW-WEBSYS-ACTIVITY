<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Pages'); // Default controller
$routes->setDefaultMethod('index');     // Default method
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Static / Pages Routes
 * --------------------------------------------------------------------
 */
$routes->get('/', 'Users::index');
$routes->get('/moodboard', 'Users::moodboard');
$routes->get('/roadmap', 'Users::roadmap');
$routes->get('/artworks', 'Users::artworks');
$routes->get('/commissions', 'Users::commissions');
$routes->get('/admindash', 'Users::admindash');
$routes->get('/account', 'Users::account');
$routes->get('/requests', 'Users::requests');


/*
 * --------------------------------------------------------------------
 * Auth Routes
 * --------------------------------------------------------------------
 */
$routes->get('signup', 'AuthController::signup');
$routes->post('signup', 'AuthController::signupFunc');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::loginFunc');

$routes->post('logout', 'AuthController::logout');
