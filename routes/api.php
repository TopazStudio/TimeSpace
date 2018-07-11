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
        'uses' => 'AuthController@login',
    ]);

    Route::get('/logout', [
        'uses' => 'AuthController@logout',
    ]);

    Route::post('/signInWithGoogle', [
        'uses' => 'AuthController@signInWithGoogle',
    ]);

    Route::post('/signInWithFacebook', [
        'uses' => 'AuthController@signInWithFacebook',
    ]);

});

Route::group(['prefix'=>'/search', 'middleware'=>['web']],function () {
    Route::get('index/{entity}',[
        'uses'=>'SearchController@index'
    ]);

    Route::post('complex/{entity}',[
        'uses'=>'SearchController@complex'
    ]);

    Route::get('simple/{entity}/{property}/{term}',[
        'uses'=>'SearchController@simple'
    ]);

});

Route::group(['prefix'=>'/mail', 'middleware'=>['auth.jwt']],function () {

    Route::post('/invite', [
        'uses' => 'MailController@sendInvitationLink',
    ]);
});

Route::group(['prefix'=>'/group', 'middleware'=>['auth.jwt']],function () {

    Route::post('/joinGroup', [
        'uses' => 'GroupController@joinGroup',
    ]);

    Route::post('/leaveGroup', [
        'uses' => 'GroupController@leaveGroup',
    ]);
});

Route::group(['prefix'=>'/appinvites', 'middleware'=>['auth.jwt']],function () {

    Route::post('/searchForFriends', [
        'uses' => 'AppInvitesController@searchForFriends',
    ]);

    Route::post('/commitAppInvites', [
        'uses' => 'AppInvitesController@commitAppInvites',
    ]);
});

\App\Util\CRUD\RouteUtils::dynamicAddRoutes('/user','UserController',['web']);