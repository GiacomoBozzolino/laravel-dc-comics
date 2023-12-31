<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController as ComicController;

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

Route::get('/', [ComicController::class, 'index']) ->name('homepage');
// Route::get('/comic/{id}', [ComicController::class, 'show']) ->name('comics.show');
// Route::get('/create', [ComicController::class, 'create']) ->name('comics.create');


Route::resource('comics', ComicController::class);