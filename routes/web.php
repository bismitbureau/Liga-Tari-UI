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
    return view('index');
  });
Route::get('/about', function () {
    return view('about');
});

Route::get('/achievements', function () {
    return view('achievements');
});

Route::get('/contact-us', function () {
    return view('contactus');
});

Route::get('/events', function () {
    return view('events');
});

Route::get('/event-details', function () {
    return view('event-details');
});

Route::get('/news', function () {
    return view('news');
});

// Route::get('/', 'PageController@index')->name('index');



Route::get('/gallery', function () {
  return view('gallery');
});

// Route::get('/hire', function () {
//   return view('ligtarforhire');
// });

// Route::get('/galeriprev', function () {
//   return view('galeritarian');
// });


Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');

  Route::resource('/articles', 'ArticleController');
});
