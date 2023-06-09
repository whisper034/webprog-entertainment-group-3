<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistGroupController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TrackController;
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
Route::get('/about', [AboutInfoController::class, 'viewAbout']);
Route::get('/artist-group', [ArtistGroupController::class, 'viewArtistGroup']);
Route::get('/artist-group/{artist_group_id}', [ArtistController::class, 'viewArtist']);
Route::get('/album', [AlbumController::class, 'viewAlbum']);
Route::get('/album/{album_id}', [TrackController::class, 'viewTrack']);
