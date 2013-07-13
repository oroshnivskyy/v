<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
Route::resource('login', 'LoginController', ['only' => ['index', 'store']]);
Route::get(
    'cache-clear',
    function () {
        if (!Auth::check()) {
            return App::abort(404);
        }
        Cache::flush();
        return Redirect::back();
    }
);

Route::group(
    ['prefix' => '{groupUrl}'],
    function () {
        Route::get('/', ['as' => 'product_group', 'uses' => 'ProductGroupController@show']);
        Route::get('{productUrl}', ['as' => 'product', 'uses' => 'ProductController@show']);
    }
);
