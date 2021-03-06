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
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('created-db', function(){
//   $forge = \Config\Database::forge();

//   if ($forge->createDatabase('event_db'))
// {
//         echo 'Database created!';
// }

// });


// $routes->get('/', 'Home::index');
$routes->addRedirect('/', 'home');
$routes->get('/gawe', 'GaweController::index');
$routes->get('/gawe/add', 'GaweController::createData');
$routes->post('/gawe/add', 'GaweController::storeGawe');
$routes->get('/gawe/edit/(:num)', 'GaweController::editGawe/$1');
$routes->put('/gawe/edit/(:num)', 'GaweController::updateGawe/$1');
$routes->delete('/gawe/del/(:num)', 'GaweController::delGawe/$1');



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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
  require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
