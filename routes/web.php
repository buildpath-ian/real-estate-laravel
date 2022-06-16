<?php

use Illuminate\Support\Facades\Route;

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

// Homepage
Route::get('/', function () {
    return view('welcome');
});

// Show all listings
Route::get('/{propert_type}/{listing_type}/', function () {
    return view('welcome');
});

// Show a single listing
Route::get('/listing/{listing_address_slug}/{id}', function () {
    return view('welcome');
});

// User login
Route::get('/login', function () {
    return view('welcome');
});

// User signup
Route::get('/signup', function () {
    return view('welcome');
});

// User's saved listings
Route::get('/account/saved', function () {
    return view('welcome');
});

// User's listing's showing status
Route::get('/account/show-status', function () {
    return view('welcome');
});

//properties controller
//users controller
