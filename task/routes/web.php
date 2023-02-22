<?php

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

Route::get('product/index', [ProductController::class, 'index']);
Route::get('product/show/{id}', [ProductController::class, 'show']);

Route::get('product/destroy/{id}' , [ProductController::class, 'destroy']);

Route::get('product/edit/{id}' , [ProductController::class, 'edit']);

Route::post('product/update/{id}' , [ProductController::class, 'update']);
