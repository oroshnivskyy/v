<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
Route::resource('login', 'LoginController', ['only'=>['index','store']]);

Route::group(
    ['prefix' => '{groupUrl}'],
    function () {
        Route::get('/', ['as' => 'product_group', 'uses' => 'ProductGroupController@show']);
        Route::get('{productUrl}', ['as'=>'product', 'uses'=>'ProductController@show']);
    }
);
