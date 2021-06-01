<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\AdminController;
use \App\Http\Controllers\UsersController;
use \App\Http\Controllers\ProductsController;
use \App\Http\Controllers\ReviewsController;

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

Route::get('/products/{id}', [ProductsController::class, 'show']);
Route::get('/', [ProductsController::class, 'index']);
Route::get('/blocked-redirect', function(){
    return view('redirects.blocked-redirect');
});

Route::middleware(['auth', 'admin'])->group(function() {
    Route::get('/manage',  function() {
        return view('admin.manage');
    });
    Route::get('/manage/users', [AdminController::class, 'indexUsers']);
    Route::get('/manage/products', [AdminController::class, 'indexProducts']);
    Route::put('/manage/user/alter', [AdminController::class, 'alterUser']);
    Route::delete('/manage/product/delete', [AdminController::class, 'destroyProduct']);
    Route::delete('/manage/review/delete', [AdminController::class, 'destroyReview']);
    Route::get('/dashboard', function() {
        return redirect('/');
    });
});

Route::middleware(['auth', 'blocked'])->group(function() {
    Route::get('/product/create', [ProductsController::class, 'create']);
    Route::get('/redirect-create', function () {
        return view('redirects.create-redirect');
    });
    Route::post('/products', [ProductsController::class, 'store']);
    Route::post('/lend', [ProductsController::class, 'lend']);
    Route::get('/lend-redirect', function() {
        return view('redirects.lend-redirect');
    });
    Route::post('/returning', [ProductsController::class, 'returning']);
    Route::get('/redirect-returning', function () {
        return view('redirects.returning-redirect');
    });
    Route::post('returned', [ProductsController::class, 'returned']);
    Route::get('/redirect-returned', function () {
        return view('redirects.returned-redirect');
    });
    Route::get('/reviews/create', [ReviewsController::class, 'createReview']);
    Route::post('/review', [ReviewsController::class, 'storeReview']);  
    Route::get('/dashboard', [UsersController::class, 'show'])->name('dashboard');
});

Route::get('/products', [ProductsController::class, 'index']);
require __DIR__.'/auth.php';
