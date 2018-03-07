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

Route::get('/', 'PagesController@getHome');

Route::get('/about', 'PagesController@getAbout');

Route::get('/contact', 'PagesController@getContact');

Route::get('/games', 'PagesController@getGames');

Route::get('/blog', 'PagesController@getBlog');

Route::get('/videos', 'PagesController@getVideos');

Route::get('/messages', 'MessagesController@getMessages');

Route::post('/contact/submit', 'MessagesController@submit');


Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

	Route::prefix('admin')->group(function() {
		Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
		Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
		Route::get('/', 'AdminController@index')->name('admin.dashboard');
		Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

	//Password reset routes
		Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
		Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
		Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
		Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
	});
 

/* Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
}); */
