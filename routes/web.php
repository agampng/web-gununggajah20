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

Route::redirect('/login', 'auth/login');
Route::get('/', 'HomeController@index')->name('home.index')->middleware('guest');
Route::get('admin', ['uses' => 'DashboardController', 'as' => 'admin.dashboard'])->middleware('auth');

//artikel guest
Route::get('/artikel', 'HomeArtikelController@index')->name('artikel.home.index');
Route::get('/artikel/{slug}', 'HomeArtikelController@show')->name('artikel.home.show');

Route::get('contact-form', 'ContactFormController@create')->name('contact-form.create');
Route::post('contact-form', 'ContactFormController@store')->name('contact-form.store');

//paket wisata
Route::get('paket-wisata/', 'PaketWisataController@index');
Route::get('paket-wisata/{slug}', 'PaketWisataController@show');

