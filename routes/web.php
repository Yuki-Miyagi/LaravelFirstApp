<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])
    ->name('birth.index');

Route::get('/birth/create', [PostController::class, 'create'])
    ->name('birth.create');

Route::post('/birth/store', [PostController::class, 'store'])
    ->name('birth.store');

Route::delete('/birth/delete', [PostController::class, 'delete'])
    ->name('birth.delete');
