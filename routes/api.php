<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix'=>'/temp'],function () {
    Route::post('/storeTempPic',[
        'uses' => 'TempController@storeTempPic',
    ]);

    Route::post('/storeTempDoc',[
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

Route::group(['prefix'=>'/mail', 'middleware'=>['web']],function () {

    Route::post('/invite', [
        'uses' => 'MailController@sendInvitationLink',
    ]);
});

\App\Util\CRUD\RouteUtils::dynamicAddRoutes('/user','UserController',['web']);