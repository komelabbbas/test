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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

Route::get('/user/resend', 'Auth\RegisterController@getResendNotification');

Route::post('/user/resend', 'Auth\RegisterController@resendNotification')->name('verification.resend');


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
| Route group for Backend prefixed with "admin".
| To Enable Authentication just remove the comment from Admin Middleware
|
*/

Route::group([
    'middleware' => ['admin'],
], function () {
    //  Users
    Route::resource('/users',  'UsersController');

    // Roles
    Route::resource('/roles',  'RoleController');

    // Permission
    Route::resource('/permissions',  'PermissionController');
});

Route::group([
    'middleware' => ['auth'],
], function () {
    // Profile
    Route::get('/user/profile',  'ProfileController@showProfile')->name('profile.index');

    Route::put('/user/profile/{id}',  'ProfileController@updateProfile');

    Route::get('/user/profile/image/remove',  'ProfileController@removeImage');
});
