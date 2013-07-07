<?php
Route::get('/', ['as' => 'home', 'uses' => 'HomeController@getIndex']);

Route::model('ProductGroup', 'ProductGroup');
Route::group(['prefix'=>'{ProductGroup}'], function(){
        Route::get('/',['as'=>'product_group', 'uses'=>'ProductGroupController@show']);
    });
