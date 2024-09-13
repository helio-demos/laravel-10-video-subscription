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



Route::get('/dash/login', function () {return view('welcome');});

Route::get('/dash/auth/callback', function () {return view('welcome');});

Route::get('/dash/dash/news-sales-orders', function () {return view('welcome');});
Route::get('/dash/dash/sheet-export', function () {return view('welcome');});

Route::get('/dash/platform/admin-logs', function () {return view('welcome');});
Route::get('/dash/platform/chat-logs', function () {return view('welcome');});
Route::get('/dash/platform/transations', function () {return view('welcome');});
Route::get('/dash/platform/sales-orders', function () {return view('welcome');});

Route::get('/dash/settings/my-account', function () {return view('welcome');});
Route::get('/dash/settings/logout', function () {return view('welcome');});















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
