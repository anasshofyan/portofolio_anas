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

Route::get('/', 'HomeController@index');
Route::get('portofolio', 'PageController@portofolio');
Route::get('about', 'PageController@about');
Route::get('contact', 'PageController@contact');
// Admin
Route::get('admin_anas', 'AdminController@index');
Route::get('auth/login', 'AdminController@login');


Route::get('admin/json','AdminController@json');


Route::post('contact', 'PageController@create');


