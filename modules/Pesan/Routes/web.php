<?php

Route::group(
    [
        'prefix'     => 'admin',
        'as'         => '',
        'middleware' => ['auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('pesan', 'PesanController@index')->name('pesan.index');
        $router->get('pesan/create', 'PesanController@create')->name('pesan.create');
        $router->post('pesan', 'PesanController@store')->name('pesan.store');
        $router->get('pesan/{pesan}', 'PesanController@show')->name('pesan.show');
        $router->get('pesan/{pesan}/edit', 'PesanController@edit')->name('pesan.edit');
        $router->put('pesan/{pesan}', 'PesanController@update')->name('pesan.update');
        $router->delete('pesan/{pesan}', 'PesanController@destroy')->name('pesan.destroy');
    }
);
