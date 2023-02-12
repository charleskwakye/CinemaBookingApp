<?php

use App\Http\Livewire\Admin\Movies;
use App\Http\Livewire\Cinema;
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

//Route::get('/', function () {
//    return view('home');
//});
//TODO remember to delete test picture and also csv from folder test
Route::view('/', 'home') -> name('home');
Route::view('/welcome', 'welcome') -> name('welcome');
Route::get('/cinema',Cinema::class)->name('cinema');



Route::middleware(['auth','admin','active'])->prefix('admin')->name('admin.')->group(function () {
    Route::redirect('/', '/admin/movies');
    Route::get('movies', Movies::class)->name('movies');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
    'active'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
