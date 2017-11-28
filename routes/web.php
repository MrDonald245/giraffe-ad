<?php

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

use Illuminate\Support\Facades\Route;


Route::auth();

Route::middleware('auth')->group(function () {
    Route::get('/', 'HomeController@index')
        ->name('home.index');

    Route::get('/create', 'AdvertisementController@create')
        ->name('ad.create');

    Route::get('/edit/{advertisement}', 'AdvertisementController@edit')
        ->name('ad.edit');

    Route::get('/{advertisement}', 'AdvertisementController@show')
        ->name('ad.show');

    Route::get('/delete/{advertisement}', 'AdvertisementController@delete')
        ->name('ad.delete');

    Route::post('/save', 'AdvertisementController@save')
        ->name('ad.save');
});