<?php

Route::group(['namespace' => 'App\Agro\System\Http\Controllers'], function () {
    Route::get('/', 'TestController@index');
});
