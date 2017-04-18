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

Route::get('/component', function () {
    return view('component');
});

Route::get('/bulmaMessage', function () {
    return view('bulmaMessage');
});

Route::resource('projects', 'ProjectController');

Route::get('elements', function () {
    return view('elements');
});

Route::post('submitSomewhere', function () {
    return request()->all();
});

Route::resource('products', 'ProductController');
Route::get('menus/cascaderData', 'MenuController@menuCascaderData');

Route::resource('menus', 'MenuController');