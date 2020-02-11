<?php

/*
|--------------------------------------------------------------------------
| ViralsPackage\ViralsInventory Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are
| handled by the ViralsPackage\ViralsInventory package.
|
*/

Route::group(
[
    'namespace'  => 'ViralsPackage\ViralsInventory\app\Http\Controllers',
    'middleware' => 'web',
],
function () {
        // Authentication Routes...
        Route::get('login', 'Auth\LoginController@showLoginForm')->name('inventory.auth.login');
        Route::post('login', 'Auth\LoginController@login');
        Route::get('logout', 'Auth\LoginController@logout')->name('inventory.auth.logout');
        Route::post('logout', 'Auth\LoginController@logout');
//
        // Registration Routes...
        Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('inventory.auth.register');
        Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
        Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('inventory.auth.password.reset');
        Route::post('password/reset', 'Auth\ResetPasswordController@reset');
        Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('inventory.auth.password.reset.token');
        Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('inventory.auth.password.email');

        Route::get('home', 'AdminController@dashboard')->name('inventory.dashboard');
        Route::get('/', 'AdminController@redirect')->name('inventory');
});
