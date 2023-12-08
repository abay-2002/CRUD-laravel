<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// == Bad Practice:
Route::get('/', function () {
    return view('home');
});

// == Best Practice:
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/create', [ProductController::class, 'create']);

// == Bad Practice:
// Tidak memisahkan Model, View dan Controller
// Route::get('/product', function(){
//     $products = Product::all(); 
//     return view('products/index', [
//         "products" => $products,
//     ]);
// });