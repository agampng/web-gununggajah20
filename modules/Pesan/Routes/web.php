<?php

Route::group(
    [
        'prefix'     => 'admin',
        'as'         => '',
        'middleware' => ['auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('pesan', 'PesanController@index')->name('pesan.index');
        $router->get('pesan/{pesan}', 'PesanController@show')->name('pesan.show');
        $router->post('pesan/{pesan}', 'PesanController@update')->name('pesan.update');
        $router->delete('pesan/{pesan}', 'PesanController@destroy')->name('pesan.destroy');
    }
);
