<?php

use App\Http\Controllers\AboutInfoController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\ArtistGroupController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\TrackController;
use App\Http\Middleware\IsLoggedIn;
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

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/login', [Controller::class, 'loginPage'])->middleware(IsLoggedIn::class);
Route::post('/login', [Controller::class, 'loginUser']);

Route::post('/logout', [Controller::class, 'logout']);

Route::get('/sign-up', [Controller::class, 'signUpPage'])->middleware(IsLoggedIn::class);
Route::post('/sign-up', [Controller::class, 'signUpUser']);
Route::get('/success', [Controller::class, 'signUpSuccess']);

Route::get('/home', [Controller::class, 'home']);

Route::get('/about', [AboutInfoController::class, 'viewAbout']);

Route::get('/artist-group', [ArtistGroupController::class, 'viewArtistGroup']);
Route::get('/artist-group/{artist_group_id}', [ArtistController::class, 'viewArtist']);

Route::get('/album', [AlbumController::class, 'viewAlbum']);
Route::get('/album/{album_id}', [TrackController::class, 'viewTrack']);

Route::get('/{user_id}/profile', [Controller::class, 'viewProfile']);
