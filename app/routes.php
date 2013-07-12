<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);

//Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);

Route::group(
    ['prefix' => '{groupUrl}'],
    function () {
        Route::get('/', ['as' => 'product_group', 'uses' => 'ProductGroupController@show']);
        Route::get('{productUrl}', ['as'=>'product', 'uses'=>'ProductController@show']);
    }
);

Route::get(
    'login',
    function () {
        return View::make('users.login');
    }
);
Route::post(
    'login',
    function () {
        $userData = [
            'username' => Input::get('username'),
            'password' => Input::get('password')
        ];
        if (Auth::attempt($userData)) {
            return Redirect::home();
        } else {
            return Redirect::to('login')
                ->with('login_errors', true);
        }
    }
);