<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Login Route
$routes->get('/logout', 'Auth::logout');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::register');
// User Routes
$routes->get('/collection/(:alpha)', 'LandingPage::search/$1');
$routes->get('/collection/(:num)', 'LandingPage::product_detail/$1');
$routes->get('/collection', 'LandingPage::collection');
$routes->get('/', 'LandingPage');
// Cart Route
$routes->put('/cart/update', 'Cart::update');
$routes->delete('/cart/delete/(:num)', 'Cart::remove/$1');
$routes->get('/cart/(:num)', 'Cart::buy/$1');
$routes->get('/cart', 'Cart::index');
// checkout route
$routes->post('/checkout', 'Checkout::checkout');
$routes->get('/checkout', 'Checkout::checkout');
$routes->get('/autofill/(:num)', 'Checkout::autofill/$1');
// konfirmasi pembayaran route
$routes->get('/konfirmasi-pembayaran', 'ConfirmPay');
$routes->post('/konfirmasi-pembayaran', 'ConfirmPay::input');


// Admin Routes
$routes->get('/admin/dashboard', "Admin\Dashboard::index");
$routes->post('/admin/produk/create', "Admin\Produk::create");
// harus dibenerin ntar method nya--------------------------------------
$routes->post('/admin/produk/update/(:num)', "Admin\Produk::update/$1");
$routes->get('/admin/produk/delete/(:num)', "Admin\Produk::delete/$1");
// -----------------------------------------------------------------------
$routes->get('/admin/produk/(:num)', "Admin\Produk::editProduk/$1");
$routes->get('/admin/produk', "Admin\Produk::index");



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
