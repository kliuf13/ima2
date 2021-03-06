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

Route::get('/', 'PagesController@index');

Route::get('/enter', 'PagesController@enter');

Route::get('/winners', 'PagesController@winners');

Route::resource('entries', 'EntriesController');


//Route::get('/entries/{id}', function ($id) {
//    return 'This is entry #'.$id;
//});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
