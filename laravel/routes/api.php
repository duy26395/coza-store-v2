<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('users/{id}', function ($id) {
    dd($id);
});


Route::controller('App\Http\Controllers\Member\LoginController')->prefix('/members')->group(function () {
    Route::post('/login', 'LoginAction');
    Route::post('/logout', 'LogoutAction');
});

Route::controller('App\Http\Controllers\Admin\LoginController')->prefix('/admin')->group(function () {
    Route::post('/login', 'LoginAction');
    Route::post('/logout', 'LogoutAction');
});


Route::controller('App\Http\Controllers\ProductsController')->prefix('/products')->group(function () {
    Route::get('/', 'index');

    Route::middleware(['auth:administrators'])->group(function () {
        Route::get('/{products}', 'show')->whereNumber('products');
        Route::post('/', 'create');
        Route::put('/{products}', 'update')->whereNumber('products');
        Route::delete('/{products}', 'destroy')->whereNumber('products');
    });
});
