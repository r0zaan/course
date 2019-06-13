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
Route::group(['namespace' => 'Frontend'],function () {

//    Login
    Route::get('/', 'FrontendController@index');
    Route::get('/class/{id}', 'FrontendController@class');
    Route::get('/class/{classId}/unit/{id}', 'FrontendController@unit');
});
Route::group(['namespace' => 'Login'],function (){

//    Login
    Route::get('/admin', 'AuthsController@login');
    Route::post('/admin', 'AuthsController@loginPost');
    Route::post('/logout', 'AuthsController@logout');

});
Route::group(['namespace' => 'Backend','prefix' => 'admin'],function (){

//    Login
    Route::get('/home', 'DashboardController@home')->name('home');

//    Class
    Route::resource('/classes', 'ClassroomController');

//    Class Group
    Route::resource('/classGroups', 'ClassGroupController');

//    Subject
    Route::resource('/subjects', 'SubjectController');

//    Unit
    Route::resource('/units', 'UnitController');

//    Video
    Route::resource('/videos', 'VideoController');
    Route::post('/videos/class', 'VideoController@getUnitFormClass');
    Route::post('/videos/subject', 'VideoController@getUnitFormSubject');
    Route::get('/videos/video/{id}', 'VideoController@showVideo');

});
