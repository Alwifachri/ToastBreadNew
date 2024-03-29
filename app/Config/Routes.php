<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Login');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Dashboard::index');
$routes->get('/login', 'Login');
$routes->get('/Shop', 'Shop::index', ['filter' => 'auth']);
$routes->get('/register', 'Register');
// $routes->get('/SelectedItem', 'SelectedItem::index', ['filter' => 'auth']);
$routes->get('/shop/selecteditem/(:segment)', 'Shop::selected/$1');
$routes->get('/profile/(:segment)', 'Profile::editprofile/$1');
$routes->get('/cart', 'Cart::index', ['filter' => 'auth']);

$routes->get('/admin', 'Admin');
$routes->get('/orders', 'Orders');
$routes->get('/product', 'Product');
$routes->get('/product/create', 'Product::create');
$routes->get('/product/save', 'Product::save');
$routes->get('/product/edit/(:segment)', 'Product::edit/$1');
$routes->get('/product/delete', 'Product::delete');
$routes->get('/product/(:segment)', 'Product::detail/$1');
$routes->get('/users', 'Users');
/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
