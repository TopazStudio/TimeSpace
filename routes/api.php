<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'/temp'],function () {
    Route::post('/image',[
        'uses' => 'TempController@storeTempPic',
    ]);

    Route::post('/doc',[
        'uses' => 'TempController@storeTempDoc',
    ]);
});


Route::group(['prefix'=>'/auth', 'middleware'=>['web']],function () {

    Route::post('/login', [
        'uses' => 'Auth\LoginController@login',
    ]);

    Route::get('/logout', [
        'uses' => 'Auth\LoginController@logout',
    ]);

});
\App\Util\CRUD\RouteUtils::dynamicAddRoutes('/user','UserController',['auth.jwt']);