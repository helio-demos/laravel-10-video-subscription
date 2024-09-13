<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Route::get('/static-site', function () {return view('welcome');});
Route::get('/static-site/pages/{page}', function ($page) {return dd($page);});


Route::get('/docs', function () {return view('welcome');});
Route::get('/docs/{page-slug}', function ($pageSlug) {return dd($pageSlug);});
Route::view('/docs/get-started',  'docs.admin-get-started');

Route::get('/dash', function () {return view('welcome');});

Route::get('/dev-tools', function () {return view('welcome');});

Route::get('/sitemap',            'App\Http\Controllers\SitemapController@sitemap');


Route::get('/dash/login',                   'App\Http\Controllers\DashboardController@authLogin');
Route::get('/dash/auth/callback',           'App\Http\Controllers\DashboardController@authLoginCallback');

Route::get('/dash/dashboards/new-sales-orders',  'App\Http\Controllers\DashboardController@newSalesOrders');
Route::get('/dash/dashboards/sheet-export',       'App\Http\Controllers\DashboardController@sheetExport');

Route::get('/dash/platform/admin-logs',     'App\Http\Controllers\DashboardController@authLogin');
Route::get('/dash/platform/chat-logs',      'App\Http\Controllers\DashboardController@authLogin');
Route::get('/dash/platform/transations',    'App\Http\Controllers\DashboardController@authLogin');
Route::get('/dash/platform/sales-orders',   'App\Http\Controllers\DashboardController@authLogin');

Route::get('/dash/settings/my-account',     'App\Http\Controllers\DashboardController@authLogin');
Route::get('/dash/settings/logout',         'App\Http\Controllers\DashboardController@authLogin');















Route::get('/test-db', function () {
    // Test database connection
    try {
      DB::connection()->getPdo();
    } catch (\Exception $e) {
      die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});



// Route::get('/components/{component}', function ($component) {
//     dd($component);
//     return view('welcome');
// });

// Route::get('/component-pages/{page}', function ($page) {
//     return view('ui-pages.components',['page'=>$page]);
// });
