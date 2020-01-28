<?php

Route::group(
    [
        'prefix'     => '',
        'as'         => '',
        'middleware' => [],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('wisatum', 'WisataController@index')->name('wisatum.index');
        $router->get('wisatum/create', 'WisataController@create')->name('wisatum.create');
        $router->post('wisatum', 'WisataController@store')->name('wisatum.store');
        $router->get('wisatum/{wisata}', 'WisataController@show')->name('wisatum.show');
        $router->get('wisatum/{wisata}/edit', 'WisataController@edit')->name('wisatum.edit');
        $router->put('wisatum/{wisata}', 'WisataController@update')->name('wisatum.update');
        $router->delete('wisatum/{wisata}', 'WisataController@destroy')->name('wisatum.destroy');
    }
);
