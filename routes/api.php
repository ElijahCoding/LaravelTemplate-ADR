<?php

Route::group(['prefix' => 'auth'], function () {
    Route::post('register', 'Auth\RegisterController@action');
    Route::post('login', 'Auth\LoginController@action');
    Route::get('me', 'Auth\MeController@action');
});


Route::group(['middleware' => 'auth:api'], function () {
    /**
    * Regions
    */
    Route::resource('/regions', 'Region\RegionController');

    /**
    * Tech
    */
    Route::group(['prefix' => 'tech', 'namespace' => 'Tech'], function () {
        /**
        * Types
        */
        Route::get('/operation/types', 'Type\TechOperationTypeController@index');

        /**
        * Operations
        */
        Route::resource('/operations', 'Operation\TechOperationController');


    });
});
