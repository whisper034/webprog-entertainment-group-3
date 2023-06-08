<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\ArtistGroupController;
use App\Http\Controllers\Controller;
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

Route::get('/', [Controller::class, 'home']);

Route::get('/about', [AboutInfoController::class, 'index']);

Route::get('/artist-group', [ArtistGroupController::class, 'index']);
