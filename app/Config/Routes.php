<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultnamespace('App\Controllers');
$routes->setDefaultController('Home');
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
// $routes->get('login', 'User::login');
$routes->post('auth/login', 'User::login');
$routes->get('auth/logout', 'User::logout');
$routes->get('/login', 'PageController::show_auth_login');
$routes->get('/template', 'Home::index');
$routes->get('/lang/{locale}', 'Language::index');
$routes->group('', ['filter' => 'auth'], function($routes) {
$routes->get('/','Dashboard::index');
$routes->resource('user');
$routes->resource('diagnosis');
$routes->resource('tindakan');
$routes->resource('obat');
$routes->resource('kasus');
$routes->resource('pendaftaran');
$routes->get('/data-rekammedis','Pendaftaran::data');
	// Pasien
$routes->get('/pasien', 'Masterdata::pasien');
$routes->add('/pasien/create', 'Masterdata::pasienstore');
$routes->get('/pasien/edit/(:num)', 'Masterdata::pasienedit/$1');
$routes->add('/pasien/update/(:num)', 'Masterdata::pasienupdate/$1');
$routes->get('/pasien/delete/(:num)', 'Masterdata::pasiendelete/$1');

// rekam medis
$routes->get('/rekammedis','RekamMedis::index');
$routes->get('/cetakkartu','RekamMedis::CetakKartu');
$routes->get('/rekam-pasien','RekamMedis::pasien');
$routes->get('/rekam-diagnosis','RekamMedis::diagnosis');
$routes->get('/rekam-anamnese','RekamMedis::anamnese');
$routes->get('/rekam-tindakan','RekamMedis::tindakan');
$routes->get('/rekam-obat','RekamMedis::obat');
// core Rekam Medis
$routes->post('/rekammedis/core/pasien','RekamMedis::Cpasien');
$routes->post('/rekammedis/core/alergi','RekamMedis::alergi');
$routes->post('/rekammedis/core/anamnese','RekamMedis::Canamnese');
$routes->post('/rekammedis/core/diagnosa','RekamMedis::Cdiagnosa');
$routes->post('/rekammedis/core/tindakan','RekamMedis::Ctindakan');
$routes->post('/rekammedis/core/obat','RekamMedis::Cobat');

// delete routes
$routes->post('/alergi/delete/(:num)', 'RekamMedis::DistoryAlergi/$1');
$routes->post('/Rdiagnosa/delete/(:num)', 'RekamMedis::DistoryDiagnosa/$1');
$routes->post('/Rtindakan/delete/(:num)', 'RekamMedis::DistoryTindakan/$1');
$routes->post('/Robat/delete/(:num)', 'RekamMedis::DistoryObat/$1');
// rest data
$routes->get('/data/kunjungan', 'Dashboard::kunjungan');
// laporan
$routes->get('/laporan/kunjungan', 'Dashboard::LaporanKunjungan');
$routes->get('/laporan/penyakit', 'Dashboard::penyakit');
});

	
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}