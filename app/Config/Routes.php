<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Frontend (Web Catalog)
$routes->get('/', 'Frontend\Home::index');
$routes->get('/promo', 'Frontend\Promo::index');
$routes->get('/menu', 'Frontend\Menu::index');
$routes->get('/menu/(:any)', 'Frontend\Menu::detail/$1');
$routes->get('/about', 'Frontend\About::index');
$routes->get('/contact', 'Frontend\Contact::index');
$routes->get('/profile', 'Frontend\User::index');
$routes->resource('cartapis', ['controller' => 'API\MyAPI\CartAPI']);
$routes->get('/cart', 'Frontend\Cart::index');
$routes->get('/order', 'Frontend\Order::index');
$routes->get('/order/payment', 'Frontend\Order::payment');
$routes->get('/login', 'Frontend\Auth::login');
$routes->post('/login_process', 'Frontend\Auth::loginProcess');
$routes->get('/logout', 'Frontend\Auth::logout');
$routes->get('/registration', 'Frontend\Auth::registration');
$routes->post('/registration_process', 'Frontend\Auth::registrationProcess');
// End Frontend (Web Catalog)

// Backend (Admin Dashboard)
$routes->get('/dashboard', 'Backend\Dashboard::index');
// End Backend (Admin Dashboard)

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
