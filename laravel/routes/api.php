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



Route::post('/login', App\http\Controllers\LoginAction::class);
Route::post('/logout', App\http\Controllers\LogoutAction::class);

Route::controller('App\Http\Controllers\ProductsController')->prefix('/products')->group(function () {
    Route::get('/', 'index');
    
    Route::middleware(['auth:members'])->group(function () {
        Route::get('/{products}', 'show')->whereNumber('products');
        Route::post('/', 'create');
        Route::put('/{products}', 'update')->whereNumber('products');
        Route::delete('/{products}', 'destroy')->whereNumber('products'); 
    });

});

