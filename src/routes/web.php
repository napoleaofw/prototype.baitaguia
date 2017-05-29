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
Route::get('/map', 'FrontEndController@map');

// Home
Route::get('/', 'FrontEndController@home');

// Login / Register
Route::get('/auth', 'FrontEndController@auth');

// Search
Route::get('/search', 'FrontEndController@search');

// Advertisement
Route::get('/advertisement', 'FrontEndController@advertisement');

// Account
Route::get('/account', 'FrontEndController@account');

// Profile
Route::get('/profile', 'FrontEndController@profile');

// Create Advertisement
Route::get('/create-advertisement', 'FrontEndController@createAdvertisement');

// Terms
Route::get('/terms', 'FrontEndController@terms');

// Privacity
Route::get('/privacity', 'FrontEndController@privacity');

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