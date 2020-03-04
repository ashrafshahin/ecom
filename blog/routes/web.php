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

// Route::get('/', function () {
//     return view('welcome');
// });

// // testing how to make another routes/url facades create korlam
// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/','homeController@index');
// add product korar jonno link up-- 
Route::get('/products','productController@products');
// upload ar jonno roure delam
Route::post('/upload','productController@dataupload');
