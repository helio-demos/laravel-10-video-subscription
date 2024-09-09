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
Route::get('/test-db', function () {
    // Test database connection
    try {
      DB::connection()->getPdo();
    } catch (\Exception $e) {
      die("Could not connect to the database.  Please check your configuration. error:" . $e );
    }
});



Route::get('/components/{component}', function ($component) {
    dd($component);
    return view('welcome');
});

Route::get('/component-pages/{page}', function ($page) {
    return view('ui-pages.components',['page'=>$page]);
});
