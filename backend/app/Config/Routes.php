<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}


$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home'); // Adjust if needed
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

// Home page
$routes->get('/', 'Home::index');

// Signup
$routes->get('signup', 'AuthController::signup');         // Show signup form
$routes->post('signupFunc', 'AuthController::signupFunc'); // Handle signup POST

// Login
$routes->get('login', 'AuthController::login');           // Show login form
$routes->post('loginFunc', 'AuthController::loginFunc');  // Handle login POST

// Logout
$routes->post('logoutFunc', 'AuthController::logout');    // Handle logout


if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
