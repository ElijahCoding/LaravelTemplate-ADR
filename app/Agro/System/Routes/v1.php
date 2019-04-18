<?php

Route::group(['namespace' => 'App\Agro\System\Controllers\V1'], function () {
    Route::get('/', 'TestController@index');
});
