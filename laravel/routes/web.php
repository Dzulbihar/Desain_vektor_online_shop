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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/login', 'AuthController@login')->name('login');
//Route::post('/postlogin', 'AuthController@postlogin');
//Route::get('/logout', 'AuthController@logout');
	Route::get('/', function () {
	    return view('dashboards.index');
	});

Route::group(['middleware' => ['auth']],function(){


	
	Route::get('/portofolio', 'PortofolioController@index');
	Route::post('/portofolio/create', 'PortofolioController@create');
	Route::get('/portofolio/{id}/edit', 'PortofolioController@edit');
	Route::post('/portofolio/{id}/update', 'PortofolioController@update');
	Route::get('/portofolio/{id}/delete', 'PortofolioController@delete');

	Route::get('/kategori', 'KategoriController@index');
	Route::post('/kategori/create', 'KategoriController@create');
	Route::get('/kategori/{id}/edit', 'KategoriController@edit');
	Route::post('/kategori/{id}/update', 'KategoriController@update');
	Route::get('/kategori/{id}/delete', 'KategoriController@delete');

});

	Route::get('/home', 'DashboardController@index')->name('home');

	Route::get('/pemesan', 'PemesananController@index');

	Route::get('/portofolio/{id}/customer', 'PortofolioController@customer');
	Route::get('/portofolio/{id}/{idcustomer}/deletecustomer', 'PortofolioController@deletecustomer');

	Route::post('/portofolio/{id}/adddesain', 'PortofolioController@adddesain');

	Route::get('/profile', 'ProfileController@index');


Route::get('/customer_portofolio', 'Customer_portofolioController@index');
