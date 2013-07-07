<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);
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
Route::get('login', ['as' => 'login', 'uses' => 'UserController@login']);

Route::model('ProductGroup', 'ProductGroup');
Route::group(
    ['prefix' => '{ProductGroup}'],
    function () {
        Route::get('/', ['as' => 'product_group', 'uses' => 'ProductGroupController@show']);
    }
);
