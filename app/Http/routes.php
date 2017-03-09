<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.homepage');
});

Route::get('about2', function () {
	return 'ini halaman about';
});
Route::get('about', function () {
	$halaman='about';
	return view('pages.about', compact('halaman'));
});
