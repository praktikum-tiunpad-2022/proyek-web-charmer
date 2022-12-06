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
$routes->setDefaultController('Auth');
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
$routes->match(['get','post'],'/', 'Auth::index');
$routes->get('logout','Auth::logout');
//$routes->get('home','Home::index',['filter' => 'auth']);
$routes->get('barang','Barang::index',['filter' => 'auth']);
$routes->get('transaksi','Transaksi::index',['filter' => 'auth']);
$routes->get('kategori','Kategori::index',['filter' => 'auth']);

//$routes->get('/home', 'Home::index');
$routes->get('new','Barang::create');
$routes->post('/save','Barang::save');
$routes->get('edit/(:num)','Barang::edit/$1');
$routes->post('edit/(:num)','Barang::update/$1');
$routes->get('delete/(:num)','Barang::delete/$1');
$routes->get('detail/(:num)','Transaksi::detail/$1');
$routes->get('create','Kategori::create1');
$routes->post('/kategori','Kategori::save1');
$routes->get('/home','Transaksi::home');
$routes->get('edit_ktg/(:num)','Kategori::edit1/$1');
$routes->post('edit_ktg/(:num)','Kategori::update1/$1');
$routes->get('delete_ktg/(:num)','Kategori::delete1/$1');
$routes->match(['get','post'], 'register', 'Auth::register');

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
