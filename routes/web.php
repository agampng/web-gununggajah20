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
Route::get('/profil/informasi-geografis', 'HomeController@infoGeografis')->name('infoGeografis.index')->middleware('guest');
Route::get('admin', ['uses' => 'DashboardController', 'as' => 'admin.dashboard'])->middleware('auth');

//artikel guest
Route::get('/artikel', 'HomeArtikelController@index')->name('artikel.home.index');
Route::get('/artikel/{slug}', 'HomeArtikelController@show')->name('artikel.home.show');

Route::get('contact-form', 'ContactFormController@create')->name('contact-form.create');
Route::post('contact-form', 'ContactFormController@store')->name('contact-form.store');

//paket wisata
Route::get('paket-wisata/', 'PaketWisataController@index')->name('paket-wisata.home.index');
Route::get('paket-wisata/{slug}', 'PaketWisataController@show')->name('paket-wisata.home.show');

Route::group(
    [
        'prefix'     => 'admin',
        'as'         => '',
        'middleware' => ['auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('setting/background', 'SettingController@index')->name('setting.background');
        // $router->get('master/create', 'MasterController@create')->name('master.create');
        $router->post('setting/background', 'SettingController@bgStore')->name('setting.background.store');
        // $router->get('master/{master}', 'MasterController@show')->name('master.show');
        // $router->get('master/{master}/edit', 'MasterController@edit')->name('master.edit');
        // $router->put('master/{master}', 'MasterController@update')->name('master.update');
        // $router->delete('master/{master}', 'MasterController@destroy')->name('master.destroy');
    }
);