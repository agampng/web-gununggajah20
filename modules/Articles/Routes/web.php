<?php

Route::group(
    [
        'prefix'     => 'admin',
        'as'         => '',
        'middleware' => ['auth'],
    ],
    function (\Illuminate\Routing\Router $router) {
        $router->get('article', 'ArticlesController@index')->name('article.index');
        $router->get('article/create', 'ArticlesController@create')->name('article.create');
        $router->post('article', 'ArticlesController@store')->name('article.store');
        $router->get('article/{article}', 'ArticlesController@show')->name('article.show');
        $router->get('article/{article}/edit', 'ArticlesController@edit')->name('article.edit');
        $router->put('article/{article}', 'ArticlesController@update')->name('article.update');
        $router->delete('article/{article}', 'ArticlesController@destroy')->name('article.destroy');
    }
);
