<?php

Route::group(
    [
        'prefix'     => 'admin',
        'as'         => '',
        'middleware' => ['auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('master', 'MasterController@index')->name('master.index');
        $router->get('master/create', 'MasterController@create')->name('master.create');
        $router->post('master', 'MasterController@store')->name('master.store');
        $router->get('master/{master}', 'MasterController@show')->name('master.show');
        $router->get('master/{master}/edit', 'MasterController@edit')->name('master.edit');
        $router->put('master/{master}', 'MasterController@update')->name('master.update');
        $router->delete('master/{master}', 'MasterController@destroy')->name('master.destroy');
    }
);
