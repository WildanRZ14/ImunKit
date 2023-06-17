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
$routes->get('/', 'Home::index');
$routes->group('login', static function ($routes) {
    $routes->get('/', 'Login::index');
    $routes->post('auth', 'Login::auth');
    $routes->post('logout', 'Login::logout');
});
$routes->get('/login', "Home::login");
$routes->get('/register', "Home::register");
$routes->group('register', static function ($routes) {
    $routes->get('/', 'Register::index');
    $routes->post('auth', 'Register::auth');
});
$routes->get('/login', "Home::login");
$routes->get('/register', "Home::register");
$routes->group('administrator', function ($routes) {
    $routes->get('/', 'Admin\Dashboard::index');
    $routes->post('authAdm', 'Admin\Dashboard::authAdm');
    $routes->get('penjadwalan', 'Admin\Penjadwalan::index');
    $routes->post('penjadwalan/save', 'Admin\Penjadwalan::save');
    $routes->get('datapenjadwalan', 'Admin\Datapenjadwalan::index');
    $routes->get('datapenjadwalan/getData/(:num)', 'Admin\Datapenjadwalan::getData/$1');
    $routes->put('datapenjadwalan/update/(:num)', 'Admin\Datapenjadwalan::update/$1');
    $routes->delete('datapenjadwalan/delete/(:num)', 'Admin\Datapenjadwalan::delete/$1');
    $routes->get('datapendaftar', 'Admin\Datapendaftar::index');
    $routes->get('datapendaftar/getData/(:num)', 'Admin\Datapendaftar::getData/$1');
    $routes->put('datapendaftar/update/(:num)', 'Admin\Datapendaftar::update/$1');
    $routes->delete('datapendaftar/delete/(:num)', 'Admin\Datapendaftar::delete/$1');
});
$routes->group('users', static function ($routes) {
    $routes->get('/', 'Users\Profile::index');
    $routes->get('pendaftaran', 'Users\Pendaftaran::index');
    $routes->get('penjadwalan', 'Users\Penjadwalan::index');
    $routes->get('pemantauan', 'Users\Pemantauan::index');
    $routes->post('pemantauan/authPemantauan', 'Users\Pemantauan::authPemantauan');
    $routes->post('pemantauan/updateStatus/(:num)', 'Users\Pemantauan::updateStatus/$1');
    $routes->post('pemantauan/updateStatustoCancel/(:num)', 'Users\Pemantauan::updateStatustoCancel/$1');
    $routes->get('pemantauan/getData/(:num)', 'Users\Pemantauan::getData/$1');
    $routes->put('pemantauan/update/(:num)', 'Users\Pemantauan::update/$1');
    $routes->put('pemantauan/updatefromCancel/(:num)', 'Users\Pemantauan::updatefromCancel/$1');
    $routes->delete('pemantauan/delete/(:num)', 'Users\Pemantauan::delete/$1');

});
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
