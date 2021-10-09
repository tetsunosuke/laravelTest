<?php

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

use App\Http\Controllers\ActionController;

// Laravel 8の書き方に修正
Route::get('/', [ActionController::class, 'index']);
Route::post('/add', [ActionController::class, 'add']);
Route::post('/delete', [ActionController::class, 'delete']);

