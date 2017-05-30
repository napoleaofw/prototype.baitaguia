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

// Map
Route::get('/map', 'FrontEnd\MapController@index');

// Home
Route::get('/', 'FrontEnd\HomeController@index');

// Login / Register
Route::get('/auth', 'FrontEnd\AuthController@index');

// Search
Route::get('/search', 'FrontEnd\SearchController@index');

// Advertisement
Route::get('/advertisement', 'FrontEnd\AdvertisementController@index');

// Account
Route::get('/account', 'FrontEnd\AccountController@index');

// Profile
Route::get('/profile', 'FrontEnd\ProfileController@index');

// Create Advertisement
Route::get('/create-advertisement', 'FrontEnd\CreateAdvertisementController@index');

// Terms
Route::get('/terms', 'FrontEnd\TermsController@index');

// Privacity
Route::get('/privacity', 'FrontEnd\PrivacityController@index');

// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');
// Route::get('', '');