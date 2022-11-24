<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;

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
//     return view('frontend/addproduct');
// });

// Route::get('/addproduct', 'App\Http\Controllers\Frontend\ProductController@addproduct')->name("addproduct");
// Route::get('/showproduct', 'App\Http\Controllers\Frontend\ProductController@showproduct')->name("showproduct");
// Route::post('/productstore', 'App\Http\Controllers\Frontend\ProductController@productstore')->name("productstore");

Route::get('/addproduct',[ProductController::class, 'addproduct'])->name('addproduct');
Route::get('/showproduct',[ProductController::class, 'showproduct'])->name('showproduct');
Route::get('/editproduct/{id}',[ProductController::class, 'editproduct'])->name('editproduct');
Route::get('/delete/{id}',[ProductController::class, 'delete'])->name('delete');
Route::get('/status/{id}',[ProductController::class, 'status'])->name('status');
Route::post('/addproduct',[ProductController::class, 'productstore'])->name('productstore');
Route::post('/update/{id}',[ProductController::class, 'update'])->name('update');

Route::get('/', function () {
    return view('frontend.home');
});