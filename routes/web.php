<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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


Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class, 'about']);


//Laravel 8(new way)
// Route::get('/products', 
//     [ProductsController::class, 'index'])->name('products');

// Pattern is an integer
// Route::get('/products/{id}', 
//     [ProductsController::class, 'show'])->where('id', '[0-9]+');

// Pattern is an string
// Route::get('/products/{name}', 
//     [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+');

// multi Pattern
// Route::get('/products/{name}/{id}', 
//     [ProductsController::class, 'show'])->where('name', '[a-zA-Z]+', 'id', '[0-9]+');


//----------examples

// Route::get('/products/about', [ProductsController::class, 'about']);

//Laravel (also new)
// Route::get('products', 'App\Http\Controllers\ProductsController@index');

// // Before Laravel 8 - this doesn't work anymore
// Route::get('products', 'ProductsController@index');

// -----------------------------
// Route to user - string
// Route::get('/user', function () {
//     return 'Welcome to the users page';
// });

// // Route to user - array
// Route::get('/user', function () {
//   return ['PHP', 'HTML', 'Laravel'];
// });

// //Route to user - JSON 
// Route::get('/user', function () {
//   return response()->json([
//     'name' => 'Dary', 
//     'course' => 'Laravel Beginners To Advanced'
//   ]);
// });