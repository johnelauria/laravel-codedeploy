<?php

use Illuminate\Support\Facades\Route;

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

Route::prefix('store')->name('store.')->group(function() {
    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/phpinfo', function () {
        return view('phpinfo');
    })->name('phpinfo');

    Route::get('/sample-broken-page', function() {
        return "this is broken, will test rollback";
    });
});
