<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {

    Voyager::routes();

    Route::resource('/','indexController');
    Route::get('friends/{id}','friendsController@index');
    Route::resource('register','registerController');
    Route::resource('UserSpects','userSpectsController');
    Route::resource('findMatch','findMatchController');
    Route::get('messages','messageController@max');
    Route::get('message','messageController@get');
    Route::get('message-details/{id}','messageDetailController@index');
    Route::resource('user-friends','userFriendsController');
    Route::get('user-about/{id}','timelineAboutController@index');
    Route::get('user-timeline/{id}','userTimelineController@userTimeline');
    Route::get('user-album/{id}','timelineAlbumController@userAlbum');


    Route::get('details/{id}','messageDetailController@detailedMessages');

    Route::get('userProfile/{id}','userController@edit');
    Route::post('userUpdate/{id}','userController@update');
    Route::view('test','vendor.voyager.test');
    Route::get('senderMessages/{id}','messageController@senderMessages');

});
