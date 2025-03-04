<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/blog-details', function () {
    return view('pages.blog-details');
});

//products controller
Route::get('/products', [ProductController::class, 'index']);

Route::get('/product-details/{slug}', [ProductController::class, 'show'])->name('product.details');


Route::get('/contact', [HomeController::class, 'contact']);

// Route::get('/services', function () {
//     return view('pages.services');
// });

// Route::get('/projects', function () {
//     return view('pages.projects');
// });

// Route::get('/project-details', function () {
//     return view('pages.project-details');
// });
