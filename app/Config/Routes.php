<?php

namespace Config;

use App\Controllers\Publics;

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
$routes->setTranslateURIDashes(true);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Publics::index');
$routes->get('login', 'Publics::login');
$routes->get('profil', 'Publics::profil');
$routes->get('program', 'Publics::program');
$routes->get('berita', 'Publics::berita');
$routes->get('berita/(:any)', 'Publics::detailberita/$1');
$routes->get('info/(:any)', 'Publics::detailinfo/$1');
// $routes->get('pojokit', 'Publics::pojokit');
// $routes->get('pojokit/(:any)', 'Publics::detailpojokit/$1');


$routes->get('/galeri', 'Publics::galeri');
$routes->get('/info', 'Publics::info');
$routes->get('/unduh', 'Publics::unduh');
$routes->get('/dashboard', 'Page::index');
$routes->get('/pengguna', 'Page::pengguna');
$routes->get('/news', 'Page::news');
$routes->get('/informasi', 'Page::info');
$routes->get('/pengaturan', 'Page::setting');
$routes->get('/instansi', 'Page::instansi');
$routes->get('/staff', 'Page::staff');
$routes->get('/aplikasi', 'Page::aplikasi');
$routes->get('/slider', 'Page::slider');
$routes->get('/pesan', 'Page::pesan');
$routes->get('/poling', 'Page::poling');
$routes->get('/logs', 'Page::logs');
// $routes->get('/infoit', 'Page::infoit');

$routes->post('auth', 'Fungsi::auth');
$routes->post('changepass', 'Fungsi::changepass');
$routes->post('logout', 'Fungsi::logout');
$routes->post('createUser', 'Fungsi::createUser');
$routes->post('usernonaktif', 'Fungsi::usernonaktif');
$routes->post('resetpass', 'Fungsi::resetpass');
$routes->post('kirimPesan', 'Fungsi::kirimPesan');
$routes->post('poling', 'Fungsi::poling');
$routes->post('createNews', 'Fungsi::createNews');
$routes->post('editNews', 'Fungsi::editNews');
$routes->post('delNews', 'Fungsi::delNews');
$routes->post('createInfo', 'Fungsi::createInfo');
$routes->post('editInfo', 'Fungsi::editInfo');
$routes->post('delInfo', 'Fungsi::delInfo');
$routes->post('settingWeb', 'Fungsi::settingWeb');
$routes->post('settingprofile', 'Fungsi::settingprofile');
$routes->post('createstaff', 'Fungsi::createStaff');
$routes->post('editStaff', 'Fungsi::editStaff');
$routes->post('staffdel', 'Fungsi::staffdel');
$routes->post('createApps', 'Fungsi::createApps');
$routes->post('editApps', 'Fungsi::editApps');
$routes->post('delApps', 'Fungsi::delApps');
$routes->post('createSlider', 'Fungsi::createSlider');
$routes->post('editSlider', 'Fungsi::editSlider');
$routes->post('delSlider', 'Fungsi::delSlider');
// $routes->post('createit', 'Fungsi::createit');
// $routes->post('editit', 'Fungsi::editit');
// $routes->post('delit', 'Fungsi::delit');


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
