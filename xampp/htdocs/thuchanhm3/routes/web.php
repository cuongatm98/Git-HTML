<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
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
Route::get('/',function(){
    return view('backend.layout.dashboard');
})->name('dashboard');

Route::prefix('/products')->group(function(){
    Route::get('/search', [ProductController::class,'getSearch'])->name('search');
    Route::post('/search', 'SearchController@getSearchAjax')->name('search');
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('{id}/edit', [ProductController::class, 'update'])->name('products.update');
    Route::get('{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
});
Route::prefix('/categories')->group(function(){
    Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/create', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::post('{id}/edit', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('{id}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
});
